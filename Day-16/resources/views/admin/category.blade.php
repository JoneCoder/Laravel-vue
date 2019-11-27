@extends('layouts.app')
@section('title')
    Add Products Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Add a new Product Category</div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Category Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" value="1" name="status">Published</label>
                                    <label><input type="radio" value="0" name="status">UnPublished</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
