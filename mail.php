
<?php if(isset($_POST['submit'])) {

    //To collect a user input and store it in the variable
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    $to ='yourmail@gmail.com';  // This is  the Doctor's Email address
    $from = $_POST['email']; // this is the sender's Email address

    $subject ='Book an Appointment';
    $subject2 = "Copy of your form submission"; //copy of info


    $message ="Name: ".$name."\n"."Phone: ".$phone."\n"."Date: ".$date."\n"."Time: ".$time."\n"."Appoint Reason:"."\n\n".$message;
    $message2 =" Here is the copy of your message: \n\n Name: ".$name."\n"."Phone: ".$phone."\n"."Date: ".$date."\n"."Time: ".$time."\n"."Appoint Reason:"."\n\n".$_POST['$message'];
    

    $headers = "From: ".$from;
    $headers2 = "From: ".$to;

    
    if(mail($to,$subject,$message,$headers)) {
        echo"<h3> Your appointment sent sucessfully! Thank you ".$name. " we will contact you shortly</h3>";
    }
    else
    {
        echo "Something went wrong!!!!";
    }
}
mail($to,$subject2,$message2,$headers2); //copy of the message to the sender

?>