<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banco;

class BancosTableSeeder extends Seeder
{
    public function run()
    {
        $bancos = [
            ['nome'=>'Banco Exemplo A','sigla'=>'BEA','ativo'=>1],
            ['nome'=>'Banco Exemplo B','sigla'=>'BEB','ativo'=>1],
        ];
        foreach ($bancos as $b) {
            Banco::updateOrCreate(['nome'=>$b['nome']], $b);
        }
    }
}
