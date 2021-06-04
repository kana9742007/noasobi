jQuery(function () {
  var mySwiper = new Swiper(".swiper-container", {
    loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 2500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: 1, // 何枚のスライドを表示するか
    spaceBetween: 24, // スライド間の余白サイズ(ピクセル)
    direction: "horizontal", // スライド方向
    effect: "fade", // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
    simulateTouch: true,
    autoplay: true,
  });
});

jQuery(function () {

  var thumbSwiper = new Swiper(".thumbnail-slider", {
    slidesPerView: 3,
    freeMode: true,
    spaceBetween: 30,
    slideToClickedSlide: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    simulateTouch: true,

    breakpoints: {
      640: {
        slidesPerView: 5,
      },
    },
  });

  var gallerySwiper = new Swiper(".gallery-container", {
    speed: 800, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: 1, // 何枚のスライドを表示するか
    direction: "horizontal", // スライド方向
    effect: "slide", // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
    centeredSlides: true,
    autoplay: true,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    thumbs: {
      swiper: thumbSwiper
    }
  });
});

