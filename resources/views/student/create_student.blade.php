@extends('student.layout')
@section('content')
<div class="container">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Class</label>
                <input type="text" class="form-control" placeholder="Class">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Number</label>
                <input type="text" class="form-control" placeholder="Number">
            </div>
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-success  mt-5 mb-5" value="Add New">
        </div>


</div>


</form>
</div>