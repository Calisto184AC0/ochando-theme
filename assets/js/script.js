let menuIcon = document.getElementsByClassName('och-header-menu-icon')[0]
let menu = document.getElementsByClassName('och-nav')[0]
menuIcon.onclick = () => {
    if (menu.style.transform === "" || menu.style.transform === 'translateX(100%)') {
        menu.style.transform = 'translateX(0%)'
        if (window.innerWidth < 1023) { document.body.style.overflow = 'hidden' }
    }
    else {
        menu.style.transform = 'translateX(100%)'
        document.body.style.overflow = ''
    }
        
}

let carousel = document.getElementsByClassName('och-carousel')[0]
var cont = 0
if (carousel != null) {
    
    let listController = document.getElementsByClassName('och-list-controller')
    listController[0].onclick = () => {
        if (cont < 0) {
            cont++
            carousel.style.transform = 'translate(' + cont * 20 + '%)'
        }
    }

    listController[1].onclick = () => {
        if (cont > -4) {
            cont--
            carousel.style.transform = 'translate(' + cont * 20 + '%)'
        }
    }
}