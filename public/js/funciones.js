$(document).ready(function(){
    var requiredFlag = ' * ';
    $('form :input')
        .filter('.required')
        .prev('label').children('span').text(requiredFlag).css("font-weight", "bold");
    $('form :input').blur(function(){
        $(this).parents('li:first').removeClass('warning').find('span.error-message').remove();
        if($(this).hasClass('required')){
            var $listItem = $(this).parents('li:first');
            if(this.value == ''){
                errorMessage = '  Este campo es obligatorio';
            };
            $('<span></span>')
                .addClass('error-message')
                .text(errorMessage)
                .appendTo($listItem)
                .addClass('entypo-up-bold')
                .appendTo($listItem);
            $listItem.addClass('warning');
        };
    });
    $(".fancybox-thumb").fancybox({
        prevEffect: 'none',
        nextEffect: 'none',
        helpers: {
            title: {
                type: 'inside'
            },
            thumbs: {
                width: 50,
                height: 50
            }
        }
    });
    $('.fancybox-media').fancybox({
        openEffect: 'fade',
        closeEffect: 'elastic',
        helpers: {
            media : {}
        }
    });
    $(".fancybox").fancybox({
        openEffect: 'none',
        closeEffect: 'none'
    });
    //if($("#videoList").css("height") ==> $("#videoList").css("height", "315px"){
    //    $("#videoList").css("overflow", "scroll");
    //}
    //$('body').css('minHeight', '400px');
});