"use strict";

(function() {
var index = 0;

		//On load function
	window.onload = function() {
		//Calls a function that changes the words in the header
		var timer = setInterval(wordspin, 2000);

		//calls a function that creates a modal on nfc interaction
		var div = document.getElementById("nfc");
		if (typeof(div) != 'undefined' && div != null) {
			$(div).modal('show');
		}
	};

	function wordspin() {
		var words = ["a designer", "a student", "<s>an intern</s>", "a software engineer", "an eagle scout","a Husky", "a builder",  "an inventor", "a developer"];
		document.getElementById("spin").innerHTML = words[index];
		if(index == (words.length - 1)){
			index = 0;
		} else {
			index = index + 1;
		}
	}
})();