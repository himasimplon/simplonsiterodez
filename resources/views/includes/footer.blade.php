<!-- <style>

.site-main {
    overflow: hidden;
}
.site-block {
    margin: 40px;
}
.contact-list {
    display: inline;
    list-style: none;
    justify-content: space-around;
    flex-flow: row wrap;
}
.contact-list li {
    margin: 40px 0 0;
    text-align: center;
}
.contact-list li:first-child {
    margin-top: 20px;
    width: 100%;
}
.contact-item {
    display: block;
    margin: auto;
    width: max-content;
}
.contact-item::before {
    content: "";
    display: block;
    margin: 0 auto 5px;
    width: 60px;
    height: 60px;
    background: center/70% no-repeat rgba(0,0,0,.5);
    border-radius: 50%;
    transition: all ease-in .2s;
}
.contact-item:hover::before {
    background-color: #d51356;
    border-radius: 0;
}
.contact-item[href*=mail]::before {
    background-image: url("../img/mail.svg");
}
.contact-item[href*=linkedin]::before {
    background-image: url("../img/linkedin.svg");
}
.contact-item[href*=twitter]::before {
    background-image: url("../img/twitter.svg");
}
.contact-item[href*=facebook]::before {
    background-image: url("../img/facebook.svg");
}

/*********************/
/*  MEDIAS QUERIES   */
/*********************/
@media screen and (min-width: 500px) {
    body {
        margin: 50px auto;
        width: 500px;
    }
}

</style> -->

<footer class="page-footer font-small mt-4" >
	<div class="row  pt-3 px-2 ">
		<div class="col-md-2 col-sm-6">
		<!-- Image stored in folder /public/img -->
		<img src="img/footer_logo_ecole_regionale_numerique_224x100.png">
		</div>
		<div class="col-md-2 col-sm-6">
		<!-- Image stored in folder /public/img -->
		<img src="img/footer_logo_rodez_agglomeration_222x100.png">
		</div>
		<div class="col-md-2 col-sm-12">
		<!-- Image stored in folder /public/img -->
		<img src="img/footer_logo_simplon_rodez_123x100.png">
		</div>
		<div class="col-md-6 col-sm-12 site-block">
			<!-- replace with little circles containing matching symbols -->
			<ul class="list-unstyled contact-list">
				<li>
                    <a class="contact-item" href="mailto:simplonRodez@gmail.com" title="Envoyer un mail à simplonRodez@gmail.com"></a>
                </li>
                <li>
                    <a class="contact-item" href="http://linkedin.com" title="Voir la page Linkedin de Simplon Rodez"></a>
                </li>
                <li>
                    <a class="contact-item" href="http://twitter.com" title="Voir le compte Twitter de Simplon Rodez"></a>
                </li>
                <li>
                    <a class="contact-item" href="http://facebook.com" title="Voir le compte Facebook de Simplon Rodez"></a>
                </li>
			</ul>
		</div>
	</div>

  
  <div class="footer-copyright text-center py-1 mt-2">© 2018 Copyright:
    <a href="https://simplon.co/"> Simplon Rodez</a>
  </div>
  

     
