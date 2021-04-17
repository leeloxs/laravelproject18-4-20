@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Donate now!</h3>
                    </div>
                    <div class="card-body">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                   
                        <form method="POST" action="{{ route('contact-form.store') }}">
                  
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <strong>Charity</strong>
                                        <input type="text" name="charity" class="form-control" placeholder="Children or low-income families" value="{{ old('charity') }}">
                                        @if ($errors->has('charity'))
                                            <span class="text-danger">{{ $errors->first('charity') }}</span>
                                        @endif
                                    </div>
                                </div>
                               <label for="fname">  &ensp; Accepted Cards  &ensp; </label>
                                     <div class="icon-container">
                                     <i class="fa fa-cc-visa" style="color:navy;"></i>
                                     <i class="fa fa-cc-amex" style="color:blue;"></i>
                                     <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                     <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Amount</strong>
                                        <input type="text" name="amount" class="form-control" placeholder="Example. 50RM, 100RM" value="{{ old('amount') }}">
                                        @if ($errors->has('amount'))
                                            <span class="text-danger">{{ $errors->first('amount') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Card number</strong>
                                        <input type="text" name="card" class="form-control" placeholder="1111-2222-3333.." value="{{ old('card') }}">
                                        @if ($errors->has('card'))
                                            <span class="text-danger">{{ $errors->first('card') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Expiry month</strong>
                                        <input type="text" name="expiry" class="form-control" placeholder="Example. September" value="{{ old('expiry') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Expiry year</strong>
                                        <input type="text" name="expiryyear" class="form-control" placeholder="2018 etc." value="{{ old('expiryyear') }}">
                                        @if ($errors->has('expiryyear'))
                                            <span class="text-danger">{{ $errors->first('expiryyear') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>CVV</strong>
                                        <input type="text" name="cvv" class="form-control" placeholder="254 etc." value="{{ old('cvv') }}">
                                        @if ($errors->has('cvv'))
                                            <span class="text-danger">{{ $errors->first('cvv') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>City</strong>
                                        <input type="text" name="city" class="form-control" placeholder="Kuala lumpur etc." value="{{ old('city') }}">
                                        @if ($errors->has('city'))
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                  
                   
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Donate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection