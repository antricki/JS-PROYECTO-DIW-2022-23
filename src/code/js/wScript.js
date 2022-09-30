function toggleExtraInfoSelector(obj = null) {
    let selectors = document.getElementsByClassName("children-selector");
    for (let i = 0; i < selectors.length; i++) {
        addClass(selectors[i], "display-none");
    }
    removeClass(document.getElementById(obj.value), "display-none");
    toggleInfoPanel();
}

function toggleInfoPanel(obj = null) {
    let selectors = document.getElementsByClassName("info-pannel");
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
