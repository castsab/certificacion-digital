<?php

class GenerateCertification {
    
    public function BuildFormatCertification($name,$numberDocument){
        $html = "";
        $html = '
        <html>
            <head>
                <meta content="text/html; charset=UTF-8" http-equiv="content-type">
            </head>
            <body class="c14">
            <p class="c3"><span class="c8"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 274.80px; height: 122.40px;"><img alt="" src="images/logo-universidad-nacional.png" style="width: 274.80px; height: 150.66px; margin-left: -0.00px; margin-top: -0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></span></p>
                <p class="c3"><span class="c8">FACULTAD DE MEDICINA</span></p>
                <p class="c3"><span class="c0 c9">&nbsp; </span></p>
                <p class="c3"><span class="c26">Seg&uacute;n el Acuerdo No. 036 del 2009 del Consejo Superior Universitario y en cumplimiento de lo establecido en el Contrato de Prestaci&oacute;n de <br> Servicios No. 0657 de 2013 entre la Universidad Nacional de Colombia y la Fundaci&oacute;n Saldarriaga Concha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                <p class="c3 c16"><span class="c1"></span></p>
                <p class="c3"><span class="c21">Certifican que:</span></p>
                <p class="c3 c16"><span class="c15 c23"></span></p>
                <p class="c3"><span class="c11">'.$name.'</span></p>
                <p class="c3"><span class="c4">&nbsp;C.C. '.$numberDocument.' </span></p>
                <p class="c3 c16"><span class="c4 c15"></span></p>
                <p class="c3"><span class="c4">Aprob&oacute; el Curso de Actualizaci&oacute;n </span></p>
                <p class="c3"><span class="c12">&quot;BUENAS PR&Aacute;CTICAS DE EDUCACI&Oacute;N INCLUSIVA: MAESTROS INCLUSIVOS&rdquo;</span></p>
                <p class="c3 c16"><span class="c18 c15"></span></p>
                <p class="c3"><span class="c4">Realizado del 27 de abril al 15 de junio de 2013. Comprendi&oacute; tres (3) sesiones presenciales y acompa&ntilde;amiento institucional in situ.</span></p>
                <p class="c3 c16"><span class="c4 c15"></span></p>
                <p class="c3 c16"><span class="c7"></span></p>
                <p class="c3 c16"><span></span></p>
                <p class="c3 c16"><span></span></p>
                <p class="c3 c16"><span></span></p>
                <p class="c3"><span class="c22">MARISOL MORENO ANGARITA</span></p>
                <p class="c13"><span class="c0">Directora Acad&eacute;mica</span></p>
                <p class="c13"><span class="c0">Curso de Actualizaci&oacute;n</span></p>
            </body>
        </html>';
        return $html;
    } 
}
