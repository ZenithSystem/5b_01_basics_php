<?php
    /*
        Puo contenere html
        tradotto in index.html cosi che il client possa leggerlo
        Lo restituisce quando il server lo restituisce con la reply http
        Per aprirlo mandare una richiesta http(GET) a 127.0.0.1 (localhost) effettuata con il browser
        
        http://localhost/Fabio_Barro_20262027/lezioni/5b_01_basics_php/
    */

    //scrivere funzione

    function stampa_debug($array)
    {
        echo("<pre>");
        print_r($array);
        echo("</pre>"); 
    }

    //I paramtreti sono: larray da eleminare e la chave della coppia da eliminare
    function elimina($array, $chiava)
    {
        unset($array[$chiave]);
        $array = array_values($array);

        return $array;
    }


    // 1. Dichiariamo la variabile prima di utilizzarla
    $nome = "Gianluca";

    // 2. Rimosso il '<' iniziale e corretto il typo
    echo("<h1 style='color:blue;'> Hello World, $nome </h1>");

    // Dichiarazione variabili (array)
    // Primo modo (tradizionale)
    $linguaggi_programmazione = array("PHP", "Python", "C++");

    // Secondo modo (moderno)
    $linguaggi_programmazione2 = ["C#", "JAVA", "Javascript"]; 




    // Stampa del primo array
    echo("<pre>");
    print_r($linguaggi_programmazione);
    echo("</pre>"); // Corretto con lo slash di chiusura

    //posso sostituirla con stampa_debug


    stampa_debug($linguaggi_programmazione);

    //Echo per stampare i tag html mentre print o print_f per debuggare

    /*
        in php non esistono gli array ma array associativi
        sono l'implementazione php sono l'implementazione delle hashmap o che in python i dizionari
        e' una struttura datiche associa una chiave ad un solo valore
        l'importante che sia serializabile
    */

    //Accesso e modifica

    $linguaggi_programmazione[0] = "PHP 8";

    //Aggiungiere un elemento che si aggiungie in coda

    $linguaggi_programmazione[] = "Assembly";

    stampa_debug($linguaggi_programmazione);

    //eliminare
    //Viene eliminara la oppi chiave valore non solo il valore

    $linguaggi_programmazione = elimina($linguaggi_programmazione, 1);
    stampa_debug($linguaggi_programmazione);

    //Dopo unset riforattare l'array
    //Reindirizzare le posizioni

    $linguaggi_programmazione = array_values($linguaggi_programmazione);
 
    stampa_debug($linguaggi_programmazione);

    //in php i parametri sono passati per valore


    //cicli
    //prende foreach(nome array as (alias) $elemento)
    
    foreach($linguaggi_programmazione as $linguaggio)
    {
        echo ("<li> $linguaggio </li>");
    }
    echo("<ul>");
?>

