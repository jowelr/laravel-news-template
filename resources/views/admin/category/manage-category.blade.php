@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <hr/>
            <div class="well">
                 <table class="table table-bordered table">
                    <tr>
                         <th>Category Id</th>
                         <th>Category Name</th>
                         <th>Category Description</th>
                         <th>Publication Status</th>
                         <th>Action</th>
                     </tr>
                     @foreach($allCategories as $allCategory)
                     <tr>
                         <td>{{ $allCategory->id }}</td>
                         <td>{{ $allCategory->category_name }}</td>
                         <td>{{ $allCategory->category_description }}</td>
                         <td>{{ $allCategory->publication_status }}</td>
                         <td>
                             <a href="{{ url('/category/edit/'.$allCategory->id) }}" class="btn btn-primary btn-xs" title="Edit Category">
                                 <span class="glyphicon glyphicon-edit"></span>
                             </a>
                             <a href="{{ url('/category/delete/'.$allCategory->id) }}" class="btn btn-danger btn-xs" title="Delete Category" onclick="return confirm('Are you sure to delete this'); ">
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