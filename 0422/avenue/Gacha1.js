

window.addEventListener("load",function(){
	var chara = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','u','w','x','y','z'];
	$('#start').click(function() {
		var rand = chara[ Math.floor( Math.random() * chara.length)];		
		document.getElementById( "result" ).textContent = rand ;
		$('#histories').prepend('<li>'+rand+'</li>');

	});
});


