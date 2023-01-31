@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="py-4">
        <h1>{{ $project->project_name }}</h1>
        <div class="mt-4">
            @if($project->cover_image)
             <img class="w-25" src="{{ asset("storage/$project->cover_image")}}" alt="{{$project->project_name}}">
            @endif
            {{ $project->summary }}
        </div>
    </div>
</div>
@endsection