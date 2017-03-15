/*Template.navbar.events({
    'click #menu-icon': function (e) {
        $("#menu-open").removeClass('displaynone');
    },
    'click #cross-icon': function (e) {
        $("#menu-open").addClass('displaynone');
    },
    'click .menu-button': function(e) {
        $("#menu-open").addClass('displaynone');
    },
});*/

$(document).ready(function() {
    $(document).on('click', "#menu-icon", function() {
        $("#menu-open").removeClass('displaynone');
    });
    
    $(document).on('click', '#cross-icon', function() {
        $("#menu-open").addClass('displaynone'); 
    });
    
    $(document).on('click', '.menu-button', function() {
        $("#menu-open").addClass('displaynone'); 
    });
});