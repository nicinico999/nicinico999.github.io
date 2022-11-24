<?php
include 'gerichte.php';
include 'emensa_in_zahlen_hilfe.php';


//include 'newsletter_überprüfung.php';
const GET_PARAM_STATUS = 'status';

?>


<!DOCTYPE html>
<html lang="de">
<link rel="stylesheet" type="text/css" href="werbeseite.css" media="screen"/>


<head>
    <meta charset="UTF-8">
    <title>Werbeseite</title>
    <link rel="icon" href="img/menu.png">
    <!-- Das ist zum aktualliseiren der Besucher anzahl -->
    <?php besucher_Tabelle_aktuallisieren(); ?>

</head>

<body>
<br>

<div id="spalten">
    <div></div>
    <div>

        <!-- Das ist das Menü -->
<div class="menu">
<img id="img" src="img/menu.png" alt="E Mensa Logo">
        <ul id="liste">
            <li id="liste1"><a href="#erstens">Ankündigung</a></li>
            <li><a href="#zweitens">Speisen</a></li>
            <li><a href="#drittens">Zahlen</a></li>
            <li><a href="#viertens">Konakt</a></li>
            <li><a href="#fuenftens"> Wichtig für Uns</a></li>
        </ul>
</div>

        <main>
            <!-- Das ist das Bild  -->
            <img id="img2" src="img/jonathan-borba-8l8Yl2ruUsg-unsplash.jpg" alt="EMensa Logo">
            <!-- Link für das Bild  -->
            <a id="bildlink" href="https://unsplash.com/photos/8l8Yl2ruUsg">Unsplash</a>
            <!-- Erste Überschrift  -->
            <h1 id="erstens">Kleiner Text am Rande</h1>
            <!-- Das ist der Lorem Ipsum  -->
            <p id="Loremipsum">

                <br>
                <br>
                Dies ist ein Text wo nicht besonderlich viel drinnen steht.
                <br>
                Vermutlich wird man nicht wirklich schlauer wenn man den Text gelesen hat.
                <br>
                Also hättest du es lieber sein lassen.
                  <br>
                Trotzdem hast du es jetzt gemacht.
                Und merkst du schon wie der Text so null sinn ergibt ?
                <br>
                Nein ?
                <br>
                Dann kann man dir leider nicht helfen.
                Wenn ja...
                dann hast du jetzt Glück das der Text jetzt endet.
                <br>
                <br>
            </p>
            <!-- Zweite Überschrift -->
            <h1 id="zweitens">K&ouml;stlichkeiten, die Sie erwarten</h1>

            <!-- Table für die Preise  -->
            <table id="Tableessen">
                <thead>
                <tr>
                    <th></th>
                    <th>Preis intern</th>
                    <th>Preis extern</th>
                    <th>Bilder</th>
                </tr>
                </thead>
                <tbody>

                <?php
                //Preis Tabelle mit den Bildern
                if (isset($gerichte_1)) {
                    $test = count($gerichte_1);
                    for ($i = 1; $i < $test + 1; $i++) {
                        echo '<tr>'
                            . '<td>' . $gerichte_1[$i]['name'] . '</td>'
                            . '<td>' . $gerichte_1[$i]['preis_intern'] . '</td>'
                            . '<td>' . $gerichte_1[$i]['preis_extern'] . '</td>'
                            . '<td class="img_gerichte">' . '<img src="img/' . $i . '.jpg" alt="geilesEssen.jpg" width="200" height="200">' . '</td>'
                            . '</tr>';
                    }
                }
                ?>

                </tbody>
            </table>

            <br>
            <!-- 3. Überschrift  -->
            <h1 id="drittens">E-Mensa in Zahlen </h1>
            <!-- Daten für Zahlen in der Mensa -->
            <div id="elemente2">

                <div id="besucherzahlen">Besucher: <?php besucher_berechen(); ?></div>
                <div id="besucherzahlen">Anmeldungen zum Newsletter: <?php newsletteranmeldung_zaehler(); ?></div>
                <div id="besucherzahlen"> Speisen: <?php speise_zaehler(); ?>             </div>

                <!-- Panda bild und so -->
                <img id="img-Emensa-in-Zahlen" src="img/panda.png" alt="Besucher PNG">
                <img id="img-Emensa-in-Zahlen" src="img/newsletter.png" alt="Menü Png">
                <img id="img-Emensa-in-Zahlen" src="img/lunch-box.png" alt="Newsletter PNG">



            </div>

            <!-- 4. Überschrfit  -->
            <h1 id="viertens">Intresse geweckt ? Wir informieren Sie ! </h1>
            <br>
            <br>
            <fieldset>
                <legend>Newsletteranmeldung</legend>
                <br>
                <!-- Newsletter Anmeldung  -->
                <div id="ueberschriften">


                </div>


                <form action="newsletter_überprüfung.php" method="post"><!--action="formdata1.html"-->

                    <div id="felder">

                        <div class="test"><input name="vorname" type="text" required/> <label>Vorname</label></div>
                        <div class="test"><input name="email" type="email" required/> <label>E-Mail"</label></div>
                        <div class="test"><select name="sprache" id="sprache">
                                <option value="Deutsch" selected>Deutsch</option>
                                <option value="Englisch">Englisch</option>
                                <option value="Franz&ouml;sisch">Franz&ouml;sisch</option>


                            </select></div>

                        <div id="check_button">
                            <input type="checkbox" name="box" required>
                            <label id="label-checkbox" for="box">Den Datenschutzbestimmungen stimme ich zu</label>

                            <br>
                            <br>

                            <input type="submit" value="Zum Newsletter anmelden">
                        </div>
                    </div>

                    <br>


                    <br>
                    <br>
                    <?php
                    // Newsletteranmeldung
                    if (isset($_GET[GET_PARAM_STATUS])) {
                        if ($_GET[GET_PARAM_STATUS] == 'success') {
                            echo '<div class="erfolgreich">Erfolgreich angemeldet</div>';
                        } else {
                            echo '<div class="fehlermeldung">' . $_GET[GET_PARAM_STATUS] . '</div>';
                        }
                    }
                    ?>


                </form>
            </fieldset>
            <!-- Das ist die 5. Überschrift  -->
            <h1 id="fuenftens">Das ist uns wichtig </h1>
            <ul id="wichtig">
                <li>Beste frische saisonale Zutaten</li>
                <li>Ausgewogene und abwechslungreiche Gerichte</li>
                <li>Sauberkeit</li>
            </ul>

            <br>
            <br>
            <br>
            <br>
            <!-- Das ist die 6. Überschrift  -->
    </div>
    <div></div>
