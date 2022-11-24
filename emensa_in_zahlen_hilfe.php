<?php

// Anmeldung zum Newsletter Zähler ausgelegt
function newsletteranmeldung_zaehler()
{
    $file = fopen("Newsletter_Daten.txt", "r") or die("Beim öffnen ist ein Fehler aufgetreten!");
    echo(count(file("Newsletter_Daten.txt")));
    fclose($file);
}

 //----------------------------------------------------
 //Speisen Zähler Ausgelegt
function speise_zaehler()
{
    $link = mysqli_connect(
        "127.0.0.1",
        "root",
        "abc",
        "emensawerbeseite");

    if (!$link) {
        echo "Verbindung fehlgeschlagen: ", mysqli_connect_error();
        exit();
    }
    $sql = "SELECT COUNT(id) as sum FROM gericht";

    $result = mysqli_query($link, $sql);
    $result2 = mysqli_fetch_assoc($result);
    echo $result2['sum'];

    mysqli_close($link);
}

//Zähler für die Besucher ausgelegt

function besucher_berechen()
{

    $link = mysqli_connect(
        "127.0.0.1",
        "root",
        "abc",
        "emensawerbeseite");

    if (!$link) {
        echo "Verbindung fehlgeschlagen: ", mysqli_connect_error();
        exit();
    }
    $sql = "SELECT COUNT(zaehler) AS sum FROM besucher";

    $result = mysqli_query($link, $sql);
    $result2 = mysqli_fetch_assoc($result);
    echo $result2['sum'];
    mysqli_close($link);
}


function besucher_Tabelle_aktuallisieren()
{


    $link = mysqli_connect(
        "127.0.0.1",
        "root",
        "abc",
        "emensawerbeseite"
    );

    if (!$link) {
        echo "Verbindung fehlgeschlagen: ", mysqli_connect_error();
        exit();
    }

    mysqli_query($link, "INSERT INTO besucher(zaehler) VALUES(default)");
    mysqli_close($link);


}

?>


