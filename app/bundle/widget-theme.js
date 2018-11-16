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
	  console.warn("[vue-loader] packages\\violoncello\\theme_orchestra\\app\\components\\widget-theme.vue: named exports in *.vue files are ignored.")}
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

	module.exports = "\n\n<div class=\"uk-block uk-block-secondary uk-text-center\">\n  <h1 class=\"uk-contrast\">Violoncello Widget Settings</h1>\n</div>\n\n<div class=\"uk-block uk-block-muted\" style=\"border:1px solid #ede7e7; padding: 10px;\">\n  <div class=\"uk-form uk-form-horizontal\">\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Widget Title Hide</label>\n        <div class=\"uk-form-controls\">\n          <input class=\"uk-width-medium\" v-model=\"widget.theme.title_hide\" type=\"checkbox\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Card Style</label>\n        <div class=\"uk-form-controls\">\n          <select class=\"uk-width-1-2\" v-model=\"widget.theme.card_style\">\n            <option value=\"\">No Style</option>\n            <option value=\"uk-card-default\">.uk-card-default</option>\n            <option value=\"uk-card-primary\">.uk-card-primary</option>\n            <option value=\"uk-card-secondary\">.uk-card-secondary</option>\n          </select>\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Card Padding</label>\n        <div class=\"uk-form-controls\">\n          <select class=\"uk-width-1-2\" v-model=\"widget.theme.card_padding\">\n            <option value=\"\">No Padding</option>\n            <option value=\"uk-card-body\">.uk-card-body</option>\n          </select>\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Image Link</label>\n        <div class=\"uk-form-controls\">\n            <input class=\"uk-width-1-2\" v-model=\"widget.theme.image_link\" type=\"text\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n      <label class=\"uk-form-label\" for=\"form-h-it\">Card Background Image</label>\n      <div class=\"uk-form-controls\">\n        <input-image :source.sync=\"widget.theme.card_image\"></input-image>\n      </div>\n    </div>\n  </div>\n</div>\n\n";

/***/ })
/******/ ]);