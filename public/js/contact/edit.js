$(document).on('click', '.btn-edit', function() {
    contact_id = $(this).attr('contact-id');
    let url = route_contact_edit + '/' + contact_id;    
    type = 'edit-';

    $.ajax({
        url: url,
        method: 'get',
    })
    .done(function(response) {
        if(response.success == true) {
            renderEdit(response.data);
            $('#modal-contact-edit').modal('show');
        }
        else {
            alertify.error(response.message);
        }
    })
    .fail(function(response) {
        console.log(response.responseText);
    });
});

function renderEdit(data) {
    if(Object.keys(data).length > 0) {
       ['name', 'company', 'phone', 'email'].forEach(function(field, index) {
            $(`#edit-${field}`).val(data[field]);
       });
    }
}