<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traject extends Model
{
    use HasFactory;
    protected $fillable = [
        'departure',
        'destination',
        'save',
    ];

public function user(){
    return $this->belongsTo(User::class,'user_id');
}
public function reservation(){
    return $this->hasMany(reservation::class);
}
}
