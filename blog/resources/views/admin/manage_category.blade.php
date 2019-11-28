@extends('layouts.app')
@section('title')
    Manage Products Category
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Products Category</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID NO</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @php($i = 1)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->type }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->status == 1 ? 'Published':'Unpublished' }}
                            <a href="{{ route('action', ['id' => $category->id]) }}" class="btn btn-info">Change</a>
                            </td>
                            <td>
                                <a href="{{ route('edit', ['id' => $category->id]) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('delete', ['id' => $category->id]) }}" class="btn btn-warning mt-2">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
