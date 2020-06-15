$(document).on('click', '#btn-contact-create', function() {
    removeErrors();
    $('#modal-contact-create').modal('show');
});

$(document).on('submit', '#form-contact-create', function(event) {
    event.preventDefault();
    type = '';
    console.log(field_errors)
    let data = $(this).serializeArray();

    $.ajax({
        url: route_contact_store,
        dataType: 'json',
        method: 'post',
        data: data
    })
    .done(function(response) {
        removeErrors();
        if(response.success == true) {
            $('#form-contact-create')[0].reset();
            $('#modal-contact-create').modal('hide');
            renderContacts(window.history.href);
            alertify.success(response.message);
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

function renderError(errors) {
    if(errors == undefined) {
        return false;
    }
    field_errors = [];
    Object.keys(errors).forEach(function(field, index) {
        let field_name = type + field; 

        if(index == 0) {
            $(`#${field_name}`).focus();
        }
        field_errors.push(field_name);
        $(`#${field_name}`).addClass('is-invalid');  
        $(`#${field_name}`).after(`<span id="error-${field_name}" class="error invalid-feedback">${errors[field]}</span>`);
        $(`#error-${field_name}`).addClass('d-block');
    });
}

function removeErrors() {
    field_errors.forEach(function(field) {
        $(`#${ field }`).removeClass('is-invalid');  
        $(`#error-${ field }`).remove();  
    });
}