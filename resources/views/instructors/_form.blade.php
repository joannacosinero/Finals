<div class="form-group">
    {{Form::label('user_id','Select User')}}
    {{Form::select('user_id', \App\User::list(), null, ['class'=>'form-control', 'placeholder'=>'Select user'])}}
</div>
<div class="form-group">
    {{Form::label('aoe','Expertise')}}
    {{Form::text('aoe',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('rating','Rating')}}
    {{Form::select('rating',[
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
    ],null,['class'=>'form-control', 'placeholder'=>''])}}
</div>
