@if (Session::has('success'))

	<div class="alert alert-success" role="alert">

		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif


@if (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<strong> Erros: </strong>
		<ul>
			@foreach($errors->all() as $error)
				<li> {{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@if (Session::has('caution'))

	<div class="alert alert-danger" role="alert">

		<strong>Caution:</strong> {{ Session::get('caution') }}
	</div>

@endif
