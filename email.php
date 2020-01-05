<?php





if(isset($_POST['submit']))

{

	



$from=$_POST[email];







$to  = 'capitalgaragedoor1@gmail.com'; // note the comma





// subject



 $subject = 'Garage Door Repair Herndon Contact Request ';







// message



  $message = '





  <p  style="color:#600; font-size:22px">Details</p>



  <table width="60%" border="0" cellpadding="1" cellspacing="1">

  <tr>

    <td>Name</td>

   <td>'.$_POST[name1].'</td>

  </tr>

   <tr>

    <td>Phone</td>

    <td> '.$_POST[phone].' </td>

  </tr>

  <tr>

    <td>Email</td>

    <td> '.$_POST[email].' </td>

  </tr>

    <tr>

    <td>Prefferd</td>

    <td> '.$_POST[preffered1].' </td>

  </tr>

  

</table>



';





// To send HTML mail, the Content-type header must be set



$headers  = 'MIME-Version: 1.0' . "\r\n";



$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



// Additional headers

 if(mail($to, $subject, $message, $headers)){



header('Location:thanks.html');



 }



}



print_r($message);



?>