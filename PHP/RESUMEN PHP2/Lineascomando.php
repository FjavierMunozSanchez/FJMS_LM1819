<div class="container">
            <h2>Insertar Alumno</h2>
            <form action="insertar.php" method="post">
            <!--Tipo number-->
                <div class="form-group">
                    <label for="idproduct">ID PRODUCTO</label>
                    <input type="number" class="form-control" name="idproduct" id="idproducto"/>
                </div>
                <!--Tipo text-->
                <div class="form-group">
                    <label for="descrip">DESCRIPCION</label>
                    <input type="text" class="form-control" name="descrip" id="descrip">
                </div>
                <!--Tipo password-->
                <p><label>Pass: </label><input type="password" name="clave"></p>

                <!--TIPO RADIO: En vez de ser cuadrado (TIPO CHECKBOX) es redondo-->
                <!--VALUE: Le damos un valor-->
                <p>
                 <input type="radio" name="datos" value="66" checked>Dato1
                 <input type="radio" name="datos" value="77">Dato2
                </p>

                <!--Tipo texarea-->
                <p><label>Descripción: </label><textarea rows="5" cols="5" name="descrip">
                    Esta es la descripción</textarea></p>
                <!--Campo Email-->
                <label for="email">Email</label>
                <input type="text" name="email" id="email" /><br />
                
                <!--Tipo checkbox-->
                <p><input type="checkbox" name="opcion" value="123">Opción</p>

                <!--Tipo Select y option-->
                <div class="form-group">
                <label for="idprov">ID PROVEEDOR</label>
                    <select name="idprov" class="form-control" >
                        <?php
						//CAMBIAMOS LOS OPTION DEL SELECT POR UN BLOQUE PHP CON ESTO CONSEGUIMOS QUE ESTE OPTION SE ACTUALICE CUANDO LA BASE DE DATOS SE MODIFIQUE
						//Conectamos a la base de datos
                        $conexion = mysqli_connect("localhost", "root", "", "bdejemplo") 
                            or die("Problemas de conexiÃ³n");
						//Hacemos la consulta apuntando a la columna idCurso de la tabla cursos.
                        $registros = mysqli_query($conexion, "SELECT idProveedor FROM productos")
                            or die("Problemas en el select".mysqli_error($conexion));
						//Hacemos un WHILE donde vamos a colocar el OPTION
						//VALUE='El valor donde queremos gurdar en la BD'
						//$reg[nombreCurso]: El valor que queremos mostrar.
                        while ($reg = mysqli_fetch_array($registros)) {
                            echo "<option value='$reg[idProveedor]'>$reg[idProveedor]</option>";
                        }

                        ?>
                    </select>
                </div>



                <p>

                    <!--Poner un boton para volver-->
                    <a href="archivo1.php">Volver</a>
                    <!--Insertar o enviar-->
                    <input type="submit" class="btn btn-primary btn-block" value="Insertar">
                </p>
            </form>