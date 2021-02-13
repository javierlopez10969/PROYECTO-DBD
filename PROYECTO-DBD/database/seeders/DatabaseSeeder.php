<?php

namespace Database\Seeders;


use App\Models\Feria_FeriaFavorito;
use App\Models\FeriaFavorito;
use App\Models\Feriante_FeriantesFavorito;
use App\Models\FeriantesFavorito;
use App\Models\OrdenDeDespacho;
#use App\Models\Orden_de_pago;
use App\Models\OrdenDePago;
#use App\Models\Orden_de_compra;
use App\Models\OrdenDeCompra;
use App\Models\Pago;
use App\Models\Productos_orden_de_compra;
use App\Models\Pago_ordendepago;
use App\Models\Cliente;
use App\Models\Comprobante;
#use App\Models\Cuenta_bancaria;
use App\Models\CuentaBancaria;
use App\Models\DireccionDespacho;
use App\Models\DatosPersonal;
use App\Models\Feria;
use App\Models\Feriante;
use App\Models\Region;
use App\Models\Comuna;
use App\Models\Feria_PuestoDeVenta;
use App\Models\Categoria;
use App\Models\PuestoDeVenta;
use App\Models\Producto;
use App\Models\Producto_PuestoDeVenta;
use App\Models\Unidad;


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
        
        //Carlos
        Feria_FeriaFavorito::factory()->create();
        FeriaFavorito::factory(10)->create();
        Feriante_FeriantesFavorito::factory()->create();
        FeriantesFavorito::factory(10)->create();
        OrdenDeDespacho::factory(10)->create();
        
        //Javier
        OrdenDePago::factory(10)->create();
        OrdenDeCompra::factory(10)->create();
        Pago::factory(10)->create();
        Productos_orden_de_compra::factory()->create();
        Pago_ordendepago::factory()->create();

        //David
        Cliente::factory(10)->create();
        Comprobante::factory(10)->create();
        CuentaBancaria::factory(10)->create();
        DatosPersonal::factory(10)->create();
        DireccionDespacho::factory()->create();

        //Sebastian
        Feria::factory(10)->create();
        Feriante::factory(10)->create();
        Region::factory(10)->create();
        Comuna::factory(10)->create();
        Feria_PuestoDeVenta::factory()->create();

        //Martin ??
        Categoria::factory(10)->create();
        PuestoDeVenta::factory(10)->create();
        Producto::factory(10)->create();
        Producto_PuestoDeVenta::factory()->create();
        Unidad::factory(10)->create();



    }
}
