"use strict";
(function(){
	
	// Find the sum of 2 numbers
	function sum(a, b) {
		return a + b;
	}
	// Subtract 2 numbers
	function subtract(a, b) {
		return a - b;
	}
	// Multiply 2 numbers
	function multi(a, b) {
		return a * b;
	}
	// Divide two numbers
	function divide(a, b) {
		if (a == 0 || b == 0) {
		alert("You are dividing by 0!");
		} else {
			return a / b;
		}
	}
	// Square a number without using *
	function square(a) {
		return Math.pow(a, 2);
	}
	// Sum 2 squares without using * or + 
	function sumTwoSquares(a, b) {
		return sum(square(a), square(b));
	}
	// Returns a boolean 
	function isNumeric(a, b) {
		if (isNaN(a) || isNaN(b)) {
			return "inputs must be numeric";
		} else {
			return a + b;
		}
	}



	console.log("This is the sum: " + sum(2, 2));
	console.log("This is the subtraction: " + subtract(12, 10));
	console.log("This is multiplied: " + multi(2, 5));
	console.log("This is divided: " + divide(90, 3));
	// console.log("This is divided by 0: " + divide(3, 0))
	console.log("This is squared: " + square(4));
	console.log("This is the sum of two squares: " + sumTwoSquares(2, 3));
	console.log("This is isNumeric: " + isNumeric(6, "tim"));
	console.log("This is isNumeric: " + isNumeric(6, 6));
})();