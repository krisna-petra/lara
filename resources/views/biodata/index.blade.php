{{-- Menggunakan base layout base.blade --}}
@extends('base.base')

{{-- Section content -> yield content base.blade --}}
@section('content')
    <div class="mt-3 mb-3">
        <h3>Biodata</h3>
        @can('insert')
            <a href="{{ route('biodata.tambah') }}" class="btn btn-info">Tambah</a>
        @else
            {{-- Jika tidak ada authorize --}}
        @endcan
        <table class="table table-bordered table-striped mt-2">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Aktif</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($biodata as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tahun_masuk }}</td>
                        <td>{{ $data->tgl_lahir }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->notelp }}</td>
                        <td>@if($data->is_aktif) Aktif @else Tidak @endif</td>
                        <td>
                            <a href="{{ url('biodata/lihat/' . $data->id) }}" class="btn btn-warning">Lihat</a>
                            <a href="{{ url('biodata/hapus/' . $data->id) }}" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection

