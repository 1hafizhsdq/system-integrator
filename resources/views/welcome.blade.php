<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hafizh Assidiq // System Integrator</title>
  <meta name="description" content="Personal portfolio and architectural matrix of Hafizh Assidiq. System Integrator, Distributed Systems Architect, Cloud Infrastructure & WebGL Engineering.">
  
  <!-- Google Fonts: Space Grotesk, JetBrains Mono, Orbitron -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;700&family=Orbitron:wght@600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  <style>
    .font-orbitron { font-family: 'Orbitron', sans-serif; }
    .font-mono-cyber { font-family: 'JetBrains Mono', monospace; }
  </style>
</head>
<body class="bg-[#06080d] text-slate-200 antialiased selection:bg-cyan-400 selection:text-black min-h-screen relative overflow-x-hidden">

  <!-- Ambient Sci-Fi Scanlines & Grid Overlay -->
  <div class="fixed inset-0 cyber-scanlines z-50 pointer-events-none opacity-40"></div>
  <div class="fixed inset-0 cyber-grid-pattern z-0 pointer-events-none opacity-50"></div>

  <!-- Glow Orbs in Background -->
  <div class="fixed top-[-10%] left-[15%] w-[600px] h-[600px] rounded-full bg-cyan-500/10 blur-[140px] pointer-events-none z-0"></div>
  <div class="fixed top-[40%] right-[10%] w-[500px] h-[500px] rounded-full bg-purple-600/10 blur-[150px] pointer-events-none z-0"></div>
  <div class="fixed bottom-[-10%] left-[30%] w-[600px] h-[600px] rounded-full bg-blue-600/10 blur-[160px] pointer-events-none z-0"></div>

  <!-- ==================== HUD HEADER & TELEMETRY BAR ==================== -->
  <header class="fixed top-0 left-0 right-0 z-40 bg-[#070b13]/85 backdrop-blur-md border-b border-cyan-500/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
      
      <!-- Brand & Status Beacon -->
      <a href="#hero" class="flex items-center gap-3 group">
        <div class="relative w-9 h-9 rounded bg-cyan-950/80 border border-cyan-400/60 flex items-center justify-center cyber-corner shadow-[0_0_12px_rgba(0,242,254,0.3)]">
          <span class="font-orbitron font-bold text-cyan-400 text-sm tracking-wider">HS</span>
          <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-cyan-400 rounded-full animate-ping"></span>
          <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-cyan-400 rounded-full"></span>
        </div>
        <div>
          <div class="font-orbitron text-sm font-bold tracking-wider text-white group-hover:text-cyan-400 transition-colors flex items-center gap-2">
            <span>HAFIZH.SYS</span>
            <span class="text-[10px] font-mono-cyber px-1.5 py-0.5 rounded bg-cyan-500/10 text-cyan-300 border border-cyan-400/30">v2.6</span>
          </div>
          <div class="text-[10px] font-mono-cyber text-slate-400 flex items-center gap-1.5">
            <span class="w-1.5 h-1.5 rounded-full bg-green-400 inline-block animate-pulse"></span>
            <span>NODE_READY // UTC+7</span>
          </div>
        </div>
      </a>

      <!-- Desktop Nav Links -->
      <nav class="hidden md:flex items-center gap-7 text-xs font-mono-cyber tracking-wider">
        <a href="#hero" class="text-slate-300 hover:text-cyan-300 transition-colors py-1 flex items-center gap-1">
          <span class="text-cyan-500">//</span> 00_CORE
        </a>
        <a href="#disciplines" class="text-slate-300 hover:text-cyan-300 transition-colors py-1 flex items-center gap-1">
          <span class="text-cyan-500">//</span> 01_ARCHITECTURE
        </a>
        <a href="#projects" class="text-slate-300 hover:text-cyan-300 transition-colors py-1 flex items-center gap-1">
          <span class="text-cyan-500">//</span> 02_PROJECTS
        </a>
        <a href="#terminal" class="text-slate-300 hover:text-cyan-300 transition-colors py-1 flex items-center gap-1">
          <span class="text-cyan-500">//</span> 03_TERMINAL
        </a>
        <a href="#contact" class="text-slate-300 hover:text-cyan-300 transition-colors py-1 flex items-center gap-1">
          <span class="text-cyan-500">//</span> 04_UPLINK
        </a>
      </nav>

      <!-- Right HUD Controls & Live Telemetry -->
      <div class="flex items-center gap-4">
        <!-- Live Latency Telemetry -->
        <div class="hidden sm:flex items-center gap-2 text-xs font-mono-cyber px-2.5 py-1 rounded bg-black/60 border border-cyan-500/20 text-slate-300">
          <span class="text-cyan-400">LATENCY:</span>
          <span id="telemetry-latency" class="text-green-400 font-semibold">18ms</span>
        </div>

        <!-- Audio SFX Toggle -->
        <button id="hud-sound-toggle" type="button" class="px-2.5 py-1 text-[11px] font-mono-cyber rounded bg-slate-900 border border-slate-700/80 text-slate-400 hover:border-cyan-400/50 hover:text-cyan-300 transition-all flex items-center gap-1.5" title="Toggle Sci-Fi SFX Synthesizer">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path>
          </svg>
          <span id="hud-sound-status">AUDIO: OFF</span>
        </button>

        <!-- CTA Transmission -->
        <a href="#contact" class="hidden lg:inline-flex items-center justify-center px-4 py-1.5 text-xs font-mono-cyber font-bold uppercase tracking-wider text-black bg-cyan-400 hover:bg-cyan-300 rounded cyber-corner shadow-[0_0_15px_rgba(0,242,254,0.4)] transition-all transform hover:scale-105">
          INITIALIZE
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobile-menu-btn" class="md:hidden p-2 rounded text-slate-300 hover:text-cyan-400 border border-slate-800">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>

    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-nav" class="hidden md:hidden bg-[#0a0f1c] border-b border-cyan-500/20 px-6 py-4 space-y-3 font-mono-cyber text-sm">
      <a href="#hero" class="block text-slate-200 hover:text-cyan-300 py-1">// 00_CORE</a>
      <a href="#disciplines" class="block text-slate-200 hover:text-cyan-300 py-1">// 01_ARCHITECTURE</a>
      <a href="#projects" class="block text-slate-200 hover:text-cyan-300 py-1">// 02_PROJECTS</a>
      <a href="#terminal" class="block text-slate-200 hover:text-cyan-300 py-1">// 03_TERMINAL</a>
      <a href="#contact" class="block text-slate-200 hover:text-cyan-300 py-1">// 04_UPLINK</a>
    </div>
  </header>

  <!-- ==================== HERO SECTION WITH 3D WEBGL CORE ==================== -->
  <section id="hero" class="relative min-h-screen pt-24 pb-16 flex items-center justify-center z-10 overflow-hidden">
    
    <!-- Three.js Canvas Container (Full Background & Interactive Foreground) -->
    <div id="cyber-canvas-container" class="absolute inset-0 z-0 pointer-events-auto cursor-grab active:cursor-grabbing"></div>

    <!-- Hero Content Overlay -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pointer-events-none">
      <div class="max-w-3xl pointer-events-auto backdrop-blur-sm bg-black/30 p-6 md:p-8 rounded-2xl border border-cyan-500/20 box-glow-cyan">
        
        <!-- Status Tag -->
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/70 border border-cyan-400/40 text-cyan-300 text-xs font-mono-cyber mb-4">
          <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
          <span>SYSTEM_INTEGRATOR // 2026 ARCHITECTURAL MATRIX</span>
        </div>

        <!-- Main Title -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-orbitron font-extrabold tracking-tight leading-none text-white mb-4">
          HAFIZH <br>
          <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-teal-300 to-purple-500 glow-cyan">
            ASSIDIQ
          </span>
        </h1>

        <!-- Subtitle & Role -->
        <p class="text-lg sm:text-xl font-mono-cyber text-cyan-200/90 mb-4 font-medium tracking-wide">
          Distributed Systems Architect & Enterprise Solutions Integrator
        </p>

        <!-- Description -->
        <p class="text-slate-300 text-base leading-relaxed mb-8 max-w-2xl">
          Architecting resilient, containerized microservices and automated infrastructure bridges. 
          Unifying fragmented enterprise ecosystems into high-throughput, low-latency computational matrices.
        </p>

        <!-- CTA Triggers -->
        <div class="flex flex-wrap items-center gap-4">
          <a href="#contact" class="px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-black font-mono-cyber font-bold text-sm tracking-wider uppercase rounded cyber-corner shadow-[0_0_25px_rgba(0,242,254,0.5)] transition-all transform hover:-translate-y-0.5">
            // TRANSMISSION UPLINK
          </a>
          <a href="#projects" class="px-6 py-3 bg-[#0a101d]/90 hover:bg-[#11192e] text-cyan-300 border border-cyan-400/50 hover:border-cyan-300 font-mono-cyber font-medium text-sm tracking-wider uppercase rounded cyber-corner transition-all">
            // EXPLORE BLUEPRINTS
          </a>
          <a href="https://github.com/1hafizhsdq" target="_blank" rel="noopener noreferrer" class="p-3 bg-[#0a101d]/90 hover:bg-slate-800 text-slate-300 hover:text-cyan-400 border border-slate-700/80 rounded cyber-corner transition-colors" title="GitHub Matrix">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
            </svg>
          </a>
        </div>

        <!-- Telemetry Data Ticker -->
        <div class="mt-8 pt-6 border-t border-slate-800/80 grid grid-cols-3 gap-4 text-center sm:text-left font-mono-cyber">
          <div>
            <div class="text-2xl font-bold text-cyan-400 glow-cyan">99.98%</div>
            <div class="text-[11px] text-slate-400 tracking-wider uppercase">Cluster Uptime</div>
          </div>
          <div>
            <div class="text-2xl font-bold text-purple-400 glow-purple">Zero-Loss</div>
            <div class="text-[11px] text-slate-400 tracking-wider uppercase">Data Migration</div>
          </div>
          <div>
            <div class="text-2xl font-bold text-green-400">Sub-50ms</div>
            <div class="text-[11px] text-slate-400 tracking-wider uppercase">Gateway Latency</div>
          </div>
        </div>

      </div>
    </div>

    <!-- Scroll Down Hint Indicator -->
    <a href="#disciplines" class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-20 flex flex-col items-center gap-2 text-cyan-400/80 hover:text-cyan-300 font-mono-cyber text-[11px] tracking-widest uppercase transition-colors">
      <span>INITIALIZE SCROLL</span>
      <div class="w-5 h-8 rounded-full border border-cyan-400/40 flex items-start justify-center p-1">
        <div class="w-1.5 h-2 bg-cyan-400 rounded-full animate-bounce"></div>
      </div>
    </a>
  </section>

  <!-- ==================== SECTION 01: CORE ARCHITECTURAL DISCIPLINES ==================== -->
  <section id="disciplines" class="relative py-24 z-10 bg-[#060a12]/90 border-t border-cyan-500/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Section Header -->
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 pb-6 border-b border-slate-800">
        <div>
          <div class="text-xs font-mono-cyber text-cyan-400 tracking-widest uppercase mb-2 flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
            DISCIPLINE // 01
          </div>
          <h2 class="text-3xl sm:text-4xl font-orbitron font-bold text-white">
            ARCHITECTURAL <span class="text-cyan-400">DISCIPLINES</span>
          </h2>
        </div>
        <p class="text-slate-400 text-sm font-mono-cyber max-w-md mt-4 md:mt-0">
          Integrated systems built for failure-resilient environments, rapid telemetry pipelines, and cloud container orchestration.
        </p>
      </div>

      <!-- Disciplines Grid (3D Tilt Cards) -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Card 1: Enterprise API & Middleware -->
        <div class="tilt-card relative bg-[#090e18] border border-cyan-500/25 rounded-xl p-6 cyber-corner box-glow-cyan-hover overflow-hidden group">
          <div class="tilt-glare absolute inset-0 pointer-events-none transition-all duration-150"></div>
          <div class="tilt-content relative z-10">
            <div class="w-12 h-12 rounded-lg bg-cyan-950/80 border border-cyan-400/50 flex items-center justify-center text-cyan-300 mb-6 shadow-[0_0_15px_rgba(0,242,254,0.3)]">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
            </div>
            <div class="text-[11px] font-mono-cyber text-cyan-400 tracking-widest mb-1">MODULE // 01</div>
            <h3 class="font-orbitron font-bold text-lg text-white mb-3 group-hover:text-cyan-300 transition-colors">
              API Gateways & Middleware
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed mb-4">
              Building federated gateway meshes with REST, GraphQL, and gRPC. Unifying legacy monoliths and microservices into a seamless contract.
            </p>
            <div class="flex flex-wrap gap-1.5 pt-2 border-t border-slate-800/80 font-mono-cyber text-[10px] text-cyan-300/80">
              <span class="px-2 py-0.5 rounded bg-cyan-950/60 border border-cyan-500/30">REST/gRPC</span>
              <span class="px-2 py-0.5 rounded bg-cyan-950/60 border border-cyan-500/30">Kong</span>
              <span class="px-2 py-0.5 rounded bg-cyan-950/60 border border-cyan-500/30">OAuth2/JWT</span>
            </div>
          </div>
        </div>

        <!-- Card 2: Container Orchestration -->
        <div class="tilt-card relative bg-[#090e18] border border-purple-500/25 rounded-xl p-6 cyber-corner box-glow-cyan-hover overflow-hidden group">
          <div class="tilt-glare absolute inset-0 pointer-events-none transition-all duration-150"></div>
          <div class="tilt-content relative z-10">
            <div class="w-12 h-12 rounded-lg bg-purple-950/80 border border-purple-400/50 flex items-center justify-center text-purple-300 mb-6 shadow-[0_0_15px_rgba(121,40,202,0.3)]">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
              </svg>
            </div>
            <div class="text-[11px] font-mono-cyber text-purple-400 tracking-widest mb-1">MODULE // 02</div>
            <h3 class="font-orbitron font-bold text-lg text-white mb-3 group-hover:text-purple-300 transition-colors">
              Docker & Cloud Orchestration
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed mb-4">
              Containerized environments with Docker Compose, Kubernetes manifests, and immutable automated CI/CD pipelines with zero downtime.
            </p>
            <div class="flex flex-wrap gap-1.5 pt-2 border-t border-slate-800/80 font-mono-cyber text-[10px] text-purple-300/80">
              <span class="px-2 py-0.5 rounded bg-purple-950/60 border border-purple-500/30">Docker</span>
              <span class="px-2 py-0.5 rounded bg-purple-950/60 border border-purple-500/30">Kubernetes</span>
              <span class="px-2 py-0.5 rounded bg-purple-950/60 border border-purple-500/30">Nginx Alpine</span>
            </div>
          </div>
        </div>

        <!-- Card 3: Distributed Data Matrix -->
        <div class="tilt-card relative bg-[#090e18] border border-blue-500/25 rounded-xl p-6 cyber-corner box-glow-cyan-hover overflow-hidden group">
          <div class="tilt-glare absolute inset-0 pointer-events-none transition-all duration-150"></div>
          <div class="tilt-content relative z-10">
            <div class="w-12 h-12 rounded-lg bg-blue-950/80 border border-blue-400/50 flex items-center justify-center text-blue-300 mb-6 shadow-[0_0_15px_rgba(79,172,254,0.3)]">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
              </svg>
            </div>
            <div class="text-[11px] font-mono-cyber text-blue-400 tracking-widest mb-1">MODULE // 03</div>
            <h3 class="font-orbitron font-bold text-lg text-white mb-3 group-hover:text-blue-300 transition-colors">
              Data Matrix & Caching
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed mb-4">
              High-throughput database clustering, read-replica synchronization, Redis memory caches, and event streaming via RabbitMQ or Kafka.
            </p>
            <div class="flex flex-wrap gap-1.5 pt-2 border-t border-slate-800/80 font-mono-cyber text-[10px] text-blue-300/80">
              <span class="px-2 py-0.5 rounded bg-blue-950/60 border border-blue-500/30">MySQL 8.0</span>
              <span class="px-2 py-0.5 rounded bg-blue-950/60 border border-blue-500/30">Redis</span>
              <span class="px-2 py-0.5 rounded bg-blue-950/60 border border-blue-500/30">Kafka</span>
            </div>
          </div>
        </div>

        <!-- Card 4: Observability & Telemetry -->
        <div class="tilt-card relative bg-[#090e18] border border-teal-500/25 rounded-xl p-6 cyber-corner box-glow-cyan-hover overflow-hidden group">
          <div class="tilt-glare absolute inset-0 pointer-events-none transition-all duration-150"></div>
          <div class="tilt-content relative z-10">
            <div class="w-12 h-12 rounded-lg bg-teal-950/80 border border-teal-400/50 flex items-center justify-center text-teal-300 mb-6 shadow-[0_0_15px_rgba(20,184,166,0.3)]">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
              </svg>
            </div>
            <div class="text-[11px] font-mono-cyber text-teal-400 tracking-widest mb-1">MODULE // 04</div>
            <h3 class="font-orbitron font-bold text-lg text-white mb-3 group-hover:text-teal-300 transition-colors">
              Telemetry & Zero-Trust
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed mb-4">
              Real-time health telemetry, distributed tracing, automated anomaly alerts, and robust security policies enforcing zero-trust perimeters.
            </p>
            <div class="flex flex-wrap gap-1.5 pt-2 border-t border-slate-800/80 font-mono-cyber text-[10px] text-teal-300/80">
              <span class="px-2 py-0.5 rounded bg-teal-950/60 border border-teal-500/30">Grafana</span>
              <span class="px-2 py-0.5 rounded bg-teal-950/60 border border-teal-500/30">Prometheus</span>
              <span class="px-2 py-0.5 rounded bg-teal-950/60 border border-teal-500/30">Zero-Trust</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== SECTION 02: 3D HOLOGRAPHIC PROJECT SHOWCASE ==================== -->
  <section id="projects" class="relative py-24 z-10 bg-[#05070c] border-t border-cyan-500/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Header -->
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 pb-6 border-b border-slate-800">
        <div>
          <div class="text-xs font-mono-cyber text-purple-400 tracking-widest uppercase mb-2 flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
            SHOWCASE // 02
          </div>
          <h2 class="text-3xl sm:text-4xl font-orbitron font-bold text-white">
            DEPLOYED <span class="text-purple-400">ARCHITECTURES</span>
          </h2>
        </div>
        <p class="text-slate-400 text-sm font-mono-cyber max-w-md mt-4 md:mt-0">
          Featured system integration projects, multi-service topologies, and infrastructure automation repos.
        </p>
      </div>

      <!-- Projects Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Project 1: System Integrator Multi-Tenant Nexus -->
        <div class="tilt-card relative bg-[#090e18] border border-cyan-500/30 rounded-xl overflow-hidden cyber-corner group">
          <div class="tilt-glare absolute inset-0 pointer-events-none transition-all duration-150"></div>
          
          <!-- Holographic Header Visual -->
          <div class="h-44 bg-gradient-to-br from-cyan-950/80 via-[#0a1224] to-black p-5 relative flex flex-col justify-between border-b border-cyan-500/20">
            <div class="flex items-center justify-between z-10">
              <span class="text-[10px] font-mono-cyber px-2 py-0.5 rounded bg-cyan-400/20 text-cyan-300 border border-cyan-400/40 font-semibold">
                ● PRODUCTION ARCHITECTURE
              </span>
              <span class="text-xs font-mono-cyber text-slate-400">#001</span>
            </div>
            
            <div class="z-10">
              <div class="font-orbitron text-xl font-bold text-white group-hover:text-cyan-300 transition-colors">
                System Integrator Nexus
              </div>
              <div class="text-xs font-mono-cyber text-cyan-400/80">Docker &middot; Nginx &middot; MySQL &middot; Laravel 12</div>
            </div>

            <!-- Subtle Circuit Graphic Overlay -->
            <div class="absolute inset-0 opacity-20 cyber-grid-pattern"></div>
          </div>

          <!-- Body -->
          <div class="p-6 tilt-content">
            <p class="text-slate-300 text-sm leading-relaxed mb-6">
              Orchestrated multi-container architecture bridging enterprise REST microservices with automated Docker networks, Nginx reverse proxy load balancer, and persistent volume sync.
            </p>

            <div class="flex flex-wrap gap-1.5 mb-6 font-mono-cyber text-[10px] text-cyan-300">
              <span class="px-2 py-0.5 rounded bg-cyan-950/40 border border-cyan-500/20">Docker Compose</span>
              <span class="px-2 py-0.5 rounded bg-cyan-950/40 border border-cyan-500/20">Nginx Reverse Proxy</span>
              <span class="px-2 py-0.5 rounded bg-cyan-950/40 border border-cyan-500/20">MySQL 8.0</span>
              <span class="px-2 py-0.5 rounded bg-cyan-950/40 border border-cyan-500/20">Laravel 12</span>
            </div>

            <div class="flex items-center justify-between pt-4 border-t border-slate-800 font-mono-cyber text-xs">
              <a href="https://github.com/1hafizhsdq/system-integrator" target="_blank" class="text-cyan-400 hover:text-cyan-300 flex items-center gap-1 font-semibold group-hover:underline">
                <span>VIEW REPOSITORY</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
              <span class="text-slate-500">HA-READY</span>
            </div>
          </div>
        </div>

        <!-- Project 2: Real-time Telemetry Hub -->
        <div class="tilt-card relative bg-[#090e18] border border-purple-500/30 rounded-xl overflow-hidden cyber-corner group">
          <div class="tilt-glare absolute inset-0 pointer-events-none transition-all duration-150"></div>
          
          <!-- Header -->
          <div class="h-44 bg-gradient-to-br from-purple-950/80 via-[#100d24] to-black p-5 relative flex flex-col justify-between border-b border-purple-500/20">
            <div class="flex items-center justify-between z-10">
              <span class="text-[10px] font-mono-cyber px-2 py-0.5 rounded bg-purple-400/20 text-purple-300 border border-purple-400/40 font-semibold">
                ● ACTIVE PIPELINE
              </span>
              <span class="text-xs font-mono-cyber text-slate-400">#002</span>
            </div>
            
            <div class="z-10">
              <div class="font-orbitron text-xl font-bold text-white group-hover:text-purple-300 transition-colors">
                High-Throughput Telemetry
              </div>
              <div class="text-xs font-mono-cyber text-purple-400/80">WebSocket &middot; Redis &middot; TimeSeries &middot; Grafana</div>
            </div>

            <div class="absolute inset-0 opacity-20 cyber-grid-pattern"></div>
          </div>

          <!-- Body -->
          <div class="p-6 tilt-content">
            <p class="text-slate-300 text-sm leading-relaxed mb-6">
              Low-latency telemetry streaming service processing distributed node health metrics, packet throughput stats, and real-time failure alerts across hybrid cluster instances.
            </p>

            <div class="flex flex-wrap gap-1.5 mb-6 font-mono-cyber text-[10px] text-purple-300">
              <span class="px-2 py-0.5 rounded bg-purple-950/40 border border-purple-500/20">WebSockets</span>
              <span class="px-2 py-0.5 rounded bg-purple-950/40 border border-purple-500/20">Redis Pub/Sub</span>
              <span class="px-2 py-0.5 rounded bg-purple-950/40 border border-purple-500/20">OpenTelemetry</span>
            </div>

            <div class="flex items-center justify-between pt-4 border-t border-slate-800 font-mono-cyber text-xs">
              <a href="#terminal" class="text-purple-400 hover:text-purple-300 flex items-center gap-1 font-semibold group-hover:underline">
                <span>DIAGNOSTIC TEST</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
              <span class="text-slate-500">&lt; 15ms</span>
            </div>
          </div>
        </div>

        <!-- Project 3: 3D Cyber Topology Visualizer -->
        <div class="tilt-card relative bg-[#090e18] border border-blue-500/30 rounded-xl overflow-hidden cyber-corner group">
          <div class="tilt-glare absolute inset-0 pointer-events-none transition-all duration-150"></div>
          
          <!-- Header -->
          <div class="h-44 bg-gradient-to-br from-blue-950/80 via-[#0a1426] to-black p-5 relative flex flex-col justify-between border-b border-blue-500/20">
            <div class="flex items-center justify-between z-10">
              <span class="text-[10px] font-mono-cyber px-2 py-0.5 rounded bg-blue-400/20 text-blue-300 border border-blue-400/40 font-semibold">
                ● 2026 WEBGL CORE
              </span>
              <span class="text-xs font-mono-cyber text-slate-400">#003</span>
            </div>
            
            <div class="z-10">
              <div class="font-orbitron text-xl font-bold text-white group-hover:text-blue-300 transition-colors">
                Cyber-Mesh 3D Engine
              </div>
              <div class="text-xs font-mono-cyber text-blue-400/80">Three.js &middot; WebGL Shaders &middot; Tailwind CSS</div>
            </div>

            <div class="absolute inset-0 opacity-20 cyber-grid-pattern"></div>
          </div>

          <!-- Body -->
          <div class="p-6 tilt-content">
            <p class="text-slate-300 text-sm leading-relaxed mb-6">
              Modern spatial 3D engine demonstrating live quantum core wireframes, wave elevation matrix planes, interactive particle physics, and zero-latency sound synthesis.
            </p>

            <div class="flex flex-wrap gap-1.5 mb-6 font-mono-cyber text-[10px] text-blue-300">
              <span class="px-2 py-0.5 rounded bg-blue-950/40 border border-blue-500/20">Three.js WebGL</span>
              <span class="px-2 py-0.5 rounded bg-blue-950/40 border border-blue-500/20">Procedural SFX</span>
              <span class="px-2 py-0.5 rounded bg-blue-950/40 border border-blue-500/20">Tailwind v4</span>
            </div>

            <div class="flex items-center justify-between pt-4 border-t border-slate-800 font-mono-cyber text-xs">
              <a href="#hero" class="text-blue-400 hover:text-blue-300 flex items-center gap-1 font-semibold group-hover:underline">
                <span>INTERACT WITH 3D CORE</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
              <span class="text-slate-500">60 FPS</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== SECTION 03: INTERACTIVE CYBER TERMINAL CLI ==================== -->
  <section id="terminal" class="relative py-24 z-10 bg-[#06080e] border-t border-cyan-500/20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Section Header -->
      <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/60 border border-cyan-400/40 text-cyan-300 text-xs font-mono-cyber mb-3">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
          DIAGNOSTICS // 03
        </div>
        <h2 class="text-3xl sm:text-4xl font-orbitron font-bold text-white mb-3">
          OPERATOR <span class="text-cyan-400">COMMAND PROMPT</span>
        </h2>
        <p class="text-slate-400 text-sm font-mono-cyber max-w-xl mx-auto">
          Direct command line interface to query system telemetry, architecture specs, and engineer background.
        </p>
      </div>

      <!-- Terminal Mockup Window -->
      <div class="bg-[#0b101c] border border-cyan-500/35 rounded-xl shadow-[0_0_35px_rgba(0,242,254,0.15)] overflow-hidden">
        
        <!-- Window Top Bar -->
        <div class="bg-[#080c16] px-4 py-3 border-b border-cyan-500/20 flex items-center justify-between font-mono-cyber text-xs">
          <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
            <span class="w-3 h-3 rounded-full bg-yellow-500/80 inline-block"></span>
            <span class="w-3 h-3 rounded-full bg-green-500/80 inline-block"></span>
            <span class="ml-2 text-slate-400 text-[11px]">hafizh@system-integrator: ~</span>
          </div>
          <div class="text-cyan-400/80 text-[11px] hidden sm:block">
            BASH // ENCRYPTED_SESSION_v2026
          </div>
        </div>

        <!-- Terminal Quick Action Pills -->
        <div class="bg-black/40 px-4 py-2 border-b border-slate-800 flex items-center gap-2 text-xs font-mono-cyber flex-wrap">
          <span class="text-slate-500 text-[11px]">Quick Directives:</span>
          <button type="button" onclick="document.getElementById('cyber-terminal-input').value='about'; document.getElementById('cyber-terminal-input').dispatchEvent(new KeyboardEvent('keydown', {'key':'Enter'}));" class="px-2 py-0.5 rounded bg-cyan-950/60 border border-cyan-500/30 text-cyan-300 hover:bg-cyan-900/60 transition-colors">
            about
          </button>
          <button type="button" onclick="document.getElementById('cyber-terminal-input').value='skills'; document.getElementById('cyber-terminal-input').dispatchEvent(new KeyboardEvent('keydown', {'key':'Enter'}));" class="px-2 py-0.5 rounded bg-purple-950/60 border border-purple-500/30 text-purple-300 hover:bg-purple-900/60 transition-colors">
            skills
          </button>
          <button type="button" onclick="document.getElementById('cyber-terminal-input').value='projects'; document.getElementById('cyber-terminal-input').dispatchEvent(new KeyboardEvent('keydown', {'key':'Enter'}));" class="px-2 py-0.5 rounded bg-blue-950/60 border border-blue-500/30 text-blue-300 hover:bg-blue-900/60 transition-colors">
            projects
          </button>
          <button type="button" onclick="document.getElementById('cyber-terminal-input').value='status'; document.getElementById('cyber-terminal-input').dispatchEvent(new KeyboardEvent('keydown', {'key':'Enter'}));" class="px-2 py-0.5 rounded bg-green-950/60 border border-green-500/30 text-green-300 hover:bg-green-900/60 transition-colors">
            status
          </button>
          <button type="button" onclick="document.getElementById('cyber-terminal-input').value='clear'; document.getElementById('cyber-terminal-input').dispatchEvent(new KeyboardEvent('keydown', {'key':'Enter'}));" class="px-2 py-0.5 rounded bg-slate-800 border border-slate-700 text-slate-300 hover:bg-slate-700 transition-colors">
            clear
          </button>
        </div>

        <!-- Terminal Output Area -->
        <div id="cyber-terminal-output" class="p-5 h-72 overflow-y-auto font-mono-cyber text-sm space-y-2 text-slate-300">
          <div class="text-cyan-400 font-bold mb-2">
            ========================================================================<br>
            HAFIZH ASSIDIQ // SYSTEM INTEGRATOR<br>
            ========================================================================
          </div>
          <div class="text-slate-400 text-xs mb-3">
            System initialization complete. All microservices operational.<br>
            Type <span class="text-cyan-300 font-semibold cursor-pointer underline" onclick="document.getElementById('cyber-terminal-input').value='help'; document.getElementById('cyber-terminal-input').dispatchEvent(new KeyboardEvent('keydown', {'key':'Enter'}));">'help'</span> for a list of available directives.
          </div>
        </div>

        <!-- Terminal Input Row -->
        <div class="bg-[#070a12] p-4 border-t border-cyan-500/20 flex items-center gap-3 font-mono-cyber text-sm">
          <span class="text-cyan-400 font-bold select-none">operator@matrix:~$</span>
          <input 
            id="cyber-terminal-input" 
            type="text" 
            autocomplete="off" 
            spellcheck="false" 
            placeholder="type 'help', 'about', 'skills', or 'projects'..." 
            class="flex-1 bg-transparent border-none outline-none text-slate-100 placeholder-slate-600 font-mono-cyber focus:ring-0"
          >
          <span class="w-2 h-4 bg-cyan-400 animate-pulse"></span>
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== SECTION 04: TRANSMISSION UPLINK (CONTACT) ==================== -->
  <section id="contact" class="relative py-24 z-10 bg-[#04060b] border-t border-cyan-500/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Left: Telemetry & Uplink Info -->
        <div class="lg:col-span-5">
          <div class="text-xs font-mono-cyber text-cyan-400 tracking-widest uppercase mb-2 flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
            TRANSMISSION // 04
          </div>
          <h2 class="text-3xl sm:text-4xl font-orbitron font-bold text-white mb-6">
            INITIALIZE <span class="text-cyan-400">UPLINK</span>
          </h2>
          <p class="text-slate-300 text-sm leading-relaxed mb-8">
            Seeking to architect or integrate distributed architectures, container pipelines, or enterprise APIs? Connect directly to initialize high-impact collaboration.
          </p>

          <!-- Status & Contact Matrix Cards -->
          <div class="space-y-4 font-mono-cyber text-sm">
            
            <div class="p-4 bg-[#090e18] border border-cyan-500/25 rounded-lg flex items-center gap-4">
              <div class="w-10 h-10 rounded bg-cyan-950 border border-cyan-400/40 flex items-center justify-center text-cyan-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div>
                <div class="text-slate-400 text-xs">DIRECT TRANSMISSION</div>
                <a href="mailto:hafizhassidiq77@gmail.com" class="text-white hover:text-cyan-300 transition-colors font-semibold">
                  hafizhassidiq77@gmail.com
                </a>
              </div>
            </div>

            <div class="p-4 bg-[#090e18] border border-purple-500/25 rounded-lg flex items-center gap-4">
              <div class="w-10 h-10 rounded bg-purple-950 border border-purple-400/40 flex items-center justify-center text-purple-400">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                </svg>
              </div>
              <div>
                <div class="text-slate-400 text-xs">SOURCE REPOSITORY</div>
                <a href="https://github.com/1hafizhsdq" target="_blank" rel="noopener noreferrer" class="text-white hover:text-purple-300 transition-colors font-semibold">
                  github.com/1hafizhsdq
                </a>
              </div>
            </div>

            <div class="p-4 bg-[#090e18] border border-green-500/25 rounded-lg flex items-center gap-4">
              <div class="w-10 h-10 rounded bg-green-950 border border-green-400/40 flex items-center justify-center text-green-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </div>
              <div>
                <div class="text-slate-400 text-xs">PHYSICAL BASE</div>
                <div class="text-white font-semibold">Indonesia &middot; UTC+7 &middot; Remote Ready</div>
              </div>
            </div>

          </div>

        </div>

        <!-- Right: Futuristic Mainframe Uplink Form -->
        <div class="lg:col-span-7">
          <div class="bg-[#090e18] border border-cyan-500/30 rounded-2xl p-8 cyber-corner box-glow-cyan relative">
            
            <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-800">
              <div class="font-orbitron font-bold text-lg text-white">SECURE TRANSMISSION FORM</div>
              <div class="text-[11px] font-mono-cyber text-cyan-400">PROTOCOL: AES-256</div>
            </div>

            <!-- Feedback Alert placeholder -->
            <div id="uplink-status" class="hidden mb-6"></div>

            <form id="transmission-form" class="space-y-6">
              
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                  <label class="block text-xs font-mono-cyber text-slate-300 uppercase tracking-wider mb-2">
                    // OPERATOR_NAME
                  </label>
                  <input 
                    type="text" 
                    required 
                    placeholder="e.g. Elena Rostova" 
                    class="w-full bg-[#050810] border border-slate-700/80 focus:border-cyan-400 rounded px-4 py-2.5 text-sm text-white placeholder-slate-600 font-mono-cyber outline-none transition-colors"
                  >
                </div>
                <div>
                  <label class="block text-xs font-mono-cyber text-slate-300 uppercase tracking-wider mb-2">
                    // RETURN_UPLINK (EMAIL)
                  </label>
                  <input 
                    type="email" 
                    required 
                    placeholder="operator@enterprise.com" 
                    class="w-full bg-[#050810] border border-slate-700/80 focus:border-cyan-400 rounded px-4 py-2.5 text-sm text-white placeholder-slate-600 font-mono-cyber outline-none transition-colors"
                  >
                </div>
              </div>

              <div>
                <label class="block text-xs font-mono-cyber text-slate-300 uppercase tracking-wider mb-2">
                  // ENGAGEMENT_SCOPE
                </label>
                <select class="w-full bg-[#050810] border border-slate-700/80 focus:border-cyan-400 rounded px-4 py-2.5 text-sm text-white font-mono-cyber outline-none transition-colors">
                  <option value="integration">Enterprise System Integration & APIs</option>
                  <option value="cloud">Docker / Cloud Cluster Orchestration</option>
                  <option value="database">Distributed Database / Caching Matrix</option>
                  <option value="consulting">Architecture Consulting & Review</option>
                </select>
              </div>

              <div>
                <label class="block text-xs font-mono-cyber text-slate-300 uppercase tracking-wider mb-2">
                  // TRANSMISSION_PAYLOAD
                </label>
                <textarea 
                  rows="4" 
                  required 
                  placeholder="Outline your architectural requirements, ecosystem scope, or target objectives..." 
                  class="w-full bg-[#050810] border border-slate-700/80 focus:border-cyan-400 rounded px-4 py-2.5 text-sm text-white placeholder-slate-600 font-mono-cyber outline-none transition-colors"
                ></textarea>
              </div>

              <button 
                type="submit" 
                class="w-full py-3.5 bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 hover:from-cyan-400 hover:to-purple-500 text-black font-mono-cyber font-bold text-sm tracking-widest uppercase rounded cyber-corner shadow-[0_0_20px_rgba(0,242,254,0.4)] transition-all transform hover:-translate-y-0.5 flex items-center justify-center gap-2"
              >
                <span>TRANSMIT PACKET</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
              </button>

            </form>

          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== FOOTER ==================== -->
  <footer class="relative z-10 bg-[#020408] border-t border-slate-900 py-12 font-mono-cyber text-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
      
      <div class="flex items-center gap-3">
        <div class="w-6 h-6 rounded bg-cyan-950 border border-cyan-400/50 flex items-center justify-center text-cyan-400 font-orbitron font-bold text-xs">
          H
        </div>
        <div class="text-slate-400">
          HAFIZH ASSIDIQ &copy; 2026 // ALL SYSTEMS SECURED
        </div>
      </div>

      <div class="text-slate-500 text-center md:text-left text-[11px]">
        CORE: THREE.JS WEBGL // FRAMEWORK: LARAVEL 12 // NODE: CLOUD_CONTAINER
      </div>

      <a href="#hero" class="text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5 transition-colors">
        <span>RETURN TO CORE</span>
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
      </a>

    </div>
  </footer>

</body>
</html>