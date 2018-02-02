 

<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h3><a href="#">Falta del Control de Acceso a Nivel Funcional</a></h3>
        
        <p align="justify">
        Esta vulnerabilidad existe cuando la aplicaci�n tiene una protecci�n de derechos de acceso insuficiente. La aplicaci�n a veces oculta acciones sensibles de los roles de los usuarios, pero se olvida de garantizar los derechos de acceso si el usuario intenta predecir / usar un par�metro espec�fico para desencadenar esa acci�n. Este problema podr�a conducir a mucho m�s complejo y afectar la l�gica de negocios tambi�n.  
        </p><br><br>
        <p>Leer m�s de Falta del control de acceso a nivel funcional <br><br>
        <a target="_blank" href="https://www.owasp.org/index.php/Top_10_2007-Falla_de_restricci%C3%B3n_de_acceso_a_URL">https://www.owasp.org/index.php/Top_10_2007-Falla_de_restricci%C3%B3n_de_acceso_a_URL </a></p>
	<a target="_blank" http://www.securitybydefault.com/2012/05/dorodri-falla-de-restriccion-de-acceso.html">http://www.securitybydefault.com/2012/05/dorodri-falla-de-restriccion-de-acceso.html </a></p>
	<a target="_blank" href="https://www.owasp.org/index.php/Top_10_2013-A7-Missing_Function_Level_Access_Control">https://www.owasp.org/index.php/Top_10_2013-A7-Missing_Function_Level_Access_Control </a></p>
    </div>

    </div>

    <div class="well">
        <div class="col-lg-6"> 
            <p>Buscar por c�digo de art�culo para ver los detalles 
                <form method='GET' action=''>
                    <div class="form-group"> 
                        <label></label>
                        <select class="form-control" name="item">
                            <option value="">Seleccionar c�digo de art�culo</option>
                            <?php
                            include('../../config.php');
                            
                            if($conn1){
                                $sql= 'select itemid from caffaine';
                                $stmt = $conn1->prepare($sql);
                                $stmt->execute();
                                while($rows = $stmt->fetch(PDO::FETCH_NUM)){
                                    echo "<option value=\"".$rows[0]."\">".$rows[0]."</option>";
                                }
                            } 

                            echo "</select><br>";
                            echo "<div align='right'> <button class='btn btn-default' type='submit' name='action' value='view'>Visualizar</button>&nbsp;&nbsp;";
                            if($_SESSION['user'] == 'admin'){
                                echo "<button class='btn btn-default' type='submit' name='action' value='delete'>Eliminar</button></div>";
                            }else{
                                echo "</div>";
                            }
                            echo "</div> </form> </p>";
                            echo "</div>";
                            $item = isset($_GET['item']) ? $_GET['item'] : '';
                            $action = isset($_GET['action']) ? $_GET['action'] : '';
                            if($action=='view'){
                                $sql = "select itemcode,itemname,itemdisplay,itemdesc,categ,price from caffaine where itemid = :itemid";
                                $stmt = $conn1->prepare($sql);
                                $stmt->bindParam(':itemid',$item);
                                $stmt->execute();
                                echo "<table>";

                                while($rows = $stmt->fetch(PDO::FETCH_NUM)){
                                    echo "<tr><td><b>Item Codigo : </b>".htmlspecialchars($rows[0])."</td><td rowspan=5>&nbsp;&nbsp;</td><td rowspan=5 valign=\"top\" align=\"justify\"><b>Description : </b>".htmlspecialchars($rows[3])."</td></tr>";
                                    echo "<tr><td><b>Item Nombre : </b>".htmlspecialchars($rows[1])."</td></tr>";
                                    echo "<td><img src='".htmlspecialchars($rows[2])."' height=130 weight=20/></td>";
                                    echo "<tr><td><b>Categoria : </b>".htmlspecialchars($rows[4])."</td></tr>";
                                    echo "<tr><td><b>Precio : </b>".htmlspecialchars($rows[5])."$</td></tr>"; 
                                    echo "<tr><td colspan=3><hr></td></tr>";
                                }
                                echo "</table>";
                            }else if($action=='delete'){
                                $sql="delete from caffaine where itemid=:itemid";
                                $stmt=$conn1->prepare($sql);
                                $stmt->bindParam(':itemid',$item);
                                $stmt->execute();
                                if($stmt->rowCount()){
                                    echo "Art�culo eliminado con �xito.";
                                } 
                            }

                            ?>



                            <hr>
                            
                        </div>
                    </div>
                </div>
                
                <?php include_once('../../about.html'); ?>