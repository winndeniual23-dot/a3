/* SupperTableGo - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Supper Tasting Menu Course Explorer
  const supperButtons = document.querySelectorAll('.supper-btn');
  const supperDisplay = document.getElementById('supper-detail');

  if (supperButtons.length > 0 && supperDisplay) {
    supperButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        supperButtons.forEach(b => b.classList.remove('active-supper'));
        this.classList.add('active-supper');
        const supperName = this.getAttribute('data-supper');
        const description = this.getAttribute('data-desc');
        const score = this.getAttribute('data-score');

        supperDisplay.innerHTML = `
          <div class="supper-card" style="border-left: 4px solid var(--accent-burgundy); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-burgundy); font-size: 1.5rem; margin-bottom: 0.5rem;">${supperName} Culinary Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-brass); font-size: 0.95rem;">Empirical Gastronomy Benchmark: ${score}</strong>
          </div>
        `;
      });
    });
  }

  // Supper Club Matcher & Gastronomy Quiz
  const supperQuizButtons = document.querySelectorAll('.supper-quiz-btn');
  const supperQuizResult = document.getElementById('supper-quiz-result');

  if (supperQuizButtons.length > 0 && supperQuizResult) {
    supperQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        supperQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        supperQuizResult.innerHTML = `
          <div class="supper-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-burgundy);">
            <h4 style="color: var(--accent-burgundy); margin-bottom: 0.5rem;">Your Curated Nocturnal Tasting Experience</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
