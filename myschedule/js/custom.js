$(function(){

   //sub projects bar animation
   for(let i = 0; i < $(".subPfBar").length; i++){
      let rateNum = $(".subPfBar").eq(i).find(".rateNum").val();
      $(".subPfBar").eq(i).find(".pfBar").animate({width:rateNum + "%"}, 1200);
   }

   //header icon control
   $(".mIcon").click(function(){
      $(this).toggleClass("on");

      if($(this).hasClass("on")){
         $(".depth-1").slideDown('fast');
      } else {
         $(".depth-1").slideUp('fast');
      }
   });




});