const toggle = document.getElementById('darkModeToggle');

toggle.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');

  // Optionnel : changer le texte du bouton
  if (document.body.classList.contains('dark-mode')) {
    toggle.textContent = "☀️";
  } else {
    toggle.textContent = "🌙";
  }
});

const menuButton = document.getElementById('menuButton');
const navList = document.querySelector('.nav-list');

menuButton.addEventListener('click', () => {
  navList.classList.toggle('show'); // Ajoute ou supprime la classe "show"
});