/*

Conten2 - feat switcher

*/

$(document).ready(function(){
$('.wizardpanel div.admincontent').hide(); // Hide all divs
$('.wizardpanel div.admincontent:first').show(); // Show the first div
$('.wizardpanel .wizardpanel-content-left li:first').addClass('active'); // Set the class for active state
$('.wizardpanel .wizardpanel-content-left li a').click(function(){ // When link is clicked
$('.wizardpanel .wizardpanel-content-left li').removeClass('active'); // Remove active class from links
$(this).parent().addClass('active'); //Set parent of clicked link class to active
var currentTab = $(this).attr('href'); // Set currentTab to value of href attribute
$('.wizardpanel div.admincontent').hide(); // Hide all divs
$(currentTab).show(); // Show div with id equal to variable currentTab
return false;
});
});


// Magnific Popup v0.8.7 by Dmitry Semenov
// http://bit.ly/magnific-popup#build=inline+image+iframe+fastclick
(function(a){var b="Close",c="BeforeAppend",d="MarkupParse",e="Open",f="Change",g="mfp",h="."+g,i="mfp-ready",j="mfp-removing",k="mfp-prevent-close",l,m=function(){},n=!!window.jQuery,o,p=a(window),q,r,s,t,u,v=function(a,b){l.ev.on(g+a+h,b)},w=function(b,c,d,e){var f=document.createElement("div");return f.className="mfp-"+b,d&&(f.innerHTML=d),e?c&&c.appendChild(f):(f=a(f),c&&f.appendTo(c)),f},x=function(b,c){l.ev.triggerHandler(g+b,c),l.st.callbacks&&(b=b.charAt(0).toLowerCase()+b.slice(1),l.st.callbacks[b]&&l.st.callbacks[b].apply(l,a.isArray(c)?c:[c]))},y=function(){(l.st.focus?l.content.find(l.st.focus).eq(0):l.wrap).focus()},z=function(b){if(b!==u||!l.currTemplate.closeBtn)l.currTemplate.closeBtn=a(l.st.closeMarkup.replace("%title%",l.st.tClose)),u=b;return l.currTemplate.closeBtn},A=function(){a.magnificPopup.instance||(l=new m,l.init(),a.magnificPopup.instance=l)},B=function(b){if(a(b).hasClass(k))return;var c=l.st.closeOnContentClick,d=l.st.closeOnBgClick;if(c&&d)return!0;if(!l.content||a(b).hasClass("mfp-close")||l.preloader&&b===l.preloader[0])return!0;if(b!==l.content[0]&&!a.contains(l.content[0],b)){if(d)return!0}else if(c)return!0;return!1};m.prototype={constructor:m,init:function(){var b=navigator.appVersion;l.isIE7=b.indexOf("MSIE 7.")!==-1,l.isIE8=b.indexOf("MSIE 8.")!==-1,l.isLowIE=l.isIE7||l.isIE8,l.isAndroid=/android/gi.test(b),l.isIOS=/iphone|ipad|ipod/gi.test(b),l.probablyMobile=l.isAndroid||l.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),q=a(document.body),r=a(document),l.popupsCache={}},open:function(b){var c;b.isObj===!1?l.items=b.items.toArray():l.items=a.isArray(b.items)?b.items:[b.items];if(l.isOpen){l.updateItemHTML();return}l.types=[],t="",l.ev=b.mainEl||r;if(b.isObj)l.index=b.index||0;else{l.index=0;var f=b.items,g;for(c=0;c<f.length;c++){g=f[c],g.parsed&&(g=g.el[0]);if(g===b.el[0]){l.index=c;break}}}b.key?(l.popupsCache[b.key]||(l.popupsCache[b.key]={}),l.currTemplate=l.popupsCache[b.key]):l.currTemplate={},l.st=a.extend(!0,{},a.magnificPopup.defaults,b),l.fixedContentPos=l.st.fixedContentPos==="auto"?!l.probablyMobile:l.st.fixedContentPos,l.bgOverlay||(l.bgOverlay=w("bg").on("click"+h,function(){l.close()}),l.wrap=w("wrap").attr("tabindex",-1).on("click"+h,function(a){B(a.target)&&l.close()}),l.container=w("container",l.wrap)),l.contentContainer=w("content"),l.st.preloader&&(l.preloader=w("preloader",l.container,l.st.tLoading));var j=a.magnificPopup.modules;for(c=0;c<j.length;c++){var k=j[c];k=k.charAt(0).toUpperCase()+k.slice(1),l["init"+k].call(l)}x("BeforeOpen"),l.st.closeBtnInside?(v(d,function(a,b,c,d){c.close_replaceWith=z(d.type)}),t+=" mfp-close-btn-in"):l.wrap.append(z()),l.st.alignTop&&(t+=" mfp-align-top"),l.fixedContentPos?l.wrap.css({overflow:l.st.overflowY,overflowX:"hidden",overflowY:l.st.overflowY}):l.wrap.css({top:p.scrollTop(),position:"absolute"}),(l.st.fixedBgPos===!1||l.st.fixedBgPos==="auto"&&!l.fixedContentPos)&&l.bgOverlay.css({height:r.height(),position:"absolute"}),r.on("keyup"+h,function(a){a.keyCode===27&&l.close()}),p.on("resize"+h,function(){l.updateSize()}),l.st.closeOnContentClick||(t+=" mfp-auto-cursor"),t&&l.wrap.addClass(t);var m=l.wH=p.height(),n={};if(l.fixedContentPos){var o=l._getScrollbarSize();o&&(n.paddingRight=o)}l.fixedContentPos&&(l.isIE7?a("body, html").css("overflow","hidden"):n.overflow="hidden");var s=l.st.mainClass;l.isIE7&&(s+=" mfp-ie7"),s&&l._addClassToMFP(s),l.updateItemHTML(),x("BuildControls"),q.css(n),l.bgOverlay.add(l.wrap).prependTo(document.body),l._lastFocusedEl=document.activeElement,setTimeout(function(){l.content?(l._addClassToMFP(i),y()):l.bgOverlay.addClass(i),r.on("focusin"+h,function(b){if(b.target!==l.wrap[0]&&!a.contains(l.wrap[0],b.target))return y(),!1})},16),l.isOpen=!0,l.updateSize(m),x(e)},close:function(){if(!l.isOpen)return;l.isOpen=!1,l.st.removalDelay&&!l.isLowIE?(l._addClassToMFP(j),setTimeout(function(){l._close()},l.st.removalDelay)):l._close()},_close:function(){x(b);var c=j+" "+i+" ";l.bgOverlay.detach(),l.wrap.detach(),l.container.empty(),l.st.mainClass&&(c+=l.st.mainClass+" "),l._removeClassFromMFP(c);if(l.fixedContentPos){var d={paddingRight:0};l.isIE7?a("body, html").css("overflow","auto"):d.overflow="visible",q.css(d)}r.off("keyup"+h+" focusin"+h),l.ev.off(h),l.wrap.attr("class","mfp-wrap").removeAttr("style"),l.bgOverlay.attr("class","mfp-bg"),l.container.attr("class","mfp-container"),(!l.st.closeBtnInside||l.currTemplate[l.currItem.type]===!0)&&l.currTemplate.closeBtn&&l.currTemplate.closeBtn.detach(),l._lastFocusedEl&&a(l._lastFocusedEl).focus(),l.currItem=null,l.content=null,l.currTemplate=null,l.prevHeight=0},updateSize:function(a){if(l.isIOS){var b=document.documentElement.clientWidth/window.innerWidth,c=window.innerHeight*b;l.wrap.css("height",c),l.wH=c}else l.wH=a||p.height();x("Resize")},updateItemHTML:function(){var b=l.items[l.index];l.contentContainer.detach(),l.content&&l.content.detach(),b.parsed||(b=l.parseEl(l.index));var c=b.type;x("BeforeChange",[l.currItem?l.currItem.type:"",c]),l.currItem=b;if(!l.currTemplate[c]){var d=l.st[c]?l.st[c].markup:!1;x("FirstMarkupParse",d),d?l.currTemplate[c]=a(d):l.currTemplate[c]=!0}s&&s!==b.type&&l.container.removeClass("mfp-"+s+"-holder");var e=l["get"+c.charAt(0).toUpperCase()+c.slice(1)](b,l.currTemplate[c]);l.appendContent(e,c),b.preloaded=!0,x(f,b),s=b.type,l.container.prepend(l.contentContainer),x("AfterChange")},appendContent:function(a,b){l.content=a,a?l.st.closeBtnInside&&l.currTemplate[b]===!0?l.content.find(".mfp-close").length||l.content.append(z()):l.content=a:l.content="",x(c),l.container.addClass("mfp-"+b+"-holder"),l.contentContainer.append(l.content)},parseEl:function(b){var c=l.items[b],d=c.type;c.tagName?c={el:a(c)}:c={data:c,src:c.src};if(c.el){var e=l.types;for(var f=0;f<e.length;f++)if(c.el.hasClass("mfp-"+e[f])){d=e[f];break}c.src=c.el.attr("data-mfp-src"),c.src||(c.src=c.el.attr("href"))}return c.type=d||l.st.type||"inline",c.index=b,c.parsed=!0,l.items[b]=c,x("ElementParse",c),l.items[b]},addGroup:function(a,b){var c=function(c){c.mfpEl=this,l._openClick(c,a,b)};b||(b={});var d="click.magnificPopup";b.mainEl=a,b.items?(b.isObj=!0,a.off(d).on(d,c)):(b.isObj=!1,b.delegate?a.off(d).on(d,b.delegate,c):(b.items=a,a.off(d).on(d,c)))},_openClick:function(b,c,d){var e=d.midClick!==undefined?d.midClick:a.magnificPopup.defaults.midClick;if(e||b.which!==2){var f=d.disableOn!==undefined?d.disableOn:a.magnificPopup.defaults.disableOn;if(f)if(a.isFunction(f)){if(!f.call(l))return!0}else if(p.width()<f)return!0;b.type&&b.preventDefault(),d.el=a(b.mfpEl),d.delegate&&(d.items=c.find(d.delegate)),l.open(d)}},updateStatus:function(a,b){if(l.preloader){o!==a&&l.container.removeClass("mfp-s-"+o),!b&&a==="loading"&&(b=l.st.tLoading);var c={status:a,text:b};x("UpdateStatus",c),a=c.status,b=c.text,l.preloader.html(b),l.preloader.find("a").click(function(a){a.stopImmediatePropagation()}),l.container.addClass("mfp-s-"+a),o=a}},_addClassToMFP:function(a){l.bgOverlay.addClass(a),l.wrap.addClass(a)},_removeClassFromMFP:function(a){this.bgOverlay.removeClass(a),l.wrap.removeClass(a)},_hasScrollBar:function(a){return document.body.clientHeight>(a||p.height())?!0:!1},_parseMarkup:function(b,c,e){var f;e.data&&(c=a.extend(e.data,c)),x(d,[b,c,e]),a.each(c,function(a,c){if(c===undefined||c===!1)return!0;f=a.split("_");if(f.length>1){var d=b.find(h+"-"+f[0]);if(d.length>0){var e=f[1];e==="replaceWith"?d[0]!==c[0]&&d.replaceWith(c):e==="img"?d.is("img")?d.attr("src",c):d.replaceWith('<img src="'+c+'" class="'+d.attr("class")+'" />'):d.attr(f[1],c)}}else b.find(h+"-"+a).html(c)})},_getScrollbarSize:function(){if(l.scrollbarSize===undefined){var a=document.createElement("div");a.id="mfp-sbm",a.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(a),l.scrollbarSize=a.offsetWidth-a.clientWidth,document.body.removeChild(a)}return l.scrollbarSize}},a.magnificPopup={instance:null,proto:m.prototype,modules:[],open:function(a,b){return A(),a||(a={}),a.isObj=!0,a.index=b||0,this.instance.open(a)},close:function(){return a.magnificPopup.instance.close()},registerModule:function(b,c){c.options&&(a.magnificPopup.defaults[b]=c.options),a.extend(this.proto,c.proto),this.modules.push(b)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,alignTop:!1,removalDelay:0,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&times;</button>',tClose:"Close (Esc)",tLoading:"Loading..."}},a.fn.magnificPopup=function(b){A();var c=a(this);if(typeof b=="string")if(b==="open"){var d,e=n?c.data("magnificPopup"):c[0].magnificPopup,f=parseInt(arguments[1],10)||0;e.items?d=e.items[f]:(d=c,e.delegate&&(d=d.find(e.delegate)),d=d.eq(f)),l._openClick({mfpEl:d},c,e)}else l.isOpen&&l[b].apply(l,Array.prototype.slice.call(arguments,1));else n?c.data("magnificPopup",b):c[0].magnificPopup=b,l.addGroup(c,b);return c};var C="inline",D,E,F,G=function(){F&&(E.after(F.addClass(D)).detach(),F=null)};a.magnificPopup.registerModule(C,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){l.types.push(C),v(b+"."+C,function(){G()})},getInline:function(b,c){G();if(b.src){var d=l.st.inline,e=a(b.src);return e.length?(e[0].parentNode!==null&&(E||(D=d.hiddenClass,E=w(D),D="mfp-"+D),F=e.after(E).detach().removeClass(D)),l.updateStatus("ready")):(l.updateStatus("error",d.tNotFound),e=a("<div>")),b.inlineElement=e,e}return l.updateStatus("ready"),l._parseMarkup(c,{},b),c}}});var H,I=function(b){if(b.data&&b.data.title!==undefined)return b.data.title;var c=l.st.image.titleSrc;if(c){if(a.isFunction(c))return c.call(l,b);if(b.el)return b.el.attr(c)||""}return""};a.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><div class="mfp-img"></div><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var a=l.st.image,c=".image";l.types.push("image"),v(e+c,function(){l.currItem.type==="image"&&a.cursor&&q.addClass(a.cursor)}),v(b+c,function(){a.cursor&&q.removeClass(a.cursor),p.off("resize"+h)}),v("Resize"+c,l.resizeImage),l.isLowIE&&v("AfterChange",l.resizeImage)},resizeImage:function(){var a=l.currItem;if(!a.img)return;if(l.st.image.verticalFit){var b=0;l.isLowIE&&(b=parseInt(a.img.css("padding-top"),10)+parseInt(a.img.css("padding-bottom"),10)),a.img.css("max-height",l.wH-b)}},_onImageHasSize:function(a){a.img&&(a.hasSize=!0,H&&clearInterval(H),a.isCheckingImgSize=!1,x("ImageHasSize",a),a.imgHidden&&(l.content&&l.content.removeClass("mfp-loading"),a.imgHidden=!1))},findImageSize:function(a){var b=0,c=a.img[0],d=function(e){H&&clearInterval(H),H=setInterval(function(){if(c.naturalWidth>0){l._onImageHasSize(a);return}b>200&&clearInterval(H),b++,b===3?d(10):b===40?d(50):b===100&&d(500)},e)};d(1)},getImage:function(b,c){var d=0,e=function(){b&&(b.img[0].complete?(b.img.off(".mfploader"),b===l.currItem&&(l._onImageHasSize(b),l.updateStatus("ready")),b.hasSize=!0,b.loaded=!0):(d++,d<200?setTimeout(e,100):f()))},f=function(){b&&(b.img.off(".mfploader"),b===l.currItem&&(l._onImageHasSize(b),l.updateStatus("error",g.tError.replace("%url%",b.src))),b.hasSize=!0,b.loaded=!0,b.loadError=!0)},g=l.st.image,h=c.find(".mfp-img");if(h.length){var i=new Image;i.className="mfp-img",b.img=a(i).on("load.mfploader",e).on("error.mfploader",f),i.src=b.src,h.is("img")&&(b.img=b.img.clone())}return l._parseMarkup(c,{title:I(b),img_replaceWith:b.img},b),l.resizeImage(),b.hasSize?(H&&clearInterval(H),b.loadError?(c.addClass("mfp-loading"),l.updateStatus("error",g.tError.replace("%url%",b.src))):(c.removeClass("mfp-loading"),l.updateStatus("ready")),c):(l.updateStatus("loading"),b.loading=!0,b.hasSize||(b.imgHidden=!0,c.addClass("mfp-loading"),l.findImageSize(b)),c)}}});var J="iframe",K="//about:blank",L=function(a){if(l.currTemplate[J]){var b=l.currTemplate[J].find("iframe");b.length&&(a||(b[0].src=K),l.isIE8&&b.css("display",a?"block":"none"))}};a.magnificPopup.registerModule(J,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){l.types.push(J),v("BeforeChange",function(a,b,c){b!==c&&(b===J?L():c===J&&L(!0))}),v(b+"."+J,function(){L()})},getIframe:function(b,c){var d=b.src,e=l.st.iframe;a.each(e.patterns,function(){if(d.indexOf(this.index)>-1)return this.id&&(typeof this.id=="string"?d=d.substr(d.lastIndexOf(this.id)+this.id.length,d.length):d=this.id.call(this,d)),d=this.src.replace("%id%",d),!1});var f={};return e.srcAction&&(f[e.srcAction]=d),l._parseMarkup(c,f,b),l.updateStatus("ready"),c}}}),function(){var b=1e3,c="ontouchstart"in window,d=function(){p.off("touchmove"+f+" touchend"+f)},e="mfpFastClick",f="."+e;a.fn.mfpFastClick=function(e){return a(this).each(function(){var g=a(this),h;if(c){var i,j,k,l,m,n;g.on("touchstart"+f,function(a){l=!1,n=1,m=a.originalEvent?a.originalEvent.touches[0]:a.touches[0],j=m.clientX,k=m.clientY,p.on("touchmove"+f,function(a){m=a.originalEvent?a.originalEvent.touches:a.touches,n=m.length,m=m[0];if(Math.abs(m.clientX-j)>10||Math.abs(m.clientY-k)>10)l=!0,d()}).on("touchend"+f,function(a){d();if(l||n>1)return;h=!0,a.preventDefault(),clearTimeout(i),i=setTimeout(function(){h=!1},b),e()})})}g.on("click"+f,function(){h||e()})})},a.fn.destroyMfpFastClick=function(){a(this).off("touchstart"+f+" click"+f),c&&p.off("touchmove"+f+" touchend"+f)}}()})(window.jQuery||window.Zepto)

$(document).ready(function() {


	$('.open-popup-link').magnificPopup({ // Popup
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});

});

// Notice

	(function($) {
		
			$.fn.wizardpanelnotice = function ( options ) {
				var defaults = {
				 dayshidden: 365 
				 
			},
			
			settings = $.extend({}, defaults, options);
			var obj = jQuery(this);
			
			var createCookie = function(name,value,days) {
			if (days) {
				var date = new Date();
				date.setTime(date.getTime()+(days*24*60*60*1000));
				var expires = "; expires="+date.toGMTString();
			}
				else var expires = "";
				document.cookie = name+"="+value+expires+"; path=/";
			}
		
			var readCookie = function (name) {
				var nameEQ = name + "=";
				var ca = document.cookie.split(';');
				for(var i=0;i < ca.length;i++) {
						var c = ca[i];
						while (c.charAt(0)==' ') c = c.substring(1,c.length);
						if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
				}
				return null;
			}
			
			var eraseCookie = function(name) {
				createCookie(name,"",-1);
			}
			
			if( readCookie("wizardpanelnotice") === "false") {
				$(obj.selector + " .highlightbox").css('display','none');
			}
			
			$.each($(obj.selector), function (x,y) {
				
				if( readCookie($(y).attr('id')) === "false") {
					$("#"+$(y).attr('id')).css('display','none');
				}
				
				$("#"+$(y).attr('id') + " .wizardpanel-closebutton").click(function () {
					$("#"+$(y).attr('id')).css('display','none');
					createCookie($(y).attr('id'), "false" , settings.dayshidden );
				});
				
			});
			
			return this;
			
		}}(jQuery));
		
		$('document').ready(function () {
			$(".wizardpanel-highlightbox").wizardpanelnotice({
				dayshidden: 30,
			});		
			
		});	