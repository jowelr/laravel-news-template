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
                <form name="editNewsForm" class="form-horizontal" action="{{ url('/news/update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-3">News Title</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $newsById-> news_title }}" name="news_title" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('news_title') ? $errors->first('news_title') : '' }}</span>
                            <input type="hidden" value="{{ $newsById-> id }}"name="news_id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id">
                                <option>---Select Category Name---</option>
                                @foreach($publishedCategories as $publishedCategory)
                                    <option value="{{ $publishedCategory->id }}">{{ $publishedCategory->category_name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">News Description</label>
                        <div class="col-sm-9">
                            <textarea id="news" name="news_description" class="form-control" style="resize: vertical;" rows="15"> {{ $newsById-> news_description }} </textarea>
                            <span class="text-danger">{{ $errors->has('news_description') ? $errors->first('news_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">News Image</label>
                        <div class="col-sm-9">
                            <input type="file" value="{{ $newsById-> news_image }}" name="news_image" accept="image/*"/>
                            <img src="{{ asset('').$newsById-> news_image }}" width="60" height="60"/>
                            <span class="text-danger">{{ $errors->has('news_image') ? $errors->first('news_image') : '' }}</span>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update News Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editNewsForm'].elements['publication_status'].value = '{{ $newsById->publication_status }}';
        document.forms['editNewsForm'].elements['category_id'].value = '{{ $newsById->category_id }}';
    </script>
@endsection