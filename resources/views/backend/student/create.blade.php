@extends('layouts.backend_master')
@section('title','Create Student')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Student Management</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    Create Student
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{route('backend.student.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="roll_no">Roll No.</label>
                            <input type="text" name="roll_no" class="form-control" placeholder="Enter roll_no">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label for="temp_address">Address</label>
                            <input type="text" name="temp_address" class="form-control" placeholder="Enter temp_address">
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="file_photo" class="form-control" >
                            @error('file_photo')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="passout_key">Passout Status</label>
                            <input type="radio" name="passout_key" value="1"> Yes
                            <input type="radio" name="passout_key" value="0" checked> No
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save Student</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
