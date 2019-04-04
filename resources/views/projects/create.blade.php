@extends('layout')

@section('content')
  <h1>Create Form</h1>

  <form class="" action="/projects" method="post">

    {{ csrf_field() }}

    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input class="input{{ $errors->has('title') ? ' is-danger' : '' }}" id="title" name="title" type="text" value="{{ old('title') }}" placeholder="Title" required>
      </div>
      <p class="help">Input title here</p>
    </div>

    <div class="field">
      <label class="label" for="description">Description</label>
      <div class="control">
        <textarea class="input{{ $errors->has('description') ? ' is-danger' : '' }}" name="description" rows="8" cols="80" placeholder="Description" required>{{ old('description') }}</textarea>
      </div>
      <p class="help">Put some description</p>
    </div>

    <div class="field">
      <div class="control">
        <button class="button is-primary">Create Project</button>
      </div>
    </div>

    @include('errors')

  </form>
@endsection
