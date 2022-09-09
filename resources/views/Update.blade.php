@extends('layout.masterLayout')
    
@section('content')
    <div class="container pt-5">
        <form action="{{url('/update-data/'.$editData->id)}}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value={{$editData->name}} aria-describedby="emailHelp">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" name="email" value={{$editData->email}} class="form-control" id="exampleInputPassword1">
                       @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
       
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection('content')