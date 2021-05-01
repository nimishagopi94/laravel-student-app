@extends("layouts.app")
@section("title","Edit Marks")
@section("page-content")
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3> Edit Marks </h3>
                </div>
                <div class="card-body">
                    
                   
                    <form action="/saveMark/{{ $marks->id }}" method="post">
                       
                        @csrf
                        <div class="form-group">                           
                            <label for="student">Student</label>
                            <select name="studentid" class="form-control" id="studentid">
                            <option value="">Select Youre Name</option>
                            @foreach($studentSelect as $student)
                            <option value="{{ $student->id }}" @if( $marks->student_id==$student->id ) selected  @endif >{{ $student->name }}</option>                           
                            @endforeach
                            </select>                                            
                        </div>
                        <div class="form-group">
                            <label for="term">Term</label>
                            <select name="term" class="form-control" id="term">
                            @foreach(["One" => "One", "Two" => "Two"] AS $terms => $term)    
                            <option value="{{ $term }}" {{ ($marks->term) == $term ? "selected" : "" }}>{{ $term }}</option>
                            @endforeach                            
                            </select>  
                        </div>
                        <div class="form-group">
                            <label for="maths"> Maths </label>
                            <input type="text" class="form-control" name="maths" id="maths" value="{{ $marks->maths }}" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label for="science"> Science </label>
                            <input type="text" class="form-control" name="science" id="science" value="{{ $marks->science }}" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label for="history"> History </label>
                            <input type="text" value="{{ $marks->history }}"  class="form-control" name="history" id="history" placeholder="Enter Marks">
                        </div>   
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="/markList" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection