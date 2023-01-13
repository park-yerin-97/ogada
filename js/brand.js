/* navBtn */
$(document).ready(function(){

  $('.navBtn').click(function(){
    $(".main_nav").addClass("on")
    $('.navInner').animate({right:0},300);
  })

  $('.navClose').click(function(){
    $('.navInner').animate({right:-100+"%"},300,function(){
      $(".main_nav").removeClass("on")
    });
  })

})

/* scroll */
$(window).scroll(function(){
  var winT=$(this).scrollTop();

  /* #story01 차 한잔에 담긴 정성 5번째,나무심기사업 */
  var num5T=$(".num5_txt").offset().top
  if(winT>=num5T-400){
    $(".num5_txt").addClass("active")
  }

  /* #story02 오가다로고에 담긴 의미 */
  var centerT=$(".center").offset().top
  if(winT>=centerT-600){
    $(".center").addClass("active")
  }
  var leftT=$(".left").offset().top
  if(winT>=leftT-600){
    $(".left").addClass("active")
  }

  var rightT=$(".right").offset().top
  if(winT>=rightT-600){
    $(".right").addClass("active")
  }

  var bottomT=$(".bottom").offset().top
  if(winT>=bottomT-600){
    $(".bottom").addClass("active")
  } 

})

 /* ripples */
  $(function(){
    $('.sub_visual_box').ripples({
      resolution: 100,
      dropRadius: 100,
      perturbance: 0.001,
    });
})

     