@extends('student.layout')
@section('content')
<div class="container">
    <form method="post" action="{{ route('student.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Class</label>
                <select class="form-control" name="">

                </select>
                @error('class')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Number</label>
                <input type="text" class="form-control" name="number" placeholder="Number">
                @error('number')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-success  mt-5 mb-5" value="Add New">
        </div>


</div>


</form>
</div>