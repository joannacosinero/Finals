@extends('base')
@section('content')

<div class="modal fade" id="deleteInstructorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteInstructorModalLabel">Delete Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['url'=>'/instructors', 'method'=>'delete']) !!}
      <div class="modal-body">
        Are you sure you want to delete this instructor?
        {{ Form::hidden('instructor_id', $instructor->id)}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete Instructor</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

    <h1>Update Instructor {{$instructor->user->lname}}, {{$instructor->user->fname}}</h1>

    <div class="row">
        <div class="col-md-5">
            
            {!! Form::model($instructor, ['url'=>"/instructors/$instructor->id", 'method'=>'patch'])  !!}

                @include('instructors._form')
                <div class="form-group">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteInstructorModal">
                    Delete
                </button>
                    <button class="btn btn-primary float-right">
                        Update Instructor
                    </button>
                </div>

            {!! Form::close() !!}

        </div>
        <div class="col-md-7">
                @include('errors')
        </div>
    
    </div>

@endsection    
