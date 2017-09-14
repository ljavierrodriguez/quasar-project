<!-- SECTION-6 (contact) -->
<section id="Section-6" class="fullbg">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
		<h2>Contact Us</h2>
		<p class="lead">
			 Fill out the form and we will call you back
		</p>
	</div>
</div>
<div class="row animated fadeInUpNow">
	<div class="col-lg-8 col-md-offset-2">
		@if (session('status'))
            <div class="alert alert-success">
        		{{ session('status') }}
    	    </div>
        @endif
		<form action="{{ route('send-email') }}" name="MYFORM" id="MYFORM" method="post">
			{!! method_field('POST') !!}
			{!! csrf_field() !!}
			<input name="name" size="30" type="text" id="name" class="col-lg-6 leftradius" placeholder="Your Name">
			<input name="email" size="30" type="text" id="email" class="col-lg-6 rightradius" placeholder="E-mail Address">
			<br/><br/>
			<textarea id="message" name="message" class="col-lg-12 allradius" placeholder="Message" rows="7"></textarea><br/>
			<br/>
			<input value="Send Message" type="submit" id="Send" class="btn btn-default btn-lg">
			<br/>
		</form>
	</div>
</div>
</div>
</section>