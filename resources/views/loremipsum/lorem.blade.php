@extends('layouts.master')

@section('content')
    <h1>LI Generator</h1>

	<form method='POST' action='/loremipsum'>

		{{ csrf_field() }}

		<div class='form-group'>
			<label>Number of Paragraphs</label>
			<input
			type='text'
			id='numPara'
			name='numPara'
			value='5'
			>

		</div>
		
		<button type='submit' class='btn btn-danger'>Generate!</button>
	</form>
@stop