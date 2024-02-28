<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'convenio_id',
        'data_hora',
        'observacao'
    ];

    public function convenio() {
        return $this->belongsTo(Convenio::class);
    }
}
