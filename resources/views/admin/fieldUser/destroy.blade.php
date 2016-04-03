@extends('template.main')

@section('title', 'Eliminar campo Usuario')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Eliminar Campo Usuario</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.FieldUser.destroy', $fielduser->id],  'method' => 'DELETE','novalidate' => 'novalidate']) !!}
	
	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $fielduser->id !!}</td>
			</tr>
			<tr>
				<td>Usuario</td>
				<td>{!! $fielduser->user_name !!}</td>
			</tr>

			<tr>
				<td>Tabla</td>
				<td>{!! $fielduser->table_name !!}</td>
			</tr>

			<tr>
				<td>Campo</td>
				<td>{!! $fielduser->fieldtable_name !!}</td>
			</tr>
			<tr>
				<td>Tipo de campo</td>
				<td>{!! $fielduser->type_field_name !!}</td>
			</tr>
			<tr>
				<td>valor</td>
				
				@if($fielduser->type_field_name == "select")
					<td>{{ $fielduser-> option_name}}</td>
				@else 
					<td>{{ $fielduser-> value}}</td>
				@endif
			</tr>

		</table>
	</div>
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}
		<a href="{{ route('Admin.FieldUser.index') }}">Cancelar</a>
	</div>

	{!! Form::close() !!}

@endsection