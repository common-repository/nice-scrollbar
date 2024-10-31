jQuery(document).ready(function($){
 $('.color-picker').wpColorPicker();
});
jQuery(document).ready( function ($) {
    var handle = $( "#custom-handle" );
    jQuery( "#slider" ).slider({
      value: parseInt($('#nsb_settings_bar_width').val()),
        value : 0,
        min: 3,
        max: 20,
        step: 1,
      slide: function( event, ui ) {
        jQuery( "#nsb_settings_bar_width" ).val(ui.value + "px" );
        handle.text( ui.value );
      },
      create: function() {
        handle.text( $('#nsb_settings_bar_width').val());
      },
    });
});