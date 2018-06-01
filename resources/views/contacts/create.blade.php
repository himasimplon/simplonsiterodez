
@extends('layouts.app')
@extends ('header')

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get in Touch</h2>
			<form action="#" method="POST">
				<div class="form-group">
					<label form="first_name" class="control-label">Prenom</label>
					<input type="text" name="first_name" id="first_name" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label form="last_name" class="control-label">Nom</label>
					<input type="text" name="last_name" id="last_name" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label form="email" class="control-label">Email</label>
					<input type="text" name="email" id="email" class="form-control" required="required">
				</div>
				<p>Comment pouvons-nous vous aider?</p>
				<div class="form-group">
					<label form="message" class="control-label sr-only">Message</label>
					<textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-default">Envoyer</button>
				</div>
			</form>
		</div>
	</div>

@stop