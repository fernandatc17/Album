@extends('layouts.app')

@section('content')
<div class="border-bottom mt-3  mb-3">
	<h2>Nuevo Álbum</h2>
</div>
<form action="/albums/update" method="post">
	@csrf
    <input type="hidden" name="id" value="{{ $album->album_id }}" />
	<div class="mb-3">
    	<label for="inputUsuario" class="form-label">Usuario</label>
    	<select class="form-select" name="usuario" id="inputUsuario" required>
			<option value="">Seleccion</option>
			@foreach($users as $user)
			<option value="{{$user->id}}" @selected($user->id==$album->usuario_id) >{{$user-> nombre}}</option>
			@endforeach
		</select>
	</div>
	<div class="mb-3">
    	<label for="inputNombre" class="form-label">Nombres</label>
    	<input type="text" class="form-control" id="inputNombre" name="nombre" value="{{$album->album_nombre}}"/>
	</div>
	<div class="mb-3">
    	<label for="inputDescripcion" class="form-label">Descripcion</label>
    	<textarea class="form-control" id="inputDescripcion" name="descripcion" rows="3">{{$album->album_descripcion}}</textarea>
	</div>
	<div class="mb-3">
    	<button type="submit" class="btn btn-primary">Actualizar</button>
    	<a class="btn btn-secondary" href="{{ route('album.index') }}">Cancelar</a>
	</div>
</form>
@endsection