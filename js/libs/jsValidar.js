$.validator.setDefaults(
{
	submitHandler: function() { alert("submitted!"); },
	showErrors: function(map, list) 
	{
		this.currentElements.parents('label:first, .controls:first').find('.error').remove();
		this.currentElements.parents('.control-group:first').removeClass('error');
		
		$.each(list, function(index, error) 
		{
			var ee = $(error.element);
			var eep = ee.parents('label:first').length ? ee.parents('label:first') : ee.parents('.controls:first');
			
			ee.parents('.control-group:first').addClass('error');
			eep.find('.error').remove();
			eep.append('<p class="error help-block"><span class="label label-important">' + error.message + '</span></p>');
		});
		//refreshScrollers();
	}
});

$(function()
{    
	$("#frmlogin").validate({			
                submitHandler: function(form){
                $.ajax({
                type: "POST",
                url: "intranet/validar.php",
                data: $(form).serialize(),
                success: function(data){
                    
                	if (data==1) {
                            
                                $("#mensaje").html("Iniciando sesion");
                                limpiarForm('#frmlogin');
                                
                            	intranet();
                	}else{ if (data==0) {
                                                               
                		$("#mensaje").html("Error al iniciar sesion");
                	}}
                    
                  },
                  error: function(data){

                    $("#mensaje").html("eeror. Comunique al administrador");

                  }
                });
                },            
    rules: {
        txt_usuario: {
            required: true
        },
        txt_clave: {
            required: true
        }    
        }            
	});
	
});

function intranet(){
    location.href = "intranet/index.php";
}