function toggleExtraInfoSelector(obj) {
    let selectors = document.getElementsByClassName("children-selector");
    for (let i = 0; i < selectors.length; i++) {
        addClass(selectors[i], "display-none")
    }
    // 
    let selectors2 = document.getElementsByClassName("info-pannel");
    for (let i = 0; i < selectors2.length; i++) {
        addClass(selectors2[i], "display-none")
    }
    if (obj.value === "none") return;
    removeClass(document.getElementById(obj.value), "display-none")
}

function toggleInfoPanel(obj) {
    let selectors2 = document.getElementsByClassName("info-pannel");
    for (let i = 0; i < selectors2.length; i++) {
        addClass(selectors2[i], "display-none")
    }
    if (obj.value === "none") return;
    removeClass(document.getElementById(obj.value), "display-none")
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
