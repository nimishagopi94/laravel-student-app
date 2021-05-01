@extends("layouts.app")
@section("title","Edit Student")
@section("content")
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Student</h3>
                </div>
                <div class="card-body">                    
                    <form action="/updateStudent/{{ $student->id }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Name"> Name </label>
                            <input type="text" class="form-control" value="{{ $student->name }}" name="firstname" id="firstname" placeholder="Enter Name">                            
                        </div>
                        <div class="form-group">
                            <label for="age"> Age </label>
                            <input type="text" class="form-control" value="{{ $student->age }}" name="age" id="age" placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label for="txtPlace">Gender</label>
                            <select name="gender" class="form-control" id="gender">
                            @foreach(["Male" => "Male", "Female" => "Female", "Others" => "Others"] AS $genders => $gender)    
                            <option value="{{ $gender }}" {{ ($student->gender) == $gender ? "selected" : "" }}>{{ $gender }}</option>
                            @endforeach                              
                            </select>  
                        </div>
                        <div class="form-group">
                            <label for="txtPlace">Teacher</label>
                            <select name="teacher" class="form-control" id="teacher">
                            @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" @if( $teacher->id==$student->teacher_id ) selected  @endif >{{ $teacher->name }}</option>                           
                            @endforeach
                            </select>
                        </div>                        
                 <div class="card-footer">
                    <div class="float-left">
                        <a href="/studentlist" class="btn btn-primary">Go Back</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-save"> Update</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection