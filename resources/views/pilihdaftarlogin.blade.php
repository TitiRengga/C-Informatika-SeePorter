@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center mt-5" style ="border-radius:40px"> 

                <div class="card-body" style ="background-color: #2d8659;  font-size:15px; color:white; border-radius:40px">
                <h2> Masuk Sebagai </h2>

                        <div class="form-group row mb-0 "  style ="margin-top: 20px; margin-right:70px">
                            <div class="col-md-6 offset-md-4">
                                
                                <a href="/login/porter" type="submit" class="btn btn-light" style="color:black; padding:20px; width:40vh; height:8vh; border-radius:10px">
                                    {{ __('PORTER') }}
                                </a>

                                    <h2> Atau </h2>

                                <a href="/login/pengguna" type="submit" class="btn btn-light" style="color:black; padding:20px; width:40vh; height:8vh; border-radius:10px">
                                    {{ __('PENGGUNA') }}
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
