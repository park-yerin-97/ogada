$(document).ready(function(){
  /* loading page*/
  setTimeout(function() {
    $(".loading_box").addClass('on');
  }, 3000);


  /* navBtn */
  $('.navBtn').click(function(){ 
    $(".main_nav").addClass("on")
    $('.navInner').animate({right:0},300);
  })

  $('.navClose').click(function(){
    $('.navInner').animate({right:-100+"%"},300,function(){
      $(".main_nav").removeClass("on")
    });
  })


  /* visual */
  var n = 0;
  $(".right").click(function(){ //오른쪽 화살표를 클릭하면 넘어가기
    n++;
    if(n==4){
        n=1;
        $('.pic').css({left:0})

    }
    $('.pic').stop().animate({left:-100*n+'%'})
    $(".indicator li").removeClass("on");
    $(".indicator li").eq(n).addClass("on");

    if(n==3){
      $(".indicator li:first").addClass("on")
    }
  })


  $(".left").click(function(){ //왼쪽 화살표를 클릭하면 넘어가기
    n--;
    if(n==-1){
        n=2;
        $('.pic').css({left:-300+"%"})

    }
    $('.pic').stop().animate({left:-100*n+'%'})
    $(".indicator li").removeClass("on");
    $(".indicator li").eq(n).addClass("on");
  })

  setInterval(function(){ //자동슬라이드
      $(".right").click();
  },3000) 
   

  /* scroll event*/
  $(window).scroll(function(){ 
    var winT=$(this).scrollTop();
    
    /* brand */
    var brandT=$(".brand_left").offset().top
    if(winT>=brandT-200){
      $(".brand_right").addClass("active")
    }

    /* tea */
    var teaT=$(".tea_top").offset().top
    if(winT>=teaT-200){
      $(".tea_center").addClass("active")
    }

    /* coffee */
    var coT=$(".coffee_top").offset().top
    if(winT>=coT-200){
      $(".coffee_center").addClass("active")
    }

    var coLT=$(".coffee_bottom_left").offset().top
    if(winT>=coLT-400){
        $(".coffee_bottom_left").find(".left_txt").addClass("active")
    }
    var coRT=$(".coffee_bottom_right").offset().top
    if(winT>=coRT-400){
      $(".coffee_bottom_right").find(".right_txt").addClass("active")
    }
 
    /* franchise */
    if(window.innerWidth<768){
      var franLT=$(".franchise_left").offset().top
      if(winT>=franLT-600){
        $(".franchise_left").addClass("active")
      }
      var franRT=$(".franchise_right").offset().top
      if(winT>=franRT-600){
        $(".franchise_right").addClass("active")
      }

      } else{
      var franT=$(".franchise_cont").offset().top
      if(winT>=franT-600){
        $(".franchise_left").addClass("active")
        $(".franchise_right").addClass("active")
      }
    }

   /* event */
   var eventT=$("#event").offset().top
   if(winT>=eventT-400){
     $(".event_top").addClass("active")

   }
  })


  /* event slick*/
  $('.event_bottom_slide').slick({
      
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
          
      {
        breakpoint: 1600,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
                  }
      },
      {
        breakpoint: 768,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
                  }
      }

      ]
          
  });			
   
})


  
 

 
