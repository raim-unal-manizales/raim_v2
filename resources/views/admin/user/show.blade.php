@extends('template.main')

@section('title', 'Ver Usuario')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Ver Usuarip</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.User.index'], 'method' => 'GET','novalidate' => 'novalidate']) !!}
	
	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $user->id !!}</td>
			</tr>
			<tr>
				<td>Nombre Usuario</td>
				<td>{!! $user->user_name !!}</td>
			</tr>
			<tr>
				<td>Nombres</td>
				<td>{!! $user->name !!}</td>
			</tr>
			<tr>
				<td>Apellidos</td>
				<td>{!! $user->last_name !!}</td>
			</tr>
			<tr>
				<td>Correo</td>
				<td>{!! $user->email !!}</td>
			</tr>
			<tr>
				<td>Institucion</td>
				<td>{!! $user->institution !!}</td>
			</tr>
			<tr>
				<td>Fecha Nacimiento</td>
				<td>{!! $user->birth_date !!}</td>
			</tr>
			<tr>
				<td>Idioma</td>
				<td>{!! $user->language !!}</td>
			</tr>
			<tr>
				<td>Rol</td>
				<td>{!! $user_rol->name!!}</td>
			</tr>

		</table>
	</div>
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}	
	</div>

	{!! Form::close() !!}

@endsection