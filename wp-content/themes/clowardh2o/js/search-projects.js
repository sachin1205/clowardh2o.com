
jQuery(document).ready(function() {
    jQuery(document).on('click', 'body .region-id', function(e) {
        e.preventDefault();
         jQuery('html, body').animate({scrollTop: '+=400px'}, 500);
         search_option = jQuery(this).attr('rel');
         //alert(search_option);
        jQuery.ajax({
            type: "post",
            //dataType: "json",
            url: myAjax.ajaxurl,
            data: { action: "search_pr_results", 'search_option' : search_option },
            success: function(response) {
                //alert('test');
                jQuery("#projects_results").html(response);
                
            }
        })

    })
})