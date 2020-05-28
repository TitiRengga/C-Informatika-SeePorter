@extends('layouts.app') 

@section('content')

    <h1>Contact Us</h1>
    <h2>Kami bersedia menerima kritik dan saran mengenai website kami</h2>

    @if(Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
    @endif

    <form action="/contact" method="post" >
    {{ csrf_field() }}
    
        <div class="form-group contact-form">
            <label for="namalengkap" class="contact col-md-4 col-form-label text-md-right">Nama Lengkap</label>
            <input type="text" class="form-control-contact col-md-4" id="namalengkap" placeholder="Masukkan nama anda" required>
        </div>

        <div class="form-group contact-form">
            <label for="alamatemail1" class="contact col-md-4 col-form-label text-md-right">Alamat Email</label>
            <input type="email" class="form-control-contact col-md-4" id="alamatemail" placeholder="Masukkan alamat email" required>
        </div>

        <div class="form-group contact-form">
            <label for="pesan" class="contact col-md-4 col-form-label text-md-right">Isi Pesan</label>
            <textarea type="text" class="form-control-pesan col-md-4" id="pesan" row="3" placeholder="Isi pesan anda" required></textarea>
        </div>

        <button class="btn-contact btn-primary">Submit</button>
    </form>
@endsection