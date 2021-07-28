// Constantes
const DESKTOP_SIZE = 1023

// Variables
let isDesktop = undefined // sirve para no repetir las funciones todo el rato
let contPasos = 0 // para contar en que paso está de cada método (en la versión mobile)

let desktopFunctions = new Array()  // Arrays donde estarán alojadas las funciones para ejecutarlas cuando sea de desktop -> mobile y mobile -> desktop
let mobileFunctions = new Array()   // De este modo cuando se quiera ejecutar una función cuando sea pasar de una versión a la otra se pueda realizar simplemento usando la función push de los arrays

// Elementos del DOM
let carousel = document.getElementsByClassName('och-carousel')[0]
let carouselController = document.getElementsByClassName('och-list-controller-container')[0]
let imgSVG = document.getElementById('och-blob-1')

// Funciones
let InitProgram = () => { window.innerWidth > DESKTOP_SIZE ? ExecDesktopFunctions() : ExecMobileFunctions() }

let ExecDesktopFunctions = () => {
    if (!isDesktop || isDesktop === undefined) {
        isDesktop = true

        desktopFunctions.forEach(f => f())
    }
}

let ExecMobileFunctions = () => {
    if (isDesktop || isDesktop === undefined) {
        isDesktop = false

        mobileFunctions.forEach(f => f())
    }
}

let ConfigMenu = () => { // Abrir y cerrar el menu pulsando un icono
    let menuIcon = document.getElementsByClassName('och-header-menu-icon')[0]
    let menu = document.getElementsByClassName('och-nav')[0]
    document.onclick = (e) => {
        if (e.target.className === menuIcon.className) {
            if (menu.style.transform === "" || menu.style.transform === 'translateX(100%)') {
                menu.style.transform = 'translateX(0%)'
                if (window.innerWidth < DESKTOP_SIZE) { document.body.style.overflow = 'hidden' }
            }
            else {
                menu.style.transform = 'translateX(100%)'
                document.body.style.overflow = ''
            }   
        }
        else if (e.clientX < document.getElementsByClassName('och-header-menu')[0].getBoundingClientRect().left - 130 && menu.style.transform === 'translateX(0%)') {
            menu.style.transform = 'translateX(100%)'
            document.body.style.overflow = ''
        }
    }
}
ConfigMenu()

let ConfigPasosMobile = () => {

    // Cuando se redimensiona de Desktop a Mobile
    if (carousel.parentElement === null) {
        // eliminar el elemento que solo se muestra en desktop
        let pasosList = document.getElementsByClassName('och-list')
        pasosList[pasosList.length - 1].remove()

        let pasosListAux = [...pasosList]
        

        // volver a añadir el carousel y sus controles a su padre correspondiente
        pasosListAux[0].parentElement.appendChild(carousel)
        pasosListAux[0].parentElement.appendChild(carouselController)

        for (let i = 0; i < pasosListAux.length; i++)
            carousel.appendChild(pasosListAux[i])
    }

    // Desplazar los pasos del método con las flechitas
    let listController = document.getElementsByClassName('och-list-controller')
    listController[0].onclick = () => { // Izquierda
        if (contPasos < 0) {
            contPasos++
            if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)
                carousel.style.transform = 'translate(' + contPasos * 20 + '%)'
            else 
                carousel.style.transform = 'translate(' + contPasos * window.outerWidth + 'px)'
        }
    }

    listController[1].onclick = () => { // Derecha
        if (contPasos > -4) {
            contPasos--
            if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)
                carousel.style.transform = 'translate(' + contPasos * 20 + '%)'
            else
                carousel.style.transform = 'translate(' + contPasos * window.outerWidth + 'px)'
        }
    }
}
if (carousel !== undefined) mobileFunctions.push(ConfigPasosMobile)

let ConfigPasosDesktop = () => {
    let list = [...document.getElementsByClassName('och-list')]

    for (let i = 0; i < list.length; i++) 
        carousel.parentElement.appendChild(list[i])

    // crear el elemento que falta
    let newElem = document.createElement('div')
    newElem.className = 'och-list'

    let newText = document.createElement('h3')
    newText.textContent = 'MODELO DE BIENESTAR'
    newText.className = 'och-list-title'
    newText.style.position = 'relative'
    newText.style.zIndex = '0'

    newElem.appendChild(newText)
    newText.appendChild(imgSVG)
    carousel.parentElement.appendChild(newElem)

    carousel.remove()
    carouselController.remove()
}
if (carousel !== undefined) desktopFunctions.push(ConfigPasosDesktop)

InitProgram()
window.onresize = () => { InitProgram() }