<!-- header.blade.php -->

<!-- Create proper CSS classes where needed
     Adapt scr-references for images to match storage folder -->

<!--********************-->		
<!--   start HEADER     -->
<!--********************-->

<!-- header background is : <img class="headerlogo"  src="../../../storage/app/public/img/header_rodez_panorama_flou.jpg>      -->

<header class="row">
	<div class="col-md-12 col-xs-12">
		<!-- Image stored in folder storage/app/public/img -->
		{{ HTML::image('img/header_logo_simplon.png', 'image of simplon rodez logo', array('class' => 'header_logo')) }}
	</div>
	<div class="col-md-12 col-xs-12">
		<!-- Image stored in folder storage/app/public/img -->
		{{ HTML::image('img/header_logo_ern_and_ra.png', 'logos of ecole regionale du numeriqe and rodez agglomération', array('class' => 'header_sub_logo')) }}
	</div>	
</header>		

<!--*********************-->		
<!--      end HEADER     -->
<!--*********************-->



<!--***************************-->
<!--   start NAVIGATIONBAR     -->
<!--***************************-->

<nav class="row">
	<!-- navigationbar Version navigateur  -->
	<div class="col-md-12 col-xs-0 red inverted">
		<ul class="list-unstyled">
			<li><a href="#"> Acceuil    </a></li>
			<li><a href="#"> Simplon    </a></li>
			<li><a href="#"> Formations </a></li>
			<li><a href="#"> Apprenants </a></li>
			<li><a href="#"> Projets    </a></li>
			<li><a href="#"> Contact    </a></li>
		</ul>
	</div>
	<!-- navigationbar Version mobile -->
	<div class="col-md-0 col-xs-12 red inverted">
		<ul class="list-unstyled">
			<li><strong><a href="#">SIMPLON</a></strong></li>
			<li><a href="#"><button>MENU</button></a></li>
		</ul>
	</div>
</nav>

<!--**************************-->
<!--   END NAVIGATIONBAR      -->
<!--**************************-->		


