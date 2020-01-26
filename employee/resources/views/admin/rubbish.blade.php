@extends('layouts.app')
@section('content')
    <div class="container">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Employee</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display responsive nowrap" id="dataTable" width="100%">
                        <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>Designation</th>
                            <th>Membership</th>
                            <th>Salary</th>
                            <th>Photo</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Postcode</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>Designation</th>
                            <th>Membership</th>
                            <th>Salary</th>
                            <th>Photo</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Postcode</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($i = 1)
                        @foreach($employTrashed as $employer)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $employer->first_name.' '.$employer->last_name }}</td>
                                <td>{{ ($employer->gender == 1)? 'Male':'Female' }}</td>
                                <td>{{ $employer->email }}</td>
                                <td>{{ $employer->date_of_birth }}</td>
                                <td>{{ $employer->designation }}</td>
                                <td>{{ $employer->membership }}</td>
                                <td>{{ $employer->salary }}</td>
                                <td>
                                    <img src="{{ asset('uploads/employeePic/'.$employer->photo) }}" width="100"/>
                                </td>
                                <td>{{ $employer->address }}</td>
                                <td>{{ $employer->mobile }}</td>
                                <td>{{ $employer->postcode }}</td>e
                                <td>{{ $employer->city }}</td>
                                <td>{{ $employer->country }}</td>
                                <td>
                                    <button class="btn btn-info" onclick="event.preventDefault();
                                                     document.getElementById('restore{{ $employer->id }}').submit();">Restore</button>
                                    <form id="restore{{ $employer->id }}" action="{{ route('restore') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $employer->id }}">
                                    </form>
                                    <button value="{{ $employer->id }}" class="btn btn-danger mt-2 deleteEmploy" data-toggle="modal" data-target="#deleteModal">Delete</button>
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

@section('modal')
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete Row!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are You Sure Delete This Row?</p>
                    <form action="{{ route('permanentlyDelete') }}" method="post">
                        @csrf
                        <input type="hidden" id="deleteId" name="id" value="">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.deleteEmploy').click(function () {
                var id = $(this).val();
                $('#deleteId').val(id);
            });
        });
    </script>
@endsection
