@extends('admin.template')

@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1>
			<i class="fa fa-shopping-cart"></i>
			CATEGORIAS <small>[Agregar categorias]</small>
		</h1>
		</div>
		
	</div>



	<div class="row">
		<div class="col-md-offset-3 col-md-6">

			<div class="page">
				
				@if(count($errors)>0)
				@include('admin.partials.errors')
				@endif

				{!! Form::open(['route'=>'admin.category.store']) !!}

				<div class="form-group">
					<label for="name">Nombre</label>

					{!!
						Form::Text(
							'name',
							 null,
							array(
							'class'=>'form-control',
							'placeholder' =>'Ingresa el nombre',
							'autofocus' => 'autofocus'
							)
						)
					!!}
				</div>

				<div class="form-group">
					<label for="description">Description</label>

					{!!
						Form::Textarea(
							'description',
							 null,
							array(
							'class'=>'form-control'
							)
						)
					!!}
				</div>

				<div class="form-group">
					<label for="color">Color:</label>
					<input type="color" name="color" class="form-control">
				</div>

				<div class="form-group">
					{!!
						Form::Submit('Guardar',array('class'=>'btn btn-primary'))
					!!}
					<a href="{{route('admin.category.index')}}" class="btn btn-danger">Cancelar</a>
				</div>

				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@stop