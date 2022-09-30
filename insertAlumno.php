
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
    type="submit" value="Guardar" name="Guardar"><input type="submit" value="Mostrar" name="Mostrar"><input type="submit" value="Eliminar" name="Eliminar">
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
               
                $DNI = $_GET['DNI'];
                
                if($DNI != NULL){
                    if(!comprobarExistencia2($DNI, $alumnos)){
                        
                    }
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
    
    function comprobarExistencia2($param) {
        $pagina = file_get_contents('Alumnos_txt');
        $pos = strpos($pagina, $param);
        
        return $pos?true:false;
    }
   
    ?>
    
    
</body>
</html>