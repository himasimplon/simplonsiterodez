@extends('layouts.default')
<style>
    .block img{
        margin-left: 5rem;
        width: 17.5rem;
        height: 17.5rem;
    }
    .prgp{
        margin-left: 5rem;
    }
    .psr{
        margin-left: 5rem;
    }
    .p-2{
        margin-top: 2rem;
        margin-left: 1.5rem;
        margin-bottom: 2rem;
    }
</style>
@section('content')
<div class="block">
    <div class="col-md-12">
        <h2>Simplon France</h2>
    </div>
    <div class="col-md-12 d-flex">          
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
            <img src="img/footer_logo_rodez_agglomeration_222x100.png" class="img-thumbnail" alt="Logo Simplon">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
            <p>Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. 
            </p>  
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<section class="carousel sr">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
    <div class="carousel-inner" style="min-height: 450px">
        <div class="carousel-item active">
            <img src="img/html5.png" alt="html5">
        </div>
        <div class="carousel-item">
            <img src="img/js.png" alt="js">
        </div>
        <div class="carousel-item">
            <img src="img/css.png" alt="css">
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    </div>
</section>
<div class="block">
    <div class="col-md-12">
        <h2>La méthode active</h2>
    </div>
    <div class="col-md-12 d-flex">          
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
            <p class="prgp">Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam.  
            </p>  
        </div>
        <div class="col-sm-3">
            <img src="img/footer_logo_rodez_agglomeration_222x100.png" class="img-thumbnail" alt="Logo Simplon">
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<div class="block">
    <div class="col-md-12">
        <h2>Partenaires Simplon Rodez</h2>
    </div>
    <div class="col-md-12 d-flex">          
        <div class="col-sm-1"></div>
            <p class="psr">Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam.   
            </p>  
        <div class="col-sm-1"></div>
    </div>
    <div class="d-flex flex-row">
        <div class="p-2">
            <img src="img/css.png" alt="CCI Aveyron">
        </div>
        <div class="p-2">
            <img src="img/footer_logo_rodez_agglomeration_222x100.png" alt="Fabrique d'initiatives citoyennes">
        </div>
        <div class="p-2">
            <img src="img/css.png" alt="illam Informatique">
        </div>
    </div>
    <div class="d-flex flex-row">
        <div class="p-2">
            <img src="img/footer_logo_rodez_agglomeration_222x100.png" alt="CCI Aveyron">
        </div>
        <div class="p-2">
            <img src="img/css.png" alt="Fabrique d'initiatives citoyennes">
        </div>
        <div class="p-2">
            <img src="img/footer_logo_rodez_agglomeration_222x100.png" alt="illam Informatique">
        </div>
    </div>
</div>
@endsection