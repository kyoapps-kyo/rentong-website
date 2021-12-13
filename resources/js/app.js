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
      .addClass("text-lg")
      .removeClass("text-2xl font-bold year-selected")
      .prev()
      .removeClass("h-10 w-10")
      .addClass("h-8 w-8")
      .parent()
      .addClass("opacity-70");
      $(this)
      .addClass("text-2xl font-bold year-selected")
      .removeClass("text-lg")
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
    if(window.location.href === 'http://rentongwebsite.test/about/to/email'){
      console.log(window.location.href);
      $('#info_nav>li').last().trigger("click");
    }



});
