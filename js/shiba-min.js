function getSkuNameForElement(e){"use strict";return e.closest("[data-sku-name]").attr("data-sku-name")}function successMsg(text){"use strict";text&&0!==text.length&&noty({text:text,type:"success",timeout:2e3,animation:{open:"animated fadeInUp",close:"animated fadeOutUp"}})}function infoMsg(text){"use strict";text&&0!==text.length&&noty({text:text,timeout:2e3,animation:{open:"animated fadeInUp",close:"animated fadeOutUp"}})}function warningMsg(text){"use strict";text&&0!==text.length&&noty({type:"error",text:text,timeout:4e3,animation:{open:{height:"toggle"},close:{height:"toggle"},easing:"swing",speed:1e3}})}function toastSuccess(msg){var toast="";toast+='<div class="toast success">',toast+='<div class="right-wrapper">',toast+='   <span class="success-text">',toast+='      <img alt="Success" src="'+globalBasePath+'/images/icons/svg/check-blue.svg"/>',toast+=msg,toast+="   </span>",toast+=" </div>",showHideToast(toast+="</div>")}function toastError(msg){var toast="";toast+='<div class="toast error">',toast+='<div class="right-wrapper">',toast+='   <span class="error">',toast+='      <img alt="Error" src="'+globalBasePath+'/images/icons/svg/warning-black.svg"/>',toast+=msg,toast+="   </span>",toast+=" </div>",showHideToast(toast+="</div>")}function showHideToast(toastContent){$("body").append(toastContent),$(".toast").css({opacity:1,position:"fixed",transform:function(){return"translate(-50%, calc(3%))"}}),setTimeout(function(){$(".toast").removeAttr("style").css("opacity","0").remove()},7e3)}function logout(onSuccess){"use strict";var dataString="nocache="+(new Date).getTime();$.ajax({type:"POST",url:"/Logout",data:dataString,dataType:"json",success:function(data){Cookies.set("recentTotals",null,{sameSite:"strict",secure:!0}),Cookies.remove("hasPurchasedIBFlag"),Cookies.remove("emailSubscription"),Cookies.remove("favourites_tracking"),Cookies.remove("favourites-auto-open"),null!=onSuccess?onSuccess(data):window.location.href="/"},error:function(){warningMsg("Problem logging out."),window.location.href="/"}})}function iOSSpecific(){return!!navigator.platform&&/iPad|iPhone|iPod/.test(navigator.platform)}function filterBrand(){$(".brand-filter-link").click(function(){var group=$(this).attr("data-group");"all"==group?$(".brand-group").css("display","flex"):($(".brand-group").css("display","none"),$("#brand-group-"+group).css("display","flex"))})}function getlocalityByPostCode(postCode){return $.get("/CheckPostcode?postcode="+postCode)}function getAddressifySuggestions(address){return $.post("/s1/addresssuggestion",{address:address})}function localityList(postcode,contentDivId,localityName,currentDeliveryZoneId,func){"use strict";$.ajax({type:"POST",url:"/s1/localitylist",data:"postcode="+postcode+"&localityName="+localityName+"&currentDeliveryZoneId="+currentDeliveryZoneId,dataType:"html",success:function(data){$("#"+contentDivId).empty().html(data),null!=func&&func(data)},error:function(data){warningMsg("an error has occurred: "+data)}})}!function($){$(document).ready(function(){$.noty.defaults.layout="topCenter",$.noty.defaults.theme="relax",$.noty.defaults.type="warning",$.noty.defaults.animation.open="animated fadeInDown",$.noty.defaults.animation.close="animated fadeOutUp",$.noty.defaults.timeout=7e3})}(jQuery),String.prototype.capitalize=function(){return this.replace(/(?:^|\s)\S/g,function(a){return a.toUpperCase()})};var progressid=0;function getChecklistInformation(data){return $.get("/s1/checklistinformation",data)}function createChecklist(hasTier){var petType=$(".custom-brand-content, .custom-brand-ib").attr("data-pet");getChecklistInformation({petType:petType}).then(function(data){var checkListTemplate=Object.keys(data.map.checklist.map);$(".checklist-wrapper").empty(),$.each(checkListTemplate,function(index,objkey){$.each(data.map.checklist.map[objkey].myArrayList,function(index,isChecked){var displayName=isChecked.map,formattedUrl=displayName.urlTags.myArrayList.toString().trim().toLowerCase().replace(/,/g,"/").replace(/\s/g,"-"),isChecked=displayName.checked,displayName=displayName.displayName.replace(/and/g,"&");$(".checklist-wrapper").append('<li class="checklist-item '+(isChecked?"checked":"")+'"><a href="/'+formattedUrl+'"> '+displayName+" </a></li>")})}),hasTier?0<(checkListTemplate=$(".checklist-container")).length&&(checkListTemplate=checkListTemplate[0].outerHTML,0===$(".checklist-no-tier").length&&($(".tier-incentive-container, .product-item-container .checklist-container").hide(),$('<div class="checklist-no-tier">'+checkListTemplate+' <a href="/my-cart" class="proceed-to-checkout">Proceed to Checkout</a></div>').addClass("no-tier").insertAfter(".tier-incentive-container"))):isLoggedIn()&&($(".tier-incentive-container, .product-item-container .checklist-container").show(),$(".tier-incentive-container").siblings(".checklist-no-tier").remove()),$(".checklist-wrapper").find("li").each(function(e){var _this=$(this),link=_this.children("a");_this.on("click",function(e){e.preventDefault(),analytics.track("Checklist Clicked",{pet:petType,linkName:link.text().trim(),linkNumber:_this.index(),placement:"Product"},function(){try{localStorage.setItem("page",1)}catch(err){}window.location.pathname=link.attr("href")})})})})}function getTierInformation(param){$.ajax({type:"GET",url:"/s1/tierinformation",dataType:"html",success:function(data){var promotionBadge,currentTierDiscounts,petType=JSON.parse(data),tierInformation=petType.map.tierInformation,tierApplication=petType.map.tierInformation.tierApplication,isProductPage=-1<window.location.pathname.indexOf("/product"),buttons="/my-cart"===window.location.pathname,petType=$(".custom-brand-content, .custom-brand-ib").attr("data-pet"),petTypeLink="",petTypeName="",checkoutButtonContainer=$(".products-wrapper").find(".checkout-button-container");$(".tier-incentive-container").find(".button-container").remove(),tierApplication?progressid=tierApplication&&"SHIPPING"===tierApplication.nextTierName?0:tierApplication&&0===tierApplication.currentTierThreshold&&"SHIPPING"!==tierApplication.nextTierName?3:tierApplication&&tierApplication.nextTierId&&!tierApplication.currentTierId&&"SHIPPING"!==tierApplication.nextTierName?1:tierApplication&&tierApplication.nextTierId&&tierApplication.currentTierId?2:3:$(".tier-incentive-wrapper").remove(),tierApplication&&tierApplication.qualifyingSkus&&(promotionBadge='<span class="promo-applied-badge">Promo Applied</span>',isProductPage?$.each(tierApplication.qualifyingSkus,function(index,data){0===$("#atcPopup"+data+".product-item .items h4 .promo-applied-badge").length&&$(promotionBadge).insertAfter("#atcPopup"+data+".product-item .items h4 a")}):($.each(tierApplication.qualifyingSkus,function(index,promotionBadgeContainer){promotionBadgeContainer=$("#"+promotionBadgeContainer+".table-item-row .right-wrapper .details .auto-delivery .promotion-labels");0===promotionBadgeContainer.find(".promo-applied-badge").length&&promotionBadgeContainer.append(promotionBadge)}),0<$(".order-details .order-summary").length&&$.each(tierApplication.qualifyingSkus,function(index,data){0===$('.order-details .order-summary li[data-sku-name="'+data+'"] .group .details .badge-wrapper .promo-applied-badge').length&&$('.order-details .order-summary li[data-sku-name="'+data+'"] .group .details .badge-wrapper').append(promotionBadge)}))),petType&&(petTypeLink=petType.replace("_","-"),petTypeName=petType.replace("_"," ")),tierInformation&&tierInformation.amountToNextTier&&(isProductPage||buttons)?null!==tierInformation.amountToNextTier&&($(".tier-incentive-container").html(""),0===$(".tier-incentive-wrapper").length&&$(".tier-incentive-container").append('<div class="tier-incentive-wrapper"></div>'),isProductPage?(buttons="",$(".tier-incentive-wrapper").PCTieredIncentiveProgress({amountToNextTier:tierInformation.amountToNextTier,progressPercent:tierInformation.progressPercent,nextTierThreshold:tierApplication.nextTierThreshold,nextTierDiscounts:tierApplication.nextTierDiscounts,nextTierName:tierApplication.nextTierName,hasContinueBtn:!1,hasCheckoutBtn:!1,progressId:progressid,componentSelector:$(".tier-incentive-wrapper"),isAd:"true"===$(".tier-incentive-container").attr("data-isadg")}),buttons=$("<div/>",{class:"checkout-button-container",html:[addToCartPopButtons.shopAllPet(petTypeName,petTypeLink),addToCartPopButtons.shopPetDeals(petTypeName,petTypeLink),addToCartPopButtons.checkout()]}),1===checkoutButtonContainer.length&&checkoutButtonContainer.remove(),$(".tier-incentive-container, .products-wrapper").append(buttons)):$(".tier-incentive-wrapper").PCTieredIncentiveProgress({amountToNextTier:tierInformation.amountToNextTier,progressPercent:tierInformation.progressPercent,nextTierThreshold:tierApplication.nextTierThreshold,nextTierName:tierApplication.nextTierName,nextTierDiscounts:tierApplication.nextTierDiscounts,hasContinueBtn:!0,hasCheckoutBtn:!1,progressId:progressid,componentSelector:$(".tier-incentive-wrapper")})):tierApplication&&(currentTierDiscounts=tierApplication.currentTierDiscounts,$(".tier-incentive-container").html(""),currentTierDiscounts&&$.each(currentTierDiscounts,function(buttons,data){var percentOff=100*data.discountPercentage;isProductPage?buttons==currentTierDiscounts.length-1?(buttons="",$(".tier-incentive-container").PCTieredEndState({categoryTag:data.categoryTag,percentOff:percentOff,discountMaximum:data.discountMaximum,hasCheckoutBtn:!1,hasSeeOfferBtn:!1,isAd:"true"===$(".tier-incentive-container").attr("data-isadg")}),buttons=$("<div/>",{class:"checkout-button-container",html:[addToCartPopButtons.shopAllPet(petTypeName,petTypeLink),addToCartPopButtons.shopPetCategory(data.categoryTag),addToCartPopButtons.checkout()]}),1===checkoutButtonContainer.length&&checkoutButtonContainer.remove(),$(".tier-incentive-container, .products-wrapper").append(buttons)):$(".tier-incentive-container").PCTieredEndState({categoryTag:data.categoryTag,percentOff:percentOff,discountMaximum:data.discountMaximum,hasCheckoutBtn:!1,hasSeeOfferBtn:!1}):$(".tier-incentive-container").PCTieredEndState({categoryTag:data.categoryTag,percentOff:percentOff,discountMaximum:data.discountMaximum,hasContinueBtn:!1,hasSeeOfferBtn:!1})})),createChecklist(tierApplication&&0<=tierApplication.currentTierThreshold&&!tierInformation.amountToNextTier&&!tierApplication.currentTierDiscounts),"function"==typeof param&&param(data)},error:function(data){warningMsg("an error has occurred: "+data)}})}function determineDeviceType(){"use strict";var current_width=$(window).width();return current_width<415?"m":current_width<769?"tl":current_width<1024?"t":"d"}function smoothScrollTo(element,speed,cb){"use strict";$("html, body").animate({scrollTop:$(element).offset().top-30},speed,function(){"function"==typeof cb&&cb()})}function getCurrentUri(){"use strict";var url=window.location.href,toReturn=window.location.host,toReturn=url.substring(url.indexOf(toReturn)+toReturn.length-1);return 0<toReturn.indexOf("/")?0<(toReturn=toReturn.substring(toReturn.indexOf("/"))).indexOf("?")?toReturn.substring(0,toReturn.indexOf("?")):toReturn:"/"}function getUriParams(){"use strict";var paramMap={};return location.search&&$.each(location.search.substr(1).split("&"),function(index,key){var value=key.split("="),key=value[0],value=decodeURIComponent(value[1]);key in paramMap?paramMap[key].push(value):paramMap[key]=[value]}),paramMap}function addRecommendationReferral(destinationProduct,recommendationName){sessionStorage.recommendationReferrals=sessionStorage.recommendationReferrals||"{}";var recommendationReferrals=JSON.parse(sessionStorage.recommendationReferrals);recommendationReferrals[destinationProduct]=recommendationName,sessionStorage.recommendationReferrals=JSON.stringify(recommendationReferrals)}function getAddtocartrecommendation(sku){return sku?$.ajax({type:"GET",url:"/s1/addtocartrecommendation",data:{skuName:sku},dataType:"html"}):$.get("/s1/addtocartrecommendation")}function escapeCssSelector(str){"use strict";return str&&str.replace(/([ #;?%&,.+*~\':"!^$[\]()=>|\/@])/g,"\\$1")}function accountMobileCreateNavigation(params){$(params.arrow).appendTo(params.tabActiveItem),$(params.tabs).appendTo(params.tabActiveItem),$(params.tabs).wrapAll("<ul/>")}function accountMobileNavigationToggleArrow(arrow){arrow.stop().toggleClass("open")}function accountMobileNavigationToggleContent(target){$(target).siblings("ul").stop().slideToggle("slow")}function handleTabActiveItemClick(params){params.event.preventDefault(),accountMobileNavigationToggleContent(params.target),accountMobileNavigationToggleArrow(params.arrow)}function mobileAccountPageNav(){var tabActiveItem=$(".tab-strip.mobile"),tabs=tabActiveItem.find("li:not(.ui-state-active)"),tabActiveItem=tabActiveItem.find(".ui-state-active"),arrow=$('<span class="arrow"/>');accountMobileCreateNavigation({arrow:arrow,tabs:tabs,tabActiveItem:tabActiveItem}),$(".tab-strip.mobile li > a").eq(0).on("click",function(event){handleTabActiveItemClick({event:event,arrow:arrow,target:this})}),arrow.on("click",function(event){handleTabActiveItemClick({event:event,arrow:arrow,target:this})})}function trackFooter(){$("footer .site-map a").each(function(){var link=$(this);analytics.trackLink(link,"footer_click ",{section:"Site Map",name:link.text()})}),$("footer .social-wrapper a").each(function(){var link=$(this);analytics.trackLink(link,"footer_click ",{section:"Social Media",name:link.find("i").attr("class")})})}function trackPopularProducts(){$(".featured-items li a").each(function(){$(this).closest("li").attr("data-recommendation-type")&&analytics.trackLink($(this),"CrossSell Clicked",{recommendationType:$(this).closest("li").attr("data-recommendation-type"),recommendationName:$(this).closest("li").attr("data-recommendation-name"),sku:$(this).closest("li").attr("data-sku-name")})})}function trackDropdownBannerClick(){$(".featured-products a").each(function(){analytics.trackLink($(this),"Banner Clicked",{bannerName:$(this).attr("banner-name"),bannerLink:$(this).attr("href")})})}function getSearchTerm(){return{searchTerm:$("#sli_search_1").val()}}function staticPagesContent(){var pageTitle,pageContent,loadContent;"static"===$("#container").data("page-type")&&(pageTitle=window.location.href.substr(window.location.href.lastIndexOf("/")+1),pageContent=$(".page-content"),loadContent=function(pageLocation,jSonArr){$.ajax({type:"GET",url:globalBasePath+"/content/static-pages-policy/"+pageLocation,dataType:"html",success:function(responseElem){if(void 0!==jSonArr)for(var section=$(responseElem).filter("section"),pageLocalContent=$(".page-tools"),i=0;i<jSonArr.length;i++)$(section.add(pageLocalContent)).each(function(){$(this).data("attrib")===jSonArr[i]&&$(this).appendTo(pageContent)});else $(pageContent).load(this.url,function(){"/faq"===window.location.pathname&&$("#faqs").length&&($("#faqs dd").hide(),$("#faqs dt").click(function(){$(this).next("#faqs dd").slideToggle(500).toggleClass("expanded")}))})},error:function(){console.log("error parsing html location")}})},$.ajax({type:"GET",url:globalBasePath+"/content/static-pages-content.json",dataType:"json",success:function(page){for(var pageArr,matchString=pageTitle.split("?"),i=0;i<page.length;i++)page[i].page===matchString[0]&&0<page[i].arrangement.length?(pageArr=page[i].arrangement,loadContent(page[i].location,pageArr)):page[i].page===matchString[0]&&page[i].arrangement.length<=0&&loadContent(page[i].location,pageArr=void 0)},error:function(){console.log("problem json connection")}}))}function checkIfMobile(){return!!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)}function quickAddToCart(cb,cbAddToCart){$(".quick-add-to-cart").unbind(),AUTO_DELIVERY.adHeaderId=-1,$(document).on("click",".quick-add-to-cart",function(e){e.preventDefault();var _this=$(this);productAddToCart(_this.attr("data-sku"),1,1,function(){PCCart.refreshCartTotals(),_this.addClass("added").attr("disabled",!0).removeAttr("data-material-before"),_this[0].innerHTML='Added to Cart <span style="vertical-align:middle" class="material-icons">check_circle</span>',"function"==typeof cbAddToCart&&cbAddToCart(_this)})})}function getProductInformation(sku){return $.ajax({url:"/s1/productdatawithsku",method:"POST",data:{skuName:sku},context:document})}function addressSave(data){return $.ajax({type:"POST",url:"/s1/addresssave",data:data,dataType:"json"})}function profileContactSave(data){return $.ajax({type:"POST",url:"/s1/profilecontactsave",data:data,dataType:"json"})}function getProductInformationSku(sku,displayButton){return $.ajax({url:"/s1/productdata",method:"POST",data:{skuName:sku,displayButton:displayButton},context:document})}function requestPaginationInNavigation(data){return $.ajax({type:"GET",url:"/s1/paginationinnavigationpage",traditional:!0,data:data,dataType:"html"})}function requestProductInNavigation(data){return $.ajax({type:"GET",url:"/s1/productinnavigationpage",traditional:!0,data:data,dataType:"html"})}function requestRefreshSidebar(data){return $.ajax({type:"POST",url:"/s1/refreshsidebar",traditional:!0,data:data,dataType:"html"})}function productAddToCart(sku,freq,qty,callback){sku&&freq&&qty?$.ajax({type:"POST",url:"/s1/addtocart",data:{sku:sku,freq:freq,qty:qty},dataType:"json",success:function(data){"function"==typeof callback&&callback(data)}}):console.error("productAddToCart shiba.js","SKU, FREQ, QTY IS REQUIRED")}function setSearchFilter(data,callback){Cookies.set("searchFilter",data,{expires:1,sameSite:"strict",secure:!0}),"function"==typeof callback&&callback()}function displayActiveFilter(){$("#filterUl .section").not(".filter-badge").each(function(){var content,parent,sectionFilter=$(this);0<sectionFilter.children("ul").find("input:checked").length?(content=[],parent=this,"star-rating-filter"===sectionFilter.children("ul").find("input:checked").siblings("label").attr("data-filter-type")?(sectionFilter.children("ul").find("input:checked").siblings('label[data-filter-type="star-rating-filter"]').each(function(){var intCode=$(this).attr("data-int-code");content.push(intCode+(1<intCode?" stars":" star")),$(parent).find(".sub-title").text("")}),$(parent).find(".sub-title").text(content)):(sectionFilter.children("ul").find("input:checked").siblings("label").each(function(){var self=$(this);content.push(self[0].childNodes[0].nodeValue.trim())}),sectionFilter.find(".sub-title").text(content.toString().replace(",",", ")))):sectionFilter.find(".sub-title").text("No "+$(this).find("h4").text().trim().toLowerCase()+" selected")})}function trackLearnMoreAboutAd(){$(".tool-tip-content a").on("click",function(e){e.preventDefault();var self=$(this);analytics.track("LearnMoreAboutAD Click",{},function(){window.location.pathname=self.attr("href")})})}function createHeaderMessage(){$.get("/s1/getwebsiteheader",function(desktopHeader,mobileFilter){var deliveryOptions;desktopHeader.map&&desktopHeader.map.webSiteHeader&&"success"===mobileFilter&&(mobileFilter=(deliveryOptions=desktopHeader.map.webSiteHeader).message,desktopHeader.map.result,desktopHeader=deliveryOptions.linkUri,deliveryOptions=$('<div class="delivery-options"><div class="delivery-message">'+('<h5><a class="generalShippingsec" href="'+desktopHeader+'">'+mobileFilter+"</a></h5>")+"</div></div>"),desktopHeader=$(".desktop-header"),mobileFilter=$(".mobile-sort-filter"),desktopHeader.prepend(deliveryOptions),deliveryOptions.clone().insertBefore(mobileFilter))})}function setRegisterSuccessRedirectUrl(){var currentPath=document.referrer.replace(window.location.origin,"");["/resetpassword","/register","/sign-in","/register/success","/pet-details",""].indexOf(currentPath)<0&&Cookies.set("registerSuccessRedirectUrl",currentPath,{expires:1})}function getRegisterSuccessRedirectUrl(){return""!==Cookies.get("registerSuccessRedirectUrl")?Cookies.get("registerSuccessRedirectUrl"):"/"}function checkForAutoAddCoupon(){var searchParams=new URLSearchParams(window.location.search);searchParams.has("couponCode")&&PCCustomer.addVoucher(searchParams.get("couponCode"),handleAutoAddCouponResponse)}function handleAutoAddCouponResponse(data){"okay"===data.status&&displayCouponAddedMessage(new URLSearchParams(window.location.search).get("couponCode"))}function displayCouponAddedMessage(couponCode){toastSuccess("Your coupon code "+couponCode+" has been added to your cart.")}function formToJson(array){var array=array.serializeArray(),json={};return $.each(array,function(){json[this.name]=this.value||""}),json}function isLoggedIn(){var recentTotals=Cookies.getJSON("recentTotals");return!(recentTotals&&!recentTotals.signedIn)}function escapeHtml(text){return text&&$("<div/>").text(text).html()}function trackCartPayBtn(tableName,buttonName){analytics.track(tableName,{action:buttonName})}function isInViewport(elementBottom){var viewportTop=$(elementBottom),viewportBottom=$(window);if(viewportTop.length){var elementTop=viewportTop.offset().top+viewportTop.height()/2,elementBottom=elementTop+viewportTop.outerHeight(),viewportTop=viewportBottom.scrollTop(),viewportBottom=viewportTop+viewportBottom.height();return viewportTop<elementBottom&&elementTop<viewportBottom}}function trackViews(eventName,metaname){analytics.track(eventName,{recommendationType:metaname})}function trackViewability(element,name,parentBasis,eventName){var trackView=$(element),eventTracked=!1;(parentBasis?$(parentBasis):$(window)).on("scroll resize load",function(e){e.preventDefault(),isInViewport(trackView)&&!eventTracked&&(trackViews(eventName,name),eventTracked=!0)})}function addOverlay(){var cover=$(document).height(),cover=$("<div>",{class:"cover"}).css({height:cover,display:"block"});$(".cover").remove(),$(cover).html('<div class="loader" id="overlay-loader"><span class="a"></span><span class="b spin"><span class="c"></span></span></div>'),$(cover).appendTo("body")}$("footer .partners li a").on("click touchstart",function(url){url.preventDefault(),url.stopImmediatePropagation();url=$(this).attr("href");window.open(url)}),String.prototype.readMore=function(text_clone){var numberOfWords=text_clone,text_clone=this.split(" ");return text_clone.splice(numberOfWords,0,'<span class="dot">.</span>'),text_clone.splice(numberOfWords+1,0,'<span class="hidden hidden-text">'),text_clone.splice(text_clone.length,0,'</span><a class="read-more">Read more...</a>'),text_clone.join(" ")},$(".whats-on-the-box .add-cart").each(function(){$(this).on("click",function(){var sku=$(this).attr("data-sku"),self=this,styles={"pointer-events":"none","background-color":"#ccc"};productAddToCart(sku,1,1,function(){PCCart.refreshCartTotals(),$(self).css(styles),$(self)[$(self).index()].innerHTML='<span style="vertical-align:middle" class="material-icons">check</span> Added to Cart'})})}),$("#subscribeForNews").submit(function(e){e.preventDefault(),$("#subscribeForNews button").addClass("disabled");var a=$("#subscribeForNews").serializeArray();$("#subscribeForNews").validate({rules:{name:"required",email:{required:!0,email:!0}},submitHandler:function(form){PCCustomer.subscribeEmail(a[0].value,function(data){$("#subscribeForNews button").removeClass("disabled")})},invalidHandler:function(event,validator){},errorPlacement:function(error,element){error.prependTo($("#subscribeForNews"))}})}),function(){var searchData=Cookies.get("searchFilter"),searchFields=$("#header #search-form .ui-autocomplete-input");0<=window.location.pathname.search("search")?searchFields.val(searchData):searchFields.val("").attr("placeholder",searchFields.data("placeholder")),searchData&&""!==searchData||searchFields.attr("placeholder",searchFields.data("placeholder"))}(),$("#header #search-form .ui-autocomplete-input").focus(function(){$(this).val()||$(this).attr("placeholder","")}),$("#header #search-form .ui-autocomplete-input").focusout(function(){$(this).val()||$(this).attr("placeholder",$(this).data("placeholder"))}),$("#header #search-form #searchForm").submit(function(){var term=$("#header #search-form .ui-autocomplete-input").val(),_product_texts=[],_suggested_texts=[];$(".sli_ac_products .sli_information_wrapper").find("h3").each(function(){_product_texts.push($(this).text().trim())}),$(".sli_ac_suggestions .sli_ac_suggestion").each(function(){_suggested_texts.push($(this).text().trim())}),setSearchFilter(term),analytics.track("Search Submitted",{searchTerm:term,selected:"",section:"search-bar",action:"submit",suggested_texts:_suggested_texts,suggested_products:_product_texts,position:0})}),$(".mobile-sort-filter .filter").on("click",function(e){e.preventDefault();var sideBar=$("#sidebar"),headerFilter=sideBar.find(".header-filter");sideBar.addClass("is-open-mobile").find("#filterUl").removeClass("collapse"),sideBar.find(".header-filter h4").text("Filter by"),$("#header").siblings("#content").css("z-index","99992");var iOS=iOSSpecific(),filterForm=$("#navFilters #sidebar form");iOS&&($(".show-results").css("left",0),filterForm.css({"-webkit-transform":"translateZ(0)","-o-transform":"translateZ(0)",transform:"translateZ(0)"}));var position,currentScrollTop;sideBar.scroll(function(){iOS&&filterForm.css({"-webkit-transform":"unset","-o-transform":"unset",transform:"unset"});var scroll=sideBar.scrollTop(),defaultHeight=headerFilter.height();position<(currentScrollTop=scroll)&&defaultHeight+defaultHeight<scroll?headerFilter.addClass("scrollUp"):currentScrollTop<position&&!(scroll<=defaultHeight)&&headerFilter.removeClass("scrollUp"),position=currentScrollTop})}),$(document).ready(function(){"use strict";megaNavInit(),createHeaderMessage(),$("#searchForm").on("submit",function(event){if(event.stopImmediatePropagation(),""===$(this).find("input").val().trim())return!1;try{localStorage.setItem("page","1"),localStorage.removeItem("lastfilters"),localStorage.removeItem("priceRange")}catch(err){}}),setRegisterSuccessRedirectUrl(),"/register/success"===window.location.pathname&&$(".register-success .button-wrapper a").eq(1).attr("href",getRegisterSuccessRedirectUrl());var promoApplied=$(".promo-code-applied");if((promoApplied&&promoApplied.length||-1!==window.location.pathname.indexOf("/invite"))&&Cookies.set("sessionCoupon",!0,{expires:1/48}),""!==localStorage.getItem("showToast")&&null!==localStorage.getItem("showToast")&&(toastSuccess(localStorage.getItem("showToast")),localStorage.removeItem("showToast")),-1===window.location.pathname.indexOf("/product")&&localStorage.getItem("lastUrl")&&-1===localStorage.getItem("lastUrl").indexOf("/product"))try{localStorage.removeItem("priceRange"),localStorage.removeItem("lastfilters"),localStorage.removeItem("page"),localStorage.removeItem("priceFilterMoved")}catch(err){}try{localStorage.setItem("lastUrl",window.location.pathname)}catch(err){}(0<$(".breadcrumbs").find('span:contains("Search")').length||0<=window.location.pathname.search("previouslypurchased"))&&0<$("#content.ui-navigation").length&&$("#main-navigation ul li .mega-nav").find("a").each(function(){this.addEventListener("click",function(e){try{localStorage.setItem("page",1),localStorage.removeItem("priceRange")}catch(err){}})}),$.extend({redirectPost:function(location,args){var form=$("<form></form>");form.attr("method","post"),form.attr("action",location),$.each(args,function(key,value){var field=$("<input></input>");field.attr("type","hidden"),field.attr("name",key),field.attr("value",value),form.append(field)}),$(form).appendTo("body").submit()}}),$(document).on("click",".tool-tip-container .tool-tip-trigger",function(){var self=$(this),aboutspan=self.children("span");aboutspan.stop().toggleClass("active"),self.siblings(".tool-tip-content").stop().slideToggle(),analytics.track("AutoDeliveryDescription Click",{isOpen:aboutspan.hasClass("active")})}),$(window).on("load",function(){var userStatus;$("#footer img").each(function(e){var self=$(this);self.data("src")!==self.attr("src")&&self.attr("src",self.data("src"))}),"/discover/specials"===window.location.pathname&&$(".article-links .panel").each(function(index,data){var self=$(this),_redirectLink=self.find("a").attr("href"),_tile="specials-tile-"+(parseInt(index)+1);self.on("click",function(e){e.preventDefault(),analytics.track("SpecialsPage Click",{section:_tile,url:_redirectLink},null,function(){window.location.pathname=_redirectLink})})}),-1<window.location.href.indexOf("#profile-payment")&&analytics.track("AccountProfile",{section:"#profile-payment-view"}),$(window).width()<768&&(userStatus=$("#main-navigation ul.group").find("li.account-menu .sign-out-links"),$(userStatus).hasClass("hide")?$(userStatus).parent("li.account-menu").addClass("signed-out"):$(userStatus).parent("li.account-menu").removeClass("signed-out")),0<$(".hero-banner.hero-slider .flexslider").length&&$(".hero-banner.hero-slider .flexslider").flexslider({animation:"fade",controlNav:!1})}),$(document).on("click",".popup-modal-dismiss",function(e){e.preventDefault(),$.magnificPopup.close()}),$(".mobile-sort-filter #sortSelector").on("change",function(){var currentOption=$(">option:selected",this);$("span.sort-span").text(currentOption.data("name"))}),$(document).on("click",".read-more",function(){var _this=$(this);_this.siblings(".dot").toggleClass("hidden"),_this.siblings(".hidden-text").toggleClass("hidden"),_this.text("Read more..."===_this.text()?"Read less":"Read more...")}),mobileAccountPageNav(),staticPagesContent(),$("#content").css("opacity","1"),$(document).on("click",".sign-out",function(){logout()}),960<window.innerWidth&&0<$(".collection-id-christmas .flexslider").length&&$(".collection-id-christmas .flexslider").flexslider({animation:"slide",itemWidth:145,minItems:2,maxItems:5,itemMargin:18,slideshow:!1,animationLoop:!1}),$("#subscribeForm").validate({rules:{subscribeEmail:{email:!0,backendValidateEmail:!0,required:!0}},submitHandler:function(form){$("#subscribeSubmit").attr("disabled","").addClass("disabled subscribing");var email=$("#subscribeEmail").val();PCAuth.recaptcha(null,"Subscription",{email:email},function(){PCCustomer.subscribeEmail(email,function(data){"fail"===data.status?($(form).validate().showErrors({subscribeEmail:data.msg}),$("#subscribeSubmit").removeAttr("disabled").removeClass("disabled subscribing")):(analytics.track("SubscribeFooter Success",{}),$("#hiddenSubscribeForm #hiddenEmail").val(email),$("#hiddenSubscribeForm").submit())})},function(data){warningMsg(data.msg)})}}),$(".mega-nav .links ul li").on("click",function(){try{localStorage.setItem("page",1),localStorage.removeItem("priceRange")}catch(err){}}),$("#container").on("click",".with-caption",function(href){href.preventDefault();var title=$(this).attr("title"),href=$(this).attr("href");$.magnificPopup.open({items:{src:href},type:"image",closeOnContentClick:!0,closeBtnInside:!1,mainClass:"mfp-with-zoom mfp-img-mobile",image:{titleSrc:function(){return title},verticalFit:!0}})}),$(document).on("mouseover","svg.tool-tip-icon",function(){$(this).siblings(".tool-tip-container").stop(!0,!0).fadeIn(200)}).on("mouseleave","svg.tool-tip-icon",function(e){$(this).siblings(".tool-tip-container").stop(!0,!0).fadeOut(500)}),trackFooter(),trackPopularProducts(),trackDropdownBannerClick(),checkForAutoAddCoupon()}),$(document).on("DOMNodeInserted",function(e){$(e.target).hasClass("paypal-checkout-sandbox")&&trackCartPayBtn("Pay Button Clicked","PayPal Checkout")}),$(document).on("click",".auto-delivery-how-to-pop-up",function(_imgSrc){_imgSrc.preventDefault();_imgSrc=$(this).find("img").attr("src");$.magnificPopup.open({items:{src:_imgSrc},type:"image"})});