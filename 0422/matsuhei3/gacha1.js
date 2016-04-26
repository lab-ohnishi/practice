  var alpha = [];
  var until = [];
  var result = [];
  function start(){
    var rand_num = Math.floor(Math.random()*26);
    if(alpha[0] != "a"){
      for(var i=97;i<=122;i++){
        alpha.push(String.fromCharCode(i));
        until.push(String.fromCharCode(i));
      }
    }
    for(var j=0;j<26;j++){
      if(until[j] == alpha[rand_num]){
        until[j] = "-";
        break;
      }
    }
    result.unshift(alpha[rand_num]);

    document.getElementById('result').innerHTML = alpha[rand_num];
    document.getElementById('rest').innerHTML = until;
    document.getElementById('histories').innerHTML = result;

  }
