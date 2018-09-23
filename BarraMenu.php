<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Informacion - Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="BarraMenuStyle.css"/>
    <script src="main.js"></script>
</head>
<body>
    
    <div id="master" >
        
        <header>
            
            <div class="wrapper" >
                                        
                <a href="">
                    <img src="./logoSecurityQR.jpg" alt="">
                </a>
                
                <div class="navSecondary" >
                    <ul >
                        <li><a href="">About Us</li></a>
                        <li><a href="">Info</li></a>
                        <li><a href="">Login</li></a>
                    </ul>
                </div>
                <nav class="navPrimary" >
                    <ul class="ulprimary">
                        <li><a href="">Menu 1</li></a>
                        <li><a href="">Menu 2</a>
                            <ul>
                                <li><a href="">SubMenu2 1</a></li>
                                <li><a href="">SubMenu2 2</a></li>
                                <li><a href="">SubMenu2 3</a>
                                    <ul>
                                        <li><a href="">SubMenu3 1</a></li>
                                        <li><a href="">SubMenu3 2</a></li>
                                        <li><a href="">SubMenu3 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Menu 3</a></li>
                        <li><a href="">Menu 4</a></li>
                        <li><a href="">Menu 5</a></li>
                        <li><a href="./FormularioCRUD/FormularioCRUD.php">Ingresar Elemento</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="content">
            <div class="ContentText" >
                <h1>SECURITY QR</h1><br>
                <h2>Protocolo de Seguridad que controla el acceso de aprendices al </h2><br>
                <h2>SENA</h2><br>
                <!-- <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, at nemo cum ipsum voluptatum quaerat fugit quasi illo dolorem accusamus laborum neque in repudiandae necessitatibus unde animi amet sed laboriosam?</h2><br> -->
            </div>
            <hr>
            <section id="mainContent">
                <div id="ContentLeft">                                                    
                </div>
                <div id="ContentLogin">                
                    <div id="DivAvatar" >                        
                    </div>
                    <span>BIENVENIDO A SECURITY QR</span>
                    <ul>
                        <li id="lilogin"><a href="#OpenModalLogin" id="linklogin">Login</a></li>                
                        <li id="liSignIn"><a href="" id="linkSignIn">Sign In</a></li>
                    </ul>
                    <!--INICIA VENTANA MODAL -->
                    <div id="OpenModalLogin" class="ModalContentLogin"  >
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <!--  INICIA CODIGO HTML DAVID SAMANIEGO -->
                            <div class="col">
                                <label>Nombre&nbsp;</label><input type="text" name="name" required placeholder="Nombre" />
                            </div>
                            <div class="col">
                                <label> Contraseña:&nbsp;</label><input type="password" name="password" required placeholder="Contraseña"/>
                            </div>
                            <div class="col">
                                <label>Tipo de perfil</label>
                                <select id="you" name="type_profile" class="required" required>
                                    <option value=""> Selecciona una opción</option>
                                    <option  value="administrador">Administrador</option>
                                    <option value="seguridad">Seguridad</option>
                                </select>
                            </div>
                            <div class="col submit">
                                <button onclick="mensaje()" type="submit">Ingresar</button>
                                <input type="reset" value="Borrar"/>
                            </div>
                            <!--  TERMINA CODIGO HTML DAVID SAMANIEGO -->
                        </div>
                    </div>
                    <!--FIN VENTANA MODAL -->
                </div>                
            </section>
            
        </div>
        
    </div>    
</body>
<footer>
        
</footer>
</html>