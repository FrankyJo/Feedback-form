/* set variables */
$name = htmlspecialchars($_POST["name"]);
$messangerContact = htmlspecialchars($_POST["messanger-contact"]);
$messanger = htmlspecialchars($_POST["messanger"]);
$message = htmlspecialchars($_POST["message"]);

/* Your address and subject line */
$address = "popovdenys.web@gmail.com";
$sub = "Сообщение с сайта denyspopov.com";

/* form format */
$mes = "Сообщение с сайта denyspopov.com.\n
Name: $name 
Messanger Contact: $messangerContact
Messanger: $messanger
Message: $message";

/* send message use mail()  */
$from = ('From:<'. $address .'> ');
  
if (mail($address, $sub, $mes, $from)) {
    header('Refresh: 5; URL=https://denyspopov.com');
    echo 'ok';}
else {
    header('Refresh: 5; URL=https://denyspopov.com');
