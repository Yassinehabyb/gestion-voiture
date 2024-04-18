<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable=[
        'matricule',
        'type',
        'marque',
        'prix',
    ];
    public function reservation (){
        return $this->belongsToMany(Reservation::class);
    }
}
