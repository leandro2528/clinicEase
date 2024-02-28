<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listaespera extends Model
{
    use HasFactory;

    protected $fillable = [
        'agenda_id',
        'convenio_id',
        'email',
        'telefone',
        'observacao'
    ];

    public function agenda() {
        return $this->belongsTo(Agenda::class);
    }

    public function convenio() {
        return $this->belongsTo(Convenio::class);
    }
}
