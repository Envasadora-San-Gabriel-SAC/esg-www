document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.querySelector('#mainNav');
  const navCollapse = document.querySelector('#navbarMenu');
  const backToTop = document.querySelector('#backToTop');

  const updateScrollUI = () => {
    const scrolled = window.scrollY > 40;
    navbar.classList.toggle('scrolled', scrolled);
    backToTop.classList.toggle('show', window.scrollY > 500);
  };
  updateScrollUI();
  window.addEventListener('scroll', updateScrollUI, { passive: true });

  navCollapse.addEventListener('show.bs.collapse', () => navbar.classList.add('menu-open'));
  navCollapse.addEventListener('hidden.bs.collapse', () => navbar.classList.remove('menu-open'));
  document.querySelectorAll('#navbarMenu .nav-link, #navbarMenu .btn').forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth < 992) bootstrap.Collapse.getOrCreateInstance(navCollapse).hide();
    });
  });

  backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

  const revealObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(element => revealObserver.observe(element));

  const counters = document.querySelectorAll('.counter');
  const counterObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const counter = entry.target;
      const target = Number(counter.dataset.target);
      const duration = 1500;
      const startedAt = performance.now();
      const animate = now => {
        const progress = Math.min((now - startedAt) / duration, 1);
        counter.textContent = Math.floor(target * (1 - Math.pow(1 - progress, 3)));
        if (progress < 1) requestAnimationFrame(animate);
      };
      requestAnimationFrame(animate);
      counterObserver.unobserve(counter);
    });
  }, { threshold: 0.6 });
  counters.forEach(counter => counterObserver.observe(counter));

  const form = document.querySelector('#contactForm');
  const formStatus = document.querySelector('#formStatus');
  form.addEventListener('submit', event => {
    event.preventDefault();
    if (!form.checkValidity()) {
      event.stopPropagation();
      form.classList.add('was-validated');
      return;
    }
    formStatus.textContent = 'Â¡Gracias! Tu mensaje fue registrado. Pronto nos comunicaremos contigo.';
    form.reset();
    form.classList.remove('was-validated');
  });
});