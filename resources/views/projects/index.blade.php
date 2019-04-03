@extends('./layout')

@section('title','Projects')

@section('content')
  <h1>Projects</h1>

  <div class="content">
    <a href="/projects/create">
      <button class="button is-primary">New Project</button>
    </a>
  </div>

  @foreach ($projects as $v)
      <li>
          <a href="/projects/{{ $v->id }}"> {{ $v->title }}</a>
      </li>
  @endforeach
@endsection
