<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Porter extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'porter';

        protected $fillable = [
            'name', 'email','lokasipasar', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }