import { cyberAudio } from './audio-sfx';

export function init3DTilt() {
  const cards = document.querySelectorAll('.tilt-card');

  cards.forEach((card) => {
    card.addEventListener('mouseenter', () => {
      cyberAudio.playHover();
    });

    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      // Calculate tilt angles (limit to -12 to 12 deg for elegance)
      const rotateX = -((y - centerY) / centerY) * 10;
      const rotateY = ((x - centerX) / centerX) * 10;

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;

      // Dynamic light reflection hotspot
      const glare = card.querySelector('.tilt-glare');
      if (glare) {
        glare.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(0, 242, 254, 0.22) 0%, transparent 60%)`;
      }
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0)';
      const glare = card.querySelector('.tilt-glare');
      if (glare) {
        glare.style.background = 'transparent';
      }
    });
  });

  // Sound triggers on interactive buttons
  const buttons = document.querySelectorAll('button, a[href^="#"]');
  buttons.forEach((btn) => {
    btn.addEventListener('click', () => {
      cyberAudio.playClick();
    });
    btn.addEventListener('mouseenter', () => {
      cyberAudio.playHover();
    });
  });
}
