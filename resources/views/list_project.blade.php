
@extends('layouts.app')
@extends('header')


<style type="text/css">
.title {
	margin: 0;
	padding: 0;
}
.title_projects {
	margin-bottom: 2em;
}
.container {
	margin: 0;
	padding: 0;
}
.img {
	width:50%;
  	margin:auto;
  	
}
.link_project {
	margin-top: -2em;
}
.list {
	margin-bottom: 4em;
	font-weight: bold;
}
.text {
  /*width: 100px;*/
  margin: auto;
 /* padding: 10px; */
  word-wrap: break-word;   
}


</style>

@section('content')
<section>
    <h1 class="text-center title_projects">Projets</h1>
</section>
<section class="project1 justify-content-center" style="height: 300px">
    <div class="container" >
        	<div class="row justify-content-center">
              <div class="col-md-5 text-center">
                  <img class="img project1" src="img/html5.png" alt="image">        
              </div> 
              <div class="col-md-5" style="height: 50px">
              	<h2 class="text-center title">Blabla</h2>
                  <ul class="list">
                    <li>Apprenant: </li><p class="text">Quentin Chamallow</p>
                    <li>Promo: </li><p class="text">2020-2021</a>
                    <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
                  </ul> 
                  <a href="#" class="link_project pull-right">Voir le projet</a>  
              </div>
        </div>
    </div>    
</section>
<section class="project2" style="height: 300px">
    <div class="container">
        	<div class="row justify-content-center">
              <div class="col-md-5 text-center">
                  <img class="img project2" src="img/js.png"  alt="image">        
              </div> 
              <div class="col-md-5">
              	<h2 class="text-center title">Title</h2>
                  <ul class="list">
                    <li>Apprenant: </li><p class="text">Lala Faiskoi</p>
                    <li>Promo: </li><p class="text">2020-2021</a>
                    <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
                  </ul> 
                  <a href="#" class="link_project pull-right">Voir le projet</a>  
              </div>
        </div>
    </div>    
</section>
<section class="project3" style="height: 300px">
    <div class="container">
        	<div class="row justify-content-center">
              <div class="col-md-5 text-center">
                  <img class="img project2" src="img/css.png"  alt="image">        
              </div> 
              <div class="col-md-5">
              	<h2 class="text-center title">Title</h2>
                  <ul class="list">
                    <li>Apprenant: </li><p class="text">Lulu Pourki</p>
                    <li>Promo: </li><p class="text">2020-2021</a>
                    <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
                  </ul> 
                  <a href="#" class="link_project pull-right">Voir le projet</a>  
              </div>
        </div>
    </div>    
</section>

@stop