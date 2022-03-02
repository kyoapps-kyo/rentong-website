require("./bootstrap");
require("alpinejs");
import ScrollReveal from "scrollreveal";

$(function () {
  //about info nav
  let en_info = $("#en_info");
  let cn_info = $("#cn_info");
  let info_nav = $("#info_nav");
  let config = {
    after: "0s",
    enter: "bottom",
    move: "70px",
    over: "2s",
    easing: "ease-in-out",
    viewportFactor: 0.33,
    reset: true,
    init: true,
  };
  info_nav.on("click", "li", function () {
    cn_info.text($(this).text());
    en_info.text($(this).children().attr("data-en"));
    $(".infoSelected")
      .removeClass("infoSelected animate__rubberBand")
      .addClass("animate__jello");
    $(this)
      .children()
      .addClass("infoSelected animate__rubberBand")
      .removeClass("animate__jello");
    let displayId = $(this)
      .children()
      .attr("data-en")
      .toLowerCase()
      .replace(" ", "_");
    $(".content_visible").addClass("hidden");
    $(".content_visible").removeClass("content_visible");
    $("#" + displayId).addClass("content_visible");
    $("#" + displayId).removeClass("hidden");
  });

  //about corporate history
    let years = $(".years");
    years.on("click", function() {
      $(".year-selected")
      .addClass("lg:text-lg md:text-sm")
      .removeClass("lg:text-2xl md:text-base font-bold year-selected")
      .prev()
      .removeClass("h-10 w-10")
      .addClass("h-8 w-8")
      .parent()
      .addClass("opacity-70");
      $(this)
      .addClass("lg:text-2xl md:text-sm font-bold year-selected")
      .removeClass("lg:text-lg md:text-sm")
      .prev()
      .removeClass("h-8 w-8")
      .addClass("h-10 w-10")
      .parent()
      .removeClass("opacity-70");
      let yearName = $(this).attr("data-year");
      $(".year-content-selected")
      .removeClass("year-content-selected")
      .addClass("hidden");
      $("#" + yearName)
      .addClass("year-content-selected")
      .removeClass("hidden");
    });

    //send email
    let url = window.location.href;
    if(url.substring(url.length-5) === 'email'){
      console.log(url);
      $('#info_nav>li').last().trigger("click");
    }



});
