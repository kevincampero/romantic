/**
 * @file
 * Settings for test.
 *
 */
(function ($, Drupal){
    'use strict';
    Drupal.behaviors.ropitaTheme = {
        attach: function(context, settings) {
            /**
             * Function for test development
             */
            $(".carousel-item").click(function(){
                console.log("click")
            });
        }
    };
})(jQuery, Drupal)