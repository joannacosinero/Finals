@extends('base')
@section('content')

    <h1>Update User {{$user->lname}}, {{$user->fname}}</h1>

    <div class="row">
        <div class="col-md-5">
            
            {!! Form::model($user, ['url'=>"/users/$user->id", 'method'=>'patch'])  !!}

                @include('users._form')
                <div class="form-group">
                    <button class="btn btn-primary float-right">
                        Update User
                    </button>
                </div>

            {!! Form::close() !!}

        </div>
        <div class="col-md-7">
                @include('errors')
        </div>
    
    </div>

@endsection    