@if(count($errors) > 0)
  <div class="alert alert-danger">
    <p>The following errors occurred:</p>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@elseif(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif