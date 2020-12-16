@extends('base')

@section('content')
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete Course - {{$course->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        {!! Form::open(["url" => "/courses/$course->id", 'method' => 'delete']) !!}
        <div class="modal-body">

            Are you sure you want to delete this course?
            {!! Form::hidden('course_id', $course->id) !!}

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete Course</button>
        </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

<h1>Edit Course</h1>
    <div class="row">
        <div class="col-md-5">
            {!! Form::model($course, ['url'=>"/courses/$course->id", 'method'=>'patch']) !!}

            @include('courses._form')

            <div class="form-group">

                <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#deleteModal">
                    Delete Course
                </button>

                <button class="btn btn-primary float-right  ">
                    Update Course
                </button>


            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection