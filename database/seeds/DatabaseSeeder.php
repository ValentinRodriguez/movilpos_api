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
        $this->call(turnosSeeder::class);        
        $this->call(empleadosSeeder::class);  
        $this->call(UsuarioSeeder::class);      
        // $this->call(zonasSeeder::class); 
        $this->call(PerfilesSeeder::class); 
        $this->call(tipoGastosSeeder::class); 
        $this->call(tipoordenseeders::class);    
        $this->call(cgTipoDocumentos::class); 
        $this->call(veCondPagosSeeder::class);
        $this->call(bancosSeeder::class);   
        $this->call(educacionSeeder::class);  
        $this->call(estadoCivilSeeder::class);
        $this->call(tipoEmpleadoSeeder::class);
        $this->call(tipoSangreSeeder::class);
        $this->call(inspeccionesSeeder::class);        
        $this->call(rolSeeder::class);  
        $this->call(municipiosSeeder::class);  
        $this->call(regionSeeder::class);
        $this->call(provinciasSeeder::class);        
        $this->call(sectoresSeeder::class);  
        $this->call(clienteSeeder::class);   
        $this->call(nacionalidadesSeeder::class);
        $this->call(areasSeeder::class);        
        $this->call(empresaSeeder::class);    
        $this->call(sucursalesSeeder::class);  
        $this->call(cuentaSeeder::class);  
        $this->call(tipoInventarioSeeder::class);          
        $this->call(permisosEmpresaSeeder::class); 
        $this->call(SubCategoriaSeeder::class); 
        $this->call(SubSubCategoriaSeeder::class);          
    }
}
