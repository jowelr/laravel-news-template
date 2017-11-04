@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if($message = Session::get('message'))
                <h1 class="text text-success text-center"> {{ $message }}</h1>
                @endif
            <hr/>
            <div class="well">
                <table class="table table-bordered table">
                    <tr>
                        <th>SL No</th>
                        <th>Author Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @php ($i=1)
                    @foreach($authors as $author)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $author->author_name }}</td>
                            <td>{{ $author->author_username}}</td>
                            <td>{{ $author->author_email}}</td>

                            <td>
                                <a href="{{ url('/author/edit/'.$author->id) }}" class="btn btn-primary btn-xs" title="Edit Author">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('/author/delete/'.$author->id) }}" class="btn btn-danger btn-xs" title="Delete Author" onclick="return confirm('Are you sure to delete this'); ">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection