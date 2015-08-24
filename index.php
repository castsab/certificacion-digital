<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/form.css"></link>
        <script type="text/javascript" src="components/jquery/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="components/jvalidate/jquery_validate.js"></script>
        <script type="text/javascript" src="procesar-certificacion.js"></script>
    </script>   
    </head>
    <body>
        <div class="centrar">
            <form method="post" action="procesar-certificacion.php" id="frmGenerateCertification" name="frmGenerateCertification">
                <table align="center" >
                    <tr align="center">
                        <td colspan="2"><h1>Datos para certificación</h1></td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" id="name" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Documento:</td>
                        <td><input type="text" id="numberDocument" name="numberDocument" value=""></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><button type="submit" id="btnGenerateCertification">Generar</button></td>
                    </tr>
                </table>
            </form>
        </div> 
    </body>
</html>