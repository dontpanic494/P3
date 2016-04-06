@extends('layouts.master')

@section('content')
<div class='container'>

    <h1>Random User Generator</h1>
	<p>This tool generates random users. Configure the settings below and then Generate!</p>
	<form method='POST' action='/randomuser'>

		{{ csrf_field() }}

		<div class='form-group row container'>
			<label># of Users</label>
			<input type='text' id='num-word-input' name='numUser' value='5' maxlength=2><span> (max. 99) </span>
			<br>
			<input type='checkbox' name='addBirthday' value='true'> <span>Birthday</span>
			<input type='checkbox' name='addLocation' value='true'> <span>Location</span>
			<input type='checkbox' name='addProfile' value='true'> <span>Profile</span>
		</div>
		<div class='row container'>
		<button type='submit' class='btn btn-danger submitbutton'>Generate!</button>
		
		@if(count($errors) > 0)
			@foreach ($errors->all() as $error)
				<p class='error'>{{$error}}</p>
			@endforeach
		@endif

		</div>
	</form>
	<a class='linkypoo' href="/">Take me home...</a>
	<div>
	@if (isset($userArray))
		@foreach ($userArray as $user)
 			<p><b>{{$user['name'] or ''}}</b></p>
 			<p>{{$user['date'] or ''}}</p>
 			<p>{{$user['location'] or ''}}</p>
 			<p><i>{{$user['profile'] or ''}}</i></p>
 			<br>
		@endforeach
	@endif
	</div>
</div>
@stop