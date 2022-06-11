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
                        	<h2 class="bradcaump-title">Mon compte</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="accueil">Accueil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Mon compte</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Connexion</h3>
							<form action="#">
								<div class="account__form">
									<div class="input__box">
										<label>Nom d'utilisateur ou adresse e-mail <span>*</span></label>
										<input type="text">
									</div>
									<div class="input__box">
										<label>Mot de passe<span>*</span></label>
										<input type="text">
									</div>
									<div class="form__btn">
										<button>Connexion</button>
										<label class="label-for-checkbox">
											<input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
											<span>Souviens-toi de moi</span>
										</label>
									</div>
									<a class="forget_pass" href="#">Mot de passe perdu?</a>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">S'inscrire</h3>
							<form action="#">
								<div class="account__form">
									<div class="input__box">
										<label>Adresse e-mail <span>*</span></label>
										<input type="email">
									</div>
									<div class="input__box">
										<label>Mot de passe<span>*</span></label>
										<input type="password">
									</div>
									<div class="form__btn">
										<button>S'inscrire</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End My Account Area -->
@endsection	