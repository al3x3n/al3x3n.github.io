/*alert(baseUrl);*/
/*$('.btn').on('click', function() {
        alert();
    var $this = $(this);
  $('#id').button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});*/
function sendMail(){
       var name    = $('#name').val();
       var email   = $('#email').val();
       var subject = $('#subject').val();
       var message = $('#message').val();
       var Data = {
                "name" : name,
                "email" : email,
                "subject" : subject,
                "message" : message

        };
        $.ajax({
                data:  Data,
                type: 'POST',
                url:   baseUrl+'/email',
                dataType: 'json',
                beforeSend: function () {
                        $('#loader').show();
                        $('body').addClass('opacity-loader');
                        $('#enviar').prop('disabled',true);
                },
                success:  function (response) {
                        if(response.succes){
                                toastr.success(response.msg);        
                        }else{
                             toastr.error(response.msg);   
                        }
                        $('#loader').hide();
                        $('body').removeClass('opacity-loader');
                        $('#enviar').prop('disabled',false);
                        
                        /*$("#resultado").html(response.succes);
                        $("#resultado").html(response.msg);*/
                }
        });
}