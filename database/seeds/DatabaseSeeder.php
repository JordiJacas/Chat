<?php

use Illuminate\Database\Seeder;
use App\Categoria;

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
  		$this->command->info('Tabla catálogo inicializada con datos!');
    }

    public function seedCatalog()
    {
    	DB::table('movies')->delete();
    	foreach( $this->arrayCategorias as $categoria ) {
   			$p = new Categoria;
    		$p->categoria = $categoria;
    		$p->save();
    }
}
