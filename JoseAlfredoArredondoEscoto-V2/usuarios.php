<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet"  type="text/css" href="css/estilosusuarios.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/Slider.css">
    <link rel="stylesheet" type="text/css" href="css/Registro%20de%20usuarios.css">
    
</head>
<body>
   
   <div class="caja">
        
    <div class="encabezado">
       <img id="logo" src="img/templatemo_logo.png" alt=" UTSOE">
       
      <div id="login">
                <form id="formulario2" action="proceso.php" method="POST" >
                    <table >
                        <tr>
                            <td><input type="text" id="txtusr" name="txtusr" placeholder="Usuario" autofocus></td>
                            <td><input type="password" id="txtpwd" placeholder="* * * * * *" name="txtpwd"></td>
                            <td><input type="submit" name="g" value="Aceptar" id="btn"></td>
                        </tr>
                    </table>
                </form>
             
      </div>
            
    </div>
         
    <div class="contenedor">
       
       <h1 style="text-align:center; font-family: sans-serif;">PRACTICA INSERTA NUEVO REGISTRO, ELIMINAR REGISTRO Y ACTUALIZAR REGISTRO</h1>
  
    </div>
       
          <div class="menu">
             <nav>
                <ul id="Box">
                 <li><a href ="usuarios.php" target="_self" class="Usuarios">Usuarios</a></li>
                 <li><a href="http://fredyarredondoescoto.blogspot.mx/" target="_blank" class="Blog">Blog</a></li>
                 <li> <a href="index.html" target="_self" class="Home">Home</a></li>
                 </ul>
             </nav>
              
          </div>
          
          <div class="contenido">

<!--.........................................................................................................................................-->           
            <div id="UsuarioNuevo">
                <form id="formulario3" action="agregar.php" method="POST" >
                   <h2 style="color: #fff;">Nuevo usuario</h2>
                    <table id="NewUser">
                        <tr>
                            <td>Id:</td>
                            <td><input type="text" id="txtnid" readonly="readonly" name="txtnid" placeholder="ID"></td>
                            <td>&nbsp;&nbsp;&nbsp;<input type="submit" name="g" value="Confirmar" id="btnconfirmar"></td>
                            <td>&nbsp;&nbsp;&nbsp;<input type="button" name="h" value="Nuevo" id="btnnuevo"></td>
                        </tr>
                        <tr>
                            <td>Usuario:</td>
                            <td><input type="text" id="txtnusr" name="txtnusr" placeholder="Usuario" autofocus></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" id="txtnpwd" name="txtnpwd" placeholder="*******"></td>
                        </tr>
                        <tr>
                            <td><label>Confirmar Password :</label></td>
                            <td><input type="password" id="txtconf_pwdusr" name="txtconf_pwdusr" placeholder="Verificar Password"></td>			
                        </tr>
                    </table>
                </form>
            </div>
<!--.........................................................................................................................................-->
            
              <article id="tablaU">
               <h1>USUARIOS REGISTRADOS EN LA BD</h1>

                <?php
                    require_once 'control/usuarios.php';
                    $clsusuarios = new usuarios();
                    $dsUsers = $clsusuarios->getUsers();                 
                    $tblusuarios = "<table id='listausuarios'";
                    $tblusuarios = $tblusuarios."<thead id='tencabezado'>";
                    $tblusuarios = $tblusuarios."<tr>";
                    $tblusuarios = $tblusuarios."<th></th>";
                    $tblusuarios = $tblusuarios."<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</th>";
                    $tblusuarios = $tblusuarios."<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USUARIO</th>";
                    $tblusuarios = $tblusuarios."<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACTUALIZAR&nbsp;&nbsp;</th>";
                    $tblusuarios = $tblusuarios."<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id='btnBorrar'>Eliminar</button></th>";
                    $tblusuarios = $tblusuarios."</tr>";
                    $tblusuarios = $tblusuarios."</thead>";
                    
                    $tblusuarios = $tblusuarios."<tbody id='tcuerpo'>";
                    
                    if(sizeof($dsUsers) > 0){
                        foreach ($dsUsers as $usuario){
                            $tblusuarios = $tblusuarios."<tr>";
                            $tblusuarios = $tblusuarios."<td><br>"."<input type='checkbox' name='seleccionar' id='".$usuario->getId()."'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></td>";
                            $tblusuarios = $tblusuarios."<td><br>".$usuario->getId()."</br></td>";
                            $tblusuarios = $tblusuarios."<td><br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$usuario->getUsername()."</br></td>";
                            $tblusuarios = $tblusuarios."<td><br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='button' class='btnrfs'><img src='ico/refresh-button.png' alt='Refresh''/></button>"."</br></td>";
                            $tblusuarios = $tblusuarios."</tr>";
                        }
                    } else {
                        $tblusuarios = $tblusuarios."<tr>";
                        $tblusuarios = $tblusuarios."<td>No existen usuarios</td>";
                        $tblusuarios = $tblusuarios."</tr>";
                    }
                
                
                $tblusuarios = $tblusuarios."</tbody>";
                $tblusuarios = $tblusuarios."</table>";
                  
                echo $tblusuarios;
                  
                ?>
                
            </article> 
                                         
                
          </div>
          
          <div class="destacados">

          
          </div>
          
          <div class="pie">
              <h3>Información de contacto:</h3>
              <table id="pinfo">
                  <tr>
                      <td><a href="http://fredyarredondoescoto.blogspot.mx/" target="_blank"><img src="ico/blogge.png" alt="blog"></a></td>
                      <td><a href="http://fredyarredondoescoto.blogspot.mx/" target="_blank">Blog personal</a></td>
                  </tr>
                  <tr>                      
                      <td><a href="https://www.facebook.com/skyangelus" target="_blank"><img src="ico/facebook-logo.png" alt="facebook"></a></td>
                      <td><a href="https://www.facebook.com/skyangelus" target="_blank">Facebook personal</a></td>
                  </tr>
                  <tr>                      
                      <td><a href="https://www.youtube.com/user/Fredyshippuden" target="_blank"><img src="ico/youtube.png" alt="youtube"></a></td>
                      <td><a href="https://www.youtube.com/user/Fredyshippuden" target="_blank">Canal de Youtube</a></td>
                  </tr>
                  <tr>                      
                      <td><a href="https://github.com/fredyarredondoescoto/Desarrollo-de-aplicaciones-web" target="_blank"><img src="ico/github-logo.png" alt="github"></a></td>
                      <td><a href="https://github.com/fredyarredondoescoto/Desarrollo-de-aplicaciones-web" target="_blank">Repositorio de desarrollo de aplicaciones web</a></td>
                  </tr>
                  <tr>
                      <td><img src="ico/opened-email-envelope.png" alt="mail"></td>
                      <td>alfredoarredondoescoto@live.com.mx</td>
                  </tr>
              </table> 
          </div>
    
   </div>
   
