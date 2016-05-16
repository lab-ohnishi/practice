window.addEventListener("load",function(){

  function update_img(button){
    var up_img = button.attr('name');
    document.area1.src = up_img;
  }
  $(".change_img_button").click(function(){
    update_img($(this));
  });
});
