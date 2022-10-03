
<!DOCTYPE html>
<html>
<head>
<title>Insert alumno</title>
<meta charset="UTF-8">
</head>
<body>
<h1>Alumnos 2DAW3</h1><br>
<h2>Insertar nuevo alumno</h2>
<form>
	<input name="name" placeholder="name"><br><input name="DNI"
    placeholder="DNI"> <br><input name="email" placeholder="email"> <br>
    <input name="ciclo" placeholder="ciclo"><br><input name="tutor" placeholder="tutor"><br><input name="dni_tutor" placeholder="dni_tutor"><br><input
    type="submit" value="Guardar" name="Guardar"><input type="submit" value="Mostrar" name="Mostrar"><input type="submit" value="Eliminar" name="Eliminar"><input type="submit" value="Modificar" name="Modificar">
    </form>
    
    <?php
    include 'Persona.php';
    include 'Docente.php';
    include 'Alumno.php';
        
    
        $alumnos = Alumno::getAlumnosUnselizados('Alumnos_txt');
        
        
        if(isset($_GET['Guardar'])){
            
            
            if (isset($_GET['name']) && isset($_GET['DNI']) && isset($_GET['email']) && isset($_GET['ciclo']) && isset($_GET['tutor'])&& isset($_GET['dni_tutor'])) {
                
                $nombre = $_GET['name'];
                $DNI = $_GET['DNI'];
                $ciclo = $_GET['ciclo'];
                $tutor = $_GET['tutor'];
                $email = $_GET['email'];
                $dni_tutor = $_GET['dni_tutor'];
                
                if($nombre != NULL && $DNI != NULL && $ciclo != NULL && $tutor != NULL && $email != NULL && $dni_tutor != NULL){
                    if(!comprobarExistencia($DNI)){
                        $tutor = new Docente($tutor,$dni_tutor);
                        $alumnoNuevo = new Alumno($nombre, $DNI, $email, $ciclo, $tutor);
                        //$alumnoNuevo->printHTML();
                        
                        $alumnos[] = $alumnoNuevo;
                        
                        Alumno::guardarSerializado('Alumnos_txt', $alumnos);
                    }else{
                        echo "<p style='color:red'> El alumno ya existe</p>";
                    }
                }else{
                    echo "<p style='color:red'> Inserte todos los datos en los campos</p>";
                }
            }
        }elseif(isset($_GET['Mostrar'])){
             //limpiarPantalla();
            if($alumnos != null && count($alumnos) != 0){
                foreach ($alumnos as $alumno) {
                    $alumno->printHTML();
                }
            }else{
                echo "<p style='color:red'>No hay alumnos</p><br>";
            }
        }elseif(isset($_GET['Eliminar'])){
            if (isset($_GET['DNI'])) {
               
                $DNI_elimi = $_GET['DNI'];
                
                if($DNI_elimi != NULL){
                    if(comprobarExistencia($DNI_elimi)){
                        foreach ($alumnos as $key => $value){
                            if($value->getDNI() == $DNI_elimi){
                                unset($alumnos[$key]);
                            }
                        }
                        Alumno::guardarSerializado('Alumnos_txt', $alumnos);
                    }else{
                        echo "<p style='color:red'>El alumno no existe</p><br>";
                    }
                }else{
                    echo "<p style='color:red'>Inserte un DNI valido</p><br>";
                }
            }
        }elseif(isset($_GET['Modificar'])){
            if (isset($_GET['name']) && isset($_GET['DNI']) && isset($_GET['email']) && isset($_GET['ciclo']) && isset($_GET['tutor'])&& isset($_GET['dni_tutor'])) {
                
                $nombre_modi = $_GET['name'];
                $DNI_encontrar = $_GET['DNI'];
                $ciclo_modi = $_GET['ciclo'];
                $tutor_modi = $_GET['tutor'];
                $email_modi = $_GET['email'];
                $dni_tutor_modi = $_GET['dni_tutor'];
                
                if($nombre_modi != NULL && $DNI_encontrar != NULL && $ciclo_modi != NULL && $tutor_modi != NULL && $email_modi != NULL && $dni_tutor_modi != NULL){
                    if(comprobarExistencia($DNI_encontrar)){
                        
                        foreach ($alumnos as $key => $value){
                            if($value->getDNI() == $DNI_encontrar){
                                unset($alumnos[$key]);
                                $tutor = new Docente($tutor_modi,$dni_tutor_modi);
                                $alumnoNuevo = new Alumno($nombre_modi, $DNI_encontrar, $email_modi, $ciclo_modi, $tutor);
                                $alumnos[$key] = $alumnoNuevo;
                                Alumno::guardarSerializado('Alumnos_txt', $alumnos);
                            }
                        }
                    }else{
                        echo "<p style='color:red'> El alumno no existe</p>";
                    }
                }else{
                    echo "<p style='color:red'> Inserte todos los datos en los campos</p>";
                }
            }
        }
    ?>
    
    <?php
    function comprobarExistencia($param) {
        $pagina = file_get_contents('Alumnos_txt');
        $pos = strpos($pagina, $param);
        
        return $pos?true:false;
    }
    
   /*function comprobarExistencia2($param1, $param2) {
        
        $enc = FALSE;
        
        for($i = 0; $i < count($param2); $i++){
            if($param2[$i]->getDNI() == $param1){
                $enc = TRUE;
            }
        }
        return $enc;
    }*/
   
    ?>
    
    
</body>
</html>