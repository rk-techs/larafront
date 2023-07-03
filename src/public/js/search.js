'use strict';

const toggleExpandSymbol   = document.getElementById('toggleExpandSymbol');
const collapseSearchBody   = document.getElementById('collapseSearchBody');
const collapseSearchFooter = document.getElementById('collapseSearchFooter');

toggleExpandSymbol.addEventListener('click', () => {
  collapseSearchBody.classList.toggle('collapse');
  collapseSearchFooter.classList.toggle('collapse');

  if (toggleExpandSymbol.textContent == 'unfold_less') {
    toggleExpandSymbol.textContent = 'unfold_more';
  } else {
    toggleExpandSymbol.textContent = 'unfold_less';
  }
});
