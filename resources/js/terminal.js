import { cyberAudio } from './audio-sfx';

export function initTerminal() {
  const terminalInput = document.getElementById('cyber-terminal-input');
  const terminalOutput = document.getElementById('cyber-terminal-output');
  if (!terminalInput || !terminalOutput) return;

  const commands = {
    help: () => `
<span class="text-cyan-400">Available Directives:</span>
  <span class="text-purple-400">about</span>      - View profile telemetry & background
  <span class="text-purple-400">skills</span>     - List core architecture & technical stack
  <span class="text-purple-400">projects</span>   - Display featured integration engineering works
  <span class="text-purple-400">contact</span>    - Show secure transmission endpoints
  <span class="text-purple-400">status</span>     - Live node health, memory, and sync metrics
  <span class="text-purple-400">clear</span>      - Flush terminal buffer
`,
    about: () => `
<span class="text-cyan-400 font-bold">PROFILE TELEMETRY:</span>
Name: <span class="text-white">Hafizh Assidiq</span>
Role: <span class="text-cyan-300">System Integrator & Distributed Systems Architect</span>
Specialty: Hybrid Cloud, API Gateway Orchestration, High-Availability Cluster Infrastructure
Location: Indonesia [UTC+7] // Global Uplink Enabled
Status: Ready for high-impact system integration & architectural deployments.
`,
    skills: () => `
<span class="text-cyan-400 font-bold">SYSTEM INTEGRATOR STACK:</span>
<span class="text-yellow-400">[01] ORCHESTRATION:</span> Docker, Docker Compose, Kubernetes, CI/CD Pipelines
<span class="text-yellow-400">[02] BACKEND & APIS:</span> Laravel, Node.js/TypeScript, Go, REST/GraphQL, gRPC, WebSocket
<span class="text-yellow-400">[03] DATA PIPELINES:</span> MySQL Cluster, PostgreSQL, Redis Caching, RabbitMQ/Kafka
<span class="text-yellow-400">[04] MODERN FRONTEND:</span> Three.js WebGL, Tailwind CSS, Vue/React, Modern Blade
`,
    projects: () => `
<span class="text-cyan-400 font-bold">DEPLOYED ARCHITECTURES:</span>
- <span class="text-white font-bold">Enterprise Microservices Bridge:</span> Multi-tenant API orchestration engine.
- <span class="text-white font-bold">Real-time Telemetry Hub:</span> High-throughput IoT/Server telemetry pipeline.
- <span class="text-white font-bold">Zero-Downtime Migration Matrix:</span> Automated database and service failover.
<span class="text-slate-400 italic">Type 'scroll projects' or browse the 3D showcase section above.</span>
`,
    status: () => `
<span class="text-green-400">● NODE STATUS: 100% OPERATIONAL</span>
Latency: <span class="text-cyan-300">18ms</span> (Optimal CDN Route)
Uptime: <span class="text-cyan-300">99.98%</span>
Core Engine: <span class="text-purple-400">Three.js WebGL + Vite + Laravel 12</span>
Protocol: <span class="text-amber-400">HTTP/3 QUIC Enabled</span>
`,
    contact: () => `
<span class="text-cyan-400 font-bold">SECURE TRANSMISSION ENDPOINTS:</span>
Email: <a href="mailto:hafizhassidiq77@gmail.com" class="text-cyan-300 underline">hafizhassidiq77@gmail.com</a>
GitHub: <a href="https://github.com/1hafizhsdq" target="_blank" class="text-purple-400 underline">github.com/1hafizhsdq</a>
Response SLA: &lt; 24 Hours for enterprise collaboration inquiries.
`,
    clear: () => {
      terminalOutput.innerHTML = '';
      return '';
    }
  };

  terminalInput.addEventListener('keydown', (e) => {
    cyberAudio.playTerminalKey();

    if (e.key === 'Enter') {
      const rawCmd = terminalInput.value.trim();
      const cmd = rawCmd.toLowerCase();
      terminalInput.value = '';

      if (!cmd) return;

      const userLine = document.createElement('div');
      userLine.className = 'flex items-center gap-2 text-slate-300 my-1 font-mono-cyber text-sm';
      userLine.innerHTML = `<span class="text-cyan-400 font-bold">operator@matrix:~$</span> <span>${escapeHtml(rawCmd)}</span>`;
      terminalOutput.appendChild(userLine);

      let response = '';
      if (commands[cmd]) {
        response = commands[cmd]();
      } else {
        response = `<span class="text-red-400">Directive not recognized: "${escapeHtml(rawCmd)}". Type <span class="text-cyan-400 underline cursor-pointer" onclick="document.getElementById('cyber-terminal-input').value='help';">help</span> for directives.</span>`;
      }

      if (response) {
        const responseLine = document.createElement('div');
        responseLine.className = 'text-slate-300 text-sm font-mono-cyber leading-relaxed mb-3 whitespace-pre-line';
        responseLine.innerHTML = response;
        terminalOutput.appendChild(responseLine);
      }

      // Auto scroll to bottom
      terminalOutput.scrollTop = terminalOutput.scrollHeight;
    }
  });

  function escapeHtml(str) {
    return str.replace(/[&<>"']/g, (m) => ({
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#39;'
    }[m]));
  }
}
