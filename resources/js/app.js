import './bootstrap';
import { cyberAudio } from './audio-sfx';
import { initCyber3D } from './cyber3d';
import { initTerminal } from './terminal';
import { init3DTilt } from './tilt3d';

document.addEventListener('DOMContentLoaded', () => {
  // 1. Initialize 3D WebGL Canvas
  initCyber3D();

  // 2. Initialize Interactive Terminal CLI
  initTerminal();

  // 3. Initialize 3D Card Tilt & Audio Triggers
  init3DTilt();

  // 4. Sound Mute / Unmute Toggle Button in HUD
  const soundToggleBtn = document.getElementById('hud-sound-toggle');
  const soundStatusText = document.getElementById('hud-sound-status');
  if (soundToggleBtn && soundStatusText) {
    soundToggleBtn.addEventListener('click', () => {
      const isMuted = cyberAudio.toggleMute();
      soundStatusText.textContent = isMuted ? 'AUDIO: OFF' : 'AUDIO: ON';
      soundToggleBtn.classList.toggle('text-cyan-400', !isMuted);
      soundToggleBtn.classList.toggle('text-slate-400', isMuted);
    });
  }

  // 5. Dynamic Live Latency Telemetry Simulation
  const latencyBadge = document.getElementById('telemetry-latency');
  if (latencyBadge) {
    setInterval(() => {
      const ping = Math.floor(16 + Math.random() * 8); // 16ms - 24ms
      latencyBadge.textContent = `${ping}ms`;
    }, 2800);
  }

  // 6. Mobile Menu Toggle
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileNav = document.getElementById('mobile-nav');
  if (mobileMenuBtn && mobileNav) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileNav.classList.toggle('hidden');
    });
  }

  // 7. Contact Form Uplink Simulation
  const contactForm = document.getElementById('transmission-form');
  const uplinkStatus = document.getElementById('uplink-status');
  if (contactForm && uplinkStatus) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      cyberAudio.playSuccess();

      uplinkStatus.classList.remove('hidden');
      uplinkStatus.innerHTML = `
        <div class="p-4 bg-cyan-950/60 border border-cyan-400/50 rounded-lg text-cyan-300 font-mono-cyber text-sm flex items-center gap-3">
          <span class="inline-block w-2.5 h-2.5 rounded-full bg-cyan-400 animate-ping"></span>
          <span>TRANSMISSION ENCRYPTED & DISPATCHED TO HAFIZH ASSIDIQ // ACK_CODE: 200_OK</span>
        </div>
      `;

      contactForm.reset();
      setTimeout(() => {
        uplinkStatus.classList.add('hidden');
      }, 7000);
    });
  }
});
