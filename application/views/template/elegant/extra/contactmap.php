<div class="map">
				<div class="container">
						<a class="map-link small" href="http://goo.gl/maps/2Q8CE">View Map</a>
				</div>
		</div>
		

<!--ADAPTIVE MAP FOOTER SCRIPTS -->
<script>
(function() {

$(document).ready(function(){
  buildMap();
});

var sw = document.body.clientWidth,
    bp = 767,
    $map = $('.map');
var static = "http://maps.google.com/maps/api/staticmap?center=38.896778,-77.031498&zoom=13&markers=38.360844,-81.620803|38.897096,-77.036545&size=767x350&sensor=true";
var embed = '<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1600+Pennsylvania+Ave+NW,+Washington,+DC&amp;aq=0&amp;oq=1600+&amp;sll=27.909162,-82.770846&amp;sspn=0.1655,0.259552&amp;ie=UTF8&amp;hq=&amp;hnear=1600+Pennsylvania+Ave+NW,+Washington,+District+of+Columbia+20500&amp;t=m&amp;ll=38.929502,-77.02961&amp;spn=0.120185,0.411987&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>';

function buildMap() {
  if(sw>bp) { //If Large Screen
      if($('.map-container').length < 1) { //If map doesn't already exist
        buildEmbed();
      }
  } else {
      if($('.static-img').length < 1) { //If static image doesn't exist
        buildStatic();
      }
  }
};

function buildEmbed() { //Build iframe view
    $('<div class="map-container"/>').html(embed).prependTo($map);
};

function buildStatic() { //Build static map
   var mapLink = $('.map-link').attr('href'),
       $img = $('<img class="static-img" />').attr('src',static);
   $('<a/>').attr('href',mapLink).html($img).prependTo($map); 
}

$(window).resize(function() {
  sw = document.body.clientWidth;
  buildMap();
  google.maps.event.trigger(map, "resize");
});

})();
  </script> 