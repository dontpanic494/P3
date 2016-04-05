@extends('layouts.master')

@section('content')
    <h1>Random User Generator</h1>

	<form method='POST' action='/randomuser'>

		{{ csrf_field() }}

		<div class='form-group'>
			<label># of Users</label>
			<input type='text' id='numUser' name='numUser' value='5'>
			<input type='checkbox' name='addBirthday' value='true'> <span>Birthday</span>
			<input type='checkbox' name='addProfile' value='true'> <span>Profile</span>

		</div>
		
		<button type='submit' class='btn btn-danger'>Generate!</button>

		@if (isset($userArray))
			@foreach ($userArray as $user)
	 			<p>{{$user['name'] or ''}}</p>
	 			<p>{{$user['date'] or ''}}</p>
	 			<p>{{$user['profile'] or ''}}</h2>
			@endforeach
		@endif

	</form>
@stop