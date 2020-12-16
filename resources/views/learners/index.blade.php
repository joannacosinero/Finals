@extends('base')

@section('content')

@include('info')

<div class="float-right">
    <a href="{{ '/learners/create' }}" class="btn btn-primary">
        Add New Learner
    </a>
</div>
<h1>Learners</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach($learners as $ln)

        <tr>
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->status}}</td>
            <td><a href="{{url('/learners/edit', ['id'=>$ln])}}" class="btn btn-secondary btn-sm">...</a></td>
        </tr>

        @endforeach
    </tbody>
</table>



@endsection
