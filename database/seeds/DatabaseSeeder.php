<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Eloquent::unguard();
        $this->call('TabelaProfessorSeeder');
        $this->call('TabelaUsuarioSeeder');
        $this->call('TabelaAcessoSeeder');
        $this->call('TabelaAcessoUsuarioSeeder');
    }
}

class TabelaProfessorSeeder extends Seeder
{

    public function run()
    {
        \App\ProfessorResponsavel::create([
            'nome' => 'admin',
            'matricula' => 'admin'
        ]);
    }
}

class TabelaUsuarioSeeder extends Seeder
{

    public function run()
    {
        \App\Usuario::create([
                'email' => 'seu@email.com',
                'senha' => Hash::make('admin'),
                'login' => 'admin',
                'imagem' => ''
        ]);
    }
}

class TabelaAcessoSeeder extends Seeder
{

    public function run()
    {
        \App\Acesso::create([
                'nome' => 'administrador',
                'Descricao' => ''
        ]);

        \App\Acesso::create([
            'nome' => 'professor',
            'Descricao' => ''
        ]);

        \App\Acesso::create([
            'nome' => 'aluno',
            'Descricao' => ''
        ]);
    }
}

class TabelaAcessoUsuarioSeeder extends Seeder
{

    public function run()
    {
        \App\AcessoUsuario::create([
                'acesso_id' => 1,
                'usuario_login' => 'admin'
        ]);
    }
}
