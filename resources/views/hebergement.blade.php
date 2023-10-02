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
                        	<h2 class="bradcaump-title">Grille de la boutique</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="accueil">Accueil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Hébergements</span>
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
                            <h4 class="title mb-3">Hébergement Web</h4>
                            <p class="text-muted para-desc mx-auto mb-0">
							Fièrement hébergeur depuis 2001<br/>
							Migration GRATUITE, Nom de domaine GRATUIT et SSL GRATUIT<br/>
							Créer et gérer vos applications avec Git, Node.js, Python, Ruby, PHP et Perl<br/>
							Serveurs en haute disponibilité, Sécurisés par CloudLinux et Imunify360<br/>
							Flexibilité de vos sauvegardes avec JetBackup
							</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card pricing hosting-rate border-0 rounded overflow-hidden">
                            <div class="plan-name p-4 border-bottom">
                                <h4 class="title mb-3">Basic+</h4>
                                <p class="para text-muted mb-0">Hébergement <strong>pas cher</strong>, destiné aux débutants et particuliers pour développer un site personnel ou blog</p>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex mb-3">
                                    <span class="h6 text-muted mb-0 mt-2">$</span>
                                    <span class="price text-primary h1 mb-0">4.99</span>
                                    <span class="h6 text-muted align-self-end mb-1">/mo</span>
                                </div>                                                    
                                <ul class="feature-list list-unstyled mb-0">
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">10GB</span> Ram</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">100GB</span> Bandwith</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">100GB SSD</span> Storage</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">3 Domain</span> Hosted Support</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">50</span> Email Account</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">5</span> Database</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">Unlimited</span> Traffic</li>
                                </ul>
                                <form  action="{{ route('hebergement.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="Commander Basic+">
                                    <button class="btn btn-primary mt-4">Commander Basic+</button>
                                </form>	
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card pricing hosting-rate best-plan border-0 rounded">
                            <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span class="text-center d-block shadow small h6">Meilleure</span></div>
                            <div class="plan-name p-4 border-bottom">
                                <h4 class="title mb-3">Entreprise</h4>
                                <p class="para text-muted mb-0">Meilleur choix pour  <strong>les entreprises</strong>, afin d'héberger leurs sites vitrines et comptes de messagerie</p>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex mb-3">
                                    <span class="h6 text-muted mb-0 mt-2">$</span>
                                    <span class="price text-primary h1 mb-0">8.99</span>
                                    <span class="h6 text-muted align-self-end mb-1">/mo</span>
                                </div>                                                      
                                <ul class="feature-list list-unstyled mb-0">
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">30GB</span> Ram</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">500GB</span> Bandwith</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">500GB SSD</span> Storage</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">10 Domain</span> Hosted Support</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">100</span> Email Account</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">10</span> Database</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">Unlimited</span> Traffic</li>
                                </ul>
                                <form  action="{{ route('hebergement.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="Commander Entreprise">
                                    <button class="btn btn-primary mt-4">Commander Entreprise</button>
                                </form>	
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card pricing hosting-rate border-0 rounded overflow-hidden">
                            <div class="plan-name p-4 border-bottom">
                                <h4 class="title mb-3">Performance</h4>
                                <p class="para text-muted mb-0">Idéal pour les sites de <strong>presse et e-commerce</strong>, avec un serveur Web ultra rapide et système de cache avancé </p>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex mb-3">
                                    <span class="h6 text-muted mb-0 mt-2">$</span>
                                    <span class="price text-primary h1 mb-0">14.99</span>
                                    <span class="h6 text-muted align-self-end mb-1">/mo</span>
                                </div>                                                       
                                <ul class="feature-list list-unstyled mb-0">
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">100GB</span> Ram</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">1000GB</span> Bandwith</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">1000GB SSD</span> Storage</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">Unlimited Domain</span> Hosted Support</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">Unlimited</span> Email Account</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">Unlimited</span> Database</li>
                                    <li class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i><span class="fw-bold">Unlimited</span> Traffic</li>
                                </ul>
                                <form  action="{{ route('hebergement.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="Commander Performance">
                                    <button class="btn btn-primary mt-4">Commander Performance</button>
                                </form>	

                                <form  action="{{ route('hebergement.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="Commander Performance+">
                                    <button class="btn btn-primary mt-4">Commander Performance+</button>
                                </form>	
                            </div>
                        </div>
                    </div><!--end col-->


                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Price End -->

@endsection		