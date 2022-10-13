import { toggleClass } from "./classUtils.js";

//necessary for the import to work
window.toggleExtraInfoSelector = toggleExtraInfoSelector;
window.toggleInfoPanel = toggleInfoPanel;
window.toggleClass = toggleClass;

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

// let carousel = document.getElementById("carousel");
// let items = document.getElementsByClassName("item");
// let degrees = 360 / items.length;
// let rotation = 0;

// for (i = 0; i < items.length; i++) {
//     items[i].css({
//         "transform": "rotateY(0deg) translateZ(250px) rotateX(0deg)"
//     });

// }

// function rotate(direction) {

//     if (direction === "forward") {
//         rotation = rotation - degrees;
//     }

//     if (direction === "backwards") {
//         rotation = rotation + degrees;
//     }

//     carousel.css({
//         "-webkit-transform": "rotateY(" + rotation + "deg)",
//         "-moz-transform": "rotateY(" + rotation + "deg)",
//         "-o-transform": "rotateY(" + rotation + "deg)",
//         "transform": "rotateY(" + rotation + "deg)"
//     });

//     items.css({
//         "-webkit-transform": "rotateY(" + (-rotation) + "deg)",
//         "-moz-transform": "rotateY(" + (-rotation) + "deg)",
//         "-o-transform": "rotateY(" + (-rotation) + "deg)",
//         "transform": "rotateY(" + (-rotation) + "deg)"
//     });
// }

//information panel

