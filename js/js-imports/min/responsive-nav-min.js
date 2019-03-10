!function(e,t,n){"use strict";var i=function(i,s){var o=!!t.getComputedStyle;o||(t.getComputedStyle=function(e){return this.el=e,this.getPropertyValue=function(t){var n=/(\-([a-z]){1})/g;return"float"===t&&(t="styleFloat"),n.test(t)&&(t=t.replace(n,function(){return arguments[2].toUpperCase()})),e.currentStyle[t]?e.currentStyle[t]:null},this});var a=function(e,t,n,i){if("addEventListener"in e)try{e.addEventListener(t,n,i)}catch(s){if("object"!=typeof n||!n.handleEvent)throw s;e.addEventListener(t,function(e){n.handleEvent.call(n,e)},i)}else"attachEvent"in e&&("object"==typeof n&&n.handleEvent?e.attachEvent("on"+t,function(){n.handleEvent.call(n)}):e.attachEvent("on"+t,n))},r=function(e,t,n,i){if("removeEventListener"in e)try{e.removeEventListener(t,n,i)}catch(s){if("object"!=typeof n||!n.handleEvent)throw s;e.removeEventListener(t,function(e){n.handleEvent.call(n,e)},i)}else"detachEvent"in e&&("object"==typeof n&&n.handleEvent?e.detachEvent("on"+t,function(){n.handleEvent.call(n)}):e.detachEvent("on"+t,n))},c=function(e){if(e.children.length<1)throw new Error("The Nav container has no containing elements");for(var t=[],n=0;n<e.children.length;n++)1===e.children[n].nodeType&&t.push(e.children[n]);return t},l=function(e,t){for(var n in t)e.setAttribute(n,t[n])},h=function(e,t){0!==e.className.indexOf(t)&&(e.className+=" "+t,e.className=e.className.replace(/(^\s*)|(\s*$)/g,""))},u=function(e,t){var n=new RegExp("(\\s|^)"+t+"(\\s|$)");e.className=e.className.replace(n," ").replace(/(^\s*)|(\s*$)/g,"")},p=function(e,t,n){for(var i=0;i<e.length;i++)t.call(n,i,e[i])},d,v,f,m=e.createElement("style"),g=e.documentElement,y,E,C,_=function(t,n){var i;this.options={animate:!0,transition:284,label:"Menu",insert:"before",customToggle:"",closeOnNavClick:!1,openPos:"relative",navClass:"nav-collapse",navActiveClass:"js-nav-active",jsClass:"js",init:function(){},open:function(){},close:function(){}};for(i in n)this.options[i]=n[i];if(h(g,this.options.jsClass),this.wrapperEl=t.replace("#",""),e.getElementById(this.wrapperEl))this.wrapper=e.getElementById(this.wrapperEl);else{if(!e.querySelector(this.wrapperEl))throw new Error("The nav element you are trying to select doesn't exist");this.wrapper=e.querySelector(this.wrapperEl)}this.wrapper.inner=c(this.wrapper),v=this.options,d=this.wrapper,this._init(this)};return _.prototype={destroy:function(){this._removeStyles(),u(d,"closed"),u(d,"opened"),u(d,v.navClass),u(d,v.navClass+"-"+this.index),u(g,v.navActiveClass),d.removeAttribute("style"),d.removeAttribute("aria-hidden"),r(t,"resize",this,!1),r(t,"focus",this,!1),r(e.body,"touchmove",this,!1),r(f,"touchstart",this,!1),r(f,"touchend",this,!1),r(f,"mouseup",this,!1),r(f,"keyup",this,!1),r(f,"click",this,!1),v.customToggle?f.removeAttribute("aria-hidden"):f.parentNode.removeChild(f)},toggle:function(){y===!0&&(C?this.close():this.open())},open:function(){C||(u(d,"closed"),h(d,"opened"),h(g,v.navActiveClass),h(f,"active"),d.style.position=v.openPos,l(d,{"aria-hidden":"false"}),C=!0,v.open())},close:function(){C&&(h(d,"closed"),u(d,"opened"),u(g,v.navActiveClass),u(f,"active"),l(d,{"aria-hidden":"true"}),v.animate?(y=!1,setTimeout(function(){d.style.position="absolute",y=!0},v.transition+10)):d.style.position="absolute",C=!1,v.close())},resize:function(){"none"!==t.getComputedStyle(f,null).getPropertyValue("display")?(E=!0,l(f,{"aria-hidden":"false"}),d.className.match(/(^|\s)closed(\s|$)/)&&(l(d,{"aria-hidden":"true"}),d.style.position="absolute"),this._createStyles(),this._calcHeight()):(E=!1,l(f,{"aria-hidden":"true"}),l(d,{"aria-hidden":"false"}),d.style.position=v.openPos,this._removeStyles())},handleEvent:function(e){var n=e||t.event;switch(n.type){case"touchstart":this._onTouchStart(n);break;case"touchmove":this._onTouchMove(n);break;case"touchend":case"mouseup":this._onTouchEnd(n);break;case"click":this._preventDefault(n);break;case"keyup":this._onKeyUp(n);break;case"focus":case"resize":this.resize(n)}},_init:function(){this.index=n++,h(d,v.navClass),h(d,v.navClass+"-"+this.index),h(d,"closed"),y=!0,C=!1,this._closeOnNavClick(),this._createToggle(),this._transitions(),this.resize();var i=this;setTimeout(function(){i.resize()},20),a(t,"resize",this,!1),a(t,"focus",this,!1),a(e.body,"touchmove",this,!1),a(f,"touchstart",this,!1),a(f,"touchend",this,!1),a(f,"mouseup",this,!1),a(f,"keyup",this,!1),a(f,"click",this,!1),v.init()},_createStyles:function(){m.parentNode||(m.type="text/css",e.getElementsByTagName("head")[0].appendChild(m))},_removeStyles:function(){m.parentNode&&m.parentNode.removeChild(m)},_createToggle:function(){if(v.customToggle){var t=v.customToggle.replace("#","");if(e.getElementById(t))f=e.getElementById(t);else{if(!e.querySelector(t))throw new Error("The custom nav toggle you are trying to select doesn't exist");f=e.querySelector(t)}}else{var n=e.createElement("a");n.innerHTML=v.label,l(n,{href:"#","class":"nav-toggle"}),"after"===v.insert?d.parentNode.insertBefore(n,d.nextSibling):d.parentNode.insertBefore(n,d),f=n}},_closeOnNavClick:function(){if(v.closeOnNavClick){var e=d.getElementsByTagName("a"),t=this;p(e,function(n,i){a(e[n],"click",function(){E&&t.toggle()},!1)})}},_preventDefault:function(e){return e.preventDefault?(e.stopImmediatePropagation&&e.stopImmediatePropagation(),e.preventDefault(),e.stopPropagation(),!1):void(e.returnValue=!1)},_onTouchStart:function(e){Event.prototype.stopImmediatePropagation||this._preventDefault(e),this.startX=e.touches[0].clientX,this.startY=e.touches[0].clientY,this.touchHasMoved=!1,r(f,"mouseup",this,!1)},_onTouchMove:function(e){(Math.abs(e.touches[0].clientX-this.startX)>10||Math.abs(e.touches[0].clientY-this.startY)>10)&&(this.touchHasMoved=!0)},_onTouchEnd:function(e){if(this._preventDefault(e),E&&!this.touchHasMoved){if("touchend"===e.type)return void this.toggle();var n=e||t.event;3!==n.which&&2!==n.button&&this.toggle()}},_onKeyUp:function(e){var n=e||t.event;13===n.keyCode&&this.toggle()},_transitions:function(){if(v.animate){var e=d.style,t="max-height "+v.transition+"ms";e.WebkitTransition=e.MozTransition=e.OTransition=e.transition=t}},_calcHeight:function(){for(var e=0,t=0;t<d.inner.length;t++)e+=d.inner[t].offsetHeight;var n="."+v.jsClass+" ."+v.navClass+"-"+this.index+".opened{max-height:"+e+"px !important} ."+v.jsClass+" ."+v.navClass+"-"+this.index+".opened.dropdown-active {max-height:9999px !important}";m.styleSheet?m.styleSheet.cssText=n:m.innerHTML=n,n=""}},new _(i,s)};"undefined"!=typeof module&&module.exports?module.exports=i:t.responsiveNav=i}(document,window,0);