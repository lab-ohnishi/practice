window.addEventListener("load",function(){

  function update(button){
    var up_img = button.attr('name');
    document.area1.src = up_img;
  }
  $(".change_Img_button").click(function(){
    update($(this));
  });
});
