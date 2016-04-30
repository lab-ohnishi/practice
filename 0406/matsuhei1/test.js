window.addEventListener("load",function(){

  function update(button){
    var up_img = button.attr('img_data');
    document.area1.src = up_img;
  }
  $(".chenge_Img_button").click(function(){
    update($(this));
  });
});
