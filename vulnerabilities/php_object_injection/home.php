 <div class="thumbnail">
    <div class="caption-full">
        <h3><a href="#">Inyecci�n de Objetos PHP</a></h3>
        
        <p align="justify">
		Aunque PHP Object Injection no es una vulnerabilidad muy com�n y tambi�n dif�cil de explotar, se considera que es una vulnerabilidad realmente peligrosa, ya que podr�a 
		llevar a un atacante a realizar diferentes tipos de ataques maliciosos, como Inyecci�n de c�digo, Inyecci�n SQL, Rutas transversales y Denegaci�n de servicio,
	        seg�n el contexto de la aplicaci�n. La vulnerabilidad de inyecci�n de objetos PHP ocurre cuando las entradas suministradas por el usuario no se sanitizan adecuadamente 
		antes de pasar a la funci�n PHP unserialize () en el servidor. Dado que PHP permite la serializaci�n de objetos, los atacantes podr�an pasar cadenas seriales ad-hoc 
		a las llamadas unserialize() vulnerables, lo que da como resultado una inyecci�n arbitraria de objetos PHP en el alcance de la aplicaci�n.<br><br>
        </p>         
	<p>Leer m�s de Inyecci�n de objetos PHP<br><br>
	<strong><a target="_blank"href="http://www.elladodelmal.com/2014/11/ataques-de-php-object-injection-en.html">http://www.elladodelmal.com/2014/11/ataques-de-php-object-injection-en.html</a></p></strong>
        <strong><a target="_blank"href="http://blog.alguien.site/2013/08/php-object-injection.html">http://blog.alguien.site/2013/08/php-object-injection.html</a></p></strong>
	<strong><a target="_blank"href="https://www.owasp.org/index.php/PHP_Object_Injection">https://www.owasp.org/index.php/PHP_Object_Injection</a></p></strong>

        </div>

    </div>
    <div class="well">
        <p>
            <form method="get" action="">
                <div class="form-group">
                    <div class="text-left">
                        <label></label>
                    <div class="form-group" align="left"> 
                        <a class="btn btn-primary" href='?r=a:2:{i:0;s:4:"XVWA";i:1;s:33:"Xtreme Vulnerable Web Application";}' type="submit">HAGA CLICK AQU�</a>
                    </div>
                        <?php 
                            class PHPObjectInjection{
                                public $inject;

                                function __construct(){

                                }

                                function __wakeup(){
                                    if(isset($this->inject)){
                                        eval($this->inject);
                                    }
                                }
                            }
                            
                            if(isset($_REQUEST['r'])){  
                                
                                $var1=unserialize($_REQUEST['r']);

                                if(is_array($var1)){ 
                                    echo "<br/>".$var1[0]." - ".$var1[1];
                                    
                                }
                            }else{
                                echo ""; # nothing happens here
                            }
                        ?>
         </div>
     </div>
 </form>
</p>      
<hr>

</div>
<?php include_once('../../about.html'); ?>