 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Secuencias de Comandos en Sitios Cruzados (XSS) - Reflejados</a></h3>
        
        <p align="justify">
        Cross Site Scripting ataca el abuso de la funcionalidad del navegador para enviar scripts maliciosos a la m�quina del cliente. En otras palabras, este es un ataque del lado del cliente. Los ataques de Cross Site Scripting generalmente se clasifican en dos categor�as: almacenados y reflejados. En los ataques reflejados, la aplicaci�n refleja el script malicioso en el navegador. El servidor no almacena nada, solo env�a de vuelta las entradas de los usuarios, por ejemplo, mensajes de error, resultados de b�squeda, etc. Dichos ataques hacen campa�a a trav�s de diferentes rutas como correos electr�nicos, chats o en sitios web de terceros..  
        </p><br><br>
        <p>Leer m�s de Secuencias de comandos en sitios cruzados (XSS) - Reflejados<br><br>
        <a target="_blank" href="https://backtrackacademy.com/articulo/xss-capturando-cookies-de-sesion">https://backtrackacademy.com/articulo/xss-capturando-cookies-de-sesion</a></p>
	<a target="_blank" href="http://www.reydes.com/d/?q=Cross_Site_Scripting_XSS_Reflejado_en_OWASP_Vicnum">http://www.reydes.com/d/?q=Cross_Site_Scripting_XSS_Reflejado_en_OWASP_Vicnum </a></p>
	<a target="_blank" href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)">https://www.owasp.org/index.php/Cross-site_Scripting_(XSS) </a></p>
	<a target="_blank" href="https://www.owasp.org/index.php/Types_of_Cross-Site_Scripting#Reflected_XSS_.28AKA_Non-Persistent_or_Type_II.29">https://www.owasp.org/index.php/Types_of_Cross-Site_Scripting#Reflected_XSS_.28AKA_Non-Persistent_or_Type_II.29 </a></p>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Introduzca su mensaje aqu�.  
            <form method='get' action=''>
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="Ingrese Mensaje aqui" name="item"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Enviar</button></div>
               </div> 
            </form>
            <?php
                echo $_GET['item'];
            ?>
        </p>
    </div>
      
    <hr>
    
</div>
<?php include_once('../../about.html'); ?>