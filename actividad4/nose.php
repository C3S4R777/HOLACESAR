<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba HTML</title>
</head>
<body>
    <h1 id="titulo" onmouseover="cambiaAMorado()" onmouseout="cambiaANegro()"> SOY UNA SIMPLE PÁGINA HTML </h1>
    <button id="rojo" onclick="cambiaARojo()">Soy el Rojo</button>
    <button id="amarillo" onclick="cambiaAAmarillo()">Soy el Amarillo</button>
    <button id="verde" onclick="cambiaAVerde()">Soy el Verde</button>
    

    <script> 
        
        function cambiaAMorado(){
            document.getElementById("titulo").style.color = "purple"
            document.getElementById("etiqueta").style.color = "red"
        }
        function cambiaARojo(){
            alert("Me hiciste KATAPLUM")
            document.getElementById("rojo").style.color = "red"
            document.getElementById("titulo").style.color = "red"
        }
        function cambiaAAmarillo(){
            alert("Me hiciste KATAPLUM")
            document.getElementById("amarillo").style.color = "yellow"
            document.getElementById("titulo").style.color = "yellow"
        }
        function cambiaAVerde(){
            alert("Me hiciste KATAPLUM")
            document.getElementById("verde").style.color = "green"
            document.getElementById("titulo").style.color = "green"
        }    
    </script>

</body>
</html>