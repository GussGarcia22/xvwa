 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Falsificaci�n de Solicitudes del Lado del Servidor (SSRF/XSPA)</a></h3>
        
        <p align="justify">
        Esta vulnerabilidad tambi�n conocida como Cross Site Port Attack ocurre cuando un atacante tiene la capacidad de iniciar solicitudes desde el servidor afectado. Un atacante puede enga�ar al servidor web que probablemente se ejecute detr�s de un firewall para que se env�e solicitudes a s� mismo para identificar los servicios que se ejecutan en �l, o incluso puede enviar tr�fico de enlace a otros servidores.
        </p><br><br>
        <p>Leer m�s de Falsificaci�n de solicitudes del lado del servidor <br><br>
	<a target="_blank" href="http://www.elladodelmal.com/2015/04/ssrf-server-side-request-forgery-xspa.html">http://www.elladodelmal.com/2015/04/ssrf-server-side-request-forgery-xspa.html</a></p>
	<a target="_blank" href="http://blog.elevenpaths.com/2015/11/como-funciona-server-side-request.html">http://blog.elevenpaths.com/2015/11/como-funciona-server-side-request.html</a></p>
        <a target="_blank" href="https://docs.google.com/document/d/1v1TkWZtrhzRLy0bYXBcdLUedXGb9njTNIJXa3u9akHM/edit">https://docs.google.com/document/d/1v1TkWZtrhzRLy0bYXBcdLUedXGb9njTNIJXa3u9akHM/edit</a></p>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Ingrese una URL de imagen desde un servidor remoto o internet.  
            <form method='post' action=''>
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="Ingrese la URL de la imagen" name="img_url"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Leer imagen</button></div>
               </div> 
            </form>
            <?php
                $image = "";
                if(isset($_POST['img_url'])){
                    $remote_content = file_get_contents($_POST['img_url']);
                    $filename = "imagenes/".rand()."img1.jpg";
                    file_put_contents($filename, $remote_content);
                    echo $_POST['img_url']."<br>";
                    $image = "<img src=\"".$filename."\" width=\"100\" height=\"100\" />";
                }
                echo $image;
            
            ?>
        </p>
    </div>
      
    <hr>

</div>
<?php include_once('../../about.html'); ?>