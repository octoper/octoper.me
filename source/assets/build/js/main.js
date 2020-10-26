(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/main"],{

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var quicklink__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! quicklink */ "./node_modules/quicklink/dist/quicklink.mjs");
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! alpinejs */ "./node_modules/alpinejs/dist/alpine.js");
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(alpinejs__WEBPACK_IMPORTED_MODULE_1__);



window.ToggleDark = function () {
  return {
    mode: "",
    toggle: function toggle() {
      if (this.mode == "light") {
        this.mode = "dark";
        localStorage.setItem("mode", this.mode);
        document.querySelector("html").classList.add("mode-dark");
      } else {
        this.mode = "light";
        localStorage.setItem('mode', this.mode);
        document.querySelector('html').classList.remove('mode-dark');
      }
    },
    created: function created() {
      if (localStorage.getItem('mode') === 'dark') {
        this.mode = 'dark';
        document.querySelector('html').classList.add('mode-dark');
      } else {
        this.mode = 'light';
        document.querySelector('html').classList.remove('mode-dark');
      }
    }
  };
};

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/*!***************************************!*\
  !*** ./source/_assets/sass/main.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************************!*\
  !*** multi ./source/_assets/js/main.js ./source/_assets/sass/main.scss ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/octoper/code/octoper.me/source/_assets/js/main.js */"./source/_assets/js/main.js");
module.exports = __webpack_require__(/*! /home/octoper/code/octoper.me/source/_assets/sass/main.scss */"./source/_assets/sass/main.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);