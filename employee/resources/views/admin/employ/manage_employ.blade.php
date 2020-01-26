@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
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
                        @foreach($employers as $employer)
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
                                <td>{{ $employer->postcode }}</td>
                                <td>{{ $employer->city }}</td>
                                <td>{{ $employer->country }}</td>
                                <td>
                                    <button value="{{ $employer->id }}" class="btn btn-info editEmployBtn" data-toggle="modal" data-target="#editModal">Edit</button>
                                    <button value="{{ $employer->id }}" class="btn btn-warning mt-2 deleteEmploy" data-toggle="modal" data-target="#deleteModal">Delete</button>
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
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Employee Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-sample" action="{{ route('update') }}" method="post"enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="employId" value="">
                        <p class="card-description"> Employer info </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="firstName" name="first_name" class="form-control" value=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="lastName" name="last_name" class="form-control" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select name="gender" class="form-control">
                                            <option id="male" value="1">Male</option>
                                            <option id="female"  value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="dateOfBirth" class="form-control" name="date_of_birth" placeholder="dd/mm/yyyy" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Designation</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="desig" class="form-control" name="designation" placeholder="Chief Executive Officer" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Membership</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membership" id="free" value="free"> Free </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membership" id="pro" value="pro"> Professional </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Monthly Salary</label>
                                    <input type="text" id="salary" name="salary" class="form-control"  placeholder="$7000.00" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="photo" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description"> Address </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="address" name="address" class="form-control" value=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" id="email" name="email" class="form-control" value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="mobile" name="mobile" class="form-control" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Postcode</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="postcode" name="postcode" class="form-control" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="city" name="city" class="form-control" value=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <select name="country" class="form-control">
                                            <option id="America" value="America">America</option>
                                            <option id="Italy" value="Italy">Italy</option>
                                            <option id="Russia" value="Russia">Russia</option>
                                            <option id="Britain" value="Britain">Britain</option>
                                            <option id="Bangladesh" value="Bangladesh">Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    {{--Delete modal--}}
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
                    <form action="{{ route('delete') }}" method="post">
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
            $('.editEmployBtn').click(function() {
                var id = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'post',
                    url:'/edit/employee/info/',
                    data: {id : id},
                    success: function (data) {
                        $('#firstName').val(data['first_name']);
                        $('#lastName').val(data['last_name']);
                        $('#dateOfBirth').val(data['date_of_birth']);
                        $('#desig').val(data['designation']);
                        $('#salary').val(data['salary']);
                        $('#address').val(data['address']);
                        $('#email').val(data['email']);
                        $('#mobile').val(data['mobile']);
                        $('#postcode').val(data['postcode']);
                        $('#city').val(data['city']);
                        $('#employId').val(data['id']);
                        if (data['gender'] == 1){
                            $('#male').attr('selected', 'selected');
                        }else {
                            $('#female').attr('selected', 'selected');
                        }
                        if (data['membership'] == 'free'){
                            $('#free').attr('checked', 'checked');
                        }else {
                            $('#pro').attr('checked', 'checked');
                        }

                        var country = ['America', 'Italy', 'Russia', 'Britain', 'Bangladesh'];
                        country.forEach(myFunction);
                        function myFunction(value) {
                            if (data['country'] == value){
                                $('#'+value).attr('selected', 'selected');
                            }
                        }
                    }
                });
            });

            $('.deleteEmploy').click(function () {
                var id = $(this).val();
                $('#deleteId').val(id);
            });
        });
    </script>
@endsection
