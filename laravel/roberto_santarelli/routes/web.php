<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/opere', function (){
    return view('opere');
});

Route::get('/biografia', function (){
    return view('biografia');
});

Route::get('/continua', function (){
    return view('continua');
});


Route::get('/libro/{id}', function ($id) {
    // Qui puoi definire i dati dei tuoi 3 libri senza database
    $libri = [
        1 => [
            'titolo' => 'Terrazza vista strada',
            'descrizione' => "La vista e i pensieri sono confusi, ma non m’impediscono di percepire con la coda dell’occhio il leggero dondolio di un coltello sporco di sangue,
                            che è sul pavimento” Luigi Simeoni braccato da uno sconosciuto,
                            come ultima chance si rifugia sopra una terrazza condominiale,
                            bloccato, senza una via di fuga. 
                            Durante la colluttazione con lo sconosciuto la sua mente 
                            gli presenta il conto di una vissuta al massimo. 
                            Trascinandolo in ricordi scomodi e destabilizzando la sua psiche, 
                            facendogli rivivere forzatamente molti momenti della sua vita. ",

            'immagine' => 'terrazza.jpg'
        ],
        2 => [
            'titolo' => 'Nata a Tokio, morta a Palestrina',
            'descrizione' => "Il capitano Luigi Simeoni
                si arruola da giovane nelle forze
                speciali dell'esercito italiano facendo
                missioni speciali in tutto il mondo; ora stanco
                di quella vita vissuta al massimo, ne vuole una più
                stabile e tranquilla con la sua Ywette e con il figlio
                che sta per nascere. Passa all'arma dei carabinieri in una
                piccola caserma di provincia a Senigallia. Il primo caso
                che gli si presenta risulta impervio e pieno di ostacoli a
                cui non è abituato. Due cadaveri trovati a distanza di una
                settimana mettono in subbuglio la piccola caserma.
                Questa volta il crimine viene dal lontano Giappone e
                con esso anche Lin Vitale, agente speciale
                italo-giapponese che lo aiuterà nelle indagini.
                La vicenda si svolge tra Senigallia e
                Giappone fino ad arrivare a
                Palestrina.",
            'immagine' => 'tokio.jpg'
        ],
        3 => [
            'titolo' => 'E se ti dicessi che mi piace uccidere?',
            'descrizione' => "Il ritrovamento di un cadavere orrendamente mutilato sconvolge la quiete di Senigallia. 
            Nella piccola caserma dei carabinieri, il capitano Luigi “Gino” Simeoni si ritrova alle prese con un caso che sfida ogni logica, 
            un mosaico di indizi che sembrano non combaciare. 
            Al centro dell’indagine emerge una figura complessa: 
            Guglielmo Franceschini, in arte Gange ex atleta di wrestling, 
            costretto a rinunciare al suo sogno sportivo per problemi fisici 
            ha trovato rifugio in una vecchia passione. 
            Determinato a costruirsi una carriera, si è immerso in un mondo in cui il successo
            appare sempre fuori portata. Tra musica, tecnologia e superstizione, 
            ogni personaggio di questo avvincente thriller segue un percorso che pare 
            non incrociarsi mai con gli altri...finché un fotografo freelance non rompe 
            l’equilibrio, portando alla luce verità sconvolgenti.",
            'immagine' => 'kill.png'
        ],
        4 => [
            'titolo' => "La macchia d'inchiostro",
            'descrizione' => "Tutto nasce da qui",
            'immagine' => 'macchia.png'
        ],
    ];

    // Se l'ID esiste nell'elenco, passiamo i dati alla vista
    if (array_key_exists($id, $libri)) {
        return view('show', ['libro' => $libri[$id]]);
    }

    // Se l'ID non esiste, torna alla home
    return redirect('/');
});
