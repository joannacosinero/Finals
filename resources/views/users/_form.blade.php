<div class="form-group">
    {{Form::label('lname','Last Name')}}
    {{Form::text('lname',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('fname','First Name')}}
    {{Form::text('fname',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('email')}}
    {{Form::text('email',null,['class'=>'form-control'])}}
</div>
@if(!isset($user))
<div class="form-group">
    {{Form::label('password')}}
    {{Form::password('password',['class'=>'form-control'])}}
</div>
@endif