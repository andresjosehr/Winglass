<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Beetle - Contact</title>
		<link rel="stylesheet" href="css/layers.min.css" media="screen">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="style.css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">

  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  		<script src="css/bootstrap-select-1.12.4/dist/js/bootstrap-select.js"></script>	
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  		<link rel="stylesheet" href="css/bootstrap-select-1.12.4/dist/css/bootstrap-select.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	</head>

	<body class="page">

			<?php
			include ("menu.php");
			?>
<div id="intro-wrap">
                <div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fadeUp">                 
                    <div class="intro-item" style="background-image: url(img/Fondo.png);">
                        <div class="caption">
                            <h2>Somos su cristalería de confianza</h2>
                            <p>Pioneros en la construcción invisible</p>
                            <a class="button white transparent" href="#">SOLICITE SU CITA YA</a>
                        </div><!-- caption -->
                
                    </div>                                  

                 
                    </div>                                                                      
                </div><!-- intro -->
            </div><!-- intro-wrap -->

		<main role="main">



			<div id="main">

				<section class="row section">
					<div class="row-content buffer even clear-after">
						<div class="section-title"><h1>CONTACTO</h1></div>	
						<p>Solicite una cita con nuestro equipo:<br>Si ya llenó este formulario previamente, coloque el n° de ticket que le enviamos vía e-mail: </p>
						<div class="column nine">
							<form id="contact-form" class="contact-section" method="post" action="">
								<span class="pre-input"><i class="icon icon-user"></i></span>
								<input class="name plain buffer" type="text" name="name" placeholder="Nombre">
								<span class="pre-input"><i class="icon icon-email"></i></span>
								<input class="email plain buffer" type="email" name="email" placeholder="Email">




                                <span class="pre-input"><i class="icon icon-telephone"></i></span>
                                <input class="email plain buffer" type="email" name="email" placeholder="Telefono">



<script type="text/javascript">

/**

 * Funcion que se ejecuta al seleccionar una opcion del primer select

 */

function cargarSelect2(valor)

