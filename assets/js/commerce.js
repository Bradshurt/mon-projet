console.log("script commerce.js chargé!");
const commerces = [
  {
    image:"https://www.discoverlosangeles.com/sites/default/files/business/the-grove/c_fit-w_1920-h_1440-crm-la-the-grove-b1308d265056a36_b13090b0-5056-a36f-230a56d099b862af.jpg",
    name: "The Grove",
    description:
      "Un centre commercial en plein air très populaire avec boutiques de luxe, restaurants et cinéma.",
  },
  {
    image: "../assets/img/Rodeo drive.jpg",
    name: "Rodeo Drive",
    description:
      "Quartier emblématique du shopping de luxe, où l'on croise les plus grandes marques mondiales.",
  },
  {
    image: "../assets/img/Grand Central Market.jpeg",
    name: "Grand Central Market",
    description:
      "Marché historique de Downtown L.A. avec des stands de cuisine du monde entier.",
  },
  {
    image: "../assets/img/Original-Farmers-Market.jpg",
    name: "Original Farmers Market",
    description:
      "Un marché gastronomique incontournable depuis 1934 avec des produits locaux et artisanaux.",
  },
  {
    image: "../assets/img/Westfield-Century-City.jpg",
    name: "Westfield Century City",
    description:
      "Centre commercial moderne avec des boutiques haut de gamme et restaurants branchés.",
  },
  {
    image: "https://a.travel-assets.com/findyours-php/viewfinder/images/res70/480000/480993-Melrose-Avenue.jpg",
    name: "Melrose Avenue",
    description:
      "Rue artistique et branchée avec des magasins alternatifs, streetwear, galeries et cafés.",
  },
  {
    image: "../assets/img/Beverly Center.jpg",
    name: "Beverly Center",
    description:
      "Un centre commercial haut de gamme situé à la frontière entre Beverly Hills et West Hollywood.",
  },
  {
    image: "../assets/img/Amoeba-Music.jpg",
    name: "Amoeba Music",
    description:
      "Le plus grand magasin de disques indépendant du monde, un lieu culte pour les passionnés de musique.",
  },
];

const container = document.getElementById("commerceContainer");

// Génération des cartes
commerces.forEach((commerce) => {
  const card = document.createElement("div");
  card.className = "commerce-card";
  card.innerHTML = `
      <img src="${commerce.image}" alt="${commerce.name}">
      <div class="card-content">
        <h3>${commerce.name}</h3>
        <p>${commerce.description}</p>
      </div>
    `;
  container.appendChild(card);
});

// Animation au scroll (fade-in)
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
});

document.querySelectorAll(".commerce-card").forEach((card) => {
  observer.observe(card);
});
