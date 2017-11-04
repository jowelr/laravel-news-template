@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <hr/>
            <div class="well">
                <table class="table table-bordered table">
                    <tr>
                        <th>Comment Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Comment</th>
                        <th>Action</th>
                    </tr>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->comment_name}}</td>
                            <td>{{ $comment->comment_email}}</td>
                            <td>{{ $comment->comment_website}}</td>
                            <td>{{ $comment->comment_message}}</td>
                            <td>
                                <a href="{{ url('/comment/delete/'.$comment->id) }}" class="btn btn-danger btn-xs" title="Delete News" onclick="return confirm('Are you sure to delete this'); ">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $comments->links() }}
            </div>
        </div>
    </div>
@endsection