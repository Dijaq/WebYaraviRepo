@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-12">
			<div style="margin-top: 15px; margin-bottom: 15px; font-size: 30px; font-family: Gremoria; font-weight: 600; text-align: center; color: #6E6E6E; text-decoration: underline;" >Planes de Gobierno 2018</div>
		</div>
	</div>
	<div class="row">
		<div class="information_radio col-md-9" >
			<h1></h1>

			<h4>Gobierno Regional de Arequipa</h4>
			<div class="table-responsive-sm">     
				<table class="table table-bordered">
			    <thead class="thead-dark">
			      <tr>
			      	<th>Nº</th>
			        <th>Partido Político</th>
			        <th>Candidato</th>
			        <th>Plan de Gobierno</th>
			      </tr>
			    </thead>
			    <tbody>
			        <tr>
			        	<td>1</td>
						<td>ACCIÓN POPULAR</td>
						<td>Mauricio Chang Obezo</td>
						<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."ACCION POPULAR - Mauricio Chang Obezo.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>2</td>
			        	<td>ALIANZA PARA EL PROGRESO</td>
			        	<td>Leonel Cabrera Pino</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."ALIANZA PARA EL PROGRESO - Leonel Cabrera Pino.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>3</td>  	
			        	<td>AREQUIPA  UNIDOS POR EL GRAN CAMBIO</td>
			        	<td>Elmer Cáceres Llica</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."AREQUIPA - UNIDOS POR EL GRAN CAMBIO- Elmer Cáceres Llica.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>4</td>
			        	<td>AREQUIPA TRANSFORMACIÓN</td>
			        	<td>Javier Ismodes Talavera</td>
			        	<td style="text-align: center;  padding-bottom: 5px; padding-top: 5px; "><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."AREQUIPA TRANSFORMACION - Javier Ismodes Talavera.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>5</td>
			        	<td>EL FRENTE AMPLIO</td>
			        	<td>Héctor Herrera Herrera</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."EL FRENTE AMPLIO POR JUSTICIA VIDA Y LIBERTAD - Hector Herrera Herrera.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>6</td>
			        	<td>FRENTE POPULAR FREPAP</td>
			        	<td>Flaubert Ataucuri Mollenedo</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."FRENTE POPULAR AGRICOLA FIA DEL PERU - FREPAP - Flaubert Ataucuri Mollenedo.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>7</td>
			        	<td>FUERZA AREQUIPEÑA</td>
			        	<td>Gustavo Rondón Fudinaga</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."FUERZA AREQUIPEÑA - Gustavo Rondon Fudinaga.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>8</td>
			        	<td>JUNTOS POR EL DESARROLLO DE AREQUIPA</td>
			        	<td>Antonio Gamero Márquez</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."JUNTOS POR EL DESARROLLO DE AREQUIPA - Antonio Gamero Márquez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>9</td>
			        	<td>JUNTOS POR EL SUR</td>
			        	<td>Eleana Vela Ramos</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."JUNTOS POR EL SUR - Eleana Vela Ramos.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>10</td>
			        	<td>MOVIMIENTO REGIONAL AREQUIPA AVANCEMOS</td>
			        	<td>Freddy Lozano Benique</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."MOVIMIENTO REGIONAL AREQUIPA AVANCEMOS - Freddy Lozano Benique.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>11</td>
			        	<td>MOVIMIENTO REGIONAL INDEPENDIENTE AREQUIPA MIA</td>
			        	<td>Hipólito Chaiña Contreras</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."MOVIMIENTO REGIONAL INDEPENDIENTE AREQUIPA MIA - Hipolito Chaiña Contreras.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>12</td>
			        	<td>PARTIDO APRISTA PERUANO</td>
			        	<td>Jorge Chirinos Chávez</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PARTIDO APRISTA PERUANO- Jorge Chirinos Chávez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>13</td>
			        	<td>PARTIDO DEMOCRÁTICO SOMOS PERÚ</td>
			        	<td>Luis Chirinos Chirinos</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PARTIDO DEMOCRATICO SOMOS PERU - Luis Chirinos Chirinos.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>14</td>
			        	<td>PARTIDO POPULAR CRISTIANO - PPC</td>
			        	<td>César Abarca Fernández</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PARTIDO POPULAR CRISTIANO - PPC- Cesar Abarca Fernandez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			         <tr>
			         	<td>15</td>
			        	<td>PERÚ LIBERTARIO</td>
			        	<td>Juan Valencia Postigo</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PERU LIBERTARIO - Juan Valencia Postigo.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			         <tr>
			         	<td>16</td>
			        	<td>PODEMOS POR EL PROGRESO DEL PERÚ</td>
			        	<td>Carmen Casani Barbachan</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PODEMOS POR EL PROGRESO DEL PERU - Carmen A. Casani Barbachan .pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>17</td>
			        	<td>RESTAURACIÓN NACIONAL</td>
			        	<td>Jorge Reyes Luján</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."RESTAURACION NACIONAL - Jorge Reyes Lujan.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>18</td>
			        	<td>SIEMPRE UNIDOS</td>
			        	<td>Javier Cáceres Pérez</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."SIEMPRE UNIDOS - Javier Cáceres Pérez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>19</td>
			        	<td>TODOS POR EL PERÚ</td>
			        	<td>Justo Mayta Livisi</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."TODOS POR EL PERU - Justo Mayta Livisi.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>20</td>
			        	<td>VAMOS PERÚ</td>
			        	<td>James Posso Sánchez</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."VAMOS PERU - James Posso Sánchez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>21</td>
			        	<td>AREQUIPA RENACE</td>
			        	<td>Alfredo Zegarra Tejada</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."AREQUIPA RENACE - Alfredo Zegarra Tejada.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			    </tbody>
			  </table>
			</div>

		  <br>
		  <br>
		  <h4>Municipalidad Provincial de Arequipa</h4>
		    <div class="table-responsive-sm">
				<table class="table table-bordered">
			    <thead class="thead-dark">
			      <tr>
			      	<th>Nº</th>
			        <th>Partido Político</th>
			        <th>Candidato</th>
			        <th>Plan de Gobierno</th>
			      </tr>
			    </thead>
			    <tbody>
			        <tr>
			        	<td>1</td>
						<td>PARTIDO POPULAR CRISTIANO - PPC</td>
						<td>Karla Dueñas Laura</td>
						<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PARTIDO POPULAR CRISTIANO - PPC - Karla Dueñas Laura.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>2</td>
			        	<td>MOVIMIENTO REGIONAL INDEPENDIENTE AREQUIPA MÍA</td>
			        	<td>María Agüero Gutiérrez</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."MOVIMIENTO REGIONAL INDEPENDIENTE AREQUIPA MIA - María Aguero Gutierrez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>3</td>  	
			        	<td>EL FRENTE AMPLIO</td>
			        	<td>Miguel Ángel Surco Quispe</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."EL FRENTE AMPLIO - Miguel Anguel Surco Quispe.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>4</td>
			        	<td>ACCIÓN POPULAR</td>
			        	<td>Edwin Martínez Talavera</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."ACCION POPULAR - Edwin Matrinez Talavera.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>5</td>
			        	<td>PARTIDO DEMOCRÁTICO SOMOS PERÚ</td>
			        	<td>Germán Rodríguez Rodríguez</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PARTIDO DEMOCRATICO SOMOS PERU - Germán Rodríguez Rodríguez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>6</td>
			        	<td>VAMOS PERÚ</td>
			        	<td>Álan Guillén Rodríguez</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."VAMOS PERU - Alan Guillén Rodriguez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>7</td>
			        	<td>SIEMPRE UNIDOS</td>
			        	<td>Ricardo Medina Minaya</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."SIEMPRE UNIDOS - Ricardo Medina Minaya..pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>8</td>
			        	<td>FUERZA AREQUIPEÑA</td>
			        	<td>Marco Falconí Picard</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."FUERZA AREQUIPEÑA - Marco Falconí Picardo..pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>9</td>
			        	<td>PERÚ PATRIA SEGURA</td>
			        	<td>José Luis Rojas Cifuentes</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PERU PATRIA SEGURA - Jose Luis Rojas Cifuentes.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>10</td>
			        	<td>AREQUIPA UNIDOS POR EL GRAN CAMBIO</td>
			        	<td>Alvaro Moscoso Mercado</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."AREQUIPA UNIDOS POR EL GRAN CAMBIO - Alvaro Moscoso Mercado.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>11</td>
			        	<td>JUNTOS POR EL SUR</td>
			        	<td>Luis Gallegos Vargas</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."JUNTOS POR EL SUR - Luis Gallegos Vargas.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			        <tr>
			        	<td>12</td>
			        	<td>PODEMOS POR EL PROGRESO DEL PERÚ</td>
			        	<td>Heber Cueva Escobedo</td>
			        	<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PODEMOS POR EL PROGRESO DEL PERU - Heber Cueva Escobedo.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			        </tr>
			       <tr>
			       		<td>13</td>
			       		<td>FRENTE POPULAR FREPAP</td>
			       		<td>Justo Ccancce Rivas</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."FRENTE POPULAR AGRICOLA FIA DEL PERU - FREPAP - Justo Ccancce Rivas.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>14</td>
			       		<td>PARTIDO APRISTA PERUANO</td>
			       		<td>Mercedes Núñez Guitiérrez</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."PARTIDO APRISTA PERUANO - Mercedes Núñez Guitiérrez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>15</td>
			       		<td>AREQUIPA TRANSFORMACIÓN</td>
			       		<td>Germán Torres Chambi</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."AREQUIPA TRANSFORMACION - Germán Torres Chambi..pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>16</td>
			       		<td>RESTAURACIÓN NACIONAL</td>
			       		<td>Yamel Romero Peralta</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."RESTAURACION NACIONAL - Yamel Romero Peralta..pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>17</td>
			       		<td>AREQUIPA RENACE</td>
			       		<td>Omar Candia Aguilar</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."AREQUIPA RENACE - Omar Candia Aguilar..pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>18</td>
			       		<td>ALIANZA PARA EL PROGRESO</td>
			       		<td>Christian Talavera Apaza</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."ALIANZA PARA EL PROGRESO - Christian Talavera Apaza.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>19</td>
			       		<td>TODOS POR EL PERÚ</td>
			       		<td>Gary Marroquín Mendoza</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."TODOS POR EL PERU - Gary Marroquin Mendoza..pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>20</td>
			       		<td>DEMOCRACIA DIRECTA</td>
			       		<td>Mario Arias León</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."DEMOCRACIA DIRECTA - Mario Arias León..pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>21</td>
			       		<td>MOVIMIENTO REGIONAL AREQUIPA AVANCEMOS</td>
			       		<td>Elvis Delgado Bacigalupi</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."MOVIMIENTO REGIONAL AREQUIPA AVANCEMOS - Elvis Delgado Bacigalupi.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>22</td>
			       		<td>TODOS POR AREQUIPA</td>
			       		<td>Manuel Vera Paredes</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."TODOS POR AREQUIPA - Manuel Vera Paredes.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>23</td>
			       		<td>JUNTOS POR EL DESARROLLO DE AREQUIPA</td>
			       		<td>Víctor Hugo Rivera Chávez</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."JUNTOS POR EL DESARROLLO DE AREQUIPA - Víctor Hugo Rivera Chávez.pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       <tr>
			       		<td>24</td>
			       		<td>UNIÓN POR EL PERÚ</td>
			       		<td>Roger Arredondo García</td>
			       		<td style="text-align: center; padding-bottom: 5px; padding-top: 5px;"><a target="_blank" href="{{asset('storage/general/planesgobierno2018/'."UNION POR EL PERU - Roger Arredondo García..pdf")}}"><img src="{{asset('storage/planv3.png')}}" style="width: 50px;"></a></td>
			       </tr>
			       
			    </tbody>
			  </table>
			</div>
		</div>

		<div class="col-md-3">
			<br>
			@include('columnpublicidad');
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<br>
			<br>
			<br>
			<h1>Coméntanos</h1>
		</div>
		<div class="col-md-8">
			<div class="fb-comments" data-href="http://www.radioyaravi.org.pe/elecciones-2018"  data-width="100%"  data-numposts="5"></div>
		</div>
	</div>
	<br>

@stop