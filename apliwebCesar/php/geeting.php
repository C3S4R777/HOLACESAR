<?php
/*
     *Descripcion: componente los datos de formulario 
     * Autor: cesar omar godinez valdez 
     *fecha: 12/10/2022
     */ // obtiene nombre de formulario 
     $name = $_POST["nombre"];
     echo "hello $name <br>";

     $eda = $_POST["Edad"];
     echo "edad: $eda <br>";

     $tel = $_POST["telefono"];
     echo "telefono: $tel <br>";

     echo "<a href='../html/geetingForm.html'>REGRESAR</a>";