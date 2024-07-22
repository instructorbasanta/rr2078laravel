@extends('layouts.backend_master')
@section('title','Student Details')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Student Management</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    Student Detail
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>ID</th>
                            <td>{{$student->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$student->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$student->email}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$student->address}}</td>
                        </tr>
                        <tr>
                            <th>Temp. Address</th>
                            <td>{{$student->temp_address}}</td>
                        </tr>
                        <tr>
                            <th>Passout Status</th>
                            <td>@include('backend.student.check_passout_status',['passout_key' => $student->passout_key])</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
