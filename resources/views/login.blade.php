{{-- Menggunakan base layout base.blade --}}
@extends('base.blank')

{{-- Section content -> yield content base.blade --}}
@section('content')
    <div class="row mt-5">
        <div class="offset-md-3 col-md-6 col-sm-12">
            <div class="card mt-3 mb-3">
                <div class="card-header bg-primary text-light">
                    <h3>Login Admin</h3>
                </div>
                <div class="card-body">
                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <!-- FORM -->
                        <div class="form-group">
                            <label for="nama">Username</label>
                            <input class="form-control @error('email') is-invalid @enderror" 
                              name="email" id="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun_masuk">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Login</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection

