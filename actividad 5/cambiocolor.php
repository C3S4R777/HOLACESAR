<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activiudad 4</title>
</head>
<body>
    <h1>soy una simple pagina</h1>
    <button style="background-color:red">red ></button>
    <button style="background-color:blue">blue ></button>
    <button style="background-color:green">green></button>
    
    
    <script> 
        
        function cambiaAMorado(){
            document.getElementById("titulo").style.color = "purple"
            document.getElementById("etiqueta").style.color = "red"
        }
        function cambiaARojo(){
            alert("OUUUCH")
            document.getElementById("rojo").style.color = "red"
            document.getElementById("titulo").style.color = "red"
        }
        function cambiaAAmarillo(){
            alert("OUUUCH")
            document.getElementById("amarillo").style.color = "yellow"
            document.getElementById("titulo").style.color = "yellow"
        }
        function cambiaAVerde(){
            alert("OUUUCH")
            document.getElementById("verde").style.color = "green"
            document.getElementById("titulo").style.color = "green"
        }    
    </script>
    
    
</body>
</html>