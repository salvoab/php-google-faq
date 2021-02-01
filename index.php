<?php
/*
Riscrivere questa pagina del sito google
https://policies.google.com/faq. 
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
*/
$faqs = [
    "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" => [
        "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
        "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
        "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
        "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
        "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
    ],
    "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" => [
        "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
        "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
        "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.",
        "Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
    ],
    "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?" => [
        "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
    ],
    "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?" => [
        "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
    ]
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: sans-serif;
        }

        header{
            width: 100%;
            background-color: white;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
        }

        main{
            margin-top: 160px;
        }

        .d-flex{
            display: flex;
            align-items: center;
        }

        h2{
            padding-top: 40px;
            font-size: 24px;
            font-weight: 500;
            line-height: 32px;
        }

        p{
            padding-top: 20px;
            font-size: 14px;
            line-height: 24px;
        }

        .container {
            width: 60%;
            margin: auto;
        }

        h3, nav a{
            color: #5f6368;
        }

        nav a{
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            padding: 5px 22px;
        }

        .active{
            color: #3367d6;
            border-bottom: 3px solid #3367d6;
        }

        footer{
            margin-top: 40px;
            background: #f5f5f5;
            border-top: 1px solid #eee;
            font-size: 11px;
            line-height: 2.19;
            padding: 10px 15px 10px 15px;
        }
        footer ul{
            list-style: none;
            margin-left: -8px;
        }
        footer ul li{
            padding-right: 8px;
            display: inline;
            color: rgba(61,61,61,.8);
        }
    </style>
</head>
<body>
    
    <header>
        <div class="d-flex" style="padding: 10px">
            <img src="https://lh3.googleusercontent.com/proxy/TPW0Asu2g0bGChX1wAAwdYA8zp9yqI3v3ArG-JjcctKM8Xb8qx5A0-2uJMeP17-yFW-mRDYwtbj2E-UR4F68gf9JYZopOs0-Kh-qGEEYlUnunck_lyIJyK4p5TDJvIBjJA" alt="google logo" style="width: 100px">
            <h3>Privacy e termini</h3>
        </div>
        <nav style="margin-bottom: 7px">
            <a href="#">Introduzione</a>
            <a href="#">Norme sulla privacy</a>
            <a href="#">Termini di servizio</a>
            <a href="#">Tecnologie</a>
            <a href="#" class="active">Domande frequenti</a>
        </nav>
        <hr>
    </header>

    <main>
        <div class="container">
            <?php foreach($faqs as $question => $answers){ ?>
                <h2><?php echo $question; ?></h2>
                <?php foreach($answers as $answer) {?>
                    <p><?php echo $answer; ?></p>
                <?php } ?> 
            <?php } ?> 
        </div>
    </main>

    <footer>
        <div class="container">
            <ul>
                <li>Google</li>
                <li>Tutto su Google</li>
                <li>Privacy</li>
                <li>Termini</li>
            </ul>
        </div>
    </footer>

</body>
</html>