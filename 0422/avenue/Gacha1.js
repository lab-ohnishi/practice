

window.addEventListener("load",function(){
	var chara_rest = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','u','w','x','y','z'];

	var array = new Array();
	var str = '';
	$('#start').click(function() {



		for(var i = 0; i < 26; i++){
			array.push(String.fromCharCode('a'.charCodeAt() + i))	
		}

		rand = [Math.floor( Math.random() * 26)];
		str = array[rand];

		document.getElementById( "result" ).textContent = str ;

		$('#histories').prepend('<li>'+str+'</li>');

		delete chara_rest[rand];
		document.getElementById( "rest" ).textContent = chara_rest ;

	});
});


