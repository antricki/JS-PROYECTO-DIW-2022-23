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
