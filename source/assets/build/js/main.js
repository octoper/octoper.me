(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/main"],{

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var quicklink__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! quicklink */ \"./node_modules/quicklink/dist/quicklink.mjs\");\n/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! alpinejs */ \"./node_modules/alpinejs/dist/alpine.js\");\n/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(alpinejs__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\nwindow.ToggleDark = function () {\n  return {\n    mode: '',\n    toggle: function toggle() {\n      if (this.mode == 'light') {\n        this.mode = 'dark';\n        localStorage.setItem('mode', this.mode);\n        document.querySelector('html').classList.add('mode-dark');\n      } else {\n        this.mode = 'light';\n        localStorage.setItem('mode', this.mode);\n        document.querySelector('html').classList.remove('mode-dark');\n      }\n    },\n    created: function created() {\n      if (localStorage.getItem('mode') == 'dark') {\n        this.mode = 'dark';\n        document.querySelector('html').classList.add('mode-dark');\n      } else {\n        this.mode = 'light';\n        document.querySelector('html').classList.remove('mode-dark');\n      }\n    }\n  };\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zb3VyY2UvX2Fzc2V0cy9qcy9tYWluLmpzPzA1MjMiXSwibmFtZXMiOlsid2luZG93IiwiVG9nZ2xlRGFyayIsIm1vZGUiLCJ0b2dnbGUiLCJsb2NhbFN0b3JhZ2UiLCJzZXRJdGVtIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiY2xhc3NMaXN0IiwiYWRkIiwicmVtb3ZlIiwiY3JlYXRlZCIsImdldEl0ZW0iXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTs7QUFFQUEsTUFBTSxDQUFDQyxVQUFQLEdBQW9CLFlBQU07QUFDekIsU0FBTztBQUNOQyxRQUFJLEVBQUUsRUFEQTtBQUVOQyxVQUZNLG9CQUVHO0FBQ1IsVUFBSSxLQUFLRCxJQUFMLElBQWEsT0FBakIsRUFBMEI7QUFDekIsYUFBS0EsSUFBTCxHQUFZLE1BQVo7QUFDQUUsb0JBQVksQ0FBQ0MsT0FBYixDQUFxQixNQUFyQixFQUE2QixLQUFLSCxJQUFsQztBQUNBSSxnQkFBUSxDQUFDQyxhQUFULENBQXVCLE1BQXZCLEVBQStCQyxTQUEvQixDQUF5Q0MsR0FBekMsQ0FBNkMsV0FBN0M7QUFDQSxPQUpELE1BSU87QUFDTixhQUFLUCxJQUFMLEdBQVksT0FBWjtBQUNBRSxvQkFBWSxDQUFDQyxPQUFiLENBQXFCLE1BQXJCLEVBQTZCLEtBQUtILElBQWxDO0FBQ0FJLGdCQUFRLENBQUNDLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQS9CLENBQXlDRSxNQUF6QyxDQUFnRCxXQUFoRDtBQUNBO0FBQ0QsS0FaSztBQWFOQyxXQWJNLHFCQWFLO0FBQ1YsVUFBSVAsWUFBWSxDQUFDUSxPQUFiLENBQXFCLE1BQXJCLEtBQWdDLE1BQXBDLEVBQTRDO0FBQzVDLGFBQUtWLElBQUwsR0FBWSxNQUFaO0FBQ0FJLGdCQUFRLENBQUNDLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQS9CLENBQXlDQyxHQUF6QyxDQUE2QyxXQUE3QztBQUNDLE9BSEQsTUFHTztBQUNOLGFBQUtQLElBQUwsR0FBWSxPQUFaO0FBQ0FJLGdCQUFRLENBQUNDLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQS9CLENBQXlDRSxNQUF6QyxDQUFnRCxXQUFoRDtBQUNBO0FBQ0Q7QUFyQkssR0FBUDtBQXVCQSxDQXhCRCIsImZpbGUiOiIuL3NvdXJjZS9fYXNzZXRzL2pzL21haW4uanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgeyBsaXN0ZW4gfSBmcm9tIFwicXVpY2tsaW5rXCI7XG5pbXBvcnQgJ2FscGluZWpzJztcblxud2luZG93LlRvZ2dsZURhcmsgPSAoKSA9PiB7XG5cdHJldHVybiB7XG5cdFx0bW9kZTogJycsXG5cdFx0dG9nZ2xlKCkge1xuXHRcdFx0aWYgKHRoaXMubW9kZSA9PSAnbGlnaHQnKSB7XG5cdFx0XHRcdHRoaXMubW9kZSA9ICdkYXJrJztcblx0XHRcdFx0bG9jYWxTdG9yYWdlLnNldEl0ZW0oJ21vZGUnLCB0aGlzLm1vZGUpO1xuXHRcdFx0XHRkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdodG1sJykuY2xhc3NMaXN0LmFkZCgnbW9kZS1kYXJrJyk7XG5cdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHR0aGlzLm1vZGUgPSAnbGlnaHQnO1xuXHRcdFx0XHRsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgnbW9kZScsIHRoaXMubW9kZSk7XG5cdFx0XHRcdGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2h0bWwnKS5jbGFzc0xpc3QucmVtb3ZlKCdtb2RlLWRhcmsnKTtcblx0XHRcdH1cblx0XHR9LFxuXHRcdGNyZWF0ZWQgKCkge1xuXHRcdFx0aWYgKGxvY2FsU3RvcmFnZS5nZXRJdGVtKCdtb2RlJykgPT0gJ2RhcmsnKSB7XG5cdFx0XHR0aGlzLm1vZGUgPSAnZGFyayc7XG5cdFx0XHRkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdodG1sJykuY2xhc3NMaXN0LmFkZCgnbW9kZS1kYXJrJyk7XG5cdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHR0aGlzLm1vZGUgPSAnbGlnaHQnO1xuXHRcdFx0XHRkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdodG1sJykuY2xhc3NMaXN0LnJlbW92ZSgnbW9kZS1kYXJrJyk7XG5cdFx0XHR9XG5cdFx0fVxuXHR9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./source/_assets/js/main.js\n");

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