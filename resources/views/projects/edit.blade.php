@extends('layout')

@section('content')
  <h1>Edit Project</h1>

  <form class="" action="/projects/{{ $project->id }}" method="post">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input class="input" id="title" name="title" type="text" value="{{ $project->title }}" placeholder="Title">
      </div>

    </div>

    <div class="field">
      <label class="label" for="description">Description</label>
      <div class="control">
        <textarea class="input" name="description" rows="8" cols="80" placeholder="Description">{{ $project->description }}</textarea>
      </div>

    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-primary">Update Project</button>
      </div>

    </div>

  </form>

  <form class="" action="/projects/{{ $project->id }}" method="post" style="margin-top:1em;">
    @method('DELETE')
    @csrf

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-danger">Delete Project</button>
      </div>

    </div>
  </form>

@endsection
