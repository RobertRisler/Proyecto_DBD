<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        $this->call(Tipo_usuarioSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(CalleSeeder::class);
        $this->call(RestauranteSeeder::class);
        $this->call(DespachoSeeder::class);
        $this->call(MesaSeeder::class);
        $this->call(Horario_MesaSeeder::class);
        $this->call(ReservaSeeder::class);
        $this->call(TarjetaSeeder::class);
        $this->call(PagoSeeder::class);
        $this->call(ComentarioSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(HistorialSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(DireccionSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(ComunaSeeder::class);
        $this->call(Horario_RestauranteSeeder::class);
        $this->call(CalleComunaSeeder::class);
        $this->call(MenuProductoSeeder::class);
        $this->call(MenuRestauranteSeeder::class);
        $this->call(PedidoProductoSeeder::class);
        $this->call(PeticionSeeder::class);
        //$this->call(PeticionSeeder::class);
    }
}
