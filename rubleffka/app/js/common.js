$(document).ready(function(){

	$(".video").on( "click", function() {
	    this.paused ? this.play() : this.pause();
	});

});