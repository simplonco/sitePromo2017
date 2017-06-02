# Reflexologie

Conventions:  
Nom de fichier, classe css en : lowerCamelCase  
Pas d'espace, ni accents, ni ponctuaction dans le nom de fichier, classe...   

Arborescences:  
assets/js  
assets/css  
assets/scss  
assets/img  

fichier js principal : app.js dans assets/js/  
fichier css et scss principal (généré par la commande sass) : assets/scss/app.scss assets/css/app.css  
un fichier scss par membre : assets/scss/PseudoSansEspace.scss  
et importer chacun dans app.scss  

Fichier package.json, que vous pouvez générer avec la commande npm init  
http://maxlab.fr/javascript/comprendre-et-maitriser-npm-introduction/

Exemple pour rajouter une dépendance ( jquery )  
https://github.com/simplonco/reflexologie/blob/master/package.jso

Puis utilisation de npm install par tous les membres pour télécharger les librairie JS neccessaire au projet, jquery,...  

Utilisation de SASS pour les CSS, avec un Scss par personne qui est compilé en un app.css minifié.  

Des images adaptées au mobile (600ko max sauf exception justifiée).  

1. [ ] Valide W3C  
2. [ ] Diaporama entre 4 et 7 slides maximum  
3. [ ] Application packagée pour Android
