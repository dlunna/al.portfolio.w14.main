<!-- Variables globales -->
<?php
$nombre="Inicio";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Alamandra - <?php echo $nombre; ?></title>
    <link rel="stylesheet" type="text/css" href="files_alamandra/mandra.css" />
    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <link href="/files_alamandra/favicon.ico" rel="icon" type="image/x-icon" />
  </head>
  
  <body>
    <h1>Alamandra</h1>
    
    <table width="100%" border="0" >
      <tr>
        <td height="1" bgcolor="#f0f0f0"></td>
      </tr>
      <tr>
        <td valign="middle" align="right">
        
          <p>
            <a href="http://www.alamandra.com" title="Página principal">Principal</a> 
            | <a href="#1" id="clickdemos">Demos</a>
            | <a href="docs/">Notas</a>
            | <a href="zenphoto/">Fotograf&iacute;as</a>
            | C&oacute;digos 
            | <a href="ra/" title="Realidad Aumentada">RA</a> 
            | <a href="latex/"><img src="files_alamandra/latex.png" width="37" height="15" alt="latex" longdesc="latex" /></a>
            | <a href="#2" id="clickcontacto">Contacto</a>
          </p>
          
        
        </td>
      </tr>
      <tr>
        <td height="1" bgcolor="#f0f0f0"></td>
      </tr>
    </table>


          <!-- Efectos especiales -->
          
            
            <p style="display: none" id="efectodemos" class="demos">
              | <a href="demos/atdcomputadoras">ATD Computadoras</a> 
              | <a href="demos/danielmolina">DanielMolina</a>
              | <a href="demos/ipsum">Estudio IPSUM</a>
              | <a href="http://viajero.alamandra.com">Viajero</a> |
            </p>
            <script type="text/javascript">
			  $("#clickdemos").click(function () {
											   $("#efectodemos").show("slow");
			  });
			</script>

                <p style="display: none" id="efectocontacto" class="contacto">
              <a href="mailto: dl@alamandra.com">dl@alamandra.com</a>
            </p>
            <script type="text/javascript">
			  $("#clickcontacto").click(function () {
												$("#efectocontacto").show("slow");
			  });
			</script>


          <!-- fin de los efectos -->

    

    
    <p>Tecnolog&iacute;as de informaci&oacute;n.<br />
    © Sitio creado por <a href="http://www.alamandra.com/" target="_parent">Alamandra</a>.<br />
    <span id="footer">2004 - 2012</span></p>
  
    <p>
      <a href="http://validator.w3.org/check?uri=referer">
        <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
      </a>
      <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="¡CSS Válido!" />
      </a>
    </p>

  </body>
</html>