{

    /**

     * Este array contiene los valores sel segundo select

     * Los valores del mismo son:

     *  - hace referencia al value del primer select. Es para saber que valores

     *  mostrar una vez se haya seleccionado una opcion del primer select

     *  - value que se asignara

     *  - testo que se asignara

     */

    var arrayValores=new Array(

        new Array(1,1,"Municipio Alto Orinoco (La Esmeralda)"),
        new Array(1,2,"Municipio Atabapo (San Fernando de Atabapo)"),
        new Array(1,3,"Municipio Atures (Puerto Ayacucho)"),
        new Array(1,4,"Municipio Autana(Isla Raton)"),
        new Array(1,5,"Municipio Manapiare (San Juan de Manapiare)"),
        new Array(1,6,"Municipio Maroa (Maroa)"),
        new Array(1,7,"Municipio Rio Negro (San Carlos de Rio NegroS)"),

        new Array(2,1,"Municipio Anaco (Anaco)"),
        new Array(2,3,"Municipio Aragua (Aragua de Barcelona)"),
        new Array(2,4,"Municipio Bolivar (Barcelona)"),
        new Array(2,5,"Municipio Bruzual (Clarines)"),
        new Array(2,6,"Municipio Cajigal (Onoto)"),
        new Array(2,7,"Municipio Diego Bautista Urbaneja(Lecheria)"),
        new Array(2,8,"Municipio Freites(Cantaura)"),
        new Array(2,9,"Municipio Guanipa (San Jose de Guanipa)"),
        new Array(2,10,"Municipio Guanta (Guanta)"),
        new Array(2,11,"Municipio Independencia (Soledad)"),
        new Array(2,12,"Municipio Libertad (San Mateo)"),
        new Array(2,13,"Municipio McGregor (El Chaparro)"),
        new Array(2,14,"Municipio Miranda (Pariaguan)"),
        new Array(2,15,"Municipio Monagas (San Diego de Cabrutica)"),
        new Array(2,16,"Municipio Peñalver (Puerto Piritu)"),
        new Array(2,17,"Municipio Piritu (Piritu)"),
        new Array(2,18,"Municipio San Juan de Capistrano (Boca de Uchire)"),
        new Array(2,29,"Municipio Santa Ana (Santa Ana)"),
        new Array(2,20,"Municipio Simon Rodriguez (El Tigre)"),
        new Array(2,21,"Municipio Sotillo (Puerto La Cruz)"),

        new Array(3,1,"Municipio Achaguas (Achaguas)"),
        new Array(3,2,"Municipio Biruaca (Biruaca)"),
        new Array(3,3,"Municipio Muñoz (Brazual)"),
        new Array(3,4,"Municipio Paez (Guasdualito)"),
        new Array(3,5,"Municipio Padre Camejo (San Juan de Payara)"),
        new Array(3,6,"Municipio Romulo Gallegos (Elorza)"),
        new Array(3,7,"Municipio San Fernando (San Fernando de Apure)"),

        new Array(4,1,"Municipio Bolivar (San Mateo)"),
        new Array(4,2,"Municipio Camatagua (Camatagua)"),
        new Array(4,3,"Municipio Francisco Linares Alcantara (Santa Rita)"),
        new Array(4,4,"Municipio Giradot (Maracay)"),
        new Array(4,5,"Municipio Jose Angel Lamas (Santa Cruz)"),
        new Array(4,6,"Municipio Jose Felix Rivas (La Victoria)"),
        new Array(4,7,"Municipio Jose Rafael Revenga (El consejo)"),
        new Array(4,8,"Municipio Libertador(Palo Negro)"),
        new Array(4,9,"Municipio Mario Briceño Iragorry (El Limon)"),
        new Array(4,10,"Municipio Ocumare de la Costa de Oro (Ocumare de la Costa)"),
        new Array(4,11,"Municipio San Casimiro (San Casimiro)"),
        new Array(4,12,"Municipio San Sebastian (San Sebastian de los Reyes)"),
        new Array(4,13,"Municipio Santiago Mariño (Turmero)"),
        new Array(4,14,"Municipio Santos Michelena (Las Tejerias)"),
        new Array(4,15,"Municipio Sucre (Cagua)"),
        new Array(4,16,"Municipio Tovar (Colonia Tovar)"),
        new Array(4,17,"Municipio Urdaneta (Barbacoas)"),
        new Array(4,18,"Municipio Zamora (Villa de Cura)"),

        new Array(5,1,"Municipio Alberto Arvelo Torrealba (Sabaneta)"),
        new Array(5,2,"Municipio Andrés Eloy Blanco (El Cantón)"),
        new Array(5,3,"Municipio Antonio José de Sucre (Socopó)"),
        new Array(5,4,"Municipio Arismendi (Arismendi)"),
        new Array(5,5,"Municipio (Barinas)"),
        new Array(5,6,"Municipio Bolívar (Barinitas)"),
        new Array(5,7,"Municipio Cruz Paredes (Barrancas)"),
        new Array(5,8,"Municipio Ezequiel Zamora (Santa Bárbara)"),
        new Array(5,9,"Municipio Obispos (Obispos)"),
        new Array(5,10,"Municipio Pedraza (Ciudad Bolivia)"),
        new Array(5,11,"Municipio Rojas (Libertad)"),
        new Array(5,12,"Municipio Sosa (Ciudad de Nutrias)"),

        new Array(6,1,"Municipio Caroní (Ciudad Guayana)"),
        new Array(6,2,"Municipio Cedeño (Caicara del Orinoco)"),
        new Array(6,3,"Municipio El Callao (El Callao)"),
        new Array(6,4,"Municipio Gran Sabana (Santa Elena de Uairén)"),
        new Array(6,5,"Municipio Heres (Ciudad Bolívar)"),
        new Array(6,6,"Municipio Piar (Upata)"),
        new Array(6,7,"Municipio Raúl Leoni (Ciudad Piar)"),
        new Array(6,8,"Municipio Roscio (Guasipati)"),
        new Array(6,9,"Municipio Sifontes (Tumeremo)"),
        new Array(6,10,"Municipio Sucre (Maripa)"),
        new Array(6,11,"Municipio Padre Pedro Chen (El Palmar)"),

        new Array(7,1,"Municipio Bejuma (Bejuma)"),
        new Array(7,2,"Municipio Carlos Arvelo (Güigüe)"),
        new Array(7,3,"Municipio Diego Ibarra (Mariara)"),
        new Array(7,4,"Municipio Guacara (Guacara)"),
        new Array(7,5,"Municipio Juan José Mora (Morón)"),
        new Array(7,6,"Municipio Libertador (Tocuyito)"),
        new Array(7,7,"Municipio Los Guayos (Los Guayos)"),
        new Array(7,8,"Municipio  Miranda (Miranda)"),
        new Array(7,9,"Municipio Montalbán (Montalbán)"),
        new Array(7,10,"Municipio Naguanagua (Naguanagua)"),
        new Array(7,11,"Municipio Puerto Cabello (Puerto Cabello)"),
        new Array(7,12,"Municipio San Diego (San Diego)"),
        new Array(7,13,"Municipio San Joaquín (San Joaquín)"),
        new Array(7,14,"Municipio Valencia (Valencia)"),

        new Array(8,1,"Municipio Anzoátegui (Cojedes)"),
        new Array(8,2,"Municipio Falcón (Tinaquillo)"),
        new Array(8,3,"Municipio Girardot (El Baúl)"),
        new Array(8,4,"Municipio Lima Blanco (Macapo)"),
        new Array(8,5,"Municipio Pao de San Juan Bautista (El Pao)"),
        new Array(8,6,"Municipio Ricaurte (Libertad)"),
        new Array(8,7,"Municipio Rómulo Gallegos"),

        new Array(9,1,"Municipio Antonio Díaz Curiapo (Curiapo)"),
        new Array(9,2,"Municipio Casacoima (Sierra Imataca)"),
        new Array(9,3,"Municipio Pedernales (Pedernales)"),
        new Array(9,4,"Municipio Tucupita (Tucupita)"),

        new Array(10,1,"Municipio Acosta (San Juan de los Cayos)"),
        new Array(10,2,"Municipio Bolívar (San Luis)"),
        new Array(10,3,"Municipio Buchivacoa (Capatárida)"),
        new Array(10,4,"Municipio Cacique Manaure (Yaracal)"),
        new Array(10,5,"Municipio Carirubana (Punto Fijo)"),
        new Array(10,6,"Municipio Colina (La Vela de Coro)"),
        new Array(10,7,"Municipio Dabajuro (Dabajuro)"),
        new Array(10,8,"Municipio Democracia (Pedregal)"),
        new Array(10,9,"Municipio Falcón (Pueblo Nuevo)"),
        new Array(10,10,"Municipio Federación (Churuguara)"),
        new Array(10,11,"Municipio Jacura (Jacura)"),
        new Array(10,12,"Municipio Los Taques (Santa Cruz de Los Taques)"),
        new Array(10,13,"Municipio Mauroa (Mene de Mauroa)"),
        new Array(10,14,"Municipio Miranda (Santa Ana de Coro)"),
        new Array(10,15,"Municipio Monseñor Iturriza (Chichiriviche)"),
        new Array(10,16,"Municipio Palmasola (Palmasola)"),
        new Array(10,17,"Municipio Petit (Cabure)"),
        new Array(10,18,"Municipio Píritu (Píritu)"),
        new Array(10,19,"Municipio San Francisco (Mirimire)"),
        new Array(10,20,"Municipio Silva (Tucacas)"),
        new Array(10,21,"Municipio (La Cruz de Taratara)"),
        new Array(10,22,"Municipio Tocópero (Tocópero)"),
        new Array(10,23,"Municipio Unión (Santa Cruz de Bucaral)"),
        new Array(10,24,"Municipio Urumaco (Urumaco)"),
        new Array(10,25,"Municipio Zamora (Puerto Cumarebo)"),

        new Array(11,1,"Municipio Esteros de Camaguan(Camaguan)"),
        new Array(11,2,"Municipio Chaguaramas(Chaguaramas)"),
        new Array(11,3,"Municipio El Socorro (El Socorro)"),
        new Array(11,4,"Municipio Francisco de Miranda (Calabozo)"),
        new Array(11,5,"Municipio José Félix Ribas (Tucupido)"),
        new Array(11,6,"Municipio José Tadeo Monagas (Altagracia de Orituco)"),
        new Array(11,7,"Municipio Juan Germán Roscio (San Juan de Los Morros)"),
        new Array(11,8,"Municipio Julián Mellado (El Sombrero)"),
        new Array(11,9,"Municipio Las Mercedes (Las Mercedes)"),
        new Array(11,10,"Municipio Leonardo Infante (Valle de La Pascua)"),
        new Array(11,11,"Municipio Pedro Zaraza (Zaraza)"),
        new Array(11,12,"Municipio Ortíz (Ortíz)"),
        new Array(11,13,"Municipio San Gerónimo de Guayabal (Guayabal)"),
        new Array(11,14,"Municipio San José de Guaribe (San José de Guaribe)"),
        new Array(11,15,"Municipio Santa María de Ipire (Santa María de Ipire)"),

        new Array(12,1,"Municipio Andrés Eloy Blanco (Sanare)"),
        new Array(12,2,"Municipio Crespo (Duaca)"),
        new Array(12,3,"Municipio Iribarren (Barquisimeto)"),
        new Array(12,4,"Municipio Jiménez (Quibor)"),
        new Array(12,5,"Municipio Morán (El Tocuyo)"),
        new Array(12,6,"Municipio Palavecino (Cabudare)"),
        new Array(12,7,"Municipio Simón Planas (Sarare)"),
        new Array(12,8,"Municipio Torres (Carora)"),
        new Array(12,9,"Municipio Urdaneta (Siquisique)"),

        new Array(13,1,"Municipio Alberto Adriani (El Vigía)"),
        new Array(13,2,"Municipio Andrés Bello (La Azulita)"),
        new Array(13,3,"Municipio Antonio Pinto Salinas (Santa Cruz de Mora)"),
        new Array(13,4,"Municipio Sucre (Lagunillas)"),
        new Array(13,5,"Municipio Tovar (Tovar)"),
        new Array(13,6,"Municipio Tulio Febres Cordero (Nueva Bolivia)"),
        new Array(13,7,"Municipio Zea (Zea)"),

        new Array(14,1,"Municipio Acevedo (Caucagua)"),
        new Array(14,2,"Municipio Andrés Bello (San José de Barlovento)"),
        new Array(14,3,"Municipio Baruta (Baruta)"),
        new Array(14,4,"Municipio Brión (Higuerote)"),
        new Array(14,5,"Municipio Buroz (Mamporal)"),
        new Array(14,6,"Municipio Carrizal (Carrizal)"),
        new Array(14,7,"Municipio Chacao (Chacao)"),
        new Array(14,8,"Municipio Cristóbal Rojas (Charallave)"),
        new Array(14,9,"Municipio El Hatillo (El Hatillo)"),
        new Array(14,10,"Municipio Guaicaipuro (Los Teques)"),
        new Array(14,11,"Municipio Independencia (Santa Teresa del Tuy)"),
        new Array(14,12,"Municipio Lander (Ocumare del Tuy)"),
        new Array(14,13,"Municipio Los Salias (San Antonio de los Altos)"),
        new Array(14,14,"Municipio Páez (Río Chico)"),
        new Array(14,15,"Municipio Paz Castillo (Santa Lucía)"),
        new Array(14,16,"Municipio Pedro Gual (Cúpira)"),
        new Array(14,17,"Municipio Plaza (Guarenas)"),
        new Array(14,18,"Municipio Simón Bolívar (San Francisco de Yare)"),
        new Array(14,19,"Municipio Sucre (Petare)"),
        new Array(14,20,"Municipio Urdaneta (Cúa)"),
        new Array(14,21,"Municipio Zamora (Guatire)"),

        new Array(15,1,"Municipio (San Antonio de Capayacuar)"),
        new Array(15,2,"Municipio Aguasay (Aguasai)"),
        new Array(15,3,"Municipio Bolivar (Caripito)"),
        new Array(15,4,"Municipio Caripe (Caripe)"),
        new Array(15,5,"Municipio Cedeño (Caicara)"),
        new Array(15,6,"Municipio Ezequiel Zamora (Punta de Mata)"),
        new Array(15,7,"Municipio Libertador (Temblador)"),
        new Array(15,8,"Municipio Maturín (Maturín)"),
        new Array(15,9,"Municipio Piar (Aragua)"),
        new Array(15,10,"Municipio Punceres (Quiriquire)"),
        new Array(15,11,"Municipio Santa Bárbara (Santa Bárbara)"),
        new Array(15,12,"Municipio Sotillo (Barrancas del Orinco)"),
        new Array(15,13,"Municipio Uracoa (Uracoa)"),

        new Array(16,1,"Municipio Antolín del Campo (La Plaza de Paraguachí)"),
        new Array(16,2,"Municipio Arismendi (La Asunción)"),
        new Array(16,3,"Municipio Díaz (San Juan Bautista)"),
        new Array(16,4,"Municipio García (El Valle del Espíritu Santo)"),
        new Array(16,5,"Municipio Gómez (Santa Ana)"),
        new Array(16,6,"Municipio Maneiro (Pampatar)"),
        new Array(16,7,"Municipio Marcano (Juan Griego)"),
        new Array(16,8,"Municipio Mariño (Porlamar)"),
        new Array(16,9,"Municipio Península de Macanao (Boca de Río)"),
        new Array(16,10,"Municipio Tubores (Punta de Piedras)"),
        new Array(16,11,"Municipio Villalba (San Pedro de Coche)"),


        new Array(17,1,"Municipio Agua Blanca (Agua Blanca)"),
        new Array(17,2,"Municipio Araure (Araure)"),
        new Array(17,3,"Municipio Esteller (Píritu)"),
        new Array(17,4,"Municipio Guanare (Guanare)"),
        new Array(17,5,"Municipio Guanarito (Guanarito)"),
        new Array(17,6,"Municipio Monseñor José Vicenti de Unda (Chabasquén de Unda)"),
        new Array(17,7,"Municipio Ospino (Ospino)"),
        new Array(17,8,"Municipio Páez (Acarigua)"),
        new Array(17,9,"Municipio Papelón (Papelón)"),
        new Array(17,10,"Municipio San Genaro de Boconoíto (Boconoíto)"),
        new Array(17,11,"Municipio San Rafael de Onoto (San Rafael de Onoto)"),
        new Array(17,12,"Municipio Santa Rosalía (El Playón)"),
        new Array(17,13,"Municipio Sucre (Biscucuy)"),
        new Array(17,14,"Municipio Turén (Villa Bruzual)"),

        new Array(18,1,"Municipio Andrés Eloy Blanco (Casanay)"),
        new Array(18,2,"Municipio Andrés Mata (San José de Aerocuar)"),
        new Array(18,3,"Municipio Arismendi (Río Caribe)"),
        new Array(18,4,"Municipio Benítez (El Pilar)"),
        new Array(18,5,"Municipio Bermúdez (Carúpano)"),
        new Array(18,6,"Municipio Bolívar (Marigüitar)"),
        new Array(18,7,"Municipio Cajigal (Yaguaraparo)"),
        new Array(18,8,"Municipio Cruz Salmerón Acosta (Araya)"),
        new Array(18,9,"Municipio Libertador (Tunapuy)"),
        new Array(18,10,"Municipio Mariño (Irapa)"),
        new Array(18,11,"Municipio Mejía (San Antonio del Golfo)"),
        new Array(18,12,"Municipio Montes (Cumanacoa)"),
        new Array(18,13,"Municipio Ribero (Cariaco)"),
        new Array(18,14,"Municipio Sucre (Cumaná)"),
        new Array(18,15,"Municipio Valdez (Güiria)"),

        new Array(19,1,"Municipio Andrés Bello(Cordero)"),
        new Array(19,2,"Municipio Antonio Rómulo Costa (Las Mesas)"),
        new Array(19,3,"Municipio Ayacucho (El Colón)"),
        new Array(19,4,"Municipio Bolívar (San Antonio del Táchira)"),
        new Array(19,5,"Municipio Cárdenas (Táriba)"),
        new Array(19,6,"Municipio Córdoba (Santa Ana de Táchira)"),
        new Array(19,7,"Municipio Fernández Feo (San Rafael del Piñal)"),
        new Array(19,8,"Municipio Francisco de Miranda (San José de Bolívar)"),
        new Array(19,9,"Municipio García de Hevia (La Fría)"),
        new Array(19,10,"Municipio Guásimos (Palmira)"),
        new Array(19,11,"Municipio Independencia (Capacho Nuevo)"),
        new Array(19,12,"Municipio Jáuregui (La Grita)"),
        new Array(19,13,"Municipio José María Vargas (El Cobre)"),
        new Array(19,14,"Municipio Junín (Rubio)"),
        new Array(19,15,"Municipio San Judas Tadeo (Umuquena)"),
        new Array(19,16,"Municipio Libertad (Capacho Viejo)"),
        new Array(19,17,"Municipio Libertador (Abejales)"),
        new Array(19,18,"Municipio Lobatera (Lobatera)"),
        new Array(19,19,"Municipio Michelena (Michelena)"),
        new Array(19,20,"Municipio Panamericano (Coloncito)"),
        new Array(19,21,"Municipio Pedro María Ureña (Ureña)"),
        new Array(19,22,"Municipio Rafael Urdaneta (Delicias)"),
        new Array(19,23,"Municipio Samuel Dario Maldonado (La Tendida)"),
        new Array(19,24,"Municipio San Cristóbal (San Cristóbal)"),
        new Array(19,25,"Municipio Seboruco (Seboruco)"),
        new Array(19,26,"Municipio Simón Rodríguez (San Simon)"),
        new Array(19,27,"Municipio Sucre (Queniquea)"),
        new Array(19,28,"Municipio Torbes (San Josesito)"),
        new Array(19,29,"Municipio Uribante (Pregonero)"),

        new Array(20,1,"Municipio Andrés Bello (Santa Isabel)"),
        new Array(20,2,"Municipio Boconó (Boconó)"),
        new Array(20,3,"Municipio Bolívar (Sabana Grande)"),
        new Array(20,4,"Municipio Candelaria (Chejendé)"),
        new Array(20,5,"Municipio Carache (Carache)"),
        new Array(20,6,"Municipio Escuque (Escuque)"),
        new Array(20,7,"Municipio José Felipe Márquez Cañizalez (El Paradero)"),
        new Array(20,8,"Municipio Juan Vicente Campos Elías (Campo Elías)"),
        new Array(20,9,"Municipio La Ceiba (Santa Apolonia)"),
        new Array(20,10,"Municipio Miranda (El Dividive)"),
        new Array(20,11,"Municipio Pampán (Pampán)"),
        new Array(20,12,"Municipio Trujillo (Trujillo)"),
        new Array(20,13,"Municipio Andres Linares (San Lazaro)"),
        new Array(20,14,"Municipio Pampanito (Pampanito)"),

        new Array(21,1,"Municipio Vargas (La Guaira)"),

        new Array(22,1,"Municipio Arístides Bastidas (San Pablo)"),
        new Array(22,2,"Municipio Bolívar (Aroa)"),
        new Array(22,3,"Municipio Bruzual (Chivacoa)"),
        new Array(22,4,"Municipio Cocorote (Cocorote)"),
        new Array(22,5,"Municipio Independencia (Independencia)"),

        new Array(23,1,"Municipio Almirante Padilla (El Toro)"),
        new Array(23,2,"Municipio Baralt (San Timoteo)"),
        new Array(23,3,"Municipio Cabimas (Cabimas)"),
        new Array(23,4,"Municipio Catatumbo (Encontrados)"),
        new Array(23,5,"Municipio Colón (San Carlos del Zulia)"),
        new Array(23,6,"Municipio Francisco Javier Pulgar (Pueblo Nuevo-El Chivo)"),
        new Array(23,7,"Municipio Jesús Enrique Losada (La Concepción)"),
        new Array(23,8,"Municipio Jesús María Semprún (Casigua El Cubo)"),





        

    );

    if(valor==0)

    {

        // desactivamos el segundo select

        document.getElementById("select2").disabled=true;

    }else{

        // eliminamos todos los posibles valores que contenga el select2

        document.getElementById("select2").options.length=0;

 

        // añadimos los nuevos valores al select2

        document.getElementById("select2").options[0]=new Option("Selecciona tu municipio", "0");

        for(i=0;i<arrayValores.length;i++)

        {

            // unicamente añadimos las opciones que pertenecen al id seleccionado

            // del primer select

            if(arrayValores[i][0]==valor)

            {

                document.getElementById("select2").options[document.getElementById("select2").options.length]=new Option(arrayValores[i][2], arrayValores[i][1]);

            }

        }

 

        // habilitamos el segundo select

        document.getElementById("select2").disabled=false;

    }

}

 

