var a = [1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6]
    .map( p => [p,Math.random()] )
    .sort( (a, b) => a[1]-b[1] )
    .map( p => p[0] )

var image = document.getElementsByTagName('img');

for(let i=0; i<image.length; i++) {
    image[i].src2 = "../assets/images/jr" + a[i] + "";
}

var step = 1;
var p1, p2;

document.addEventListener('click', function(e) {
    switch(step) {
        case 1:
            if (e.target.tagName=='IMG') {
                e.target.src = e.target.src2;
                p1 = e.target;
                step = 2;
            }
        case 2:
            if (e.target.tagName=='IMG') {
                e.target.src = e.target.src2;
                p2 = e.target;
                step = 3;
            }
            timer = setTimeout(check, 1700);
            break;
        case 3:
            clearTimeout(timer);
            check();
            break;
    }
});

function check() {
    if (p1.src2==p2.src2) {
        p1.replaceWith( document.createElement('span'))
        p2.replaceWith( document.createElement('span'))
        score += 50;
    } else {
        p2.src = p1.src = "../assets/images/jr.jpg";
        score = Math.max(0, score-30);
    }
    step = 1;
    eltScore.textContent = score;

    if (document.getElementsByClassName('img').length==0) {
        eltScore.textContent += ' Gagné !';
    }
}