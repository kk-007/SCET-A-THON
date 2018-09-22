$(document).ready(function(){
    $('.student2').show();
    $('.student3').hide();
    $('.student4').hide();
    // $('.step1').removeClass('selection-options');
    $('.step1').addClass('selection-options');
    $('.step1').on('click',function(){
        $('.step2').removeClass('selection-options');
        $('.step3').removeClass('selection-options');
        $('.step1').addClass('selection-options');
        $('.student2').show();
        $('.student3').hide();
        $('.student4').hide();
    });
    $('.step2').on('click',function(){
        $('.step1').removeClass('selection-options');
        $('.step3').removeClass('selection-options');
        $('.step2').addClass('selection-options');
        $('.student3').show();
        $('.student2').hide();
        $('.student4').hide();
    });
    $('.step3').on('click',function(){
        $('.step1').removeClass('selection-options');
        $('.step2').removeClass('selection-options');
        $('.step3').addClass('selection-options');
        $('.student4').show();
        $('.student2').hide();
        $('.student3').hide();
    });
});
