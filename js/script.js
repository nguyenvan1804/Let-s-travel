let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
   loop:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".mySwiper", {
   spaceBetween: 30,
   centeredSlides: true,
   autoplay: {
   delay: 2500,
   disableOnInteraction: false,
   },
   pagination: {
   el: ".swiper-pagination",
   clickable: true,
   },
   navigation: {
   nextEl: ".swiper-button-next",
   prevEl: ".swiper-button-prev",
   },
});


let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>
{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

function book_firm() {
  alert("Bạn đã đặt vé thành công!!!");
}

function inform() {
   alert("Bạn đã đăng kí thành công!!!");
 }

// $(document).ready(function(){
//    $(".location").change(function(){
//       var id_location = $(".location").val();
//       $.post("data.php",{id_location: id_location}, function(data){
//          $(".homestay").html(data);
//       })
//    })
// })