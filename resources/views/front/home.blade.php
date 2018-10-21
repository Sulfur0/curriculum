@extends('layouts.front')

@section('content')
	<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#" style="height: 50px;">@include('svg.av')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item nav-home active">
              <a class="nav-link" href="#">Home </a>
            </li>            
            <li class="nav-item nav-skills">
              <a class="nav-link" href="#">Skills</a>
            </li>
            <li class="nav-item nav-portfolio">
              <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item nav-about">
              <a class="nav-link" href="#">About Me</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        	-->
          </ul>
        </div>
      </nav>
    </header>
    <div class="mark-scroll"></div>
    <div class="home">
	    <div class="container-fluid" style="padding-right: 0">
	    	<div class="row intro-bg">
		    	<div class=" col-md-5 offset-md-1 col-sm-6 text-center mt-4" id="intro-text">
		    		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
					    <h1 class="display-4">Hi, I'm Andrés!</h1>
					    <p class="lead">Web and Desktop App Developer.</p>
					    <p>A Developer For The Next Era.</p>
					    <p>“Cherish your visions and your dreams as they are the children of
		your soul, the blueprints of your ultimate achievements.” </p>
						<p>-Napoleon Hill.</p>
				    </div>
		    		<div class="social-icons">
						<ul>
							<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
		    	</div>
		    	<div class="col-md-4 offset-md-2 col-sm-6">
		    		@include('svg.recorte_yo')	
		    		<!--<img id="my-picture" src="/images/recorte_yo_gimp.png" alt="my picture" height="500">-->
		    	</div>
		    	
		    </div>
	    </div>	    
	</div>
	<div class="scroll-down">
		<div class="d-flex flex-column p-4">
			<div class="p-2"><span class="scroll-text">SCROLL DOWN</span></div>
			<div class="p-2">@include('svg.scrolldown')</div>
		</div>	
	</div>
	<div class="mark-scroll"></div>
	<div class="animation-banner-1 d-none d-lg-block">
		<div style="background-color: #623A52">
			<div class="row">
				<div class="col-md-4 text-center d-inline-block">
					<h3 class="banner-text abstract">The Abstract</h3>
					@include('svg.csscode')					
				</div>
				<div class="col-md-4 text-center d-inline-block">
					<h3 class="banner-text becomes">Becomes</h3>
					@include('svg.gear')				
				</div>
				<div class="col-md-4 text-center d-inline-block">
					<h3 class="banner-text experiences">Experiences</h3>
					<!--<img src="/images/All-CSS3-Filters.jpg" class="filter-skills" alt="css screenshot">	-->	
					@include('svg.ux')			
				</div>
			</div>		
		</div>		
	</div>
	<div class="mark-scroll"></div>
	<div style="position:relative;">
	  	<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
	  		<h1>SKILLS</h1>
	    	<p>¿Whats my skillset?, things I'm good at and have been working with for some time, enough to be comfortable with.</p>
	    	<h2>Front-End</h2>
	    	<div class="row mt-2">
	    		<div class="col-md-6">
	    			<div class="row">
	    				<div class="col-md-4">
			    			@include('svg.html5')
			    		</div>
			    		<div class="col-md-8">
							<p class="pt-md-5">HTML5: 2 years proved experience.</p>
		    			</div>
	    			</div>	    			
	    		</div>
	    		<div class="col-md-6">
	    			<div class="row">
	    				<div class="col-md-8">
							<p class="float-right pt-md-5">CSS/CSS3: 4 years proved experience.</p>
		    			</div>
		    			<div class="col-md-4">
			    			@include('svg.css3')
			    		</div>
	    			</div>  			
		    	</div> 		    	  		
	    	</div>
	    	<div class="row mt-2">
	    		<div class="col-md-6">
	    			<div class="row">
	    				
			    		<div class="col-md-8">
							<p class="pt-md-5 float-right">JavaScript: 4 years proved experience.</p>
		    			</div>
		    			<div class="col-md-4">
			    			@include('svg.javascript')
			    		</div>
	    			</div>	    			
	    		</div>
	    		<div class="col-md-6">
	    			<div class="row">
	    				
		    			<div class="col-md-4">
			    			@include('svg.jquery')
			    		</div>
			    		<div class="col-md-8">
							<p class="pt-md-5">jQuery: 2 years proved experience.</p>
		    			</div>
	    			</div>  			
		    	</div> 		    	  		
	    	</div>
	    	<div class="row mt-2">
	    		<div class="col-md-6">
	    			<div class="row">
	    				<div class="col-md-4">
			    			@include('svg.bootstrap')
			    		</div>
			    		<div class="col-md-8">
							<p class="pt-md-5">Bootstrap 3/4: 2 years proved experience.</p>
		    			</div>
	    			</div>	    			
	    		</div> 
	    		<div class="col-md-6">
	    			<div class="row">
	    				<div class="col-md-8">
							<p class="pt-md-5">Illustrator: Basic knowledge of the tool, enough to create and edit art assets for web development.</p>
		    			</div>
	    				<div class="col-md-4">
			    			@include('svg.illustrator')
			    		</div>
			    		
	    			</div>	    			
	    		</div> 		    	  		
	    	</div>
	    	<div class="row mt-2">
	    		<div class="col-md-12">
	    			<h3>All of these skills are beeing used repeatedly in this site and in other sites showed in the portfolio. </h3>
	    		</div>
	    	</div>
	    	
	  	</div>
	</div>


	<div class="container-fluid about">
    	<div class="row mt-4">
			<div class="col-md-1 d-none d-lg-block">
				<div>@include('svg.adorno-vertical-1')</div>						
			</div>

			<div class="col-md-3 col-sm-4 offset-md-3 offset-sm-4">@include('svg.internet')</div>
			<div class="col-md-1 d-none d-lg-block float-md-right">
	    		<div class="float-md-right">@include('svg.adorno-vertical-1')</div>
	    	</div>
			<div class="position-relative col-md-8 offset-md-2 overflow-hidden text-padding text-center">

	    		<p id="texto1" class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis porta commodo. Sed feugiat dui sit amet augue aliquet sodales. Sed rhoncus felis ultricies maximus tincidunt. Donec facilisis tortor vitae tristique posuere. Praesent et efficitur orci, nec molestie nisl.</p>			
	    	</div> 	    	  	
		</div>
    </div>
    <div style="position:relative;">
	  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
	    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
	  </div>
	</div>

	<div class="bg-info" style="background-image: url('/images/p3.jpg');min-height: 400px;">
	  <div class="caption">
	    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
	  </div>
	</div>

	<div style="position:relative;">
	  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
	    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
	  </div>
	</div>

    <div class="container-fluid skills">
    	<div class="row mt-4">
			<div class="col-md-1 d-none d-lg-block">
				<div>@include('svg.adorno-vertical-1')</div>						
			</div>

			<div class="col-md-3 col-sm-4 offset-md-3 offset-sm-4">some svg</div>
			<div class="col-md-1 d-none d-lg-block float-md-right">
	    		<div class="float-md-right">@include('svg.adorno-vertical-1')</div>
	    	</div>
			<div class="position-relative col-md-8 offset-md-2 overflow-hidden text-padding text-center">

	    		<p id="texto1" class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis porta commodo. Sed feugiat dui sit amet augue aliquet sodales. Sed rhoncus felis ultricies maximus tincidunt. Donec facilisis tortor vitae tristique posuere. Praesent et efficitur orci, nec molestie nisl.</p>			
	    	</div> 	    	  	
		</div>
    </div>

    <div class="container-fluid portfolio">
    	<div class="row mt-4">
			<div class="col-md-1 d-none d-lg-block">
				<div>@include('svg.adorno-vertical-1')</div>						
			</div>

			<div class="col-md-3 col-sm-4 offset-md-3 offset-sm-4">@include('svg.internet')</div>
			<div class="col-md-1 d-none d-lg-block float-md-right">
	    		<div class="float-md-right">@include('svg.adorno-vertical-1')</div>
	    	</div>
			<div class="position-relative col-md-8 offset-md-2 overflow-hidden text-padding text-center">

	    		<p id="texto1" class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis porta commodo. Sed feugiat dui sit amet augue aliquet sodales. Sed rhoncus felis ultricies maximus tincidunt. Donec facilisis tortor vitae tristique posuere. Praesent et efficitur orci, nec molestie nisl.</p>			
	    	</div> 	    	  	
		</div>
    </div>    
@stop