 <?php
 
//if(isset($_POST['letter'])) {
    $mail_to = "kathydanilova8@gmail.com";    
    $subject = "LETTTER FOR ORIFLAME";
    $message = $_POST['letter_text'];
    echo $mail_to;
    echo "<br>";
        print_r($message);
    echo $subject;
    echo "<br>";

    echo "<br>";
    echo "<br>";
    mail($mail_to, $subject, $message);
    if (mail($mail_to, $subject, $message)){
        echo "sent successfully";
    }
    else{
        echo "didn't send";
    }
//}
?>