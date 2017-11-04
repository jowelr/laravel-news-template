@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <hr/>
            <div class="well">
                @if($message = Session::get('message'))
                    <h1 class="text-center text-success">{{ $message }}</h1>
                    <hr/>
                @endif
                <form class="form-horizontal" action="{{ url('/author/new') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-3">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="author_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Username *</label>
                        <div class="col-sm-9">
                            <input type="text" name="author_username" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email address *</label>
                        <div class="col-sm-9">
                            <input type="text" name="author_email" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Password</label>
                        <div class="col-sm-9">
                            <input type="text" name="author_password" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save User Info"/>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection