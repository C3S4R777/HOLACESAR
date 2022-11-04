<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba HTML</title>
</head>
<body>
    <h1 id="cesar" onmouseover="cambiaAMorado()" onmouseout="cambiaANegro()"> SOY UNA SIMPLE PÁGINA </h1>
    <button id="btnrojo" style="background-color:red" onmouseover="rojo()">RED</button>
    <button id="btnazul" onclick="cambiaAAzul()">BLUE</button>
    <button id="btnverde" onclick="cambiaAVerde()">GREEN</button>
    

    <script> 
        
        function cambiaAMorado(){
            document.getElementById("cesar").style.color = "purple"
            document.getElementById("etiqueta").style.color = "red"
        }
        function cambiaARojo(){
            alert("OUUUCH soy rojo ")
            document.getElementById("rojo").style.color = "red"
            document.getElementById("cesar").style.color = "red"
        }
        function cambiaAAmarillo(){
            alert("OUUUCH soy azul ")
            document.getElementById("azul").style.color = "blue"
            document.getElementById("cesar").style.color = "blue"
        }
        function cambiaAVerde(){
            alert("OUUUCH soy verde ")
            document.getElementById("verde").style.color = "green"
            document.getElementById("cesar").style.color = "green"
        }    
    </script>

</body>
</html>