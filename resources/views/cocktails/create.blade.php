@extends('layout.app')

@section('menu')
@endsection

@section('content')
<form method="POST" action="{{route('cocktails.store')}}">
  @csrf
  <div class="container my-page">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Cocktail name">
    </div>
    <div class="mb-3">
      <label for="technique" class="form-label">Technique</label>
      <select id="technique" name="technique" class="form-select" aria-label="Technique">
        <option selected>Choose one</option>
        @foreach($technique_codes as $technique_code)
        <option value="{{$technique_code}}">{{$technique_code}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
