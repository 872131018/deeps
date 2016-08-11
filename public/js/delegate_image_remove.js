$(document).ready(function() {
	/*
    * Delegate all clicks to the document
    */
    $(document).on('click', '[data-delegate=image_remove]', function(event) {
    	/*
    	* Set fields that need to be updated for form submission
    	*/
    	var name = $(event.target).data("name")
    	var images = $("input[name=images]").val().split(',')
        /*
        * remove the image from the input
        */
        for(image in images) {
            if(images[image] == name) {
                $("div[data-name=\""+images[image]+"\"]").parent(".grid-item").remove()
                images.splice(image, 1)
            }
        }
        /*
        * update the input
        */
        $("input[name=images]").val(images.join(','))
    });
});
