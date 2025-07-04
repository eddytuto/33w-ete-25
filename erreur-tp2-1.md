# Erreurs du TP2 étape-1

## github et organisation

- Un minimum de 5 commits est demandé pour chacune des étapes
- Les traces de débogage ne devrait plus apparaître depuis longtemps
- Il ne devrait pas avoir de dossier .git sur le serveur
- Il ne devrait pas avoir de dossier Sass sur le serveur
- Il faut utiliser sass ???
- Les branches tp1 et tp2 ne sont pas présentes
- Ton CSS n'a pas évolué depuis le TP1 ?
- Le readme.md est incomplet
- Tu devrait garder un seul thème dans le dossier thème de WHC, j'ai détruit les thème inutiles

## Configuration général

- Le contenu de l'onglet est généré par la balise «title» et le contenu de celle-ci est généré par la fonction wp_head().
- Il faudrait faire disparaître le contenu « prototype de la page d'accueil »
- Le titre ton site est encore « My blog » !!!
- Le slogan de ton site est encore : « My WordPress Blog » !!!
- Le permalien était réglé sur Date j'ai changé cette configuration pour « titre de la publication »
- Tu n'as pas installé ACF sur le serveur distant. - Aucun champ personnalisé n'a été déployé !

## Organisation du code

- Tu n'utilises par le template_part « carte » dans le modèle front-page.php !
- Les template-part devraient être plus utilisés
- Un seul gabarit carte devrait être suffisant pour afficher chacune des cartes des modèles: front-page.php, category.php et search.php
- La carte aurait dû être considéré comme un composant et non comme un layout
- Il manque quelques template-part
- front-page.php et footer.php devrait être simpifié pour minimiser les balises html en distribuant ces balises dans les template-part

## Adaptabilité

- Le menu mobile par défaut devrait-être fermé quand on passe à une fenêtre mobile
- Le menu ne devrait pas garder sa forme mobile en version desktop
- Le menu mobile ne s'affiche pas

## Affichage et intégration générale

- La carte pourrait être un peu mieux formaté
- Il manque l'icône github avec le lien
- L'affichage de la note d'évaluation de 1 à 5 pourrait être amélioré
- L'entête pourrait être un peu mieux intégré
- L’icône github du footer et de la zone hero devrait pointer vers le dépôt et la branche de votre tp2 et non mon gitub eddytuto
- Les icône sociaux devraient se retrouver dans la section hero et dans la section footer
- Le choix sélectionné (actif) du menu devrait changer d'état

## Général

- La section hero est incomplète
- Il manque le logo de l'entête
- Il manque la galerie
- Le dossier themes devrait contenir qu'un seul thème
