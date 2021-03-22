@extends('layouts.master')
@section('title', 'index')
@section('navType')
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    @endsection
    @section('content')
<div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">

    <h1 class="text-center">Create New Post</h1>

    <div class="container">
        @if (Session::has('post_created'))
            <div class='alert alert-success' role='alert'>
                {{ Session::get('post_created') }}
            </div>
        @endif
        <form method="POST" action={{ route('StudentPostController.submit') }}
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Student Name</label>
                <input type="text" class="form-control" name="studentName"
                    placeholder="Name">
                @error('studentName')
                    <span class="text-danger">Student name is required</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label><input type="text" class="form-control" name="email"
                placeholder="Email">

                @error('email')
                    <span class="text-danger">Email is required</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age" placeholder="Age">
                @error('age')
                    <span class="text-danger">Age is required</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Roll No</label>
                <input type="text" class="form-control" name="rollNo" placeholder="Roll No">
                @error('rollNo')
                    <span class="text-danger">Roll No is required</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Join Date</label>
                <input type="date" class="form-control" name="joinDate">
                @error('joinDate')
                    <span class="text-danger">Join Date is required</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Fees</label>
                <input type="text" class="form-control" name="fees" placeholder="Fees">
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