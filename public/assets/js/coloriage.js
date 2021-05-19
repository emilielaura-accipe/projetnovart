// création de la palette :
document.querySelectorAll("#palette div").forEach(element => {

    // je mets les couleurs  
    element.style.backgroundColor = element.dataset.color;

    // écoute d'évenement au clic : récupérer la couleur de la div cliquée
    element.addEventListener("click", () => {
      canvas.setColor(element.dataset.color);
    })
  })

// chargement du canvas :
let canvas = new Dessin("#feuille");

// gestion du clic sur le bouton plus :
document.querySelector("#plus").addEventListener("click", () => {
  canvas.biggerStroke();
})

// gestion du clic sur le bouton moins :
document.querySelector("#moins").addEventListener("click", () => {
  canvas.smallerStroke();
})

// gestion du clic sur le bouton effacer :
document.querySelector("#effacer").addEventListener("click", () => {
  canvas.erase();
})




