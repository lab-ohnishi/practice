window.addEventListener("load",function(){
  var alpha = [];
  var rest = [];
  var result = [];
  var rand_num;

  function initialize(){
    if(alpha[0] != "a"){
      for(var i=97;i<=122;i++){
        alpha.push(String.fromCharCode(i));
        rest.push(String.fromCharCode(i));
      }
    }
  }
  function get_gacha(){
    rand_num = Math.floor(Math.random()*26);
  }
  function rest_delete(){
    for(var j=0;j<26;j++){
      if(rest[j] == alpha[rand_num]){
        rest[j] = "-";
        break;
      }
    }
  }

  function result_update(){
    result.unshift(alpha[rand_num]);
  }

  function display(){
    document.getElementById('result').innerHTML = alpha[rand_num];
    document.getElementById('rest').innerHTML = rest;
    document.getElementById('histories').innerHTML = result;
  }

  $('#start').click(function(){
    initialize();
    get_gacha();
    rest_delete();
    result_update();
    display();
  });
});
