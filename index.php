<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    require_once("libs/Zebra_Pagination-master/Zebra_Pagination.php");
    require_once("php/conexion.php");
    $op = $_GET["op"];
  switch($op)
  {
    case "":
     $contenido ="php/slide.php";
        $titulo="Inicio";
    break;
    case "Nosotros":
     $contenido ="php/nosotros.php";
        $titulo="Inicio";
    break;
    case "editar_mensaje":
    $contenido ="php/editar_mensaje.php";
       $titulo="Galeria";
   break;
     case "editar_nosotros":
     $contenido ="php/editar_nosotros.php";
        $titulo="Galeria";
    break;
    case "editar_contacto":
     $contenido ="php/editar_contacto.php";
        $titulo="Galeria";
    break;

    case "mensaje":
     $contenido ="php/mensaje.php";
        $titulo="Galeria";
    break;
       case "paneluser":
     $contenido ="php/paneluser.php";
        $titulo="Galeria";
    break;
    case "admon_contacto":
     $contenido ="php/admon_contacto.php";
        $titulo="Galeria";
    break;
    case "admon_productos":
     $contenido ="php/anuncio.php";
        $titulo="Galeria";
    break;
        case "listar_usuarios":
     $contenido ="php/listar_usuarios.php";
        $titulo="Galeria";
    break;
    case "admonbd":
     $contenido ="php/admonbd.php";
        $titulo="Galeria";
    break;

     case "editar_usuario":
     $contenido ="php/editar_usuario.php";
        $titulo="Galeria";
    break;
      case "comprar":
     $contenido ="php/comprar.php";
        $titulo="contactar";
    break;
     case "contactar":
     $contenido ="php/contactar.php";
        $titulo="contactar";
    break;
    case "galeria":
     $contenido ="php/admon_galeria.php";
        $titulo="Galeria";
    break;
       case "userinfo":
     $contenido ="php/userinfo.php";
        $titulo="Galeria";
    break;
       case "contacto":
     $contenido ="php/contacto.php";
        $titulo="Inicio";
    break;
       case "registro":
     $contenido ="php/registro.php";
        $titulo="Inicio";
    break;
       case "login":
     $contenido ="php/login.php";
        $titulo="Inicio";
    break;
     case "registro":
     $contenido ="php/registro.php";
        $titulo="Inicio";
    break;
    default:
       $contenido ="php/buscar.php";
        $titulo="Busqueda";
    break;
  }
