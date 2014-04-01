$(document).ready(function() {

    /**
     * Set background color based on cookies value -> moved to check_me view
     */
//    if (null !== $.cookie('backgroundColor'))
//    {
//        $('body').css('backgroundColor', $.cookie('backgroundColor'));
//        console.log($.cookie('backgroundColor'));
//    }

    /**
     * Manage top menu tabs 
     */
    $('#js_topmenu li').removeClass('active');

    var container = $(".subcontainer").attr('id');
    container = container.substring(3);
    $('#' + container).parent().addClass('active');

    /**
     * Click on the bulb
     */
    $('#js-bulb').on('click', function() {
        if ($('body').css('backgroundColor') === 'rgb(255, 255, 255)') {
            /**
             * jquery.color.js
             */
            $('body').animate({
                backgroundColor: '#333333'
            }, 500);
            $(this).removeClass('bulb-on');
            $(this).addClass('bulb-off')
            /**
             * jquery.cookie.js
             */
            $.cookie('backgroundColor', '#333333', {expires: 7});
        }else {
            $('body').animate({
                backgroundColor: '#FFFFFF'
            }, 500);
            $(this).removeClass('bulb-off');
            $(this).addClass('bulb-on')
            $.removeCookie('backgroundColor');
        };
//        console.log($('body').css('backgroundColor'));
//        console.log($.cookie('backgroundColor'));
    });

    /**
     * Click on the next button
     */
    $('#form_next').on('click', function(event) {
        event.preventDefault();
        if ($('#answer').css('visibility') === 'hidden') {
            $('#answer').css('visibility', 'visible');
        } else {
            $('form[name="form"]').submit();
        }
    });
});