@extends('layouts.app')
 
@section('title')
My profile
@endsection

@section('content')
<head>
<title>My profile</title>
</head>
<section class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
           <div class="card">
            <div class="card-body">
             <h4>My Profile Page</h4>
             <hr>
             <form action="{{ url('myprofile-update') }}" method="POST" enctype="multipart/form-data">
             {{ csrf_field() }}
                <div class="row">
                   <div class="col-md-4">
                     <div class="form-group">
                       <label for="">First Name</label>
                       <input type="text" name="fname" class="form-control" value="{{ Auth::user()->fname}}">
                       </div>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group">
                       <label for="">Last Name</label>
                       <input type="text" name="lname" class="form-control" value="{{ Auth::user()->lame}}">
                       </div>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group">
                       <label for="">Email</label>
                       <input type="text" class="form-control" readonly value="{{ Auth::user()->email}}">
                       </div>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group">
                       <label for="">Address 1(Flat, Block, Apartment)</label>
                       <input type="text" name="address1" class="form-control" value="{{ Auth::user()->address1}}">
                       </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="">Address 2(Landmark, Nearby)</label>
                       <input type="text" name="address2" class="form-control" value="{{ Auth::user()->address2}}">
                       </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="">Post code</label>
                       <input type="text" name="postcode" class="form-control" value="{{ Auth::user()->Postcode}}">
                       </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="">Phone</label>
                       <input type="text" name="phone" class="form-control" value="{{ Auth::user()->Phone}}">
                       </div>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group">
                       <button type="submit" class="btn btn-primary">Update Profile</button>
                      </div>
                   </div>
                   <div class="col-md-4">
                      <input type="file" name="image" class="form-control"> <br>
                      <img name="image" src="{{ asset('img/prof.png') }}" class="w-75" alt="">
                       </div>
                   </div>

                </div>
         </div>
         </div>
        </div>
      </div>
  </div>

@endsection