@extends("layouts.app")
@section("title","Edit Student")
@section("content")
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3> Add Marks </h3>
                </div>
                <div class="card-body">
                    
                   
                        {{ Form::open(array('url' => '/saveMark')) }}
                       
                        @csrf
                        <div class="form-group">
                           
                            echo Form::label('student', 'Student');
                            echo Form::select('studentid', $studentSelect, array('class' => 'form-control'));
                                                      
                        </div>
                        <div class="form-group">
                            echo Form::label('term', 'Term');
                            echo Form::select('termid', array('One' => 'One', 'One' => 'Two'), array('class' => 'form-control'));
                        </div>
                        <div class="form-group">
                            echo Form::label('mathslabel', 'Maths');
                            echo Form::text('maths');
                        </div>
                        <div class="form-group">
                            echo Form::label('sciencelabel', 'Maths');
                            echo Form::text('science');
                        </div>
                        <div class="form-group">
                            echo Form::label('historylabel', 'Maths');
                            echo Form::text('history');
                        </div>                       
                        echo Form::submit('Submit',array('class' => 'btn btn-primary'));
                    {{ Form::close() }}
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