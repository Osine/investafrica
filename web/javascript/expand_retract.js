function expand(element) {
    var target = document.getElementById(element);
    var h = target.offsetHeight;
    var sh = target.scrollHeight();
    var loopTimer = setTimeout('expand(\'' + element + '\')', 8);
    if (h < sh) {
        h += 5;
    } else {
        clearTimeout(loopTimer);
    }
    target.style.height = h + "px";
}

function retract(element) {
    var target = document.getElementById(element);
    var h = target.offsetHeight;
    var loopTimer = setTimeout('retract(\'' + retract + '\')', 8);
    if (h > 0)
        h -= 5;
} else {
    target.style.height = "0px";
    clearTimeout(loopTimer);
}
target.style.height = h + "px";
}

var activeItemSlug = "bangkok";
var activeItemSlugLong = "bangkok-thailand";
var activeItemName = "Bangkok";
var activeItemCountry = "Thailand";
var modalOpen = 'item';
var cityLatitude = "13.7566968";
var cityLongitude = "100.5019493";
var placesCoords = [];
var placesCoordsSleep = [];;
$(function() {
    $('.modal-item-nav-left').show();
    $('.modal-item-nav-right').show();
});
$(function() {
    $('.modal.item').find('.tabs ul .li[data-tab="' + activeTab + '"]').trigger('click'); /* trigger lazyload to load images, cause sometimes won't happen bug if activeTab is set */
    $('.tab-' + activeTab + ' .lazyload').each(function() { $(this).attr('src', $(this).data('src')); }); /* $('.modal.item').find('.tabs ul .li[data-tab="'+activeTab+'"]').trigger('click'); */ /* console.log("$('.modal.item').find('.tabs ul .li[data-tab='+activeTab+']').trigger('click');"); */
    console.log("$('.modal.item').find('.tabs ul .li[data-tab='+activeTab+']').trigger('click');");
    console.log($('.modal.item').find('.tabs ul .li[data-tab="' + activeTab + '"]').html());
    console.log('activeTab', activeTab);
    setTimeout(function() { $('.tabs .li.active').click(); }, 500);
    if (activeTab != 'flights') { /* because flights need to load themselves, race condition */
        console.log('hideLoading21');
        $('.loading').removeClass('show');
        $('.loading_spinner').removeClass('show');
    } else if (activeTab == 'flights') { $('.loading_spinner-item').addClass('show'); }
    if (activeTab == 'tips') {
        if (!empty(selfTips[activeItemSlug])) {
            $('.tab-tips .tip.self').remove();
            $('.tab-tips .tip-editor').parent().after('<div class="tip self">' + '<div class="votes">' + '<i class="fa fa-thumbs-up action-upvote active upvoted"></i>' + '&nbsp;' + '<i class="fa fa-thumbs-down action-downvote" style="opacity:0"></i>' + '&nbsp;' + '<br/>' + '<span style="font-size:0.75em;margin-top:0.5em;display:block;" class="votes">' + '1 pts' + '</span>' + '</div>' + '<div class="tip-text">' + selfTips[activeItemSlug] + '</div>' + '</div>');
        }
    }
    $('.tooltip').each(function() {
        if (!empty($(this).attr('title'))) {
            $(this).data('tooltip', $(this).attr('title'));
            $(this).attr('title', '');
            $(this).removeClass('tooltip');
            $(this).addClass('tooltip-set');
        }
    });
})
}