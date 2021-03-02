<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class costos extends Model
{
    protected $table='costos';
    

    protected $fillable = ["ventas","mes_ini","mes_fin","codigo","material","labor","gastos",
                            "material_usd","labor_usd","gastos_usd","tasa","estado","usuario_modificador","usuario_creador"];

}
