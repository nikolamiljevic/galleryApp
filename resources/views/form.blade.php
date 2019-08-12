@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <form action="{{route('album.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 

        <input type="text" name="album" class="form-control" placeholder="your album name"><br>

        <input type="file" name="image[]" class="form-control">
        <input type="file" name="image[]" class="form-control">
        <input type="file" name="image[]" class="form-control">

        <button class="btn btn-primary" type="submit">Submit</button>
        </form>

        @foreach($images as $image)

        <img src="{{asset('storage/'.$image->name)}}" class="img-thumbnail">
        @endforeach

    </div>
</div>
@endsection
