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
                        	<h2 class="bradcaump-title">SERVICES</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="accueil">Accueil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">SERVICES</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->



    <!-- ======= Featured Services Section ======= -->
	
    <section class="wn__product__area brown--color pt--80  pb--30 featured-services">
      <div class="container" data-aos="fade-up">
        <div class="row">
       
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <a href="erp">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">ERP</h4>
              <p class="description">description... description...description... description... description...</p>
            </div>
            </a>
          </div>
          

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <a href="creation-des-sites-web">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">Création des sites Web</h4>
              <p class="description">description... description...description... description... description...</p>
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <a href="hebergements">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title">Hébergements</h4>
              <p class="description">description... description...description... description... description...</p>
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <a href="contrat-de-maintenance">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file "></i></div>
              <h4 class="title">Contrat de Maintenance</h4>
              <p class="description">description... description...description... description... description...</p>
            </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

		
@endsection	