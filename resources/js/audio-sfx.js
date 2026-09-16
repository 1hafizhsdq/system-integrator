// Web Audio API Procedural Cyberpunk Sound Synthesizer (Zero asset download required)
class CyberAudioSystem {
  constructor() {
    this.audioCtx = null;
    this.muted = true; // Default muted for pleasant UX, user can toggle
    this.volume = 0.15;
  }

  init() {
    if (!this.audioCtx) {
      const AudioContext = window.AudioContext || window.webkitAudioContext;
      if (AudioContext) {
        this.audioCtx = new AudioContext();
      }
    }
    if (this.audioCtx && this.audioCtx.state === 'suspended') {
      this.audioCtx.resume();
    }
  }

  toggleMute() {
    this.init();
    this.muted = !this.muted;
    if (!this.muted) {
      this.playBeep(880, 0.08, 'sine');
      setTimeout(() => this.playBeep(1320, 0.1, 'triangle'), 60);
    }
    return this.muted;
  }

  isMuted() {
    return this.muted;
  }

  playBeep(freq = 440, duration = 0.05, type = 'sine') {
    if (this.muted || !this.audioCtx) return;
    try {
      const osc = this.audioCtx.createOscillator();
      const gain = this.audioCtx.createGain();
      osc.type = type;
      osc.frequency.setValueAtTime(freq, this.audioCtx.currentTime);
      gain.gain.setValueAtTime(this.volume, this.audioCtx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.0001, this.audioCtx.currentTime + duration);

      osc.connect(gain);
      gain.connect(this.audioCtx.destination);

      osc.start();
      osc.stop(this.audioCtx.currentTime + duration);
    } catch (e) {
      console.warn('Audio play error:', e);
    }
  }

  playHover() {
    if (this.muted) return;
    this.init();
    this.playBeep(520, 0.04, 'sine');
  }

  playClick() {
    if (this.muted) return;
    this.init();
    this.playBeep(1100, 0.06, 'triangle');
  }

  playTerminalKey() {
    if (this.muted) return;
    this.init();
    const freq = 600 + Math.random() * 200;
    this.playBeep(freq, 0.03, 'square');
  }

  playSuccess() {
    if (this.muted) return;
    this.init();
    this.playBeep(523.25, 0.08, 'sine');
    setTimeout(() => this.playBeep(659.25, 0.08, 'sine'), 80);
    setTimeout(() => this.playBeep(783.99, 0.12, 'sine'), 160);
  }
}

export const cyberAudio = new CyberAudioSystem();
