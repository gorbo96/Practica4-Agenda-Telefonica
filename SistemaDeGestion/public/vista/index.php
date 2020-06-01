<!DOCTYPE html>
<html lang="es">

<head>
    <!--    
        General Information about Japanese General Information
        Author: Mateo Cordova
        Date: 06/04/2020
        Filename: jp_index.html
        -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/1732b7ff94.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="shortcut icon" type="image/png" href="images/icons/japan.png" />
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="JS/consulta.js" type="text/javascript"></script>
    <title>Phone Diary</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo-find-container">
                <img class="logo-header" src="imagenes/logo.png" alt="Logo">                
                <div class="profile">
                    <a href="crearUsuario.html"><i class="fas fa-user-plus btn"></i></a>
                    <a href="login.html"><i class="fas fa-sign-in-alt btn"></i></a>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section>
            <div class="container">
                <div class="flex-box">
                    <div class="flex-half-column distance">
                        <article>
                            <h2>INFORMACION GENERAL DE PHONE DIARY</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates consectetur omnis, nam suscipit vero, nostrum asperiores velit cum veniam soluta repellat necessitatibus a atque et rerum expedita error ipsam eligendi quod culpa, dolores vel. Accusantium at minima itaque id et maxime necessitatibus vero iure ipsum unde a corporis, dolor nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam suscipit fugit illum culpa quae reiciendis numquam iste animi optio velit non tempore modi, labore doloribus ipsa. Neque suscipit alias est? Adipisci beatae architecto fugiat esse recusandae ipsum, aliquam quod nesciunt quis cupiditate accusamus est minus in, consequatur, qui asperiores quia.</p>
                            <div class="flex-button">
                                <button class="btn button">CONTACTANOS</button>
                                <button class="btn button">UBICACION</button>
                            </div>
                        </article>
                    </div>
                    <div class="flex-half-column distance">
                        <img src="imagenes/agenda.jpg" alt="Agenda" width="550" height="400">
                    </div>
                    <aside></aside>
                    <aside></aside>
                </div>
            </div>
            <div class="container">
                <h2>Servicios mas Usados</h2>
                <div class="flex-box distance">
                    <div class="flex-5-column image5">
                        <img src="imagenes/gmail.png" alt="Gmail" height="250">
                        <div class="text-block">
                            <h3>Gmail</h3>
                            <p>Correo Electronico</p>
                        </div>
                    </div>
                    <div class="flex-5-column image5">
                        <img src="imagenes/outlook.png" alt="Outlook" height="250">
                        <div class="text-block">
                            <h3>Outlook</h3>
                            <p>Correo Electronico</p>
                        </div>
                    </div>
                    <div class="flex-5-column image5">
                        <img src="imagenes/claro.jfif" alt="Claro" height="250">
                        <div class="text-block">
                            <h3>Operador Claro</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="flex-5-column image5">
                        <img src="imagenes/movistar.png" alt="Movistar" height="250">
                        <div class="text-block">
                            <h3>Operador Movistar</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="flex-5-column image5">
                        <img src="imagenes/cnt.png" alt="CNT" height="250">
                        <div class="text-block">
                            <h3>Opreador CNT</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h3>Busqueda por cedula</h3>
                <form id="Formulario01" onsubmit="return buscarPorCedula()" style="display: inline;">
                    <input type="text" id="cedula" name="cedula" value="" onkeyup="return buscarPorCedula()">
                    <button id="buscarCed" name="buscarCed" value="Buscar" ><i class="fas fa-search btn"></i></button>
                </form>                
            <div id="informacion"><b>Datos de la persona</b></div>
            <h3>Busqueda por correo</h3>
            <form id="Formulario02" onsubmit="return buscarPorCorreo()" style="display: inline;">
                    <input type="text" id="correo" name="correo" value="" onkeyup="return buscarPorCorreo()">
                    <button id="buscarCed" name="buscarCed" value="Buscar" ><i class="fas fa-search btn"></i></button>
            </form>
            <div id="informacion1"><b>Datos de la persona</b></div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="flex-box">
                <div class="flex-3-column contact">
                    <i class="fab fa-facebook-square icon-footer"></i>
                    <i class="fab fa-instagram icon-footer"></i><br>
                    <img class="logo-footer" src="imagenes/logo.png" alt="Logo"><br>
                    <span>Mateo Córdova Alvarez <br> &#8226; U.P.S.</span><br>
                    &#8226; <a href="mailto:fcordovaa@est.ups.edu.ec">fcordovaa@est.ups.edu.ec</a><br>
                    &#8226; <a href="tel:0987788345">0987788345</a><br>
                    &copy; <span> Todos los derechos reservados </span>
                </div>
                <div class="flex-3-column">
                    <h4>LINK BLOCK</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                    </ul>
                </div>
                <div class="flex-3-column">
                    <h4>LINK BLOCK</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>