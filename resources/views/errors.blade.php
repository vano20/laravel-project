@if ($errors->any())
  <div class="notification is-danger">
    <ul>
    @foreach ($errors->all() as $v)
      <li>
        {{ $v }}
      </li>
    @endforeach
    </ul>
  </div>
@endif
