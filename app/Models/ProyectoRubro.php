<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoRubro extends Model
{
    use HasFactory;

    protected $fillable = [
        'precio_id', 'orden', 'rubro', 'unidad', 'cantidad', 'precio', 'total'
    ];

    public $timestamps = false;

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
/*
    public function precio()
    {
        return $this->belongsTo(Precio::class);
    }
    */	
}
