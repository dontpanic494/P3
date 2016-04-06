@extends('layouts.master')

@section('content')
	<div class='row container'>
	    <h1>xkcd Password Generator</h1>
	    <p>This tool generates an xkcd stype Password. Configure the settings below and then Generate!</p>
	</div>
	<div class='row container'>
		<form method='POST' action='/passwordgenerator'>
			
			{{ csrf_field() }}

			<label>
			<input type='text' maxlength=1 id="num-word-input" class='form-control' name='word_count' value='4'>Number of Words (1-9)
			</label>
			<br>
  			<input type='checkbox' name='add_num' value='true'> <span>Add Number</span>
			<br>
			<input type='checkbox' name='add_spe' value='true'> <span>Add Special Character</span>
			<br>
			<input type='submit' class='btn btn-danger' value='Generate'>

			@if(count($errors) > 0)
					@foreach ($errors->all() as $error)
						<p class='error'>{{$error}}</p>
					@endforeach
			@endif

		</form>
		<div>
			@if(isset($password))
				<p class='generated-password'>
					@foreach($password as $pw)
						{{$pw or ''}}
					@endforeach
				</p>
			@endif

		</div>
		<div class='container'>
	    	<a class='linkypoo' href="/">Take me home...</a>
		</div>
		<br>
		<p>The theory behind the tech:</p>
		<div class="row">
			<a href="http://xkcd.com/936/">
			<img class='img-responsive' src='images/password_strength.png' alt='xkcd style passwords'>
			</a>
		</div>
	</div>
@stop