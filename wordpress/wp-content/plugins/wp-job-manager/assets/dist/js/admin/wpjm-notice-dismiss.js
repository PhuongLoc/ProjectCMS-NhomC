<<<<<<< HEAD
!function(){"use strict";var t={n:function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return t.d(e,{a:e}),e},d:function(n,e){for(var r in e)t.o(e,r)&&!t.o(n,r)&&Object.defineProperty(n,r,{enumerable:!0,get:e[r]})},o:function(t,n){return Object.prototype.hasOwnProperty.call(t,n)}},n=window.wp.domReady;function e(t,n){(null==n||n>t.length)&&(n=t.length);for(var e=0,r=new Array(n);e<n;e++)r[e]=t[e];return r}t.n(n)()((function(){var t,n=function(t,n){var r="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!r){if(Array.isArray(t)||(r=function(t,n){if(t){if("string"==typeof t)return e(t,n);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?e(t,n):void 0}}(t))||n&&t&&"number"==typeof t.length){r&&(t=r);var o=0,i=function(){};return{s:i,n:function(){return o>=t.length?{done:!0}:{done:!1,value:t[o++]}},e:function(t){throw t},f:i}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,c=!0,s=!1;return{s:function(){r=r.call(t)},n:function(){var t=r.next();return c=t.done,t},e:function(t){s=!0,a=t},f:function(){try{c||null==r.return||r.return()}finally{if(s)throw a}}}}(document.querySelectorAll(".wpjm-admin-notice"));try{for(n.s();!(t=n.n()).done;)t.value.addEventListener("click",(function(t){var n,e,r=t.target.closest(".wpjm-admin-notice");r&&r.dataset.dismissNonce&&r.dataset.dismissAction&&t.target.classList.contains("notice-dismiss")&&(n=r,e=new FormData,n.dataset.dismissNotice&&e.append("notice",n.dataset.dismissNotice),e.append("action",n.dataset.dismissAction),e.append("nonce",n.dataset.dismissNonce),fetch(ajaxurl,{method:"POST",body:e}))}))}catch(t){n.e(t)}finally{n.f()}}))}();
=======
!function(){"use strict";var t={};function n(t,n,e,r,o,i,a){try{var c=t[i](a),u=c.value}catch(t){return void e(t)}c.done?n(u):Promise.resolve(u).then(r,o)}t.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return t.d(e,{a:e}),e},t.d=function(n,e){for(var r in e)t.o(e,r)&&!t.o(n,r)&&Object.defineProperty(n,r,{enumerable:!0,get:e[r]})},t.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)};var e=window.regeneratorRuntime,r=t.n(e),o=window.wp.domReady;function i(t,n){(null==n||n>t.length)&&(n=t.length);for(var e=0,r=new Array(n);e<n;e++)r[e]=t[e];return r}t.n(o)()((function(){var t,e=function(){var t,e=(t=r().mark((function t(n){var e;return r().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e=new FormData,n.dataset.dismissNotice&&e.append("notice",n.dataset.dismissNotice),e.append("action",n.dataset.dismissAction),e.append("nonce",n.dataset.dismissNonce),fetch(ajaxurl,{method:"POST",body:e}),t.next=7,n.animate([{opacity:0}],100).finished;case 7:return t.next=9,n.animate([{opacity:0},{opacity:0,height:0,paddingTop:0,paddingBottom:0}],100).finished;case 9:n.remove();case 10:case"end":return t.stop()}}),t)})),function(){var e=this,r=arguments;return new Promise((function(o,i){var a=t.apply(e,r);function c(t){n(a,o,i,c,u,"next",t)}function u(t){n(a,o,i,c,u,"throw",t)}c(void 0)}))});return function(_x){return e.apply(this,arguments)}}(),o=function(t,n){var e="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!e){if(Array.isArray(t)||(e=function(t,n){if(t){if("string"==typeof t)return i(t,n);var e=Object.prototype.toString.call(t).slice(8,-1);return"Object"===e&&t.constructor&&(e=t.constructor.name),"Map"===e||"Set"===e?Array.from(t):"Arguments"===e||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e)?i(t,n):void 0}}(t))||n&&t&&"number"==typeof t.length){e&&(t=e);var r=0,o=function(){};return{s:o,n:function(){return r>=t.length?{done:!0}:{done:!1,value:t[r++]}},e:function(t){throw t},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,c=!0,u=!1;return{s:function(){e=e.call(t)},n:function(){var t=e.next();return c=t.done,t},e:function(t){u=!0,a=t},f:function(){try{c||null==e.return||e.return()}finally{if(u)throw a}}}}(document.querySelectorAll(".wpjm-admin-notice, .wpjm-admin-modal-notice"));try{var a=function(){var n=t.value;n.addEventListener("click",(function(t){return n.dataset.dismissNonce&&n.dataset.dismissAction&&t.target.classList.contains("wpjm-notice-dismiss")&&e(n),!0}))};for(o.s();!(t=o.n()).done;)a()}catch(t){o.e(t)}finally{o.f()}}))}();
>>>>>>> 2_5_VoThanhLuan
