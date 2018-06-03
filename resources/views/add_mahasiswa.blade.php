@extends('base_template')
@section("container")
    <div class="card-body">
        <div class="card-title">
            <h1>Tambah Data Mahasiswa</h1>
        </div>
        <br>
        <br>
        <form action="{{ route('store')}}" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <lable>Nim</lable>
                <input name="nim" type="text" class="form-control" placeholder="Nim">
            </div>
            <div class="form-group">
                <lable class="control-lable">Nama</lable>
                <input name="nama" type="text" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
                <lable>No Hp</lable>
                <input name="noHp" type="text" class="form-control" placeholder="No Hp">
            </div>
            <div class="form-group">
                <lable>Alamat</lable>
                <input name="alamat" type="text" class="form-control" placeholder="Alamat">
            </div>
            <div class="form-group">
                <a href="http://" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection