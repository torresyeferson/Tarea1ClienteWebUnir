/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(window).scroll(function () {
    var sticky = $('.sticky'),
            scroll = $(window).scrollTop();

    if (scroll >= 100)
        sticky.addClass('fixed');
    else
        sticky.removeClass('fixed');
});