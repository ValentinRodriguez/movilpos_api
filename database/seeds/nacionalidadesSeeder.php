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
            ["pais" => "Canadá" , "nacionalidad" => "canadiense"],
            ["pais" => "Chile" , "nacionalidad" => "chilena/o"],
            ["pais" => "Colombia" , "nacionalidad" => "colombiana/o"],
            ["pais" => "Costa Rica" , "nacionalidad" => "costarricense"],
            ["pais" => "Cuba" , "nacionalidad" => "cubana/o"],
            ["pais" => "Ecuador" , "nacionalidad" => "ecuatoriana/o"],
            ["pais" => "El Salvador" , "nacionalidad" => "salvadoreña/o"],
            ["pais" => "Estados Unidos" , "nacionalidad" => "estadounidense"],
            ["pais" => "Guatemala" , "nacionalidad" => "guatemalteca/o"],
            ["pais" => "Honduras" , "nacionalidad" => "hondureña/o"],
            ["pais" => "México" , "nacionalidad" => "mexicana/o"],
            ["pais" => "Nicaragua" , "nacionalidad" => "nicaragüense"],
            ["pais" => "Panamá" , "nacionalidad" => "panameña/o"],
            ["pais" => "Paraguay" , "nacionalidad" => "paraguaya/o"],
            ["pais" => "Perú" , "nacionalidad" => "peruana/o"],
            ["pais" => "República Dominicana" , "nacionalidad" => "dominicana/o"],
            ["pais" => "Uruguay" , "nacionalidad" => "uruguaya/o"],
            ["pais" => "Venezuela" , "nacionalidad" => "venezolana/o"],
            ["pais" => "España" , "nacionalidad" => "español/ española"],
            ["pais" => "Belice" , "nacionalidad" => "beliceña/o"],
            ["pais" => "Brasil" , "nacionalidad" => "brasileña/o"],
            ["pais" => "Haití" , "nacionalidad" => "haitiana/o"],
            ["pais" => "Jamaica" , "nacionalidad" => "jamaicana/o"],
            ["pais" => "Surinam" , "nacionalidad" => "surinamés"],
            ["pais" => "Albania" , "nacionalidad" => "albana/o"],
            ["pais" => "Alemania" , "nacionalidad" => "alemán/alemana"],
            ["pais" => "Austria" , "nacionalidad" => "austríaca/o"],
            ["pais" => "Bélgica" , "nacionalidad" => "belga"],
            ["pais" => "Bielorrusia" , "nacionalidad" => "bielorusa/o"],
            ["pais" => "Bulgaria" , "nacionalidad" => "búlgara/o"],
            ["pais" => "Croacia" , "nacionalidad" => "croata"],
            ["pais" => "Dinamarca" , "nacionalidad" => "Danés"],
            ["pais" => "Eslovenia" , "nacionalidad" => "eslovena/o"],
            ["pais" => "Estonia" , "nacionalidad" => "estonia/o"],
            ["pais" => "Finlandia" , "nacionalidad" => "finés"],
            ["pais" => "Francia" , "nacionalidad" => "francés"],
            ["pais" => "Grecia" , "nacionalidad" => "griega/o"],
            ["pais" => "Hungría" , "nacionalidad" => "húngara/o"],
            ["pais" => "Irlanda" , "nacionalidad" => "irlandés"],
            ["pais" => "Islandia" , "nacionalidad" => "islandés"],
            ["pais" => "Italia" , "nacionalidad" => "italiana/o"],
            ["pais" => "Lituania" , "nacionalidad" => "lituana/o"],
            ["pais" => "Moldavia" , "nacionalidad" => "moldava/o"],
            ["pais" => "Mónca" , "nacionalidad" => "monaqués"],
            ["pais" => "Noruega" , "nacionalidad" => "noruega/o"],
            ["pais" => "Países Bajos" , "nacionalidad" => "neerlandés"],
            ["pais" => "Polonia" , "nacionalidad" => "polaca/o"],
            ["pais" => "Portugal" , "nacionalidad" => "portugués"],
            ["pais" => "Reino Unido" , "nacionalidad" => "británica/o"],
            ["pais" => "República Checa" , "nacionalidad" => "checa/o"],
            ["pais" => "Rusia" , "nacionalidad" => "rusa/o"],
            ["pais" => "Serbia" , "nacionalidad" => "serbia/o"],
            ["pais" => "Suecia" , "nacionalidad" => "sueca/o"],
            ["pais" => "Suiza" , "nacionalidad" => "suiza/o"],
            ["pais" => "Turquía" , "nacionalidad" => "turca/o"],
            ["pais" => "Angola" , "nacionalidad" => "angolana/o"],
            ["pais" => "Argelia" , "nacionalidad" => "argelina/o"],
            ["pais" => "Benin" , "nacionalidad" => "beninés"],
            ["pais" => "Botswana" , "nacionalidad" => "botsuana/o"],
            ["pais" => "Cabo Verde" , "nacionalidad" => "caboverdiana/o"],
            ["pais" => "Camerún" , "nacionalidad" => "camerunés"],
            ["pais" => "Congo" , "nacionalidad" => "congoleña/o"],
            ["pais" => "Costa de Marfil" , "nacionalidad" => "marfileña/o"],
            ["pais" => "Egipto" , "nacionalidad" => "egipcia/o"],
            ["pais" => "Eritrea" , "nacionalidad" => "eritrea/o"],
            ["pais" => "Etiopía" , "nacionalidad" => "etíope"],
            ["pais" => "Ghana" , "nacionalidad" => "ghanés"],
            ["pais" => "Kenia" , "nacionalidad" => "keniata"],
            ["pais" => "Lesoto" , "nacionalidad" => "lesotense"],
            ["pais" => "Líbano" , "nacionalidad" => "libanés"],
            ["pais" => "Marruecos" , "nacionalidad" => "marroquí"],
            ["pais" => "Nigeria" , "nacionalidad" => "nigeriana/o"],
            ["pais" => "República Centroafricana" , "nacionalidad" => "centroafricana/o"],
            ["pais" => "Senegal" , "nacionalidad" => "senegalés"],
            ["pais" => "Sierra Leona" , "nacionalidad" => "sierraleonés"],
            ["pais" => "Somalia" , "nacionalidad" => "somalí"],
            ["pais" => "Sudáfrica" , "nacionalidad" => "sudafricana/o"],
            ["pais" => "Túnez" , "nacionalidad" => "tunecina/o"],
            ["pais" => "Zimbabue" , "nacionalidad" => "zimbabuense"],
            ["pais" => "Afganistán" , "nacionalidad" => "afgana/o"],
            ["pais" => "Armenia" , "nacionalidad" => "armenia/o"],
            ["pais" => "Baréin" , "nacionalidad" => "bareiní"],
            ["pais" => "Camboya" , "nacionalidad" => "camboyana/o"],
            ["pais" => "Catar" , "nacionalidad" => "catarí"],
            ["pais" => "China" , "nacionalidad" => "chino/a"],
            ["pais" => "Corea del Norte" , "nacionalidad" => "norcoreana/o"],
            ["pais" => "Filipinas" , "nacionalidad" => "filipina/o"],
            ["pais" => "India" , "nacionalidad" => "india/o"],
            ["pais" => "Irak / Iraq" , "nacionalidad" => "irakí / iraqí"],
            ["pais" => "Japón" , "nacionalidad" => "japonés"],
            ["pais" => "Malasia" , "nacionalidad" => "malaya/o"],
            ["pais" => "Omán" , "nacionalidad" => "omaní"],
            ["pais" => "Paquistán / Pakistán" , "nacionalidad" => "pakistaní"],
            ["pais" => "Singapur" , "nacionalidad" => "singapurense"],
            ["pais" => "Sri Lanka" , "nacionalidad" => "srilanqués"],
            ["pais" => "Tailandia" , "nacionalidad" => "tailandés"],
            ["pais" => "Uzbekistán" , "nacionalidad" => "uzbeka/o"],
            ["pais" => "Vietnam" , "nacionalidad" => "vietnamita"],
            ["pais" => "Yemen" , "nacionalidad" => "yemení"],
            ["pais" => "Australia" , "nacionalidad" => "australiana/o"],
            ["pais" => "Nueva Zelanda" , "nacionalidad" => "neozelandés"],
            ["pais" => "Indonesia", "nacionalidad" =>  "indonesia/o"],
        );

        foreach ($nacionalidades as $key => $value) {
            Nacionalidades::create($value);
        }
    }
}












