<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";s:4087:"!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):t(jQuery)}((function(t){"use strict";var e=[],s=[],i={precision:100,elapse:!1,defer:!1};s.push(/^[0-9]*$/.source),s.push(/([0-9]{1,2}\/){2}[0-9]{4}( [0-9]{1,2}(:[0-9]{2}){2})?/.source),s.push(/[0-9]{4}([\/\-][0-9]{1,2}){2}( [0-9]{1,2}(:[0-9]{2}){2})?/.source),s=new RegExp(s.join("|"));var o={Y:"years",m:"months",n:"daysToMonth",d:"daysToWeek",w:"weeks",W:"weeksToMonth",H:"hours",M:"minutes",S:"seconds",D:"totalDays",I:"totalHours",N:"totalMinutes",T:"totalSeconds"},n=function(s,o,n){this.el=s,this.$el=t(s),this.interval=null,this.offset={},this.options=t.extend({},i),this.instanceNumber=e.length,e.push(this),this.$el.data("countdown-instance",this.instanceNumber),n&&("function"==typeof n?(this.$el.on("update.countdown",n),this.$el.on("stoped.countdown",n),this.$el.on("finish.countdown",n)):this.options=t.extend({},i,n)),this.setFinalDate(o),!1===this.options.defer&&this.start()};t.extend(n.prototype,{start:function(){null!==this.interval&&clearInterval(this.interval);var t=this;this.update(),this.interval=setInterval((function(){t.update.call(t)}),this.options.precision)},stop:function(){clearInterval(this.interval),this.interval=null,this.dispatchEvent("stoped")},toggle:function(){this.interval?this.stop():this.start()},pause:function(){this.stop()},resume:function(){this.start()},remove:function(){this.stop.call(this),e[this.instanceNumber]=null,delete this.$el.data().countdownInstance},setFinalDate:function(t){this.finalDate=function(t){if(t instanceof Date)return t;if(String(t).match(s))return String(t).match(/^[0-9]*$/)&&(t=Number(t)),String(t).match(/\-/)&&(t=String(t).replace(/\-/g,"/")),new Date(t);throw new Error("Couldn't cast `"+t+"` to a date object.")}(t)},update:function(){if(0!==this.$el.closest("html").length){var e,s=void 0!==t._data(this.el,"events"),i=new Date;e=this.finalDate.getTime()-i.getTime(),e=Math.ceil(e/1e3),e=!this.options.elapse&&e<0?0:Math.abs(e),this.totalSecsLeft!==e&&s&&(this.totalSecsLeft=e,this.elapsed=i>=this.finalDate,this.offset={seconds:this.totalSecsLeft%60,minutes:Math.floor(this.totalSecsLeft/60)%60,hours:Math.floor(this.totalSecsLeft/60/60)%24,days:Math.floor(this.totalSecsLeft/60/60/24)%7,daysToWeek:Math.floor(this.totalSecsLeft/60/60/24)%7,daysToMonth:Math.floor(this.totalSecsLeft/60/60/24%30.4368),weeks:Math.floor(this.totalSecsLeft/60/60/24/7),weeksToMonth:Math.floor(this.totalSecsLeft/60/60/24/7)%4,months:Math.floor(this.totalSecsLeft/60/60/24/30.4368),years:Math.abs(this.finalDate.getFullYear()-i.getFullYear()),totalDays:Math.floor(this.totalSecsLeft/60/60/24),totalHours:Math.floor(this.totalSecsLeft/60/60),totalMinutes:Math.floor(this.totalSecsLeft/60),totalSeconds:this.totalSecsLeft},this.options.elapse||0!==this.totalSecsLeft?this.dispatchEvent("update"):(this.stop(),this.dispatchEvent("finish")))}else this.remove()},dispatchEvent:function(e){var s,i=t.Event(e+".countdown");i.finalDate=this.finalDate,i.elapsed=this.elapsed,i.offset=t.extend({},this.offset),i.strftime=(s=this.offset,function(t){var e,i,n,a,h,l=t.match(/%(-|!)?[A-Z]{1}(:[^;]+;)?/gi);if(l)for(var r=0,c=l.length;r<c;++r){var f=l[r].match(/%(-|!)?([a-zA-Z]{1})(:[^;]+;)?/),u=(h=f[0].toString().replace(/([.?*+^$[\]\\(){}|-])/g,"\\$1"),new RegExp(h)),d=f[1]||"",p=f[3]||"",v=null;f=f[2],o.hasOwnProperty(f)&&(v=o[f],v=Number(s[v])),null!==v&&("!"===d&&(i=v,n=void 0,a=void 0,n="s",a="",(e=p)&&(1===(e=e.replace(/(:|;|\s)/gi,"").split(/\,/)).length?n=e[0]:(a=e[0],n=e[1])),v=Math.abs(i)>1?n:a),""===d&&v<10&&(v="0"+v.toString()),t=t.replace(u,v.toString()))}return t.replace(/%%/,"%")}),this.$el.trigger(i)}}),t.fn.countdown=function(){var s=Array.prototype.slice.call(arguments,0);return this.each((function(){var i=t(this).data("countdown-instance");if(void 0!==i){var o=e[i],a=s[0];n.prototype.hasOwnProperty(a)?o[a].apply(o,s.slice(1)):null===String(a).match(/^[$A-Z_][0-9A-Z_$]*$/i)?(o.setFinalDate.call(o,a),o.start()):t.error("Method %s does not exist on jQuery.countdown".replace(/\%s/gi,a))}else new n(this,s[0],s[1])}))}}));";s:6:"output";s:0:"";}