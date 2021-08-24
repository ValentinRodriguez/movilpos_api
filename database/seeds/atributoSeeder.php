<?php

use Illuminate\Database\Seeder;
use App\Librerias\tienda\atributosStore;

class atributoSeeder extends Seeder
{
    public function run()
    {
        $codigos = array(
            [   'id_atributo' => 1,
                'descripcion' => 'talla',
                'atributo' => '[{"label":"S","value":"s"},
                                {"label":"M","value":"m"},
                                {"label":"L","value":"l"},
                                {"label":"XL","value":"xl"}.
                                {"label":"XXL","value":"xxl"}
                                {"label":"XXXL","value":"xxxl"}]'
            ],
            [   'id_atributo' => 2,
                'descripcion' => 'medida',
                'atributo' => '[{"label":"CM","value":""},
                                {"label":"PG","value":""},
                                {"label":"YDS","value":""},
                                {"label":"MTS","value":""}]'
            ],
            [   'id_atributo' => 3,
                'descripcion' => 'memoria',
                'atributo' => '[
                    { "label" : "128 m", "value": "" },
                    { "label" : "<128 m", "value": "" },
                    { "label" : "≤ 512 MB", "value": "" },
                    { "label" : "1 GB", "value": "" },
                    { "label" : "2 GB", "value": "" },
                    { "label" : "3 GB", "value": "" },
                    { "label" : "4 GB", "value": "" },
                    { "label" : "6 GB", "value": "" },
                    { "label" : "8 GB", "value": "" },
                    { "label" : "10 GB", "value": "" },
                    { "label" : "12 GB", "value": "" }
                ]'
            ],
            [   'id_atributo' => 4,
                'descripcion' => 'almacenamiento',
                'atributo' => '[{"label":"MB","value":""},
                                {"label":"GB","value":""},
                                {"label":"TB","value":""},
                                {"label":"PB","value":""}]'
            ],
            [   'id_atributo' => 5,
                'descripcion' => 'camara',
                'atributo' => NULL
            ],
            [   'id_atributo' => 6,
                'descripcion' => 'procesador',
                'atributo' => NULL
            ],
            [   'id_atributo' => 7,
                'descripcion' => 'estado',
                'atributo' => '[{"label":"Nuevo","value":"nuevo"},{"label":"Usado","value":"usado"}]'
            ],
            [   'id_atributo' => 8,
                'descripcion' => 'celular',
                'atributo' => '[{"label":"Nuevo","value":"nuevo"},{"label":"Usado","value":"usado"}]'
            ],
            [   'id_atributo' => 9,
            'descripcion' => 'marca',
            'atributo' => NULL
            ],
            [   'id_atributo' => 10,
            'descripcion' => 'material',
            'atributo' => NULL
            ],
            [   'id_atributo' => 11,
            'descripcion' => 'edad',
            'atributo' => '[{"label":"0-11 meses","value":""},
                            {"label":"1-3 años","value":""},
                            {"label":"4-7 años","value":""},
                            {"label":"7-12 años","value":""}],
                            {"label":"13-17 años","value":""}],
                            {"label":"+18 años","value":""}],'
            ],
            [   'id_atributo' => 12,
            'descripcion' => 'actividad',
            'atributo' => NULL
            ],
            ['id_atributo' => 13,
            'descripcion' => 'pantalla-t',
            'atributo' => '[
                { "label" :"≤4.0 pulgadas", "value": ""}, 
                { "label" :"4 pulgadas", "value": ""}, 
                { "label" :"4.7 pulgadas", "value": ""}, 
                { "label" :"5 pulgadas", "value": ""}, 
                { "label" :"5.5 pulgadas", "value": ""}, 
                { "label" :"5.8 pulgadas", "value": ""}, 
                { "label" :"6.15 pulgadas", "value": ""}, 
                { "label" :"6.1 pulgadas", "value": ""}, 
                { "label" :"6.2 pulgadas", "value": ""}, 
                { "label" :"6.3 pulgadas", "value": ""}, 
                { "label" :"6.44 pulgadas", "value": ""}, 
                { "label" :"6.53 pulgadas", "value": ""},
                { "label" :"6.55 pulgadas", "value": ""}, 
                { "label" :"6.4 pulgadas", "value": ""}, 
                { "label" :"6.5 pulgadas", "value": ""}, 
                { "label" :"6.67 pulgadas", "value": ""}, 
                { "label" :"6.78 pulgadas", "value": ""}, 
                { "label" :"6.8 pulgadas", "value": ""}, 
                { "label" :"7.2 pulgadas", "value": ""} ]'
            ],
            ['id_atributo' => 14,
            'descripcion' => 'pantalla-r',
            'atributo' => '[
                { "label" : "1440X3040", "value": ""},
                { "label" : "960X480", "value": ""},
                { "label" : "1600x720", "value": ""},
                { "label" : "1080x2280", "value": ""},
                { "label" : "2.400 x 1.080", "value": ""},
                { "label" : "3120×1440", "value": ""},
                { "label" : "1242x2688", "value": ""},
                { "label" : "2340x1080", "value": ""},
                { "label" : "240x320", "value": ""},
                { "label" : "1560x720", "value": ""},
                { "label" : "960x640", "value": ""},
                { "label" : "1334x750", "value": ""},
                { "label" : "480X320", "value": ""},
                { "label" : "1280x720", "value": ""},
                { "label" : "1920x1080", "value": ""},
                { "label" : "3200x1440", "value": ""},
                { "label" : "1792×828", "value": ""},
                { "label" : "2460x1080", "value": ""},
                { "label" : "2436x1125", "value": ""},
                { "label" : "640x1136", "value": ""}]'
            ],
            [   'id_atributo' => 15,
                'descripcion' => 'auto-modelo',
                'atributo' => NULL
            ],
            [   'id_atributo' => 16,
                'descripcion' => 'auto-marca',
                'atributo' => NULL
            ],
            [   'id_atributo' => 17,
                'descripcion' => 'auto-anio',
                'atributo' => NULL
            ],
        );

        foreach ($codigos as $key => $value) {
            atributosStore::create($value);
        }
    }
}

