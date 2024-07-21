@extends('layouts.backend_master')
@section('title','List Student')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Student Management</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    List of students
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Temp. Address</th>
                            <th>Passout Key</th>
                        </tr>
                        @foreach($students as $key=> $student)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->roll_no}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->address}}</td>
                                <td>{{$student->temp_address}}</td>
                                <td>{{$student->passout_key}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
