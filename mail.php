<?php





if(isset($_POST['submit'])){

	



$from=$_POST[email1];







$to  = 'capitalgaragedoor1@gmail.com'; // note the comma





// subject



 $subject = 'Estimate Request - Garage Door Germantown';







// message

if($_REQUEST['service']!='')

{

$w='';

  $weekday=$_REQUEST['service'];

foreach($weekday as $week)

		{

			 $w=$w.','.$week;

		} 

		

}

  $message = '

  <p  style="color:#600; font-size:22px">Contact Details are as follows:</p>



  <table width="60%" border="0" cellpadding="1" cellspacing="1">

  <tr>

    <td><strong>Name</strong></td>

   <td>'.$_POST[name1].'</td>

  </tr>

<tr>

    <td><strong>Address</strong></td>

    <td> '.$_POST[address1].' </td>

  </tr>

  <tr>

    <td><strong>City</strong></td>

    <td> '.$_POST[city1].' </td>

  </tr>

  <tr>

    <td><strong>State</strong></td>

    <td> '.$_POST[state1].' </td>

  </tr>

  <tr>

    <td><strong>Zipcode</strong></td>

    <td> '.$_POST[zipa].' </td>

  </tr>

  <tr>

    <td><strong>Home Phone</strong></td>

     <td> '.$_POST[homephone1].' </td>

  </tr>

   <tr>

    <td><strong>Work Phone</strong></td>

    <td> '.$_POST[workphone1].' </td>

  </tr>

  <tr>

    <td><strong>Best time to call</strong></td>

    <td> '.$_POST[besttime1].' </td>

  </tr>

  <tr>

    <td><strong>Email</strong></td>

    <td> '.$_POST[email1].' </td>

  </tr>

    <tr>

    <td><strong>Preferred</strong></td>

    <td> '.$_POST[preferred1].' </td>

  </tr>



  <td><strong>Service Required</strong></td>

    <td> '.trim($w,',').' </td>

 

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



?>