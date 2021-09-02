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
                'atributo' => '[{"label":"S","value":false},
                                {"label":"M","value":false},
                                {"label":"L","value":false},
                                {"label":"XL","value":false},
                                {"label":"XXL","value":false},
                                {"label":"XXXL","value":false}
                                ]'
            ],
            [   'id_atributo' => 2,
                'descripcion' => 'medida',
                'tipo' => 'radio',
                'atributo' => '[{"label":"CM","value":false},
                                {"label":"PG","value":false},
                                {"label":"YDS","value":false},
                                {"label":"MTS","value":false}
                            ]'
            ],
            [   'id_atributo' => 3,
                'descripcion' => 'memoria',
                'tipo' => 'select',
                'atributo' => '[{ "label" : "MB", "value1":"", "value2":false},
                                { "label" : "GB", "value1":"", "value2":false },
                                { "label" : "TB", "value1":"", "value2":false },
                                { "label" : "PB", "value1":"", "value2":false }
                                ]'
            ],
            [   'id_atributo' => 4,
                'descripcion' => 'almacenamiento',
                'tipo' => 'select',
                'atributo' => '[{"label":"MB","value":false},
                                {"label":"GB","value":false},
                                {"label":"TB","value":false},
                                {"label":"PB","value":false}
                            ]'
            ],
            [   'id_atributo' => 5,
                'descripcion' => 'camara',
                'tipo' => 'select',
                'atributo' => '[{"label":"10","value":false},
                                {"label":"20","value":false},
                                {"label":"30","value":false},
                                {"label":"40","value":false}
                            ]'
            ],
            [   'id_atributo' => 6,
                'descripcion' => 'procesador',
                'tipo' => 'select',
                'atributo' => '[{"label":"Megapixeles","value":false}]'
            ],
            [   'id_atributo' => 7,
                'descripcion' => 'estado',
                'tipo' => 'radio',
                'atributo' => '[{"label":"Nuevo","value":"nuevo"},
                                {"label":"Usado","value":"usado"}
                            ]'
            ],
            [   'id_atributo' => 8,
                'descripcion' => 'celular',
                'tipo' => 'checkbox',
                'atributo' => '[{"label":"Nuevo","value":false},
                {"label":"Usado","value":false}]'
            ],
            [   'id_atributo' => 9,
                'tipo' => 'select',
                'descripcion' => 'marca',
                'atributo' => '[{"label":"Marca 1","value":"marca1"},
                                {"label":"Marca 2","value":"marca2"},
                                {"label":"Marca 3","value":"marca3"}
                            ]'
            ],
            [   'id_atributo' => 10,
                'descripcion' => 'material',
                'tipo' => 'select',
                'atributo' => '[{"label":"Megapixeles","value":false}]'
            ],
            [   'id_atributo' => 11,
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
            [   'id_atributo' => 12,
                'descripcion' => 'actividad',
                'tipo' => 'select',
                'atributo' => '[{"label":"Megapixeles","value":false}]'
            ],
            ['id_atributo' => 13,
                'descripcion' => 'pantalla',
                'tipo' => 'select',
                'atributo' => '[{ "label" :"≤4.0 pulgadas", "value":false},
                                { "label" :"4 pulgadas", "value":false},
                                { "label" :"4.7 pulgadas", "value":false},
                                { "label" :"5 pulgadas", "value":false},
                                { "label" :"5.5 pulgadas", "value":false},
                                { "label" :"5.8 pulgadas", "value":false},
                                { "label" :"6.15 pulgadas", "value":false},
                                { "label" :"6.1 pulgadas", "value":false},
                                { "label" :"6.2 pulgadas", "value":false},
                                { "label" :"6.3 pulgadas", "value":false},
                                { "label" :"6.44 pulgadas", "value":false},
                                { "label" :"6.53 pulgadas", "value":false},
                                { "label" :"6.55 pulgadas", "value":false},
                                { "label" :"6.4 pulgadas", "value":false},
                                { "label" :"6.5 pulgadas", "value":false},
                                { "label" :"6.67 pulgadas", "value":false},
                                { "label" :"6.78 pulgadas", "value":false},
                                { "label" :"6.8 pulgadas", "value":false},
                                { "label" :"7.2 pulgadas", "value":false} 
                            ]'
            ],
            ['id_atributo' => 14,
                'descripcion' => 'resolucion',
                'tipo' => 'select',
                'atributo' => '[{ "label" : "1440X3040", "value":false},
                                { "label" : "960X480", "value":false},
                                { "label" : "1600x720", "value":false},
                                { "label" : "1080x2280", "value":false},
                                { "label" : "2.400 x 1.080", "value":false},
                                { "label" : "3120×1440", "value":false},
                                { "label" : "1242x2688", "value":false},
                                { "label" : "2340x1080", "value":false},
                                { "label" : "240x320", "value":false},
                                { "label" : "1560x720", "value":false},
                                { "label" : "960x640", "value":false},
                                { "label" : "1334x750", "value":false},
                                { "label" : "480X320", "value":false},
                                { "label" : "1280x720", "value":false},
                                { "label" : "1920x1080", "value":false},
                                { "label" : "3200x1440", "value":false},
                                { "label" : "1792×828", "value":false},
                                { "label" : "2460x1080", "value":false},
                                { "label" : "2436x1125", "value":false},
                                { "label" : "640x1136", "value":false}
                            ]'
            ],
            [   'id_atributo' => 15,
                'descripcion' => 'modelo automovil',
                'tipo' => 'select',
                'atributo' => '[{"label":"Megapixeles","value":false}]'
            ],
            [   'id_atributo' => 16,
                'descripcion' => 'marca automovil',
                'tipo' => 'select',
                'atributo' => '[{"label":"Megapixeles","value":false}]'
            ],
            [   'id_atributo' => 17,
                'descripcion' => 'año',
                'tipo' => 'select',
                'atributo' => '[{"label":"Megapixeles","value":false}]'
            ],
        );

        foreach ($codigos as $key => $value) {
            atributosStore::create($value);
        }
    }
}