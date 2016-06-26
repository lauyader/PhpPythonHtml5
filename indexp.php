<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content = "height = device-height, width = 420, user-scalable = no" /> 
    <title>CamBot Modificado por Luis Americo Auyadermont</title>
 
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="/webiopi.js"></script>

    <style>
        table {
          margin: 15px;
          padding: 15px;
        }

    </style>

    <script type="text/javascript">
    
       var luces="leds.php"
    function  encender_luces(){
          console.log("hola")
 
            
            location.href=luces;
           
        }
    </script>
    <style type="text/css">
        button2 {
            margin: 5px 5px 5px 5px;
            width: 50px;
            height: 50px;
            font-size: 24pt;
            font-weight: bold;
            color: white;
        }

        table {
          margin: 15px;
          padding: 15px;
        }
        
        td {
          margin: 15px;
          padding: 15px;
          text-align: center
        } 
        tr {
          margin: 15px;
          padding: 15px;
           text-align: center
        }

    </style>
</head>
<body background="raspberrypu.jpg">
 <div class="container">
   
           <div align="center" class="btn-group-vertical" role="group">


              <button class="btn btn-danger btn-lg" type="button" onmousedown="encender_luces()" onmouseup="stop"> Encender Luces</button>
       <br>
               <button class="btn btn-warning btn-lg" type="button" onmousedown="luces_apagar()" onmouseup="stop">Apagar Luces</button>
        </div>

 </div>
</body>
</html>
