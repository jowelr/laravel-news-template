@extends('front.master')
@section('content')
<div class="account-page-area">
    <div class="container">
        <div class="row">
            @if(Session::get('authorId'))
                <h2 class="text text-success">Hurrah! {{ Session::get('authorName') }}</h2>  <h3 class="text text-success">You have successfully Logged-In. Go back to <a href="{{ url('/') }}">Home</a></h3>
            @else
            @if($message = Session::get('message'))
                 <h1 class="text-center text-success">{{ $message }}</h1>
            @endif
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="border">
                    <form action="{{ url('/author-login-check') }}" method="POST">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="row">
                                <h3>Login</h3>
                                <div class="form-group">
                                    <label>Email address *</label>
                                    <input name="author_email" class="form-control" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input class="form-control" name="author_password" required="" type="pass">
                                </div>
                                <div class="form-group btn-register">
                                    <div class="form-group btn-register">
                                        <input class="btn-send"type="submit" value="Login" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="border register margin-null">
                    <form action="{{ url('/new-author') }}" method="POST">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="row">
                                <h3>Register</h3>
                                <div class="form-group">
                                    <label>Name </label>
                                    <input class="form-control" name="author_name">
                                    <span style="color: red;">{{ $errors->has('author_name') ? $errors->first('author_name') : ' '}}</span>

                                </div>

                                <div class="form-group">
                                    <label>Username * </label>
                                    <input class="form-control" name="author_username" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email address *</label>
                                    <input class="form-control" name="author_email" type="text">
                                    <span style="color: red;">{{ $errors->has('author_email') ? $errors->first('author_email') : ' '}}</span>
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input class="form-control" name="author_password" type="pass">
                                    <span style="color: red;">{{ $errors->has('author_password') ? $errors->first('author_password') : ' '}}</span>
                                </div>
                                <div class="form-group btn-register">
                                    <input class="btn-send"type="submit" value="Register" />
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
                @endif
        </div>
    </div>
</div>
@endsection