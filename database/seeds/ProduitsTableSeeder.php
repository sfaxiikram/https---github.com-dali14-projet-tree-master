<?php

use App\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    factory(App\Produit::class, 10)->create()->create();
    //each(function ($user) {
        //$user->posts()->save(factory(App\Post::class)->make());
    }
}
