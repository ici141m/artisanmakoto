$(function () {
    $('.js-btn').on('click', function () {        // js-btnクラスをクリックすると、
      $('.menu-bar , .btn-line').toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
    })
  });