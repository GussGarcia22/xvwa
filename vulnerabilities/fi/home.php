 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inclusi�n de Archivos</a></h3>
        
        <p align="justify">
        La inclusi�n de archivos es un ataque que permitir�a a un atacante acceder a archivos no deseados en el servidor. Esta vulnerabilidad explota la funcionalidad de la aplicaci�n para incluir archivos din�micos. Dos categor�as en este ataque son Inclusi�n de archivos locales (LFI) e Inclusi�n de archivos remotos (RFI). 
        </p><br><br>
        <p>Leer m�s de Inclusi�n de archivos<br><br>
	<a target="_blank" https://www.welivesecurity.com/la-es/2015/01/12/como-funciona-vulnerabilidad-local-file-inclusion/">https://www.welivesecurity.com/la-es/2015/01/12/como-funciona-vulnerabilidad-local-file-inclusion/</a>
        <a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion">https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion</a>
        <a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion">https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion</a>
	
        </p>

    </div>

</div>

<div class="well">

    <p>
        <form method="get" action="">
            <div class="form-group">
                <br>
                <div class="text-left">
                <?php 
                    $f='readme.txt';
                    echo "<a class=\"btn btn-primary\" href=\".?file=$f\" /> Haga click aqu� </a><br><br>";

                    if($file=$_GET['file']){
                        include($file);
                    }                    
                ?>
                </div>
            </div>
        </form>
    </p>

      
    <hr>
    
</div>
<?php include_once('../../about.html'); ?>