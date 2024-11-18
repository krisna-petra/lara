{{-- Menggunakan base layout base.blade --}}
@extends('base.base')

{{-- Section content -> yield content base.blade --}}
@section('content')
    <div class="mt-3 mb-3">
        <h3>Tambah Biodata</h3>
        <a href="{{ route('biodata') }}" class="btn btn-primary">Kembali</a>
        <form action="{{ route('biodata.simpan') }}" method="POST">
            @csrf
              <!-- FORM -->
              <div class="form-group">
                <label for="nama">Nama</label>
                <input class="form-control" name="nama" id="nama" required>
              </div>
              <div class="form-group">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" required>
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" required></textarea>
              </div>
              <div class="form-group">
                <label for="notelp">No Telp</label>
                <input class="form-control" name="notelp" id="notelp" required>
              </div>
              <div class="form-group">
                <label for="is_aktif">Aktif</label>
                <select class="form-control" name="is_aktif" id="is_aktif" required>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        </form> 
    </div>
@endsection

