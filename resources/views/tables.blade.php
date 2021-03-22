@extends('layouts.master')
@yield('title','tables')
@section('navType')
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
@endsection
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <button type="button" onclick="location.href = '{{ url('addRecord') }}';" data-toggle="modal" data-target="#Add_record" aria-expanded="false" class="btn btn-info edit_data" title="Add Record" id="9"><i class="fa fa-plus" aria-hidden="true"></i>
                    
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Student Records
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roll No</th>
                                <th>Age</th>
                                <th>Join date</th>
                                <th>Fees</th>
                                <th>Action</th>    
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roll No</th>
                                <th>Age</th>
                                <th>Join date</th>
                                <th>Fees</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($students as $student)

                          <tr>
                                <td>{{$student->studentName}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->rollNo}}</td>
                                <td>{{$student->age}}</td>
                                <td>{{$student->joinDate}}</td>
                                <td>{{$student->fees}}</td>
                                <td class="text-center">
                                    <button onclick="location.href = '{{ url('Edit') }}/{{ $student->id }}';" type="button" data-toggle="modal" data-target="#edit_record" aria-expanded="false" class="btn btn-info edit_data" title="Edit Record" id="8"><i class="fa fa-edit"></i></button> 
                                    <button onclick="location.href = '{{ url('Delete') }}/{{ $student->id }}';" type="button" data-toggle="modal" data-target="#delete_record" aria-expanded="false" class="btn btn-danger delete_data"  title="Delete record" id="10"><i class="fa fa-trash-alt"></i></button></td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection