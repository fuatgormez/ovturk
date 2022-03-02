<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Fuat Görmez">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">


    <!--==============================
        All CSS File
    ============================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/bootstrap.min.css">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/flaticon.min.css">
    <!-- Fontawesoem Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/fontawesome.min.css">
    <!-- Select Box -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/slick.min.css">
    <!-- Layer Slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/layerslider.min.css">
    <!-- Date & Time Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/jquery.datetimepicker.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/style.css">
    <!-- Margin & Padding -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/spacing.min.css">
    <!--==============================
        CSS File End
    ============================== -->
    <style>
        input:focus,
        input.store_search:focus {

            outline: none !important;
            outline-width: 0 !important;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
        }

        .store_search {
            width: 100%;
            height: 62px;
            border: 2px solid#eee;
            padding-left: 10px;
            color: #09285b;
            border-radius: 0;
            background-color: #fff;
        }

        .land {
            --bg-color: #f62e53;
            --text-color-hover: #ffffff;
            --box-shadow-color: rgba(220, 233, 255, 0.48);
        }

        .card-city {
            width: auto;
            height: auto;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            box-shadow: 0 14px 26px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease-out;
            text-decoration: none;
        }

        .card {
            width: 300px;
            height: 321px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            box-shadow: 0 14px 26px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease-out;
            text-decoration: none;
        }

        .card:hover {
            cursor: pointer;
            transform: translateY(-5px) scale(1.005) translateZ(0);
            box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
                0 24px 46px var(--box-shadow-color);
        }

        .left-sidebar-store {
            opacity: 0;
        }
    </style>
</head>

<body class="bg-primary3">


    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


    <!--********************************
       Code Start From Here
******************************** -->


    <!--==============================
Preloader
============================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="section-title mt-20">
                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="all-store">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="section-title">
                        <h1 class="title text-white">Choose Your Country</h1>
                    </div>
                </div>
            </div>

            <div class="row csrf" data-csrf="<?php echo $this->security->get_csrf_hash(); ?>">
                <?php foreach ($all_land as $land) : ?>
                    <div class="col-md-3 mb-20">
                        <div class="card land select_land" data-land-name="<?php echo $land['land_name']; ?>">
                            <img src="public/uploads/store_photos/flag/<?php echo $land['lang_flag']; ?>">
                            <h3 class="heading4 pt-20"><?php echo $land['land_name']; ?></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="left-sidebar-store mb-40">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-xl-4">
                    <div class="card land" data-land-id="landid">
                        <img src="public/uploads/store_photos/flag/Deutschland_store_flag_16.svg">
                        <h3 class="heading4 pt-20">Deutschland</h3>
                        <div class="reset-all-store title text-blue">All Store</div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="card-city">
                        <div class="section-title mb-40 w-100">
                            <h1 class="title text-blue">Choose Your City</h1>
                            <input type="text" class="store_search" id="filterCity" placeholder="search" value="">
                        </div>

                        <div class="list-group w-100" id="resultsCity">
                                <div class="resultsCity mb-2">
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
Preloader End
============================== -->


    <!--********************************
        Code End  Here
******************************** -->



    <!--==============================
