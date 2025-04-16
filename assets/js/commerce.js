console.log("script commerce.js chargé!")
const commerces = [
    {
      image: "../img/img1.jpg",
      name: "The Grove",
      description: "Un centre commercial en plein air très populaire avec boutiques de luxe, restaurants et cinéma."
    },
    {
      image: "../img/img1.jpg",
      name: "Rodeo Drive",
      description: "Quartier emblématique du shopping de luxe, où l'on croise les plus grandes marques mondiales."
    },
    {
      image: "../img/img1.jpg",
      name: "Grand Central Market",
      description: "Marché historique de Downtown L.A. avec des stands de cuisine du monde entier."
    },
    {
      image: "../img/img1.jpg",
      name: "Original Farmers Market",
      description: "Un marché gastronomique incontournable depuis 1934 avec des produits locaux et artisanaux."
    },
    {
      image: "../img/img1.jpg",
      name: "Westfield Century City",
      description: "Centre commercial moderne avec des boutiques haut de gamme et restaurants branchés."
    },
    {
      image: "../img/img1.jpg",
      name: "Melrose Avenue",
      description: "Rue artistique et branchée avec des magasins alternatifs, streetwear, galeries et cafés."
    },
    {
      image: "../img/img1.jpg",
      name: "Beverly Center",
      description: "Un centre commercial haut de gamme situé à la frontière entre Beverly Hills et West Hollywood."
    },
    {
      image: "../img/img1.jpg",
      name: "Amoeba Music",
      description: "Le plus grand magasin de disques indépendant du monde, un lieu culte pour les passionnés de musique."
    }
  ];
  
  const container = document.getElementById("commerceContainer");
  
  // Génération des cartes
  commerces.forEach(commerce => {
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
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  });
  
  document.querySelectorAll(".commerce-card").forEach(card => {
    observer.observe(card);
  });
  