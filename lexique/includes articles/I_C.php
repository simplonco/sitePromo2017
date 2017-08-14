<article class="lexique">
  <img src="../assets/img/ic.png" alt="logo ci" title="IC Intégration Continue" />
  <h3>I.C: Intégration continue</h3>
  <h3>Definition</h3>
  <p>
    L'intégration continue est un ensemble de pratiques utilisées en génie logiciel consistant à vérifier à chaque modification de code source que le résultat des modifications ne produit pas de régression dans l'application développée. Le concepta pour la première fois été mentionné par Grady Booch1 et se réfère généralement à la pratique de l'extreme programming. Le principal but de cette pratique est de détecter les problèmes d'intégration au plus tôt lors du développement.De plus, elle permet d'automatiser l'exécution des suites de tests et de voir l'évolution du développement du logiciel.
  </p>
  <p>
    L'intégration continue est de plus en plus utilisée en entreprise afin d'améliorer la qualité du code et du produit final.
  </p>
  <h3>Intérêt</h3>
  <p>
    L'intégration continue repose souvent sur la mise en place d'une brique logicielle permettant l'automatisation de tâches : compilation, tests unitaires et fonctionnels, validation produit, tests de performances… À chaque changement du code,cette brique logicielle va exécuter un ensemble de tâches et produire un ensemble de résultats, que le développeur peut par la suite consulter. Cette intégration permet ainsi de ne pas oublier d'éléments lors de la mise en production etdonc ainsi améliorer la qualité du produit
  </p>
  <p>
    Pour appliquer cette technique, il faut d'abord que :
  </p>
  <ul>
    <li>le code source soit partagé (en utilisant des logiciels de gestion de versions tels que CVS, Subversion, git, Mercurial, etc.)</li>
    <li>les développeurs intègrent (commit) quotidiennement (au moins) leurs modifications.</li>
    <li>des tests d'intégration soient développés pour valider l'application (avec JUnit par exemple).</li>
  </ul>
  <p>
    Un outil d'intégration continue est ensuite nécessaire, tel que TeamCity, CruiseControl ou Jenkins (fork de Hudson) pour le langage Java par exemple. D'autres outils, comme SonarQube ou Jacoco, peuvent être mis en place afin de superviserla qualité du code.
  </p>
  <p>
    Les principaux avantages d'une telle technique de développement sont :
  </p>
  <ul>
    <li>le test immédiat des modifications</li>
    <li>la notification rapide en cas de code incompatible ou manquant</li>
    <li>les problèmes d'intégration sont détectés et réparés de façon continue, évitant les problèmes de dernière minute.</li>
    <li>une version est toujours disponible pour un test, une démonstration ou une distribution.</li>
  </ul>
  <p>
    Sources :
    <a href="https://fr.wikipedia.org/wiki/Int%C3%A9gration_continue" title="wikipedia" target="_blank">Wikipedia.org</a>
  </p>
</article>
