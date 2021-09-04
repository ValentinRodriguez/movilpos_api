<?php

use Illuminate\Database\Seeder;
use App\Librerias\tienda\atributosStore;
use Illuminate\Support\Facades\DB;

class atributoSeeder extends Seeder
{
    public function run()
    {
        DB::table('mov_tienda.atributos_stores')->truncate();

        $codigos = array(
            [   'id_atributo' => 1,
                'descripcion' => 'talla',
                'tipo' => 'checkbox',
                'atributo' => '[{"label":"S","code":"s"},
                                {"label":"M","code":"m"},
                                {"label":"L","code":"l"},
                                {"label":"XL","code":"xl"},
                                {"label":"XXL","code":"xxl"},
                                {"label":"XXXL","code":"xxxl"}
                                ]'
            ],
            // [   'id_atributo' => 2,
            //     'descripcion' => 'medida',
            //     'tipo' => 'radio',
            //     'atributo' => '[{"label":"CM"},
            //                     {"label":"PG"},
            //                     {"label":"YDS"},
            //                     {"label":"MTS"}
            //                 ]'
            // ],
            [   'id_atributo' => 3,
                'descripcion' => 'estado',
                'tipo' => 'select',
                'atributo' => '[{"label":"Nuevo","code":"n"},
                                {"label":"Usado","code":"u"}]'
            ],
            [   'id_atributo' => 4,
                'descripcion' => 'material',
                'tipo' => 'select',
                'atributo' => '[{"label":"Oro"},{"label":"Plata"},{"label":"Bronce"}]'
            ],
            [   'id_atributo' => 5,
                'tipo' => 'select',
                'descripcion' => 'edad',
                'atributo' => '[{"label":"0-11 meses","value":false},
                                {"label":"1-3 años","value":false},
                                {"label":"4-7 años","value":false},
                                {"label":"7-12 años","value":false},
                                {"label":"13-17 años","value":false},
                                {"label":"+18 años","value":false}
                            ]'
            ],
            [   'id_atributo' => 6,
                'descripcion' => 'actividad',
                'tipo' => 'select',
                'atributo' => '[{"label":"Ciclismo"}]'
            ]           
            // [   'id_atributo' => 7,
            //     'descripcion' => 'color',
            //     'tipo' => 'color',
            //     'atributo' => '[{"value":""}]'
            // ],
        );

        foreach ($codigos as $key => $value) {
            atributosStore::create($value);
        }
    }
}
