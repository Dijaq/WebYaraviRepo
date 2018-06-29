@extends('layout')

@section('contenido')

	<div class="row">
		<div class="information_radio col-md-9">
			<h1>Planes de Gobierno 2018</h1>

			<h4>Gobierno Regional</h4>
			<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Patido Político</th>
		        <th>Candidato</th>
		        <th>Plan de Gobierno</th>
		      </tr>
		    </thead>
		    <tbody>
		        <tr>
					<td>ACCIÓN POPULAR</td>
					<td>Mauricio Chang Obezo</td>
					<td><a href="{{asset('storage/general/planesgobierno2018/'."ACCION POPULAR - Mauricio Chang Obezo.pdf")}}">ver aqui</a></td>
		        </tr>
		        <tr>
		        	<td>ALIANZA PARA EL PROGRESO</td>
		        	<td>Leonel Cabrera Pino</td>
		        	<td></td>
		        </tr>
		        <tr>	
		        	<td>AREQUIPA  UNIDOS POR EL GRAN CAMBIO</td>
		        	<td>Elmer Cáceres Llica</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>AREQUIPA TRANSFORMACIÓN</td>
		        	<td>Javier Ismodes Talavera</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>EL FRENTE AMPLIO</td>
		        	<td>Hector Herrera Herrera</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>FRENTE POPULAR  FREPAP</td>
		        	<td>Flaubert Ataucuri Mollenedo</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>FUERZA AREQUIPEÑA</td>
		        	<td>Gustavo Rondon Fudinaga</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>JUNTOS POR EL DESARROLLO DE AREQUIPA</td>
		        	<td>Antonio Gamero Márque</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>JUNTOS POR EL SUR</td>
		        	<td>Eleana Vela Ramos</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>MOVIMIENTO REGIONAL AREQUIPA AVANCEMOS</td>
		        	<td>Freddy Lozano Benique</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>MOVIMIENTO REGIONAL INDEPENDIENTE AREQUIPA MIA</td>
		        	<td>Hipolito Chaiña Contreras</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>PARTIDO APRISTA PERUANO</td>
		        	<td>Jorge Chirinos Chávez</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>PARTIDO DEMOCRÁTICO SOMOS PERU</td>
		        	<td>Luis Chirinos Chirinos</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>PARTIDO POPULAR CRISTIANO - PPC</td>
		        	<td>Cesar Abarca Fernández</td>
		        	<td></td>
		        </tr>
		         <tr>
		        	<td>PERU LIBERTARIO</td>
		        	<td>Juan Valencia Postigo</td>
		        	<td></td>
		        </tr>
		         <tr>
		        	<td>PODEMOS POR EL PROGRESO DEL PERU</td>
		        	<td>Carmen  Casani Barbachan</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>RESTAURACIÓN NACIONAL</td>
		        	<td>Jorge Reyes Lujan</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>SIEMPRE UNIDOS</td>
		        	<td>Javier Cáceres Pérez</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>TODOS POR EL PERU</td>
		        	<td>Justo Mayta Livisi</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>VAMOS PERU</td>
		        	<td>James Posso Sánchez</td>
		        	<td></td>
		        </tr>
		        <tr>
		        	<td>AREQUIPA RENACE</td>
		        	<td>Alfredo Zegarra Tejada</td>
		        	<td></td>
		        </tr>
		    </tbody>
		  </table>
			
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