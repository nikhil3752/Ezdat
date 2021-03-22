@extends('layouts.master')
@section('title', 'index')
@section('navType')
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    @endsection
    @section('content')
        <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">

            <h1 class="text-center">Create New Post</h1>

            <div class="container">
                @if (Session::has('Post_Updated'))
                    <div class='alert alert-success' role='alert'>
                        {{ Session::get('Post_Updated') }}
                    </div>
                @endif

                <form method="POST" action={{ route('StudentPostController.updateRecord') }} enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $student->id }}">
                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" class="form-control" name="studentName" value="{{ $student->studentName }}">
                        @error('studentName')
                            <span class="text-danger">Student name is required</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label><input type="text" class="form-control" name="email"
                            value="{{ $student->email }}">

                        @error('email')
                            <span class="text-danger">Email is required</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" value="{{ $student->age }}">
                        @error('age')
                            <span class="text-danger">Age is required</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Roll No</label>
                        <input type="text" class="form-control" name="rollNo" value="{{ $student->rollNo }}">
                        @error('rollNo')
                            <span class="text-danger">Roll No is required</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Join Date</label>
                        <input type="date" class="form-control" name="joinDate" value="{{ $student->joinDate }}">
                        @error('joinDate')
                            <span class="text-danger">Join Date is required</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Fees</label>
                        <input type="text" class="form-control" name="fees" value="{{ $student->fees }}">
                        @error('fees')
                            <span class="text-danger">Fees is required</span>
                        @enderror
                    </div>

                    <div>

                        <input type="submit" value="Upload Data">

                    </div>

                </form>
            </div>
        @endsection
