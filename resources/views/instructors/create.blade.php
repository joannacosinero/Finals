@extends('base')
@section('content')

    <h1>Create New Instructor</h1>

    <div class="row">
        <div class="col-md-5">
            
            {!! Form::open(['url'=>'/instructors', 'method'=>'post']) !!}

                @include('instructors._form')
                <div class="form-group">
                    <button class="btn btn-primary float-right">
                        Create Instructor
                    </button>
                </div>

            {!! Form::close() !!}

        </div>
        <div class="col-md-7">
           @include('errors');
        </div>
    
    </div>

@endsection    