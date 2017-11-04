@extends('admin.master')

@section('content')
    @extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <hr/>
            <div class="well">
                <table class="table table-bordered table">
                    <tr>
                        <th>Contact Id</th>
                        <th>Sender Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->fname}}</td>
                            <td>{{ $contact->email}}</td>
                            <td>{{ $contact->phone}}</td>
                            <td>{{ $contact->message}}</td>
                            <td>
                                <a href="{{ url('/contact-message/delete/'.$contact->id) }}" class="btn btn-danger btn-xs" title="Delete Contact Us Message" onclick="return confirm('Are you sure to delete this'); ">
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
