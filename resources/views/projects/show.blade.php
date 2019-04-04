@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
      {{ $project->description }}

    </div>

    <p>
      <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>

    @if ($project->tasks->count())
      <div class="box">
        @foreach ($project->tasks as $task)
          <div>
            <form class="" action="/completed-tasks/{{ $task->id }}" method="post">
              @if ($task->completed)
                @method('DELETE')
              @endif
              @csrf
              <label class="checkbox{{ $task->completed ? ' is-complete' : ''}}" for="completed">
                <input type="checkbox" name="completed" value="" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                {{ $task->description }}
              </label>
            </form>
          </div>
        @endforeach
      </div>
    @endif

    {{-- ad na new task form --}}
    <form class="box" action="/projects/{{ $project->id }}/tasks" method="post">
      @csrf

      <div class="field">
        <label class="label" for="description">New Task</label>
        <div class="control">
          <input class="input" id="description" name="description" type="text" value="" placeholder="New Task">
        </div>
      </div>

      <div class="field">
        <div class="control">
          <button type="submit" class="button is-primary" name="button">Add Task</button>
        </div>
      </div>

      @include('errors')
    </form>

@endsection
