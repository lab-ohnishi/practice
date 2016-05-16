window.addEventListener("load",function(){
    'use strict';
    
	var alphabet = [];
	var rest = [];
	var history = [];
	var result;
	var result_id = "#result";
	var rest_id = "#rest";
	var histories_id = "#histories";

	function initialize(){
		var unicode_a = 97,
			unicode_z = 122;
		for(var i=unicode_a; i<=unicode_z; i++){
			alphabet.push(String.fromCharCode(i));
		}	
		rest = [].concat(alphabet);
	
		viewGacha(result, rest, history);
	}

	function getGacha(){
		return alphabet[Math.floor(Math.random() * alphabet.length)];
	}
	
	function updateRest(result){
		rest.some(function(target, i){
			if (target===result) rest.splice(i,1);
		});
		return rest;
	}
	
	function addHistory(result){
		history.unshift(result);
		return history;
	}
	
	function viewGacha(result, rest, history){
		$(result_id).text(result);
		$(rest_id).text(rest);
		$(histories_id).text(history);
	}
	
	$(function() {
		initialize();
	});
	
	$('#start').click(function() {
		result = getGacha();
		rest = updateRest(result);
		history = addHistory(result);
		viewGacha(result, rest, history);
	});
});
