$(document).on('keydown', '#input-contact-search', function(event) {
    let search = $(this).val();

    if(event.key == 'Enter') {
        $.ajax({
            url: route_contact_show,
            method: 'post',
            dataType: 'json',
            data: { 
                search: search
            }
        })
        .done(function(response) {
            if(response.success == true) {
                renderShow(response.data);
            }
            else {
                console.log(response)
            }
        })
        .fail(function(response) {
            console.log(response.responseText);
        });
    }
});

function renderShow(data) {
    let html = '';

    if(data != null) {
        html = `
            <tr>
                <td>${ 1 }</td>
                <td>${ data.name }</td>
                <td>${ data.company }</td>
                <td>${ data.phone }</td>
                <td>${ data.email }</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-warning btn-edit" contact-id="${ data.id }"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-delete" contact-id="${ data.id }"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        `;
        $('.tbody-contacts').html(html);
    }
    else {
        $('.tbody-contacts').html(`
            <tr>
                <td colspan='8' class="text-center">NO RECORDS AVAILABLE</td>
            </tr>
        `);
    }
    
    $('.pagination').addClass('d-none');
    $('#p-contact-list').addClass('d-none');
}