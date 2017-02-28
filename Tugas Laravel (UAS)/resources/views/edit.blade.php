@extends('templates.index')
@section('content')
<br>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Edit Data</legend>
    
    <form  action="{{route('siswa.update', $mahasiswa->id)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required value="{{$mahasiswa->nama}}">
        </p>
        
        <p>
            Jenis Kelamin<br />
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
        </p>
        
        <p>
            Alamat Lengkap<br />
            <input type="text" name="alamat" cols="50" required value="{{$mahasiswa->alamat}}">
        </p>
        
        <p>
            NIM<br />
            <input type="text" name="nim" required value="{{$mahasiswa->nim}}" />
        </p>
        
        <p>
            <input type="submit" value="Simpan" onclick="return confirm('Yakin data akan dirubah?')" />
            <a href="{{ url('beranda')}}" class="btn btn-primary"><input type="button" value="Batal" ></a>
        </p>
    </form>
        <center><a href="{{URL('beranda')}}" font="calibri">&Lt; Beranda</a></center>
</fieldset>
<br>



















<style>
header, footer {
padding : 0.5cm;
color : white;
background-color : #155b72;
clear: left;
text-align : center;
font-family: calibri;
}

fieldset {
    font-family: calibri;
}
</style>

@stop