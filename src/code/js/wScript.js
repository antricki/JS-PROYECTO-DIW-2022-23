function toggleExtraInfoSelector(obj) {
    let selectors = document.getElementsByClassName("children-selector");
    selectors.forEach(element => addClass(element, "display-none"));
    removeClass(document.getElementById(obj.value), "display-none")
}

function toggleInfoPanel(obj) {

}

