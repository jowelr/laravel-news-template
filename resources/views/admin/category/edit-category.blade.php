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
                <form name="editCategoryForm" class="form-horizontal" action="{{ url('/category/update') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $categoryById->category_name }}" name="category_name" class="form-control"/>
                            <input type="hidden" value="{{ $categoryById->id }}" name="category_id" class="form-control"/>
                        </div>
                    </div><div class="form-group">
                        <label class="control-label col-sm-3">Category Description</label>
                        <div class="col-sm-9">
                            <textarea name="category_description" class="form-control" style="resize: vertical;">{{ $categoryById->category_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Publication status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="publication_status">
                                <option>---Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editCategoryForm'].elements['publication_status'].value = '{{ $categoryById->publication_status }}';
    </script>
@endsection