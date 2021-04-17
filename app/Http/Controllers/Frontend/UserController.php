<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
//use File;

class UserController extends Controller
{
    public function myprofile()
    {
        return view('profile');
    }

    public function profileupdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->postcode = $request->input('postcode');
        $user->phone = $request->input('phone');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/profile/'.$user->image;
            if(File::exists($destination)){
                File::delete($destination);

            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalNameExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/profile/', $filename);
            $user->image = $filename;
        }

        $user->update();
        return redirect()->back()->with('status','Profile Updated');

    }
}