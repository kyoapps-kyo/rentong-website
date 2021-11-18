// import Swiper JS
import Swiper, { Navigation, Pagination } from "swiper";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);

let spaceBetweenN = window.innerWidth*0.01;
let slidesOffsetBeforeN = (window.innerWidth-spaceBetweenN*4)/8;

// init Swiper:
const swiper = new Swiper(".swiper", {
  // Optional parameters
  // direction: 'vertical',
  loop: true,


  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  slidesPerView : 4,
  spaceBetween :  spaceBetweenN,
  slidesOffsetBefore : slidesOffsetBeforeN,
});


$('#btnPrev').click(function(){
  swiper.slidePrev();
})
$('#btnNext').click(function(){
  swiper.slideNext();
})
