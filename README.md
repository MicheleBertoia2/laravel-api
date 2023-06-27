
# Boolfolio
  

continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo.
L’esercizio di oggi è suddiviso in milestone ed è importante che ne seguiate l’ordine.
**Milestone 1**
nome repo 1: laravel-api
Aggiungiamo al nostro progetto Laravel una nuovo **Api/ProjectController**. Questo controller risponderà a delle richieste via API e si occuperà di restituire la lista dei progetti presenti nel database in formato json.
**Milestone 2**
Testiamo la chiamata API tramite Postman o Tunder Client e assicuriamoci di ricevere i dati correttamente.
**Milestone 3**
nome repo 2: vite-boolfolio
Iniziamo ad occuparci della parte front-office della nostra applicazione: creiamo un nuovo progetto Vue 3 con Vite e installiamo axios.
Colleghiamo questo progetto ad una repo separata.
**Milestone 4**
Nel componente principale della nostra Vue App facciamo una chiamata API all’endpoint costruito nel progetto Laravel (milestone 1) e recuperiamo tutti i progetti dal nostro back-end.
Stampiamo in console i risultati e verifichiamo di ricevere i dati correttamente.
**Milestone 5**
Creiamo un nuovo componente ProjectCard, che corrisponde ad una card per visualizzare un progetto. Utilizziamo questo componente per visualizzare tutti i progetti ricevuti tramite API.
**Bonus:**
1. Gestire la paginazione dei risultati
2. ‘Innestare’ vue all’interno del progetto Laravel e da lì fare la chiamata API

## day 2

Aggiungete il router a Vue e inserite  un menu di navigazione fra le pagine.
Solo una delle pagine farà la chiamata axios per stampare il portfolio.
Aggiungete un elenco di  bottoni per i tipi  e le tecnologie, Questi bottoni verranno stampati a seguito di chiamate axios dedicate.
BONUS
al click di un bottone per il tipo o  tecnologie, nell’elenco dei progetti appariranno solo quelli di quel tipo o di quella tecnologia
