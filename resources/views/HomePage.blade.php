
@extends('layout.masterLayout')

@section('content')
  <div class="container pt-5">
        @if(Session::has('msg'))
    <p class="alert alert-success">{{Session::get('msg')}}</p>
    @endif
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($showData as $key => $data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td><a class="btn btn-success mx-3" href="{{url('/edit-data/'.$data->id)}}">Update</a><a class="btn btn-danger">Delete</a></td>
      
    </tr>
@endforeach

  </tbody>
</table>
<!-- its a table pagination -->
{{$showData -> links()}}
  </div>
@endsection()