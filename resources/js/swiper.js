// import Swiper JS
import Swiper, { Navigation, Pagination, Autoplay, Thumbs, EffectFade } from "swiper";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, Autoplay, Thumbs, EffectFade]);

//サムネイルのスライダーの初期化
let mySwiperThumbs = new Swiper ('.thumbs-slider', {
  // loop : true,
  slidesPerView: 3,
  spaceBetween: 10,
  //各スライドの進行状況を監視
  watchSlidesProgress: true,
  //ビューポートにあるスライドに表示クラスを追加
  watchSlidesVisibility: true,
  //カーソルをデフォルトから grab に変更
  grabCursor: true,
  observer:true,//修改swiper自己或子元素时，自动初始化swiper
  observeParents:true,//修改swiper的父元素时，自动初始化swiper

});

//メインのスライダーの初期化
let mySwiperMain = new Swiper ('.main-slider', {
  loop: true,
  thumbs: {
    //サムネイルのスライダーを指定
    swiper: mySwiperThumbs
  },
  observer:true,//修改swiper自己或子元素时，自动初始化swiper
  observeParents:true,//修改swiper的父元素时，自动初始化swiper
  autoplay: {
    delay: 6000,
    disableOnInteraction: true,
  },

  speed: 2000,
});

//左右按钮
$("#btnPrev").on('click', function () {
  mySwiperMain.slidePrev();
  //设置左右侧淡化
  //addOpacity();
});
$("#btnNext").on('click', function () {
  mySwiperMain.slideNext();
  //设置左右侧淡化
  //addOpacity();
});
