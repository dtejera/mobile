 <?php
if($_POST['nombre']!=""){
 addContacto($_POST['nombre'],$_POST['email'],$_POST['telefono'],$_POST['pais'],$_POST['comentario']);
 
include("class.phpmailer.php");
include("class.smtp.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "contacto@cfreiburghaus.com";
$mail->Password = "cynthia123456";

		
$mail->From = "cynthia@cfreiburghaus.com";
$mail->FromName = "cfreiburghaus.com";
$mail->Subject = "Contacto cfreiburghaus.com";
//$mail->AltBody = "Hola, te doy mi nuevo numero\nxxxx.";
$mail->MsgHTML("Nombre :".$_POST['nombre']."<br>Email: ".$_POST['email']."<br>Tel: ".$_POST['telefono']."<br>País: ".$_POST['pais']."<br>Comentario: ".$_POST['comentario']);
//$mail->AddAttachment("files/files.zip");
//$mail->AddAttachment("files/img03.jpg");
$mail->AddAddress("cynthia@cfreiburghaus.com", "cynthia");
$mail->IsHTML(true);

$mail->Send();
  

echo $text_gracias[$_REQUEST['lang']];
 
 }else{
	 
 ?>
 
 

 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr>
                 <td align="center" valign="top" bgcolor="#BEBEBE"><table width="80%" border="0" cellspacing="0" 

cellpadding="0">
                   <tr>
                     <td height="20" align="left" class="titulos">&nbsp;</td>
                   </tr>
                   <tr>
                     <td align="left" class="titulos"><?php echo $text_contactame[$current_lang];?></td>
                   </tr>
                   <tr>
                     <td height="5" align="left" valign="middle"><img src="img/linea.gif" width="300" 

height="1"></td>
                   </tr>
                   <tr>
                     <td height="20" align="left"></td>
                   </tr>
                   <tr>
                     <td align="left" class="txt1">
                     <form name="form1" method="post" action="">
                     
                     <table width="80%" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td><?php echo $text_nombre[$current_lang];?></td>
                         <td>&nbsp;</td>
                         <td>
                           <label>
                             <input type="text" name="nombre" id="nombre">
                           </label>
                         </td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Email:</td>
                         <td>&nbsp;</td>
                         <td><input type="text" name="email" id="email"></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td><?php echo $text_telefono[$current_lang];?></td>
                         <td>&nbsp;</td>
                         <td><input type="text" name="telefono" id="telefono"></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td><?php echo $text_pais[$current_lang];?></td>
                         <td>&nbsp;</td>
                         <td><input type="text" name="pais" id="pais"></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td><?php echo $text_comentario[$current_lang];?></td>
                         <td>&nbsp;</td>
                         <td><textarea name="comentario" cols="25" rows="4" id="comentario"></textarea></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td><input type="submit" name="button" id="button" value="<?php echo 

$text_enviar[$current_lang];?>"></td>
                       </tr>
                       </table>
                     </form></td>
                   </tr>
                 </table></td>
                 <td width="5">&nbsp;</td>
                 <td width="257" align="right" valign="top"><img src="img/pcontact.jpg" width="331" 

height="500"></td>
               </tr>
             </table>
	     
	     <?php }?>