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
	__vue_script__ = __webpack_require__(3)
	if (Object.keys(__vue_script__).some(function (key) { return key !== "default" && key !== "__esModule" })) {
	  console.warn("[vue-loader] packages\\violoncello\\theme_orchestra\\app\\components\\site-theme.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(4)
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
	  var id = "_v-00ea937d/site-theme.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ }),
/* 1 */,
/* 2 */,
/* 3 */
/***/ (function(module, exports) {

	'use strict';

	module.exports = {

	    section: {
	        label: 'Theme',
	        icon: 'pk-icon-large-brush',
	        priority: 15
	    },

	    data: function data() {
	        return _.extend({ config: {} }, window.$theme);
	    },

	    events: {

	        save: function save() {

	            this.$http.post('admin/system/settings/config', { name: this.name, config: this.config }).catch(function (res) {
	                this.$notify(res.data, 'danger');
	            });
	        }

	    }

	};

	window.Site.components['site-theme'] = module.exports;

/***/ }),
/* 4 */
/***/ (function(module, exports) {

	module.exports = "\n\n<div class=\"uk-margin uk-flex uk-flex-space-between uk-flex-wrap\" data-uk-margin>\n  <div data-uk-margin>\n      <button class=\"uk-button uk-button-primary\" type=\"submit\">{{ 'Save' | trans }}</button>\n  </div>\n</div>\n\n<div class=\"uk-block uk-block-secondary uk-text-center\">\n  <h1 class=\"uk-contrast\">Violoncello Theme Settings</h1>\n</div>\n\n<div class=\"uk-block uk-block-muted\" style=\"border:1px solid #ede7e7; padding: 10px;\">\n  <div class=\"uk-form uk-form-horizontal\">\n    <h3>\n      Social Links\n    </h3>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Facebook Url</label>\n        <div class=\"uk-form-controls\">\n            <input class=\"uk-width-medium\" v-model=\"config.facebook\" type=\"url\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Twitter Url</label>\n        <div class=\"uk-form-controls\">\n            <input class=\"uk-width-medium\" v-model=\"config.twitter\" type=\"url\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Instagram Url</label>\n        <div class=\"uk-form-controls\">\n            <input class=\"uk-width-medium\" v-model=\"config.instagram\" type=\"url\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Github Url</label>\n        <div class=\"uk-form-controls\">\n            <input class=\"uk-width-medium\" v-model=\"config.github\" type=\"url\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Youtube Url</label>\n        <div class=\"uk-form-controls\">\n            <input class=\"uk-width-medium\" v-model=\"config.youtube\" type=\"url\">\n        </div>\n    </div>\n    <hr />\n    <h3>\n      Second Logo\n    </h3>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Second Logo</label>\n        <div class=\"uk-form-controls\">\n            <input-image :source.sync=\"config.second_logo\"></input-image>\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Link for Second Logo</label>\n        <div class=\"uk-form-controls\">\n          <input class=\"uk-width-medium\" v-model=\"config.url_second_logo\" type=\"text\">\n        </div>\n    </div>\n  </div>\n</div>\n\n";

/***/ })
/******/ ]);
