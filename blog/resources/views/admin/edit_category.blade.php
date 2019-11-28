@extends('layouts.app')
@section('title')
    Manage Products Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                @if(session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Add a new Product Category</div>
                    <div class="card-body">
                        <form action="{{ route('edit_category') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="type" value="{{ $category->type }}">
                                    <input type="hidden" name="id" value="{{ $category->id }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Category Description</label>
                                <div class="col-md-9">
                                    <textarea rows="10" class="form-control" name="description">{{ $category->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" {{ ($category->status == 1)? 'checked':'' }} value="1" name="status">Published</label>
                                    <label><input type="radio" {{ ($category->status == 0)? 'checked':'' }} value="0" name="status">UnPublished</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
