window.onload = function(){

    const btn = document.querySelector('.btn');
    const menu = document.querySelector('.conteneurMenu');
    const MenuListItem = document.querySelectorAll('.MenuListItem');
    const iconeMenu = document.querySelector('.menuIcon');
    let i = 0;

    const TL = new TimelineMax({paused: true});

    TL
    .to(menu,1,{width:'25%'})
    .staggerTo(MenuListItem, 0.3,{opacity: 1, x: 0}, 0.2, '-=0.75');

    btn.addEventListener('click', () => {
        if(i === 0){
            i++;
            TL.play(); // lance la Timeline
            iconeMenu.src = '/assets/images/croix.svg'; // change la source
        } else {
            i--;
            TL.reverse(); // Timeline se joue en sens inverse
            iconeMenu.src = '/assets/images/menu.svg'; 
        }
    })

    MenuListItem.forEach(item => item.addEventListener('click', () => {
        i--;
        TL.reverse();
        iconeMenu.src = 'assets/images/menu.svg';
    }))

    

} 