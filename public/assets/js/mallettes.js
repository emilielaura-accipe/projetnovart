const ItemMenu = document.querySelectorAll('.itemMenu');
const containerMal = document.querySelector('#containerMal');
let toggle = 0;

const TL = new TimelineMax({pause: true});

TL
.staggerTo(ItemMenu,1,{x:0, ease: Back.easeOut.config(1.7), stagger: 0.1})
// chaque anim d'élément va durer 0.8 seconde
// x = position d'arrivée
// ease = façon de faire / Back.easeOut = va dépasser de la page (pour l'effet rebond)
// stagger = temps entre chaque anim d'élément (0.1 seconde)
