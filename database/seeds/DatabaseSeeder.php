<?php

use Illuminate\Database\Seeder;
use App\Categoria;
use App\Noticia;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedCategorias();
  		$this->command->info('Tabla categoria inicializada con datos!');

        self::seedNoticias();
        $this->command->info('Tabla noticia inicializada con datos!');
    }

    public function seedCategorias()
    {
    	foreach( $this->arrayCategorias as $nomCategoria ) {
   			$p = new Categoria;
            $p->nom = $nomCategoria;
            $p->save();
        }
    }

    public function seedNoticias()
    {
        foreach( $this->arrayNoticias as $noticia ) {
            $p = new Noticia;
            $p->titulo = $noticia['titulo'];
            $p->descripcion = $noticia['descripcion'];
            $p->img = $noticia['img'];
            $p->save();
        }
    }

    private $arrayCategorias = array(
        'Sin Categoria',
        'Deporte',
        'Literatura',
        'Tecnologia',
        'Cocina',
        'Ciencia',
        'Filososfia',
        'Geologia',
        'Turismo',
        'Automovilistica');

    private $arrayNoticias = array(
        array(
            'titulo'=>'Noticia1',
            'descripcion' => 'descripcion noticia 1'
            ),
        array(
            'titulo'=>'Noticia2',
            'descripcion' => 'descripcion noticia 2'
            ));


}
