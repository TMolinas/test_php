<?php
$subject = $email = $message = '';


class postObject {
    public $subject;
    public $email;
    public $message;
}

if(empty($_POST['subject'])) {
    echo '<p>le champs sujet doit être rempli.</p> ';

}


if(empty($_POST['email'])) {
    echo '<p>le champs email doit être rempli.</p> ';
}

if(empty($_POST['message'])) {
    echo '<p>le champs message doit être rempli.</p> ';

}

if( !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message']) ) {

    $inputPost = new postObject();
    $inputPost->subject = $_POST['subject'];
    $inputPost->email = $_POST['email'];
    $inputPost->message = $_POST['message'];


    echo '<p>Le Message est sauvegardé.</p>';
    var_dump($inputPost);
}

?>

<a class="btn btn-secondary" href="../index.php?page=contact-form">Retour</a>

