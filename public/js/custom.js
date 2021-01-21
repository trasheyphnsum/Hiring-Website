
/*nav bar*/
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});


/*button*/
$(function(){
var authCheck = document.getElementById("auth").value;
if(authCheck==1){

  $('.btn1').prop('disabled', false);
}
})