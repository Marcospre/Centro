<?php
include 'Ordenador.php';

$ordenadores=[
 new Ordenador("Windows","HZ112233", true),
 new Ordenador("Windows","HZ112234", true),
 new Ordenador("Windows","HZ112235", true),
 new Ordenador("Windows","HZ112236", false),
 new Ordenador("Linux","HZ112237", false),
];
 
 

?>

<html>
<body>
<table border="1">
<?php
echo "<tr><td>Codigo</td><td>SO</td><td>Sobremesa</td></tr>";
for($i = 0; $i < count($ordenadores); $i++){
    
    echo "<tr>";
    echo "<td>".$ordenadores[$i]->getCodHZ()."</td>";
    echo "<td>".$ordenadores[$i]->getSO()."</td>";
    echo "<td>".$ordenadores[$i]->getesSobremesa()."</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>