Cookie
============================== -->
    <?php if (!$this->input->cookie('required_cookie')) : ?>

        <style>
            /* Cookie Agreement */
            #cookie__agreement__wrapper {
                position: fixed;
                width: 100vw;
                height: 100vh;
                top: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 1000000;
            }

            #cookie__agreement,
            #cookie__agreement__details {
                background: #F6E3DA;
                max-width: 841px;
                /*border-radius: 5px;*/
                /*box-shadow: 0px 0px 10px rgba(0,0,0,0.16);*/
                position: fixed;
                top: 40vh;
                z-index: 9999;
                color: #707070;
                font-family: brandon_grotesqueregular;
                font-size: 20px;
                line-height: 30px;
                text-align: center;
                padding-top: 35px;
                padding-bottom: 50px;
                left: 0;
                right: 0;
                margin: auto
            }

            #cookie__agreement p {
                margin: 0;
            }

            #cookie__agreement #cookie__agreement__content {
                max-width: 85%;
                margin-left: auto;
                margin-right: auto;
            }

            #cookie__agreement #cookie__agreement__content a {
                color: white;
            }

            #cookie__agreement__link {
                width: 274px;
                color: #fff;
                font-family: brandon_grotesquemedium;
                font-size: 20px;
                line-height: 34px;
                display: block;
                text-align: center;
                /*border-radius: 4px;*/
                padding: 8px 0;
                cursor: pointer;
                text-decoration: none;
                margin-left: auto;
                margin-right: auto;
                margin-top: 30px;
                font-weight: 200;
                border: solid 1px #fff;
                background-color: #B02E60;
                text-transform: uppercase;
                letter-spacing: 0.7px;
            }

            #cookie__agreement__manage__link {
                width: 274px;
                color: #fff;
                font-family: brandon_grotesquemedium;
                font-size: 13px;
                line-height: 34px;
                display: block;
                text-align: center;
                /*border-radius: 4px;*/
                padding: 8px 0;
                background-color: transparent;
                cursor: pointer;
                text-decoration: none;
                margin-left: auto;
                margin-right: auto;
                margin-top: 30px;
                font-weight: 200;
                border: solid 1px #fff;
                background: rgba(0, 0, 0, 0.3) !important;
                text-transform: uppercase;
                letter-spacing: 0.7px;
            }

            #cookie__agreement__details {
                max-height: 50vh;
                overflow-y: scroll;
                scrollbar-width: thin;
                top: 20vh;
                text-align: left;
                position: relative;
                padding-top: 0;
                padding-bottom: 0;
            }

            #cookie__agreement__details::-webkit-scrollbar {
                width: 5px;
            }

            #cookie__agreement__details::-webkit-scrollbar-thumb {
                background: rgba(0, 0, 0, 0.2);
            }

            #cookie__agreement__details::-webkit-scrollbar-track {
                background: #ffffff25;
            }

            #cookie__agreement__details .cookie--section {
                padding: 15px;
            }

            #cookie__agreement__details .cookie--section h2 {
                font-size: 30px;
                color: #000;
            }

            #cookie__agreement__details .cookie--section h2 img {
                margin-bottom: -2px;
            }

            #cookie__agreement__details .cookie--section p a {
                color: #B02E60;
                font-weight: 600;
                text-decoration: none;
            }

            #cookie__global__agreement__link {
                position: sticky;
                bottom: 0px;
                width: 100%;
                text-align: center;
                display: block;
                cursor: pointer;
                background-color: #08275a;
                padding: 10px;
                color: #fff;
                text-transform: uppercase;
                font-size: 20px;
                font-weight: 200;
                font-family: brandon_grotesquemedium;
            }

            #cookie__global__agreement__close {
                color: #000;
                position: sticky;
                top: 15px;
                right: 15px;
                cursor: pointer;
                font-size: 35px;
                left: auto;
                float: right;
            }
        </style>
        <?php echo form_open_multipart(base_url().'cookie/ed8b172ad0e4433f9868511b6c91a76726702082',array('class' => 'form-horizontal')); ?>
        <div id="cookie__agreement__wrapper">
            <div id="cookie__agreement" style="display: none;">
                <div id="cookie__agreement__content" class="colored--container">
                    <p>Irisshot Photography verwendet Cookies, um dir den bestmöglichen Service zu gewährleisten. Einige Cookies sind technisch notwendig, während andere uns helfen, diese Website und Deine Erfahrung zu verbessern.</p>
                </div>
                <a id="cookie__agreement__link" href="<?php echo base_url('cookie/ed8b172ad0e4433f9868511b6c91a76726702082'); ?>">Alle akzeptieren</a>
                <a id="cookie__agreement__manage__link" onclick="$('#cookie__agreement__details').show();$('#cookie__agreement').hide();">Cookie-Einstellungen verwalten</a>
            </div>

            <div id="cookie__agreement__details">
                <a id="cookie__global__agreement__close" onclick="$('#cookie__agreement__details').hide();$('#cookie__agreement').show();">x</a>
                <div class="cookie--section">
                    <h2>
                        <input type="checkbox" name="required_cookie" value="1" id="required_cookie" disabled checked><label for="required_cookie">Notwendige Cookies</label>
                    </h2>
                    <p>
                    </p>
                    <p>Diese Technologien sind erforderlich, um die Kernfunktionalität unserer Website zu aktivieren.</p>
                    <p>(1) Bei der bloß informatorischen Nutzung der Website, also wenn Sie sich nicht zur Nutzung der Website anmelden, registrieren oder uns sonst Informationen übermitteln, erheben wir keine personenbezogenen Daten, mit Ausnahme der unter 4. erwähnten Daten, die Ihr Browser übermittelt, um Ihnen den Besuch der Website technisch zu ermöglichen.</p>
                    <p>(2) Bei der Nutzung der Website werden sogenannte Cookies auf Ihrem Rechner gespeichert. Bei Cookies handelt es sich um kleine Textdateien, die auf Ihrer Festplatte dem von Ihnen verwendeten Browser zugeordnet gespeichert werden und durch welche der Stelle, die den Cookie setzt (in diesem Fall also uns), bestimmte Informationen zufließen. Cookies können keine Programme ausführen oder Viren auf Ihren Computer übertragen. Sie dienen hier nur dazu, das Internetangebot insgesamt nutzerfreundlicher und effektiver zu machen. <br>Wir setzen z.B. Cookies dazu ein, um Sie für Folgebesuche identifizieren zu können, falls Sie über einen Account bei uns verfügen. Andernfalls müssten Sie sich für jeden Besuch erneut einloggen. Ebenso nutzen wir Cookies für die Bereitstellung folgender Dienste:</p>
                    <ul>
                        <li>Gewinnspiele/Gamification auf unserer Website</li>
                        <li>Erstellung und Nutzung von Gutscheinen</li>
                        <li>Nutzung von Formularen</li>
                        <li>Application Health Management</li>
                        <li>Bereitstellung von Diensten wie SMS-Warteschlangen (Priorityline) und ähnliche</li>
                    </ul>
                    <p>a) Diese Website nutzt Cookies in folgendem Umfang:</p>
                    <ul>
                        <li>Transiente Cookies (temporärer Einsatz)</li>
                        <li>Persistente Cookies (zeitlich beschränkter Einsatz)</li>
                        <li>Third-Party Cookies (von Drittanbietern)</li>
                        <li>Flash-Cookies (dauerhafter Einsatz)</li>
                    </ul>
                    <p>b) Transiente Cookies werden automatisiert gelöscht, wenn Sie den Browser schließen. Dazu zählen insbesondere die Session-Cookies. Diese speichern eine sogenannte Session-ID, mit welcher sich verschiedene Anfragen Ihres Browsers der gemeinsamen Sitzung zuordnen lassen. Dadurch kann Ihr Rechner wiedererkannt werden, wenn Sie auf die Website zurückkehren. Die Session-Cookies werden gelöscht, wenn Sie sich ausloggen oder Sie den Browser schließen.</p>
                    <p>c) Persistente Cookies werden automatisiert nach einer vorgegebenen Dauer gelöscht, die sich je nach Cookie unterscheiden kann. Sie können die Cookies in den Sicherheitseinstellungen Ihres Browsers jederzeit löschen.</p>
                    <p>d) Sie können Ihre Browser-Einstellung entsprechend Ihren Wünschen konfigurieren und z.B. die Annahme von Third-Party-Cookies oder allen Cookies ablehnen. Wir weisen Sie jedoch darauf hin, dass Sie dann eventuell nicht alle Funktionen dieser Website nutzen können.</p>
                    <p>e) Die genutzten Flash-Cookies werden nicht durch Ihren Browser erfasst, sondern durch Ihr Flash-Plug-in. Diese speichern die notwendigen Daten unabhängig von Ihrem verwendeten Browser und haben kein automatisches Ablaufdatum.</p>
                    <p>Rechtsgrundlage für diese Datenverarbeitung ist Art. 6 Abs. 1 S. 1 f) DSGVO. Unser berechtigtes Interesse besteht darin, dass wir durch die Datenverarbeitung statistische Auswertungen betreffend die Nutzung unserer Website vornehmen und unsere Internetangebote für die Nutzer optimieren können.</p>
                    <p>f) Im Zuge des Bewerbungseingangs befinden sich Ihre personenbezogenen Daten temporär bei unserem, nach Art. 28 EU-DSGVO verpflichteten Auftragnehmer, die Jobacademy Personaldienstleistungen (EU) (Inh. Theo Papadopoulos). Die Verarbeitung Ihrer Bewerbungsunterlagen findet durch die irisshot Photostudios GmbH und die Jobacademy Personaldienstleistungen (EU) statt.</p>
                    <p class="empty"> </p>
                    <p>(3) Bei jedem Zugriff auf unseren Internetauftritt werden Zugriffsdaten in einer Protokolldatei auf dem Server unseres Providers gespeichert.</p>
                    <p>(4) Dieser Datensatz besteht z.B. aus Ihrer IP-Adresse, Datum und Uhrzeit der Anforderung, dem Namen der angeforderten Datei, der übertragenen Dateimenge und dem Zugriffsstatus, einer Beschreibung des verwendeten Webbrowsers und Betriebssystems sowie dem Namen Ihres Internet Service Providers.</p>
                    <p>(5) Diese Daten werden aus technischen Gründen erhoben. Eine Auswertung findet ausschließlich zu statistischen Zwecken und ohne Personenbezug (Besucherzahlen und Seitenpopularität) statt. Eine Löschung erfolgt automatisch nach spätestens 14 Tagen.</p>
                    <p class="empty"> </p>
                    <p><strong><span style="text-decoration: underline;">Kontaktformular</span> </strong><br>Bei eingesetzten Kontaktformularen gilt der Grundsatz der Speicherbegrenzung. Der Art. 5 Abs. 1 DSGVO stellt zudem bestimmte Grundsätze für die Verarbeitung personenbezogener Daten auf, die auch bei der Datenerhebung und – Verarbeitung durch Kontaktformulare zu beachten sind. Insbesondere fordert Art. 5 Abs. 1 DSGVO, dass personenbezogene Daten dem Zweck angemessen und nur solange gespeichert werden, wie es der Zweck erfordert (Speicherbegrenzung). „Personenbezogene Daten müssen so lange gespeichert werden, wie es für die Zwecke, für die sie verarbeitet werden, erforderlich ist“ (Art. 5 Abs 1 e DSGVO)</p>
                    <p><span style="text-decoration: underline;"><strong>Google Web Fonts</strong></span> <br>Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so genannte Web Fonts, die von Google bereitgestellt werden. Beim Aufruf einer Seite lädt Ihr Browser die benötigten Web Fonts in ihren Browsercache, um Texte und Schriftarten korrekt anzuzeigen. <br>Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern von Google aufnehmen. Hierdurch erlangt Google Kenntnis darüber, dass über Ihre IP-Adresse unsere Website aufgerufen wurde. Die Nutzung von Google Web Fonts erfolgt im Interesse einer einheitlichen und ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 Buchstabe f DSGVO dar. Wenn Ihr Browser Web Fonts nicht unterstützt, wird eine Standardschrift von Ihrem Computer genutzt. <br>Weitere Informationen zu Google Web Fonts finden Sie unter <a href="https://developers.google.com/fonts/faq">https://developers.google.com/fonts/faq</a> und in der Datenschutzerklärung von Google: <a href="https://www.google.com/policies/privacy/">https://www.google.com/policies/privacy/</a>.</p>
                    <p><span style="text-decoration: underline;"><strong>Digital Ocean</strong></span><br>Digital Ocean ist ein Hosting-Anbieter mit Cloud Infrastruktur, der unter anderem Webserver-Infrastruktur für Softwarentwicklung anbietet. Auf den Servern von Digital Ocean werden die Personen bezogenen Daten, die auf der Website erhoben werden, gespeichert. Newsletter-Anmeldungen, Wertgutschein-Bestellungen, Bestellungen von Aktions-Produkten und Job-Bewerber Daten. Erfasst und gelagert werden Daten wie Anrede, Vorname, Nachname, Adresse, Geburtsdatum, E-Mail-Adresse, Berufswünsche und PDFs, die z.B. Anschreiben, Lebensläufe, Arbeitsproben und Zeugnisse erhalten können. Auf diese Daten haben ausschließlich Mitarbeiter der Firma irisshot (irisshot Photostudios GmbH, Maria-Merian-Str. 7, 24145 Kiel, Tel.: 0431 7053580, E-Mail: kontakt@irisshot.de) Zugriffsrechte.</p>
                    <p><strong><span style="text-decoration: underline;">Tchibo Kooperation</span></strong><br>Wenn Sie uns Ihre ausdrückliche Einwilligung erteilt haben, indem Sie Sie einen entsprechend hierfür vorgesehenen Button geklickt haben, setzen wir innerhalb unseres Internetauftritts <a href="http://www.irisshot.de/tchibo">www.irisshot.de/tchibo</a> einen sog. Tracking-Pixel ein. Durch dieses Verfahren werden die Seitenaufrufe getrackt und Metadaten wie z.B. Timestamp und Hostadressen übertragen. Die Daten werden via Exactag an das Unternehmen Tchibo GmbH weitergegeben und können durch Tchibo- und Exactag-Mitarbeiter eingesehen werden. Die erhobenen Daten sind für uns anonym, bieten uns also keine Rückschlüsse auf die Identität der Nutzer. Das Tracking dient der Optimierung der Werbemaßnahmen und den Abgleich von Verkäufen der gemeinsamen Aktion.</p>
                    <p class="empty"> </p>
                    <p>Bei Ihrer Kontaktaufnahme mit dem Diensteanbieter per E-Mail oder über das Kontaktformular wird Ihre E-Mail-Adresse und, falls Sie dies angeben, Ihr Name und Ihre Telefonnummer von uns gespeichert, um Ihre Fragen zu beantworten.</p>
                    <p></p>
                </div>

                <div class="cookie--section">
                    <h2>
                        <input type="checkbox" name="google_analytics_term" value="1" id="google_analytics_term" <?php echo $this->input->cookie('google_analytics_term') ? 'checked' : '' ?>><label for="google_analytics_term">Google Cookies</label>
                    </h2>
                    <p>
                    </p>
                    <p>(3) <strong><span style="text-decoration: underline;">Google Analytics</span></strong><br>Diese Website nutzt Funktionen des Webanalysedienstes Google Analytics. Anbieter ist die Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA. Google Analytics verwendet so genannte „Cookies“. Das sind Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert.<br>Die Speicherung von Google-Analytics-Cookies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber hat ein berechtigtes Interesse an der Analyse des Nutzerverhaltens, um sowohl sein Webangebot als auch seine Werbung zu optimieren. <br>IP Anonymisierung<br>Wir haben auf dieser Website die Funktion IP-Anonymisierung aktiviert. Dadurch wird Ihre IP-Adresse von Google innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum vor der Übermittlung in die USA gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt.</p>
                    <p><span style="text-decoration: underline;">Browser Plugin</span> <br>Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch den Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: <a href="https://tools.google.com/dlpage/gaoptout?hl=de" data-anchor="?hl=de">https://tools.google.com/dlpage/gaoptout?hl=de</a>.</p>
                    <p><span style="text-decoration: underline;">Widerspruch gegen Datenerfassung</span> <br>Sie können die Erfassung Ihrer Daten durch Google Analytics verhindern, indem Sie auf folgenden Link klicken. Es wird ein Opt-Out-Cookie gesetzt, der die Erfassung Ihrer Daten bei zukünftigen Besuchen dieser Website verhindert: Google Analytics deaktivieren. <br>Mehr Informationen zum Umgang mit Nutzerdaten bei Google Analytics finden Sie in der Datenschutzerklärung von Google: <a href="https://support.google.com/analytics/answer/6004245?hl=de" data-anchor="?hl=de">https://support.google.com/analytics/answer/6004245?hl=de</a>.</p>
                    <p><span style="text-decoration: underline;">Auftragsdatenverarbeitung</span> <br>Wir haben mit Google einen Vertrag zur Auftragsdatenverarbeitung abgeschlossen und setzen die strengen Vorgaben der deutschen Datenschutzbehörden bei der Nutzung von Google Analytics vollständig um. <br>Demografische Merkmale bei Google Analytics <br>Diese Website nutzt die Funktion “demografische Merkmale” von Google Analytics. <br>Dadurch können Berichte erstellt werden, die Aussagen zu Alter, Geschlecht und Interessen der Seitenbesucher enthalten. Diese Daten stammen aus interessenbezogener Werbung von Google sowie aus Besucherdaten von Drittanbietern. Diese Daten können keiner bestimmten Person zugeordnet werden. Sie können diese Funktion jederzeit über die Anzeigeneinstellungen in Ihrem Google-Konto deaktivieren oder die Erfassung Ihrer Daten durch Google Analytics wie im Punkt “Widerspruch gegen Datenerfassung” dargestellt generell untersagen.</p>
                    <p>(4) <strong><span style="text-decoration: underline;">Google Ads</span></strong><br>Wir nutzen auf unserem Internetauftritt das Online-Werbeprogramm “Google AdWords” und im Rahmen von Google AdWords das Conversion-Tracking. Das Cookie für Conversion-Tracking wird beim Nutzer gesetzt, wenn dieser auf eine von Google geschaltete Anzeige klickt. Bei Cookies handelt es sich um kleine Textdateien, die auf Ihrem Computersystem abgelegt werden. Diese Cookies verlieren nach 30 Tagen ihre Gültigkeit und dienen nicht der persönlichen Identifizierung. Besucht der Nutzer bestimmte Seiten dieser Website und das Cookie ist noch nicht abgelaufen, können Google und wir erkennen, dass der Nutzer auf die Anzeige geklickt hat und zu dieser Seite weitergeleitet wurde. Jeder Google AdWords-Kunde erhält ein anderes Cookie. Cookies können somit nicht über die Websites von AdWords-Kunden nachverfolgt werden. Die mithilfe des Conversion-Cookies eingeholten Informationen dienen dazu, Conversion-Statistiken für AdWords-Kunden zu erstellen, die sich für Conversion-Tracking entschieden haben. Die Kunden erfahren die Gesamtanzahl der Nutzer, die auf ihre Anzeige geklickt haben und zu einer mit einem Conversion-Tracking-Tag versehenen Seite weitergeleitet wurden. Sie erhalten jedoch keine Informationen, mit denen sich Nutzer persönlich identifizieren lassen. Wenn Sie nicht am Tracking teilnehmen möchten, können Sie dieser Nutzung widersprechen, indem Sie das Cookie des Google Conversion-Trackings über ihren Internet-Browser unter Nutzereinstellungen leicht deaktivieren. Sie werden sodann nicht in die Conversion-Tracking Statistiken aufgenommen. Unter der nachstehenden Internetadresse erhalten Sie weitere Informationen über die Datenschutzbestimmungen von Google: <a href="http://www.google.de/policies/privacy/">http://www.google.de/policies/privacy/</a></p>
                    <p class="empty"> </p>
                    <p></p>
                </div>

                <div class="cookie--section">
                    <h2>
                        <input type="checkbox" name="facebook_tracking_term" value="1" id="facebook_tracking_term" <?php echo $this->input->cookie('facebook_tracking_term') ? 'checked' : '' ?>><label for="facebook_tracking_term">Facebook Cookies</label>
                    </h2>
                    <p>
                    </p>
                    <p><strong><span style="text-decoration: underline;">Facebook</span></strong><br>Wir verwenden auf unserer Seite auch Social Plugins (“Plugins”) des sozialen Netzwerkes facebook.com, welches von der Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, USA betrieben wird (“Facebook”). Die Plugins sind an einem der Facebook Logos erkennbar oder sind mit dem Zusatz “Facebook Social Plugin” gekennzeichnet. Die Liste und das Aussehen der Facebook Social Plugins kann hier eingesehen werden: <a href="https://developers.facebook.com/docs/plugins/">https://developers.facebook.com/docs/plugins/</a>. Wenn Sie unsere Seite aufrufen und währenddessen bei Facebook eingeloggt sind, erkennt Facebook durch die von der Komponente gesammelte Information, welche konkrete Seite Sie besuchen und ordnet diese Informationen Ihrem persönlichen Account auf facebook zu. Klicken Sie z.B. den „Gefällt mir“-Button an oder geben Sie entsprechende Kommentare ab, werden diese Informationen an Ihr persönliches Benutzerkonto auf Facebook übermittelt und dort gespeichert. Darüber hinaus wird die Information, dass Sie unsere Seite besucht haben, an Facebook weitergegeben. Dies geschieht unabhängig davon, ob Sie die Komponente anklicken oder nicht. Wenn Sie diese Übermittlung und Speicherung von Daten über Sie und Ihr Verhalten auf unserer Webseite durch Facebook unterbinden wollen, müssen Sie sich bei Facebook ausloggen und zwar bevor Sie unsere Seite besuchen. Die Datenschutzhinweise von Facebook geben hierzu nähere Informationen, insbesondere zur Erhebung und Nutzung der Daten durch Facebook, zu Ihren diesbezüglichen Rechten sowie zu den Einstellungsmöglichkeiten zum Schutz Ihrer Privatsphäre: <a href="https://de-de.facebook.com/about/privacy/">https://de-de.facebook.com/about/privacy/</a> Zudem sind am Markt externe Tools erhältlich, mit denen Facebook-Social-Plugins mit Add-ons für alle gängigen Browser blockiert werden können <a href="http://webgraph.com/resources/facebookblocker/">http://webgraph.com/resources/facebookblocker/</a> Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Facebook sowie die diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz der Privatsphäre, können Sie den Datenschutzhinweisen von Facebook entnehmen: <a href="https://www.facebook.com/about/privacy/">https://www.facebook.com/about/privacy/</a>. Diese Website verwendet die Remarketing-Funktion „Custom Audiences“ der Facebook Inc. („Facebook“). Diese Funktion dient dazu, Besuchern dieser Webseite im Rahmen des Besuchs des sozialen Netzwerkes Facebook interessenbezogene Werbeanzeigen („Facebook-Ads“) zu präsentieren. Hierzu wurde auf dieser Website das Remarketing-Tag von Facebook implementiert. Über dieses Tag wird beim Besuch der Webseite eine direkte Verbindung zu den Facebook-Servern hergestellt. Dabei wird an den Facebook-Server übermittelt, dass Sie diese Website besucht haben und Facebook ordnet diese Information Ihrem persönlichen Facebook-Benutzerkonto zu. Nähere Informationen zur Erhebung und Nutzung der Daten durch Facebook sowie über Ihre diesbezüglichen Rechte und Möglichkeiten zum Schutz Ihrer Privatsphäre finden Sie in den Datenschutzhinweisen von Facebook unter <a href="https://www.facebook.com/about/privacy/">https://www.facebook.com/about/privacy/</a>. Alternativ können Sie die Remarketing-Funktion „Custom Audiences“ unter <a href="https://www.facebook.com/settings/?tab=ads#_=_">https://www.facebook.com/settings/?tab=ads#_=_</a> deaktivieren. Hierfür müssen Sie bei Facebook angemeldet sein.</p>
                    <p><span style="text-decoration: underline;">Instagram Plugin</span> <br>Auf unseren Seiten sind Funktionen des Dienstes Instagram eingebunden. Diese Funktionen werden angeboten durch die Instagram Inc., 1601 Willow Road, Menlo Park, CA 94025, USA integriert. Wenn Sie in Ihrem Instagram-Account eingeloggt sind, können Sie durch Anklicken des Instagram-Buttons die Inhalte unserer Seiten mit Ihrem Instagram-Profil verlinken. Dadurch kann Instagram den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Instagram erhalten. Die Nutzung erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Instagram: <a href="https://instagram.com/about/legal/privacy/">https://instagram.com/about/legal/privacy/</a></p>
                    <p></p>
                </div>

                <div class="cookie--section">
                    <h2>
                        <input type="checkbox" name="affiliate_marketing_term" value="1" id="affiliate_marketing_term" <?php echo $this->input->cookie('affiliate_marketing_term') ? 'checked' : '' ?>><label for="affiliate_marketing_term">Affiliate Marketing Cookies</label>
                    </h2>
                    <p>
                    </p>
                    <p><span style="text-decoration: underline;"><strong>Affiliate-Marketing</strong></span><br>Nutzen von Affiliate-Marketing Für die optimierte Ausspielung relevanter Werbemittel und Werbekampagnen sammelt die advanced store GmbH, Alte Jakobstr. 79/80, 10179 Berlin, mittels ad4mat-Technologie auf dieser Seite pseudonyme Informationen und Daten über das Surfverhalten von Usern. Dies erfolgt durch Cookies (kleine Textdateien), die auf Ihrem Computer gespeichert werden. Mithilfe einer auf einem besonderen Algorithmus basierenden Analyse des Surfverhaltens kann advanced store GmbH auf dieser und auf anderen Webseiten gezielt relevante, d.h. Ihrem Interesse entsprechende Produkte und Angebote durch Werbebanner empfehlen. Die Verwendung der Cookies dient dabei einzig der Optimierung der empfohlenen Werbeinhalte, eine persönliche Identifizierung des Webseitennutzers erfolgt nicht. advanced store GmbH hat sich dem europäischen Branchenstandard für Online Behavioral Advertising, der EDAA, verpflichtet. Weitere Informationen dazu sowie ein Präferenzmanagement erhalten Sie hier <a href="http://www.youronlinechoices.com/de/">http://www.youronlinechoices.com/de/</a>. Die Dienste der advanced store GmbH erfolgen auf der Grundlage von Art. 6 Abs. 1 lit f DSGVO. Sollten Sie der Verwendung pseudonymer Cookie-IDs und der entsprechenden Analyse Ihres Surfverhaltens widersprechen wollen, so haben Sie hier die Möglichkeit dazu. Ebenso finden Sie hier weitere Informationen sowie die Datenschutzerklärung von advanced store GmbH.</p>
                    <p></p>
                </div>

                <div class="cookie--section">
                    <h2>
                        <input type="checkbox" name="youtube_term" value="1" id="youtube_term" <?php echo $this->input->cookie('youtube_term') ? 'checked' : '' ?>><label for="youtube_term">Youtube Cookies</label>
                        <p>
                        </p>
                        <p><strong><span style="text-decoration: underline;">Nutzung von YOUTUBE</span></strong> <br>Unsere Webseite nutzt Plugins der von Google betriebenen Seite “YouTube”. Betreiber der Seiten ist die YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA. Wenn Sie eine unserer mit einem YouTube-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von YouTube hergestellt. Dabei wird dem Youtube-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Wenn Sie in Ihrem YouTube- Account eingeloggt sind ermöglichen Sie YouTube, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem YouTube-Account ausloggen. Weitere Informationen zum Umgang von Nutzerdaten finden Sie in der Datenschutzerklärung von YouTube unter: <a href="https://www.google.de/intl/de/policies/privacy">https://www.google.de/intl/de/policies/privacy</a></p>
                        <p></p>
                </div>

                <button type="submit" name="form1" id="cookie__global__agreement__link">Speichern</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    <?php endif; ?>
    <!--==============================
Cookie end
============================== -->


    <!--==============================
All Js File
============================== -->

    <!-- Jquery -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/bootstrap.min.js"></script>
    <!-- Jquery ui -->
    <script src="<?php echo base_url(); ?>public/layout/iris/js/jquery-ui.min.js"></script>
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Counter Up -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.counterup.min.js"></script>
    <!-- Select Box -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.nice-select.min.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.magnific-popup.min.js"></script>
    <!-- Layer Slider -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/greensock.min.js"></script>
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/layerslider.transitions.js"></script>
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/layerslider.kreaturamedia.jquery.js"></script>
    <!-- Date & Time Picker -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.datetimepicker.min.js"></script>
    <!-- Isotope Filter -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/isotope.pkgd.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
    <!-- Custom Carousel -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/vscustom-carousel.min.js"></script>

    <!-- Mobile Menu -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/vsmenu.min.js"></script>
    <!-- Mobile Menu -->
    <!-- Main Js File -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/main.js"></script>


    <!--==============================
JS File End
============================== -->
</body>

</html>