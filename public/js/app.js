$(document).ready(function() {
    $('#changePassword').click(function() {
        if($(this).is(":checked")) {
            $(".password").removeAttr('disabled');
        } else {
            $(".password").attr('disabled','');
        }
    });
});
function confirmRemove(url) {
    bootbox.confirm({
        message: "Do you want delete?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if(result) {
                window.location.href = url;
            }
        }
    });
}
