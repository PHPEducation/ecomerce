$(document).ready(function() {
    $('#changePassword').click(function() {
        if($(this).is(":checked")) {
            $(".password").removeAttr('disabled');
        } else {
            $(".password").attr('disabled','');
        }
    });
});
