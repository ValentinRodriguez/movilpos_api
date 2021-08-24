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
                'atributo' => '[{"label":"teconologia"},
                                {"label":"gerente contabilidad"},
                                {"label":"super administrador","valor":true}
                                ]'
            ],
            [   'id_atributo' => 4,
                'descripcion' => 'almacenamiento',
                'atributo' => '[{"label":"teconologia"},
                                {"label":"gerente contabilidad"},
                                {"label":"super administrador","valor":true}
                                ]'
            ],
            [   'id_atributo' => 5,
                'descripcion' => 'camara',
                'atributo' => '[{"label":"teconologia"},
                                {"label":"gerente contabilidad"},
                                {"label":"super administrador","valor":true}
                                ]'
            ],
            [   'id_atributo' => 6,
                'descripcion' => 'procesador',
                'atributo' => '[{"label":"teconologia"},
                                {"label":"gerente contabilidad"},
                                {"label":"super administrador","valor":true}
                                ]'
            ],
            [   'id_atributo' => 7,
                'descripcion' => 'estado',
                'atributo' => '[{"label":"Nuevo","value":"nuevo"},{"label":"Usado","value":"usado"}]'
            ],
            [   'id_atributo' => 8,
                'descripcion' => 'celular',
                'atributo' => '[{"label":"Nuevo","value":"nuevo"},{"label":"Usado","value":"usado"}]'
            ],
        );

        foreach ($codigos as $key => $value) {
            atributosStore::create($value);
        }
    }
}
