$(function() {
    $('.js-modal').click(function(modal){
        modal.preventDefault();
        $('.overlay').fadeIn();
        console.log('hiciste clic');
        var laImg = $(this).attr('href');
        $('body').append('<img src="' + laImg + '" class="img-modal img-responsive">');
    });
    $(document).on('click', '.img-modal', function(){
        console.log('ahora sí');
        $(this).remove();
        $('.overlay').fadeOut();
    })
    // $('.img-modal').click(function(){
    //     console.log('hola');
    // });
    $('.overlay').click(function(){
        $(this).fadeOut();
        $('.img-modal').remove();
    });
});