$(document).on('click', '.pagination a', function(event) {
    let url = $(this).attr('href');
    event.preventDefault();
    window.history.pushState('', '', url);
    renderContacts(url);
});

function renderContacts(url) {
    $.ajax({
        url: url,
        type: 'get'
    })
    .done(function(response) {
        $('#contact-container').html(response);
    })
    .fail(function(response) {
        console.log(response.responseText);
    });
}