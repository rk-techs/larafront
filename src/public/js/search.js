'use strict';

const toggleSearchHeader = document.getElementById('toggleSearchHeader');
const toggleExpandSymbol = document.getElementById('toggleExpandSymbol');
const collapseBody       = document.getElementById('collapseBody');

toggleExpandSymbol.addEventListener('click', () => {
  collapseBody.classList.toggle('collapse');

  if (toggleExpandSymbol.textContent == 'unfold_less') {
    toggleExpandSymbol.textContent = 'unfold_more';
  } else {
    toggleExpandSymbol.textContent = 'unfold_less';
  }
});
