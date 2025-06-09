@extends('backend.v_layouts.app')
@section('content')



<h3>{{ $judul }}</h3>
<p>
    Selamat Datang, <b>Nama_user</b> pada aplikasi Toko Online dengan hak akses yang ana miliki sebagai <b>Role_usesr</b> ini adalah halaman utama dari aplikasi ini.
    <b>
        @if (Auth::user()->role ==1)
        Super Admin
        @elseif(Auth::user()->role ==0)
        Admin
        @endif
    </b>
    ini adalah halaman utama dari aplikasi ini.
</p>

@endsection