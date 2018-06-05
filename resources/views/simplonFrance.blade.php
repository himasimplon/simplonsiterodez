@extends('layouts.default')

<style>

</style>

@section('content')
<div class="block">
	<div class="col-md-12">
		<h2>Simplon France</h2>
	</div>
	<div class="col-md-12">			
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<img src="#" class="splFrc" alt="Logo Simplon">
		</div>
	</div>
	<div class="col-sm-6">
		<p class="block1">Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam.	
		</p>	
	</div>
</div>
<div class="block">

	<div class="carousel">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>
		</div>
		<div class="carousel-inner" style="height: 450px">
      		<div class="item active">
        		<img class="img-responsive" src="img/footer_logo_ecole_regionale_numerique.jpg" alt="ecole_regionale_numerique">
      		</div>
      		<div class="item">
        		<img src="img/footer_logo_rodez_agglomeration.jpg" alt="logo_rodez_agglomeration">
      		</div>
      		<div class="item">
        		<img src="img/footer_logo_simplon_rodez_123x100.png" alt="ern">
      		</div>
      	</div>
      	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      		<span class="glyphicon glyphicon-chevron-left"></span>
      		<span class="sr-only">Previous</span>
    	</a>
    	<a class="right carousel-control" href="#myCarousel" data-slide="next">
      		<span class="glyphicon glyphicon-chevron-right"></span>
      		<span class="sr-only">Next</span>
    	</a>
    </div>

</div>
<div class="block">
	<div class="col-md-12">
		<h2>La méthode active</h2>
	</div>
	<div class="col-sm-6">
		<p class="block2">Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam.	
		</p>	
	</div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<img id="mthActv" src="#" class="crtf" alt="Certification">
		</div>
	</div>
</div>
<div class="block">
	<div class="col-md-12">
		<h2>Partenaires Simplon Rodez</h2>
	</div>
	<div class="col-sm-6">
		<p class="block3">Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam.	
		</p>	
	</div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<img src="#" class="cci" alt="CCI Aveyron">
		</div>
	</div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<img src="#" class="fdc" alt="Fabrique d'initiatives citoyennes">
		</div>
	</div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<img src="#" class="ilinfo" alt="Illam Informatique">
		</div>
	</div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<img src="#" class="mjc" alt="MJC Rodez">
		</div>
	</div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<img src="#" class="rmi" alt="RM Ingenierie">
		</div>
	</div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<img src="#" class="rdzAgl" alt="Rodez Agglomération">
		</div>
	</div>
</div>
@endsection