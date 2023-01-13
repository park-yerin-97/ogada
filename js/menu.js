$(document).ready(function(){

  /* .navBtn */
  $('.navBtn').click(function(){
    $(".main_nav").addClass("on")
    $('.navInner').animate({right:0},300);
  })

  $('.navClose').click(function(){
    $('.navInner').animate({right:-100+"%"},300,function(){
      $(".main_nav").removeClass("on")
    });
  })

  /* menu_nav 상위 메뉴*/
  var n=0;
  $(".menu").eq(n).addClass("active")
  
  $(".menu_nav li").click(function(e){
    e.preventDefault(); 
    n=$(this).index();
    $(".menu_nav li").removeClass("on");
    $(this).addClass("on")
    $(".menu").hide();
    $(".menu").eq(n).show();
  
  });
  
  /* mobile 자세히보기 버튼을 클릭하면 팝업창 나오기 */
  $(".detail").click(function(){
    var win_w = $(window).width()
    if(win_w<768){
    $(this).parent().siblings(".slide_box").css({display:"block"})
    }       
  })

  $(".close").click(function(){
    var win_w = $(window).width()
    if(win_w<768){
    $(".slide_box").css({display:"none"})
    }
  })
  

  /* 768~ 자세히보기 버튼을 클릭하면 슬라이드창 나오기 */
  $(".detail").click(function(){
    var win_w = $(window).width()
    if(win_w>=768){
      $(".slide_box").css({display:"none"}) 
      $(this).parent().siblings(".slide_box").stop().slideDown();
    }

    $('.detail').removeClass('active')
    $(this).addClass('active')
  
    var win_w = $(window).width()
    if(win_w >= 768){
        $(this).parents('li').next().next().addClass('m_top')
    }

    li_index = $(this).parents('li').index()+1

    $(window).resize(function(){
      var win_w = $(window).width()
      var li_t =0
      if( win_w >= 768 && win_w <= 1023 ){
        if(li_index <= 2){
          li_t = 1
          var li_p = 62
        } else if(li_index <= 4){
          li_t = 2
          var li_p = 132
        } else { li_t = 3; var li_p = 154}
      
      } else if (win_w >= 1024 && win_w <=1279) {
        if(li_index <= 3){
          li_t = 1
          var li_p = 76
        } else {
          li_t = 2
          var li_p = 138
        }
      } else if (win_w >= 1280) {
        if(li_index <= 3){
          li_t = 1
          var li_p = 76
        } else {
          li_t = 2
          var li_p = 158
      }
      }
      
      var t_p = 169
      var t_height = $('.menu .title').height() + t_p
      var li_height = $('.active').parents('li').height() + li_p
      var li_top = t_height + li_height * li_t
      if(win_w<768){
        li_top=0;
      } 
      $('.slide_box').css({top:li_top})
      }).resize()

    
    })

  $(".close").click(function(){
      $(this).parents(".slide_box").stop().slideUp();
      $('.menu li button').removeClass('m_top')
  }) 

})



  
