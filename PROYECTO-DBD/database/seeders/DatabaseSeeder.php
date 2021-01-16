<?php

namespace Database\Seeders;

use App\Models\Feria_FeriaFavorito;
use App\Models\FeriaFavorito;
use App\Models\Feriante_FeriantesFavorito;
use App\Models\FeriantesFavorito;
use App\Models\OrdenDeDespacho;



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
        // \App\Models\User::factory(10)->create();
        Feria_FeriaFavorito::factory()->create();
        FeriaFavorito::factory()->create();
        Feriante_FeriantesFavorito::factory()->create();
        FeriantesFavorito::factory()->create();
        OrdenDeDespacho::factory()->create();

        //Javier
        Orden_de_pago::factory()->create();
        Orden_decompra::factory()->create();
        Pago::factory()->create();
        Productos_orden_de_compra::factory()->create();
        Pago_ordendepago::factory()->create();

        //David
        ::factory()->create();
        ::factory()->create();
        ::factory()->create();
        ::factory()->create();
        ::factory()->create();



    }
}
