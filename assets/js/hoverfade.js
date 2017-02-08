var inviz = $('.hv-img');
inviz.data({animating: false});

inviz.hover(function () { //mouse enter
    if (inviz.data('animating')===true) {
        $(this).velocity("stop", true).velocity('reverse',{ duration:100 });
        inviz.data({animating:false});
    } else {
        $(this).velocity({
            opacity: 1.0
        }, {
            duration: 100,
            begin: function(){
                inviz.data({animating:true});
            },
            complete: function(){
                inviz.data({animating:false});
            }
        });
    }
}, function() { //mouse exit
    if (inviz.data('animating')===true) {
        $(this).velocity("stop", true).velocity('reverse', {duration: 100});
        inviz.data({animating:false});
    } else {
        $(this).velocity({
            opacity: 0.0
        }, {
            duration: 100,
            begin: function() {
                inviz.data({animating:true});
            },
            complete: function() {
                inviz.data({animating:false});
            }
        });

    }
}); 