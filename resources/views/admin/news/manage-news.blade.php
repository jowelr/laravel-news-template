@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <hr/>
            <div class="well">
                <table class="table table-bordered table">
                    <tr>
                        <th>SL No</th>
                        <th>News Title</th>
                        <th>Category Name</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php ($i=1)
                    @foreach($allNewses as $allNews)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $allNews->news_title }}</td>
                            <td>{{ $allNews->category_name}}</td>
                            <td>{{ $allNews->publication_status==1 ? 'Publised' : 'Unpublised'}}</td>
                            <td>
                                <a href="{{ url('/news/view/'.$allNews->id) }}" class="btn btn-info btn-xs" title="View News">
                                    <span class="glyphicon glyphicon-search"></span>
                                </a>
                                @if ($allNews->publication_status==1)
                                <a href="{{ url('/news/unpublished/'.$allNews->id) }}" class="btn btn-success btn-xs" title="Published News">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else
                                <a href="{{ url('/news/published/'.$allNews->id) }}" class="btn btn-warning btn-xs" title="Published News">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @endif
                                <a href="{{ url('/news/edit/'.$allNews->id) }}" class="btn btn-primary btn-xs" title="Edit News">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                                            <a href="{{ url('/news/delete/'.$allNews->id) }}" class="btn btn-danger btn-xs" title="Delete News" onclick="return confirm('Are you sure to delete this'); ">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $allNewses->links() }}
            </div>
        </div>
    </div>
@endsection