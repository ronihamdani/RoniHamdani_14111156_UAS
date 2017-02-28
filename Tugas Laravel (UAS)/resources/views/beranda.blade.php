@extends('templates.index')
@section('content')
<div class="container">
    <nav>
        <ul>
            <li><b>MENU</b></li>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li id="logout"><a href="{{URL('/')}}">Logout</a></li>
        </ul>
    </nav>
</div>

<br>
<center><a href="{{URL('input')}}"><button type="button">Tambah Data</button></a></center>
<br>

<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>NIM</th>
            <th>Pilihan</th>
        </tr>
    </thead>
    
    @foreach ($mahasiswa as $mhs)
    <tbody>
        <tr>
            <td>{{ $mhs -> nama }}</td>
            <td>{{ $mhs -> jenis_kelamin }}</td>
            <td>{{ $mhs -> alamat }}</td>
            <td>{{ $mhs -> nim }}</td>
            <td align="center">
            <form method="POST" action="{{ route('siswa.destroy', $mhs->id) }}">
                <input name="_method" type="hidden" value="DELETE">
                <input name="_token" type="hidden" value="{{csrf_token() }}">
                <a href="{{ route('siswa.edit', $mhs->id)}}" class="btn btn-primary"><input type="button" value="Edit" ></a>
                <input type="submit" onclick="return confirm('Yakin akan menghapus data?');" value="Hapus">
            </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<br><br>

@stop