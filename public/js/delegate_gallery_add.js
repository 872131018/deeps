$(document).ready(function() {
	/*
    * Delegate all clicks to the document
    */
    $(document).on('click', '[data-delegate=gallery_add]', function(event) {
        console.log(event.target)
        /*
        * Update status of the button
        */
        var button = $(event.target)
        button.removeClass('btn-default')
        button.addClass('btn-success')
        button.html('Success')
        /*
        * Add an image to the images field
        */
        var image = $(event.target).data("image")
        var images = $('input[name=images]').val()
        if(images == '') {
            images = image
        } else {
            images = images +','+image
        }
        $('input[name=images]').val(images)
	});
});
