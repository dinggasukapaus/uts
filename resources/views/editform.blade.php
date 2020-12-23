@extends('main')

@section('maincontent')
    <div class="container mt-lg-5 ">
        <h2>Edit Artikel</h2>
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="{{route('page.update',$data['id'])}}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" name="title" value="{{ $data['title'] }}"
                            placeholder="Masukkan judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penulis</label>
                        <input type="text" class="form-control" name="author" placeholder="Penulis" value="{{ $data['author'] }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Konten</label>
                        <textarea name="content" id="example" value="" cols="30" rows="10">{{$data['content']}}</textarea>
                    </div>
                <a class="btn btn-danger" href="/page/{{$data['id']}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
