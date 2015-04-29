
<html>

<head>
<meta http-equiv="Content-Language" content="es">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>.: GENERADOR DE ESTADISTICAS :.</title>
<link rel="stylesheet" href="css/vlightbox.css" type="text/css" />
		<style type="text/css">#vlightbox a#vlb{display:none}</style>
		<link rel="stylesheet" href="css/visuallightbox.css" type="text/css" media="screen" />
		<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
		<!-- End VisualLightBox.com HEAD section -->

<link href="css/thickbox.css?1234574431" media="screen" rel="stylesheet" type="text/css" />
&nbsp;<script src="js/jquery-1.2.3.min.js?1234574431" type="text/javascript"></script><script src="js/jquery.thickbox.js?1234574431" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="js/dhtmlgoodies_calendar.js"></script>

<script lang="jscript"> 
function valores(campo1,campo2){ 
    this.campo1=campo1; 
    this.campo2=campo2; 
} 
var mimatriz1= new Array();
mimatriz1[0]=new valores('SAN JUAN DE LOS CAYOS','1');
mimatriz1[1]=new valores('CAPADARE','2');
mimatriz1[2]=new valores('LA PASTORA','3');
mimatriz1[3]=new valores('LIBERTADOR','4');
var mimatriz2= new Array();
mimatriz2[0]=new valores('LA PENA','3');
mimatriz2[1]=new valores('ARACUA','2');
mimatriz2[2]=new valores('SAN LUIS','1');
var mimatriz3= new Array();
mimatriz3[0]=new valores('GUAJIRO','6');
mimatriz3[1]=new valores('BARIRO','5');
mimatriz3[2]=new valores('ZAZARIDA','4');
mimatriz3[3]=new valores('SEQUE','3');
mimatriz3[4]=new valores('BOROJO','2');
mimatriz3[5]=new valores('CAPATARIDA','1');
var mimatriz4= new Array();
mimatriz4[0]=new valores('NORTE','1');
mimatriz4[1]=new valores('CARIRUBANA','2');
mimatriz4[2]=new valores('PUNTA CARDON','3');
mimatriz4[3]=new valores('SANTA ANA','4');
var mimatriz5= new Array();
mimatriz5[0]=new valores('LAS CALDERAS','5');
mimatriz5[1]=new valores('MACORUCA','4');
mimatriz5[2]=new valores('GUAIBACOA','3');
mimatriz5[3]=new valores('ACURIGUA','2');
mimatriz5[4]=new valores('LA VELA DE CORO','1');
var mimatriz6= new Array();
mimatriz6[0]=new valores('PEDREGAL','1');
var mimatriz7= new Array();
mimatriz7[0]=new valores('ADAURE','9');
mimatriz7[1]=new valores('EL HATO','8');
mimatriz7[2]=new valores('EL VINCULO','7');
mimatriz7[3]=new valores('MORUY','6');
mimatriz7[4]=new valores('JADACAQUIVA','5');
mimatriz7[5]=new valores('BUENA VISTA','4');
mimatriz7[6]=new valores('BARAIVED','3');
mimatriz7[7]=new valores('ADICORA','2');
mimatriz7[8]=new valores('PUEBLO NUEVO','1');
var mimatriz8= new Array();
mimatriz8[0]=new valores('EL PAUJI','5');
mimatriz8[1]=new valores('MAPARARI','4');
mimatriz8[2]=new valores('CHURUGUARA','1');
var mimatriz9= new Array();
mimatriz9[0]=new valores('MENE DE MAUROA','1');
mimatriz9[1]=new valores('CASIGUA','2');
mimatriz9[2]=new valores('SAN FELIX','3');
var mimatriz10= new Array();
mimatriz10[0]=new valores('SABANETA','6');
mimatriz10[1]=new valores('MITARE','5');
mimatriz10[2]=new valores('GUZMAN GUILLERMO','4');
mimatriz10[3]=new valores('SANTA ANA','3');
mimatriz10[4]=new valores('SAN GABRIEL','2');
mimatriz10[5]=new valores('SAN ANTONIO','1');
var mimatriz11= new Array();
mimatriz11[0]=new valores('COLINA','3');
mimatriz11[1]=new valores('CURIMAGUA','2');
mimatriz11[2]=new valores('CABURE','1');
var mimatriz12= new Array();
mimatriz12[0]=new valores('TUCACAS','1');
mimatriz12[1]=new valores('BOCA DE AROA','2');
var mimatriz13= new Array();
mimatriz13[0]=new valores('ZAZARIDA','5');
mimatriz13[1]=new valores('PUEBLO CUMAREBO','4');
mimatriz13[2]=new valores('LA SOLEDAD','3');
mimatriz13[3]=new valores('LA CIENAGA','2');
mimatriz13[4]=new valores('PUERTO CUMAREBO','1');
var mimatriz14= new Array();
mimatriz14[0]=new valores('DABAJURO','1');
var mimatriz15= new Array();
mimatriz15[0]=new valores('CHICHIRIVICHE','1');
mimatriz15[1]=new valores('BOCA DE TOCUYO','2');
mimatriz15[2]=new valores('TOCUYO DE LA COSTA','3');
var mimatriz16= new Array();
mimatriz16[0]=new valores('JUDIBANA','2');
mimatriz16[1]=new valores('LOS TAQUES','1');
var mimatriz17= new Array();
mimatriz17[0]=new valores('PIRITU','1');
mimatriz17[1]=new valores('SAN JOSE DE LA COSTA','2');
var mimatriz18= new Array();
mimatriz18[0]=new valores('STA.CRUZ DE BUCARAL','1');
mimatriz18[1]=new valores('EL CHARAL','2');
mimatriz18[2]=new valores('LAS VEGAS DEL TUY','3');
var mimatriz19= new Array();
mimatriz19[0]=new valores('MIRIMIRE','1');
var mimatriz20= new Array();
mimatriz20[0]=new valores('ARAURIMA','3');
mimatriz20[1]=new valores('AGUA LINDA','2');
mimatriz20[2]=new valores('JACURA','1');
var mimatriz21= new Array();
mimatriz21[0]=new valores('YARACAL','1');
var mimatriz22= new Array();
mimatriz22[0]=new valores('PALMA SOLA','1');
var mimatriz23= new Array();
mimatriz23[0]=new valores('SUCRE','1');
mimatriz23[1]=new valores('PECAYA','2');
var mimatriz24= new Array();
mimatriz24[0]=new valores('URUMACO','1');
mimatriz24[1]=new valores('BRUZUAL','2');
var mimatriz25= new Array();
mimatriz25[0]=new valores('TOCOPERO','1');
 