?>
<html>
		<head>
      <title> Cultura Bakana Colombiana </title>
      <meta charset='utf-8'/>
      <meta name='description' content='Cultura Bakana Colombiana'/>
      <meta name='viewport' content='width=device-width, initial-scale=1'/>
      <link rel='shortcut icon' type='image/x-icon' href='img/logo.ico'/>
      <link rel='author' type='text/plain' href='humans.txt'/>
      <link rel='stylesheet' href='css/flexslider.css'/>
      <link rel='stylesheet' type='text/css' href='css/estilos.css'>
      <link rel='stylesheet' type='text/css' href='css/zebra.css'>
      <link rel='stylesheet' type='aplication/xml' title='Sitemap' href='sitemap.xml'>
      <script type="text/javascript" language="javascript" src="js/ajax.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script src="js/jquery.flexslider.js"></script>

      <script type="text/javascript">
        $(window).load(function(){
          $(".flexslider").flexslider();
          });
      </script>
    </head>

    <body>
      <header>
      <div style="vertical-align: top height:40px">
        <nav >
          
               <ul class="submenu">
            <?php
              session_start();
                if (isset($_SESSION["rol"]))
                  {
                    if ($_SESSION['rol']=="admin")
                      {
                        echo
                        "
                          <li><a href='index.php', id='login'>Inicio</a></li>

                          <li><a href='index.php', id='anunciar'>Empresa</a>
                            <ul>
                          <li><a href='index.php?op=editar_nosotros', id='login'>Editar Información de la Empresa</a></li>
                          <li><a href='index.php?op=editar_mensaje', id='login'>Editar Mensaje de Compra</a></li>
                          <li><a href='index.php?op=editar_contacto', id='login'>Editar datos de contacto de la Empresa</a></li>

                             </ul>
                          </li>
                           <li><a href='index.php', id='anunciar'>Cátalogo</a>
                            <ul>
                                <li><a href='index.php?op=admonbd'>Administrar Catálogo</a></li>
                                <li><a href='index.php?op=admon_productos', id='login'>Agregar Productos</a></li>
                                <li><a href='index.php?op=paneluser', id='anunciar'>Listar Productos</a></li>

                             </ul>
                          </li>

                          <li><a href='index.php?op=galeria', id='login'>Imágenes</a></li>
                          <li><a href='index.php?op=listar_usuarios', id='login'>Usuarios</a></li>
                          <li><a href='index.php', id='login'>".$_SESSION["apodo"]."</a>
                            <ul>
                                <li><a href='index.php?op=editar_usuario', id='login'>Editar Información</a></li>
                                <li><a href='php/salir.php'>Salir</a></li>
                            </ul>
                          </li>
                        ";
                      }
                      elseif ($_SESSION["rol"]=="user")
                      {
                        echo
                        "
                           <li><a href='index.php', id='anunciar'>Inicio</a></li>
                           <li><a href='index.php?op=Nosotros', id='anunciar'>Sobre Nosotros</a></li>
                           <li><a href='index.php?op=contacto', id='anunciar'>Contáctanos</a></li>
                           <li><a href='index.php', id='login'>".$_SESSION["apodo"]."</a>
                              <ul>
                                <li><a href='index.php?op=editar_usuario', id='login'>Editar Información</a></li>
                                <li><a href='php/salir.php'>Salir</a></li>
                              </ul>
                            </li>
                        ";
                      }
                    }
                    else
                    {
                      echo
                          "
                            <li><a href='index.php', id='anunciar'>Inicio</a></li>
                            <li><a href='index.php?op=Nosotros', id='anunciar'>Sobre Nosotros</a></li>
                            <li><a href='index.php?op=contacto', id='anunciar'>Contáctanos</a></li>
                            <li><a href='index.php?op=login', id='login'>Ingresar</a></li>
                       
                          ";
                    }


                  ?>
             </ul>
          </nav>

      <nav id="redes" style="width: auto;">
        <ul>
          <?php
            echo
            "
              <li><a href='https://www.facebook.com/pages/Cultura-bakana/986751904700931' target='_blank'><img src='img/fb.png'></a></li>
              <li><a href='https://twitter.com/culturabakana' target='_blank'><img src='img/tw.png'> </a></li>
              <li><a href='https://www.youtube.com/channel/UCuLXMk6TH9YiOZOY71zeH1w' target='_blank'><img src='img/yu.png'> </a></li>

             ";
           ?>
        <ul>
      </nav>
      </div>
         

      <img src="img/logo.png" style="width:150px; margin: 1em auto; display: block;">

    </header>

    <section id='contenedor'>
        <aside id='directorio'>
          <CENTER><label style="padding: 1em; background-color: #fff;">CATALÓGO DE PRODUCTOS</label></CENTER><br>
          <section class='ac-container'>
             <?php
              $consulta="SELECT * FROM categoria ORDER BY categoria_nombre";
              $resultado=mysql_query($consulta) or die(mysql_error());
              $cont="1";
              while($fila=mysql_fetch_assoc($resultado))
              { $cont=$cont+1;
                ?>
              <div>

                  <input id='ac-<?php echo $cont;?>' name='accordion-<?php echo $cont;?>' type='checkbox' />
                  <label for='ac-<?php echo $cont;?>'><?php echo $fila['categoria_nombre'];?></label>
                    <article class='ac-small'>
                         <ul class='ul-ac'>
                              <?php
                        $consulta2="SELECT * FROM subcategoria WHERE categoria_cod='".$fila['categoria_id']."'";
                        $resultado2=mysql_query($consulta2) or die(mysql_error());
                        while($fila2=mysql_fetch_assoc($resultado2))
                        {?>
                       <li><a href='index.php?op=<?php echo $fila2['subcategoria_id'];?>', id='login'><?php echo $fila2['subcategoria_nombre'];?></a></li>

                      <?php } ?>
                 </ul>
                  </article>
              </div>
                      <?php }
              ?>

          </section>
           <CENTER><label style="padding: 1em; background-color: #fff; margin-bottom: -1em;">MUSICA</label></CENTER><br>
            <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/78551530&amp;color=ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
       </aside>
      <section id='principal'>

      <?php include($contenido);?>
    </section>
  </section>
     </body>
     <footer>

         <p>Desarrollado por Gabriel Rodríguez
                  a-gabrielrodriguez@hotmail.com
              para Cultura Bakana Colombiana S.A.S.</p>

     </footer>

</html>
