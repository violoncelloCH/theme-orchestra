/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	var __vue_styles__ = {}
	__vue_script__ = __webpack_require__(5)
	if (Object.keys(__vue_script__).some(function (key) { return key !== "default" && key !== "__esModule" })) {
	  console.warn("[vue-loader] app\\components\\widget-theme.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(6)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	var __vue_options__ = typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports
	if (__vue_template__) {
	__vue_options__.template = __vue_template__
	}
	if (!__vue_options__.computed) __vue_options__.computed = {}
	Object.keys(__vue_styles__).forEach(function (key) {
	var module = __vue_styles__[key]
	__vue_options__.computed[key] = function () { return module }
	})
	if (false) {(function () {  module.hot.accept()
	  var hotAPI = require("vue-hot-reload-api")
	  hotAPI.install(require("vue"), false)
	  if (!hotAPI.compatible) return
	  var id = "_v-2b0215ba/widget-theme.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ }),
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */
/***/ (function(module, exports) {

	'use strict';

	module.exports = {
	    section: {
	        label: 'Theme',
	        priority: 90
	    },
	    props: ['widget', 'config']
	};
	window.Widgets.components['theme'] = module.exports;

/***/ }),
/* 6 */
/***/ (function(module, exports) {

	module.exports = "\n\n<div class=\"uk-block uk-block-default uk-text-center\">\n  <h1>Violoncello Widget Settings</h1>\n</div>\n<div class=\"uk-block uk-block-muted\" style=\"border:1px solid #ede7e7; padding: 10px;\">\n  <div class=\"uk-form uk-form-horizontal\">\n    <div v-if=\"widget.position == 'flyer' || widget.position =='flyerarchive'\">\n      <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Flyer image</label>\n        <div class=\"uk-form-controls\">\n          <input-image :source.sync=\"widget.theme.flyer_image\"></input-image>\n        </div>\n      </div>\n      <div class=\"uk-form-row\">\n          <label class=\"uk-form-label\" for=\"form-h-it\">Image link</label>\n          <div class=\"uk-form-controls\">\n              <input class=\"uk-width-1-2\" v-model=\"widget.theme.flyer_link\" type=\"text\">\n          </div>\n      </div>\n      <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Popup content</label>\n        <div class=\"uk-form-controls\">\n          <v-editor :value.sync=\"widget.theme.popup\" :options=\"{markdown : false}\"></v-editor>\n        </div>\n      </div>\n      <div class=\"uk-form-row\">\n          <label class=\"uk-form-label\" for=\"form-h-it\">Disable Popup</label>\n          <div class=\"uk-form-controls\">\n            <input class=\"uk-width-medium\" v-model=\"widget.theme.content_disabled\" type=\"checkbox\">\n          </div>\n      </div>\n      <hr>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Hide widget title</label>\n        <div class=\"uk-form-controls\">\n          <input class=\"uk-width-medium\" v-model=\"widget.theme.title_hide\" type=\"checkbox\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Card style</label>\n        <div class=\"uk-form-controls\">\n          <select class=\"uk-width-1-2\" v-model=\"widget.theme.card_style\">\n            <option value=\"\">no card (style)</option>\n            <option value=\"uk-card-default\">default card style</option>\n            <option value=\"uk-card-primary\">primary card style</option>\n            <option value=\"uk-card-secondary\">secondary card style</option>\n          </select>\n        </div>\n    </div>\n    <div v-if=\"widget.theme.card_style !== ''\" class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Card padding</label>\n        <div class=\"uk-form-controls\">\n          <select class=\"uk-width-1-2\" v-model=\"widget.theme.card_padding\">\n            <option value=\"\">no padding</option>\n            <option value=\"uk-card-body\">normal body padding</option>\n          </select>\n        </div>\n    </div>\n    <div v-if=\"widget.position !== 'flyer' && widget.position !== 'flyerarchive' class=\"uk-form-row\">\n      <label class=\"uk-form-label\" for=\"form-h-it\">Widget background image</label>\n      <div class=\"uk-form-controls\">\n        <input-image :source.sync=\"widget.theme.card_image\"></input-image>\n      </div>\n    </div>\n  </div>\n</div>\n\n";

/***/ })
/******/ ]);