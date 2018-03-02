<?php

use Illuminate\Database\Seeder;
use App\Noticia;
use App\Chat;
use App\User;

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
        self::seedUser();
        $this->command->info('Tabla users inicializada con datos!');

        self::seedNoticias();
        $this->command->info('Tabla noticia inicializada con datos!');

        self::seedChat();
        $this->command->info('Tabla chat inicializada con datos!');

        

    }

    public function seedUser()
    {
        foreach( $this->arrayUser as $user ) {
            $p = new User;
            $p->name = $user['name'];
            $p->email = $user['email'];
            $p->password = $user['psswd'];
            $p->admin = $user['admin'];
            $p->save();
        }
    }

    public function seedChat()
    {
        foreach( $this->arrayChat as $chat ) {
            $p = new Chat;
            $p->descripcion = $chat['descripcion'];
            $p->id_usuario  = $chat['id_user'];
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
            $p->categoria = $noticia['categoria'];
            $p->save();
        }
    }

    private $arrayUser = array(
        array(
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'psswd'=>'$2y$10$sMFfh7Q0M9D/xK8T/r5uveH07Rb6lzTc9fNYAxfgtZWugOkM./pcC',
            'admin'=>1,
            ),
        array(
            'name' => 'user',
            'email' => 'user@user.com',
            'psswd'=>'$2y$10$2jFhfKlJTjCpn/gRJB5xjeX/zmu52bsjLvRvQjM60zI22VxnzRgrO',
            'admin'=>0,
            ));

    private $arrayChat = array(
         array(
            'descripcion' => 'Alfonso V',
            'id_user'=>1,
            ),
        array(
            'descripcion' => 'Juana I',
            'id_user'=>1,
            ),
        array(
            'descripcion' => 'Amadeo I',
            'id_user'=>1,
            ),
        array(
            'descripcion' => 'Luis I',
            'id_user'=>1,
            )
        );

    private $arrayNoticias = array(
        array(
            'titulo'=>'Cornellà reclama també a la Generalitat els pagaments pendents de les escoles bressol des de 2015 fins ara',
            'descripcion' => 'El consistori fixa en 2.528.834 euros la quantitat a pagar per la administració autonòmica, en compliment dels convenis dels cursos 2015-16, 2016-17 i, de la actual, 2017-18',
            'img'=>'App/noticias/escolabressol.jpg',
            'prioritario'=>0,
            'categoria'=>'Sin Categoria'
            ),
        array(
            'titulo'=>'Cornellà invertirà 5 milions de euros en 2018',
            'descripcion' => 'També inclouen en aquestes inversions vuit projectes sorgits del procés de pressupostos participatius',
            'img'=>'App/noticias/fontsantarender.jpg',
            'prioritario'=>0,
            'categoria'=>'Sin Categoria'
            ),
        array(
            'titulo'=>'Vine a bufar les espelmes del 5è aniversari del Complex Esportiu Can Mercader!',
            'descripcion' => 'Arriba a aquesta data amb 2.349 abonats, amb una mitjana de usos diaris que superen les 800 persones',
            'img'=>'App/noticias/complexaquatic.jpg',
            'prioritario'=>0,
            'categoria'=>'Sin Categoria'
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
            'categoria'=>'Sin Categoria'
            ));


}