var i; 
function incluir(array){ 
    clear(); 
    array=eval("mimatriz" + array); 
    for(i=0; i<array.length; i++){ 
        var objeto=new Option(array[i].campo1, array[i].campo2); 
        main.sub.options[i]=objeto; 
    } 
    main.sub.disabled=false; 
    main.sub.focus(); 
} 
function clear(){ 
    main.sub.length=0; 
} 

main.sub.disabled=true;


</script>

</head>
<body background="images/bg1and2.png" style="background-attachment: fixed; text-align:center"><div align="center">
	<table border="0" width="937" cellspacing="0" cellpadding="0" height="0">
		<tr>
			<td width="937">
			<p align="center">
			<img border="0" src="images/header1.jpg" width="989" height="116"></td>
		</tr>
		<tr>
			<td width="933" bgcolor="#808080"></p>
			<div align="center">
				<table border="0" width="987" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="2">
						<img border="0" src="images/blank.gif" width="926" height="2"></td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="69%">
						<p align="center"><b><font face="Arial" size="4">
						GENERADOR DE ESTADÍSTICAS</font></b></td>
						<td width="1%" bgcolor="#FFFFFF">&nbsp;</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="69%">
						<p align="center">
				<img border="0" src="images/franja.gif" width="974" height="6"></td>
						<td width="1%" bgcolor="#FFFFFF">&nbsp;</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="69%" background="images/topcentral.jpg">
						<form method="POST" action="" name="main">
							
							<table border="1" width="986" height="0">
								<tr>
									<td align="center" width="5%" background="images/barra_negra.jpg" height="21">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Escriba el titulo del grafico</font></b></td>
									<td align="center" background="images/barra_negra.jpg" height="21" colspan="3">
									<font face="Arial">
									<input name="titulo" size="38" style="font-weight: 700; float:left"></font></td>
									<td align="center" width="45%" background="images/barra_negra.jpg" height="21" colspan="3">
									<p align="left">
									&nbsp;</td>
								</tr>
								<tr>
									<td align="center" width="5%" background="images/barra_negra.jpg" height="23">
									<font face="Arial">
									<b><font size="2" color="#FFFFFF">Todo el 
									estado</font></b><input type="checkbox" name="estado" value="falcon" style="font-weight: 700" onclick="validar_estado();"></font></td>
									<td align="center" width="5%" background="images/barra_negra.jpg" height="45" rowspan="2">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Parroquia</font></b><font face="Arial"><input type="checkbox" name="parroquia" value="porparroquia" style="font-weight: 700" onclick="validar_parroquia();"></font></td>
									<td align="center" colspan="2" background="images/barra_negra.jpg" height="25">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Fecha actual </font></b>
									<font face="Arial">
									<input type="checkbox" name="hoy" value="hoy" style="font-weight: 700"></font></td>
									<td align="center" width="12%" background="images/barra_negra.jpg" height="23">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Todos los Organismos</font></b><font face="Arial"><input type="checkbox" name="todosorganismos" value="todosorganismos" style="font-weight: 700" onclick="validar_organismo();"></font></td>
									<td align="center" width="16%" background="images/barra_negra.jpg" height="23">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Todos los sucesos</font></b><font face="Arial"><input type="checkbox" name="todossucesos" value="todossucesos" style="font-weight: 700"></font></td>
									<td align="center" width="17%" background="images/barra_negra.jpg" height="45" rowspan="2">
									&nbsp;</td>
								</tr>
								<tr>
									<td align="center" width="5%" background="images/barra_negra.jpg" height="22">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Por
									Municipio</font></b></td>
									<td align="center" colspan="2" background="images/barra_negra.jpg" height="18">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Por rango de fechas</font></b><font face="Arial"><input type="checkbox" name="rango" value="rango" style="font-weight: 700" onclick="validar_rango();"></font></td>
									<td align="center" width="12%" background="images/barra_negra.jpg" height="22">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Por Organismo</font></b></td>
									<td align="center" width="16%" background="images/barra_negra.jpg" height="22">
									<b>
									<font face="Arial" size="2" color="#FFFFFF">
									Por Suceso</font></b></td>
								</tr>
								<tr>
									<td align="center" width="5%" background="images/barra_azul.jpg">
									<font face="Arial">
									<select name="cat" onchange="incluir(this.form.cat[selectedIndex].value);" size="1" tabindex="11" style="font-weight: 700"> 
        <option value="1" size=1>ACOSTA</option><option value="2" size=1>BOLIVAR</option><option value="3" size=1>BUCHIVACOA</option><option value="21" size=1>CACIQUE MANAURE</option><option value="4" size=1>CARIRUBANA</option><option value="5" size=1>COLINA</option><option value="14" size=1>DABAJURO</option><option value="6" size=1>DEMOCRACIA</option><option value="7" size=1>FALCON</option><option value="8" size=1>FEDERACION</option><option value="20" size=1>JACURA</option><option value="16" size=1>LOS TAQUES</option><option value="9" size=1>MAUROA</option><option value="10" size=1>MIRANDA</option><option value="15" size=1>MONS. ITURRIZA</option><option value="22" size=1>PALMA SOLA</option><option value="11" size=1>PETIT</option><option value="17" size=1>PIRITU</option><option value="19" size=1>SAN FRANCISCO</option><option value="12" size=1>SILVA</option><option value="23" size=1>SUCRE</option><option value="25" size=1>TOCOPERO</option><option value="18" size=1>UNION</option><option value="24" size=1>URUMACO</option><option value="13" size=1>ZAMORA</option> 
    </select></font></td>
									<td align="center" width="5%" background="images/barra_azul.jpg">
									<font face="Arial">
									<select name="sub" size="1" tabindex="12" style="font-weight: 700"> 
    </select></font></td>
									<td align="center" width="12%" background="images/barra_azul.jpg">
									<input type="text" value="" readonly name="theDate" size="9"><input type="button" value="Desde" onclick="displayCalendar(document.forms[0].theDate,'yyyy-mm-dd',this)" style="font-size: 8pt; font-weight: bold"></td>
									<td align="center" width="11%" background="images/barra_azul.jpg">
									<input type="text" readonly name="theDate2" size="9"><input type="button" value="Hasta" onclick="displayCalendar(document.forms[0].theDate2,'yyyy-mm-dd',this)" style="font-size: 8pt; font-weight: bold"></td>
									<td align="center" width="12%" background="images/barra_azul.jpg">
									<font face="Arial">
									<select size="1" name="organismo" style="font-weight: 700" onclick="validar_todosorganismos();">
									<option selected>Seleccione</option>
									<?
                                    $recurso = mysql_query($query2,$link);
		                             $my_error = mysql_error($link);
		                               while ($row2=mysql_fetch_array($recurso))
                                        {
                                          $listaorganismos=$listaorganismos.'<OPTION VALUE="'.$row2[1].'">'.$row2[1].'</OPTION>';
                                     }
                                         echo $listaorganismos;
                                     ?>

									</select></font></td>
									<td align="center" width="16%" background="images/barra_azul.jpg">
									<font face="Arial">
									<select size="1" name="tipo" style="font-weight: 700">
									<option selected>Seleccione</option>
									<option value="ACCIDENTE">ACCIDENTES
									</option>
									<option value="DELITO">DELITOS</option>
									<option value="INCENDIO">INCENDIOS</option>
									<option value="MANIFESTACION">MANIFESTACIONES
									</option>
									<option value="VIOLENCIA">VIOLENCIA</option>
									</select></font></td>
									<td align="center" width="17%" background="images/barra_azul.jpg">
									&nbsp;</td>
								</tr>
							</table>
						</form>
						</td>
						<td width="1%" bgcolor="#FFFFFF">&nbsp;</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="69%">
				<img border="0" src="images/franja.gif" width="974" height="6"></td>
						<td width="1%" bgcolor="#FFFFFF">&nbsp;</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="99%" height="30" colspan="2">
						<div align="left">
							<table border="0" width="95%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="758" align="center" valign="top" height="458">
				<iframe src="Pie3D.php" name="centro" width="748" height="489" frameborder="1" id="I1" align="top" scrolling="no" border="1"></iframe>
    								</td>
									<td width="217" valign="top" align="center" height="458">
				<table border="0" width="175" cellspacing="0" cellpadding="0">
					<tr>
						<td width="19">
			<img border="0" src="images/info_disco2_tp-r.gif" width="19" height="19"></td>
						<td background="images/info_disco2_tp.gif" colspan="2">&nbsp;</td>
						<td width="19">
					<img border="0" src="images/info_disco2_tp-l.gif" width="19" height="19"></td>
					</tr>
					<tr>
						<td width="19" background="images/info_disco2_l.gif" height="374" rowspan="11">&nbsp;</td>
						<td height="19" valign="top" colspan="2">
						<p align="center"><b><font face="Arial">Tipos de 
						Gráficos</font></b></td>
						<td width="19" background="images/info_disco2_r.gif" height="374" rowspan="11">&nbsp;</td>
					</tr>
					<tr>
						<td height="5" valign="top" colspan="2">
				<img border="0" src="images/franja.gif" width="185" height="5"></td>
					</tr>
					<tr>
						<td height="19" valign="top" colspan="2">
						<p align="center">&nbsp;</td>
					</tr>
					<tr>
					<form method="POST" name="grafico">
						<td height="19" valign="top" colspan="2">
						<p align="center">
				<font face="Arial">
						<select size="1" name="tipografico" style="font-family: Arial; font-weight: 700" >
						<option selected>Seleccione</option>
						<option value="BARRAS">BARRAS</option>
						<option value="CIRCULAR">CIRCULAR</option>
						<option value="COLUMNAS">COLUMNAS</option>
						<option value="TABLA">TABLA DE DATOS</option>
						</select></font></td>
						</form>
					</tr>
					<tr>
						<td height="19" valign="top">
						

							<p align="center">
							
													
							<img border="0" src="images/graficas.jpg" width="75" height="75" onclick="enviar();"></p>
						
						<p align="center">
				<b><font size="2">Mostrar Grafico</font></b></td>
						<td height="19" valign="top">
						

							<p align="center">
							
													
							<img border="0" src="images/excel.gif" width="75" height="74" onclick="enviarexcel();"><br>
							<b><font size="2">Enviar a Excel</font></b></td>
					</tr>
					<tr>
						<td height="10" valign="top" colspan="2">
				<img border="0" src="images/franja.gif" width="185" height="5"></td>
					</tr>
					<tr>
						<td height="10" valign="top" colspan="2">
						<p align="center"></td>
					</tr>
					<tr>
						<td height="10" valign="top">
						<p align="center">
				<a target="_blank" href="mapeo.php">
									<img border="0" src="images/maps.jpg" width="75" height="73"></a><br>
				<b><font size="2">Ver En el Mapa</font></b></td>
						<td height="10" valign="top">
						</td>
					</tr>
					<tr>
						<td height="10" valign="top" colspan="2">
				<p align="center"></td>
					</tr>
					<tr>
						<td height="10" valign="top" colspan="2">
				<img border="0" src="images/franja.gif" width="185" height="5"></td>
					</tr>
					<tr>
						<td height="63" valign="top" colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td width="19">
					<img border="0" src="images/info_disco2_bt-r.gif" width="19" height="18"></td>
						<td background="images/info_disco2_bt.gif" colspan="2">&nbsp;</td>
						<td width="19">
					<img border="0" src="images/info_disco2_bt-l.gif" width="19" height="18"></td>
					</tr>
				</table>
									</td>
									<td height="458">
									
									&nbsp;</td>
								</tr>
								<tr>
									<td width="927" colspan="2">
				<img border="0" src="images/franja.gif" width="974" height="6"></td>
									<td>
									&nbsp;</td>
								</tr>
								<tr>
									<td width="927" colspan="2" align="center">
	                   <p align="center"><font face="Arial"><b>TABLA DE DATOS<br>
						OPCIONES DE BÚSQUEDA</b></font><br>
						<img border="0" src="images/ing_parte.jpg" width="104" height="104">
						<form name=buscar method="POST" action=tabla_datos.php target="tabla">
						
						<table border="0" width="105%" cellspacing="0" cellpadding="0">
							<tr>
								<td align="center" width="194">&nbsp;</td>
								<td align="center" width="409" colspan="2">&nbsp;</td>
								<td align="center">&nbsp;</td>
							</tr>
							<tr>
								<td align="center" width="194" background="images/franja_azul.jpg" height="43">
								<font face="Arial" size="2"><b>
								<input type="checkbox" name="porpalabra" value="porpalabra">Por 
								Palabras </b></font></td>
								<td align="center" width="180" background="images/franja_azul.jpg" height="43">
								<font face="Arial">
								<input name="palabra" size="20" style="font-weight: 700"></font></td>
								<td align="center" width="229" background="images/franja_azul.jpg" height="43">
								<font face="Arial" size="2"><b>
								<input type="checkbox" name="porlista" value="porlista">Por 
								lista de selección===&gt;</b></font></td>
								<td align="center" background="images/franja_azul.jpg" height="43">
								<font face="Arial"><select size="1" name="tipos_delitos" style="font-weight: 700">
									<?
                          $query="SELECT * FROM DELITOS ORDER BY DELITO";
                          $recurso = mysql_query($query,$link);
		                  $my_error = mysql_error($link);
		                  $listadelitos='<OPTION VALUE="Seleccione">Seleccione</OPTION>';

		                  while ($row=mysql_fetch_array($recurso))
                            {
                            $listadelitos=$listadelitos.'<OPTION VALUE="'.$row[1].'">'.$row[1].'</OPTION>';
                            }
                            echo $listadelitos;
                            ?>

									</select></font></td>
							</tr>
						</table>
						<p align="center">
						<input type="submit" value="Buscar" name="B1"></p>
						</form>
									</td>
									<td>
									&nbsp;</td>
								</tr>
								<tr>
									<td width="927" colspan="2">
				<iframe name="tabla" width="965" height="405" frameborder="0" id="I3" align="top"></iframe>
    								</td>
									<td>
									&nbsp;</td>
								</tr>
								</table>
						</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="69%">
						<!-- Start VisualLightBox.com BODY section -->
					   <div id="content-mac">
	                   <div id="vlightbox">
	                   </div>
