<?php

namespace Database\Seeders;

use App\Models\Feria_FeriaFavorito;
use App\Models\FeriaFavorito;
use App\Models\Feriante_FeriantesFavorito;
use App\Models\FeriantesFavorito;
use App\Models\OrdenDeDespacho;
use App\Models\Orden_de_pago;
use App\Models\Orden_de_compra;
use App\Models\Pago;
use App\Models\Productos_orden_de_compra;
use App\Models\Pago_ordendepago;
use App\Models\Cliente;
use App\Models\Comprobante;
use App\Models\Cuenta_bancaria;
use App\Models\Direccion_despacho;
use App\Models\Datos_personal;
use App\Models\Feria;
use App\Models\Feriante;
use App\Models\Region;
use App\Models\Comuna;
use App\Models\Feria_PuestoDeVenta;


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
        Orden_de_compra::factory()->create();
        Pago::factory()->create();
        Productos_orden_de_compra::factory()->create();
        Pago_ordendepago::factory()->create();

        //David
        Cliente::factory()->create();
        Comprobante::factory()->create();
        Cuenta_bancaria::factory()->create();
        Datos_personal::factory()->create();
        Direccion_despacho::factory()->create();

        //Sebastian
        Feria::factory()->create();
        Feriante::factory()->create();
        Region::factory()->create();
        Comuna::factory()->create();
        Feria_PuestoDeVenta::factory()->create();

        //Martin ??
        Categoria::factory()->create();
        PuestoDeVenta::factory()->create();
        Producto::factory()->create();
        Producto_PuestoDeVenta::factory()->create();
        Unidad::factory()->create();



    }
}
