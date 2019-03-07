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
	__vue_script__ = __webpack_require__(1)
	if (Object.keys(__vue_script__).some(function (key) { return key !== "default" && key !== "__esModule" })) {
	  console.warn("[vue-loader] app\\components\\node-theme.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(2)
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
	  var id = "_v-98e51710/node-theme.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ }),
/* 1 */
/***/ (function(module, exports) {

	'use strict';

	module.exports = {

	    section: {
	        label: 'Config',
	        priority: 90
	    },

	    props: ['node']

	};

	window.Site.components['node-theme'] = module.exports;

/***/ }),
/* 2 */
/***/ (function(module, exports) {

	module.exports = "\n\n<div class=\"uk-block uk-block-default uk-text-center\">\n  <h1>Violoncello Page Settings</h1>\n</div>\n\n<div class=\"uk-block uk-block-muted\" style=\"border:1px solid #ede7e7; padding: 10px;\">\n  <div class=\"uk-form uk-form-horizontal\">\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Page type</label>\n        <div class=\"uk-form-controls\">\n          <select class=\"uk-width-1-2\" v-model=\"node.theme.page_type\">\n            <option value=\"\">Default</option>\n            <option value=\"home\">Home</option>\n            <option value=\"archive\">Archive</option>\n            <option value=\"about\">About</option>\n          </select>\n        </div>\n    </div>\n    <div v-if=\"node.theme.page_type === 'about'\">\n      <hr>\n      <div class=\"uk-form-row\">\n          <label class=\"uk-form-label\" for=\"form-h-it\">Show about images</label>\n          <div class=\"uk-form-controls\">\n            <input class=\"uk-width-medium\" v-model=\"node.theme.about_images\" type=\"checkbox\">\n          </div>\n      </div>\n      <div v-if=\"node.theme.about_images\" class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Folder with images</label>\n        <div class=\"uk-form-controls\">\n          <input-link class=\"uk-width-1-2\" :link.sync=\"node.theme.image_folder\"></input-link>\n          <p>Make sure to select a folder and not a file or URL here.<br>The folder should only contain the images you want to see on the about page (no other files/subfolders). The images are ordered alphabetically by name.</p>\n        </div>\n      </div>\n\n      <div class=\"uk-form-row\">\n          <label class=\"uk-form-label\" for=\"form-h-it\">Show about videos</label>\n          <div class=\"uk-form-controls\">\n            <input class=\"uk-width-medium\" v-model=\"node.theme.about_videos\" type=\"checkbox\">\n          </div>\n      </div>\n      <div v-if=\"node.theme.about_videos\" class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Link(s?)</label>\n        <div v-for=\"(key, video_link) in node.theme.about_video_links\" class=\"uk-form-controls\">\n          <input-link class=\"uk-width-1-2\" :link.sync=\"node.theme.about_video_links[key]\"></input-link>\n        </div>\n        <div class=\"uk-form-controls\">\n          <input-link id=\"new\" class=\"uk-width-1-2\" :link.sync=\"node.theme.about_video_links[node.theme.about_video_links.length]\"></input-link>\n        </div>\n      </div>\n\n\n      <hr>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Hide site title</label>\n        <div class=\"uk-form-controls\">\n          <input class=\"uk-width-medium\" v-model=\"node.theme.title_hide\" type=\"checkbox\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n        <label class=\"uk-form-label\" for=\"form-h-it\">Remove main area margin</label>\n        <div class=\"uk-form-controls\">\n          <input class=\"uk-width-medium\" v-model=\"node.theme.margin_remove\" type=\"checkbox\">\n        </div>\n    </div>\n    <div class=\"uk-form-row\">\n      <label class=\"uk-form-label\" for=\"form-h-it\">Page background image</label>\n      <div class=\"uk-form-controls\">\n        <input-image :source.sync=\"node.theme.page_image\"></input-image>\n      </div>\n    </div>\n  </div>\n</div>\n\n";

/***/ })
/******/ ]);