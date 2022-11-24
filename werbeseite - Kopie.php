<?php
echo TEST;
?>





<!DOCTYPE html>
<html lang="de">


<head>
    <meta charset="UTF-8">
    <title>Werbeseite</title>
    <style>

        /*Schriftart*/
        * {
            font-family: Arial;

        }

        #spalten {
            display: grid;
            grid-template-columns: 15% auto 15%;
        }

        /*Das hier ist CSS fuer das FH Aachen Bild */
        #img {
            height: 80px;
            border: 2px solid #1C7C8A;
        }

        /*Große bild in der Mitte*/
        #img2 {

            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 65%;
            height: 65%;
            margin-top: 40px;

        }

        /*Link zum Bild*/
        #bildlink {
            text-align: center;
            display: block;
        }


        /*Liste fuer das Menü */
        #liste {
            display: inline;
            border: 2px solid #1C7C8A;
            padding-top: 48px;
            padding-bottom: 10px;
        }

        /*Elemente für die List des Menüs */
        #liste > li {

            display: inline;
            list-style-type: none;
            padding-right: 10px;
            padding-left: 30px;

        }

        /*Das ist die Farbe für alle Links */
        a {
            color: #8A2958;
        }

        /*Das alle Überschriften mittig sind  */
        h1 {
            text-align: center;
        }

        /*Lorem Impsum wird beschrieben  */
        p {
            border: 2px solid #1C7C8A;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }

        /*Preis Tablle   */
        table, th, td {
            border: 1px solid;
            border-collapse: collapse;
        }

        /*Preis Tablle   */
        table {
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }

        /*E Mensa in Zahlen  */
        #elemente2 {
            display: grid;
            grid-template-columns: 33% 33% 33%;
            gap: 2px;
            text-align: center;
            border: 2px solid #1C7C8A;
            color: #70298A;
        }

        /*Das ist wichtig für uns */
        #wichtig {
            margin-left: 40%;
            margin-right: 40%;
        }

        /*Newsletter anmeldung */
        #ueberschriften, #felder {
            display: grid;
            grid-template-columns: 40% 20% 40%;
            gap: 2px;
            justify-items: center;
        }

        /*Check Button  */
        #check_button {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        /*Footer  */
        footer {
            border-top: 2px #1C7C8A solid;
            text-align: center;

        }

        #impressum > li {
            display: inline;
            list-style-type: none;
            padding-right: 10px;
            padding-left: 10px;
        }

        #impressum > li:not(:last-child) {
            border-right: 2px solid;
            border-color: #1C7C8A;
        }


    </style>


</head>


<body>


<br>

<!-- Das ist das Menü -->
<ul id="liste">
    <img id="img" src="fhaachen.jpg" alt="E Mensa Logo">
    <li><a href="#erstens">Ankündigung</a></li>
    <li><a href="#zweitens">Speisen</a></li>
    <li><a href="#drittens">Zahlen</a></li>
    <li><a href="#viertens">Konakt</a></li>
    <li><a href="#fuenftens"> Wichtig für Uns</a></li>
</ul>
<div id="spalten">
    <div></div>
    <div>
        <main>
            <!-- Das istr das Bild  -->
            <img id="img2" src="lily-banse--YHSwy6uqvk-unsplash.jpg" alt="EMensa Logo">
            <!-- Link für das Bild  -->
            <a id="bildlink" href="https://unsplash.com/photos/-YHSwy6uqvk">Unsplash</a>
            <!-- Erste Überschrift  -->
            <h1 id="erstens">Bald gibt es Essen auch online ;)</h1>
            <!-- Das ist der Lorem Ipsum  -->
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et
                dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br> Lorem ipsum dolor
                sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam
                erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                gubergren, no
                sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <!-- Zweite Überschrift -->
            <h1 id="zweitens">K&ouml;stlichkeiten, die Sie erwarten</h1>

            <!-- Table für die Preise  -->
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Preis intern</th>
                    <th>Preis extern</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Rindfleisch mit Bambus, Kaiserschoten und rotem Paprika, dazu Mie Nudeln</th>
                    <th>3,50</th>
                    <th>6,20</th>
                </tr>
                <tr>
                    <th>Spinatrisotto mit kleinen Samosateigecken und gemischtem Salat</th>
                    <th>2,90</th>
                    <th>5,30</th>
                </tr>
                </tbody>
            </table>

            <br>
            <!-- 3. Überschrift  -->
            <h1 id="drittens">E-Mensa in Zahlen </h1>
            <!-- Daten für Zahlen in der Mensa -->
            <div id="elemente2">
                <div>X Besucher</div>
                <div>y Anmeldungen zum Newsletter</div>
                <div>z Speise</div>
            </div>

            <!-- 4. Überschrfit  -->
            <h1 id="viertens">Intresse geweckt ? Wir informieren Sie ! </h1>
            <br>
            <br>

            <!-- Newsletter Anmeldung  -->
            <div id="ueberschriften">
                <div><label for="vorname">Vorname*</label></div>
                <div><label for="email">E-Mail*</label></div>
                <div><label for="sprache">Newsletter bitte in:</label></div>
            </div>

            <form action="formdata1.html" method="post">

                <div id="felder">
                    <div><input type="text" id="vorname" placeholder="Vorname " required></div>
                    <div><input type="email" id="email" placeholder=" " required></div>
                    <div><select name="sprache" id="sprache">
                        <option value="1" selected>Deutsch</option>
                        <option value="2">Englisch</option>
                        <option value="3">Franz&ouml;sisch</option>
                    </select></div>
                </div>

                <br>

                <div id="check_button">
                    <input type="checkbox" id="box" required>
                    <label for="box">Den Datenschutzbestimmungen stimme ich zu</label>

                    <br>
                    <br>

                    <input type="submit" value="Zum Newsletter anmelden">
                </div>

                <br>
                <br>


            </form>
            <!-- Das ist die 5. Überschrift  -->
            <h1 id="fuenftens">Das ist uns wichtig </h1>
            <ul id="wichtig">
                <li>Beste frische saisonale Zutaten</li>
                <li>Ausgewogene anwechslungreiche Gerichte</li>
                <li>Sauberkeit</li>
            </ul>

            <br>
            <br>
            <br>
            <br>
            <!-- Das ist die 6. Überschrift  -->
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
    </div>
    <div></div>
</div>
</body>
</html>