//        ~ RSN: Responsive Sticky Navigation Bar W/mbl Drop
//        ~ Developed By: Ajay Chambers  aka AFT3RxL1F3
//        ~ 16-JAN-2020  @ aprx. 10:00pm (pst)                               

window.onscroll = function () {
     myFunction()
};

function myFunction() {
     if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 50) {
          document.getElementById("myP").className = "test";
     } else {
          document.getElementById("myP").className = "";
     }
}

function toggleHide() {
     let dm_size = 225;
     let dm_height = $('#drop-menu').innerHeight();
     dm_height = parseInt(dm_height);

     if (dm_height < dm_size) {
          $('#drop-menu').animate({
               height: '225px'
          });
     }

     if (dm_height >= dm_size) {
          $('#drop-menu').animate({
               height: '0px'
          });
     }

}




