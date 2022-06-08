@extends('layouts.app');

@section('content')

<div class="container">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">image</th>
      <th scope="col">slug</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  
  <tbody>
    @forelse ($posts as $post)
    <tr>
      <th>{{$post -> title }}</th>
      <td>{{$post -> content}}</td
        width="50">
      <td>{{$post -> image}}</td>
      <td>{{$post -> slug}}</td>
      <td>
          <a href="{{route('admin.posts.show')}}" class="btn btn-primary">View</a>
      </td>
    </tr>

    @empty
     <h2>Non ci sono post</h2>

     @endforelse
 
  </tbody>
</table>
</div>

@endsection