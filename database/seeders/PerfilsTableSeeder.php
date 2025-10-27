<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfilsTableSeeder extends Seeder
{
    public function run()
    {
        $perfils = [
            ['nome'=>'Cliente','descricao'=>'Correspondente / Cliente que abre solicitações'],
            ['nome'=>'Atendente','descricao'=>'Atende as solicitações'],
            ['nome'=>'Supervisor','descricao'=>'Supervisiona atendentes'],
            ['nome'=>'Gestor','descricao'=>'Acompanha relatórios e configurações'],
        ];
        foreach ($perfils as $p) {
            Perfil::updateOrCreate(['nome'=>$p['nome']], $p);
        }
    }
}