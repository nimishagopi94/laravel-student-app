@extends("layouts.app")
@section("title","Edit Marks")
@section("page-content")
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Students</h4>
                </div>
                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Teacher</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>                           
                        @if(count($students)>0)                            
                            @foreach($students as $student)
                            <tr>
                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</a></td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->teacher }}</td>
                                <td><a href="/editStudent/{{ $student->id }}">Edit/<a href="/deleteStudent/{{ $student->id }}">Delete</a></td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                        <td colspan="6">No Records</td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                    <div>
                        <a href="/create" class="btn btn-success">Create</a>
                        <a href="/addMark" class="btn btn-success">Add Marks</a>
                        <a href="/markList" class="btn btn-success">Mark List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection