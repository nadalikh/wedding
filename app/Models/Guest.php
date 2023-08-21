<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = ["mobile", "gender", "name", "withFamily", "quantity"];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
