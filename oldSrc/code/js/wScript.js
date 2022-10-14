function toggleExtraInfoSelector(obj = null) {
    let selectors = document.getElementsByClassName("children-selector");
    for (let i = 0; i < selectors.length; i++) {
        addClass(selectors[i], "display-none");
    }
    removeClass(document.getElementById(obj.value), "display-none");
    toggleInfoPanel();
}

function toggleInfoPanel(obj = null) {
    let selectors = document.getElementsByClassName("info-panel");
    for (let i = 0; i < selectors.length; i++) {
        addClass(selectors[i], "display-none");
    }
    removeClass(document.getElementById(obj === null ? "none" : obj.value), "display-none");
}

function hasClass(elem, className) {
    return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

function addClass(elem, className) {
    if (!hasClass(elem, className)) {
        elem.className += ' ' + className;
    }
}

function removeClass(elem, className) {
    var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}

let carousel = document.getElementById("carousel");
let items = document.getElementsByClassName("item");
let degrees = 360 / items.length;
let rotation = 0;

for (i = 0; i < items.length; i++) {
    items[i].css({
        "transform": "rotateY(0deg) translateZ(250px) rotateX(0deg)"
    });

}

function rotate(direction) {

    if (direction === "forward") {
        rotation = rotation - degrees;
    }

    if (direction === "backwards") {
        rotation = rotation + degrees;
    }

    carousel.css({
        "-webkit-transform": "rotateY(" + rotation + "deg)",
        "-moz-transform": "rotateY(" + rotation + "deg)",
        "-o-transform": "rotateY(" + rotation + "deg)",
        "transform": "rotateY(" + rotation + "deg)"
    });

    items.css({
        "-webkit-transform": "rotateY(" + (-rotation) + "deg)",
        "-moz-transform": "rotateY(" + (-rotation) + "deg)",
        "-o-transform": "rotateY(" + (-rotation) + "deg)",
        "transform": "rotateY(" + (-rotation) + "deg)"
    });
}