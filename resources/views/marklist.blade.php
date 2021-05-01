@extends("layouts.app")
@section("title","Mark List")
@section("page-content")
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Mark List</h4>
                </div>
                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Maths</th>
                            <th scope="col">Science</th>
                            <th scope="col">History</th>
                            <th scope="col">Term</th>
                            <th scope="col">Total marks</th>
                            <th scope="col">Created On</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($marks)>0) 
                        @foreach($marks as $mark)
                            <tr>
                                <th scope="row">{{ $mark->id }}</th>
                                <td>{{ $mark->student->name }}</a></td>
                                <td>{{ $mark->maths }}</td>
                                <td>{{ $mark->science }}</td>
                                <td>{{ $mark->history }}</td>
                                <td>{{ $mark->term }}</td>
                                <td>{{ $mark->maths + $mark->science + $mark->history }} </td>
                                <td>{{ $mark->created_at }}</td>
                                <td><a href="/editMark/{{ $mark->id }}">Edit</a>/<a href="/deleteMarks/{{ $mark->id }}">Delete</a></td>
                            </tr>
                        @endforeach                        
                        @else
                        <tr>
                        <td colspan="9">No Records</td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                    <div class="float-right">                        
                        <a href="/addMark" class="btn btn-success">Add Marks</a>
                        <a href="/studentlist" class="btn btn-success">Student List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection