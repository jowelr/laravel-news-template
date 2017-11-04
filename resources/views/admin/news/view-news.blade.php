@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <hr/>
            <div class="well">
                <table class="table table-bordered table">
                    <tr>
                        <th>News Id</th>
                        <th>News Title</th>
                        <th>Category Name</th>
                        <th>News Description</th>
                        <th>News Image</th>
                        <th>Publication Status</th>
                    </tr>
                    <tr>
                         <td>{{ $newsById->id }}</td>
                         <td>{{ $newsById->news_title }}</td>
                          <td>{{ $newsById->category_name }}</td>
                          <td>{{ $newsById->news_description }}</td>
                          <td><img src="{{ asset('').$newsById-> news_image }}" width="60" height="60"/></td>
                          <td>{{ $newsById->publication_status==1 ? 'publised' : 'unpublished' }}</td>
                 </table>
             </div>
        </div>
    </div>
@endsection