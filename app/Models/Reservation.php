<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'status',
    ];
    public function traject(){
        return $this->belongsTo(Traject::class,'traject_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
