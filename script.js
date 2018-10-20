$('#toggleText').click(function(){
    $('body').toggleClass('larger');
    if($('body').hasClass('larger')){
        $('#toggleText').html('Small Text');
    }else{
        $('#toggleText').html('Large Text');
    }
});