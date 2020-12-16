<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('description', 'Description')}}
    {{Form::text('description', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('start', 'Start Date')}}
    {{Form::date('start', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('end', 'End Date')}}
    {{Form::date('end', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('tags', 'Tags')}}
    {{Form::text('tags', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('instructor_id', 'Select Instructor')}}
    {{Form::select('instructor_id', \App\Instructor::list(), null, ['class'=>'form-control', 'placeholder'=>'Select Instructor'])}}
</div>
