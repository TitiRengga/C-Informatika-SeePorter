@extends('layouts.app') 

@section('content')

<div class="contact-from">
    <div class="form-area">
        <div class="animated fadeInDown">
            <h2>CONTACT US</h2>
            <p>Kami Menerima Masukan dan Saran Untuk Kemajuan Website Lebih Baik</p>
        </div>
            
    <div class="contact">
        <div class="map animated fadeInLeft">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9855494397443!2d95.36572121426443!3d5.569153135066866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304037b98ba13e41%3A0x93d7ebf4986961a9!2sFaculty%20of%20Mathematics%20and%20Sciences%20Universitas%20Syiah%20Kuala!5e0!3m2!1sen!2sid!4v1590822977739!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

            <form class="form" action="/contact" method="post">
            
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
                </div>
            @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                    </div>
            @endif
                {{ csrf_field() }}

                <label class="label" for="name">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Name" />
                    
                <label class="label" for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Email Address" />

                <label class="label" for="email">Number Phone</label>
                <input class="form-control" type="numberic" name="no.hp" placeholder="Number Phone" />
                    
                <label class="label" for="message">Message</label>
                <textarea class="form-control" name="message" id="" placeholder="Message" cols="30" rows="3"></textarea><br>
                
                <div class="submit-area">
                <button id="submit" class="btn btn-primary btn-block">Submit</button>
                <i class="far fa-paper-plane"></i>
            </div>

            <form>
        </div>

    </div>
</div>

@include('layouts.footer')


@endsection