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
use App\Models\Cart;


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
        FeriaFavorito::factory()->create();
        Feriante_FeriantesFavorito::factory()->create();
        FeriantesFavorito::factory()->create();
        OrdenDeDespacho::factory()->create();
        
        //Javier
        OrdenDePago::factory()->create();
        OrdenDeCompra::factory()->create();
        Pago::factory()->create();
        Productos_orden_de_compra::factory()->create();
        Pago_ordendepago::factory()->create();

        //David
        Cliente::factory()->create();
        Comprobante::factory()->create();
        CuentaBancaria::factory()->create();
        DatosPersonal::factory(50)->create();
        DireccionDespacho::factory()->create();

        //Sebastian
        Feria::factory(30)->create();
        Feriante::factory(300)->create();
        Region::factory()->create();
        Comuna::factory()->create();
        Feria_PuestoDeVenta::factory()->create();
        Cart::factory(50)->create();

        //Martin ??
        Categoria::factory(10)->create();
        PuestoDeVenta::factory()->create();
        Producto::factory(100)->create();
        Producto_PuestoDeVenta::factory()->create();
        Unidad::factory()->create();



    }
}
