 

<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Inyecci�n SQL - Basada en Error</a></h3>
        
        <p align="justify">
        Inyecci�n de SQL: uno de los problemas m�s importantes en la seguridad de las aplicaciones Web, es una t�cnica de ataque mediante la cual un usuario malintencionado puede ejecutar
        c�digo SQL con el privilegio en el que se configura la aplicaci�n. Las inyecciones de SQL basadas en errores son f�ciles de detectar y explotar a�n m�s. Responde a la solicitud del
        usuario con mensajes de error de back-end detallados. Estos mensajes de error se generan debido a solicitudes de usuarios especialmente dise�adas, de modo que se rompe la sintaxis 
        de consulta SQL utilizada en la aplicaci�n. <br><br>
        </p>
        <p>Leer m�s de Inyecci�n SQL - Basada en Error <br><br>
        <a target="_blank" https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL">https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL</a></p>
	<a target="_blank" https://backtrackacademy.com/articulo/inyeccion-sql-definicion-y-ejemplos">https://backtrackacademy.com/articulo/inyeccion-sql-definicion-y-ejemplos</a></p>
	<a target="_blank" https://backtrackacademy.com/articulo/sqlmap-parte-1-automatizando-inyeccion-sql">https://backtrackacademy.com/articulo/sqlmap-parte-1-automatizando-inyeccion-sql</a></p>
	<a target="_blank" https://backtrackacademy.com/articulo/sqlmap-parte-1-automatizando-inyeccion-sql">https://backtrackacademy.com/articulo/sqlmap-parte-1-automatizando-inyeccion-sql</a></p>
	<a target="_blank" https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL">https://www.owasp.org/index.php/Inyecci%C3%B3n_SQL</a></p>
    </div>
    
    </div>

    <div class="well">
        <div class="col-lg-6"> 
            <p>Buscar por c�digo de art�culo o usar la opci�n de b�squeda
                <form method='post' action=''>
                    <div class="form-group"> 
                        <label></label>
                        <select class="form-control" name="item">
                            <option value="">Seleccionar art�culo</option>
                            <?php 
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            include('../../config.php');
                            if($conn->connect_errno > 0){
                                echo "Error al conectarse a la base de datos";
                            }else{
                                $sql = 'select itemid from caffaine';
                                $result = $conn->query($sql);
                                while($rows = $result->fetch_assoc()) {
                                    echo "<option value=\"".$rows['itemid']."\">".$rows['itemid']."</option>";
                                }
                            } 

                            echo "</select><br>";
                            echo "<input class=\"form-control\" width=\"50%\" placeholder=\"Buscar\" name=\"search\"></input> <br>";
                            echo "<div align=\"right\"> <button class=\"btn btn-default\" type=\"submit\">Enviar</button></div>";
                            echo "</div> </form> </p>";
                            echo "</div>";
                            $item = isset($_POST['item']) ? $_POST['item'] : '';
                            $search = isset($_POST['search']) ? $_POST['search'] : '';
                            $isSearch = false;
                            if(($item!="") && $search!=""){ 
                                echo "<br><ul class=\"featureList\">";
                                echo "<li class=\"cross\">�Error! No se puede usar la opci�n de b�squeda y c�digo de elemento. Busque usando cualquiera de estas opciones.</li>";
                                echo "</ul>";
                            }else if($item){
                                $sql = "select * from caffaine where itemid = ".$item;
                                $result = $conn->query($sql);
                                $isSearch = true;
                            }else if($search){
                                $sql = "SELECT * FROM caffaine WHERE itemname LIKE '%" . $search . "%' OR itemdesc LIKE '%" . $search . "%' OR categ LIKE '%" . $search . "%'";
                                $result = $conn->query($sql);
                                $isSearch = true;
                            }
                            if($isSearch){
                                echo "<table>";
                                while($rows = $result->fetch_assoc()){
                                    echo "<tr><td><b>Item Codigo : </b>".$rows['itemcode']."</td><td rowspan=5>&nbsp;&nbsp;</td><td rowspan=5 valign=\"top\" align=\"justify\"><b>Descripci�n : </b>".$rows['itemdesc']."</td></tr>";
                                    echo "<tr><td><b>Item Nombre : </b>".$rows['itemname']."</td></tr>";
                                    echo "<td><img src='".$rows['itemdisplay']."' height=130 weight=20/></td>";
                                    echo "<tr><td><b>Categoria : </b>".$rows['categ']."</td></tr>";
                                    echo "<tr><td><b>Precio : </b>".$rows['price']."$</td></tr>"; 
                                    echo "<tr><td colspan=3><hr></td></tr>";
                                }
                                echo "</table>"; 
                            }

                            ?>



                            <hr>
                            
                        </div>
                    </div>
                </div>
                
                <?php include_once('../../about.html'); ?>