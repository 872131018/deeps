$(document).ready(function() {
	/*
    * Delegate all clicks to the document
    */
    $(document).on('click', '[data-delegate=gallery_create]', function(event) {
        $.get($("meta[name=base_url]").attr("content")+"gallery", function( data ) {
            /*
            * Show the list of images for the gallery
            */
            $('#gallery').html(data)
            /*
            * Clear the current gallery
            */
            $('input[name=images]').val('')
        });
	});
});
