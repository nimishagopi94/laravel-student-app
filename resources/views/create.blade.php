@extends("layouts.app")
@section("title","Create Student")
@section("content")
 <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Create Student</h3>
                </div>
                <div class="card-body">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $message)
                                {{ $message }} <br>
                            @endforeach
                        </div>
                    @endif
                    <form action="/save" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="firstname">Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="age"> Age </label>
                            <input type="Number" class="form-control" name="age" id="lastName" placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                            </select>  
                        </div>
                        <div class="form-group">
                            <label for="teacher">Teacher</label>
                            <select name="teacher" class="form-control" id="gender">
                            <option value="">Select Youre Teacher</option>
                            <option value="1">Teacher1</option>
                            <option value="2">Teacher2</option>
                            <option value="3">Teacher3</option>
                            </select>  
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="/studentlist" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection