<article class="lexique">
  <img src=../assets/img/pooPhp.jpg alt="Article sur la POO Private" title="POO Private" />
  <h3>POO Private</h3>
  <h4>Les différentes accès à une classe:</h4>
  <p>
    Il existe différentes possibilités pour accéder à une classe.
  </p>
  <p>
    Une classe private n’est accessible qu’à partir du fichier où elle est définie. Valable pour seulement certains langages, dans d’autres langages toutes les classes sont "public". Ca dépend des langages. Dans votre langage de programmation quevous utilisez vous avez peut être des classes que vous pouvez définir en private, auquel cas vous pouvez y accéder, les instancier, uniquement à partir du fichier ou elles sont définies.
    <h4>Les propriétés (ou attributs) d’une classe</h4>
    <p>
      Comme pour une classe, il y a différents paramètres.
    </p>
    <p>
      Une propriété private, n'est accessible que depuis la même classe, c’est à dire que de l’extérieur, si vous créez une instance voiture, voiture.couleur, si couleur est définie en private, vous ne pourrez pas accéder à la propriété couleur directement.Il vous faudra passer par une méthode qui le permet. Il faut savoir que les classes qui héritent d’une autre classe, n’ont pas accès aux attributs ou aux propriétés private.
    </p>
    <h4>Les méthodes d’une classe</h4>
    <p>
      Tout ce qui est méthode, permet de manipuler votre objet, par exemple, une instance de voiture, voiture1.getdetail, voiture1.getcolor. Ça vous renverra la couleur de la voiture, les détails de la voiture, vous pouvez également avoir des propriétés.setdétail.
    </p>
    <p>
      Vous avez également des méthodes private, qui ne sont accessible que depuis la classe elle-même. C’est le principe des fonctions que vous déclarez dans les classes, les classes qui héritent n’ont pas accès aux méthodes private, les méthodesprivate servent uniquement pour l’algorithme, le cœur de votre classe.
    </p>
    <h4>Les constantes d’une classe</h4>
    <p>
      Vous avez également des constantes. Suivant le langage de programmation, le mot clé peut-être différent.
    </p>
    <p>
      Private const est une constante accessible uniquement depuis la classe.
    </p>
    <a href="https://www.programmation-facile.com/utiliser-poo-dans-applications-private-public-protected/">Comment utiliser la POO dans vos applications</a>
  </article>
