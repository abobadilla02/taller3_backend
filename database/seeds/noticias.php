<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class noticias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Noticia')->insert([
        	'titular'=>'Las Marcianitas cayeron ante España en semis de los World Roller Games',
        	'entrada'=>'Ahora, Chile se enfrentará por la presea de bronce con Alemania, cuadro que en la otra semifinal cayó frente a Argentina.',
        	'cuerpo' => 'La selección chilena femenina de hockey patín se inclinó este jueves por penales ante su similar de España, tras un 2-2 en el tiempo reglamentario, en las semifinales de los World Roller Games, que se disputan en Nianjing, China.

El combinado dirigido por Rodolfo Oyola, que en los duelos previos registró triunfos sobre Portugal e Italia y una derrota con Argentina, comenzó enfocado el pleito contra el fuerte conjunto europeo y se fue al descanso en ventaja de 1-0.

Sin embargo, las españolas reaccionaron en la etapa complementaria y terminaron llevando la definición a los penales, donde las hispanas vencieron por 4-3 quedándose con la victoria y el paso a la final.

Ahora, Chile se enfrentará por la presea de bronce con Alemania, cuadro que en la otra semifinal cayó frente a Argentina.

Los World Roller Games es un evento inédito que agrupa a 10 disciplinas que utilizan patines: hockey sobre patines, patinaje de velocidad, maratón, patinaje artístico, hockey línea, freestyle, roller derby, descenso en línea, skateboarding y descenso alpino. ',
        	'imagen' => 'http://img.soy-chile.cl/Fotos/2017/08/31/file_20170831111243.jpg',
        	'fecha' => Carbon::create('2017', '09', '09'),
        	'categoria_id' => '1',
        	'usuario_id'=>'1',
        ]);

        DB::table('Noticia')->insert([
        	'titular'=>'Con el corazón puesto en la NBA y en Chile',
        	'entrada'=>'Tras superar una afección cardíaca, Manuel Suárez, hijo de una chilena, brilló en la NCAA. En este último año, Manny (su nombre en EEUU) jugará por la prestigiosa Universidad de Creighton, buscando llegar al draft de la NBA.',
        	'cuerpo' => 'Claudio Jorquera, el nuevo técnico nacional, está tirando las primeras líneas de su trabajo y en sus carpetas están los nombres de los nacionales que juegan en el extranjero. Pero no está el de Manuel Suárez. Y debería. Tiene 23 años, de madre chilena y padre español, mide 2,08 metros y ha destacado en el baloncesto estadounidense. Tanto, que la NBA no aparece como un sueño imposible para él.

Su historia, eso sí, no ha sido sólo de felicidad.
Manny comenzó en 2013 en la Universidad de Fordham, un equipo de la División 1 de la Conferencia North East 10 de la NCAA. Recién en 2015 los entrenadores le dieron la confianza y comenzó a jugar con regularidad.

El 13 de marzo de ese año murió su tía Lory, una segunda madre para él, y un mes después, en una misa, sintió fuertes malestares en el corazón. Fue internado y, según cuenta, le detuvieron el corazón para darle el shock eléctrico que le permitiera volver a funcionar normalmente. El procedimiento resultó perfecto, aunque los exámenes le arrojaron hipertiroidismo.

“Tomo medicinas todos los días, pero estoy fuerte para jugar. No tengo ningún tipo de secuelas”, asegura Suárez, en correcto castellano, aunque recurre al inglés en palabras menos frecuentes.

Tras recuperarse, el entrenador decidió no volver a incluirlo y le dijo que sería banca. No quería arriesgar su salud. En mayo de ese año Suárez tomo una decisión complicada: irse a la Universidad de Adelphi, lo que significaba bajar a la División 2. Sus oportunidades de ser considerado en el camino a la NBA se esfumaban.

En la nueva Casa de Estudios brilló y este mes se graduó con honores. Pero su carrera en la NCAA no se acabó; al contrario, parte con mayor fuerza ahora, con la mira puesta en un solo objetivo: llegar al draft de la NBA.

El chileno-español volverá a jugar en la División 1, pues el destacado entrenador Greg McDermont se lo llevó a la Universidad de Creighton, que pertenece a la Conferencia Big East, la tercera en importancia en el país. Una treintena de casas de estudio manifestaron su interés por contar con él.

Los Bluejays tienen un prestigio en la NCAA. El equipo de Omaha, Nebraska, tiene 20 presencias en finales de la liga y ha producido 14 jugadores NBA, tres de los cuales están activos. Uno de ellos enfrentará la final: Kyle Korver, por Cleveland.

Sobre las opciones en la liga mayor del baloncesto, Suárez asegura que “con el tiempo y el trabajo todo es posible. Si va bien este año, puedo llegar a la NBA”.

En el deporte estadounidense todo se resume en estadísticas. En el último año en Adelphi, Manny promedió en 25,8 minutos, 13,2 puntos; 7,7 rebotes y 2,5 bloqueos; e hizo seis doble-dobles. Consultado sobre qué números espera tener con Creighton, asegura que “sé que debo jugar duro, me la voy a jugar, pero en serio, no tengo un número en mi cabeza, yo voy a mostrar mi juego”.

El baquetbolista sabe que esta, que debe ser su última temporada en la NCAA, es la última ventana que tendrá para mostrarse e intentar entrar a la liga.

En los múltiples perfiles del chileno en Estados Unidos, lo definen como zurdo, aunque es ambidiestro. Se ubica en la cancha en esa misma zona, aunque puede atacar por la derecha también. Puede cubrir tres posiciones, es un ala-pivote que no espera debajo del tablero, sino que driblea y encara con facilidad. Puede funcionar como 3, 4 ó 5.

Pero aunque tiene la NBA en la mira, también hay un espacio en el corazón para otro sueño: jugar por Chile. Suárez asegura que se siente en buena parte chileno, aunque nunca ha visitado el país y sí ha ido varias veces a España. “Es por las fechas. Las vacaciones en Estados Unidos coinciden con las de Europa, mas no con las de Chile”, explica.

La madre del jugador se llevó a la familia a Estados Unidos y así se fueron cortando los nexos con Chile. Igual, hace unos años inició las gestiones para que su otra hija, María Teresa, jugara por la Roja femenina. Ella no fue considerada por el cuerpo técnico de la época.

Manny espera una mejor suerte. “Yo siempre he querido jugar por Chile, pero nunca se sabe con quién hablar y todo eso. Poder jugar por alguna de las dos selecciones (Chile o España) sería una bendición. Viajaría para hacerlo”, comenta.

Suárez se integrará a su equipo en agosto, aunque la liga comienza el 10 de noviembre. Ese mismo mes serán los primeros partidsos de la Eliminatoria al Mundial. Hoy, Claudio Jorquera ya lo sumará a su lista de jugadores a seguir.',
        	'imagen' => 'http://d2vpb0i3hb2k8a.cloudfront.net/wp-content/uploads/sites/7/2017/05/27/manny-su%C3%A1rez-820x385.jpg',
        	'fecha' => Carbon::create('2017', '10', '09'),
        	'categoria_id' => '2',
        	'usuario_id'=>'2',
        ]);

        DB::table('Noticia')->insert([
        	'titular'=>'Chile cierra sin puntos la fase de grupos del Mundial Junior',
        	'entrada'=>'La selección perdió ante Corea del Sur y finalizó última de su grupo. Ahora disputará las rondas para definir el lugar 21 de la cita en Argelia. ',
        	'cuerpo' => 'Sin puntos finalizó Chile la primera ronda del Mundial masculino Junior de balonmano. Este mediodía, la Rojita cayó por 32-29 ante Corea del Sur, el otro país que no sumaba puntos en la zona, en el cierre del Grupo A.

De esta manera, Chile jugará desde mañana un playoffs ante los colistas de los cuatro grupos para definir los puestos 21 a 24. El primer rival será Qatar.',
        	'imagen'=>'http://d2vpb0i3hb2k8a.cloudfront.net/wp-content/uploads/sites/7/2017/07/24/corea-balonmano-820x385.jpg',
        	'fecha'=>Carbon::create('2017', '10', '09'),
        	'categoria_id' => '3',
        	'usuario_id'=>'3',
        ]);
    }
}
