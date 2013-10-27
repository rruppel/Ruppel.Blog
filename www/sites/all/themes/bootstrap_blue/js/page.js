/**
 * @file
 * Jquery for theme
 */
(function ($) {
  Drupal.behaviors.bootstrapblue = {
    attach: function (context, settings) {
      $('.show-search').click(function () {
        $('section#search').slideToggle("fast");
        $(this).toggleClass('active');
        $(this).parent().toggleClass('active');
      });
      var pageHeader = $('.main-inner h1.page-header');
      pageHeader.once('bootstrap-blue').prepend("<div class='pull-right'><div class='btn-group'><button id='expand-contract' class='btn btn-expand' title='Expand'><i class='icon-resize-full'></i></a></div></div>");
      $('#expand-contract').toggle(function () {
        $('aside.sidebar-right').css({width: "0px", opacity: "0", }, 1000);
        $('section.main').animate({width: "100%", }, 1000);
        $(this).addClass('btn-contract').removeClass('btn-expand');
        $('.main-inner').addClass('expand-main-content');
        $('.btn-contract i').removeClass('icon-resize-full').addClass('icon-resize-small');
      }, function () {
        $('section.main').animate({width: "74.35897435897436%", }, 1000);
        $('aside.sidebar-right').animate({width: "25.727%", opacity: "1", }, 1000);
        $(this).addClass('btn-expand').removeClass('btn-contract');
        $('.main-inner').removeClass('expand-main-content');
        $('.btn-expand i').removeClass('icon-resize-small').addClass('icon-resize-full');
      });
    }
  }
})(jQuery)
