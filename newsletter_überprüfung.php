<?php
$vorname = $_POST['vorname'];
$email = $_POST['email'];
$sprache = $_POST['sprache'];
$datenschutz = $_POST['box'];



function mailValid ($mail) {
    $invalidMails = ['rcpt' , 'damnthespam' , 'wegwerfmail' , 'trashmail'];

    $domain_tmp = substr(strrchr($mail, "@"), 1);
    $domain = substr(strtok($domain_tmp, "."), 0);

    if (in_array($domain, $invalidMails)){
        return false;
    }else{
        return true;
    }
}


if(!isset($vorname) OR !ctype_graph($vorname)  OR !preg_match('#^[a-z A-z -]+$#' , $vorname)){
    $ausgabe ="der Vorname ist noch nicht eingetragen. Name vergessen?";

}else if(!isset($email) OR !mailValid($email)){
    $ausgabe ="die Email ist noch nicht eingetragen, oder hat eine von uns gesperrte Domain!";

}else if(!isset($sprache)){
    $ausgabe ="die gewünschte Sprache ist noch nicht angegeben";

}else if (!isset($datenschutz)){
    $ausgabe ="der lästige Datenschutz muss noch zugestimmt werden";
}



    if(isset($ausgabe)){
        header("Location:  http://localhost:9050/werbeseite/werbeseite.php?status=" . $ausgabe);
    }else{
        $file = fopen("Newsletter_Daten.txt" , 'a');
        fwrite($file,"Vorname: ". $vorname . "  E-Mail: " . $email . "  Sprache: " . $sprache . "  Datenschutz: " . $datenschutz . "\n");
        fclose($file);
        header("Location:  http://localhost:9050/werbeseite/werbeseite.php?status=success");
    }


