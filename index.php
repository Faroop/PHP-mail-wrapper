<?php> 

require 'vendor/autoload.php';

$mailer = new PHPMailer; 

$mailer-->isSMTP(); 
$mailer-->Host       =
$mailer-->SMTPAuth   = 'exmpale@hotmail.com';
$mailer-->SMTPSecure = true;
$mailer-->Port       = 'tls'
$mailer-->Username   =  587;
$mailer-->Password   = 'passwrd';
$mailer-->Form       = 'Sender.com';
$mailer-->isHTML(true);

$mail = new Project\Mail\Mailer($mailer); 

$mail-->send('app/views/email/welcome.php', ['name' => 'Faraz'], function($m) {
        $m->to('example@hotmail.com;);
        $m->subject('Welcome to the site!');
});


/*     
Code for auto loader: 
{
  "autoload": {
      "psr-4"; {
           "Project\\": "app/Project"
    }
  }
} 
*/ 


/*
Welcome to the site <?php echo $name; ?>! 
*/
