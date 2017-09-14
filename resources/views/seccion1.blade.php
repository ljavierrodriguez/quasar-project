<!--  SECTION-1 -->
<section id="Section-1" class="fullbg">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
		<h1>Features</h1>
		<p class="lead">
			 Some stuff about product
		</p>
	</div>
</div>
<div class="row color-white">
	<div class="col-md-12 animated fadeInUpNow">
		
		@foreach($features as $feature)
		<div class="boxservice">
			<i class="fa fa-{{ $feature->icono }}"></i>
			<h3>{{ $feature->titulo }}</h3>
			<p>
				{{ $feature->descripcion }}
			</p>
		</div>
		@endforeach
	</div>
</div>
<!-- end row -->
</div>
</section>