$(function(){"use strict";$(function(){$(".preloader").fadeOut()});var o=function(){var o=390,n=(window.innerHeight>0?window.innerHeight:this.screen.height)-1;n-=o,1>n&&(n=1),n>o&&$(".page-wrapper").css("min-height",n+"px")};$(window).ready(o),$(window).on("resize",o),$(function(){$('[data-toggle="tooltip"]').tooltip()}),$(function(){$('[data-toggle="popover"]').popover()}),jQuery(document).on("click",".mega-dropdown",function(o){o.stopPropagation()}),jQuery(document).on("click",".navbar-nav > .dropdown",function(o){o.stopPropagation()}),$(".dropdown-submenu").click(function(){$(".dropdown-submenu > .dropdown-menu").toggleClass("show")}),$("body").trigger("resize");var n=$(window);n.on("load",function(){var o=n.scrollTop(),e=$(".topbar");o>100?e.addClass("fixed-header animated slideInDown"):e.removeClass("fixed-header animated slideInDown")}),$(window).scroll(function(){$(window).scrollTop()>=200?($(".topbar").addClass("fixed-header animated slideInDown"),$(".bt-top").addClass("visible")):($(".topbar").removeClass("fixed-header animated slideInDown"),$(".bt-top").removeClass("visible"))}),AOS.init(),$(".bt-top").on("click",function(o){o.preventDefault(),$("html,body").animate({scrollTop:0},700)}),$(".modal").on("hidden.bs.modal",function(){callPlayer("yt-player","stopVideo")}),$('a[target="_blank"]').removeAttr("target")});