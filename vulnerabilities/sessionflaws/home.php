 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Flags de Sesiones Web </a></h3>
        
        <p align="justify">
        Las aplicaciones web requieren una mejor gesti�n de sesi�n para seguir el estado de la aplicaci�n y sus actividades para los usuarios. Una gesti�n de sesi�n insegura puede provocar ataques como la predicci�n de la sesi�n, el secuestro, la fijaci�n y los ataques de repetici�n. 
        </p><br><br>
        <p>Leer m�s de Flags de sesiones Web  <br><br>
	<a target="_blank" href="https://diego.com.es/seguridad-de-sesiones-en-php">https://diego.com.es/seguridad-de-sesiones-en-php</a></p>
        <a target="_blank" href="https://www.owasp.org/index.php/Session_Management_Cheat_Sheet">https://www.owasp.org/index.php/Session_Management_Cheat_Shee</a></p>

    </div>
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>
        <strong>
            <?php
            if($_SESSION['user']){
                echo "Bienvenido ". ucfirst($_SESSION['user']); 
                echo "<br><br><a href='../../logout.php'>Salir de la aplicaci�n</a>";
            }else{
                echo "No has iniciado sesi�n. <br> Por favor, inicia sesi�n y vuelve a intentarlo.";
            }
        ?>
        </strong>
        </p>



    </div>
      
    <hr>
    
</div>
