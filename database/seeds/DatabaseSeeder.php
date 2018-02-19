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
            $p->prioritario = $noticia['prioritario'];
            $p->n_categoria = $noticia['categoria'];
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
            'titulo'=>'Cornellà reclama també a la Generalitat els pagaments pendents de les escoles bressol des de 2015 fins ara',
            'descripcion' => 'El consistori fixa en 2.528.834 euros la quantitat a pagar per la administració autonòmica, en compliment dels convenis dels cursos 2015-16, 2016-17 i, de la actual, 2017-18',
            'img'=>'App/noticias/escolabressol.jpg',
            'prioritario'=>0,
            'categoria'=>1
            ),
        array(
            'titulo'=>'Cornellà invertirà 5 milions de euros en 2018',
            'descripcion' => 'També inclouen en aquestes inversions vuit projectes sorgits del procés de pressupostos participatius',
            'img'=>'App/noticias/fontsantarender.jpg',
            'prioritario'=>0,
            'categoria'=>1
            ),
        array(
            'titulo'=>'Vine a bufar les espelmes del 5è aniversari del Complex Esportiu Can Mercader!',
            'descripcion' => 'Arriba a aquesta data amb 2.349 abonats, amb una mitjana de usos diaris que superen les 800 persones',
            'img'=>'App/noticias/complexaquatic.jpg',
            'prioritario'=>0,
            'categoria'=>1
            ),
        array(
            'titulo'=>'Conferència: Jaume I el Conqueridor',
            'descripcion' => 'Conferència sobre aquest sobirà que va ampliar de manera extraordinària els territoris de la Corona de Aragó durant els 58 anys que regnà en el segle XIII.
                    Dia: 01/02/18
                    Hora: 19h
                    Lloc: sala Titan
                    A càrrec de David González Dins del cicle "Els dijous amb història" organitzat per Òmnium Cultural',
            'img'=>'App/noticias/Marta_Mata.JPG',
            'prioritario'=>1,
            'categoria'=>1
            ));


}
