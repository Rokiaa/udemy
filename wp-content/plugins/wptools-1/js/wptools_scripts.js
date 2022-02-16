jQuery(document).ready(function($) {
    // console.log('OK!')
    $(document).on('click', '#wptools_an1 .notice-dismiss', function( event ) {
        //alert('1');
        //console.log('OK11!')
        data = {
            action : 'wptools_dismissible_notice',
        };
        $.post(ajaxurl, data, function (response) {
            // console.log(response, 'DONE!');
        });
    });
    $("#bill_javascript_status").html("Javascript is Working on this page and with your Browser");
});