<article class="lexique">
  <h3>POO Statique</h3>
  <img src=../assets/img/static.png alt="static" title="POO Statique" />
  <p>
    Le fait de déclarer des propriétés ou des méthodes comme statiques vous permet d'y accéder sans avoir besoin d'instancier la classe. On ne peut accéder à une propriété déclarée comme statique avec l'objet instancié d'une classe (bien que ce soitpossible pour une méthode statique). Pour des raisons de compatibilité avec PHP 4, si aucune déclaration de visibilité n'est spécifiée, alors la propriété ou la méthode sera automatiquement considérée comme public. Comme les méthodes statiquespeuvent être appelées sans qu'une instance d'objet n'ai été créée, la pseudo-variable $this n'est pas disponible dans les méthodes déclarées comme statiques. On ne peut pas accéder à des propriétés statiques à travers l'objet en utilisant l'opérateur->
    . L'appel statique de méthodes non-statiques génère une erreur de niveau E_STRICT. Comme n'importe quelle autre variable PHP statique, les propriétés statiques ne peuvent être initialisées qu'en utilisant un littéral ou une constante ; lesexpressions ne sont pas permises. Ainsi, vous pouvez initialiser une propriété statique avec un entier ou un tableau, mais pas avec une autre variable, ni avec la valeur de retour d'une fonction, ni avec un objet. Depuis PHP 5.3.0, il est possiblede référencer la classe en utilisant une variable. La valeur de la variable ne peut être un mot-clé (e.g. self, parent et static).
  </p>
  <a href="http://php.net/manual/fr/language.oop5.static.php">Lien vers le manuel</a>
</article>
