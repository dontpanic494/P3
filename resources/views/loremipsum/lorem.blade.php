@extends('layouts.master')

@section('content')
<div class='container'>

    <h1>Lorem Ipsum Generator</h1>
	<p>This tool generates paragraphs of lorem ipsum. Configure the settings below and then Generate!</p>
	<form method='POST' action='/loremipsum'>

		{{ csrf_field() }}

		<div class='form-group row container'>
			<label># of Paragraphs</label>
			<input type='text' id='num-word-input' name='numPara' value='5' maxlength=2>
			<span> (max. 99) </span>
		</div>
		<div class='row container'>
			<button type='submit' class='btn btn-danger submitbutton'>Generate!</button>
		</div>

		@if(count($errors) > 0)
				@foreach ($errors->all() as $error)
					<p class='error'>{{$error}}</p>
				@endforeach
		@endif
		
		<a class='linkypoo' href="/">Take me home...</a>
	</form>
	<div class="row container">

	@if(isset($paragraphs))
		@foreach($paragraphs as $paragraph)
			<p>{{$paragraph or ''}}</p>
		@endforeach
	@endif
	
	</div>
</div>
@stop