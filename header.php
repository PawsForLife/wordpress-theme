<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pet_Circle
 */

?>
<!DOCTYPE html>
<html>
<head>
	
	


	
	
		
			
				<title>Discover | Pet Circle</title>
			
			
		
	

<meta name="robots" content='index,follow' />
<meta name="feeding-guidelines" content=''>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />

<meta name="msapplication-config" content="none" />
<meta property="basePath" content="https://www.petcircle.com.au/petcircle-assets" />
<meta name="gtm-container" content='GTM-KTBCBV'>
<meta name="recaptchaToken" content="6LfZ1sMZAAAAAIn7oEnZ57Qbbc8taKRqGLVcugGR" />




<!-- <script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQ8GVFRUDRACVVRVAggHUlc=",licenseKey:"bd514727ac",applicationID:"215759043"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(29),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{p?p-=1:o(c||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,s.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:s.now();i("err",[t,n])}var i=t("handle"),a=t(30),c=t("ee"),s=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError";if(!s.disabled){var p=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),s.xhrWrappable&&t(14),d=!0)}c.on("fn-start",function(t,e,n){d&&(p+=1)}),c.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,o(n))}),c.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),c.on("internal-error",function(t){i("ierr",[t,s.now(),!0])})}},{}],3:[function(t,e,n){var r=t("loader");r.disabled||(r.features.ins=!0)},{}],4:[function(t,e,n){function r(){L++,T=g.hash,this[u]=y.now()}function o(){L--,g.hash!==T&&i(0,!0);var t=y.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+g,e])}function a(t,e){t.on(e,function(){this[e]=y.now()})}var c="-start",s="-end",f="-body",u="fn"+c,d="fn"+s,l="cb"+c,p="cb"+s,h="jsTime",m="fetch",v="addEventListener",w=window,g=w.location,y=t("loader");if(w[v]&&y.xhrWrappable&&!y.disabled){var x=t(10),b=t(11),E=t(8),R=t(6),O=t(13),N=t(7),M=t(14),P=t(9),C=t("ee"),S=C.get("tracer");t(16),y.features.spa=!0;var T,L=0;C.on(u,r),b.on(l,r),P.on(l,r),C.on(d,o),b.on(p,o),P.on(p,o),C.buffer([u,d,"xhr-done","xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+s,"clearTimeout"+c,u]),M.buffer([u,"new-xhr","send-xhr"+c]),N.buffer([m+c,m+"-done",m+f+c,m+f+s]),E.buffer(["newURL"]),x.buffer([u]),b.buffer(["propagate",l,p,"executor-err","resolve"+c]),S.buffer([u,"no-"+u]),P.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(M,"send-xhr"+c),a(C,"xhr-resolved"),a(C,"xhr-done"),a(N,m+c),a(N,m+"-done"),a(P,"new-jsonp"),a(P,"jsonp-end"),a(P,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,L>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),c=t(12),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,v="fn"+h,w="bstTimer",g="pushState",y=t("loader");if(!y.disabled){y.features.stn=!0,t(8),"addEventListener"in window&&t(6);var x=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),o.on(v,function(t,e){var n=t[0];n instanceof x&&i("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),o.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),o.on(g+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=i(arguments),e={};o.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return o.emit(n+"start",[t,a],c),c.then(function(t){return o.emit(n+"end",[null,t],c),t},function(t){throw o.emit(n+"end",[t],c),t})})}var o=t("ee").get("fetch"),i=t(30),a=t(29);e.exports=o;var c=window,s="fetch-",f=s+"body-",u=["arrayBuffer","blob","json","text","formData"],d=c.Request,l=c.Response,p=c.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,e){r(d[h],e,f),r(l[h],e,f)}),r(c,"fetch",s),o.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(s+"done",[null,e],n)}else o.emit(s+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t("wrap-function")(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){s.emit("jsonp-end",[],l),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){s.emit("jsonp-error",[],l),s.emit("jsonp-end",[],l),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=c(a),d="function"==typeof u.parent[u.key];if(d){var l={};f.inPlace(u.parent,[u.key],"cb-",l),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),s.emit("new-jsonp",[t.src],l)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(l),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function c(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var s=t("ee").get("jsonp"),f=t("wrap-function")(s);if(e.exports=s,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,l=/^(\w+)(\.|$)(.*)$/,p=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?f.inPlace(Node.prototype,p,"dom-"):(f.inPlace(HTMLElement.prototype,p,"dom-"),f.inPlace(HTMLHeadElement.prototype,p,"dom-"),f.inPlace(HTMLBodyElement.prototype,p,"dom-")),s.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t("wrap-function")(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=i.context(),n=c(t,"executor-",e,null,!1),r=new f(n);return i.context(r).getCtx=function(){return e},r}var o=t("wrap-function"),i=t("ee").get("promise"),a=t("ee").getOrSetContext,c=o(i),s=t(29),f=NREUM.o.PR;e.exports=i,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){i.emit("propagate",[null,!o],a,!1,!1),o=o||!t}}var o=!1;s(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var a=e.apply(f,arguments),c=f.resolve(a);return c}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&i.emit("propagate",[t,!0],n,!1,!1),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),s(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),o.wrapInPlace(f.prototype,"then",function(t){return function(){var e=this,n=o.argsToArray.apply(this,arguments),r=a(e);r.promise=e,n[0]=c(n[0],"cb-",r,null,!1),n[1]=c(n[1],"cb-",r,null,!1);var s=t.apply(this,n);return r.nextPromise=s,i.emit("propagate",[e,!0],s,!1,!1),s}}),i.on("executor-start",function(t){t[0]=c(t[0],"resolve-",this,null,!1),t[1]=c(t[1],"resolve-",this,null,!1)}),i.on("executor-err",function(t,e,n){t[1](n)}),i.on("cb-end",function(t,e,n){i.emit("propagate",[n,!0],this.nextPromise,!1,!1)}),i.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=i.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t("wrap-function")(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function i(t){y.push(t),h&&(b?b.then(a):v?v(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,v=l.SI,w="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=p.generateSpanId(),m=p.generateTraceId(),v=Date.now(),w={spanId:h,traceId:m,timestamp:v};return(t.sameOrigin||s(t)&&l())&&(w.traceContextParentHeader=o(h,m),w.traceContextStateHeader=i(h,v,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&s(t)&&d())&&(w.newrelicHeader=a(h,m,v,n,r,f)),w}function o(t,e){return"00-"+e+"-"+t+"-01"}function i(t,e,n,r,o){var i=0,a="",c=1,s="",f="";return o+"@nr="+i+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+f+"-"+e}function a(t,e,n,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:e,ti:n}};return i&&r!==i&&(c.d.tk=i),btoa(JSON.stringify(c))}function c(t){return f()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var o=h(n.allowed_origins[r]);if(t.hostname===o.hostname&&t.protocol===o.protocol&&t.port===o.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function l(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var p=t(26),h=t(17);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):i(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function o(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function i(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable&&!a.disabled){var c=t("handle"),s=t(17),f=t(15).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(22),m=t(21),v=t(18),w=window.XMLHttpRequest;a.features.xhr=!0,t(14),t(7),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,e.params=this.params||{},e.metrics=this.metrics||{},t.addEventListener("load",function(n){i(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=m(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<l;c++)e.addEventListener(d[c],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof w&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var o=f(this.parsedOrigin);if(o&&(o.newrelicHeader||o.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),e(i.headers,o)&&(this.dt=o),t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&e(t[0].headers,o)&&(this.dt=o)})}},{}],17:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,o={};e.href=t,o.port=e.port;var i=e.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=e.hostname||n.hostname,o.pathname=e.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return o.sameOrigin=a&&(!e.hostname||c),"/"===o.pathname&&(r[t]=o),o}},{}],18:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?o(t.response):"text"===n||""===n||void 0===n?o(t.responseText):void 0}var o=t(21);e.exports=r},{}],19:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(29),c=t(30),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,e){u[e]=o(l+e,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(p+"tracer",[f.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(p+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],20:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],21:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],22:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],23:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-a}function o(){return i}var i=(new Date).getTime(),a=i,c=t(31);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=o},{}],24:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],25:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function o(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function i(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!v){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),v=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[l.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,f,u,d=t("handle"),l=t("loader"),p=t(28),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(o);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(i);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var v=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(t){document.addEventListener(t,a,!1)})}p(c)}},{}],26:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<i.length;c++)o=i[c],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){return a(16)}function i(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,o=window.crypto||window.msCrypto;o&&o.getRandomValues&&Uint8Array&&(n=o.getRandomValues(new Uint8Array(31)));for(var i=[],a=0;a<t;a++)i.push(e().toString(16));return i.join("")}e.exports={generateUuid:r,generateSpanId:o,generateTraceId:i}},{}],27:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(o="Safari",i=s[1])}e.exports={agent:o,version:i,match:r}},{}],28:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[o]?"hidden":"visible")}"addEventListener"in document&&i&&document.addEventListener(i,e,!1)}e.exports=r;var o,i,a;"undefined"!=typeof document.hidden?(o="hidden",i="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",i="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",i="webkitvisibilitychange",a="webkitVisibilityState")},{}],29:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],30:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],31:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?f(t,s,a):a()}function n(n,r,o,i,a){if(a!==!1&&(a=!0),!p.aborted||i){t&&a&&t(n,r,o);for(var c=e(o),s=m(n),f=s.length,u=0;u<f;u++)s[u].apply(c,r);var l=d[y[n]];return l&&l.push([x,n,r,c]),c}}function i(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return l[t]=l[t]||o(n)}function w(t,e){p.aborted||u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:i,addEventListener:i,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:c,aborted:!1};return x}function i(t){return f(t,s,a)}function a(){return new r}function c(){(d.api||d.feature)&&(p.aborted=!0,d=p.backlog={})}var s="nr@context",f=t("gos"),u=t(29),d={},l={},p=e.exports=o();e.exports.getOrSetContext=i,p.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!N++){var t=O.info=NREUM.info,e=m.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(E,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+O.offset],null,"api"),c("timing",["load",n]);var r=m.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=p+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function o(){"complete"===m.readyState&&i()}function i(){c("mark",["domContent",a()+O.offset],null,"api")}var a=t(23),c=t("handle"),s=t(29),f=t("ee"),u=t(27),d=t(24),l=t(20),p=l.getConfiguration("ssl")===!1?"http":"https",h=window,m=h.document,v="addEventListener",w="attachEvent",g=h.XMLHttpRequest,y=g&&g.prototype,x=!d(h.location);NREUM.o={ST:setTimeout,SI:h.setImmediate,CT:clearTimeout,XHR:g,REQ:h.Request,EV:h.Event,PR:h.Promise,MO:h.MutationObserver};var b=""+location,E={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1209.min.js"},R=g&&y&&y[v]&&!/CriOS/.test(navigator.userAgent),O=e.exports={offset:a.getLastTimestamp(),now:a,origin:b,features:{},xhrWrappable:R,userAgent:u,disabled:x};if(!x){t(19),t(25),m[v]?(m[v]("DOMContentLoaded",i,!1),h[v]("load",r,!1)):(m[w]("onreadystatechange",o),h[w]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var N=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,s,f){function nrWrapper(){var i,a,u,l;try{a=this,i=d(arguments),u="function"==typeof r?r(i,a):r||{}}catch(p){o([p,"",[i,a,s],u],t)}c(n+"start",[i,a,s],u,f);try{return l=e.apply(a,i)}catch(h){throw c(n+"err",[i,a,h],u,f),h}finally{c(n+"end",[i,a,l],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[l]=e,i(e,nrWrapper,t),nrWrapper)}function r(t,e,r,o,i){r||(r="");var c,s,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)s=e[f],c=t[s],a(c)||(t[s]=n(c,u?s+r:r,o,s,i))}function c(n,r,i,a){if(!h||e){var c=h;h=!0;try{t.emit(n,r,i,e,a)}catch(s){o([s,n,r,i],t)}h=c}}return t||(t=u),n.inPlace=r,n.flag=l,n}function o(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function i(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(i){o([i],n)}for(var a in t)p.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[l])}function c(t,e){var n=e(t);return n[l]=t,i(t,n,u),n}function s(t,e,n){var r=t[e];t[e]=c(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(30),l="nr@original",p=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=s,e.exports.argsToArray=f},{}]},{},["loader",2,16,5,3,4]);</script>-->
<link rel="preconnect" href="//storage.googleapis.com" crossorigin /> 

<link rel="preconnect" href="//fonts.gstatic.com" crossorigin />
<link rel="preconnect" href="//fonts.googleapis.com" crossorigin />

<link rel="preconnect" href="//www.youtube.com" crossorigin />

<link rel="preconnect" href="//www.google.com" crossorigin />
<link rel="preconnect" href="//www.google-analytics.com" crossorigin />
<link rel="preconnect" href="//apis.google.com" crossorigin />
<link rel="preconnect" href="//bid.g.doubleclick.net" crossorigin />



<link rel="dns-prefetch" href="//apis.google.com" />


<link rel="dns-prefetch" href="//www.google-analytics.com" />
<link rel="dns-prefetch" href="//www.googleadservices.com" />
<link rel="dns-prefetch" href="//www.googlecommerce.com" />


<link rel="dns-prefetch" href="//www.googletagmanager.com" />


 <link rel="dns-prefetch" href="//www.facebook.com" />
<link rel="dns-prefetch" href="//connect.facebook.net" />
<link rel="dns-prefetch" href="//static.facebook.com" />


<link rel="dns-prefetch" href="//googleads.g.doubleclick.net" />


<link rel="dns-prefetch" href="//bacon.section.io" />
<link rel="dns-prefetch" href="//cdn.livechatinc.com" />
<link rel="dns-prefetch" href="//secure.livechatinc.com" />
<link rel="dns-prefetch" href="//api.livechatinc.com" />



<link rel="dns-prefetch" href="//data.gosquared.com" />


<link rel="dns-prefetch" href="//e.metarouter.io" />
<link rel="dns-prefetch" href="//cdn.metarouter.io" />



<link rel="dns-prefetch" href="//a.opmnstr.com" />
<link rel="dns-prefetch" href="//a.optmstr.com" />
<link rel="dns-prefetch" href="//api.opmnstr.com" />


<link rel="dns-prefetch" href="//js-agent.newrelic.com" />
<link rel="dns-prefetch" href="//t.cfjump.com" />
<link rel="dns-prefetch" href="//tr.staticiv.com" />
<link rel="dns-prefetch" href="//analytics.staticiv.com" />
<link rel="dns-prefetch" href="//ws.sessioncam.com" />



<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/jquery-3.4.1.min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/js.cookie-2.2.1.min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/bootstrap.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/sli-rac.stub-min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/sli-rac.config-min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/mega-nav-min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/shiba-min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/pccart-min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/pccustomer-min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/ga-min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/shiba-components-min.js" as="script" />
<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/tracking-min.js" as="script" />

<link rel="preload" type="font/woff2" href="https://www.petcircle.com.au/petcircle-assets/content/fonts/icon-fonts/materialicons-regular.woff2" as="font" crossorigin />
<link rel="preload" type="font/woff2" href="https://www.petcircle.com.au/petcircle-assets/content/fonts/icon-fonts/materialicons-regular.woff" as="font" crossorigin />
<link rel="preload" type="font/woff2" href="https://www.petcircle.com.au/petcircle-assets/content/fonts/icon-fonts/petcircleico.woff" as="font" crossorigin />
<link rel="preload"  href="<?php echo get_template_directory_uri()?>/style.css" as="style" />


<script>/*CSS Browser Selector - http://rafael.adm.br/css_browser_selector */function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);</script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css" />
<script type="text/javascript">
    dataLayer = [{}];
    var globalBasePath= "https://www.petcircle.com.au/petcircle-assets";
</script>

<script src="https://www.googleoptimize.com/optimize.js?id=GTM-NPK52SX" async></script>

<!-- anti-flicker snippet (recommended)  -->
<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-NPK52SX':true});</script>

	
	<link rel="canonical" href="https://www.petcircle.com.au/discover" />
<link rel="stylesheet" href="https://www.petcircle.com.au/petcircle-assets/content/css/ui-main.css">
	<link rel="preload" type="application/javascript"  href="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/jquery.magnific-popup.js" as="script" />
	
	
</head>
<body data-spy="scroll" data-target="#myScrollspy">
<div id="container" class="ui-discovery vet-tips-discover">
	
	<header id="header">
		










<div class="top-bar">
	<div class="container">
		<div class="mobile-navigation">
			<button type="button" class="menu-btn">&nbsp;</button>
		</div>
		<div class="logo">
			<a href="/" title="Go to homepage">
				<img src="https://www.petcircle.com.au/petcircle-assets/images/PC-Logo.svg" alt="Pet Circle company logo" class="" />
				<span>Pet Circle</span>
			</a>
		</div>
		<div class="row">
			<div class="col-sm-11 col-xs-12 col-sm-offset-1">
				<div class="inner desktop-header">
					<div id="search-form" itemscope itemtype="http://schema.org/WebSite">
						<link itemprop="url" href="https://www.petcircle.com.au/"/>
						<form id="searchForm" action="/searchpage" method="post">
							<p class="group" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
								<button id="btnSearch" type="submit"></button>
								<span itemprop="target" content="https://www.petcircle.com.au/search/{searchbar}"></span>
								<input itemprop="query-input" id="sli_search_1" name="searchbar"  class="ui-autocomplete-input" type="text" autocomplete="off" data-placeholder="Search for eg. brands, litter, flea, shampoo..." placeholder="">
							</p>
						</form>
					</div>
					<div class="checkout">
						<div class="my-account favourites-access-point mobile hidden">
							<a href="/favourites">
								<img src="https://www.petcircle.com.au/petcircle-assets/images/icons/favorites-m.svg">
							</a>
						</div>
						<a class="my-account account-logged-in hidden" href="/account-my-profile">
								<img src="https://www.petcircle.com.au/petcircle-assets/images/icons/my-account-login.svg">
						</a>
						<a class="my-account account-logged-out hidden" href="/sign-in">
								<img src="https://www.petcircle.com.au/petcircle-assets/images/icons/my-account-logout.svg">
						</a>
						<div class="my-account-cart-container">
							<a href="/my-cart" class="cart-icon">
								<img src="https://www.petcircle.com.au/petcircle-assets/images/icons/my-account-cart.svg">
								<span class="total-pay refresh-cart-totals">$0.00</span>
								<span class="cart-quantity refresh-cart-totals number">0</span>
							</a>
						</div>
					</div>

					<div class="logout hidden-xs">
						<div class="sign-in-links hide">
							<a href="/sign-in">Sign In</a>
							|
							<a href="/register">Create Account</a>
						</div>
						<div class="sign-out-links hide">
							<a href="/account-my-profile" class="header-acc-link"><p class="greeter hidden-xs" ></p></a>
							<p class="hidden-xs">
								| <a href="#"  class="sign-out">Logout</a>
							</p>
							<p class="visible-xs">
								<a href="#" class="sign-out" >Logout</a> |
								<a href="/account-my-profile" class="header-acc-link">Account</a>
							</p>
						</div>
					</div>
					<div class="mft-quick-cart-view idle hidden">
    <div class="cart-item-list">
        <div class="title-wrapper">
            <h2>
                Cart Preview
                <span class="item-count"></span>
            </h2>
            <span class="mft-close-qvc">
                <svg width="8" height="8" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.874044 0L0 0.874044L5.12596 6L0 11.126L0.874044 12L6 6.87404L11.126 12L12 11.126L6.87404 6L12 0.874044L11.126 0L6 5.12596L0.874044 0Z" fill="#33393E"></path>
                </svg>
            </span>
        </div>
        <div class="content">
            <div class="mft-qvc-container">
                <div class="qvc-body">
                    <div class="checklist-incentive desktop">
                        <p class="no-items hidden">No items in cart</p> 
                        <div class="cart-preview-container">
                            <div class="single-order-group-wrapper qvtc-item-wrapper" data-item-type="single-order">
                                <div class="single-order-group-head">Single Order</div>
                                <div class="single-order-item-wrapper"></div>
                            </div>
                            <div class="auto-delivery-order-group-wrapper qvtc-item-wrapper" data-item-type="ad-order">
                                <div class="auto-delivery-order-group-head flex">
                                    <div class="flex-left">Auto Delivery</div>
                                    <div class="flex-right">
                                        <div class="auto-delivery-name"></div>
                                        <div class="auto-delivery-frequency"></div>
                                    </div>
                                </div>
                                <div class="auto-delivery-order-item-wrapper"></div>
                            </div>
                        </div>
                        <div class="checklist-container">
                            <p class="checklist-title">Need anything else?</p>
                            <ul class="checklist-wrapper"></ul>
                        </div>
                        <div data-isadg="true"  class="tier-incentive-container"></div>
                    </div>
                    <div class="cart-total-wrapper">
                        <div class="sub-total">
                            <span class="sub-total-price"></span>
                        </div>
                        <div class="go-to-cart">
                            <div class="checkout-button-container">
                                <a href="/my-cart" class="pop-up-button checkout">
                                <span>Go to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="mobile-sort-filter">
	<div class="sort">
			<div class="mobile-sort-wrapper">
				<div class="sort-by-label">Sort By:</div>
				<select id="sortSelector" class="sortSelector">
                    
                        <option value="" data-name="Relevance">Relevance </option>
                    
                    <option value="" data-name="Highest Price">Highest Price</option>
                    <option value="" data-name="Price">Lowest Price</option>
                    <option value="" data-name="Name">Name</option>
                    <option value="" data-name="Rating">Rating</option>
                    
                  </select>
			</div>
	</div>
	<div class="filter"><span>Filter</span></div>
</div>

<div class="header-content">
	<div class="search-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="inner">
						<div class="favourites-access-point desktop hidden">
							<a href="/favourites">
								<img src="https://www.petcircle.com.au/petcircle-assets/images/icons/favorites.svg">
								<p>Favourites</p>
							</a>
						</div>
						


<!--get min max AD discount -->



     
         
			
         
         
     
     
     
         
			
         
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
				
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
				
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     

     
         
         
			
         
     
     
     
         
         
			
         
     


						<div class="auto-delivery-header-section">
							<h5>EXTRA 
<!-- display ad discount range e.g. "5 - 10%" -->

<span class="min-discount ">5</span>
<span class="hyphen "> - </span>
<span class="max-discount ">20</span>% OFF</h5>
							<a href="/auto-delivery">
								<p>on selected brands</p>
								<img alt="AD-log" src="https://www.petcircle.com.au/petcircle-assets/images/auto-delivery-icon.svg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="menu-section">
    <div class="inner">
        <nav id="main-navigation" >
            <ul class="group user-loggin">
                <li  class="account-menu">
                    <div class="sign-in-links-mobile">
                        <a href="/sign-in" id="sign-in">
                            <h4>Sign In</h4>
                        </a>
                    </div>
                    <div class="sign-out-links hide">
                        <p class="greeter"></p>
                    </div>
                </li>
            </ul>
            <div class="sub-menu-wrapper">
                <ul class="group custom-menu mobile-account-sub-menu">
                    

                        
        <li class="link-item-menu ">
            <a href="/account-my-profile" class="nav-link ">
                <span>Manage Account</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/favourites" class="nav-link ">
                <span>Reorder Items</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/account-order-history" class="nav-link ">
                <span>Track Order</span>
            </a>
        </li>
    
        <li class="link-item-menu border-spacer manage-ad">
            <a href="/order-management" class="nav-link ">
                <span>Manage Auto Delivery</span>
            </a>
        </li>
    
                </ul>  
                <ul class="group">
                    
                        
                        
                            
                            
                                
                                    
                                    
                                        <li class="species specials  link-item-menu">
                                            
                                                
                                                
                                                
                                                    <a href="/discover/specials" class="nav-link">
                                                
                                                
                                            
                                            <h4>Sale</h4>
                                            </a>
                                        </li>
                                    
                                
                            
                        
                    
                        
                        
                            
                                <li class="species has-sub dog ">
                                    <div data-species-key="/dog" class="nav-link">
                                        <h4>Dog</h4>
                                    </div>
                                        
                                    <div class="ui-dropdown mega-nav" data-species="dog">
                                        
                                        <div class="container">
                                                
                                            <div class="desktop-nav child-menu-container">
                                                <p class="back-to">Back to Main</p>
                                                <div class="sub-menu-wrapper">
                                                    <span class="sub-menu-label">dog</span>
                                                    <div class="left-topbar-wrapper">
                                                        <ul class="links row">
                                                            <li class="nav-column">
                                                                <ul class="nav-groupings">
                                                            
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="food has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/food"  class="mobile-pointer-event-set-no">
                                                                                        Food
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Food</span>
                                                                                    <ul class="ui-sub-nav food">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/food/dry-food">Dry Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/food/natural-food">Natural Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/food/vet-diets">Vet Diets</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/food/supermarket-brands">Supermarket Brands</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/food/wet-food">Wet Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/food/puppy-box">Puppy Box</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/food">Shop all Food</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="treats has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/treats"  class="mobile-pointer-event-set-no">
                                                                                        Treats
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Treats</span>
                                                                                    <ul class="ui-sub-nav treats">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/treats/natural-treats">Natural Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/treats/dental-and-health-treats">Dental and Health Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/treats/training-and-reward-treats">Training and Reward Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/treats/jerky-and-liver-treats">Jerky and Liver Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/treats/supermarket-brands">Supermarket Brands</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/treats/other-treats">Other Treats</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/treats">Shop all Treats</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="toys has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/toys"  class="mobile-pointer-event-set-no">
                                                                                        Toys
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Toys</span>
                                                                                    <ul class="ui-sub-nav toys">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/toys/best-selling-toys">Best Selling Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/toys/interactive-toys">Interactive Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/toys/squeaky-toys">Squeaky Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/toys/fetch-toys">Fetch Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/toys/soft-toys">Soft Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/toys/durable-toys">Durable Toys</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/toys">Shop all Toys</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="flea-and-worming has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/flea-and-worming"  class="mobile-pointer-event-set-no">
                                                                                        Flea and Worming
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Flea and Worming</span>
                                                                                    <ul class="ui-sub-nav flea-and-worming">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/flea-and-worming/flea-tick-worms-heartworm">Flea Tick Worms Heartworm</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/flea-and-worming/flea-tick">Flea Tick</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/flea-and-worming/flea-worms-heartworm">Flea Worms Heartworm</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/flea-and-worming/wormers">Wormers</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/flea-and-worming/worms-heartworm">Worms Heartworm</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/flea-and-worming/flea">Flea</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/flea-and-worming">Shop all Flea and Worming</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="health has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/health"  class="mobile-pointer-event-set-no">
                                                                                        Health
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Health</span>
                                                                                    <ul class="ui-sub-nav health">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/health/joint-care">Joint Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/health/dental-care">Dental Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/health/skin-care">Skin Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/health/stress-and-anxiety">Stress and Anxiety</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/health/vitamins">Vitamins</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/health/ear-care">Ear Care</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/health">Shop all Health</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="training-and-clean-up has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/training-and-clean-up"  class="mobile-pointer-event-set-no">
                                                                                        Training and Clean Up
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Training and Clean Up</span>
                                                                                    <ul class="ui-sub-nav training-and-clean-up">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/training-and-clean-up/waste-control">Waste Control</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/training-and-clean-up/toilet-training">Toilet Training</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/training-and-clean-up/cleaning-and-odour-control">Cleaning and Odour Control</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/training-and-clean-up/crates">Crates</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/training-and-clean-up/bark-control">Bark Control</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/training-and-clean-up/stain-removers">Stain Removers</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/training-and-clean-up">Shop all Training and Clean Up</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="grooming has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/grooming"  class="mobile-pointer-event-set-no">
                                                                                        Grooming
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Grooming</span>
                                                                                    <ul class="ui-sub-nav grooming">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/grooming/shampoo-and-conditioner">Shampoo and Conditioner</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/grooming/brushes-and-combs">Brushes and Combs</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/grooming/towels-and-wipes">Towels and Wipes</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/grooming/coat-sprays">Coat Sprays</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/grooming/nail-care">Nail Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/grooming/clippers">Clippers</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/grooming">Shop all Grooming</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="beds has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/beds"  class="mobile-pointer-event-set-no">
                                                                                        Beds
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Beds</span>
                                                                                    <ul class="ui-sub-nav beds">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/beds/bolster-beds">Bolster Beds</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/beds/elevated-beds">Elevated Beds</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/beds/mats">Mats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/beds/cushions">Cushions</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/beds/blankets">Blankets</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/beds/hideaways">Hideaways</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/beds">Shop all Beds</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="feeding has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/dog/feeding"  class="mobile-pointer-event-set-no">
                                                                                        Feeding
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>dog</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Feeding</span>
                                                                                    <ul class="ui-sub-nav feeding">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/feeding/bowls">Bowls</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/feeding/water-fountains">Water Fountains</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/feeding/feeding-mats">Feeding Mats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/feeding/food-dispensers">Food Dispensers</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/feeding/interactive-toys">Interactive Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/dog/feeding/food-storage">Food Storage</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="dog" href="/dog/feeding">Shop all Feeding</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                    
                                                                        
                                                                            
        <li class="link-item-menu ">
            <a href="/dog/collars-and-leads" class="nav-link regular-link">
                <span>Collars and Leads</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/dog/technology" class="nav-link regular-link">
                <span>Technology</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/dog/clothes" class="nav-link regular-link">
                <span>Clothes</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/dog/house-and-travel" class="nav-link regular-link">
                <span>House and Travel</span>
            </a>
        </li>
    
                                                                    
                                                                    
                                                                     <li class="other-supplies has-sub sub-category"  data-cat-value="discover">
                                                                        <label class="label">
                                                                            <a href="/dog/feeding"  class="mobile-pointer-event-set-no">
                                                                                    Other Supplies
                                                                            </a>
                                                                            <span class="arrow"></span>
                                                                        </label>
                                                                        <div class="sub-nav-category child-menu-container">
                                                                            <p class="back-to">Back to <span>dog</span></p>
                                                                            <div class="sub-menu-wrapper">
                                                                                <span class="sub-menu-label"></span>
                                                                                <ul class="ui-sub-nav feeding">
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/food"  class="mobile-pointer-event-set-no">
                                                                                                    Food
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/treats"  class="mobile-pointer-event-set-no">
                                                                                                    Treats
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/toys"  class="mobile-pointer-event-set-no">
                                                                                                    Toys
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/flea-and-worming"  class="mobile-pointer-event-set-no">
                                                                                                    Flea and Worming
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/health"  class="mobile-pointer-event-set-no">
                                                                                                    Health
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/training-and-clean-up"  class="mobile-pointer-event-set-no">
                                                                                                    Training and Clean Up
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/grooming"  class="mobile-pointer-event-set-no">
                                                                                                    Grooming
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/beds"  class="mobile-pointer-event-set-no">
                                                                                                    Beds
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/feeding"  class="mobile-pointer-event-set-no">
                                                                                                    Feeding
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/collars-and-leads"  class="mobile-pointer-event-set-no">
                                                                                                    Collars and Leads
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/clothes"  class="mobile-pointer-event-set-no">
                                                                                                    Clothes
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/technology"  class="mobile-pointer-event-set-no">
                                                                                                    Technology
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/dog/house-and-travel"  class="mobile-pointer-event-set-no">
                                                                                                    House and Travel
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                    
                                                                                    <li>
                                                                                        <a class="view-all" data-link-species="dog" href="/dog">Shop all Supplies</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                        
                                                                            
                                                                            
                                                                            
                                                                            <li class="brands has-sub sub-category"  data-cat-value="discover">
                                                                                <label class="label">
                                                                                    <a href="/dog" class="mobile-pointer-event-set-no">
                                                                                        Top Dog Brands
                                                                                    </a>
                                                                                    <span class="arrow"></span>
                                                                                </label>
                                                                                <div class="sub-nav-category child-menu-container">
                                                                                    <p class="back-to">Back to Main</p>
                                                                                    <div class="sub-menu-wrapper">
                                                                                        <span class="sub-menu-label">dog</span>
                                                                                        <ul class="ui-sub-nav brands">
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/advance">Advance</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/black-hawk">Black Hawk</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/hills-prescription-diet">Hills Prescription Diet</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/hills-science-diet">Hills Science Diet</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/kong">Kong</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/meals-for-mutts">Meals For Mutts</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/nexgard-spectra">Nexgard Spectra</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/paws-for-life">Paws for Life</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/royal-canin">Royal Canin</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/royal-canin-veterinary-diet">Royal Canin Veterinary Diet</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/supercoat">Supercoat</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/dog/taste-of-the-wild">Taste of the Wild</a>
                                                                                                </li>
                                                                                            
                                                                                            <li>
                                                                                                <a class="view-all" data-link-species="dog" href="/dog/brand">Shop all Brands</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        
                                                                    
                                                                
                                                            </ul>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right-topbar-wrapper tiles">
                                                        <div class="tile-right-wrapper">
                                                            <div class="tile-banner">
                                                                
                                                                
                                                                    
                                                                        
                                                                        
                                                                             
                                                                        
                                                                        
                                                                        
                                                                    
                                                                    
                                                                
                                                                
<ul class="image-tiles">
    
        
            
            <li class="image-tiles-item specials ">
                <a href="/dog/sale">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-dog-sale.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Specials dog">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-dog-sale.png" alt="Specials dog"/></noscript>
                    <span>Specials</span> 
                </a>
            </li>
        
        
        
        
    
        
        
        
        
            <li class="image-tiles-item label">
                <h3>Shop by Lifestage</h3>
            </li>
        
    
        
        
            <li class="image-tiles-item lifestage-tile">
                <a href="/puppy">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-puppy.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Puppy">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-puppy.png" alt="Puppy"/></noscript>
                    Puppy
                </a>
            </li>
        
        
        
    
        
        
            <li class="image-tiles-item lifestage-tile">
                <a href="/dog/adult">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-small-dog.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Adult">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-small-dog.png" alt="Adult"/></noscript>
                    Adult
                </a>
            </li>
        
        
        
    
        
        
            <li class="image-tiles-item lifestage-tile">
                <a href="/dog/senior">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-large-dog.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Senior">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-large-dog.png" alt="Senior"/></noscript>
                    Senior
                </a>
            </li>
        
        
        
    
        
        
        
        
            <li class="image-tiles-item label">
                <h3>Shop by Breed Size</h3>
            </li>
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/dog/small-dog" class="tertiary-btn meganav-category-link">Small Dog</a>
            </li>
        
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/dog/medium-dog" class="tertiary-btn meganav-category-link">Medium Dog</a>
            </li>
        
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/dog/large-dog" class="tertiary-btn meganav-category-link">Large Dog</a>
            </li>
        
        
    
        
            
            <li class="image-tiles-item  ">
                <a href="/dog">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/dog-shop-all.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Shop all dog">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/dog-shop-all.png" alt="Shop all dog"/></noscript>
                     
                </a>
            </li>
        
        
        
        
    
</ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                </li>
                                
                                    
                                
                            
                            
                        
                    
                        
                        
                            
                                <li class="species has-sub cat ">
                                    <div data-species-key="/cat" class="nav-link">
                                        <h4>Cat</h4>
                                    </div>
                                        
                                    <div class="ui-dropdown mega-nav" data-species="cat">
                                        
                                        <div class="container">
                                                
                                            <div class="desktop-nav child-menu-container">
                                                <p class="back-to">Back to Main</p>
                                                <div class="sub-menu-wrapper">
                                                    <span class="sub-menu-label">cat</span>
                                                    <div class="left-topbar-wrapper">
                                                        <ul class="links row">
                                                            <li class="nav-column">
                                                                <ul class="nav-groupings">
                                                            
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="food has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/food"  class="mobile-pointer-event-set-no">
                                                                                        Food
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Food</span>
                                                                                    <ul class="ui-sub-nav food">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/food/wet-food">Wet Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/food/dry-food">Dry Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/food/vet-diets">Vet Diets</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/food/supermarket-brands">Supermarket Brands</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/food/natural-food">Natural Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/food/stress-and-anxiety">Stress and Anxiety</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/food">Shop all Food</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="litter has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/litter"  class="mobile-pointer-event-set-no">
                                                                                        Litter
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Litter</span>
                                                                                    <ul class="ui-sub-nav litter">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/litter/paper-litter">Paper Litter</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/litter/clay-litter">Clay Litter</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/litter/crystal-litter">Crystal Litter</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/litter/wood-litter">Wood Litter</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/litter/tofu-litter">Tofu Litter</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/litter/corn-litter">Corn Litter</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/litter">Shop all Litter</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="treats has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/treats"  class="mobile-pointer-event-set-no">
                                                                                        Treats
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Treats</span>
                                                                                    <ul class="ui-sub-nav treats">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/treats/dental-and-health-treats">Dental and Health Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/treats/supermarket-brands">Supermarket Brands</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/treats/other-treats">Other Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/treats/training-and-reward-treats">Training and Reward Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/treats/natural-treats">Natural Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/treats/bundle-boxes">Bundle Boxes</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/treats">Shop all Treats</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="flea-and-worming has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/flea-and-worming"  class="mobile-pointer-event-set-no">
                                                                                        Flea and Worming
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Flea and Worming</span>
                                                                                    <ul class="ui-sub-nav flea-and-worming">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/flea-and-worming/flea-worms-heartworm">Flea Worms Heartworm</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/flea-and-worming/flea-tick-worms-heartworm">Flea Tick Worms Heartworm</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/flea-and-worming/wormers">Wormers</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/flea-and-worming/flea-tick">Flea Tick</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/flea-and-worming/flea">Flea</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/flea-and-worming/worms-heartworm">Worms Heartworm</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/flea-and-worming">Shop all Flea and Worming</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="toys has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/toys"  class="mobile-pointer-event-set-no">
                                                                                        Toys
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Toys</span>
                                                                                    <ul class="ui-sub-nav toys">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/toys/best-selling-toys">Best Selling Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/toys/interactive-toys">Interactive Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/toys/catnip-toys">Catnip Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/toys/scratchers">Scratchers</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/toys/soft-toys">Soft Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/toys/activity-toys">Activity Toys</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/toys">Shop all Toys</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="health has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/health"  class="mobile-pointer-event-set-no">
                                                                                        Health
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Health</span>
                                                                                    <ul class="ui-sub-nav health">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/health/stress-and-anxiety">Stress and Anxiety</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/health/dental-care">Dental Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/health/joint-care">Joint Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/health/eye-care">Eye Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/health/skin-care">Skin Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/health/digestive-care">Digestive Care</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/health">Shop all Health</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="trees-and-scratchers has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/trees-and-scratchers"  class="mobile-pointer-event-set-no">
                                                                                        Trees and Scratchers
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Trees and Scratchers</span>
                                                                                    <ul class="ui-sub-nav trees-and-scratchers">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/trees-and-scratchers/cat-furniture">Cat Furniture</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/trees-and-scratchers/scratchers">Scratchers</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/trees-and-scratchers/activity-toys">Activity Toys</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/trees-and-scratchers">Shop all Trees and Scratchers</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="feeding has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/feeding"  class="mobile-pointer-event-set-no">
                                                                                        Feeding
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Feeding</span>
                                                                                    <ul class="ui-sub-nav feeding">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/feeding/water-fountains">Water Fountains</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/feeding/food-dispensers">Food Dispensers</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/feeding/bowls">Bowls</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/feeding/interactive-toys">Interactive Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/feeding/feeding-mats">Feeding Mats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/feeding/food-storage">Food Storage</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/feeding">Shop all Feeding</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="beds has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/cat/beds"  class="mobile-pointer-event-set-no">
                                                                                        Beds
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>cat</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Beds</span>
                                                                                    <ul class="ui-sub-nav beds">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/beds/bolster-beds">Bolster Beds</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/beds/elevated-beds">Elevated Beds</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/beds/hideaways">Hideaways</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/beds/mats">Mats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/beds/blankets">Blankets</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/cat/beds/cushions">Cushions</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="cat" href="/cat/beds">Shop all Beds</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                    
                                                                    
                                                                        
                                                                            
        <li class="link-item-menu ">
            <a href="/cat/training-and-clean-up" class="nav-link regular-link">
                <span>Training and Clean Up</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/cat/grooming" class="nav-link regular-link">
                <span>Grooming</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/cat/beds" class="nav-link regular-link">
                <span>Beds</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/cat/house-and-travel" class="nav-link regular-link">
                <span>House and Travel</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/cat/technology" class="nav-link regular-link">
                <span>Technology</span>
            </a>
        </li>
    
                                                                    
                                                                     <li class="other-supplies has-sub sub-category"  data-cat-value="discover">
                                                                        <label class="label">
                                                                            <a href="/cat/beds"  class="mobile-pointer-event-set-no">
                                                                                    Other Supplies
                                                                            </a>
                                                                            <span class="arrow"></span>
                                                                        </label>
                                                                        <div class="sub-nav-category child-menu-container">
                                                                            <p class="back-to">Back to <span>cat</span></p>
                                                                            <div class="sub-menu-wrapper">
                                                                                <span class="sub-menu-label"></span>
                                                                                <ul class="ui-sub-nav beds">
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/food"  class="mobile-pointer-event-set-no">
                                                                                                    Food
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/litter"  class="mobile-pointer-event-set-no">
                                                                                                    Litter
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/treats"  class="mobile-pointer-event-set-no">
                                                                                                    Treats
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/flea-and-worming"  class="mobile-pointer-event-set-no">
                                                                                                    Flea and Worming
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/toys"  class="mobile-pointer-event-set-no">
                                                                                                    Toys
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/health"  class="mobile-pointer-event-set-no">
                                                                                                    Health
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/trees-and-scratchers"  class="mobile-pointer-event-set-no">
                                                                                                    Trees and Scratchers
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/feeding"  class="mobile-pointer-event-set-no">
                                                                                                    Feeding
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/beds"  class="mobile-pointer-event-set-no">
                                                                                                    Beds
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/training-and-clean-up"  class="mobile-pointer-event-set-no">
                                                                                                    Training and Clean Up
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/collars-and-leads"  class="mobile-pointer-event-set-no">
                                                                                                    Collars and Leads
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/grooming"  class="mobile-pointer-event-set-no">
                                                                                                    Grooming
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/feeding-accessories"  class="mobile-pointer-event-set-no">
                                                                                                    Feeding Accessories
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/cat/house-and-travel"  class="mobile-pointer-event-set-no">
                                                                                                    House and Travel
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                    
                                                                                    <li>
                                                                                        <a class="view-all" data-link-species="cat" href="/cat">Shop all Supplies</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                        
                                                                            
                                                                            
                                                                            
                                                                            <li class="brands has-sub sub-category"  data-cat-value="discover">
                                                                                <label class="label">
                                                                                    <a href="/cat" class="mobile-pointer-event-set-no">
                                                                                        Top Cat Brands
                                                                                    </a>
                                                                                    <span class="arrow"></span>
                                                                                </label>
                                                                                <div class="sub-nav-category child-menu-container">
                                                                                    <p class="back-to">Back to Main</p>
                                                                                    <div class="sub-menu-wrapper">
                                                                                        <span class="sub-menu-label">cat</span>
                                                                                        <ul class="ui-sub-nav brands">
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/advance">Advance</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/advocate">Advocate</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/breeders-choice">Breeders Choice</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/dine">Dine</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/felix">Felix</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/greenies">Greenies</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/hills-prescription-diet">Hills Prescription Diet</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/hills-science-diet">Hills Science Diet</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/pro-plan">Pro Plan</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/royal-canin">Royal Canin</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/royal-canin-veterinary-diet">Royal Canin Veterinary Diet</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/cat/ziwi">Ziwi</a>
                                                                                                </li>
                                                                                            
                                                                                            <li>
                                                                                                <a class="view-all" data-link-species="cat" href="/cat/brand">Shop all Brands</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        
                                                                    
                                                                
                                                            </ul>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right-topbar-wrapper tiles">
                                                        <div class="tile-right-wrapper">
                                                            <div class="tile-banner">
                                                                
                                                                
                                                                    
                                                                        
                                                                        
                                                                        
                                                                             
                                                                        
                                                                        
                                                                    
                                                                    
                                                                
                                                                
<ul class="image-tiles">
    
        
            
            <li class="image-tiles-item specials ">
                <a href="/cat/sale">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-cat-sale.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Specialscat">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-cat-sale.png" alt="Specialscat"/></noscript>
                    <span>Specials</span> 
                </a>
            </li>
        
        
        
        
    
        
        
        
        
            <li class="image-tiles-item label">
                <h3>Shop by Lifestage</h3>
            </li>
        
    
        
        
            <li class="image-tiles-item lifestage-tile">
                <a href="/kitten">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-kitten.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Kitten">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-kitten.png" alt="Kitten"/></noscript>
                    Kitten
                </a>
            </li>
        
        
        
    
        
        
            <li class="image-tiles-item lifestage-tile">
                <a href="/cat/adult">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-indoor.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Adult">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-indoor.png" alt="Adult"/></noscript>
                    Adult
                </a>
            </li>
        
        
        
    
        
        
            <li class="image-tiles-item lifestage-tile">
                <a href="/cat/senior">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-outdoor.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Senior">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-outdoor.png" alt="Senior"/></noscript>
                    Senior
                </a>
            </li>
        
        
        
    
        
        
        
        
            <li class="image-tiles-item label">
                <h3>Shop by Lifestyle</h3>
            </li>
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/cat/indoor" class="tertiary-btn meganav-category-link">Indoor</a>
            </li>
        
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/cat/outdoor" class="tertiary-btn meganav-category-link">Outdoor</a>
            </li>
        
        
    
        
            
            <li class="image-tiles-item  ">
                <a href="/cat">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/cat-shop-all.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Shop all cat">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/cat-shop-all.png" alt="Shop all cat"/></noscript>
                     
                </a>
            </li>
        
        
        
        
    
</ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                </li>
                                
                                    
                                
                            
                            
                        
                    
                        
                        
                            
                            
                                
                                    
                                    
                                    
                                
                            
                        
                    
                        
                        
                            
                            
                                
                                    
                                    
                                    
                                
                            
                        
                    
                        
                        
                            
                                <li class="species has-sub bird ">
                                    <div data-species-key="/bird" class="nav-link">
                                        <h4>Bird</h4>
                                    </div>
                                        
                                    <div class="ui-dropdown mega-nav" data-species="bird">
                                        
                                        <div class="container">
                                                
                                            <div class="desktop-nav child-menu-container">
                                                <p class="back-to">Back to Main</p>
                                                <div class="sub-menu-wrapper">
                                                    <span class="sub-menu-label">bird</span>
                                                    <div class="left-topbar-wrapper">
                                                        <ul class="links row">
                                                            <li class="nav-column">
                                                                <ul class="nav-groupings">
                                                            
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="food has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/food"  class="mobile-pointer-event-set-no">
                                                                                        Food
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Food</span>
                                                                                    <ul class="ui-sub-nav food">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/food/chicken-food">Chicken Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/food/wild-bird-food">Wild Bird Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/food/parrot-food">Parrot Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/food/lorikeet-food">Lorikeet Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/food/budgie-food">Budgie Food</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/food/cockatiel-food">Cockatiel Food</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/food">Shop all Food</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="toys has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/toys"  class="mobile-pointer-event-set-no">
                                                                                        Toys
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Toys</span>
                                                                                    <ul class="ui-sub-nav toys">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/toys/hanging-toys">Hanging Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/toys/foraging-toys">Foraging Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/toys/activity-toys">Activity Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/toys/swing-toys">Swing Toys</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/toys/bird-gyms">Bird Gyms</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/toys">Shop all Toys</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="cages-and-clean-up has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/cages-and-clean-up"  class="mobile-pointer-event-set-no">
                                                                                        Cages and Clean Up
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Cages and Clean Up</span>
                                                                                    <ul class="ui-sub-nav cages-and-clean-up">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/cages-and-clean-up/bedding-and-litter">Bedding and Litter</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/cages-and-clean-up/liners-and-bedding">Liners and Bedding</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/cages-and-clean-up/litter-and-liners">Litter and Liners</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/cages-and-clean-up/stable-bedding">Stable Bedding</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/cages-and-clean-up/cages">Cages</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/cages-and-clean-up/cleaners">Cleaners</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/cages-and-clean-up">Shop all Cages and Clean Up</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="treats has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/treats"  class="mobile-pointer-event-set-no">
                                                                                        Treats
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Treats</span>
                                                                                    <ul class="ui-sub-nav treats">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/treats/bar-treats">Bar Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/treats/fruit-and-vegetable-treats">Fruit and Vegetable Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/treats/mealworms">Mealworms</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/treats/natural-treats">Natural Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/treats/biscuit-treats">Biscuit Treats</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/treats/mineral-and-cuttlebone-treats">Mineral and Cuttlebone Treats</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/treats">Shop all Treats</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="health-and-grooming has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/health-and-grooming"  class="mobile-pointer-event-set-no">
                                                                                        Health and Grooming
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Health and Grooming</span>
                                                                                    <ul class="ui-sub-nav health-and-grooming">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/health-and-grooming/minerals-and-vitamins">Minerals and Vitamins</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/health-and-grooming/health-supplements">Health Supplements</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/health-and-grooming/nail-care">Nail Care</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/health-and-grooming/wormers">Wormers</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/health-and-grooming/mites-and-lice">Mites and Lice</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/health-and-grooming/worming">Worming</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/health-and-grooming">Shop all Health and Grooming</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="feeding-accessories has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/feeding-accessories"  class="mobile-pointer-event-set-no">
                                                                                        Feeding Accessories
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Feeding Accessories</span>
                                                                                    <ul class="ui-sub-nav feeding-accessories">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/feeding-accessories/feeders">Feeders</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/feeding-accessories/bowls">Bowls</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/feeding-accessories/drinkers">Drinkers</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/feeding-accessories">Shop all Feeding Accessories</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                        <li class="accessories has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/accessories"  class="mobile-pointer-event-set-no">
                                                                                        Accessories
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Accessories</span>
                                                                                    <ul class="ui-sub-nav accessories">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/accessories/hideaways">Hideaways</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/accessories/perches">Perches</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/accessories/ladders">Ladders</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/accessories/bedding-and-litter">Bedding and Litter</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/accessories/stable-bedding">Stable Bedding</a>
                                                                                            </li>
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/accessories/harnesses">Harnesses</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/accessories">Shop all Accessories</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="bedding-and-clean-up has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/bedding-and-clean-up"  class="mobile-pointer-event-set-no">
                                                                                        Bedding and Clean Up
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Bedding and Clean Up</span>
                                                                                    <ul class="ui-sub-nav bedding-and-clean-up">
                                                                                        
                                                                                            <li>
                                                                                                <a href="/bird/bedding-and-clean-up/liners-and-bedding">Liners and Bedding</a>
                                                                                            </li>
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/bedding-and-clean-up">Shop all Bedding and Clean Up</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                        <li class="wormers-and-insect-repellents has-sub sub-category"  data-cat-value="discover">
                                                                            <label class="label">
                                                                                <a href="/bird/wormers-and-insect-repellents"  class="mobile-pointer-event-set-no">
                                                                                        Wormers and Insect Repellents
                                                                                </a>
                                                                                <span class="arrow"></span>
                                                                            </label>
                                                                            <div class="sub-nav-category child-menu-container">
                                                                                <p class="back-to">Back to <span>bird</span></p>
                                                                                <div class="sub-menu-wrapper">
                                                                                    <span class="sub-menu-label">Wormers and Insect Repellents</span>
                                                                                    <ul class="ui-sub-nav wormers-and-insect-repellents">
                                                                                        
                                                                                        <li>
                                                                                            <a class="view-all" data-link-species="bird" href="/bird/wormers-and-insect-repellents">Shop all Wormers and Insect Repellents</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                
                                                                
                                                                    
                                                                    
                                                                     <li class="other-supplies has-sub sub-category"  data-cat-value="discover">
                                                                        <label class="label">
                                                                            <a href="/bird/wormers-and-insect-repellents"  class="mobile-pointer-event-set-no">
                                                                                    Other Supplies
                                                                            </a>
                                                                            <span class="arrow"></span>
                                                                        </label>
                                                                        <div class="sub-nav-category child-menu-container">
                                                                            <p class="back-to">Back to <span>bird</span></p>
                                                                            <div class="sub-menu-wrapper">
                                                                                <span class="sub-menu-label"></span>
                                                                                <ul class="ui-sub-nav wormers-and-insect-repellents">
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/food"  class="mobile-pointer-event-set-no">
                                                                                                    Food
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/toys"  class="mobile-pointer-event-set-no">
                                                                                                    Toys
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/cages-and-clean-up"  class="mobile-pointer-event-set-no">
                                                                                                    Cages and Clean Up
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/treats"  class="mobile-pointer-event-set-no">
                                                                                                    Treats
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/health-and-grooming"  class="mobile-pointer-event-set-no">
                                                                                                    Health and Grooming
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/feeding-accessories"  class="mobile-pointer-event-set-no">
                                                                                                    Feeding Accessories
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/accessories"  class="mobile-pointer-event-set-no">
                                                                                                    Accessories
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/bedding-and-clean-up"  class="mobile-pointer-event-set-no">
                                                                                                    Bedding and Clean Up
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/wormers-and-insect-repellents"  class="mobile-pointer-event-set-no">
                                                                                                    Wormers and Insect Repellents
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/clean-up-and-bedding"  class="mobile-pointer-event-set-no">
                                                                                                    Clean Up and Bedding
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/breeding-and-nesting"  class="mobile-pointer-event-set-no">
                                                                                                    Breeding and Nesting
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                            <li>
                                                                                            <a href="/bird/cages-and-accessories"  class="mobile-pointer-event-set-no">
                                                                                                    Cages and Accessories
                                                                                            </a>
                                                                                        </li>
                                                                                        
                                                                                    
                                                                                        
                                                                                    
                                                                                    <li>
                                                                                        <a class="view-all" data-link-species="bird" href="/bird">Shop all Supplies</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                
                                                                    
                                                                        
                                                                            
                                                                            
                                                                            
                                                                            <li class="brands has-sub sub-category"  data-cat-value="discover">
                                                                                <label class="label">
                                                                                    <a href="/bird" class="mobile-pointer-event-set-no">
                                                                                        Top Bird Brands
                                                                                    </a>
                                                                                    <span class="arrow"></span>
                                                                                </label>
                                                                                <div class="sub-nav-category child-menu-container">
                                                                                    <p class="back-to">Back to Main</p>
                                                                                    <div class="sub-menu-wrapper">
                                                                                        <span class="sub-menu-label">bird</span>
                                                                                        <ul class="ui-sub-nav brands">
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/barastoc">Barastoc</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/birdie">Birdie</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/harmony">Harmony</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/jw-insight">JW Insight</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/laucke">Laucke</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/mini-hemp">Mini Hemp</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/passwell">Passwell</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/peckish">Peckish</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/peters">Peters</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/trill">Trill</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/vetafarm">Vetafarm</a>
                                                                                                </li>
                                                                                            
                                                                                                <li>
                                                                                                    <a href="/bird/whistler">Whistler</a>
                                                                                                </li>
                                                                                            
                                                                                            <li>
                                                                                                <a class="view-all" data-link-species="bird" href="/bird/brand">Shop all Brands</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        
                                                                    
                                                                
                                                            </ul>
                                                          </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right-topbar-wrapper tiles">
                                                        <div class="tile-right-wrapper">
                                                            <div class="tile-banner">
                                                                
                                                                
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        
                                                                             
                                                                        
                                                                    
                                                                    
                                                                
                                                                
<ul class="image-tiles">
    
        
            
            <li class="image-tiles-item specials ">
                <a href="/bird/sale">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-bird-sale.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Specials bird">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/shop-bird-sale.png" alt="Specials bird"/></noscript>
                    <span>Specials</span> 
                </a>
            </li>
        
        
        
        
    
        
        
        
        
            <li class="image-tiles-item label">
                <h3>Shop by Species</h3>
            </li>
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/chickens" class="tertiary-btn meganav-category-link">Chickens</a>
            </li>
        
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/wild-bird" class="tertiary-btn meganav-category-link">Wild Bird</a>
            </li>
        
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/parrot" class="tertiary-btn meganav-category-link">Parrot</a>
            </li>
        
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/budgie" class="tertiary-btn meganav-category-link">Budgie</a>
            </li>
        
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/finch" class="tertiary-btn meganav-category-link">Finch</a>
            </li>
        
        
    
        
        
        
            <li class="image-tiles-item">
                <a href="/cockatiel" class="tertiary-btn meganav-category-link">Cockatiel</a>
            </li>
        
        
    
        
            
            <li class="image-tiles-item  ">
                <a href="/bird">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/bird-shop-all-new.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Shop all bird">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/bird-shop-all-new.png" alt="Shop all bird"/></noscript>
                     
                </a>
            </li>
        
        
        
        
    
</ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                </li>
                                
                                    
                                        <li class="species has-sub other-pets">
                                            <div data-species-key="/bird" class="nav-link">
                                                <h4>Other Pets</h4>
                                            </div>
                                            <div class="ui-dropdown mega-nav" data-species="other-pets">
                                                <div class="container">
                                                    <div class="desktop-nav child-menu-container">
                                                        <p class="back-to">Back to Main</p>
                                                        <div class="sub-menu-wrapper">
                                                        <div class="left-topbar-wrapper">
                                                            <ul class="links row">
                                                                
                                                                    
                                                                    
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                            
                                                                                <li class="nav-column fish">
                                                                                    <ul class="nav-groupings">
                                                                                        <li class="other-pets-species has-sub sub-category fish">
                                                                                            <label class="label" for="Fish">
                                                                                                <a href="/fish" class="mobile-pointer-event-set-no">
                                                                                                        Fish
                                                                                                </a>
                                                                                                <span class="arrow"></span>
                                                                                            </label>
                                                                                            <div class="sub-nav-category child-menu-container">
                                                                                                <p class="back-to">Back to Other species</p>
                                                                                                <div class="sub-menu-wrapper">
                                                                                                    <span class="sub-menu-label">fish</span>
                                                                                                    <ul class="ui-sub-nav">
                                                                                                        
                                                                                                            
                                                                                                                <li class="Food" data-cat-value="discover">
                                                                                                                    <a href="/fish/food">Food</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Water Care" data-cat-value="discover">
                                                                                                                    <a href="/fish/water-care">Water Care</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Filters and Media" data-cat-value="discover">
                                                                                                                    <a href="/fish/filters-and-media">Filters and Media</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Tanks and Maintenance" data-cat-value="discover">
                                                                                                                    <a href="/fish/tanks-and-maintenance">Tanks and Maintenance</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Decorations" data-cat-value="discover">
                                                                                                                    <a href="/fish/decorations">Decorations</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Heat and Lighting" data-cat-value="discover">
                                                                                                                    <a href="/fish/heat-and-lighting">Heat and Lighting</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Health" data-cat-value="discover">
                                                                                                                    <a href="/fish/health">Health</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Pond" data-cat-value="discover">
                                                                                                                    <a href="/fish/pond">Pond</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                        
                                                                                                        <li class="species-banner">
                                                                                                            <div class="tile-banner">
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                
<ul class="image-tiles">
    
        
            
            <li class="image-tiles-item specials ">
                <a href="/sale/fish">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/fish-specials.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Specials fish">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/fish-specials.png" alt="Specials fish"/></noscript>
                    <span>Specials</span> 
                </a>
            </li>
        
        
        
        
    
        
            
            <li class="image-tiles-item  ">
                <a href="/fish">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/fish-shop-all.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Shop all fish">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/fish-shop-all.png" alt="Shop all fish"/></noscript>
                     
                </a>
            </li>
        
        
        
        
    
</ul>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                            
                                                                                <li class="nav-column small-pet">
                                                                                    <ul class="nav-groupings">
                                                                                        <li class="other-pets-species has-sub sub-category small-pet">
                                                                                            <label class="label" for="Small-Pet">
                                                                                                <a href="/small-pet" class="mobile-pointer-event-set-no">
                                                                                                        Small Pet
                                                                                                </a>
                                                                                                <span class="arrow"></span>
                                                                                            </label>
                                                                                            <div class="sub-nav-category child-menu-container">
                                                                                                <p class="back-to">Back to Other species</p>
                                                                                                <div class="sub-menu-wrapper">
                                                                                                    <span class="sub-menu-label">small-pet</span>
                                                                                                    <ul class="ui-sub-nav">
                                                                                                        
                                                                                                            
                                                                                                                <li class="Food" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/food">Food</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Treats" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/treats">Treats</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Bedding and Clean Up" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/bedding-and-clean-up">Bedding and Clean Up</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Toys and Hideaways" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/toys-and-hideaways">Toys and Hideaways</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Feeding Accessories" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/feeding-accessories">Feeding Accessories</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Cages and Accessories" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/cages-and-accessories">Cages and Accessories</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Grooming" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/grooming">Grooming</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Health" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/health">Health</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Harnesses and Leads" data-cat-value="discover">
                                                                                                                    <a href="/small-pet/harnesses-and-leads">Harnesses and Leads</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                        
                                                                                                        <li class="species-banner">
                                                                                                            <div class="tile-banner">
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                
<ul class="image-tiles">
    
        
            
            <li class="image-tiles-item specials ">
                <a href="/sale/small-pet">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/small-pet-specials.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Specials small-pet">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/small-pet-specials.png" alt="Specials small-pet"/></noscript>
                    <span>Specials</span> 
                </a>
            </li>
        
        
        
        
    
        
            
            <li class="image-tiles-item  ">
                <a href="/small-pet">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/small-pet-shop-all.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Shop all small-pet">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/small-pet-shop-all.png" alt="Shop all small-pet"/></noscript>
                     
                </a>
            </li>
        
        
        
        
    
</ul>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                            
                                                                                <li class="nav-column reptile">
                                                                                    <ul class="nav-groupings">
                                                                                        <li class="other-pets-species has-sub sub-category reptile">
                                                                                            <label class="label" for="Reptile">
                                                                                                <a href="/reptile" class="mobile-pointer-event-set-no">
                                                                                                        Reptile
                                                                                                </a>
                                                                                                <span class="arrow"></span>
                                                                                            </label>
                                                                                            <div class="sub-nav-category child-menu-container">
                                                                                                <p class="back-to">Back to Other species</p>
                                                                                                <div class="sub-menu-wrapper">
                                                                                                    <span class="sub-menu-label">reptile</span>
                                                                                                    <ul class="ui-sub-nav">
                                                                                                        
                                                                                                            
                                                                                                                <li class="Heat and Lighting" data-cat-value="discover">
                                                                                                                    <a href="/reptile/heat-and-lighting">Heat and Lighting</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Food" data-cat-value="discover">
                                                                                                                    <a href="/reptile/food">Food</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Health" data-cat-value="discover">
                                                                                                                    <a href="/reptile/health">Health</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Substrate and Clean Up" data-cat-value="discover">
                                                                                                                    <a href="/reptile/substrate-and-clean-up">Substrate and Clean Up</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Habitat Accessories" data-cat-value="discover">
                                                                                                                    <a href="/reptile/habitat-accessories">Habitat Accessories</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Hermit Crab" data-cat-value="discover">
                                                                                                                    <a href="/reptile/hermit-crab">Hermit Crab</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Habitats" data-cat-value="discover">
                                                                                                                    <a href="/reptile/habitats">Habitats</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Feeding Accessories" data-cat-value="discover">
                                                                                                                    <a href="/reptile/feeding-accessories">Feeding Accessories</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                        
                                                                                                        <li class="species-banner">
                                                                                                            <div class="tile-banner">
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                
<ul class="image-tiles">
    
        
            
            <li class="image-tiles-item specials ">
                <a href="/sale/reptile">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/reptile-specials.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Specials reptile">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/reptile-specials.png" alt="Specials reptile"/></noscript>
                    <span>Specials</span> 
                </a>
            </li>
        
        
        
        
    
        
            
            <li class="image-tiles-item  ">
                <a href="/reptile">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/reptile-shop-all.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Shop all reptile">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/reptile-shop-all.png" alt="Shop all reptile"/></noscript>
                     
                </a>
            </li>
        
        
        
        
    
</ul>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                            
                                                                                <li class="nav-column horse">
                                                                                    <ul class="nav-groupings">
                                                                                        <li class="other-pets-species has-sub sub-category horse">
                                                                                            <label class="label" for="Horse">
                                                                                                <a href="/horse" class="mobile-pointer-event-set-no">
                                                                                                        Horse
                                                                                                </a>
                                                                                                <span class="arrow"></span>
                                                                                            </label>
                                                                                            <div class="sub-nav-category child-menu-container">
                                                                                                <p class="back-to">Back to Other species</p>
                                                                                                <div class="sub-menu-wrapper">
                                                                                                    <span class="sub-menu-label">horse</span>
                                                                                                    <ul class="ui-sub-nav">
                                                                                                        
                                                                                                            
                                                                                                                <li class="Food" data-cat-value="discover">
                                                                                                                    <a href="/horse/food">Food</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Health and Supplements" data-cat-value="discover">
                                                                                                                    <a href="/horse/health-and-supplements">Health and Supplements</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Wormers and Insect Repellents" data-cat-value="discover">
                                                                                                                    <a href="/horse/wormers-and-insect-repellents">Wormers and Insect Repellents</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Hoof Care" data-cat-value="discover">
                                                                                                                    <a href="/horse/hoof-care">Hoof Care</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Accessories" data-cat-value="discover">
                                                                                                                    <a href="/horse/accessories">Accessories</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                <li class="Grooming" data-cat-value="discover">
                                                                                                                    <a href="/horse/grooming">Grooming</a>
                                                                                                                </li>
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                        
                                                                                                        <li class="species-banner">
                                                                                                            <div class="tile-banner">
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                
<ul class="image-tiles">
    
        
            
            <li class="image-tiles-item specials ">
                <a href="/sale/horse">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/horse-specials.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Specials horse">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/horse-specials.png" alt="Specials horse"/></noscript>
                    <span>Specials</span> 
                </a>
            </li>
        
        
        
        
    
        
            
            <li class="image-tiles-item  ">
                <a href="/horse">
                    <img data-src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/horse-shop-all.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="Shop all horse">
                    <noscript><img src="https://www.petcircle.com.au/petcircle-assets/images/top-bar/horse-shop-all.png" alt="Shop all horse"/></noscript>
                     
                </a>
            </li>
        
        
        
        
    
</ul>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                    
                                                                
                                                                    
                                                                    
                                                                        
                                                                    
                                                                
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    
                                
                            
                            
                        
                    
                        
                        
                            
                            
                                
                                    
                                    
                                    
                                
                            
                        
                    
                        
                        
                            
                            
                                
                                    
                                    
                                    
                                
                            
                        
                    
                        
                        
                            
                            
                                
                                    
                                    
                                        <li class="species brands  link-item-menu">
                                            
                                                
                                                    <a href="/brand" class="nav-link">
                                                
                                                
                                                
                                                
                                            
                                            <h4>Brands</h4>
                                            </a>
                                        </li>
                                    
                                
                            
                        
                    
                        
                        
                            
                            
                                
                                    
                                    
                                        <li class="species discover active link-item-menu">
                                            
                                                
                                                
                                                
                                                
                                                    <a href="/discover" class="nav-link">
                                                
                                            
                                            <h4>Vet Tips</h4>
                                            </a>
                                        </li>
                                    
                                
                            
                        
                    
                        
                        
                            
                            
                                
                                    
                                    
                                    
                                
                            
                        
                    
                    <li id="breeder-tab" class="hidden " >
                        <a href="/breeder/holistic-select">
                            <span>breeder</span>
                        </a>
                    </li>
                </ul>
                <ul class="group custom-menu">
                    
                        
        <li class="link-item-menu referrals border-spacer">
            <a href="/account-my-referrals" class="nav-link ">
                <span>Get $10 OFF your order</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/wishlist" class="nav-link ">
                <span>Wishlist</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="/account-my-preference" class="nav-link ">
                <span>Email Preferences</span>
            </a>
        </li>
    
                </ul>
                <ul class="group custom-menu">
                    <li class="has-sub">
                        <div>
                            <h4>Contact Us</h4>
                        </div>
                        <div class="custom-sub-menu child-menu-container">
                            <p class="back-to">back to main</p>
                            <div class="sub-menu-wrapper">
                                <ul>
                                    
                                        
        <li class="link-item-menu ">
            <a href="/contact-us" class="nav-link chat-us">
                <span>Chat with us</span>
            </a>
        </li>
    
        <li class="link-item-menu ">
            <a href="tel:+1300608003" class="nav-link call-us">
                <span>Call us</span>
            </a>
        </li>
    
        <li class="link-item-menu email-us">
            <a href="mailto:sales@petcircle.com.au" class="nav-link email-us">
                <span>Email</span>
            </a>
        </li>
    
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                        
        <li class="link-item-menu ">
            <a href="/faq" class="nav-link ">
                <span>FAQ</span>
            </a>
        </li>
    
        <li class="link-item-menu sign-out mobile">
            <a href="#" class="nav-link sign-out">
                <span>Logout</span>
            </a>
        </li>
    
                </ul>
            </div>
        </nav>
    </div>
    <div id="free-shipping-promo-popup" class="white-popup mfp-hide"></div>
    <a href="#" id="free-shipping-promo-link" class="hiddenSection"></a>
</div>
<div class="mobile-nav-overlay"></div>



<div id="add-to-cart-popup" class="white-popup mfp-hide">
	
</div>

	</header>