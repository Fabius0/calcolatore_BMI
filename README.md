# cprompt Gemini

Il layout deve essere pulito e moderno: lo sfondo dell'intera pagina sarà di un grigio molto chiaro (#F1F3F5), con il testo grigio scuro (#1F2328).
Il contenitore principale dovrà avere un padding di 60px e deve essere allineato al centro, così come i titoli principali che avranno un margine inferiore di 30px per staccarli dal resto.

Il main di ogni pagine è una "card" contenitore.
Deve avere sfondo bianco, una larghezza fissa di 360px (ma adattabile) e che sia sempre centrata orizzontalmente nello schermo. Il padding interno dev'essere di 24px su tutti i lati. Imposta i bordi arrotondati di 12px e un'ombra grigia. Imposta di base anche un bordo trasparente di 3px. Di default, il testo dentro la card è allineato a sinistra.

Nella pagina iniziale, dentro la card, ci saranno i campi del form disposti in colonna, distanziando i vari gruppi con del b(sui 10px) margine inferiore. Le label devono essere in grassetto e avere un piccolo margine di 6px sotto. I campi di input per nome, peso e altezza dovranno avere 10px di padding interno, un bordino grigio chiaro di 1px e angoli arrotondati (circa 8px). Alla fine, inserisci un bottone che occupi tutta la larghezza (100%): sfondo scuro (#1F2328), testo bianco e in grassetto, padding generoso di 12px, nessun bordo, angoli di 8px e il cursore giusto (puntatore)

Quando l'utente arriva sulla pagina del risultato in PHP, riutilizza la stessa card, ma stavolta aggiungi una classe per centrare tutto il testo. Il nome e i dati inseriti avranno dei piccoli margini sotto per separarli dal resto. Il numero del BMI fallo grande (48px) e in grassetto. Subito sotto apparirà la "categoria" che dev'essere in maiuscolo, in grassetto a 20px. In basso, aggiungi un link grigio scuro distanziato dal resto per poter tornare a calcolare di nuovo.
Crea 4 stili, ognuno dei quali deve ricolorare lo sfondo della card, il bordo da 3px e il testo della "categoria":
-se sottopeso: Sfondo azzurro pastello (#E3EEF9), bordo e testo della categoria in blu (#2F6FB3).
-se normopeso: Sfondo verde pastello (#E3F4E6), bordo e testo in verde (#256D34).
-se sovrappeso: Sfondo color arancio molto chiaro/pesca (#FCEBD7), bordo e testo arancione (#9A4F06).
-se obesità: Sfondo rosso molto chiaro (#FBE2E2), bordo e testo in rosso (#B32D2D). 
