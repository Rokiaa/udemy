(function($){
    // this event is called when the user rates a recipe inside the function use this to referrence the div
    $("recipe_rating").bind('rated', function(){
        // this will prevent user from changing the rating after reading a recipe
        $(this).rateit('readonly', true);

        var form = {
            action: 'r_rate_recipe',
            rid:  $(this).data('rid'),
            rating: $(this).rateit('value'),
        };

        $.post(recipe_obj.ajax_url, form, function(data){
            
        });

    });

})(jQuery);