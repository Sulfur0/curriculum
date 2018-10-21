/*Saltos con el mousewheel*/

(function() {
  var delay = false;

  $(document).on('mousewheel DOMMouseScroll', function(event) {
    event.preventDefault();
    if(delay) return;

    delay = true;
    setTimeout(function(){delay = false},200)

    var wd = event.originalEvent.wheelDelta || -event.originalEvent.detail;

    var a= document.getElementsByClassName('mark-scroll');
    if(wd < 0) {
      for(var i = 0 ; i < a.length ; i++) {
        var t = a[i].getClientRects()[0].top;
        if(t >= 70) break;
      }
    }
    else {
      for(var i = a.length-1 ; i >= 0 ; i--) {
        var t = a[i].getClientRects()[0].top;
        if(t < -20) break;
      }
    }
    
    if(i >= 0 && i < a.length) {
    	if(i==0){
    		$('html,body').animate({
		        scrollTop: a[i].offsetTop        
		    });
    	}else{
    		$('html,body').animate({
		        scrollTop: a[i].offsetTop-65        
		    });
    	}      
    }
  });
})();
/*console.clear();*/

/*//Saltos con el mousewheel*/

/*Animaciones del landing*/

function animarInicio(){
	var t2= new TimelineMax();	
	t2.staggerFrom('#recorte_yo > g', 1, {opacity:0, x:200}, 0.5)
	//t2.from('#my-picture', 1, {x: 200, opacity:0 , ease: Power2.easeOut}, 1)
	var t3 = new TimelineMax();
	t2.from('.pricing-header > h1', 1, {x: -100, opacity:0 , ease: Power2.easeOut, delay: 1.0})
	.staggerFrom('.pricing-header > p', 1, {scaleX: 0}, 1)
	.staggerFrom('#intro-text > div.social-icons > ul >li', 0.5, {opacity:0,x:-300}, -0.1)
}
function animarSvgScroll(){
	var repeat = $('#grupo_scroll');
	
	var tl = new TimelineMax({ repeat: -1 })
	  	.to(repeat, 1, { y: 20 })
	  	.to(repeat, 1, { y: 0 })
}

animarInicio();
animarSvgScroll();

/*//Animaciones del landing*/

/* Animaciones de Skills */
function animarSkills(){
	//animacion del banner top
	
	var skillst1= new TimelineMax();
	skillst1.from('#arco-banner', 1, {scaleX: 0, transformOrigin: "left" , ease: Power2.easeOut, delay: 1})
	skillst1.staggerFrom('#e1_texte > tspan', 0.3, {x: 200, opacity:0 , ease: Power2.easeOut}, 0.1)	
	skillst1.to('#css-code-group', 0.5, {x: 300, opacity:0 , ease: Power2.easeOut, delay: -0.1})
	skillst1.from('#gear-g', 1, {x: -150, opacity:0 , ease: Power2.easeOut, delay: 0})
	
	/*animaciones del cog*/
	
	var t5= new TimelineMax();
	TweenMax.set(t5, {transformOrigin:"50% 50%"})
	t5.from('#cog', 10, {rotation:360, svgOrigin: "135% 135%", ease: Power0.easeNone,repeat:-1}, 0)	
	/*console.log(document.getElementById("gear-g").getBBox());*/
	var gear = document.getElementById('gear-g');

	skillst1.to('#gear-g', 0.5, {x: 150, opacity:0 , ease: Power2.easeOut, delay: 2})
	/*//animaciones del cog*/	
	
	/*animaciones del UX*/
	.staggerFrom('.ux_secundario', 0.3, {x: 100, opacity:0 , ease: Power2.easeOut}, 0.1)
	.from('.ux_bg', 0.5, {scaleX: 0, scaleY:0,  opacity:0, transformOrigin: "center" , ease: Power2.easeOut, delay: 0})
	.from('.ux_pata', 0.5, {scaleX: 0, transformOrigin: "center" , ease: Power2.easeOut, delay: 0})
	.from('.ux_tronco', 0.5, {scaleY: 0, transformOrigin: "bottom" , ease: Power2.easeOut, delay: 0})
	.from('.ux_monitor_inferior', 0.5, {scaleX: 0, transformOrigin: "center" , ease: Power2.easeOut, delay: 0})
	.from('.ux_exterior', 2.5, {ease: Elastic.easeOut.config(1, 0.3), scaleY: 0, transformOrigin: "bottom" })
	.from('.ux_interior', 0.5, {scaleX: 0, transformOrigin: "center" , ease: Power2.easeOut, delay: 0})
	.from('.ux_rectangulo', 0.5, {scaleY: 0, transformOrigin: "top" , ease: Bounce.easeOut, delay: 0})
	.staggerFrom('#ux_1 > g > path', 0.3, {x: 100, opacity:0 , ease: Power2.easeOut}, 0.1);	
	/*//animaciones del UX*/
	skillst1.to('#gear-g', 0.5, {opacity:100,x:0 , ease: Power2.easeOut, delay: 0})
	skillst1.to('#css-code-group', 0.5, {opacity:100, x:0 , ease: Power2.easeOut, delay: 0})
	

}
animarSkills();
/* //Animaciones de Skills */

function aboutanimate(){
	var t0 = new TimelineMax();
	t0.from('#svg_internet', 1, {x:-500, scaleY: 0, ease: Bounce.easeOut, delay: 0.0})
	var t1 = new TimelineMax();
	t1.staggerFrom('#svg_internet > g:nth-child(1) > path', 0.5, {	
		opacity:0
	}, 1)
}



//acciones cuando se clickean los botones del nav
$(".nav-skills").click(function(){
});
$(".nav-home").click(function(){
});
$(".nav-portfolio").click(function(){
});



/* Javascript para esconder imagen y texto al hacer scroll */
function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
/*
Simple Utility Function This will allow you to call a utility function that accepts the element you're looking for and if you want the element to be fully in view or partially.
*/
function Utils() {

}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }
};

var Utils = new Utils();

/*llamada*/
/*var isElementInView = Utils.isElementInView($('#banner'), true);

if (isElementInView) {
    console.log('in view');
} else {
    console.log('out of view');
}*/
/*//Javascript para esconder imagen y texto al hacer scroll*/




/*
	DIBUJAR SVG
	var dibujar = function(){
		$('#svg-banner-skills').removeClass("invisible");
	  	var mySVG = $('#svg-banner-skills').drawsvg();
		mySVG.drawsvg('animate'); 
	};
	setTimeout(dibujar, 10000);
	*/