<?php
function contenido(){
?>

<section id="main">
            
    <div class="body-text">
				<div class="container-fluid demo">
					<div class="row-fluid">
						<h1 class="span12">Contactenos</h1>
					</div>			
					<!-- 6/4 columns -->
					<!--single map-->
					
					<div class="row-fluid">
						<div class="span3">
								
                                                                <strong>Direccion:</strong> San bernardo Sur / Los Alamos S/N <br>  
								<strong>Telefono:</strong> +1 1800.43.PEACH <br>  
								<strong>Fax:</strong> 416.556.4657 <br>
								<strong>Email:</strong> <a href="mailto:companyName@email.com"> business@email.com</a>
								


						</div>
						<div class="span9"> 
							<div id="message"></div>
							<form id="contactform" name="contactform" action="registro/ins_contacto.php" method="POST" class="form-horizontal contact-agent-form">
								<div class="row-fluid">
			                        <div class="field span6">
			                            <div class="span12">
			                                <label  for="apellidos">Apellidos</label>
                                                        <input type="text" placeholder="Ingrese Apellidos" id="apellidos" value="" name="apellidos" class="span12" required >
			                            </div>
			                           
			                        </div>
			                        <div class="field span6">
			                            <div class="span12">
			                                <label for="nombre">Nombre</label>
			                                <input type="text" placeholder="Ingrese Nombre" id="nombre" value="" name="nombre" class="span12" required>
			                            </div>
			                           
			                        </div>
		                        </div>
								<div class="row-fluid">
			                        <div class="field span6">
			                            <div class="span12">
			                                <label  for="email">Email</label>
			                                <input type="email" placeholder="tu_email@address.com" id="email" value="" name="email" class="span12" required >
			                            </div>
			                           
			                        </div>
			                        <div class="field span6">
			                            <div class="span12">
			                                <label for="telefono">Telefono</label>
			                                <input type="tel" placeholder="( 000 ) 000 - 0000" id="telefono" value="" name="telefono" class="span12" required >
			                            </div>
			                           
			                        </div>
		                        </div>
								<div class="row-fluid">
			                        <div class="field span12">
			                            <div class="span12">
			                                <label for="comentario">Comentario*</label>
			                                <textarea placeholder="Ingrese su consulta..." name="comentario" rows="4" id="comentario" class="span12" required ></textarea>
			                            </div>
			                        </div>
		                        </div>
								
		                        <div class="divider"></div>
		                        <div class="button-align">
		                        	
		                        	<input type="submit" value="Enviar" id="enviar" class="btn">
		                        </div>
								
							</form>
						</div>				
					</div>
					<!-- end 6/4 columns -->
				</div>
			</div>        
    
        </section><!--end section-->

<?php }

 include './master/master.php';

?>
