<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        
        DB::table('cities')->truncate();

        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'Asientos'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'Calvillo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'Cosío'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'Jesús María'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'Pabellón de Arteaga'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'Rincón de Romos'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'San José de Gracia'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'Tepezalá'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'El Llano'
        ]);
        DB::table('cities')->insert([
            'state_id' => 1,
            'name' => 'San Francisco de los Romo'
        ]);
        //Baja California Norte
        DB::table('cities')->insert([
            'state_id' => 2,
            'name' => 'Ensenada'
        ]);
        DB::table('cities')->insert([
            'state_id' => 2,
            'name' => 'Mexicalli'
        ]);
        DB::table('cities')->insert([
            'state_id' => 2,
            'name' => 'Tecate'
        ]);
        DB::table('cities')->insert([
            'state_id' => 2,
            'name' => 'Tijuana'
        ]);
        DB::table('cities')->insert([
            'state_id' => 2,
            'name' => 'Playas de Rosarito'
        ]);

        // Baja California Sur
        DB::table('cities')->insert([
            'state_id' => 3,
            'name' => 'Comondpu'
        ]);
        DB::table('cities')->insert([
            'state_id' => 3,
            'name' => 'Mulegé'
        ]);
        DB::table('cities')->insert([
            'state_id' => 3,
            'name' => 'La Paz'
        ]);
        DB::table('cities')->insert([
            'state_id' => 3,
            'name' => 'Los Cabos'
        ]);
        DB::table('cities')->insert([
            'state_id' => 3,
            'name' => 'Loreto'
        ]);

        //Campeche
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Calakmul'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Calkini'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Campeche'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Candelaria'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Carmen'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Champotón'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Escárcega'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Hecelchakán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Hopelchén'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Palizaba'
        ]);
        DB::table('cities')->insert([
            'state_id' => 4,
            'name' => 'Tenabo'
        ]);

        //Chiapas
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Acacoyagua'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Acala'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Acapetahua'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Altamirano'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Amatán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Amatenango de la Frontera'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Amatenango del Valle'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Angel Albino Corzo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Arriaga'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Bejucal de Ocampo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Bella Vista'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Berriozábal'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Bochil'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'El Bosque'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Cacahoatán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Catazajá'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Cintalapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Coapill'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Comitán de Domínguez'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'La concordia'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Copainalá'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chalchihuitán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chamula'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chanal'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chapultenango'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chenalhó'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chiapa de Corzo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chiapilla'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chicoasén'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chicomuselo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Chilón'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Escuintla'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Francisco León'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Frontera Hidalgo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'La grandeza'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Huehuetán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Huixtán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Huitiupán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Huixtla'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'La Independencia'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Ixhuatán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Ixtacomitán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Ixtapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Ixtapangajoya'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Jiquipilas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Jitotol'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Juárez'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Larráinzar'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'La Libertad'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Mapastepec'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Las Margaritas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Mazapa de Madero'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Mazatpan'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Metapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Mitontic'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Motozintla'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Nicolás Ruíz'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Ocosingo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Ocotepec'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Ocozocoautla de Espinosa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Ostuacán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Osumacinta'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Oxchuc'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Palenque'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Pantelhó'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Pantepec'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Pichucalco'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Pijijiapan'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'El Porvenir'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Villa Comaltitlán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Pueblo Nuevo Solistahuacán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Rayón'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Reforma'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Las Rosas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Sabanilla'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Salto de Agua'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'San Cristóbl de las Casas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'San Fernando'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Siltepec'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Simojovel'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Sitalá'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Socoltenango'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Solosuchiapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Soyaló'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Suchiapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Suchiate'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Sunuapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tapachula'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tapalapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tapilula'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tecpatán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tenejapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Teopisca'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tica'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tonalá'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Totolapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'La Trinitaria'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tumbalá'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tuxtla Gutiérrez'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tuxtla Chico'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tuzantán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Tzimol'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Unión Juarez'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Venustiano Carranza'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Villa Corzo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Villaflores'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Yajalón'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'San Lucas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Zinacantán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'San Juan Cancuc'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Aldama'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Benemérito de las Américas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Maravilla Tenejapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Marqués de Comillas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Montecristo de Guerrero'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'San Andrés Duraznal'
        ]);
        DB::table('cities')->insert([
            'state_id' => 5,
            'name' => 'Santiago el Pinar'
        ]);
        //Chihuahua
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Ahumada'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Aldama'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Allende'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Aquiles Serdán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Ascensión'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Bachíniva'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Balleza'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Batopilas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Bocoyna'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Buenaventura'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Camargo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Carichí'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Casas Grandes'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Chihuahua'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Chínipas'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Coronado'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Coyame del Sotol'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Cuauhtémoc'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Cusihuiriachi'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Delicias'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Belisario Domínguez'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'El Tule'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Galeana'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Gómez Farías'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Gran Morelos'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Guachochi'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Guadalupe'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Guadalupe y Calvo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Guazapares'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Guerrero'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Hidalgo del Parral'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Huejoitán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Ignacio Zaragoza'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Janos'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Jiménez'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Juárez'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Julimes'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'La Cruz López'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Madera'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Maguarichi'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Manuel Benavides'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Matachí'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Matamoros'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Meoqui'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Morelos'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Moris'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Namiquipa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Nonoava'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Nuevo Casas Grandes'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Ocampo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Ojinaga'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Praxedis G. Guerrero'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Riva Palacio'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Rosales'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Rosario'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'San Francisco de Borja'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'San Francisco de Conchos'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'San Francisco del Oro'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Santa Bárabara'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Santa Isabel'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Satevó'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Saucillo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Temósachi'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Urique'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Uriaci'
        ]);
        DB::table('cities')->insert([
            'state_id' => 6,
            'name' =>'Valle de Zaragoza'
        ]);
        //CDMX

        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Álvaro Obregón'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Azcapotzalco'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Benito Juárez'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Coyoacán'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Cuajimalpa de Morelos'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Cuauhtémoc'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Gustavo A. Madero'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Iztacalco'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Iztapalapa'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'La Magdalena Contreras'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Miguel Hidalgo'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Milpa Alta'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Tláhuac'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Tlalpan'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Venustiano Carranza'
        ]);
        DB::table('cities')->insert([
            'state_id' => 7,
            'name' =>'Xochimilco'
        ]);
        //Coahuila
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Abasolo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Acuña'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Allende'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Arteaga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Candela'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Castaños'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Cuatro Ciénegas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Escobedo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Francisco I. Madero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Frontera'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'General Cepeda'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Jiménez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Lamadrid'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Matamoros'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Monclova'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Múzquiz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Nadadores'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Nava'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Ocampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Parras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Piedras Negras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Progreso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Ramos Arizpe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Sabinas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Sacramento'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Saltillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'San Buenaventura'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'San Juan de Sabinas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'San Pedro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Sierra Mojada'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Torreón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Viesca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Villa Unión'
        ]);
        DB::table('cities')->insert([
          'state_id' => 8,
            'name' =>'Zaragoza'
        ]);
        //Colima
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Armería'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Colima'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Comala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Coquimatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Cuauhtémoc'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Ixtlahuacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Manzanillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Minatitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Tecomán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 9,
          'name' =>'Villa de Álvarez'
        ]);
        //Durango

        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Canatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Canelas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Coneto de Comonfort'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Cuencamé'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Durango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'General Simón Bolívar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Gómez Palacio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Guadalupe Victoria'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Guanaceví'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Hidalgo'
        ]);
          DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Indé'
        ]);
          DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Lerdo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Mapimí'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Mezquital'
        ]);
          DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Nazas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Nombre de Dios'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Ocampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'El Oro'
        ]);
          DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Otáez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Pánuco de Coronado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Peñón Blanco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Poanas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Pueblo Nuevo'
        ]);
          DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Rodeo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'San Bernardo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'San Dimas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'San Juan de Guadalupe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'San Juan del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'San Luis del Cordero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'San Pedro del Gallo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Santa Clara'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Santiago Papasquiaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Súchil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Tamazula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Tepehuanes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Tlahualilo'
        ]);
          DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Topia'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Vicente Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 10,
          'name' =>'Nuevo Ideal'
        ]);
        //Guanajuato

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Abasolo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Acámbaro'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'San Miguel de Allende'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Apaseo el Grande'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Atarjea'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Celaya'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Manuel Doblado'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Comonfort'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Coroneo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Cortazar'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Cuerámaro'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Doctor Mora'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Dolores Hidalgo Cuna de la Independencia Nacional'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Guanajuato'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Huanímaro'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Irapuato'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Jaral del Progreso'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Jerécuaro'
        ]);

        DB::table('cities')->insert([
          'state_id' =>11,
          'name' =>'León'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Moroleón'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Ocampo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Pénjamo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Pueblo Nuevo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Purísima del Rincón'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Romita'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Salamanca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Salvatierra'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'San Diego de la Unión'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'San Felipe'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'San Francisco del Rincón'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'San José Iturbide'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'San Luis de la Paz'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Santa Catarina'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Santa Cruz de Juventino Rosas'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Santiago Maravatío'
        ]);

        DB::table('cities')->insert([
          'state_id' =>110,
          'name' =>'Silao'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Tarandacuao'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Tarimoro'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Tierra Blanca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Uriangato'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Valle de Santiago'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Victoria'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Villagrán'
        ]);

        DB::table('cities')->insert([
          'state_id' =>110,
          'name' =>'Xichú'
        ]);

        DB::table('cities')->insert([
          'state_id' => 11,
          'name' =>'Yuriria'
        ]);
        //Guerrero


        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Acapulco de Juárez'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Ahuacuotzingo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Ajuchitlán del Progreso'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Alcozauca de Guerrero'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Alpoyeca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Apaxtla'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Arcelia'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Atenango del Río'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Atlamajalcingo del Monte'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Atlixtac'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Atoyac de Álvarez'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Ayutla de los Libres'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Azoyú'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Benito Juárez'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Buenavista de Cuéllar'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Coahuayutla de José María Izazaga'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Cocula'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Copala'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Copalillo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Copanatoyac'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Coyuca de Benítez'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Coyuca de Catalán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Cuajinicuilapa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Cualác'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Cuautepec'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Cuetzala del Progreso'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Cutzamala de Pinzón'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Chilapa de Álvarez'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Chilpancingo de los Bravo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Florencio Villarreal'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'General Canuto A. Neri'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'General Heliodoro Castillo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Huamuxtitlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Huitzuco de los Figueroa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Iguala de la Independencia'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Igualapa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Ixcateopan de Cuauhtémoc'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Zihuatanejo de Azueta'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Juan R. Escudero'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Leonardo Bravo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Malinaltepec'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Mártir de Cuilapan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Metlatónoc'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Mochitlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Olinalá'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Ometepec'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Pedro Ascencio Alquisiras'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Petatlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Pilcaya'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Pungarabato'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Quechultenango'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'San Luis Acatlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'San Marcos'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'San Miguel Totolapan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Taxco de Alarcón'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tecoanapa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Técpan de Galeana'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Teloloapan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tepecoacuilco de Trujano'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tetipac'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tixtla de Guerrero'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tlacoachistlahuaca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tlacoapa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tlalchapa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tlalixtaquilla de Maldonado'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tlapa de Comonfort'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Tlapehuala'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'La Unión de Isidoro Montes de Oca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Xalpatláhuac'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Xochihuehuetlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Xochistlahuaca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Zapotitlán Tablas'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Zirándaro'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Zitlala'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Eduardo Neri'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Acatepec'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Marquelia'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Cochoapa el Grande'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'José Joaquín de Herrera'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Juchitán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 12,
          'name' =>'Iliatenco'
        ]);
        //Hidalgo

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Acatlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Acaxochitlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Actopan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Agua Blanca de Iturbide'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Ajacuba'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Alfajayucan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Almoloya'
        ]);

          DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Apan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'El Arenal'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Atitalaquia'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Atlapexco'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Atotonilco el Grande'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Atotonilco de Tula'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Calnali'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Cardonal'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Cuautepec de Hinojosa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Chapantongo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Chapulhuacán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Chilcuautla'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Eloxochitlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Emiliano Zapata'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Epazoyucan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Francisco I. Madero'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Huasca de Ocampo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Huautla'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Huazalingo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Huehuetla'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Huejutla de Reyes'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Huichapan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Ixmiquilpan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Jacala de Ledezma'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Jaltocán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Juárez Hidalgo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Lolotla'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Metepec'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'San Agustín Metzquititlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Metztitlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Mineral del Chico'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Mineral del Monte'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'La Misión'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Mixquiahuala de Juárez'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Molango de Escamilla'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Nicolás Flores'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Nopala de Villagrán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Omitlán de Juárez'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'San Felipe Orizatlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Pacula'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Pachuca de Soto'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Pisaflores'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Progreso de Obregón'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Mineral de la Reforma'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'San Agustín Tlaxiaca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'San Bartolo Tutotepec'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'San Salvador'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Santiago de Anaya'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Santiago Tulantepec de Lugo Guerrero'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Singuilucan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tasquillo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tecozautla'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tenango de Doria'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tepeapulco'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tepehuacán de Guerrero'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tepeji del Río de Ocampo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tepetitlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tetepango'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Villa de Tezontepec'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tezontepec de Aldama'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tianguistengo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tizayuca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tlahuelilpan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tlahuiltepa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tlanalapa'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tlanchinol'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tlaxcoapan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tolcayuca'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tula de Allende'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Tulancingo de Bravo'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Xochiatipan'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Xochicoatlán'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Yahualica'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Zacualtipán de Ángeles'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Zapotlán de Juárez'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Zempoala'
        ]);

        DB::table('cities')->insert([
          'state_id' => 13,
          'name' =>'Zimapán'
        ]);
        //Jalisco


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Acatic'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Acatlán de Juárez'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ahualulco de Mercado'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Amacueca'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Amatitán'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ameca'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Juanito de Escobedo'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Arandas'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'El Arenal'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Atemajac de Brizuela'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Atengo'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Atenguillo'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Atotonilco el Alto'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Atoyac'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Autlán de Navarro'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ayotlán'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ayutla'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'La Barca'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Bolaños'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Cabo Corrientes'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Casimiro Castillo'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Cihuatlán'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Zapotlán el Grande'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Cocula'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Colotlán'
        ]);


        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Concepción de Buenos Aires'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Cuautitlán de García Barragán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Cuautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Cuquío'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Chapala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Chimaltitán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Chiquilistlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Degollado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ejutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Encarnación de Díaz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Etzatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'El Grullo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Guachinango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Guadalajara'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Hostotipaquillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Huejúcar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Huejuquilla el Alto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'La Huerta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ixtlahuacán de los Membrillos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ixtlahuacán del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Jalostotitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Jamay'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Jesús María'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Jilotlán de los Dolores'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Jocotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Juanacatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Juchitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Lagos de Moreno'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'El Limón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Magdalena'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Santa María del Oro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'La Manzanilla de la Paz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Mascota'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Mazamitla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Mexticacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Mezquitic'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Mixtlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ocotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Ojuelos de Jalisco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Pihuamo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Poncitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Puerto Vallarta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Villa Purificación'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Quitupan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'El Salto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Cristóbal de la Barranca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Diego de Alejandría'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Juan de los Lagos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Julián'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Marcos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Martín de Bolaños'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Martín Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Miguel el Alto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Gómez Farías'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Sebastián del Oeste'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Santa María de los Ángeles'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Sayula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Talpa de Allende'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tamazula de Gordiano'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tapalpa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tecalitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tecolotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Techaluta de Montenegro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tenamaxtlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Teocaltiche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Teocuitatlán de Corona'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tepatitlán de Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tequila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Teuchitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tizapán el Alto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tlajomulco de Zúñiga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Pedro Tlaquepaque'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tolimán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tomatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tonalá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tonaya'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tonila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Totatiche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tototlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tuxcacuesco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tuxcueca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Tuxpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Unión de San Antonio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Unión de Tula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Valle de Guadalupe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Valle de Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Gabriel'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Villa Corona'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Villa Guerrero'
        ]);

        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Villa Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Cañadas de Obregón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Yahualica de González Gallo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Zacoalco de Torres'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Zapopan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Zapotiltic'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Zapotitlán de Vadillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Zapotlán del Rey'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'Zapotlanejo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 14,
          'name' =>'San Ignacio Cerro Gordo'
        ]);
        //Edo de Mexico

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Acambay de Ruíz Castañeda'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Acolman'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Aculco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Almoloya de Alquisiras'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Almoloya de Juárez'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Almoloya del Río'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Amanalco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Amatepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Amecameca'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Apaxco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Atenco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Atizapán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Atizapán de Zaragoza'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Atlacomulco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Atlautla'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Axapusco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ayapango'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Calimaya'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Capulhuac'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Chalco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Chapa de Mota'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Chapultepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Chiautla'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Chicoloapan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Chiconcuac'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Chimalhuacán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Coacalco de Berriozábal'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Coatepec Harinas'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Cocotitlán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Coyotepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Cuautitlán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Cuautitlán Izcalli'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Donato Guerra'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ecatepec de Morelos'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ecatzingo'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'El Oro'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Huehuetoca'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Hueypoxtla'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Huixquilucan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Isidro Fabela'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ixtapaluca'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ixtapan de la Sal'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ixtapan del Oro'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ixtlahuaca'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Jaltenco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Jilotepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Jilotzingo'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Jiquipilco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Jocotitlán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Joquicingo'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Juchitepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'La Paz'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Lerma'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Luvianos'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Malinalco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Melchor Ocampo'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Metepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Mexicaltzingo'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Morelos'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Naucalpan de Juárez'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Nextlalpan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Nezahualcóyotl'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Nicolás Romero'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Nopaltepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ocoyoacac'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ocuilan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Otumba'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Otzoloapan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Otzolotepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Ozumba'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Papalotla'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Polotitlán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Rayón'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'San Antonio la Isla'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'San Felipe del Progreso'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'San José del Rincón'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'San Martín de las Pirámides'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'San Mateo Atenco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'San Simón de Guerrero'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Santo Tomás'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Soyaniquilpan de Juárez'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Sultepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tecámac'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tejupilco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Temamatla'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Temascalapa'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Temascalcingo'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Temascaltepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Temoaya'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tenancingo'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tenango del Aire'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tenango del Valle'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Teoloyucan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Teotihuacán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tepetlaoxtoc'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tepetlixpa'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tepotzotlán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tequixquiac'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Texcaltitlán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Texcalyacac'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Texcoco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tezoyuca'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tianguistenco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Timilpan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tlalmanalco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tlalnepantla de Baz'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tlatlaya'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Toluca'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tonanitla'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tonatico'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tultepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Tultitlán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Valle de Bravo'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Valle de Chalco Solidaridad'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Villa de Allende'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Villa del Carbón'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Villa Guerrero'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Villa Victoria'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Xalatlaco'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Xonacatlán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Zacazonapan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Zacualpan'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Zinacantepec'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Zumpahuacán'
        ]);

        DB::table('cities')->insert([
            'state_id' => 15,
            'name' => 'Zumpango'
        ]);
        //Michoacan

        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Acuitzio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Aguililla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Álvaro Obregón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Angamacutiro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Angangueo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Apatzingán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Aporo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Aquila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Ario'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Arteaga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Briseñas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Buenavista'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Carácuaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Charapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Charo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Chavinda'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Cherán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Chilchota'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Chinicuila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Chucándiro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Churintzio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Churumuco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Coahuayana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Coalcomán de Vázquez Pallares'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Coeneo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Cojumatlán de Régules'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Contepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Copándaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Cotija'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Cuitzeo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Ecuandureo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Epitacio Huerta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Erongarícuaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Gabriel Zamora'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Huandacareo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Huaniqueo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Huetamo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Huiramba'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Indaparapeo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Irimbo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Ixtlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Jacona'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Jiménez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Jiquilpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'José Sixto Verduzco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Jungapeo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'La Huacana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'La Piedad'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Lagunillas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Lázaro Cárdenas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Los Reyes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Madero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Maravatío'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Marcos Castellanos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Morelia'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Múgica'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Nahuatzen'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Nocupétaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Nuevo Parangaricutiro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Nuevo Urecho'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Numarán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Ocampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Pajacuarán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Panindícuaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Paracho'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Parácuaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Pátzcuaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Penjamillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Peribán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Purépero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Puruándiro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Queréndaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Quiroga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Sahuayo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Salvador Escalante'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'San Lucas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Santa Ana Maya'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Senguio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Susupuato'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tacámbaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tancítaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tangamandapio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tangancícuaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tanhuato'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Taretan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tarímbaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tepalcatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tingambato'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tingüindín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tiquicheo de Nicolás Romero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tlalpujahua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tlazazalca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tocumbo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tumbiscatío'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Turicato'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tuxpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tuzantla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tzintzuntzan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Tzitzio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Uruapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Venustiano Carranza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Villamar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Vista Hermosa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Yurécuaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Zacapu'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Zamora'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Zináparo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Zinapécuaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Ziracuaretiro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 16,
          'name' =>'Zitácuaro'
        ]);
        //Morelos

        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Amacuzac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Atlatlahucan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Axochiapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Ayala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Coatlán del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Cuautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Cuernavaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Emiliano Zapata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Huitzilac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Jantetelco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Jiutepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Jojutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Jonacatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Mazatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Miacatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Ocuituco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Puente de Ixtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Temixco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Tepalcingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Tepoztlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Tetecala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Tetela del Volcán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Tlalnepantla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Tlaltizapán de Zapata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Tlaquiltenango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Tlayacapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Totolapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Xochitepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Yautepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Yecapixtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Zacatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Zacualpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 17,
          'name' =>'Temoac'
        ]);
        //Nayarit

        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Acaponeta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Ahuacatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Amatlán de Cañas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Compostela'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Huajicori'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Ixtlán del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Jala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Xalisco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Del Nayar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Rosamorada'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Ruíz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'San Blas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'San Pedro Lagunillas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Santa María del Oro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Santiago Ixcuintla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Tecuala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Tepic'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Tuxpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'La Yesca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 18,
          'name' =>'Bahía de Banderas'
        ]);
        //Nuevo León
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Abasolo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Agualeguas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Allende'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Anáhuac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Apodaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Aramberri'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Bustamante'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Cadereyta Jiménez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Cerralvo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 98,
          'name' =>'China'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Ciénega de Flores'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Doctor Arroyo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Doctor Coss'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Doctor González'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'El Carmen'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Galeana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'García'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'General Bravo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'General Escobedo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'General Terán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'General Treviño'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'General Zaragoza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'General Zuazua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Guadalupe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Higueras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Hualahuises'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Iturbide'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Lampazos de Naranjo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Linares'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Los Aldamas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Los Herreras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Los Ramones'
        ]);
        DB::table('cities')->insert([
          'state_id' => 98,
          'name' =>'Marín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Melchor Ocampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Mier y Noriega'
        ]);
        DB::table('cities')->insert([
          'state_id' =>918,
          'name' =>'Mina'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Montemorelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Monterrey'
        ]);
        DB::table('cities')->insert([
          'state_id' => 98,
          'name' =>'Parás'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Pesquería'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Rayones'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Sabinas Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Salinas Victoria'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'San Nicolás de los Garza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'San Pedro Garza García'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Santa Catarina'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Santiago'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Vallecillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 19,
          'name' =>'Villaldama'
        ]);
        //Oaxaca

        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Abejones'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Acatlán de Pérez Figueroa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Animas Trujano'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Asunción Cacalotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Asunción Cuyotepeji'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Asunción Ixtaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Asunción Nochixtlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Asunción Ocotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Asunción Tlacolulita'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Ayoquezco de Aldama'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Ayotzintepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Calihualá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Candelaria Loxicha'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Capulálpam de Méndez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Chahuites'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Chalcatongo de Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Chiquihuitlán de Benito Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Ciénega de Zimatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Ciudad Ixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Coatecas Altas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Coicoyán de las Flores'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Concepción Buenavista'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Concepción Pápalo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Constancia del Rosario'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Cosolapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Cosoltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Cuilápam de Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Cuyamecalco Villa de Zaragoza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'El Barrio de la Soledad'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'El Espinal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Eloxochitlán de Flores Magón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Fresnillo de Trujano'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Guadalupe de Ramírez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Guadalupe Etla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Guelatao de Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Guevea de Humboldt'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Heroica Ciudad de Ejutla de Crespo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Heroica Ciudad de Huajuapan de Leó'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Heroica Ciudad de Tlaxiaco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Huautepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Huautla de Jiménez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Ixpantepec Nieves'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Ixtlán de Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Juchitán de Zaragoza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'La Compañía'
        ]);
        DB::table('cities')->insert([
          'state_id' =>209,
          'name' =>'La Pe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'La Reforma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'La Trinidad Vista Hermosa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Loma Bonita'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Apasco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Jaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Ocotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Peñasco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Teitipac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Tequisistlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Tlacotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Yodocono de Porfirio Día'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Magdalena Zahuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Mariscala de Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Mártires de Tacubaya'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Matías Romero Avendaño'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Mazatlán Villa de Flores'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Mesones Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Miahuatlán de Porfirio Díaz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Mixistlán de la Reforma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Monjas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Natividad'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Nazareno Etla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Nejapa de Madero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Nuevo Zoquiapam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Oaxaca de Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Ocotlán de Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Pinotepa de Don Luis'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Pluma Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Putla Villa de Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Reforma de Pineda'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Reyes Etla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Rojas de Cuauhtémoc'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Salina Cruz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Agustín Amatengo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Agustín Atenango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Agustín Chayuco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Agustín de las Juntas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Agustín Etla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Agustín Loxicha'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Agustín Tlacotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Agustín Yatareni'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Cabecera Nueva'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Dinicuiti'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Huaxpaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Huayapam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Ixtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Lagunas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Nuxiño'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Paxtlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Sinaxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Solaga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Teotilalpam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Tepetlapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Yaá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Zabache'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Andrés Zautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonino Castillo Velasco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonino el Alto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonino Monte Verde'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonio Acutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonio de la Cal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonio Huitepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonio Nanahuatípam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonio Sinicahua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Antonio Tepetlapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Baltazar Chichicápam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Baltazar Loxicha'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Baltazar Yatzachi el Bajo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bartolo Coyotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bartolo Soyaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bartolo Yautepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bartolomé Ayautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bartolomé Loxicha'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bartolomé Quialana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bartolomé Yucuañe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bartolomé Zoogocho'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Bernardo Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Blas Atempa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Carlos Yautepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Cristóbal Amatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Cristóbal Amoltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Cristóbal Lachirioag'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Cristóbal Suchixtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Dionisio del Mar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Dionisio Ocotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Dionisio Ocotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Esteban Atatlahuca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Felipe Jalapa de Díaz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Felipe Tejalapam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Felipe Usila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Cahuacuá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Cajonos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Chapulapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Chindúa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco del Mar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Huehuetlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Ixhuatán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Jaltepetongo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Lachigoló'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Logueche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Nuxaño'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Ozolotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Sola'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Telixtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Teopan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Francisco Tlapancingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Gabriel Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Ildefonso Amatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Ildefonso Sola'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Ildefonso Villa Alta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jacinto Amilpas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jacinto Tlacotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jerónimo Coatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jerónimo Silacayoapilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jerónimo Sosola'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jerónimo Taviche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jerónimo Tecoátl'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jerónimo Tlacochahuaya'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Jorge Nuchita'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San José Ayuquila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San José Chiltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San José del Peñasco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San José del Progreso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San José Estancia Grande'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San José Independencia'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San José Lachiguiri'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San José Tenango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan ?umí'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Achiutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Atepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Atatlahuca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Coixtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Cuicatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Guelache'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Jayacatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Lo de Soto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Suchitepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Tlachichilco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Tlacoatzintepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Tuxtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Bautista Valle Nacional'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Cacahuatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Chicomezúchil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Chilateca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Cieneguilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Coatzóspam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Colorado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Comaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Cotzocón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan de los Cués'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan del Estado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Diuxi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Evangelista Analco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Guelavía'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Guichicovi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Ihualtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Juquila Mixes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Juquila Vijanos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Lachao'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Lachigalla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Lajarcia'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Lalana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Mazatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Ozolotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Petlapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Quiahije'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Quiotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Sayultepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Tabaá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Tamazola'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Teita'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Teitipac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Tepeuxila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Teposcolula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Yaeé'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Yatzona'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Juan Yucuita'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lorenzo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lorenzo Albarradas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lorenzo Cacaotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lorenzo Cuaunecuiltitla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lorenzo Texmelucan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lorenzo Victoria'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lucas Camotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lucas Ojitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lucas Quiaviní'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Lucas Zoquiápam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Luis Amatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Marcial Ozolotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Marcos Arteaga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Martín de los Cansecos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Martín Huamelúlpam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Martín Itunyoso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Martín Lachilá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Martín Peras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Martín Tilcajete'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Martín Toxpalan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Martín Zacatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Cajonos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo del Mar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Etlatongo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Nejápam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Peñasco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Piñas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Río Hondo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Sindihui'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Tlapiltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Mateo Yoloxochitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Melchor Betaza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Achiutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Ahuehuetitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Aloápam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Amatitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Amatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Chicahua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Chimalapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Coatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel del Puerto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Ejutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel el Grande'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Huautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Panixtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Peras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Piedras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Quetzaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Santa Flor'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Soyaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Suchixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Tecomatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Tenango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Tequixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Tilquiápam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Tlacamama'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Tlacotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Tulancingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Miguel Yotao'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Nicolás'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Nicolás Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Coatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Cuatro Venados'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Etla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Huitzo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Huixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Macuiltianguis'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Tijaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Villa de Mitla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pablo Yaganiza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Amuzgos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Apóstol'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Atoyac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Cajonos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Comitancillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Coxcaltepec Cántaros'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro el Alto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Huamelula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Huilotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Ixcatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Ixtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Jaltepetongo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Jicayán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Jocotipac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Juchatengo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Mártir'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Mártir Quiechapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Mártir Yucuxaco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Molinos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Nopala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Ocopetatillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Ocotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Pochutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Quiatoni'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Sochiapam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Tapanatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Taviche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Teozacoalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Teutila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Tidaá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Topiltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Totolapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro y San Pablo Ayutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro y San Pablo Teposcolula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro y San Pablo Tequixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Yaneri'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Yólox'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Pedro Yucunama'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Raymundo Jalpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Sebastián Abasolo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Sebastián Coatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Sebastián Ixcapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Sebastián Nicananduta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Sebastián Río Hondo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Sebastián Tecomaxtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Sebastián Teitipac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Sebastián Tutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Simón Almolongas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Simón Zahuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Vicente Coatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Vicente Lachixío'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'San Vicente Nuñú'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Ana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Ana Ateixtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Ana Cuauhtémoc'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Ana del Valle'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Ana Tavela'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Ana Tlapacoyan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Ana Yareni'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Ana Zegache'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catalina Quierí'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Cuixtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Ixtepeji'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Juquila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Lachatao'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Loxicha'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Mechoacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Minas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Quiané'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Quioquitani'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Tayata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Ticuá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Yosonotú'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Catarina Zapoquila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Acatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Amilpas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz de Bravo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Itundujia'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Mixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Nundaco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Papalutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Tacache de Mina'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Tacahua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Tayata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Xitla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Xoxocotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Cruz Zenzontepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Gertrudis'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Inés de Zaragoza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Inés del Monte'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Inés Yatzeche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Lucía del Camino'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Lucía Miahuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Lucía Monteverde'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Lucía Ocotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa Magdalena Jicotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Alotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Apazco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Atzompa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Camotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Chachoápam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Chilchotla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Chimalapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Colotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Cortijo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Coyotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María del Rosario'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María del Tule'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Ecatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Guelacé'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Guienagati'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Huatulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Huazolotitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Ipalapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Ixcatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Jacatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Jalapa del Marqués'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Jaltianguis'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María la Asunción'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Lachixío'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Mixtequilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Nativitas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Nduayaco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Ozolotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Pápalo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Peñoles'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Petapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Quiegolani'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Sola'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Tataltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Tecomavaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Temaxcalapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Temaxcaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Teopoxco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Tepantlali'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Texcatitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Tlahuitoltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Tlalixtac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Tonameca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Totolapilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Xadani'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Yalina'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Yavesía'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Yolotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Yosoyúa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Yucuhiti'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Zacatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Zaniza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santa María Zoquitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Amoltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Apoala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Apóstol'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Astata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Atitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Ayuquililla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Cacaloxtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Camotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Chazumba'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Choapam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Comaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Huajolotitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Huauclilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Ihuitlán Plumas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Ixcuintepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Ixtayutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Jamiltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Jocotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Juxtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Lachiguiri'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Lalopa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Laollaga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Laxopa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Llano Grande'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Matatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Miltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Minas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Nacaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Nejapilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Niltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Nundiche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Nuyoó'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Pinotepa Nacional'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Suchilquitongo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Tamazola'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Tapextla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Tenango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Tepetlapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Tetepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Texcalcingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Textitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Tilantongo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Tillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Tlazoyaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Xanica'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Xiacuí'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Yaitepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Yaveo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Yolomécatl'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Yosondúa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Yucuyachi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Zacatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santiago Zoochila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Albarradas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Armenta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Chihuitán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo de Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Ingenio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Ixcatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Nuxaá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Ozolotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Petapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Roayaga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Tehuantepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Teojomulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Tepuxtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Tlatayápam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Tomaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Tonalá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Tonaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Xagacía'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Yanhuitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Yodohino'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Domingo Zanatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Tomás Jalieza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Tomás Mazaltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Tomás Ocotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santo Tomás Tamazulapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santos Reyes Nopala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santos Reyes Pápalo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santos Reyes Tepejillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Santos Reyes Yucuná'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Silacayoápam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Sitio de Xitlapehua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Soledad Etla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Tamazulapam del Espíritu Santo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Tanetze de Zaragoza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Taniche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Tataltepec de Valdés'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Teococuilco de Marcos Pérez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Teotitlán de Flores Magón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Teotitlán del Valle'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Teotongo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Tepelmeme Villa de Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Tezoatlán de Segura y Luna'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Tlacolula de Matamoros'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Tlacotepec Plumas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Tlalixtac de Cabrera'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Totontepec Villa de Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Trinidad Zaachila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Unión Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Valerio Trujano'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa de Chilapa de Díaz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa de Etla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa de Tamazulápam del Progreso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa de Tututepec de Melchor Ocam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa de Zaachila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa Díaz Ordaz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa Sola de Vega'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa Talea de Castro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Villa Tejúpam de la Unión'
        ]);
        DB::table('cities')->insert([
          'state_id' =>20,
          'name' =>'Yaxe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Yogana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Yutanduchi de Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Zapotitlán del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Zapotitlán Lagunas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Zapotitlán Palmas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 20,
          'name' =>'Zimatlán de Alvarez'
        ]);
        //Puebla

        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Acajete'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Acateno'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Acatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Acatzingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Acteopan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ahuacatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ahuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ahuazotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ahuehuetitla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ajalpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Albino Zertuche'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Aljojuca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Altepexi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Amixtlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Amozoc'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Aquixtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Atempan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Atexcal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Atlequizayan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Atlixco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Atoyatempan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Atzala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Atzitzihuacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Atzitzintla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Axutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ayotoxco de Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Calpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Caltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Camocuautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cañada Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Caxhuacan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chalchicomula de Sesma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chapulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chiautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chiautzingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chichiquila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chiconcuautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chietla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chigmecatitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chignahuapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chignautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chila de la Sal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chilchotla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Chinantla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Coatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Coatzingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cohetzala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cohuecán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Coronango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Coxcatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Coyomeapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Coyotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cuapiaxtla de Madero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cuautempan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cuautinchán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cuautlancingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cuayuca de Andrade'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cuetzalan del Progreso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Cuyoaco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Domingo Arenas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Eloxochitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Epatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Esperanza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Francisco Z. Mena'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'General Felipe ?ngeles'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Guadalupe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Guadalupe Victoria'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Hermenegildo Galeana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Honey'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huaquechula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huatlatlauca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huauchinango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huehuetla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huehuetlán el Chico'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huehuetlán el Grande'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huejotzingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Hueyapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Hueytamalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Hueytlalpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huitzilan de Serdán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Huitziltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ixcamilpa de Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ixcaquixtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ixtacamaxtitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ixtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Izúcar de Matamoros'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Jalpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Jolalpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Jonotla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Jopala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Juan C. Bonilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Juan Galindo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Juan N. Méndez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'La Magdalena Tlatlauquitepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Lafragua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Libres'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Los Reyes de Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Mazapiltepec de Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Mixtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Molcaxac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Naupan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Nauzontla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Nealtican'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Nicolás Bravo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Nopalucan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ocotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Ocoyucan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Olintla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Oriental'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Pahuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Palmar de Bravo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Pantepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Petlalcingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Piaxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Puebla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Quecholac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Quimixtlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Rafael Lara Grajales'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Andrés Cholula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Antonio Cañada'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Diego la Mesa Tochimiltzingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Felipe Teotlalcingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Felipe Tepatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Gabriel Chilac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Gregorio Atzompa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Jerónimo Tecuanipan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Jerónimo Xayacatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San José Chiapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San José Miahuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Juan Atenco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Juan Atzompa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Martín Texmelucan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Martín Totoltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Matías Tlalancaleca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Miguel Ixitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Miguel Xoxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Nicolás Buenos Aires'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Nicolás de los Ranchos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Pablo Anicano'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Pedro Cholula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Pedro Yeloixtlahuaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Salvador el Seco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Salvador el Verde'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Salvador Huixcolotla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'San Sebastián Tlacotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Santa Catarina Tlaltempan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Santa Inés Ahuatempan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Santa Isabel Cholula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Santiago Miahuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Santo Tomás Hueyotlipan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Soltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tecali de Herrera'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tecamachalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tecomatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tehuacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tehuitzingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tenampulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Teopantlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Teotlalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepanco de López'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepango de Rodríguez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepatlaxco de Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepeaca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepemaxalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepeojuma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepetzintla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepexco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepexi de Rodríguez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepeyahualco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tepeyahualco de Cuauhtémoc'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tetela de Ocampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Teteles de Avila Castillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Teziutlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tianguismanalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tilapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlachichuca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlacotepec de Benito Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlacuilotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlahuapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlaltenango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlanepantla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlaola'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlapacoya'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlapanalá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlatlauquitepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tlaxco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tochimilco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tochtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Totoltepec de Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tulcingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tuzamapan de Galeana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Tzicatlacoyan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Venustiano Carranza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Vicente Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Xayacatlán de Bravo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Xicotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Xicotlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Xiutetelco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Xochiapulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Xochiltepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Xochitlán de Vicente Suárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Xochitlán Todos Santos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Yaonáhuac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Yehualtepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zacapala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zacapoaxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zacatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zapotitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zapotitlán de Méndez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zaragoza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zihuateutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zinacatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zongozotla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zoquiapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 21,
          'name' =>'Zoquitlán'
        ]);
        //Queretaro
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Amealco de Bonfil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Arroyo Seco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Cadereyta de Montes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Colón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Corregidora'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'El Marqués'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Ezequiel Montes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Huimilpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Jalpan de Serra'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Landa de Matamoros'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Pedro Escobedo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Peñamiller'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Pinal de Amoles'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Querétaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'San Joaquín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'San Juan del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22,
          'name' =>'Tequisquiapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 22, 
          'name' =>'Tolimán'
        ]);
        //Quintana roo
        DB::table('cities')->insert([
          'state_id' => 23, 
          'name' =>'Benito Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 23, 
          'name' =>'Cozumel'
        ]);
        DB::table('cities')->insert([
          'state_id' => 23, 
          'name' =>'Felipe Carrillo Puerto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 23, 
          'name' =>'Isla Mujeres'
        ]);
        DB::table('cities')->insert([
          'state_id' => 23, 
          'name' =>'José María Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 23, 
          'name' =>'Lázaro Cárdenas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 23, 
          'name' =>'Othón P. Blanco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 23, 
          'name' =>'Solidaridad'
        ]);
        //San Luis Potosí
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Ahualulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Alaquines'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Aquismón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Armadillo de los Infante'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Axtla de Terrazas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Cárdenas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Catorce'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Cedral'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Cerritos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Cerro de San Pedro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Charcas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Ciudad del Maíz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Ciudad Fernández'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Ciudad Valles'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Coxcatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Ebano'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'El Naranjo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Guadalcázar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Huehuetlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Lagunillas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Matehuala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Matlapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Mexquitic de Carmona'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Moctezuma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Rayón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Rioverde'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Salinas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'San Antonio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'San Ciro de Acosta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'San Luis Potosí'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'San Martín Chalchicuautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'San Nicolás Tolentino'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'San Vicente Tancuayalab'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Santa Catarina'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Santa María del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Santo Domingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Soledad de Graciano Sánchez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tamasopo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tamazunchale'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tampacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tampamolón Corona'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tamuín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tancanhuitz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tanlajás'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tanquián de Escobedo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Tierra Nueva'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Vanegas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Venado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Villa de Arista'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Villa de Arriaga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Villa de Guadalupe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Villa de la Paz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Villa de Ramos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Villa de Reyes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Villa Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Villa Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Xilitla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 24, 
          'name' =>'Zaragoza'
        ]);
        //Sinaloa

        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Ahome'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Angostura'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Badiraguato'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Choix'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Concordia'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Cosalá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Culiacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'El Fuerte'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Elota'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Escuinapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Guasave'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Mazatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Mocorito'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Navolato'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Rosario'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Salvador Alvarado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'San Ignacio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 25, 
          'name' =>'Sinaloa'
        ]);
        //Sonora
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Aconchi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Agua Prieta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Alamos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Altar'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Arivechi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Arizpe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Atil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Bacadéhuachi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Bacanora'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Bacerac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Bacoachi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Bácum'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Banámichi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Baviácora'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Bavispe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Benito Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Benjamín Hill'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Caborca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Cajeme'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Cananea'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Carbó'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Cucurpe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Cumpas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Divisaderos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Empalme'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Etchojoa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Fronteras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'General Plutarco Elías Calles'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Granados'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Guaymas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Hermosillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Heroica Nogales'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Huachinera'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Huásabas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Huatabampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Huépac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Imuris'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'La Colorada'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Magdalena'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Mazatán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Moctezuma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Naco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Nácori Chico'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Nacozari de García'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Navojoa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Onavas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Opodepe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Oquitoa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Pitiquito'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Puerto Peñasco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Quiriego'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Rayón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Rosario'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Sahuaripa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'San Felipe de Jesús'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'San Ignacio Río Muerto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'San Javier'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'San Luis Río Colorado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'San Miguel de Horcasitas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'San Pedro de la Cueva'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Santa Ana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Santa Cruz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Sáric'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Soyopa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Suaqui Grande'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Tepache'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Trincheras'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Tubutama'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Ures'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Villa Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Villa Pesqueira'
        ]);
        DB::table('cities')->insert([
          'state_id' => 26, 
          'name' =>'Yécora'
        ]);
        
        //Tabasco
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Balancán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Cárdenas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Centla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Centro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Comalcalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Cunduacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Emiliano Zapata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Huimanguillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Jalapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Jalpa de Méndez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Jonuta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Macuspana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Nacajuca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Paraíso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Tacotalpa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Teapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 27, 
          'name' =>'Tenosique'
        ]);
        //Tamaulipas

        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Abasolo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Aldama'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Altamira'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Antiguo Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Burgos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Bustamante'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Camargo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Casas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Ciudad Madero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Cruillas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'El Mante'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'G?émez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Gómez Farías'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'González'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Gustavo Díaz Ordaz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Jaumave'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Jiménez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Llera'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Mainero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Matamoros'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Méndez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Mier'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Miguel Alemán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Miquihuana'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Nuevo Laredo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Nuevo Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Ocampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Padilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Palmillas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Reynosa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Río Bravo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'San Carlos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'San Fernando'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'San Nicolás'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Soto la Marina'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Tampico'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Tula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Valle Hermoso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Victoria'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Villagrán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 28, 
          'name' =>'Xicoténcatl'
        ]);
        //Tlaxcala

        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Acuamanala de Miguel Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Altzayanca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Amaxac de Guerrero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Apetatitlán de Antonio Carvajal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Apizaco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Atlangatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Benito Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Calpulalpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Chiautempan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Contla de Juan Cuamatzi'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Cuapiaxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Cuaxomulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'El Carmen Tequexquitla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Emiliano Zapata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Españita'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Huamantla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Hueyotlipan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Ixtacuixtla de Mariano Matamoros'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Ixtenco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'La Magdalena Tlaltelulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Lázaro Cárdenas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Mazatecochco de José María Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Muñoz de Domingo Arenas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Nanacamilpa de Mariano Arista'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Natívitas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Panotla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Papalotla de Xicohténcatl'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'San Damián Texoloc'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'San Francisco Tetlanohcan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'San Jerónimo Zacualpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'San José Teacalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'San Juan Huactzinco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'San Lorenzo Axocomanitla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'San Lucas Tecopilco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'San Pablo del Monte'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Sanctórum de Lázaro Cárdenas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Santa Ana Nopalucan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Santa Apolonia Teacalco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Santa Catarina Ayometla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Santa Cruz Quilehtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Santa Cruz Tlaxcala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Santa Isabel Xiloxoxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tenancingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Teolocholco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tepetitla de Lardizábal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tepeyanco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Terrenate'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tetla de la Solidaridad'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tetlatlahuca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tlaxcala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tlaxco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tocatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Totolac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Tzompantepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Xaloztoc'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Xaltocan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Xicohtzinco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Yauhquemecan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Zacatelco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 29, 
          'name' =>'Zitlaltepec de Trinidad Sánchez Sa'
        ]);
        //Veracruz

        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Acajete'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Acatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Acayucan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Actopan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Acula'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Acultzingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Agua Dulce'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Alpatláhuac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Alto Lucero de Gutiérrez Barrios'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Altotonga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Alvarado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Amatitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Amatlán de los Reyes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Angel R. Cabada'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Apazapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Aquila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Astacinga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Atlahuilco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Atoyac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Atzacan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Atzalan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ayahualulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Banderilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Benito Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Boca del Río'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Calcahualco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Camarón de Tejeda'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Camerino Z. Mendoza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Carlos A. Carrillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Carrillo Puerto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Castillo de Teayo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Catemaco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Cazones'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Cerro Azul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chacaltianguis'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chalma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chiconamel'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chiconquiaco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chicontepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chinameca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chinampa de Gorostiza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chocamán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chontla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Chumatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Citlaltépetl'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coacoatzintla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coahuitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coatzacoalcos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coatzintla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coetzala'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Colipa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Comapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Córdoba'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Cosamaloapan de Carpio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Cosautlán de Carvajal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coscomatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Cosoleacaque'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Cotaxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coxquihui'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Coyutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Cuichapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Cuitláhuac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'El Higo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Emiliano Zapata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Espinal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Filomeno Mata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Fortín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Gutiérrez Zamora'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Hidalgotitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Huatusco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Huayacocotla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Hueyapan de Ocampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Huiloapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ignacio de la Llave'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ilamatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Isla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ixcatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ixhuacán de los Reyes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ixhuatlán de Madero'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ixhuatlán del Café'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ixhuatlán del Sureste'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ixhuatlancillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ixmatlahuacan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ixtaczoquitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Jalacingo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Jalcomulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Jáltipan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Jamapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Jesús Carranza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Jilotepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'José Azueta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Juan Rodríguez Clara'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Juchique de Ferrer'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'La Antigua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'La Perla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Landero y Coss'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Las Choapas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Las Minas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Las Vigas de Ramírez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Lerdo de Tejada'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Los Reyes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Magdalena'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Maltrata'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Manlio Fabio Altamirano'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Mariano Escobedo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Martínez de la Torre'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Mecatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Mecayapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Medellín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Miahuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Minatitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Misantla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Mixtla de Altamirano'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Moloacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Nanchital de Lázaro Cárdenas del R'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Naolinco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Naranjal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Naranjos Amatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Nautla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Nogales'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Oluta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Omealca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Orizaba'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Otatitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Oteapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ozuluama de Mascareñas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Pajapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Pánuco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Papantla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Paso de Ovejas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Paso del Macho'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Perote'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Platón Sánchez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Playa Vicente'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Poza Rica de Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Pueblo Viejo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Puente Nacional'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Rafael Delgado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Rafael Lucio'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Río Blanco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Saltabarranca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'San Andrés Tenejapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'San Andrés Tuxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'San Juan Evangelista'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'San Rafael'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Santiago Sochiapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Santiago Tuxtla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Sayula de Alemán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Sochiapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Soconusco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Soledad Atzompa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Soledad de Doblado'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Soteapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tamalín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tamiahua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tampico Alto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tancoco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tantima'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tantoyuca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tatahuicapan de Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tatatila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tecolutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tehuipango'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Temapache'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tempoal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tenampa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tenochtitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Teocelo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tepatlaxco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tepetlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tepetzintla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tequila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Texcatepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Texhuacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Texistepec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tezonapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tierra Blanca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tihuatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlachichilco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlacojalpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlacolulan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlacotalpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlacotepec de Mejía'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlalixcoyan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlalnelhuayocan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlaltetela'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlapacoyan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlaquilpa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tlilapan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tomatlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tonayán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Totutla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tres Valles'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Túxpam'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Tuxtilla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Ursulo Galván'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Uxpanapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Vega de Alatorre'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Veracruz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Villa Aldama'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Xalapa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Xico'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Xoxocotla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Yanga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Yecuatla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Zacualpan'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Zaragoza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Zentla'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Zongolica'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Zontecomatlán de López y Fuentes'
        ]);
        DB::table('cities')->insert([
          'state_id' => 30, 
          'name' =>'Zozocolco de Hidalgo'
        ]);
        //Yucatan

        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Abalá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Acanceh'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Akil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Baca'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Bokobá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Buctzotz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Cacalchén'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Calotmul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Cansahcab'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Cantamayec'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Celestún'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Cenotillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chacsinkín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chankom'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chapab'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chemax'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chichimilá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chicxulub Pueblo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chikindzonot'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chocholá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Chumayel'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Conkal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Cuncunul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Cuzamá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Dzán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Dzemul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Dzidzantún'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Dzilam de Bravo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Dzilam González'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Dzitás'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Dzoncauich'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Espita'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Halachó'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Hocabá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Hoctún'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Homún'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Huhí'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Hunucmá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Ixil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Izamal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Kanasín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Kantunil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Kaua'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Kinchil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Kopomá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Mama'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Maní'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Maxcanú'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Mayapán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Mérida'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Mocochá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Motul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Muna'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Muxupip'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Opichén'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Oxkutzcab'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Panabá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Peto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Progreso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Quintana Roo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Río Lagartos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Sacalum'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Samahil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'San Felipe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Sanahcat'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Santa Elena'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Seyé'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Sinanché'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Sotuta'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Sucilá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Sudzal'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Suma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tahdziú'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tahmek'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Teabo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tecoh'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tekal de Venegas'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tekantó'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tekax'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tekit'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tekom'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Telchac Pueblo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Telchac Puerto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Temax'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Temozón'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tepakán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tetiz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Teya'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Ticul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Timucuy'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tinum'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tixcacalcupul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tixkokob'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tixmehuac'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tixpéhual'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tizimín'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tunkás'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Tzucacab'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Uayma'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Ucú'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Umán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Valladolid'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Xocchel'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Yaxcabá'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Yaxkukul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 31, 
          'name' =>'Yobaín'
        ]);
        //Zacatecas

        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Apozol'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Apulco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Atolinga'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Benito Juárez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Calera'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Cañitas de Felipe Pescador'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Chalchihuites'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Concepción del Oro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Cuauhtémoc'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'El Plateado de Joaquín Amaro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'El Salvador'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Fresnillo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Genaro Codina'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'General Enrique Estrada'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'General Francisco R. Murguía'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'General Pánfilo Natera'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Guadalupe'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Huanusco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Jalpa'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Jerez'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Jiménez del Teul'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Juan Aldama'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Juchipila'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Loreto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Luis Moya'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Mazapil'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Melchor Ocampo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Mezquital del Oro'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Miguel Auza'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Momax'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Monte Escobedo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Morelos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Moyahua de Estrada'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Nochistlán de Mejía'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Noria de ?ngeles'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Ojocaliente'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Pánuco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Pinos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Río Grande'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Sain Alto'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Santa María de la Paz'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Sombrerete'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Susticacán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Tabasco'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Tepechitlán'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Tepetongo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Teul de González Ortega'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Tlaltenango de Sánchez Román'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Trancoso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Trinidad García de la Cadena'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Valparaíso'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Vetagrande'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Villa de Cos'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Villa García'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Villa González Ortega'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Villa Hidalgo'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Villanueva'
        ]);
        DB::table('cities')->insert([
          'state_id' => 32, 
          'name' =>'Zacatecas'
        ]);
    }
}
