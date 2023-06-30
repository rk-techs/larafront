'use strict';

const toggleSearchHeader = document.getElementById('toggleSearchHeader');
const toggleExpandSymbol = document.getElementById('toggleExpandSymbol');
const collapseBody       = document.getElementById('collapseBody');

toggleSearchHeader.addEventListener('click', () => {
  collapseBody.classList.toggle('collapse');

  if (toggleExpandSymbol.textContent == 'expand_less') {
    toggleExpandSymbol.textContent = 'expand_more';
  } else {
    toggleExpandSymbol.textContent = 'expand_less';
  }
});
