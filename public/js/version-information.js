$(document).ready(function(){
    $('.open_modal_ver').on('click', function(){
        $('.modal').show();
    })
    $('.modal-close').on('click', function(){
        $('.modal').hide();
    })
    $('.modal-file-selcet').on('click', function(){
        $('.modal-file').trigger('click')
    })
})