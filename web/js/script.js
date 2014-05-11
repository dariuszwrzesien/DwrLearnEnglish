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
     * Click on the light switcher
     */
    $('#js-light-switcher').on('click', function() {
        if ($('body').css('backgroundColor') === 'rgb(255, 255, 255)') {
            /**
             * jquery.color.js
             */
            $('body').animate({
                backgroundColor: '#333333'
            }, 500);
            /**
             * jquery.cookie.js
             */
            $.cookie('backgroundColor', '#333333', {expires: 7});
        } else {
            $('body').animate({
                backgroundColor: '#FFFFFF'
            }, 500);
            $.removeCookie('backgroundColor');
        };
//        console.log($('body').css('backgroundColor'));
//        console.log($.cookie('backgroundColor'));
    });
    
    /**
     * Click on the progress-bar switcher
     */
    var i=0
    $('#js-progress-bar-switcher').on('click', function(event) {
        event.preventDefault();
        $(this).find('input[type="checkbox"]').prop('checked', true);
        console.log(i);
        i++;
//        console.log($('#js-progress-bar').is(':visible'));
//        if ($('#js-progress-bar').is(':visible')) {
//            $('#js-progress-bar').hide();
//            $.cookie('progressBar', 'hidden', {expires: 7});
//            }
//        }else {
//            $('#js-progress-bar').show();
////            $.cookie('progressBar', 'visible', {expires: 7});
//        };
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
    
    /**
     * Restart dialog confirm (pop-window)
     */
     $(function() {
        $("#js-restart-dialog-confirm").dialog({
            autoOpen: false,
            resizable: false,
            modal: true,
            buttons: {
                "Yes": function(){
                    $(this).dialog("close");
                },
                "No": function(){
                    $(this).dialog("close");
                }
            }
        });
    });
    
    /**
     * Click on the restart button
     */
    $('#js-restart-button').on('click', function(event) {
        $("#js-restart-dialog-confirm").dialog("open");
    });
    
    /**
     * Config page dialog (pop-window)
     */
     $(function() {
        $("#js-config-page-dialog").dialog({
            autoOpen: false,
            resizable: false,
            modal: true,
            width: 350,
        });
    });
    
    /**
     * Click on the config page button
     */
    $('#js-config-page-button').on('click', function(event) {
        $("#js-config-page-dialog").dialog("open");
    });
});