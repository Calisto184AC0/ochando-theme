let menuIcon = document.getElementsByClassName('och-header-menu-icon')[0]
let menu = document.getElementsByClassName('och-nav')[0]
menuIcon.onclick = () => {
    if (menu.style.transform === "" || menu.style.transform === 'translateX(100%)') 
        menu.style.transform = 'translateX(0%)'
    else
        menu.style.transform = 'translateX(100%)'
}