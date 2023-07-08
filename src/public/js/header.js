'use strict';

const headerMobileMenuTrigger = document.getElementById('headerMobileMenuTrigger');
const headerMobileMenuSymbol  = document.getElementById('headerMobileMenuSymbol');
const headerCollapseNav       = document.getElementById('headerCollapseNav');

headerMobileMenuTrigger.addEventListener('click', function () {
  headerCollapseNav.classList.toggle('visible');

  if (headerMobileMenuSymbol.textContent == 'menu') {
    headerMobileMenuSymbol.textContent = 'close';
  } else {
    headerMobileMenuSymbol.textContent = 'menu';
  }
});



