$(document).ready(function() {
    
    /**
     * Manage top menu tabs 
     */
    $('#js_topmenu li').removeClass('active');
    
    var container = $(".subcontainer").attr('id');
    container = container.substring(3);
    $('#'+container).parent().addClass('active');

});
