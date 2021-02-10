<?php

namespace Database\Seeders;

use App\Models\Precio;
use App\Models\ProyectoRubro;
use App\Models\Proyecto;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    public function run()
    {

        foreach (range(1, 20) as $i) {
            $rubros = collect();
            
            foreach (range(1, mt_rand(10, 20)) as $j) {

                $indirecto = rand(10, 40);
                $cantidad  = rand(0, 4) + rand(4, 1000) / 1000;
                $precio    = Precio::all()->random(1)->first();
                $valor_pre = $precio->directo;

                $rubros->push(new ProyectoRubro([
                    'proyecto_id' => $i,
                    'precio_id'   => $precio->id,
                    'orden'       => $j,
                    'rubro'       => $precio->name,
                    'unidad'      => $precio->unidad,
                    'cantidad'    => $cantidad,
                    'precio'      => $valor_pre,
                    'total'       => $cantidad * $valor_pre * $indirecto/100
                ]));
            }

            $subTotal = $rubros->sum('total');
            $iva      = $subTotal * 0.12;
            $total    = $subTotal + $iva;

            $proyecto = Proyecto::factory(1)->create([
                'indirecto'    => $indirecto,
                'impuesto'     => $iva,
                'sub_total'    => $subTotal,
                'gran_total'   => $total,
            ]);

            $proyecto->rubros()->saveMany($rubros);
        }
    }
}