!function r(e,o,t){function i(n,u){if(!o[n]){if(!e[n]){var f="function"==typeof require&&require;if(!u&&f)return f(n,!0);if(a)return a(n,!0);var s=new Error("Cannot find module '"+n+"'");throw s.code="MODULE_NOT_FOUND",s}var l=o[n]={exports:{}};e[n][0].call(l.exports,function(r){var o=e[n][1][r];return i(o||r)},l,l.exports,r,e,o,t)}return o[n].exports}for(var a="function"==typeof require&&require,n=0;n<t.length;n++)i(t[n]);return i}({1:[function(r,e,o){r("./slider")},{"./slider":2}],2:[function(r,e,o){$(".owl-carousel").owlCarousel({autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,smartSpeed:1e3,loop:!0,dots:!1,navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],responsive:{0:{items:1},600:{items:2},1200:{items:3}}})},{}]},{},[1]);