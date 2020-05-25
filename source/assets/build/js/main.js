(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/main"],{

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var quicklink__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! quicklink */ \"./node_modules/quicklink/dist/quicklink.mjs\");\n/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! alpinejs */ \"./node_modules/alpinejs/dist/alpine.js\");\n/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(alpinejs__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\nwindow.ToggleDark = function () {\n  return {\n    mode: '',\n    toggle: function toggle() {\n      if (this.mode == 'light') {\n        this.mode = 'dark';\n        localStorage.setItem('mode', this.mode);\n        document.querySelector('html').classList.add('mode-dark');\n      } else {\n        this.mode = 'light';\n        localStorage.setItem('mode', this.mode);\n        document.querySelector('html').classList.remove('mode-dark');\n      }\n    },\n    created: function created() {\n      if (localStorage.getItem('mode') == 'dark') {\n        this.mode = 'dark';\n        document.querySelector('html').classList.add('mode-dark');\n      } else {\n        this.mode = 'light';\n        document.querySelector('html').classList.remove('mode-dark');\n      }\n    }\n  };\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zb3VyY2UvX2Fzc2V0cy9qcy9tYWluLmpzPzA1MjMiXSwibmFtZXMiOlsid2luZG93IiwiVG9nZ2xlRGFyayIsIm1vZGUiLCJ0b2dnbGUiLCJsb2NhbFN0b3JhZ2UiLCJzZXRJdGVtIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiY2xhc3NMaXN0IiwiYWRkIiwicmVtb3ZlIiwiY3JlYXRlZCIsImdldEl0ZW0iXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTs7QUFFQUEsTUFBTSxDQUFDQyxVQUFQLEdBQW9CLFlBQU07QUFDekIsU0FBTztBQUNOQyxRQUFJLEVBQUUsRUFEQTtBQUVOQyxVQUZNLG9CQUVHO0FBQ1IsVUFBSSxLQUFLRCxJQUFMLElBQWEsT0FBakIsRUFBMEI7QUFDekIsYUFBS0EsSUFBTCxHQUFZLE1BQVo7QUFDQUUsb0JBQVksQ0FBQ0MsT0FBYixDQUFxQixNQUFyQixFQUE2QixLQUFLSCxJQUFsQztBQUNBSSxnQkFBUSxDQUFDQyxhQUFULENBQXVCLE1BQXZCLEVBQStCQyxTQUEvQixDQUF5Q0MsR0FBekMsQ0FBNkMsV0FBN0M7QUFDQSxPQUpELE1BSU87QUFDTixhQUFLUCxJQUFMLEdBQVksT0FBWjtBQUNBRSxvQkFBWSxDQUFDQyxPQUFiLENBQXFCLE1BQXJCLEVBQTZCLEtBQUtILElBQWxDO0FBQ0FJLGdCQUFRLENBQUNDLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQS9CLENBQXlDRSxNQUF6QyxDQUFnRCxXQUFoRDtBQUNBO0FBQ0QsS0FaSztBQWFOQyxXQWJNLHFCQWFLO0FBQ1YsVUFBSVAsWUFBWSxDQUFDUSxPQUFiLENBQXFCLE1BQXJCLEtBQWdDLE1BQXBDLEVBQTRDO0FBQzVDLGFBQUtWLElBQUwsR0FBWSxNQUFaO0FBQ0FJLGdCQUFRLENBQUNDLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQS9CLENBQXlDQyxHQUF6QyxDQUE2QyxXQUE3QztBQUNDLE9BSEQsTUFHTztBQUNOLGFBQUtQLElBQUwsR0FBWSxPQUFaO0FBQ0FJLGdCQUFRLENBQUNDLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQS9CLENBQXlDRSxNQUF6QyxDQUFnRCxXQUFoRDtBQUNBO0FBQ0Q7QUFyQkssR0FBUDtBQXVCQSxDQXhCRCIsImZpbGUiOiIuL3NvdXJjZS9fYXNzZXRzL2pzL21haW4uanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgXCJxdWlja2xpbmtcIjtcbmltcG9ydCAnYWxwaW5lanMnO1xuXG53aW5kb3cuVG9nZ2xlRGFyayA9ICgpID0+IHtcblx0cmV0dXJuIHtcblx0XHRtb2RlOiAnJyxcblx0XHR0b2dnbGUoKSB7XG5cdFx0XHRpZiAodGhpcy5tb2RlID09ICdsaWdodCcpIHtcblx0XHRcdFx0dGhpcy5tb2RlID0gJ2RhcmsnO1xuXHRcdFx0XHRsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgnbW9kZScsIHRoaXMubW9kZSk7XG5cdFx0XHRcdGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2h0bWwnKS5jbGFzc0xpc3QuYWRkKCdtb2RlLWRhcmsnKTtcblx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdHRoaXMubW9kZSA9ICdsaWdodCc7XG5cdFx0XHRcdGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdtb2RlJywgdGhpcy5tb2RlKTtcblx0XHRcdFx0ZG9jdW1lbnQucXVlcnlTZWxlY3RvcignaHRtbCcpLmNsYXNzTGlzdC5yZW1vdmUoJ21vZGUtZGFyaycpO1xuXHRcdFx0fVxuXHRcdH0sXG5cdFx0Y3JlYXRlZCAoKSB7XG5cdFx0XHRpZiAobG9jYWxTdG9yYWdlLmdldEl0ZW0oJ21vZGUnKSA9PSAnZGFyaycpIHtcblx0XHRcdHRoaXMubW9kZSA9ICdkYXJrJztcblx0XHRcdGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2h0bWwnKS5jbGFzc0xpc3QuYWRkKCdtb2RlLWRhcmsnKTtcblx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdHRoaXMubW9kZSA9ICdsaWdodCc7XG5cdFx0XHRcdGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2h0bWwnKS5jbGFzc0xpc3QucmVtb3ZlKCdtb2RlLWRhcmsnKTtcblx0XHRcdH1cblx0XHR9XG5cdH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./source/_assets/js/main.js\n");

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/*!***************************************!*\
  !*** ./source/_assets/sass/main.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zb3VyY2UvX2Fzc2V0cy9zYXNzL21haW4uc2Nzcz85Y2YxIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vc291cmNlL19hc3NldHMvc2Fzcy9tYWluLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./source/_assets/sass/main.scss\n");

/***/ }),

/***/ 0:
/*!*************************************************************************!*\
  !*** multi ./source/_assets/js/main.js ./source/_assets/sass/main.scss ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/octoper/code/private/octoper.me/source/_assets/js/main.js */"./source/_assets/js/main.js");
module.exports = __webpack_require__(/*! /home/octoper/code/private/octoper.me/source/_assets/sass/main.scss */"./source/_assets/sass/main.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);