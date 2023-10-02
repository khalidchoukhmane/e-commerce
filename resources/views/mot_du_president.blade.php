@extends('layouts.master')

@section('content')
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Mot du president</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="accueil">Accueil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Mot de président</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

		 <!-- Price Start -->
		 <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Objet : Présentation de la Société ONE WAY INVEST</h4>
                            <p class="text-muted para-desc mx-auto mb-0">
								« La Société ONE WAY INVEST est le fruit d’une longue expérience professionnelle au sein de PME et de grands groupes nationaux et Internationaux, d’un profond attachement aux valeurs de travail en entreprise, d’amitié, de performance et de citoyenneté.
								<br/>Depuis 2020, nous conseillons et accompagnons les entreprises dans leur développement et mettons quotidiennement en œuvre des moyens humains et financiers à la hauteur des ambitions de nos recrutements.
								<br>
								Notre approche ciblée et qualitative nous permet de bénéficier d’une place de premier plan dans certains domaines comme l'intégration des ERP, Vente installation et maintenance du matériel informatique, développement web et hébergement, les réseaux informatiques, la sécurité informatique, la téléphonie, le Conseil.
								<br>
								ONE WAY INVEST, c’est avant tout un savoir-faire et un esprit d’équipe dont les enjeux sont la satisfaction de nos clients et l’épanouissement professionnel de nos employés.
								<br>
								Notre valeur ajoutée : un challenge au quotidien, des liens de confiance solides, un service sur mesure et l’utilisation des derniers outils pour suivre le développement technologique et être le leader du service informatique. ».
								<br>
							</p>
                        </div>
                    </div><!--end col-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Price End -->

@endsection		