<script src="plugins/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
    //LOGIN............................................................................................................................
	// this is the id of the form
	$("#login").find("form").on("submit", function (event) {
     event.preventDefault();
		$.ajax({
          url: "proceso.php", 
          type: "POST",
          //datos del formulario
          data: $(this).serialize(),
          //una vez finalizado correctamente
          success: function (response) {
		 	if(response!=""){
				alert(response); 
				// show response from the php script.	
			}
          }
     });
	}); 
    
    //AGREGAR NUEVO USUARIO.............................................................................................................
    $("#UsuarioNuevo").find("form").on("submit", function (event) {
     event.preventDefault();
        if($('#txtnid').val() != ''){
            
            if($('#txtnpwd').val()==$("#txtconf_pwdusr").val()){
			$.ajax({
			  url: "actualizar.php", 
			  type: "POST",
			  //datos del formulario
			  data: $(this).serialize(),
			  //una vez finalizado correctamente
			  success: function (response) {
				  location.reload();
			  },
			  error: function (response) {
				   alert(response);
			  },
		   });
         }else{
			alert('Error password incorrecto'); 	
		 }
            
        }else{
            
            if($('#txtnpwd').val()==$("#txtconf_pwdusr").val()){
			$.ajax({
			  url: "agregar.php", 
			  type: "POST",
			  //datos del formulario
			  data: $(this).serialize(),
			  //una vez finalizado correctamente
			  success: function (response) {
				  location.reload();
			  },
			  error: function (response) {
				   alert(response);
			  },
		   });
         }else{
			alert('Error password incorrecto'); 	
		 }
            
        }
        
	});
    
    //BORRAR USUARIO...........................................................................................................................
    $("#btnBorrar").click(function (event) {
		$("input:checkbox[name=seleccionar]:checked").each(function() {
          var parametros = {
          		"ID": $(this).attr("id")
		  	  };
			
		    $.ajax({
	        url: "borrar.php", 
            type: "POST",
          //datos del formulario
            data: parametros,
          //una vez finalizado correctamente
               success: function (response) {
                location.reload();
		      },
                error: function (response) {
                alert(response);
		      },
		  });

    	});
        $("input:checkbox").prop('checked', false);
		//window.location.href = path + 'xls/articulosCica2016.xlsx';
     });
    
        
    /*$("#btnBorrar").click(function (event) {
    $("input:checkbox:checked").each(function() {
            alert("El checkbox con valor " + $(this).attr("id"));
            }
        );
    });*/
    //LIMPIA LAS CAJAS DE TEXTO................................................................................................................
    $("#btnnuevo").click(function(event){
        $('#txtnusr').val('');
        $('#txtnpwd').val('');
        $('#txtnid').val('');
        $('#txtconf_pwdusr').val('');
        
    });
    
    //ACTUALIZAR...............................................................................................................................
   $(".btnrfs").click(function (event) {
		$("input:checkbox[name=seleccionar]:checked").each(function() {
            var parametros = {
          		"ID": $(this).attr("id")
		  	  };
            
            $('#txtnid').val($(this).attr("id"));
			
            //OBTENEMOS EL NOMBRE USUARIO SELECCIONADO
		   $.ajax({
	        url: "obtenerusr.php", 
            type: "POST",
          //datos del formulario
            data: parametros,
          //una vez finalizado correctamente
               success: function (response) {
                $('#txtnusr').val(response);
		      }
		  });
            
            //OBTENEMOS LA CONTRASEÑA DEL USUARIO SELECCIONADO
           $.ajax({
	        url: "obtenerpass.php", 
            type: "POST",
          //datos del formulario
            data: parametros,
          //una vez finalizado correctamente
               success: function (response) {
                $('#txtnpwd').val(response);
                $('#txtconf_pwdusr').val(response);
		      }
		  });    

    	});
        $("input:checkbox").prop('checked', false);
		//window.location.href = path + 'xls/articulosCica2016.xlsx';
     });
    //.........................................................................................................................................
});
    
</script>
    
</body>
</html>