<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'protocolo',
        'usuario_solicitante_id',
        'banco_id',
        'tipo',
        'descricao',
        'status_id',
        'responsavel_id',
        'data_abertura',
        'data_conclusao'
    ];

    public function solicitante()
    {
        return $this->belongsTo(User::class, 'usuario_solicitante_id');
    }

    public function responsavel()
    {
        return $this->belongsTo(User::class, 'responsavel_id');
    }

    public function banco()
    {
        return $this->belongsTo(Banco::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
