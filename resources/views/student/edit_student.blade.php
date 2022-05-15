@extends('student.layout')
@section('content')
<div class="container">
    <form method="post" action="{{ route('student.update', $student->id) }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            
            <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Number</label>
                <input type="text" class="form-control" name="number" value="{{ $student->number }}">
                @error('number')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-info  mt-5 mb-5" value="Update">
        </div>


</div>


</form>
</div>