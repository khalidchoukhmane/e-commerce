<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Product Categories</h3>
        						<ul>
									@foreach ($categories as $categorie)
										<li><a href="{{ url('/materiel/'.$categorie->id) }}">{{$categorie->category }}</a></li>
									@endforeach

        						</ul>
</aside>