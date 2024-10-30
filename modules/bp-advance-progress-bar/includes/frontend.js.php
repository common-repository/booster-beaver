(function ($) {
    $scope = $('.fl-node-<?php echo $id; ?>');
    $wrapper = $scope.find('.bp-progress-bar');
    var skill = $wrapper.attr('data-skill');
    var skill_value = $wrapper.attr('data-value');
    var effect = $wrapper.attr('data-effect');
    var skillELem = $wrapper.find('.progress-bar__skill');
    var valueELem = $wrapper.find('.progress-bar__value');
    var prgBar = $wrapper.find('.progress-bar__bar');
    var prgInner = $wrapper.find('.progress-bar__bar-inner');
    if(effect == '1'){
        $(prgInner).attr("style" , "width : " +skill_value+ "%");
    }
    if(effect == '2'){
        $(prgInner).attr("style" , "width : " +skill_value+ "%");
    }
    if(effect == '3'){
        $(valueELem).addClass('progress-bar__value--aligned-value');
        $(valueELem).attr("style" ,"left :" +skill_value+ "%");
        $(prgInner).attr("style" ,"width :" +skill_value+ "%");
    }
    if(effect == '4'){
        $(valueELem).addClass('progress-bar__value--aligned-value');
        $(valueELem).attr("style" ,"left :" +skill_value+ "%");
        $(prgInner).attr("style" ,"width :" +skill_value+ "%")
        $(prgBar).addClass('progress-bar__bar--no-overflow');
    }
    if(effect == '5'){
        $(valueELem).addClass('progress-bar__value--aligned-value');
        $(valueELem).attr("style" ,"left :" +skill_value+ "%");
        $(prgInner).attr("style" ,"width :" +skill_value+ "%")
    }

    $wrapper.each(function (index, value) {
        var waypoint = new Waypoint({
            element: value,
            skill_value : $(value).find('.progress-bar__skill'),
            valueElem : $(value).find('.progress-bar__value'),
            prgBar : $(value).find('.progress-bar__bar'),
            prgInner : $(value).find('.progress-bar__bar-inner'),
            handler: function (direction) {
                if (direction == 'down') {
                    if(!$(valueELem).hasClass('js-animated')){
                        $(valueELem).addClass('js-animated');
                    }
                    if(!$(prgInner).hasClass('js-animated')){
                        $(prgInner).addClass('js-animated');
                    }
                    if(!$(skillELem).hasClass('js-animated')) {
                        $(skillELem).addClass('js-animated');
                    }
                }
            },
            offset: 'bottom-in-view',
        })
    });
})(jQuery);