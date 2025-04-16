const items = document.querySelectorAll('.history-block'); // 🔁 anciennement .timeline-item

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible'); // ajoute la classe visible
    }
  });
});

items.forEach(item => {
  observer.observe(item);
});
