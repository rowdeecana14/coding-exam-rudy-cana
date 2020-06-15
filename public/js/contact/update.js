$(document).on('submit', '#form-contact-edit', function(event) {
    event.preventDefault();
    let data = $(this).serializeArray();
    let url = route_contact_update + '/' + contact_id;

    $.ajax({
        url: url,
        dataType: 'json',
        method: 'put',
        data: data
    })
    .done(function(response) {
        removeErrors();
        if(response.success == true) {
            $('#form-contact-edit')[0].reset();
            $('#modal-contact-edit').modal('hide');
            alertify.success(response.message);
            renderContacts(window.history.href);
        }
        else {
            renderError(response.errors);
            console.log(response);
        }
    })
    .fail(function(response) {
        console.log(response.responseText);
    });
});