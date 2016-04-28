window.addEventListener("load",function(){
	var preset = new Array();
	var chara_rest = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','u','w','x','y','z'];
	var selected = '';
	var random_num;

	$('#start').click(function() {
		preset_num(preset);
		selected_num(random_num);
		histories(selected);
		rest(random_num,chara_rest);
	});

	function preset_num(){
		for(var i = 0; i < 26; i++){
			preset.push(String.fromCharCode('a'.charCodeAt() + i));	
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


