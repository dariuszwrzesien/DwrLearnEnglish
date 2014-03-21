$(document).ready(function() {

    /**
     * Manage top menu tabs 
     */
    $('#js_topmenu li').removeClass('active');

    var container = $(".subcontainer").attr('id');
    container = container.substring(3);
    $('#' + container).parent().addClass('active');


    /**
     * 
     * Click on the bulb
     */
    $('#js-bulb').on('click', function() {
        if($('body').css('backgroundColor') === 'rgb(255, 255, 255)'){
            /**
             * jquery.color.js
             */
              $('body').animate({
                 backgroundColor:  '#333333'
              },500);
              $(this).removeClass('bulb-on');
              $(this).addClass('bulb-off')
        }else{
            $('body').animate({
                 backgroundColor:  '#FFFFFF'
              },500);
              $(this).removeClass('bulb-off');
              $(this).addClass('bulb-on')
        };
        console.log($('body').css('backgroundColor'));
    });
});