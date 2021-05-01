@extends("layouts.app")
@section("title","Add Marks")
@section("content")
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3> Add Marks </h3>
                </div>
                <div class="card-body">
                    
                   
                    <form action="/saveMark" method="post">
                       
                        @csrf
                        <div class="form-group">                           
                            <label for="student">Student</label>
                            <select name="studentid" class="form-control" id="studentid">
                            <option value="">Select Youre Name</option>
                            @foreach($studentSelect as $student)
                            <option value="{{ $student->id }}" >{{ $student->name }}</option>                           
                            @endforeach
                            </select>                                            
                        </div>
                        <div class="form-group">
                            <label for="term">Term</label>
                            <select name="term" class="form-control" id="term">
                            <option value="One">One</option>
                            <option value="Two">Two</option>
                            </select>  
                        </div>
                        <div class="form-group">
                            <label for="maths"> Maths </label>
                            <input type="text" class="form-control" name="maths" id="maths" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label for="science"> Science </label>
                            <input type="text" class="form-control" name="science" id="science" placeholder="Enter Marks">
                        </div>
                        <div class="form-group">
                            <label for="history"> History </label>
                            <input type="text" class="form-control" name="history" id="history" placeholder="Enter Marks">
                        </div>
                </div>
                <div class="card-footer">
                    <div class="float-left">
                        <a href="/studentlist" class="btn btn-primary">Go Back</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-save">  Save</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection