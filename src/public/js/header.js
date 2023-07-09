'use strict';

/*
---------------------------------------
| collapse header navigation
---------------------------------------
*/
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

/*
---------------------------------------
| user info modal
---------------------------------------
*/
const htmlBody  = document.body;
const pageMask  = document.getElementById('pageMask');

const userInfoModalTrigger = document.getElementById('userInfoModalTrigger');
const userInfoModal        = document.getElementById('userInfoModal');

userInfoModalTrigger.addEventListener('click', () => {
  userInfoModal.classList.add('show');
  pageMask.classList.add('show');
  htmlBody.classList.add('modal-open');
});

pageMask.addEventListener('click', () => {
  userInfoModal.classList.remove('show');
  pageMask.classList.remove('show');
  htmlBody.classList.remove('modal-open');
});
