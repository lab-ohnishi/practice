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

  function rest_delete(){
    for(var j=0;j<26;j++){
      if(rest[j] == alpha[rand_num]){
        rest[j] = "-";
        break;
      }
    }
  }

  function Display(){
    document.getElementById('result').innerHTML = alpha[rand_num];
    document.getElementById('rest').innerHTML = rest;
    document.getElementById('histories').innerHTML = result;
  }

  $('#start').click(function(){
    initialize(alpha,rest);
    rand_num = Math.floor(Math.random()*26);
    rest_delete(alpha,rest,rand_num);
    result.unshift(alpha[rand_num]);
    Display(alpha,rest,result,rand_num);
  });
});
