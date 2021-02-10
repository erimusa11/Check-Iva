<?php
 ob_start();
 session_start();
 include "functions.php";
 if (!isset($_SESSION['users_id'])) {
     header("Location: index.php");
}

logout();
?>


<?php
if (isset($_POST['submit_btn'])) {

    $partita_iva = $_POST['partita_iva'];


    //invio i dati a confeserfidi

    //$request_headers = array();
   // $request_headers[] = 'Content-Type: application/x-www-form-urlencoded;charset=UTF-8';
    $curlObject = curl_init();
    $fieldspost=array();
    $fieldspost['PIVA'] = $partita_iva;


    curl_setopt_array($curlObject, array(
        CURLOPT_RETURNTRANSFER => 1,
        //CURLOPT_HEADER => 0,
        CURLOPT_URL => 'https://www.confeserfidi-services.com/api_confeserfidi/api/v4/servizio_semaforo_studiobrancozzi',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $fieldspost
    ));

    $resp = curl_exec($curlObject);
    curl_close($curlObject);
   $response = json_decode($resp, TRUE);
 //print_r($response);
   
  
 
}
?>
<?php include 'cssLinks.php' ?>
</head>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<style>
.jumbotron {
    position: relative;
    overflow: hidden;
}

.jumbotron .container {
    position: relative;


    background: rgba(0, 0, 0, 0.2);
    padding: 2rem;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 3px;
}

.jumbotron-background {
    object-fit: cover;
    font-family: 'object-fit: cover;';
    position: absolute;
    top: 0;


}

