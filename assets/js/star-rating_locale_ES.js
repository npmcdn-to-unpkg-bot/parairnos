/*!
 * Star Rating <LANG> Translations
 *
 * This file must be loaded after 'star-rating.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-star-rating
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";
    $.fn.ratingLocales['<es>'] = {
        defaultCaption: '{rating} Stars',
        starCaptions: {
          
            1: 'Pésimo',
           
            2: 'Malo',
            
            3: 'Regular',
            
            4: 'Muy Bueno',
            
            5: 'Excelente'
        },
        clearButtonTitle: 'Limpiar',
        clearCaption: 'Sin calificación'
    };
})(window.jQuery);
