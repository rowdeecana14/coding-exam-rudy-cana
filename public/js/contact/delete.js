$(document).on('click', '.btn-delete', function() {
    let contact_id = $(this).attr('contact-id');
    let url = route_contact_destory + '/' + contact_id;
    $.ajax({
        url: url,
        method: 'post',
    })
    .done(function(data) {
        console.log(data)
        if(data.success == true) {
            alertify.success(data.message);
            renderContacts(window.location.href);
        }
        else {
            alertify.error(data.message);
        }
    })
    .fail(function(data) {
        console.log(data.responseText);
    });
});