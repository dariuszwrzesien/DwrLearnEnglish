$(document).ready(function() {

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
    $('#js-light-switcher').on('click', function(event) {
        event.preventDefault();
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
            $(this).find('input[type="checkbox"]').prop('checked', false);
        } else {
            $('body').animate({
                backgroundColor: '#FFFFFF'
            }, 500);
            $.removeCookie('backgroundColor');
            $(this).find('input[type="checkbox"]').prop('checked', true);
        };

        // Set background color based on cookies value -> moved to check_me view
    });

    /**
     * Click on the progress-bar switcher
     */
    $('#js-progress-bar-switcher').on('click', function(event) {
        event.preventDefault();
        var progressBarStatus = $(this).find('input[type="checkbox"]').prop('checked');
        $(this).find('input[type="checkbox"]').prop('checked', !progressBarStatus);

        if (!progressBarStatus) {
            $('.progress').show();
            $.cookie('progressBar', 'true', {expires: 7});
        } else {
            $('.progress').hide();
            $.cookie('progressBar', 'false', {expires: 7});
        };

        // Set progress bar based on cookies value -> moved to check_me view
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
                "Yes": function() {
//                    e.preventDefault();
                    $.ajax({
                        type:"POST",
                        url:$(this).data('ajax-route'),
                        data:'{"package_id": "' + $(this).data('ajax-package') + '"}',
                        dataType:'json',
                        global:false,
                        async:false,
                        success:function(data){
                            console.log(data);
                            window.location.replace(data.package_id);
                        }
                    });
                    $(this).dialog("close");
                },
                "No": function() {
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