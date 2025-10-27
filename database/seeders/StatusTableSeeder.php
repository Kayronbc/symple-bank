<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusTableSeeder extends Seeder
{
    public function run()
    {
        $status = [
            ['nome'=>'Aberta','cor'=>'#3490dc'],
            ['nome'=>'Atribuída','cor'=>'#6574cd'],
            ['nome'=>'Em atendimento','cor'=>'#38c172'],
            ['nome'=>'Pendente','cor'=>'#ffb020'],
            ['nome'=>'Concluída','cor'=>'#20c997'],
            ['nome'=>'Cancelada','cor'=>'#e3342f'],
        ];
        foreach ($status as $s) {
            Status::updateOrCreate(['nome'=>$s['nome']], $s);
        }
    }
}