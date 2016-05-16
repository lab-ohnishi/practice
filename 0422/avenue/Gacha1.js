window.addEventListener("load",function(){
	var preset = [];
	var chara_rest = []; 
	var selected = '';
	var random_num;

	preset_num(preset);

	$('#start').click(function() {
		selected_num(random_num);
		histories(selected);
		rest(random_num,chara_rest);
	});

	function preset_num(){
		for(var i = 0; i < 26; i++){
			preset.push(String.fromCharCode('a'.charCodeAt() + i));	
			chara_rest.push(String.fromCharCode('a'.charCodeAt() + i));	
		}
	}
	function selected_num(){
		random_num = Math.floor( Math.random() * 26);
		selected = preset[random_num];
		document.getElementById( "result" ).textContent = selected;
	}
	function histories(){
		$('#histories').prepend('<li>'+selected+'</li>');
	}
	function rest(){
		delete chara_rest[random_num];
		document.getElementById( "rest" ).textContent = chara_rest ;
	}
});


