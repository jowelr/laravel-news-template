@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <hr/>
            <div class="well">
                @if($message = Session::get('message'))
                    <h1 class="text-center text-success">{{ $message }}</h1>
                    <hr/>
                @endif
                <form class="form-horizontal" action="{{ url('/social/new') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-3">Facebook</label>
                        <div class="col-sm-9">
                            <input type="text" name="facebook_" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Twitter</label>
                        <div class="col-sm-9">
                            <input type="text" name="twitter" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Google+</label>
                        <div class="col-sm-9">
                            <input type="text" name="google_plus" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Pinterest</label>
                        <div class="col-sm-9">
                            <input type="text" name="pinterest" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Instagram</label>
                        <div class="col-sm-9">
                            <input type="text" name="instagram" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Linkedin</label>
                        <div class="col-sm-9">
                            <input type="text" name="linkedin" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Youtube</label>
                        <div class="col-sm-9">
                            <input type="text" name="youtube" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save"/>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection