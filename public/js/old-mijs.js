
function aboutanimate(){
	var t0 = new TimelineMax();
	t0.from('#svg_internet', 1, {x:-500, scaleY: 0, ease: Bounce.easeOut, delay: 0.0})
	var t1 = new TimelineMax();
	t1.staggerFrom('#svg_internet > g:nth-child(1) > path', 0.5, {	
		opacity:0
	}, 1)
}
function coganimate(){
	var t5= new TimelineMax();
	var t4= new TimelineMax();
	var t6= new TimelineMax();
	TweenMax.set(t5, {transformOrigin:"50% 50%"})
	TweenMax.set(t4, {transformOrigin:"50% 50%"})
	TweenMax.set(t6, {transformOrigin:"50% 50%"})
	t4.from('#e2_polygon', 10, {rotation:360, transformOrigin: "center", ease: Power0.easeNone})
	t5.from('#e32_polygon', 9,{rotation: -360, transformOrigin:"center", ease: Power0.easeNone }, 0);	
	t6.from('#e1_polygon', 8, {rotation:360, transformOrigin: "center", ease: Power0.easeNone})
}

var t2= new TimelineMax();
t2.from('#my-picture', 1, {x: 200, opacity:0 , ease: Power2.easeOut})
var t3 = new TimelineMax();
t3.from('.pricing-header > h1', 1, {x: -100, opacity:0 , ease: Power2.easeOut, delay: 1.0})
.staggerFrom('.pricing-header > p', 1, {scaleX: 0}, 1)
.staggerFrom('#intro-text > div.social-icons > ul >li', 0.5, {opacity:0,x:-300}, -0.1)
//.pricing-header


function mostrar(ventana)
{
	if(!$("."+ventana).is(":visible")){
		$("#navbarCollapse > ul > li").removeClass("active");		
		if(ventana == "home")
		{
			if($(".about").is(":visible"))
				$(".about").fadeOut(1000);
			if($(".skills").is(":visible"))
				$(".skills").fadeOut(1000);
			if($(".portfolio").is(":visible"))
				$(".portfolio").fadeOut(1000);
			$(".home").fadeIn(1000);
			$(".nav-home").addClass("active");
		}
		else if(ventana == "about")
		{
			if($(".home").is(":visible"))
				$(".home").fadeOut(1000);
			if($(".skills").is(":visible"))
				$(".skills").fadeOut(1000);
			if($(".portfolio").is(":visible"))
				$(".portfolio").fadeOut(1000);
			$(".about").fadeIn(1000);
			$(".nav-about").addClass("active");
		}
		else if(ventana == "skills")
		{
			if($(".home").is(":visible"))
				$(".home").fadeOut(1000);
			if($(".about").is(":visible"))
				$(".about").fadeOut(1000);
			if($(".portfolio").is(":visible"))
				$(".portfolio").fadeOut(1000);
			setInterval(function(){ 
				$(".skills").fadeIn(500);
				document.querySelector('.skills').scrollIntoView({ 
				  	behavior: 'smooth' 
				}); 
			}, 1000);
			setInterval(function(){ 				
				coganimate(); 
			}, 1000);	
			$(".nav-skills").addClass("active");	
		}
		else if(ventana == "portfolio")
		{
			if($(".home").is(":visible"))
				$(".home").fadeOut(1000);
			if($(".about").is(":visible"))
				$(".about").fadeOut(1000);
			if($(".skills").is(":visible"))
				$(".skills").fadeOut(1000);
			$(".portfolio").fadeIn(1000);
			$(".nav-portfolio").addClass("active");
		}
	}
}

//predefinidos
$(".about").hide();
$(".skills").hide();
$(".portfolio").hide();

//acciones cuando se clickean los botones del banner
$("#btn-about").click(function(){
    $(".about").fadeIn(1000);
    $(".skills").hide();
    $(".portfolio").hide();
    document.querySelector('.about').scrollIntoView({ 
	  	behavior: 'smooth' 
	});
    aboutanimate();
});
$("#btn-skills").click(function(){
	mostrar("skills");	
});
$("#btn-portfolio").click(function(){
    $(".portfolio").fadeIn(1000);
    $(".about").hide();
    $(".skills").hide();
    document.querySelector('.portfolio').scrollIntoView({ 
	  	behavior: 'smooth' 
	});
});

//acciones cuando se clickean los botones del nav
$(".nav-skills").click(function(){
});
$(".nav-home").click(function(){
});

