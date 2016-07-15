
$(function() {
    $(".zfx-details strong").tap(function() {
        if($(this).hasClass('zfx-show')) {
            $(this).removeClass('zfx-show');
        } else {
            $(this).addClass('zfx-show');
        }
    })
})