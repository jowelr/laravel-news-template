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
                <form name="editCategoryForm" class="form-horizontal" action="{{ url('/user/update') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-3">Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $authorById->author_name }}" name="author_name" class="form-control"/>
                            <input type="hidden" value="{{ $authorById->id }}" name="author_id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Username </label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $authorById->author_username }}" name="author_username" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email Address </label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $authorById->author_email }}" name="author_email" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Password </label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $authorById->author_password }}" name="author_password" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update User Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection