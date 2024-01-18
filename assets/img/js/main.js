// IIFE (Immediately Invoked Function Expression) para evitar poluição no escopo global
(function() {
  "use strict";

  // Função auxiliar para selecionar elementos do DOM
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  // Função auxiliar para adicionar um ouvinte de evento
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  // Função auxiliar para adicionar um ouvinte de evento de rolagem
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  // Obter links da barra de navegação
  let navbarlinks = select('#navbar .scrollto', true)

  // Adicionar classe 'active' aos links da barra de navegação ao rolar
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }

  // Adicionar ouvinte de evento de carga para ativar links da barra de navegação
  window.addEventListener('load', navbarlinksActive)

  // Adicionar ouvinte de evento de rolagem para ativar links da barra de navegação
  onscroll(document, navbarlinksActive)

  // Função para rolar para um elemento com compensação de cabeçalho
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 10
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  // Adicionar ouvinte de evento de rolagem para alterar classe do cabeçalho ao rolar
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  // Adicionar ouvinte de evento de rolagem para mostrar/ocultar o botão "Voltar ao topo"
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  // Adicionar ouvinte de evento de clique para alternar a navegação móvel
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  // Adicionar ouvinte de evento de clique para ativar dropdowns na navegação móvel
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  // Adicionar ouvinte de evento de clique para rolar para seções ao clicar nos links
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  // Rolar para a posição do hash na URL ao carregar a página
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  // Inicializar o slider de clientes usando a biblioteca Swiper
  new Swiper('.clients-slider', {
    // configurações do slider
  });

  // Configurar o filtro de portfólio usando a biblioteca Isotope
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      // Adicionar ouvinte de evento de clique para filtrar o portfólio
      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        // Inicializar a animação AOS após filtrar
        aos_init();
      }, true);
    }

  });

  // Inicializar o lightbox do portfólio usando a biblioteca GLightbox
  const portfolioLightbox = GLightbox({
    selector: '.portfokio-lightbox'
  });

  // Inicializar o slider de detalhes do portfólio usando a biblioteca Swiper
  new Swiper('.portfolio-details-slider', {
    // configurações do slider
  });

  // Inicializar o slider de depoimentos usando a biblioteca Swiper
  new Swiper('.testimonials-slider', {
    // configurações do slider
  });

  // Inicializar a animação AOS no carregamento da página
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

  // Inicializar o contador puro
  new PureCounter();

})();
