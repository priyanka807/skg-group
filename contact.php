<?php 

    if(isset($_POST['btn-send']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       if(empty($name) || empty($email) || empty($message))
       {

           header('location:index.html?error');  //i want here directly provide successfully or error msg on same page without rendering on other page
           //can we not show error direct in html file why do we need thanks php file 3 how and code
       }
       else
       {
        
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $mes .="Name: ".$name."<br />";
        $mes .="Email: ".$email."<br />";
        $mes .="Message: ".$message."<br />";
        
           $to = "pk796395@gmail.com";
            $Mysubject = "Contact Enquery";
           if(mail($to,$Mysubject,$mes,$headers))
           {
            console.log('message')
               header("location:index.html?success");
           }
       }
    }
    else
    {
        header("location:index.html");
    }
?>