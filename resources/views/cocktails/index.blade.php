@extends('layout.app')

@section('menu')
<a class="btn btn-primary" href="{{route('cocktails.create')}}">Create</a>
@endsection

@section('content')
<div class="container my-page">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Technique</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cocktails as $cocktail)
      <tr>
        <td>{{$cocktail->name}}</td>
        <td>{{$cocktail->technique}}</td>
        <td>
          <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
            <a href="{{route('cocktails.show', $cocktail->id)}}" class="btn btn-outline-primary">View</a>
            <a href="#" class="btn btn-outline-primary">Edit</a>
            <a href="#" class="btn btn-outline-danger">Delete</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