img.blur {

    -webkit-filter: blur(4px);
    filter: blur(4px);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

body {
    background-color: #fff;
    font-size: 14px;
}

nav {
    position: relative;
    margin: 50px;
    width: 380px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li a {
    display: block;
    background: #ebebeb;
    padding: 10px 15px;
    color: #333;
    text-decoration: none;
    -webkit-transition: 0.2s linear;
    -moz-transition: 0.2s linear;
    -ms-transition: 0.2s linear;
    -o-transition: 0.2s linear;
    transition: 0.2s linear;
}

nav ul li a:hover {
    background: #f8f8f8;
    color: #515151;
}

nav ul li a .fa {
    width: 16px;
    text-align: center;
    margin-right: 5px;
    float: right;
}

nav ul ul {
    background-color: #ebebeb;
}

nav ul li ul li a {
    background: #f8f8f8;
    border-left: 4px solid transparent;
    padding: 10px 20px;
}

nav ul li ul li a:hover {
    background: #ebebeb;
    border-left: 4px solid #3498db;
}

.margin-left {

    margin-left: 20px;
}
</style>



<style>
.trafficlight {
    background: #222;
    background-image: linear-gradient(transparent 2%, #111 2%, transparent 3%, #111 30%);
    width: 170px;
    height: 400px;
    border-radius: 20px;
    position: relative;
    border: solid 5px #fff !important;
}

.trafficlight:before {
    background: #222;
    background-image: radial-gradient(#444, #000);
    content: "";
    width: 170px;
    height: 150px;
    margin: 0 auto;
    position: absolute;
    top: -20px;
    margin-left: 0px;
    border-radius: 50%;
    z-index: -1;
}

.trafficlight:after {
    background: #222;
    background-image: linear-gradient(-0deg, #777 10%, #ccc 30%, #000);
    content: "";
    width: 50px;
    height: 500px;
    margin-left: 60px;
    position: absolute;
    top: 150px;
    z-index: -1;
}

.protector {
    background: transparent;
    width: 180px;
    height: 0;
    position: absolute;
    top: 20px;
    left: -35px;
    border-right: solid 30px transparent;
    border-left: solid 30px transparent;
    border-top: solid 90px #111;
    border-radius: 10px;
    z-index: -1;
}

.protector:nth-child(2) {
    top: 140px;
}

.protector:nth-child(3) {
    top: 260px;
}

<?php if($response['result']['semaforo']=="arancione") {
    ?>.yellow {
        background: yellow;
        background-image: radial-gradient(orange, transparent);
        background-size: 5px 5px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: dotted 2px yellow;
        position: absolute;
        top: 145px;
        left: 35px;
        animation: 0s yellow infinite;
        box-shadow:
            0 0 20px #111 inset,
            0 0 10px yellow;
    }

    <?php
}

?><?php if($response['result']['semaforo']=="rosso") {
    ?>.red {
        background: red;
        background-image: radial-gradient(brown, transparent);
        background-size: 5px 5px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: 20px;
        left: 35px;
        animation: 0s red infinite;
        border: dotted 2px red;
        box-shadow:
            0 0 20px #111 inset,
            0 0 10px red;
    }

    <?php
}

?><?php if($response['result']['semaforo']=="verde") {
    ?>.green {
        background: green;
        background-image: radial-gradient(lime, transparent);
        background-size: 5px 5px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: dotted 2px lime;
        position: absolute;
        top: 270px;
        left: 35px;
        box-shadow:
            0 0 20px #111 inset,
            0 0 10px lime;
        animation: 0s green infinite;
    }

    <?php
}

?>@keyframes red {
    0% {
        opacity: 1
    }

    20% {
        opacity: 1
    }

    40% {
        opacity: 1
    }

    60% {
        opacity: .1
    }

    80% {
        opacity: .1
    }

    100% {
        opacity: .1
    }
}

@keyframes yellow {
    0% {
        opacity: .1
    }

    20% {
        opacity: .1
    }

    40% {
        opacity: 1
    }

    50% {
        opacity: .1
    }

    60% {
        opacity: .1
    }

    80% {
        opacity: .1
    }

    100% {
        opacity: .1
    }
}

@keyframes green {
    0% {
        opacity: .1
    }

    20% {
        opacity: .1
    }

    40% {
        opacity: .1
    }

    60% {
        opacity: 1
    }

    80% {
        opacity: 1
    }

    83% {
        opacity: .1
    }

    86% {
        opacity: 1
    }

    89% {
        opacity: .1
    }

    93% {
        opacity: 1
    }

    96% {
        opacity: .1
    }

    100% {
        opacity: 1
    }
}

html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
}

h1 {
    font-family: "Open Sans";
    font-size: 24px;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    line-height: 26.4px;
}

h3 {
    font-family: "Open Sans";
    font-size: 14px;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    line-height: 15.4px;
}

p {
    font-family: "Open Sans";
    font-size: 14px;
    font-style: normal;
    font-variant: normal;
    font-weight: 400;
    line-height: 20px;
}

blockquote {
    font-family: "Open Sans";
    font-size: 21px;
    font-style: normal;
    font-variant: normal;
    font-weight: 400;
    line-height: 30px;
}

pre {
    font-family: "Open Sans";
    font-size: 13px;
    font-style: normal;
    font-variant: normal;
    font-weight: 400;
    line-height: 18.5714px;
}



.main-content {
    height: 100%;
    width: 50%;
    overflow-y: scroll;
}

/*  notes custom dimension and custom ofverflow */
.notesscroll {
    height: 110px;
    overflow: auto;
}

/* scroll bar custom style for all the pages */
::-webkit-scrollbar {
    width: 7px;
    height: 7px;
}

/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    -webkit-border-radius: 10px;
    border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: green;
    -webkit-box-shadow: inset 0 0 6px #8abedc;
}

::-webkit-scrollbar-thumb:window-inactive {
    background: #8abedc;
}
</style>
<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>

<body class="container-fluid stretch-layout  navigation-toggle-two" style=" padding-right: 0px;
    padding-left: 0px;">

    <?php  //include 'topMenu.php' ?>
    <?php include 'leftMenu.php' ?>

    <!-- begin::main    navigation-toggle-one -->
    <div id="main" class="alert-dark" style="background-color: #f1f6f9;">

        <!-- begin::main-content -->
        <div class="main-content" style="padding-top:10px;">

            <div class="jumbotron jumbotron-fluid" style=" width:100%; background:url(foto/2.png); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  ">

                <div class="jumbotron-background">

                </div>

                <div class="container text-white" style="  opacity: 0.8; background: black;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, black, white);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right , black, white);
">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6"> <img src="https://www.consulentiaziendaliditalia.it/wp-content/uploads/2020/09/nuovo-logo-network-consulenti-grigio-fondo-bianco-300x179.jpg" alt="" style="width: auto;
    height: 179px; opacity: 1;"> </div>


                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="foto/8.png" alt="" style="width: 300px;
    height: auto; opacity: 1;">
                        </div>
                    </div>
                </div>
                <br><br> <br><br> 
                <!-- /.container -->
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2"></div>

                    <form action="dashboard.php" method="POST" class=" col-sm-12 col-md-5 col-lg-5">
                        <div class="form-group col-12">
                            <h3 for="" class="" style="color:white;"> <i class="fa fa-info-circle"></i> Inserici la
                                partita
                                iva</h3>

                            <input name="partita_iva" class="form-control col-12" placeholder="Partita iva" required>

                        </div>
                        <div class="text-center">

                            <button type="submit" id="click" name="submit_btn" class="btn btn-light"
                                style="color:white;"> <i class="fa fa-info-circle"> Cerca </i> </button>
                            <br>
                            <br>
                            <br>

                        </div>
                    </form>
                    <div class="col-sm-12 col-mg-5 col-lg-5">
                        <center>
                            <h4 for="" class="" style="color:white;"> Partita iva: <?php 
 
                                    if (json_last_error() === JSON_ERROR_NONE) {
                                        if ($response['action'] === "ok") {
                                            if($response['result']['semaforo']=="spento"){  
                                                echo "Partita Iva non trovata o non valida";
                                              }else{
                                                echo   $_POST['partita_iva'];
                                              }
                                     } else {
                                    echo   "";
                                     }
                                   
                                   } else { 
                                    echo   "Servizio non disponbile";

                                   }
                             
                               ?></h4>
                            <div class="trafficlight">
                                <div class="protector"></div>
                                <div class="protector"></div>
                                <div class="protector"></div>
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                        </center>
                    </div>

                </div>

                <form action="dashboard.php" method="POST">
                    <center><button type="submit" name="logout" class="btn btn-success btn-lg" data-toggle="tooltip"
                            data-placement="right" title="Logout">
                            LOGOUT
                        </button></center>

                </form>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4"></div>
                <div class="col-lg-4 col-sm-4 col-md-4">
                    <img src="foto/8.png" alt="" style="width: 400px;
    height: auto;">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4"></div>
            </div>
            <br><br>
            <div class="row d-flex justify-content-center">
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>LA NOSTRA SOCIETÀ</h3>
                    <hr>
                    <label for=""><strong>Confeserfidi è una solida socieà finanziaria vigilata da Banca
                            d'Italia,</strong>
                        <p>di dimensioni nazionali,che offre professionalmente alle MPMI e ai professionisti,consulenza
                            e soluzioni finanziarie,vantaggiose e ad alto valore aggiunto,prodotte direttamente o
                            intermediate.</p>
                    </label>
                    <br>
                    <img src="foto/9.png" alt="" class="col-11 h-50">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <br><br><br>
                    <label for=""> E' iscritta all' <strong> Albo ex art. 106 del Testo Unico Bancario </strong>
                    </label>
                    <br><br>
                    <label for="">E' in possesso del <strong>Rating di legalitàù E' in possesso del Rating classe
                            di</strong> rischio 2 richio basso,profilo di <strong>business forte,profilo finanziario
                            soddisfacente,assegnato dall;agenzia di rating</strong> ECAI Crif Ratings.</label>
                    <br><br>
                    <label for=""><strong>La Commissione Europea ha concesso il Codice Europeo di Buona
                            Condotta</strong></label>
                    <br><br>
                    <label for="">E convenzionata con oltre <strong>40 istituti bancari</strong></label>
                    <br><br>
                    <label for="">Ha <strong>oltre 9.000 soci.</strong></label>
                    <br><br>
                    <label for=""><strong>Ha oltre 19 milioni di euro</strong> di patrimonio netto</label>
                    <br><br>
                    <label for="">Ha garantito finanziamenti per oltre <strong>1 miliardo di euro</strong> su quasi
                        24.000 operazioni.</label>
                    <br><br>
                    <label for="">Confeserfidi è un Confidi <strong>autorizzato dal Fondo Centrale di Garanzia per le
                            PMI ,</strong> come <strong>"certificatore del merito creditizio",secondo le nuove
                            disposizioni del 15/03/2019.</strong></label>
                    <br><br>
                    <label for="">E' autorizzata ad operare con <strong>ISMEA</strong>,per il rilascio di co-garranzie e
                        garanzie dirette a favore di imprese agricole.</label>
                    <br><br>
                    <label for="">E' iscritta presso la sezione D dell'<strong>IVASS,come</strong> le banche.</label>
                    <br><br>
                    <label for="">E'Socio <strong>ABI</strong>(associazione bancaria
                        italiana),<strong>Fincredit,Afin:co-founder della Rete Confidi Italiana nonche della Rete
                            Confidi Sicilia in Rete:aderisce ad ABI Lab</strong> nonchè all'<strong>European
                            Microfinance Network.</strong></label>
                    <br><br>
                    <label for="">E' un intermediario finanziario selezinato dal <strong>FEI</strong>(Fondo Europeo per
                        gli Investimenti) e accreditato dalla <strong>BEI</strong>(Banca Europea degli
                        Investimenti).</label>
                    <br><br>
                    <label for=""><strong>Confeserdidi si è aggiudicata bandi pubblici per la gestione di misure
                            agevolate a favore delle imprese in partenariato con
                            Regioni</strong>(Sicilia,Calabria,Puglia,Emillia Romagna,Campania e Lazio),<strong> di
                            Finanzirie regionali</strong>(Sviluppo Campania,Lazio
                        Innova,Fincalabria,Finmolise,Irfis,Ircac),<strong>di Finanzarie
                            statali(Simest),Ministeri</strong>(Agricoltura,Sviluppo economico ed attivita produttive)
                        nonchè Istituzioni europee come FEI e BEI.</label>
                    <br><br>

                </div>
        
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6"><img src="foto/1.png" alt="" style="width: 600px;
    height: auto;"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="foto/8.png" alt="" style="width: 400px;
    height: auto;">
                    <br>
                    <h4>SIAMO PRESENTI IN TUTTA ITALIA</h4>
                    <label for="">Contattaci per conoscere la sede più vicina a te oppure per richiedere un appuntamento
                        con un nostro agente,verrà ad illustarti i serivizi e i prodotti più adatti per la tua
                        azienda</label>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h4><strong>PRODOTTI E SERVIZI CONFESERFIDI</strong></h4>
                    <br>
                    <label for=""><strong>1.0 GARANZIA COLLETTIVA FIDI</strong></label>
                    <br>
                    <label for=""><strong>2.0 FINANZIAMENTI DIRETTI (lIQUIDITÀ IMMEDIATA)</strong></label>
                    <br>
                    <label for=""><strong>3.0 FIDEIUSSIONI</strong><br>Fideiussioni nei confronti della Pubblica
                        Amministrazione Fideiussioni Commerciali</label>
                    <br>
                    <label for=""><strong> 4.0 ATTESTAZIONI DI CAPACITÀ FINANZIARIA</strong></label>
                    <br>
                    <label for=""><strong>5.0 FINANZA AGEVOLATA</strong><br>Consulenza e assistenza per partecipare ai
                        Bandi di Finanza Agevolata.Informazione continua sulle nuove opportunità.</label>
                    <br>
                    <label for=""><strong>4.0 ATTESTAZIONI DI CAPACITÀ FINANZIARIA</strong></label>
                    <br>
                    <label for=""><strong>6.0 INVITALIA</strong><br>-resto al sud<br>-impresa a tasso zero</label>
                    <br>
                    <label for=""><strong>4.0 ATTESTAZIONI DI CAPACITÀ FINANZIARIA</strong></label>
                    <br>
                    <label for=""><strong>7.0 NUOVA SABATINI</strong></label>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="foto/3.png" alt="" style="width: 600px;
    height: auto;">
                </div>

            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10" class="" style="background-color:black;">
                    <br><br><br>
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 col-md-2"></div>
                        <div class="col-lg-4 col-sm-4 col-md-4">
                            <img src="foto/4.png" alt="" style="width:200px;
    height: auto;">
                        </div>
                        <div class="col-lg-5 col-sm-5 col-md-5">
                            <img src="foto/8.png" alt="" style="width:150px;
    height: auto;">
                            <br><br>
                            <h3 class="text-light">LE PRINCIPALI BANCHE CONVENZIONATE</h3>
                            <br>

                        </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">

                        </div>
                    </div>
                    <br><br><br>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">

                    <img src="foto/024ef84f-5ecd-4b27-ae4c-4762c0aef7ce.jpg" alt="" style="width:150px;
    height: auto;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-md-4">
                    <img src="foto/5.png" alt="" style="width:400px;
    height: auto;">
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4">
                    <img src="foto/b106b57e-e26b-40fb-b3ab-aa450150a9bf.jpg" alt="" style="width:400px;
    height: auto;">
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4">
                    <img src="foto/aaaaaa.jpg" alt="" style="width:400px;
    height: auto;">
                </div>


            </div>
            <br><br>
            <div class="row">

                <div class="col-lg-12 col-sm-12 col-md-12 d-flex justify-content-center">


                    <h3><strong> VUOI CONOSCERE MEGLIO LA NOSTRA SOCIETÀ E I NOSTRI SERVIZI?</strong></h3>
                    <br>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 d-flex justify-content-center">
                    <label for="" class="text-center"><strong> Confeser di è una solida società nanziaria vigilata da
                            Banca d'Italia,</strong> di dimensioni nazionali,che o re professionalmente alle MPMI e al
                        professionisiti,consulenza e soluzioni nanziarle,vantagiose e ad alto valore aggiunto, prodotte
                        direttamente o intermediate</label>
                </div>
                <br><br><br><br>
                <div class="col-lg-12 col-sm-12 col-md-12 d-flex justify-content-center">
                    <label for="">Confeser di soc.cons. a r.l.
                        <br>Via dei Lillà n.22 - 97018 Scicli (Rg)<br>P. IVA,C.F.e N° di iscrizione CCIAA<br>di Ragusa :
                        01188660888<br>CODICE SDI G9HZJRW</label>
                </div>

            </div>





            <?php //include 'footer.php' ?>

        </div>
        <!-- end::main-content -->

    </div>
    <!-- end::main -->
    <?php include 'scripts.php' ?>
</body>


<script>
$('.sub-menu ul').hide();
$(".sub-menu a").click(function() {
    $(this).parent(".sub-menu").children("ul").slideToggle("100");

    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");

});
</script>

</html>