@extends('footer')
@extends('layouts.app')
@extends('header')


<style>
/*=========================*/
/*  view home_sr.blade.php */
/*=========================*/
.container-home_sr {
  margin: 1em;
}
.sr {
  background-color: #EFEFEF;
  border-radius: 5px;
}
.news-sr, .carousel {
  margin-top: 3em;
}
.presentation, .we {
  margin-top: 2em;
  margin-right: 2em;
  margin-left: 2em;
}
.btn-secondary {
  text-decoration: none;
}
.link-news {
  margin-top: 2em;
}

</style>


@section('content')
<section class="we-sr">
    <div class="container-home_sr">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="sr card text-center" style="height: 250px">
                    <h1>SIMPLON-RODEZ</h1>
                    <div class="card-body">
                        <h2>Mais qui sommes-nous?</h2>
                        <p class="we">Et prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-4">
                <div class="sr card">
                    <img src="#" alt="#" style="height: 250px">
                </div>
            </div>
        </div>
    </div>    
</section>

<section class="news-sr">
    <div class="container-home_sr">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="sr card text-center news" style="height: 250px">
                    <p class="presentation">Et prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.</p>
                    <h1>OUVERTE !!!</h1>
                    <div><button type="button" class="btn btn-light">Postuler</button></div>
                </div>  
            </div>
            <div class="col-md-5">
                <div class="sr card text-center" style="height: 250px">
                    <h3>Evènement à venir</h3>
                    <p>Du 12 au 14 septembre, la Promo 1 de Simplon-Rodez à le plaisir de vous proposer: l'ACATHON de l'Aveyron!!</p>
                    <p>Premier évènement du genre dans notre beau département...</p>
                    <div class="#">
                        <a href="#">En savoir plus</a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel sr">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 350px">
      <div class="item active">
        <img src="la.jpg" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago">
      </div>

      <div class="item">
        <img src="ny.jpg" alt="New York">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
  
@endsection


