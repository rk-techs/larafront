'use strict';

const htmlBody = document.body;
const profileButton = document.getElementById('profileButton');
const profileModal = document.getElementById('profileModal');
const pageMask    = document.getElementById('pageMask');

profileButton.addEventListener('click', () => {
  profileModal.classList.add('show');
  pageMask.classList.add('show');
  htmlBody.classList.add('modal-open');
});

pageMask.addEventListener('click', () => {
  profileModal.classList.remove('show');
  pageMask.classList.remove('show');
  htmlBody.classList.remove('modal-open');
});

