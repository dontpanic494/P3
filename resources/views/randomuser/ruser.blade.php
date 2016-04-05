@extends('layouts.master')

@section('content')
<div class='container'>

    <h1>Random User Generator</h1>

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
		</div>
	</form>
	<div>
	@if (isset($userArray))
		@foreach ($userArray as $user)
 			<p>{{$user['name'] or ''}}</p>
 			<p>{{$user['date'] or ''}}</p>
 			<p>{{$user['location'] or ''}}</p>
 			<p>{{$user['profile'] or ''}}</p>
 			<br>
		@endforeach
	@endif
	</div>
</div>
@stop