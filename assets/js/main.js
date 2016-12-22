function activeItem(elem) {
    // get all 'a' elements
    // var a = document.getElementsByClassName('nav-item');
    var a = document.getElementsByTagName('a');
    // loop through all 'a' elements
    for (i = 0; i < a.length; i++) {
        // Remove the class 'active' if it exists
        a[i].classList.remove('active')
    }
    // add 'active' classs to the element that was clicked
    elem.classList.add('active');
}
$(document).scroll(function(){
  if($(document).scrollTop() >= 100){
    // $('.nav').fadeOut(1000);
    $('#nav').removeClass('nav').addClass("nav2");
    $('.logo').attr("src", "assets/media/LiteSmall.png");
    // $('.logo2').fadeIn(1000);
    $('#logo').removeClass('logo').addClass("logo2");
  }else{
    $('#nav').removeClass('nav2').addClass("nav");
    $('.logo').attr("src", "assets/media/logo.png");
    $('#logo').removeClass('logo2').addClass("logo");
  }
});
