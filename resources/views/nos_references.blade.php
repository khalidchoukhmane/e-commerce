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
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Nos références:</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">NOS RÉFÉRENCES							</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<br><br><br>
        <!-- Start Team Area -->
        <section class="wn__team__area pb--75 bg--white">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="section__title--3 text-center">
        					<h2>Nos références</h2>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<!-- Start Nos Reference -->
        			<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/Al-Tazaj.jpg" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/atlamed.png" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/ifriquia-plastic.png" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/inov.png" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/joa.png" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/krohler.png" alt="company image">
        					</div>
        				</div>
        			</div>
        			<!-- End Nos Reference -->
        		</div>
        	</div>
        </section>
		<section class="wn__team__area pb--75 bg--white">
        	<div class="container">
        		<div class="row">
        			<!-- Start Nos Reference -->
        			<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/ocarz.jpg" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/rma-romoulage-du-sud.jpg" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/rma-royal-marocaine-assurance.jpg" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/translec.png" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/united-petroleum.png" alt="company image">
        					</div>
        				</div>
        			</div>
					<div class="col-2">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="images/nos-references/zila-russi.png" alt="company image">
        					</div>
        				</div>
        			</div>
        			<!-- End Nos Reference -->
        		</div>
        	</div>
        </section>
        <!-- End Team Area -->
@endsection
