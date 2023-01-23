$(function(){
    var searchStatus = 0;//0: idle, 1: sending
    $('#t-search-i').on('input', function(){
        $('#s-result-popup').html('');
        let searchVal = $(this).val();
        if(searchVal === '') return;
        $.get("search/"+searchVal, function(data, status){
            $('#events-ctn').html('');
            let result = data;
            let i = 0;
            while(result[i]){
                $('#s-result-popup').append('<div class="srp-elm" code-val="'+result[i].code_name+'">'+result[i].name+'</div>');
                $('#events-ctn').append('<div class="event"><a href="/event/' + result[i].id + '"></a><img src="img/' + result[i].thumbnail + '" width="500" alt=""><div class="event-name">' + result[i].year + ': ' + result[i].name + '</div></div>');
                i++;
            }
        });
    })
    $(document).on('click', '.srp-elm', function(){
        $('#t-search-i').val($(this).html());
        $('#t-search-i').attr('code-val', $(this).attr('code-val'));
        $('#t-search-i').trigger('input');
    })

    $('#t-search-i').on('focus', function(){
        $('#s-result-popup').css('display', 'block');
    })
    $('#t-search-i').on('focusout', function(){
        setTimeout(function(){
            $('#s-result-popup').css('display', 'none');
        }, 200);
    })
});