/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./app/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./app/index.js":
/*!**********************!*\
  !*** ./app/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _recipe_block__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./recipe-block */ \"./app/recipe-block/index.js\");\n/* harmony import */ var _recipe_block__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_recipe_block__WEBPACK_IMPORTED_MODULE_0__);\n// Main File\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9hcHAvaW5kZXguanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hcHAvaW5kZXguanM/ZTkyNSJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBNYWluIEZpbGVcbmltcG9ydCAnLi9yZWNpcGUtYmxvY2snOyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQTtBQUFBO0FBQUE7Iiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./app/index.js\n");

/***/ }),

/***/ "./app/recipe-block/index.js":
/*!***********************************!*\
  !*** ./app/recipe-block/index.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/babel-loader/lib/index.js):\\nSyntaxError: /opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/app/recipe-block/index.js: Support for the experimental syntax 'jsx' isn't currently enabled (29:16):\\n\\n\\u001b[0m \\u001b[90m 27 |\\u001b[39m     edit\\u001b[33m:\\u001b[39m (props) \\u001b[33m=>\\u001b[39m { \\u001b[90m// props conatain the data and functions that you can use to send the data back\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 28 |\\u001b[39m         console\\u001b[33m.\\u001b[39mlog(props)\\u001b[33m;\\u001b[39m\\u001b[0m\\n\\u001b[0m\\u001b[31m\\u001b[1m>\\u001b[22m\\u001b[39m\\u001b[90m 29 |\\u001b[39m         \\u001b[36mreturn\\u001b[39m \\u001b[33m<\\u001b[39m\\u001b[33mp\\u001b[39m\\u001b[33m>\\u001b[39m\\u001b[33mHello\\u001b[39m \\u001b[33mWorld\\u001b[39m\\u001b[33m!\\u001b[39m\\u001b[33m<\\u001b[39m\\u001b[33m/\\u001b[39m\\u001b[33mp\\u001b[39m\\u001b[33m>\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m    |\\u001b[39m                \\u001b[31m\\u001b[1m^\\u001b[22m\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 30 |\\u001b[39m     }\\u001b[33m,\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 31 |\\u001b[39m     save\\u001b[33m:\\u001b[39m (props) \\u001b[33m=>\\u001b[39m {\\u001b[0m\\n\\u001b[0m \\u001b[90m 32 |\\u001b[39m         \\u001b[36mreturn\\u001b[39m \\u001b[33m<\\u001b[39m\\u001b[33mp\\u001b[39m\\u001b[33m>\\u001b[39m\\u001b[33mHello\\u001b[39m \\u001b[33mWorld\\u001b[39m\\u001b[33m!\\u001b[39m\\u001b[33m<\\u001b[39m\\u001b[33m/\\u001b[39m\\u001b[33mp\\u001b[39m\\u001b[33m>\\u001b[39m\\u001b[0m\\n\\nAdd @babel/preset-react (https://git.io/JfeDR) to the 'presets' section of your Babel config to enable transformation.\\nIf you want to leave it as-is, add @babel/plugin-syntax-jsx (https://git.io/vb4yA) to the 'plugins' section to enable parsing.\\n    at Parser._raise (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:476:17)\\n    at Parser.raiseWithData (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:469:17)\\n    at Parser.expectOnePlugin (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:3820:18)\\n    at Parser.parseExprAtom (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12577:18)\\n    at Parser.parseExprSubscripts (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12149:23)\\n    at Parser.parseUpdate (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12129:21)\\n    at Parser.parseMaybeUnary (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12104:23)\\n    at Parser.parseMaybeUnaryOrPrivate (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11901:61)\\n    at Parser.parseExprOps (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11908:23)\\n    at Parser.parseMaybeConditional (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11878:23)\\n    at Parser.parseMaybeAssign (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11833:21)\\n    at Parser.parseExpressionBase (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11769:23)\\n    at /opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11763:39\\n    at Parser.allowInAnd (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:13817:16)\\n    at Parser.parseExpression (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11763:17)\\n    at Parser.parseReturnStatement (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:14518:28)\\n    at Parser.parseStatementContent (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:14167:21)\\n    at Parser.parseStatement (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:14113:17)\\n    at Parser.parseBlockOrModuleBlockBody (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:14739:25)\\n    at Parser.parseBlockBody (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:14730:10)\\n    at Parser.parseBlock (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:14714:10)\\n    at Parser.parseFunctionBody (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:13440:24)\\n    at Parser.parseArrowExpression (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:13412:10)\\n    at Parser.parseParenAndDistinguishExpression (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12915:12)\\n    at Parser.parseExprAtom (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12476:23)\\n    at Parser.parseExprSubscripts (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12149:23)\\n    at Parser.parseUpdate (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12129:21)\\n    at Parser.parseMaybeUnary (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:12104:23)\\n    at Parser.parseMaybeUnaryOrPrivate (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11901:61)\\n    at Parser.parseExprOps (/opt/lampp/htdocs/udemy/wp-content/plugins/recipe/blocks/node_modules/@babel/parser/lib/index.js:11908:23)\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9hcHAvcmVjaXBlLWJsb2NrL2luZGV4LmpzLmpzIiwic291cmNlcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./app/recipe-block/index.js\n");

/***/ })

/******/ });