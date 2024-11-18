{{-- Menggunakan base layout base.blade --}}
@extends('base.base')

{{-- Section content -> yield content base.blade --}}
@section('content')
    <div class="mt-3 mb-3">
        <h2>Hello Controller!</h2>

        {{-- @isset($data)
        <p>
            NRP : {{ $data->nrp }}
            <br>
            Nama : {{ $data->nama }}
        </p>
        @else
        <p>
            Parameter 1 : {{ $param1 }}
            <br>
            Parameter 2 : {{ $param2 }}
        </p>
        @endisset --}}
        
        {{-- <form action="{{ url('/post') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-1">NRP</div>
                <div class="col-md-3">
                    <input class="form-control" name="nrp">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Nama</div>
                <div class="col-md-3">
                    <input class="form-control" name="nama">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">POST!</button>
                </div>
            </div>
        </form> --}}

        <form action="{{ url('/makesquare') }}" method="POST">
            @csrf
            Square Size : 
            <div class="row">
                <div class="col-md-5">
                    <input class="form-control" name="n">
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-5">
                    <button type="submit" class="btn btn-primary">Make Square!</button>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-5">
                    @isset($n)
                        @for($i=0; $i<$n; $i++)
                            @for($j=0; $j<$n; $j++)
                                *
                            @endfor
                            <br>
                        @endfor
                    @endisset
                </div>
            </div>
        </form>
    </div>
@endsection

