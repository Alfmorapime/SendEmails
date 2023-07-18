<?php 

//Call the html that containt the page
require_once('class/page.php'); 

//call conection file. It includes the DB information
$conection = include 'config/conection.php';

//------------ OPERATIONAL ACTIONS ---------------------

if(isset($_POST["exist"]))
{
   // $query = "select * from customers_from_odoo";
    //$resultQuery = mysqli_query($conection,$query);
   // while($row = mysqli_fetch_assoc($resultQuery))
   //{ 
        //---------- GET THE DATA THAT IT IS COMMING FORM THE DB
        $name = $_POST['name'];
        $email = $_POST['email'];
        $token = $_POST['token'];

        //-------------- SET EMAIL -----------------//
        $to = $email;
        $strSubject='Welcome to our new eCommerce Portal';
        $message = file_get_contents('templates/template_invitationEcommerce.php'); 
        $message = str_replace('{{name}}', $name, $message);
        $message = str_replace('{{email}}', $email, $message);
        $message = str_replace('{{token}}', $token, $message); 
        
        //SET HEADER OF THE EMAIL
        $headers = "Organization: Stellar Wholesale Inc\r\n";
        $headers .= 'MIME-Version: 1.0'."\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
        $headers .= "Reply-To: Stellar Wholesale Inc <info@stellarinc.ca>\r\n";
        $headers .= "Return-Path: Stellar Wholesale Inc <info@stellarinc.ca>\r\n";
        $headers .= "From: Stellar Wholesale Inc <info@stellarinc.ca>\r\n";
    
        //SEND EMAIL METHOD
        $mail_sent = mail($to, $strSubject, $message, $headers);
   // }

    header("Location: emailSents.php");
}

//------------ END OPERATIONAL ACTIONS -----------------

//------------- Structure of the page  ------------------
Page::header();
Page::sectionPrincipal($conection);
Page::footer();

?>