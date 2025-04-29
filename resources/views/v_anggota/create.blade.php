<h3>{{ $judul }}</h3>

<form action="{{ route('anggota.store') }}" method="POST">
    @csrf

    <label>Nama</label><br>
    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" 
           placeholder="Masukan Nama Lengkap" 
           class="form-control @error('nama') is-invalid @enderror">

    @error('nama')
        <span class="invalid-feedback alert-danger" role="alert">
            {{ $message }}
        </span>
    @enderror

    <p></p>

    <label>HP</label>
    <input type="text" name="hp" id="hp" value="{{ old('hp') }}" placeholder="Masukan Nomor HP">
    <p></p>

    <button type="submit">Simpan</button>
    <a href="{{ route('anggota.index') }}">
        <button type="button">Batal</button>
    </a>
</form>
