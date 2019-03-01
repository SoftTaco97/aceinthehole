/*
File Name: script.js
Programmer: Jared Martinez
Project: Ace In the Hole
Date: 3/01/2019
*/

$(function(){
    let position;
    let $headerMargin;
    $('.weatherButton').click(function(){
        if($('nav.fixed-top').css('position') == 'fixed') {
            position = document.documentElement.scrollTop;
            $headerMargin = $('header').css('margin-top');
            
            $("html, body").animate({ scrollTop: 0 }, "slow");
            $('header').css('margin-top', '0');
            $('nav.fixed-top').css('position', 'static');
        }else {
            $('nav.fixed-top').css('position', 'fixed');
            $('header').css('margin-top', $headerMargin);
            $("html, body").animate({scrollTop: position}, "slow");
        }
    });
});