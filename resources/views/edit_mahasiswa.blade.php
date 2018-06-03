@extends('base_template')
@section('container')  
    <div class="card-body">
        <div class="card-title">
            <h1>Ubah Data Mahasiswa</h1>
        </div>
        <br>
        <br>
        <form action="{{ route('update', $mahasiswa->id)}}" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <lable>Nim</lable>
                <input name="nim" type="text" class="form-control" placeholder="Nim" value="{{$mahasiswa->nim}}">
            </div>
            <div class="form-group">
                <lable class="control-lable">Nama</lable>
                <input name="nama" type="text" class="form-control" placeholder="Nama" value="{{$mahasiswa->nama}}">
            </div>
            <div class="form-group">
                <lable>No Hp</lable>
                <input name="noHp" type="text" class="form-control" placeholder="No Hp" value="{{$mahasiswa->noHp}}">
            </div>
            <div class="form-group">
                <lable>Alamat</lable>
                <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{$mahasiswa->alamat}}">
            </div>
            <div class="form-group">
                <a href="http://" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection