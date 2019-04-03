@extends('layout')

@section('content')
  <h1>Create Form</h1>

  <form class="" action="/projects" method="post">

    {{ csrf_field() }}

    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input class="input" id="title" name="title" type="text" value="" placeholder="Title">
      </div>
      <p class="help">Input title here</p>
    </div>

    <div class="field">
      <label class="label" for="description">Description</label>
      <div class="control">
        <textarea class="input" name="description" rows="8" cols="80" placeholder="Description"></textarea>
      </div>
      <p class="help">Put some description</p>
    </div>

    <div class="field">
      <div class="control">
        <button class="button is-primary">Create Project</button>
      </div>
    </div>

  </form>
@endsection
