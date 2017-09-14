<!-- HOMEPAGE -->
<header id="top-section" class="fullbg">
<div class="jumbotron">
	<div id="carousel_intro" class="carousel slide fadeing">
		<div class="carousel-inner">
            @foreach($banners as $index => $banner)

			<div class="@if($index == 0) active @endif item" id="slide_{{ $index + 1 }}">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>{{ $banner->texto }} {{ $index }}</h1>
					</div>
					<br/>
                    @if($banner->texto_boton_1 != "")
					<a href="#" class="{{ $banner->style_boton_1 }} animated fadeInLeftBig"><i class="fa fa-{{ $banner->icono_boton_1 }}"></i>&nbsp; {{ $banner->texto_boton_1 }}</a>
					@endif
    
					@if($banner->texto_boton_2 != "")
					<a href="#" class="{{ $banner->style_boton_2 }} animated fadeInLeftBig"><i class="fa fa-{{ $banner->icono_boton_2 }}"></i>&nbsp; {{ $banner->texto_boton_2 }}</a>
					@endif
				</div>
			</div>
            @endforeach
			<!--<div class="item" id="slide_2">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>A project is complete when it starts working for you, rather than you working for it.</h1>
					</div>
					<br/>
					<a href="#" class="buttoncolor animated fadeInRightBig"><i class="fa fa-link"></i>&nbsp; Learn More</a>
					
				</div>
			</div>
			<div class="item" id="slide_3">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>We help you serving a useful social purpose while generating high-quality profits.</h1>					
					</div>
						<br/>
						<a href="#" class="buttonyellow animated fadeInLeftBig"><i class="fa fa-download"></i>&nbsp; Download Now</a>
				</div>
			</div>-->
		</div>
	</div>
	<button class="left carousel-control" href="#carousel_intro" data-slide="prev" data-start="opacity: 0.6; left: 0%;" data-250="opacity:0; left: 5%;"><i class="fa fa-chevron-left"></i></button>
	<button class="right carousel-control" href="#carousel_intro" data-slide="next" data-start="opacity: 0.6; right: 0%;" data-250="opacity:0; right: 5%;"><i class="fa fa-chevron-right"></i></button>
</div>
<div class="inner-top-bg">
</div>
</header>
<!-- / HOMEPAGE -->