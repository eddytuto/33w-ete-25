# Erreurs de l'étape-3

- A cette étape on ne devrait plus voir de trace --------- front-page.php --------------- ou ------ single.php -------
- Le logo du site sort de la zone entête
- L'image en background de la zone hero se répète: il faut utiliser background-repeat: no-repeat
- La galerie d'images est absente
- Les cartes devraient s'afficher sur plusieurs colonnes
- Un minimum de 5 commits pour l'étape 3
- Le contenu de la balise title devrait être généré par - - wp_head() et devrait contenir le titre de la page courante
- Le titre de ton site est encore My blog ???
- 5 commits le même jour ?
- Le logo de l'entête ne permet pas de revenir à la page d'accueil ?
- Il n'y a pas de logo pour revenir à la page d'accueil
- Le menu mobile ne s'affiche pas ?
- Le menu mobile par défaut devrait-être fermé quand on passe à une fenêtre étroite
- Les icônes sociaux ne s'affichent pas ?
- Le nom de l'auteur doit apparaître dans la section hero
- Plusieurs composants non formatés. Exemple: formulaire de recherche
- Plusieurs éléments de pagination non formatés

- En mode admin le bouton burger est caché par la barre admin
- la règle de style \* {border : 1px solid #aaa; } devrait être retirée depuis longtemps !
- Tu n'avais pas le bon functions.php dans ton thème. Je l'ai mis à jour à partir du functions.php du github.com/eddytuto
- functions.php contenait une erreur au lieu de wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css'); tu avais wp_enqueue_style('main-style', get_template_directory_uri() . '/sass/style.css');
  Cette erreur empêchait ton style.css de fonctionner !
- Le texte des cartes est un peu trop long

- L'entête n'est pas adaptative
- Il faut utiliser une boucle pour afficher les destinations populaires. Les destinations populaires doivent être extraite à partir de la requête de functions.php « pre_get_posts »
