/*-- 回到顶部 --*/

function backTop () {

	var scrootp = jQuery(document).scrollTop();
	var Heig = document.documentElement.clientHeight;
	star(Heig, '.back-to-top')

	jQuery('.totop').click(function () {
		jQuery('body,html').scrollTop('0')
	})

    function star(a, b) {
        jQuery(window).scroll(function () {
            if (jQuery(document).scrollTop() > a) {
                jQuery(b).stop(true, true).show();
            } else {
                jQuery(b).stop(true, true).hide();
            }

            if (jQuery(document).scrollTop() > document.body.scrollHeight - document.body.clientHeight - 100) {
                if (jQuery(".work-list-box.hide").length > 0) {
                    var loadTime = 300 + parseInt(700 * Math.random());
                    jQuery("#page-loading").show();
                    setTimeout(function () {
                        jQuery("#page-loading").hide();
                        jQuery(".work-list-box.hide").removeClass("hide");
                        jQuery(".pageturning.hide").removeClass("hide");
                    }, loadTime);
                }
            }
        })
    }

}

backTop()


function hideGlobalMaskLayer() {
    jQuery('.shade').hide().removeClass('project-view');
    jQuery('html').removeClass('body-fixed')

    jQuery('.mask-layer').addClass('hide');
    if (isWindows()) {
    	jQuery('html').removeClass('scroll-fixed');
    }
}




// 取消、关闭按钮 弹层消失
function confirmClose(obj) {
    obj.parents('.pop-up').hide();
    hideGlobalMaskLayer();
}

jQuery('.pop-up .pop-cancel,.pop-up .pop-close').on('click', function () {
    confirmClose(jQuery(this))
})



function navTypeTopFix() {
    var doc = jQuery(document);
    var tabNav = jQuery('.subnav-content-wrap');
    var tabNavOffsetTop = tabNav.position().top;
    var tabNavH = tabNav.height();
    var onoff = false;
    jQuery('.subnav-content-wrap').css('height', tabNav.height());
    window.onresize = function(){
        // var tabNav = jQuery('.subnav-wrap');
        // if(!jQuery('.subnav-wrap').hasClass('tab-nav-fixed')){
            tabNavOffsetTop = tabNav.position().top;
        // }
        // jQuery('.subnav-content-wrap').css('height', tabNav.height());
    }
    jQuery(window).on('scroll', function (e) {
        
        if (jQuery('#confighome').is(":visible") == false) {
            if (doc.scrollTop() >= tabNavOffsetTop) {
                jQuery('.subnav-wrap').addClass('tab-nav-fixed')
            } else {
                jQuery('.subnav-wrap').removeClass('tab-nav-fixed');
            }
        } else {
            if (doc.scrollTop() >= tabNavOffsetTop + jQuery('#confighome').height()) {

                jQuery('.subnav-wrap').addClass('tab-nav-fixed')


            } else {
               jQuery('.subnav-wrap').removeClass('tab-nav-fixed');
            }
            // if (doc.scrollTop() >= tabNavOffsetTop + jQuery('#confighome').height()) {
            //     tabNav.addClass('tab-nav-fixed');
            // } else {
            //     tabNav.removeClass('tab-nav-fixed');
            // }
        }

    })

}

function showGlobalMaskLayer() {
    jQuery('.shade').show().addClass('project-view');
    jQuery('html').addClass('body-fixed');
    if (isWindows()) {
        jQuery('html').addClass('scroll-fixed');
    }
}

var isMac = function () {
    return /macintosh|mac os x/i.test(navigator.userAgent);
}
isMac()

var isWindows = function () {
    return /windows|win32/i.test(navigator.userAgent);
}
isWindows()


function inputBtnUseable(textAreaJq, minLength) {
	var btnJq = textAreaJq.parent().parent().find(".btn-current-middle");
	if (textAreaJq.val() != "" && textAreaJq.val().length >= minLength) {
		btnJq.addClass('btn-default-main').removeClass('btn-disabled')
	} else {
		btnJq.removeClass('btn-default-main').addClass('btn-disabled')
	}
}