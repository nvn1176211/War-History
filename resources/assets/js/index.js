$(function(){
    $(document).on('click', '.event', function(){
        let id = $(this).attr('event-id');
        window.location.href = window.location.href + 'event/' + id;
    })
});