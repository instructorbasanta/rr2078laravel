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
                   @include('includes.flash_message')
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Email</th>
                            <th>Passout Key</th>
                            <th>Action</th>
                        </tr>
                        @foreach($students as $key=> $student)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->roll_no}}</td>
                                <td>{{$student->email}}</td>
                                <td>
                                    @include('backend.student.check_passout_status',['passout_key' => $student->passout_key])
                                </td>
                                <td>
                                    <a href="{{route('backend.student.show',$student->id)}}" class="btn btn-primary">View</a>
                                    <a href="{{route('backend.student.edit',$student->id)}}" class="btn btn-warning">Edit</a>

                                    <form style="display: inline-block" method="post" action="{{route('backend.student.destroy',$student->id)}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
