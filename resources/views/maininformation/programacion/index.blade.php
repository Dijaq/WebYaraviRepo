@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-12">
			<h1 style="font-weight: bold;">Programación</h1>

			<table class="table table-bordered">
		        <thead>
		          <tr>
		            <th width="12%"></th>
		            <th style="background: #FF4000; color: white;">LUNES</th>
		            <th style="background: #FF4000; color: white;">MARTES</th>
		            <th style="background: #FF4000; color: white;">MIERCOLES</th>
		            <th style="background: #FF4000; color: white;">JUEVES</th>
		            <th style="background: #FF4000; color: white;">VIERNES</th>
		            <th style="background: #81BEF7">SÁBADO</th>
		            <th style="background: #81BEF7">DOMINGO</th>
		          </tr>
		        </thead>
		        <tbody>
                    <tr>  
                		<td style="background: black; color: white;">05:00 - 05:30</td>
                		<td colspan="5" rowspan="8" style="background: #81BEF7"><h1>Yaraví informa - Primera Edición</h1>
                			<h4>con Hugo Condori, Miguel Angel Avendaño y Marialuz Cruz </h4>       
                		</td>
                        <td colspan="1" rowspan="6" style="background: #81BEF7"><h1>Yaraví informa - Primera Edición</h1>
                                        <h4>con Miguel Angel Avendaño y Alexander Cornejo</h4>       
                                </td>
                                <td colspan="1" rowspan="8" style="background: #81BEF7"><h1>Yaraví informa - Primera Edición</h1>
                                        <h4>con Yolanda Ahumada y Hugo Condori </h4> 
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">05:30 - 06:00</td>  
                		
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">06:00 - 06:30</td>                		
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">06:30 - 07:00</td>               		
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">07:00 - 07:30</td>           		
                		
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">07:30 - 08:00</td>
                	</tr>
                    <tr>
                        <td style="background: black; color: white;">08:00 - 08:30</td>
                        <td rowspan="4" style="background-color: #7CC8D2"><h1>La Picantería</h1>
                        <h4>Andres Javier y Hector Tintaya</h4></td>
                    </tr>
                    <tr>
                        <td style="background: black; color: white;">08:30 - 09:00</td>
                    </tr>
                	<tr>  
                		<td style="background: black; color: white;">09:00 - 09:30</td>
                		<td colspan="5" rowspan="2" style="background-color: #7CC8D2"><h1>Poder Ciudadano</h1>
                			<h4>con Juan Cervantes</h4>
                		</td>
                		<td rowspan="4"><h1>Música y Noticias</h1></td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">09:30 - 10:00</td>  
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">10:00 - 10:30</td>
                		<td colspan="5" rowspan="4"><h1>Mil Colores Nueva Temporada</h1>
                			<h4>con Idalina Naira Tipo</h4>
                		</td>
                        <td rowspan="2"><h1>Música Variada</h1></td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">10:30 - 11:00</td> 
                               
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">11:00 - 11:30</td> 
                		<td rowspan="2"><h1>Repiensa más allá de la prevención</h1></td>
                                <td rowspan="2" style="background: #B0BD71"><h1>Sobre la Chambra la Piedra</h1></td>
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">11:30 - 12:00</td>
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">12:00 - 12:30</td>
                		<td colspan="5" rowspan="4" style="background: #81BEF7"><h1>Yaraví informa - Segunda Edición</h1><h4>con Yolanda Ahumada y Juan Cervantes</h4>
                		</td>
                		<td rowspan="2" style="background: #81BEF7"><h1>Yaraví Informa - Segunda Edición</h1>
                                        <h4>con Alexander y Andrés Javier</h4></td>
                		<td rowspan="2"><h1>Música</h1></td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">12:30 - 13:00</td>  
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">13:00 - 13:30</td>
                		<td rowspan="2"><h1>Con Quitarra y con Cajón</h1>
                                        <h4>con Derly Gutierrez</h4></td>
                		<td rowspan="2"><h1>Con Guitarra y con Cajón</h1></td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">13:30 - 14:00</td> 
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">14:00 - 14:30</td>
                		<td colspan="5" rowspan="3"><h1>Programa Deportivo</h1>
                		<h4>Los Deportivos de Yaraví</h4></td>
                		<td rowspan="2"><h1>Sábado Sensacional</h1></td>
                		<td rowspan="8"><h1>Música y Deportes</h1></td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">14:30 - 15:00</td>  
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">15:00 - 15:30</td>
                		<td rowspan="4"><h1>La Voz del Volante</h1></td>
                		<td></td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">15:30 - 16:00</td>  
                		<td colspan="5" rowspan="2"><h1>La Voz del Volante</h1>         		
                                </td>
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">16:00 - 16:30</td>
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">16:30 - 17:00</td>
                		<td colspan="5" rowspan="5" style="background: #81BEF7"><h1>Yaraví Informa - Edición Central</h1>
                			<h4>Karol Macetas, Héctor Tintaya y Alexander Cornejo</h4>
                		
                	</tr>
                        <tr>
                                <td style="background: black; color: white;">17:00 - 17:30</td>  
                                <td rowspan="2"><h1>Música Variada</h1></td>
                                
                        </tr>
                	<tr>
                		<td style="background: black; color: white;">17:30 - 18:00</td>  
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">18:00 - 18:30</td>
                		<td rowspan="4"><h1>Identidad</h1><h4>Derly Quispe</h4></td>
                		<td rowspan="4"><h1>Música Juvenil</h1></td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">18:30 - 19:00</td>  
                		
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">19:00 - 19:30</td>
                		<td colspan="5" rowspan="2"><h1>Yaravi en tu Corazón</h1>
                		<h4>Berly Gutierrez</h4></td>
                		
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">19:30 - 20:00</td>  
                		
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">20:00 - 20:30</td>
                		<td colspan="5" rowspan="3"><h1>Identidad</h1><h4>Derly Quispe</h4></td>
                		<td rowspan="3"><h1>Enlazando Nuestros Cantos</h1>
                                        <h4>Jaime Velazquez</h4></td>
                		<td rowspan="6"><h1>Bloque Musical</h1></td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">20:30 - 21:00</td>  
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">21:00 - 21:30</td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">21:30 - 22:00</td>  
                		<td  colspan="2" rowspan="3"><h3>Enlazando Nuestros Cantos</h3><h4>Jaime Velazquez</h4></td>
                                <td  colspan="1" rowspan="3"><h3>La voz de la esperanza</h3></td>
                                <td  colspan="2" rowspan="3"><h3>Enlazando Nuestros Cantos</h3>
                                        <h4>Jaime Velasquez</h4></td>
                		<td rowspan="3"><h1>Bloque Musical</h1></td>
                	</tr>
                	<tr>  
                		<td style="background: black; color: white;">22:00 - 22:30</td>
                	</tr>
                	<tr>
                		<td style="background: black; color: white;">22:30 - 23:00</td>  
                	</tr>

		        </tbody>
			</table>			


			<!--<p>Yaraví informa: Noticiero informativo de análisis y comentario respecto al contexto local, nacional e internacional. Con 3  horarios:de 5.00 a 8:00 de la mañana, de 12.00 a 2.00p.m y  de 5:00pm a 7:00p.m</p>

			<p>Enlazando Nuestros Cantos: De 9:30p.m  a 11:00p.m</p>
			<p>La Voz de la Esperanza: Un programa dirigido a personas en las cárceles, con participación de cartas y reflexiones de ellos mismos. los miercoles de 9 a 11 p.m</p>
			
			<p>Mas programas: Musicales en otros horarios.</p>-->
		</div>

		<!--<div class="col-md-3">
			<br>
			
		</div>-->
	</div>

	<!--<div class="row">
		<div class="col-md-8">
			<br>
			<br>
			<br>
			<h1>Coméntanos</h1>
		</div>
		<div class="col-md-8">
			<div class="fb-comments" data-href="http://www.radioyaravi.org.pe/programaci%C3%B3n"  data-width="100%"  data-numposts="5"></div>
		</div>
	</div>-->
	<br>
 

@stop