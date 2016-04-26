

window.addEventListener("load",function(){
	var chara = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','u','w','x','y','z'];
	var chara_rest = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','u','w','x','y','z'];
	$('#start').click(function() {
		
		 
		var x; 
		x = Math.floor( Math.random() * chara.length);
		var rand = chara[x];		
		document.getElementById( "result" ).textContent = rand ;

		$('#histories').prepend('<li>'+rand+'</li>');
		chara_rest.splice(x,1);
    document.getElementById( "rest" ).textContent = chara_rest ;


	});
});


