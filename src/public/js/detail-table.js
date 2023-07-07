'use strict';

const tableRowModalTrigger = document.getElementById('tableRowModalTrigger');
const tableRowModal        = document.getElementById('tableRowModal');

tableRowModalTrigger.addEventListener('click', e => {
  e.stopPropagation();
  tableRowModal.classList.toggle('show');
});

// モーダル以外の領域をクリック時にモーダルを閉じる
document.addEventListener('click', e => {
  const isClickInside = tableRowModal.contains(e.target);

  if (!isClickInside) {
    tableRowModal.classList.remove('show');
  }
});