<script type="text/javascript"> 
	var $VisualLightBoxParams$ = {autoPlay:false,borderSize:39,closeLocation:'',enableSlideshow:true,startZoom:true,overlayOpacity : .1};
</script>
		<script src="js/visuallightbox.js" type="text/javascript"></script>
	<!-- End VisualLightBox.com BODY section -->
	

						</td>
						<td width="1%" bgcolor="#FFFFFF">&nbsp;</td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td width="937">
			<p align="center">
			<img border="0" src="images/Top_Footer.jpg" width="989" height="38"></td>
		</tr>
		<tr>
			<td width="937">
			<p align="center">
			<img border="0" src="images/Bottom_Footer.jpg" width="989" height="23"></td>
		</tr>
	</table>
</div>
<script lang="jscript">
var destino='';

function validar_organismo(){

if (document.main.todosorganismos.checked){
document.main.organismo.selectedIndex=0;
}
}

function validar_todosorganismos(){

if (document.main.todosorganismos.checked){
document.main.todosorganismos.checked=false;
}

}

function validar_parroquia(){

if (document.main.estado.checked){
document.main.estado.checked=false;
}

}

function validar_estado(){

if (document.main.parroquia.checked){
document.main.parroquia.checked=false;
}

}

function validar_rango(){

if (document.main.hoy.checked){
document.main.hoy.checked=false;
}

}



function enviar(){

if (document.grafico.tipografico.value=='BARRAS'){

destino='barras2d.php';
}


if (document.grafico.tipografico.value=='CIRCULAR'){

destino='Pie3D.php';
}


if (document.grafico.tipografico.value=='COLUMNAS'){

destino='columnas3d.php';
}

if (destino!=''){

document.main.target='centro';
document.main.action=destino;
document.main.submit();
destino='';

destino='tabla_datos.php';
document.main.target='tabla';
document.main.action=destino;
document.main.submit();
destino='';
}

}


function enviarexcel(){

destino='excel.php';
document.main.target='tabla';
document.main.action=destino;
document.main.submit();
destino='';

}


</script>


</body>

</html>
