// appele de la class movil
var piece = document.getElementsByClassName('movil');
// Largeur et hauteurs des pieces du puzzle
var pWidth = [134,192,134,163,134,163,134,192,134];
var pHeight = [163,134,163,134,192,134,163,134,163];
// Boucle Pour nous mettre les pieces
//floor() est une méthode statique de l'objet Math, elle doit toujours être utilisée avec la syntaxe  Math.floor()
for(var i=0;i<piece.length;i++){
    piece[i].setAttribute("width", pWidth[i]);
    piece[i].setAttribute("height", pHeight[i]);
    piece[i].setAttribute("x", Math.floor((Math.random() * 10) +1));
    piece[i].setAttribute("y", Math.floor((Math.random() * 409) +1));
    piece[i].setAttribute("onmousedown","selectElement(evt)");
}

var elementSelect = 0;
var currentX = 0;
var currentY = 0;
var currentPosX = 0;
var currentPosY = 0;
//Target est tres utile pour trouver l'origine de l'événement qui est en ligne 13 
// Selection des pieces et leurs methodes pour les bouger 
function selectElement(evt) {
    elementSelect = reorganiser(evt);
    currentX = evt.clientX;
    currentY = evt.clientY;
    currentPosX = parseFloat(elementSelect.getAttribute("x"));
    currentPosY = parseFloat(elementSelect.getAttribute("y"));
    elementSelect.setAttribute("onmousemove","moverElement(evt)");
}

function moverElement(evt){
    let dx = evt.clientX - currentX;
    let dy = evt.clientY - currentY;
    currentPosX = currentPosX + dx;
    currentPosY = currentPosY + dy;
    elementSelect.setAttribute("x",currentPosX);
    elementSelect.setAttribute("y",currentPosY);
    currentX = evt.clientX;
    currentY = evt.clientY;
    elementSelect.setAttribute("onmouseout", "deselectionElement(evt)");
    elementSelect.setAttribute("onmouseup", "deslectionElement(evt)");
    iman();
}
//
function deselectionElement(evt){
    if(elementSelect != 0){
        elementSelect.removeAttribute("onmoussemove");
        elementSelect.removeAttribute("onmouseout");
        elementSelect.removeAttribute("onmouseup");
        elementSelect = 0;
    }
}
// parentNode est l'élément parent du nœud courant. Le parent d'un élément est un nœud Element (ligne 24) avant "elementSelect = evt.target"
// Node.cloneNode() renvoie une copie du nœud sur lequel elle a été appelée.
//Les pieces du puzzle peuvent maintenant s'empiler si l'utilisateur le veut 
function reorganiser(evt){
    var imgp = evt.target.parentNode;
    var clone = imgp.cloneNode(true);
    var id = imgp.getAttribute("id");
    puzzle.removeChild(document.getElementById(id));
    puzzle.appendChild(clone);
    return puzzle.lastChild.firstChild;
}

var origX = [200,304,466,200,333,437,200,304,466];
var origY = [100,100,100,233,204,233,337,366,337];

function iman(){
    for(var i=0;i<piece.length;i++){
        if (Math.abs(currentPosx-origX[i])<15 && Math.abs(currentPosy-origY[i])<15) {
            elementSelect.setAttribute("x",origX[i]);
            elementSelect.setAttribute("y",origY[i]);
        }
    }
}

function test() {
    var imgp = document.getElementsByClassName('imgp');
        for(var i=0;i<piece.length;i++){
            var posx = parseFloat(imgp[i].firstChild.getAttribute("x"));
            var posy = parseFloat(imgp[i].firstChild.getAttribute("y"));
            ide = imgp[i].getAttribute("id");
            if(origX[ide] == posx && origY[ide] == posy){
                alert("Felicitation puzzle Fini !")
            }
        }
}