let menuIcon = document.getElementsByClassName('och-header-menu-icon')[0]
let menu = document.getElementsByClassName('och-nav')[0]
menuIcon.onclick = () => {
    if (menu.style.transform === "" || menu.style.transform === 'translateX(100%)') {
        menu.style.transform = 'translateX(0%)'
    }
    else {
        menu.style.transform = 'translateX(100%)'
    }
        
}

let carousel = document.getElementsByClassName('och-carousel')[0]
var cont = 0
if (carousel != null) {
    
    let listController = document.getElementsByClassName('och-list-controller')
    listController[0].onclick = () => {
        cont++

        carousel.style.transform = 'translate(' + cont * 100 + '%)'
    }

    listController[1].onclick = () => {
        cont--

        carousel.style.transform = 'translate(' + cont * 100 + '%)'
    }
}