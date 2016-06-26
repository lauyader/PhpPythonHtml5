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

        function MuestraVideo(Mostrar){

            var capa;
            if (Mostrar == 'Si')
            {
              console.log('Paso SI');
            capa = document.getElementById('Video');
            capa.style.display = 'block';
            }else{
            capa = document.getElementById('Video');
            capa.style.display = 'none';
            }  

        }

    function init() {
        var button;
    
        //button = webiopi().createButton("bt_up", "^", go_forward, stop).addClass('btn btn-warning');
        //$("#up").append(button);
        
       // button = webiopi().createButton("bt_left", "<", turn_left, stop).addClass('btn btn-warning');
       // $("#middle").append(button);
        
       // button = webiopi().createButton("bt_stop", "X", stop).addClass('btn btn-warning');
       // $("#middle").append(button);
        
       // button = webiopi().createButton("bt_right", ">", turn_right, stop).addClass('btn btn-warning');
       // $("#middle").append(button);
        
       // button = webiopi().createButton("bt_down", "v", go_backward, stop).addClass('btn btn-warning');
       // $("#down").append(button);
    }
    
    function go_forward() {
         console.log('presione avanzar');
        webiopi().callMacro("go_forward");
        
    }
        
    function go_backward() {
        webiopi().callMacro("go_backward");
    }
        
    function turn_right() {
      console.log('presione cruzar a  derecha');
    
        webiopi().callMacro("turn_right");
    }    
        
    function turn_left() {
       console.log('presione cruzar a  izquierda');
        webiopi().callMacro("turn_left");
    }
        
    function stop() {
        webiopi().callMacro("stop");
    }
    
    function luces_encender() {
      console.log('Encender luces');
        webiopi().callMacro("luces_encender");
    }

    function luces_apagar() {
      console.log('Apagar Luces');
        webiopi().callMacro("luces_apagar");
    }
    webiopi().ready(init);
        
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
<div class= "container-flow">
      <!-- Tope del sistema -->      

      <div class="row">
        <h4>CaraboBots</h4>
      </div>

      <!-- Fin del tope-->


      <div align="center" class="row well">
           <h1 style="color:red;">Sistema de Control de Vehículo RC vía Wifi</h1>
           <h3>Laboratorio Experimental de BotLAUYADER</h3>
           <h4> Raspberry B+, Html5, Javascript, Python y Bootstrap 3 </h4>

           <h5> Adaptación: Luis Americo Auyadermont </h5>
           <h6> Código tomado de: Cambot se le agrega OPENCV</h6>    
     </div>

    <!-- Tabla de Control dels Sistema vehículos -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  


    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
     <br>
     <br>
     <h3 style="color:blue;">Control Ventana de Video</h3>
     
       <div class="btn-group-vertical" role="group">

              <button class="btn btn-primary btn-lg" type="button" onmousedown="MuestraVideo('No')" onmouseup="stop"> Apagar Video</button>
       <br>
               <button class="btn btn-success btn-lg" type="button" onmousedown="MuestraVideo('Si')" onmouseup="stop"> Encender Video</button>
        

    <br>
  
       <h3 align="center" style="color:blue;">Opiones del Vehículo</h3>
        <div align="center" class="btn-group-vertical" role="group">


              <button class="btn btn-danger btn-lg" type="button" onmousedown="luces_encender()" onmouseup="stop"> Encender Luces</button>
       <br>
               <button class="btn btn-warning btn-lg" type="button" onmousedown="luces_apagar()" onmouseup="stop">Apagar Luces</button>
        </div>
        </div>

        </div>
 
 
<!-- Columna que muestra la ventana de video -->


        <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
           <br> <br>
              <div id="Video"  align="center">
                <iframe width="320" height="240" src="http://localhost:8081/" frameborder="1"></iframe>         
             </div>
             <h4 style="color:blue;">Imagen de la Camara wifi </h4>
        </div>

<!-- Columna para controlar los sensores-->

      <div id="Sensores" class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
      <br><br>
        <h3 align="center" style="color:blue;">Sensores del Vehículo</h3>
              <br>
  
       
        <div align="center" class="btn-group-vertical btn-lg" role="group">

              <button class="btn btn-success btn-lg" type="button" onmousedown="go_forward" onmouseup="stop"> Temperatura</button>
       <br>
               <button class="btn btn-danger btn-lg" type="button" onmousedown="go_forward" onmouseup="stop">Movimiento</button>
        <br>
               <button class="btn btn-primary btn-lg" type="button" onmousedown="go_forward" onmouseup="stop">Humedad</button>

        </div>
        
   
         </div>
</div>     
<br>

<!-- Botones de Navegación del Vehículo -->

        <div id="content" class="row well" align="center">

            <table border="0" align ="center">

              <tr align="center">
                <td> 
                </td>
                <td>   <!-- Boton para Avanzar-->
                                <button class="btn btn-warning  btn-lg glyphicon glyphicon-arrow-up " type="button" onmousedown="go_forward()" onmouseup="stop"></button></td>
                <td> 
                </td>
              </tr>


 
              <tr align="center">
                <td><button class="btn btn-warning btn-lg glyphicon glyphicon-arrow-left  " type="button" onmousedown="turn_left()"i onmouseup=""></button></td><td>   <!-- Boto para parar-->
                                <button class="btn btn-warning btn-lg glyphicon glyphicon-off " type="button" onmousedown="stop()" onmouseup="stop()"></button></td><td><button class="btn btn-warning btn-lg glyphicon glyphicon-arrow-right " type="button" onmousedown="turn_right()" onmouseup=""> </button></td>
              </tr>

              <tr align="center">
                <td> 
                </td>
                <td>   <!-- Boto para parar-->
                                <button class="btn btn-warning  btn-lg glyphicon glyphicon-arrow-down  " type="button" onmousedown="go_backward()" onmouseup="stop"></button></td>
                <td> 
                </td>
              </tr>



            </table>


              <!--
              <div id="up">
                 <button class="btn btn-warning  btn-lg glyphicon glyphicon-arrow-up " type="button" onmousedown="go_forward()" onmouseup="stop"></button> 
              </div>

            	<div id="middle"> 
              <td align="center">
                               
                                <button class="btn btn-warning btn-lg glyphicon glyphicon-arrow-left  " type="button" onmousedown="turn_left()"i onmouseup=""></button>
      			  </td> 
                                <td>
                                                                 <button class="btn btn-warning btn-lg glyphicon glyphicon-off " type="button" onmousedown="stop()" onmouseup="stop()"></button>

                                </td> 
      			    <td>
                                <button class="btn btn-warning btn-lg glyphicon glyphicon-arrow-right " type="button" onmousedown="turn_right()" onmouseup=""> </button>

                                </td>
              </div>

              <div id="down">
                       
                     <button class="btn btn-warning  btn-lg glyphicon glyphicon-arrow-down  " type="button" onmousedown="go_backward()" onmouseup="stop"></button>


              </div>

            -->
        </div>
    
           
      <div class="row well" align="center">
            <h4> Código tomado de Cambot<br> http://www.hackplayers.com/2013/12/construye-tu-propio-rover-teledirigido-con-rpi-webiopi.html, <br> <h6>adaptado con bootstrap 3.0 <br>por Luis Americo Auyadermont</h6> </h4> 
      </div>
 

</div>

</body>
</html>
