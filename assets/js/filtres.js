//
console.log("Script JS lancé !!!");

/**
 * Variables récupérées / renvoyées
 *
 *
 */

document.addEventListener("DOMContentLoaded", function () {
  const body = document.querySelector("body");
  const allArrowDown = document.querySelectorAll(".fa-caret-down");
  const allSelect = document.querySelectorAll("select");
  const allRealization = document.querySelectorAll(".realization");
  const message = document.querySelector("#message");
  let origin = "";
  let type = "";
  let selectId = "";
  let qtRealization = 0;

  // Initialisation des variables des filtres au premier affichage du site
  if (document.getElementById("filter_origin__value")) {
    document.getElementById("filter_origin__value").value = "";
  }
  if (document.getElementById("filter_type__value")) {
    document.getElementById("filter_type__value").value = "";
  }

  // Réinitialisation des flèches des select si on click en dehors
  body.addEventListener("click", (e) => {
    console.log(e.target.className);
    // e.target.tagName : Controle du tag de l'élément cliqué
    // e.target.className : Controle de la class de l'élément cliqué
    if (e.target.tagName != "select" && e.target.tagName != "SELECT") {
      initArrow();
    }
    if (e.target.tagName == "option" || e.target.tagName == "OPTION") {
      // Récupération de la valeur de l'élément sélectionné dans le select
      let textContent = e.target.textContent;
      let value = e.target.value;
      console.log("Valeur : " + value);
      console.log("Content : " + Content);
      arrow();

      // Récupération des valeurs sélectionnées dans le select
      if (e.target.className.search("filter_origin__value") >= 0) {
        origin = value;
      }

      if (e.target.className.search("filter_type__value") >= 0) {
        type = value;
      }
    }
    realization();

    // Affiche le message s'il n'y a aucune réalisation à afficher
    // si non, le message est caché
    if (qtRealization > 0) {
      message.classList.add("hidden");
    } else {
      message.classList.remove("hidden");
    }
  });

  // Fonction pour rechercher un mot dans une variable
  // retourne vrai si le mot est trouvé, si non retourne false
  function findWord(word, str) {
    return RegExp("\\b" + word + "\\b").test(str);
  }

  // Réinitialisation de l'affichage des flèches sur les select
  const initArrow = () => {
    console.log("Initialisation des fleches");
    allArrowDown.forEach((arrowDown) => {
      arrowDown.classList.add("select__close");
      arrowDown.classList.remove("select__open");
    });
  };

  // Passer de la flèche qui descend à la flèqhe qui monte
  // et inversement
  // et force la flèche qui descend sur les 2 autres selects
  const arrow = (arg) => {
    console.log("Gestion des flèches");
    allArrowDown.forEach((arrowDown) => {
      console.log(arrowDown.className);
      console.log(arg);
      if (findWord(arg, arrowDown.className)) {
        if (
          findWord("select__close", arrowDown.className) ||
          findWord("select__open", arrowDown.className)
        ) {
          // initArrow();
          if (findWord("select__close", arrowDown.className)) {
            arrowDown.classList.remove("select__close");
            arrowDown.classList.add("select__open");
          } else {
            arrowDown.classList.add("select__close");
            arrowDown.classList.remove("select__open");
          }
        }
      }
    });
  };

  // Détection du click sur un select
  // et modification de la flèche correpondante
  allSelect.forEach((select) => {
    select.addEventListener("click", (e) => {
      e.preventDefault();

      // On contrôle si on a clické dans un autre select
      if (select.id != selectId) {
        initArrow();
      }
      selectId = select.id;
      arrow(selectId);
    });
  });

  // On affiche ou on cache la réalisation
  // en fonction des filtres
  const realization = () => {
    qtRealization = 0;
    allRealization.forEach((rea) => {
      qtRealization = qtRealization + 1;
      // console.log(rea.className);
      // console.log(rea.className.search(origin));
      if (rea.className.search(origin) > 0 || origin == "") {
        if (rea.className.search(type) > 0 || type == "") {
          rea.classList.remove("hidden");
        } else {
          rea.classList.add("hidden");
          qtRealization = qtRealization - 1;
        }
      } else {
        rea.classList.add("hidden");
        qtRealization = qtRealization - 1;
      }
    });
  };
});
