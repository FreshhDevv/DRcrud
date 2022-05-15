@extends('student.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>DR CRUD</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('student.add') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Student
                    </a>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Class</th>
                                <th scope="col">Email</th>
                                <th scope="col">Number</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>Class {{ $student->class->class }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->number }}</td>
                                <td>
                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i>Edit</a>
                                    <a href="" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i>Delete</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-3">
            <div class="card">
                <form method="post" action="{{ route('class.store') }}">
                    @csrf
                    <div class="card-header">
                        <h2>Add Class</h2>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="class" placeholder="Class">
                            <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-success  mt-5 mb-5" value="Add Class">
        </div>
                            @error('class')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    



                    </div>
                </form>

            </div>
        </div>
    </div>
</div>