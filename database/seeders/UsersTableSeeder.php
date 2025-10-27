<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Perfil;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $gestor = Perfil::where('nome','Gestor')->first();
        if (!$gestor) {
            $gestor = Perfil::create(['nome'=>'Gestor']);
        }

        User::updateOrCreate(
    ['email' => 'admin@symplebank.test'],
    [
        'name' => 'Administrador', // <--- adicione esta linha
        'nome' => 'Administrador',
        'email' => 'admin@symplebank.test',
        'password' => Hash::make('Senha123!'),
        'perfil_id' => $gestor->id,
    ]
    );

    }
}