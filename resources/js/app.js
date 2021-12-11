require('./bootstrap');
require('alpinejs');

$(function(){
  let en_info = $("#en_info");
  let cn_info = $("#cn_info");
  let info_nav = $("#info_nav");
  info_nav.on('click','li',function(){
    cn_info.text($(this).text());
    en_info.text($(this).children().attr("data-en"));
    $(".infoSelected").removeClass("infoSelected");
    $(this).children().addClass("infoSelected");
    let displayId = $(this).children().attr("data-en").toLowerCase().replace(' ','_');
    $(".content_visible").addClass("hidden");
    $(".content_visible").removeClass("content_visible");
    $("#" + displayId).addClass("content_visible");
    $("#" + displayId).removeClass("hidden");
    console.log($("#" + displayId).text());
  });

});

