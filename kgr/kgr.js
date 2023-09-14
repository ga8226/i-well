$(function(){
    const topdiff = $(window).height() / 3;
    let   w_top = $(window).scrollTop();

   $(window).scroll(function(){
    
          w_top = $(window).scrollTop();

    if( w_top > topdiff)
    {
        $('body').addClass('scrolldown');
    }else{
        $('body').removeClass('scrolldown');
    }


   }) 
})