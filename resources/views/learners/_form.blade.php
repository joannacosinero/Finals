<div class="form-group">
    {{ Form::label('user_id', 'Select User') }}
    {{ Form::select('user_id', \App\User::list(), null, ['class'=>'form-control', 'placeholder'=>'Select User']) }}
</div>

<div class="form-group">
    {{ Form::label('level', 'Level') }}
    {{ Form::select('level',[
        'novice' => 'Novice',
        'intermediate' => 'Intermediate',
        'advanced' => 'Advanced'
    ], null, ['class'=>'form-control ', 'placeholder'=>'Select Level    ']) }}
</div>

<div class="form-group">
    {{ Form::label('status', 'Status') }}
    {{ Form::select('status',[
        'inactive' => "Inactive",
        'active' => "Active",
        'suspended' => "Suspended"
    ], null, ['class'=>'form-control', 'placeholder'=>'Select Status']) }}
</div>