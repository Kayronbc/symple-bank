<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    protected $fillable = ['nome','cor'];

    public function solicitacoes()
    {
        return $this->hasMany(Solicitacao::class, 'status_id');
    }
}
