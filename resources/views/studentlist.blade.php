@extends("layouts.app")
@section("title","Edit Marks")
@section("content")
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student List</h4>
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
                            @php($sl=1)                          
                            @foreach($students as $student)
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td>{{ $student->name }}</a></td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->teacher->name }}</td>
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
                    <div class="float-right">      
                        <a href="/create" class="btn btn-success">Add Student</a>
                        <a href="/markList" class="btn btn-success">Mark List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection