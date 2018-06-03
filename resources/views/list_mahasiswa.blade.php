@extends('base_template')
@section('container')
    <div class="card-body">
        <div class="card-title">
            <h1>List Mahasiswa</h1>
        </div>
        <br>
        <div>
            <a href="{{ route('create') }}" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php($no=1)
                @foreach($mahasiswa as $mhs)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->noHp }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>
                        <a href="{{ route('edit', $mhs->id) }}" class="btn btn-primary">Ubah</a>
                        <form action="{{ route('destroy', $mhs->id)}}" method="POST" onclick="return confirm('Yakin ingin menghapus data ini ? -_- ');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection