@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center"> 
                <div class="card-header" style =" background-color: #b3e6cc; font-size:40px; color:black; border:5px solid black">{{ __('REGISTER') }}
                <h2>Pendaftaran Porter</h2>
                </div>

                <div class="card-body" style ="background-color: #2d8659;  font-size:15px; color:white; border:5px solid black">
                    <form method="POST" action="/registerporter">
                        @csrf

                        <div class="form-group row" >
                            <label for="namalengkap" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6" >
                                <input id="namalengkap" type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" value="{{ old('namalengkap') }}" required autocomplete="namalengkap" autofocus>

                                @error('namalengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') yang dimasukkan tidak sesuai @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir">

                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomor_hp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Hp') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_hp" type="text" class="form-control @error('nomor_hp') yang diisi salah @enderror" name="nomor_hp" value="{{ old('nomor_hp') }}" required autocomplete="nomor_hp" autofocus>

                                @error('nomor_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lokasipasar" class="col-md-4 col-form-label text-md-right">{{ __('Pilih lokasi Pasar') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="lokasipasar" id="lokasipasar">
                                    <option value="Pasar Keutapang">Pasar Keutapang</option>
                                    <option value="Pasar Setui">Pasar Setui</option>
                                    <option value="Pasar Penayong">Pasar Penayong</option>
                                    <option value="Pasar Rukoh">Pasar Rukoh</option>
                                    <option value="Pasar Lambaro">Pasar Lambaro</option>
                                </select>

                                @error('lokasipasar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 "  style ="margin-top: 20px; margin-right:20px">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('login') }}"  class="btn btn-light">
                                    {{ __('Kembali') }}
                                </a>

                                <button type="submit" class="btn btn-light">
                                    {{ __('Register') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
