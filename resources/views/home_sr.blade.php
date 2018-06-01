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
.we-sr {
  background-color: #EFEFEF;
  padding-top: 6em;
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
  margin-top: 3em;
}
.news {
  padding-top: 3em;
  background-color: #EFEFEF;
  border-radius: 5px;
}

</style>


@section('content')
<section class="we-sr" style="height: 450px">
    <div class="container-home_sr we">
        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                <h1>SIMPLON-RODEZ</h1>
                    <h2>Mais qui sommes-nous?</h2>
                        <p class="we">Et prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.</p>
            </div> 
            <div class="col-md-5 text-center">
                <img class="img-thumbnail" src="img/footer_logo_ecole_regionale_numerique.jpg"  alt="responsive image">
            </div>
        </div>
    </div>    
</section>

<section class="news-sr" >
    <div class="container-home_sr">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card text-center news" style="height: 350px">
                    <p class="presentation">Et prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.</p>
                    <h1>OUVERTE !!!</h1>
                    <div><button type="button" class="btn btn-secondary link-news">Postuler</button></div>
                </div>  
            </div>
            <div class="col-md-5">
                <div class="card text-center news" style="height: 350px">
                    <h3>Evènement à venir</h3>
                    <p class="presentation">Du 12 au 14 septembre, la Promo 1 de Simplon-Rodez à le plaisir de vous proposer: l'ACATHON de l'Aveyron!!</p>
                    <p>Premier évènement du genre dans notre beau département...</p>
                    <div class="link-news">
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
    <div class="carousel-inner" style="height: 450px">
      <div class="item active">
        <img class="img-responsive" src="img/html5.png" alt="ecole_regionale_numerique">
      </div>

      <div class="item">
        <img src="img/js.png" alt="logo_rodez_agglomeration">
      </div>

      <div class="item">
        <img src="img/css.png" alt="ern">
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


