$(document).ready(function(){
      $('.carousel').carousel();

      $('#next').click(function(){
            $('.carousel').carousel('next');
            
       });

       $('#prev').click(function(){
            $('.carousel').carousel('prev');
            
       });
   
});