</div>

<h1>Wir freuen uns auf ihren Besuch </h1>
        </main>
        <footer>
            <!-- Impressum  -->
            <ul id="impressum">
                <li>&copy E-Mensa GmbH</li>
                <li>Nico Duinmeyer und Yannick Abram</li>
                <li><a href="https://www.hierstehtdasImpressum.de">Impressum</a></li>
            </ul>


        </footer>

        <div class="allergene">
            <?php
            // Ganz unten die Tabelle
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

            $sql = "SELECT id, name, preis_extern, preis_intern FROM gericht ORDER BY name LIMIT 5";
            $sql3 = "SELECT name, code FROM allergen order by code";
            $result3 = mysqli_query($link, $sql3);


            $result = mysqli_query($link, $sql);


            if (!$result) {
                echo "Fehler während der Abfrage: ", mysqli_error($link);
                exit();
            }
            echo '<table border = 1 cellpadding="5px">';


            echo '<tr>' . '<td>ID</td>' .
                '<td>Name</td>' .
                '<td>Preis Extern in €</td>' .
                '<td>Preis Intern in €</td>' .
                '<td>Allergen</td>' . '</tr>';


            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>', $row['id'], '</td>';
                echo '<td>', $row['name'], '</td>';
                echo '<td>', $row['preis_extern'], '</td>';
                echo '<td>', $row['preis_intern'], '</td>';
                echo '<td>';
                $row_id = $row['id'];

                $sql2 = "SELECT id, code from gericht g INNER JOIN gericht_hat_allergen a ON g.id = a.gericht_id WHERE id = $row_id ORDER BY id ";
                $result2 = mysqli_query($link, $sql2);

                while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo $row2['code'] . ', ';
                }
                echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '<ul class="allergen_liste">';
            while ($row3 = mysqli_fetch_assoc($result3)) {
                echo '<li>' . $row3['code'], '=' . $row3['name'] . '</li>';
            }
            echo '</ul>';
            // Dies ist der Befehl der in die selbst ezeuge Tabelle mit Insert


            mysqli_close($link);


            ?>
        </div>


</body>
</html>
