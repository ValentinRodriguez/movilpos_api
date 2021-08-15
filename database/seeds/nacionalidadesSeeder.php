<?php

use Illuminate\Database\Seeder;
use App\Librerias\Nacionalidades;

class nacionalidadesSeeder extends Seeder
{
    public function run()
    {
        $nacionalidades = array(
            ["pais" => "Argentina" , "nacionalidad" => "argentina/o"],
            ["pais" => "Bolivia" , "nacionalidad" => "boliviana/o"],
            ["pais" => "Canada" , "nacionalidad" => "canadiense"],
            ["pais" => "Chile" , "nacionalidad" => "chilena/o"],
            ["pais" => "Colombia" , "nacionalidad" => "colombiana/o"],
            ["pais" => "Costa Rica" , "nacionalidad" => "costarricense"],
            ["pais" => "Cuba" , "nacionalidad" => "cubana/o"],
            ["pais" => "Ecuador" , "nacionalidad" => "ecuatoriana/o"],
            ["pais" => "El Salvador" , "nacionalidad" => "salvadoreña/o"],
            ["pais" => "Estados Unidos" , "nacionalidad" => "estadounidense"],
            ["pais" => "Guatemala" , "nacionalidad" => "guatemalteca/o"],
            ["pais" => "Honduras" , "nacionalidad" => "hondureña/o"],
            ["pais" => "Mexico" , "nacionalidad" => "mexicana/o"],
            ["pais" => "Nicaragua" , "nacionalidad" => "nicaragüense"],
            ["pais" => "Panama" , "nacionalidad" => "panameña/o"],
            ["pais" => "Paraguay" , "nacionalidad" => "paraguaya/o"],
            ["pais" => "Peru" , "nacionalidad" => "peruana/o"],
            ["pais" => "Republica Dominicana" , "nacionalidad" => "dominicana/o"],
            ["pais" => "Uruguay" , "nacionalidad" => "uruguaya/o"],
            ["pais" => "Venezuela" , "nacionalidad" => "venezolana/o"],
            ["pais" => "España" , "nacionalidad" => "español/ española"],
            ["pais" => "Belice" , "nacionalidad" => "beliceña/o"],
            ["pais" => "Brasil" , "nacionalidad" => "brasileña/o"],
            ["pais" => "Haiti" , "nacionalidad" => "haitiana/o"],
            ["pais" => "Jamaica" , "nacionalidad" => "jamaicana/o"],
            ["pais" => "Surinam" , "nacionalidad" => "surinames"],
            ["pais" => "Albania" , "nacionalidad" => "albana/o"],
            ["pais" => "Alemania" , "nacionalidad" => "aleman/alemana"],
            ["pais" => "Austria" , "nacionalidad" => "austriaca/o"],
            ["pais" => "Belgica" , "nacionalidad" => "belga"],
            ["pais" => "Bielorrusia" , "nacionalidad" => "bielorusa/o"],
            ["pais" => "Bulgaria" , "nacionalidad" => "bulgara/o"],
            ["pais" => "Croacia" , "nacionalidad" => "croata"],
            ["pais" => "Dinamarca" , "nacionalidad" => "Danes"],
            ["pais" => "Eslovenia" , "nacionalidad" => "eslovena/o"],
            ["pais" => "Estonia" , "nacionalidad" => "estonia/o"],
            ["pais" => "Finlandia" , "nacionalidad" => "fines"],
            ["pais" => "Francia" , "nacionalidad" => "frances"],
            ["pais" => "Grecia" , "nacionalidad" => "griega/o"],
            ["pais" => "Hungria" , "nacionalidad" => "hungara/o"],
            ["pais" => "Irlanda" , "nacionalidad" => "irlandes"],
            ["pais" => "Islandia" , "nacionalidad" => "islandes"],
            ["pais" => "Italia" , "nacionalidad" => "italiana/o"],
            ["pais" => "Lituania" , "nacionalidad" => "lituana/o"],
            ["pais" => "Moldavia" , "nacionalidad" => "moldava/o"],
            ["pais" => "Monca" , "nacionalidad" => "monaques"],
            ["pais" => "Noruega" , "nacionalidad" => "noruega/o"],
            ["pais" => "Paises Bajos" , "nacionalidad" => "neerlandes"],
            ["pais" => "Polonia" , "nacionalidad" => "polaca/o"],
            ["pais" => "Portugal" , "nacionalidad" => "portugues"],
            ["pais" => "Reino Unido" , "nacionalidad" => "britanica/o"],
            ["pais" => "Republica Checa" , "nacionalidad" => "checa/o"],
            ["pais" => "Rusia" , "nacionalidad" => "rusa/o"],
            ["pais" => "Serbia" , "nacionalidad" => "serbia/o"],
            ["pais" => "Suecia" , "nacionalidad" => "sueca/o"],
            ["pais" => "Suiza" , "nacionalidad" => "suiza/o"],
            ["pais" => "Turquia" , "nacionalidad" => "turca/o"],
            ["pais" => "Angola" , "nacionalidad" => "angolana/o"],
            ["pais" => "Argelia" , "nacionalidad" => "argelina/o"],
            ["pais" => "Benin" , "nacionalidad" => "benines"],
            ["pais" => "Botswana" , "nacionalidad" => "botsuana/o"],
            ["pais" => "Cabo Verde" , "nacionalidad" => "caboverdiana/o"],
            ["pais" => "Camerun" , "nacionalidad" => "camerunes"],
            ["pais" => "Congo" , "nacionalidad" => "congoleña/o"],
            ["pais" => "Costa de Marfil" , "nacionalidad" => "marfileña/o"],
            ["pais" => "Egipto" , "nacionalidad" => "egipcia/o"],
            ["pais" => "Eritrea" , "nacionalidad" => "eritrea/o"],
            ["pais" => "Etiopia" , "nacionalidad" => "etiope"],
            ["pais" => "Ghana" , "nacionalidad" => "ghanes"],
            ["pais" => "Kenia" , "nacionalidad" => "keniata"],
            ["pais" => "Lesoto" , "nacionalidad" => "lesotense"],
            ["pais" => "Libano" , "nacionalidad" => "libanes"],
            ["pais" => "Marruecos" , "nacionalidad" => "marroqui"],
            ["pais" => "Nigeria" , "nacionalidad" => "nigeriana/o"],
            ["pais" => "Republica Centroafricana" , "nacionalidad" => "centroafricana/o"],
            ["pais" => "Senegal" , "nacionalidad" => "senegales"],
            ["pais" => "Sierra Leona" , "nacionalidad" => "sierraleones"],
            ["pais" => "Somalia" , "nacionalidad" => "somali"],
            ["pais" => "Sudafrica" , "nacionalidad" => "sudafricana/o"],
            ["pais" => "Tunez" , "nacionalidad" => "tunecina/o"],
            ["pais" => "Zimbabue" , "nacionalidad" => "zimbabuense"],
            ["pais" => "Afganistan" , "nacionalidad" => "afgana/o"],
            ["pais" => "Armenia" , "nacionalidad" => "armenia/o"],
            ["pais" => "Barein" , "nacionalidad" => "bareini"],
            ["pais" => "Camboya" , "nacionalidad" => "camboyana/o"],
            ["pais" => "Catar" , "nacionalidad" => "catari"],
            ["pais" => "China" , "nacionalidad" => "chino/a"],
            ["pais" => "Corea del Norte" , "nacionalidad" => "norcoreana/o"],
            ["pais" => "Filipinas" , "nacionalidad" => "filipina/o"],
            ["pais" => "India" , "nacionalidad" => "india/o"],
            ["pais" => "Irak / Iraq" , "nacionalidad" => "iraki / iraqi"],
            ["pais" => "Japon" , "nacionalidad" => "japones"],
            ["pais" => "Malasia" , "nacionalidad" => "malaya/o"],
            ["pais" => "Oman" , "nacionalidad" => "omani"],
            ["pais" => "Paquistan / Pakistan" , "nacionalidad" => "pakistani"],
            ["pais" => "Singapur" , "nacionalidad" => "singapurense"],
            ["pais" => "Sri Lanka" , "nacionalidad" => "srilanques"],
            ["pais" => "Tailandia" , "nacionalidad" => "tailandes"],
            ["pais" => "Uzbekistan" , "nacionalidad" => "uzbeka/o"],
            ["pais" => "Vietnam" , "nacionalidad" => "vietnamita"],
            ["pais" => "Yemen" , "nacionalidad" => "yemeni"],
            ["pais" => "Australia" , "nacionalidad" => "australiana/o"],
            ["pais" => "Nueva Zelanda" , "nacionalidad" => "neozelandes"],
            ["pais" => "Indonesia", "nacionalidad" =>  "indonesia/o"],
        );

        foreach ($nacionalidades as $key => $value) {
            Nacionalidades::create($value);
        }
    }
}












