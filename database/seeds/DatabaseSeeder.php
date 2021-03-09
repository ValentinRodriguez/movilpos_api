<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PaisesSeeder::class);
        $this->call(CiudadesSeeder::class);
        $this->call(PuestosSeeder::class);
        $this->call(MonedasSeeder::class);
        $this->call(MedidasSeeder::class);
        $this->call(TipoProductosSeeder::class);
        $this->call(TipoDocumentosSeeder::class);
        $this->call(codigosISRSeeder::class);
        $this->call(moduloSeeder::class);
        $this->call(menuSeeder::class);
        $this->call(marcasSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(BodegasSeeder::class);
        $this->call(propiedadesSeeder::class);
        $this->call(departamentoSeeder::class);        
        $this->call(empleadosSeeder::class);  
        $this->call(UsuarioSeeder::class);
        $this->call(TransContablesSeeder::class);        
        $this->call(zonasSeeder::class); 
        $this->call(PerfilesSeeder::class); 
        $this->call(tipoGastosSeeder::class); 
    }
}
