@extends('layout.app')

@section('menu')
<a href="{{route('cocktails.index')}}" class="btn btn-primary">
  Back
</a>
@endsection

@section('content')
<div class="container my-page">
  <h3>
    {{$cocktail->name}}
    <small class="text-muted">{{$cocktail->technique}}</small>
  </h3>
</div>
@endsection
