let toggleBtn = document.getElementById('toggle-btn');
let body = document.body;
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () =>{
   toggleBtn.classList.replace('fa-sun', 'fa-moon');
   body.classList.add('dark');
   localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
   toggleBtn.classList.replace('fa-moon', 'fa-sun');
   body.classList.remove('dark');
   localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
   enableDarkMode();
}

toggleBtn.onclick = (e) =>{
   darkMode = localStorage.getItem('dark-mode');
   if(darkMode === 'disabled'){
      enableDarkMode();
   }else{
      disableDarkMode();
   }
}

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   search.classList.remove('active');
}

let search = document.querySelector('.header .flex .search-form');

document.querySelector('#search-btn').onclick = () =>{
   search.classList.toggle('active');
   profile.classList.remove('active');
}

let sideBar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () =>{
   sideBar.classList.toggle('active');
   body.classList.toggle('active');
}

document.querySelector('#close-btn').onclick = () =>{
   sideBar.classList.remove('active');
   body.classList.remove('active');
}

window.onscroll = () =>{
   profile.classList.remove('active');
   search.classList.remove('active');

   if(window.innerWidth < 1200){
      sideBar.classList.remove('active');
      body.classList.remove('active');
   }
}


(function ($) {
   "use strict";

   // Spinner
   var spinner = function () {
       setTimeout(function () {
           if ($('#spinner').length > 0) {
               $('#spinner').removeClass('show');
           }
       }, 1);
   };
   spinner();
   
   
   // Initiate the wowjs
   new WOW().init();


   // Sticky Navbar
   $(window).scroll(function () {
       if ($(this).scrollTop() > 300) {
           $('.sticky-top').css('top', '0px');
       } else {
           $('.sticky-top').css('top', '-100px');
       }
   });
   
   
   // Dropdown on mouse hover
   const $dropdown = $(".dropdown");
   const $dropdownToggle = $(".dropdown-toggle");
   const $dropdownMenu = $(".dropdown-menu");
   const showClass = "show";
   
   $(window).on("load resize", function() {
       if (this.matchMedia("(min-width: 992px)").matches) {
           $dropdown.hover(
           function() {
               const $this = $(this);
               $this.addClass(showClass);
               $this.find($dropdownToggle).attr("aria-expanded", "true");
               $this.find($dropdownMenu).addClass(showClass);
           },
           function() {
               const $this = $(this);
               $this.removeClass(showClass);
               $this.find($dropdownToggle).attr("aria-expanded", "false");
               $this.find($dropdownMenu).removeClass(showClass);
           }
           );
       } else {
           $dropdown.off("mouseenter mouseleave");
       }
   });
   
   
   // Back to top button
   $(window).scroll(function () {
       if ($(this).scrollTop() > 300) {
           $('.back-to-top').fadeIn('slow');
       } else {
           $('.back-to-top').fadeOut('slow');
       }
   });
   $('.back-to-top').click(function () {
       $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
       return false;
   });


   // Header carousel
   $(".header-carousel").owlCarousel({
       autoplay: true,
       smartSpeed: 1500,
       items: 1,
       dots: false,
       loop: true,
       nav : true,
       navText : [
           '<i class="bi bi-chevron-left"></i>',
           '<i class="bi bi-chevron-right"></i>'
       ]
   });


   // Testimonials carousel
   $(".testimonial-carousel").owlCarousel({
       autoplay: true,
       smartSpeed: 1000,
       center: true,
       margin: 24,
       dots: true,
       loop: true,
       nav : false,
       responsive: {
           0:{
               items:1
           },
           768:{
               items:2
           },
           992:{
               items:3
           }
       }
   });
   
})(jQuery);