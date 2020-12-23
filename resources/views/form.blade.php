@extends('main')

@section('maincontent')
    <form action="{{ url('page') }}" method="POST">
        <div class="form-group">
            @csrf
          <label for="exampleInputEmail1">Author</label>
          <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="...">

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Title</label>
          <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="..">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">content</label>
          <textarea name="content"  value="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection
