'use strict';

const headerToggleButton = document.getElementById('headerToggleButton');
const headerToggleSymbol = document.getElementById('headerToggleSymbol');
const collapseNav = document.getElementById('collapseNav');

headerToggleButton.addEventListener('click', function() {
    collapseNav.classList.toggle('visible');


    if (headerToggleSymbol.textContent == 'menu') {
        headerToggleSymbol.textContent = 'close';
    } else {
        headerToggleSymbol.textContent = 'menu';
    }
});



