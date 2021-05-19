class Dessin {
    constructor(canvas) {
        this.draw = false; // savoir si je dessine
        this.prevX = 0; // coordonnées X de la zone précédente
        this.prevY = 0; // coordonnées Y de la zone précédente

        this.canvas = document.querySelector(canvas);
        console.log(this.canvas);

        this.ctx = this.canvas.getContext("2d");
        this.ctx.strokeStyle = "black"; // couleur par défaut
        this.ctx.lineWidth = 2; // largeur du trait

        // Création d'un événement au clic :
        this.canvas.addEventListener("mousedown", (e) => {
            // Je dessine :
            this.draw = true;

            // Je stoke les coordonnées de départ -> premier clic :
            this.prevX = (e.clientX - this.canvas.offsetLeft) * 400 / this.canvas.clientWidth
            // stoker l'endroit exact où j'ai cliqué sur X (par rapport à la gestion du responsive)

            this.prevY = (e.clientY - this.canvas.offsetTop) * 400 / this.canvas.clientHeight // idem pour axe Y
        })
        
        // Je déplace la souris :
        this.canvas.addEventListener("mousemove", (e) => {

            // Si je dessine (= mousedown), je récupère l'emplacement au moment où je déplace la souris  :
            if(this.draw) {
                // calcul des coordonnées :
                let currX = (e.clientX - this.canvas.offsetLeft) * 400 / this.canvas.clientWidth

                let currY = (e.clientY - this.canvas.offsetTop) * 400 / this.canvas.clientHeight

                // dessiner avec ces coordonnées :
                this.dessine(this.prevX, this.prevY, currX, currY)

                // stocker les nouvelles coordonnées :
                this.prevX = currX;
                this.prevY = currY;
            }
        })

        // Arrêter le dessin au relâchement de la souris :
        this.canvas.addEventListener("mouseup", () => {
            this.draw = false;
        })

        // Arrêter le dessin si je sors du cadre :
        this.canvas.addEventListener("mouseout", () => {
            this.draw = false;
        })
    }

    // méthode pour relier les points :
    dessine(depX, depY, destX, destY) { // récupère les points de départ x et y, plus les points de destination x et y
        this.ctx.beginPath() // permet de dire que l'on dessine

        this.ctx.moveTo(depX, depY) // je place mon crayon à un point précis

        this.ctx.lineTo(destX, destY) // je dessine une ligne depuis le point de départ, jusqu'au point de destination

        this.ctx.closePath() // pour fermer le chemin

        this.ctx.stroke() // tracer le trait
    }

    // méthode pour modifier la couleur :
    setColor(color) {
        this.ctx.strokeStyle = color;
    }

    // méthode pour modifier l'épaisseur du trait (bouton plus) :
    biggerStroke() {
        this.ctx.lineWidth++;
    }

    // méthode pour modifier l'épaisseur du trait (bouton moins) :
    smallerStroke() {
        // condition ternaire (épaisseur minimum 1) :
        this.ctx.lineWidth = (this.ctx.lineWidth > 1) ? this.ctx.lineWidth - 1 : 1;
    }

    // méthode pour effacer :
    erase() {
        // condition ternaire (épaisseur minimum 1) :
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }

}