(function ($, Drupal){
    Drupal.behaviors.ropitaTheme = {
        attach: function attach(context) {
            //contenido
            $(".jqactivate").click(function(){
                console.log("click")
            });
        }
    };
})(jQuery, Drupal)