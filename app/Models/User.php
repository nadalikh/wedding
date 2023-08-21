<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mobile',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function guests(){
        return $this->hasMany(Guest::class);
    }
    public function myGuests(){
        return match ($this->role) {
            "sara" => Guest::whereFrom("bride")->get(),
            "nadali" => Guest::whereFrom("groom")->get(),
            "God" => Guest::all()
        };
    }
    public function notSentMessages(){
        return match ($this->role) {
            "sara" => Guest::whereFrom("bride")->where('sentSms', false)->get(),
            "nadali" => Guest::whereFrom("groom")->where('sentSms', false)->get(),
            "God" => Guest::where('sentSms', false)->get()
        };
    }
    public function notCalled(){
        return match ($this->role) {
            "sara" => Guest::whereFrom("bride")->where('called', false)->get(),
            "nadali" => Guest::whereFrom("groom")->where('called', false)->get(),
            "God" => Guest::where('called', false)->get()
        };
    }
}
