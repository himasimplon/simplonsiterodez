@extends('layouts.default')

<style type="text/css">
.title {
	margin: 0;
	padding: 0;
}
.title_projects {
	margin-bottom: 2em;
}
.container {
	margin-top: 2em;
	padding: 0;
}
.img {
	width: 60%;
  margin: auto;
}
.list {
	margin-bottom: 3em;
	font-weight: bold;
}
.text {
  margin: auto;
  word-wrap: break-word;   
}
.link_project {
  margin-left: 21em;
}
</style>

@section('content')
<section>
  <h1 class="text-center title_projects">Projets</h1>
</section>
<section class="project1 justify-content-center">
  <div class="container" >
  	<div class="row justify-content-center" style="min-height: 300px">
      <div class="col-md-5 text-center">
        <img class="img project1" src="img/html5.png" alt="image">        
      </div> 
      <div class="col-md-5">
      	<h2 class="text-center title">Blabla</h2>
        <ul class="list">
          <li>Apprenant: </li><p class="text">Quentin Chamallow</p>
          <li>Promo: </li><p class="text">2020-2021</a>
          <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
        </ul> 
        <a href="#" class="link_project">Voir le projet</a>  
      </div>
    </div>
  </div>    
</section>
<section class="project2 justify-content-center">
    <div class="container">
    	<div class="row justify-content-center" style="min-height: 300px">
          <div class="col-md-5 text-center">
              <img class="img project2" src="img/html5.png"  alt="image">        
          </div> 
          <div class="col-md-5">
          	<h2 class="text-center title">Title</h2>
            <ul class="list">
              <li>Apprenant: </li><p class="text">Lala Faiskoi</p>
              <li>Promo: </li><p class="text">2020-2021</a>
              <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
            </ul> 
            <a href="#" class="link_project">Voir le projet</a>  
          </div>
      </div>
    </div>    
</section>
<section class="project3 justify-content-center">
  <div class="container">
  	<div class="row justify-content-center" style="min-height: 300px">
      <div class="col-md-5 text-center">
          <img class="img project3" src="img/html5.png"  alt="image">        
      </div> 
      <div class="col-md-5">
      	<h2 class="text-center title">Title</h2>
        <ul class="list">
          <li>Apprenant: </li><p class="text">Lulu Pourki</p>
          <li>Promo: </li><p class="text">2020-2021</a>
          <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
        </ul> 
        <a href="#" class="link_project">Voir le projet</a>  
      </div>
    </div>
  </div>    
</section>
@stop