/**

 * Una vez selecciona una valor del segundo selecte, obtenemos la información

 * de los dos selects y la mostramos

 */

function seleccinado_select2(value)

{

    var v1 = document.getElementById("select1");

    var valor1 = v1.options[v1.selectedIndex].value;

    var text1 = v1.options[v1.selectedIndex].text;

    var v2 = document.getElementById("select2");

    var valor2 = v2.options[v2.selectedIndex].value;

    var text2 = v2.options[v2.selectedIndex].text;

 

    alert("Se ha seleccionado el valor "+valor1+" ("+text1+") del primer select y el valor "+valor2+" ("+text2+") del segundo select");

}

</script>



 


<form>


    <p>

        <select class="show-tick form-control" >

            <option>Selecciona tu Ciudad</option>
            <option>Acarigua</option>
            <option>Anaco</option>
            <option>Araure</option>
            <option>Barcelona</option>
            <option>Barinas</option>
            <option>Barquisimeto</option>
            <option>Baruta</option>
            <option>Cabimas</option>
            <option>Cagua</option>
            <option>Calabozo</option>
            <option>Caracas</option>
            <option>Carupano</option>
            <option>Ciudad Bolivar</option>
            <option>Ciudad Ojeda</option>
            <option>Cua</option>
            <option>Cumana</option>
            <option>El Limon</option>
            <option>El Tigre</option>
            <option>El Vigia</option>
            <option>Guacara</option>
            <option>Guanare</option>
            <option>Garenas</option>
            <option>Guatire</option>
            <option>La Victoria</option>
            <option>Maracaibo</option>
            <option>Maracay</option>
            <option>Maturin</option>
            <option>Merida</option>
            <option>Naguanagua</option>
            <option>Puerto Cabello</option>
            <option>Puerto La Cruz</option>
            <option>San Cristobal</option>
            <option>San Diego</option>
            <option>San Fernando de Apure</option>
            <option>Santa Teresa del Tuy</option>
            <option>Turmero</option>
            <option>Upata</option>
            <option>Valencia</option>
            <option>Valera</option>



        </select>

    </p>



    <p>

        <select class="show-tick form-control" data-live-search="true" class="email plain buffer" id='select1' onchange='cargarSelect2(this.value);'>

            <option value='0'>Selecciona tu Estado</option>
            <option value='1'>Amazonas</option>
            <option value='2'>Anzoategui</option>
            <option value='3'>Apure</option>
            <option value='4'>Aragua</option>
            <option value='5'>Barinas</option>
            <option value='6'>Bolivar</option>
            <option value='7'>Carabobo</option>
            <option value='8'>Cojedes</option>
            <option value='9'>Delta Amacuro</option>
            <option value='10'>Falcon</option>
            <option value='11'>Guarico</option>
            <option value='12'>Lara</option>
            <option value='13'>Merida</option>
            <option value='14'>Miranda</option>
            <option value='15'>Monagas</option>
            <option value='16'>Nueva Esparta</option>
            <option value='17'>Portuguesa</option>
            <option value='18'>Sucre</option>
            <option value='19'>Tachira</option>
            <option value='20'>Trujillo</option>
            <option value='21'>Vargas</option>
            <option value='22'>Yaracuy</option>
            <option value='23'>Zulia</option>


        </select>

    </p>

 

    <p>

        <select id='select2' class="show-tick form-control" data-live-search="true" class="email plain buffer" onchange='seleccinado_select2();' disabled>

            <option value='0'>Selecciona tu municipio</option>

        </select>

    </p>

                                    <p>
                                  <select id="tokens" style="height:18em;" class="selectpicker form-control" multiple data-live-search="true">
                                    <option data-tokens="first">Ventana Proyectante</option>
                                    <option data-tokens="second">Ventana Pivotante</option>
                                    <option data-tokens="last">Ventana Batiente - Sencilla con Bisagras</option>
                                    <option data-tokens="">Ventana Batiente - Cuadricula</option>
                                    <option data-tokens="">Ventana Corredera - Panoramica</option>
                                    <option data-tokens="">Ventana Corredera - Belgass</option>
                                    <option data-tokens="">Ventana Corredera - Escobel</option>
                                    <option data-tokens="">Puerta de Baño Batiente - Deluxe</option>
                                    <option data-tokens="">Puerta de Baño Colgante Corredera - Sencilla</option>
                                    <option data-tokens="">Puerta de Vidrio Batiente - Tipo P</option>
                                    <option data-tokens="">Puerta de Vidrio Batiente - Todovision</option>
                                    <option data-tokens="">Puerta de Vidrio Batiente - Europivot</option>
                                    <option data-tokens="">Puerta de Vidrio Batiente - Enmarcada de Aluminio</option>
                                    <option data-tokens="">Puerta de Vidrio Batiente - Enmarcada con Romanillas de Aluminio</option>
                                    <option data-tokens="">Puerta de Vidrio Colgante - Todovision Deluxe con Cenefa</option>
                                    <option data-tokens="">Puerta de Vidrio Colgante - Enmarcada (Serie 1000)</option>
                                    <option data-tokens="">Puerta de Vidrio Colgante - Murano</option>
                                    <option data-tokens="">Cerramiento - Panoramico</option>
                                    <option data-tokens="">Cerramineto Belglass</option>
                                    <option data-tokens="">Cerramiento - Muranos con fijos</option>
                                    <option data-tokens="">Cerramientos y Divisores - Araña (con soportes simples piso-vidrio)</option>
                                    <option data-tokens="">Cerramiento - Colgante Todovision con Fijos </option>
                                    <option data-tokens="">Cerramiento - Plegable </option>
                                    <option data-tokens="">Baranda - Invisible con distanciador</option>
                                    <option data-tokens="">Baranda - Esbino Simple</option>
                                    <option data-tokens="">Baranda - Distanciadores y Baranda Inoxidable</option>
                                    <option data-tokens="">Baranda - Morochas</option>
                                    <option data-tokens="">Cuerpos Fijos - Araña</option>
                                    <option data-tokens="">Cuerpos Fijos - Todovision (U DE 3/4 Y 1/8)</option>
                                    <option data-tokens="">Cuerpos Fijos - Enmarcado 1448</option>
                                    <option data-tokens="">Cuerpos Fijos - Clips</option>
                                    <option data-tokens="">Fachadas Comerciales - Todovision</option>


                                  </select>
                                  </p>


								<textarea class="plain buffer" name="message" placeholder="¿Alguna información adicional que desee proporcionarnos?"></textarea>.






                                 <div class="col-sm-12">
                                    <div class="checkbox">
                                         <label>
                                        <input type="checkbox" value="" checked="checked">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                             Deseo recibir promociones y noticias en mi correo electrónico.
                                        </label>
                                    </div>
                                 </div>                             

                                    <br>
                                    <p align="center">
								<input id="send" class="plain button red" type="button" value="Enviar">
                                </p>
							</form>	
							<div id="success"></div>
						</div>
						<div class="column three last">
							<div class="widget">
								<h2>Direccion</h2>
								<p> <h5>
									Av. Andrés Bello, <br>Entre 2da. y 3era. Transv.,<br>
									Edif. Nicarel, PB, Local C, Los Palos Grandes, <br> Caracas<br><br>
									+58 212 915 59 59 <br> +58 212 915 59 91 
								</h5></p>
							</div>

							<div class="widget">
								<h4>Siguenos</h4>
								<ul class="inline meta-social">
									<li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="#" class="pinterest-share border-box"><i class="fa fa-pinterest fa-lg"></i></a></li>
								</ul>
							</div>								
						</div>
					</div>
				</section>



	

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3922.9482175342787!2d-66.89436427654621!3d10.504744879026513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sus!4v1504788190028" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div><!-- id-main -->
        </main><!-- main -->
		<?php
		include("footer.php")
		?>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>
		<script>
		$(document).ready(function(){
			$('#send').click(function(){
				$(this).val('Sending ...');
				$('#success p').remove();
				$.post('contact/contact.php', $('#contact-form').serialize(), function(response) {
					$('#success').html(response);
					//$('#success').hide('slow');
					$('#send').val('Send a Message');
				});
				return false;
			});
		});
		</script>	

		<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>

	</body>

</html>
