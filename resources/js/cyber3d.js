import * as THREE from 'three';

export function initCyber3D() {
  const container = document.getElementById('cyber-canvas-container');
  if (!container) return;

  // Scene setup
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(
    60,
    container.clientWidth / container.clientHeight,
    0.1,
    1000
  );
  camera.position.z = 18;
  camera.position.y = 2;

  const renderer = new THREE.WebGLRenderer({
    alpha: true,
    antialias: true,
    powerPreference: 'high-performance'
  });
  renderer.setSize(container.clientWidth, container.clientHeight);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  container.appendChild(renderer.domElement);

  // Group for the main cyber core
  const coreGroup = new THREE.Group();
  scene.add(coreGroup);

  // 1. Holographic Wireframe Icosahedron (Outer Cage)
  const icoGeo = new THREE.IcosahedronGeometry(4.2, 1);
  const icoWireGeo = new THREE.WireframeGeometry(icoGeo);
  const icoMat = new THREE.LineBasicMaterial({
    color: 0x00f2fe,
    transparent: true,
    opacity: 0.6,
    linewidth: 1
  });
  const outerIco = new THREE.LineSegments(icoWireGeo, icoMat);
  coreGroup.add(outerIco);

  // 2. Inner Quantum Core (Solid faceted crystal)
  const innerGeo = new THREE.OctahedronGeometry(2.5, 0);
  const innerMat = new THREE.MeshStandardMaterial({
    color: 0x0b1329,
    emissive: 0x7928ca,
    emissiveIntensity: 0.8,
    roughness: 0.1,
    metalness: 0.9,
    wireframe: false,
    flatShading: true
  });
  const innerCore = new THREE.Mesh(innerGeo, innerMat);
  coreGroup.add(innerCore);

  // 3. Orbiting Gyro Rings (Quantum Confinement Rings)
  const ringGeo1 = new THREE.TorusGeometry(5.2, 0.04, 16, 100);
  const ringMat1 = new THREE.MeshBasicMaterial({ color: 0x00f2fe, transparent: true, opacity: 0.8 });
  const ring1 = new THREE.Mesh(ringGeo1, ringMat1);
  ring1.rotation.x = Math.PI / 3;
  coreGroup.add(ring1);

  const ringGeo2 = new THREE.TorusGeometry(5.8, 0.03, 16, 100);
  const ringMat2 = new THREE.MeshBasicMaterial({ color: 0x7928ca, transparent: true, opacity: 0.7 });
  const ring2 = new THREE.Mesh(ringGeo2, ringMat2);
  ring2.rotation.y = Math.PI / 4;
  coreGroup.add(ring2);

  const ringGeo3 = new THREE.TorusGeometry(6.4, 0.02, 16, 100);
  const ringMat3 = new THREE.MeshBasicMaterial({ color: 0x4facfe, transparent: true, opacity: 0.5 });
  const ring3 = new THREE.Mesh(ringGeo3, ringMat3);
  ring3.rotation.z = Math.PI / 6;
  coreGroup.add(ring3);

  // 4. Undulating Cyber Grid Floor (Data Matrix Plane)
  const gridWidth = 80;
  const gridHeight = 80;
  const gridSegments = 40;
  const gridGeo = new THREE.PlaneGeometry(gridWidth, gridHeight, gridSegments, gridSegments);
  const gridMat = new THREE.MeshBasicMaterial({
    color: 0x00f2fe,
    wireframe: true,
    transparent: true,
    opacity: 0.18
  });
  const gridMesh = new THREE.Mesh(gridGeo, gridMat);
  gridMesh.rotation.x = -Math.PI / 2.2;
  gridMesh.position.y = -6;
  scene.add(gridMesh);

  // Store original grid vertices for wave animation
  const gridPosAttr = gridGeo.attributes.position;
  const originalZPositions = new Float32Array(gridPosAttr.count);
  for (let i = 0; i < gridPosAttr.count; i++) {
    originalZPositions[i] = gridPosAttr.getZ(i);
  }

  // 5. Ambient Data Constellation Particles
  const particleCount = 700;
  const particleGeo = new THREE.BufferGeometry();
  const particlePositions = new Float32Array(particleCount * 3);
  const particleColors = new Float32Array(particleCount * 3);

  const colorCyan = new THREE.Color(0x00f2fe);
  const colorPurple = new THREE.Color(0x7928ca);
  const colorBlue = new THREE.Color(0x4facfe);

  for (let i = 0; i < particleCount; i++) {
    particlePositions[i * 3] = (Math.random() - 0.5) * 50;
    particlePositions[i * 3 + 1] = (Math.random() - 0.5) * 40;
    particlePositions[i * 3 + 2] = (Math.random() - 0.5) * 35;

    const chosenColor = Math.random() > 0.6 ? colorCyan : Math.random() > 0.3 ? colorPurple : colorBlue;
    particleColors[i * 3] = chosenColor.r;
    particleColors[i * 3 + 1] = chosenColor.g;
    particleColors[i * 3 + 2] = chosenColor.b;
  }

  particleGeo.setAttribute('position', new THREE.BufferAttribute(particlePositions, 3));
  particleGeo.setAttribute('color', new THREE.BufferAttribute(particleColors, 3));

  const particleMat = new THREE.PointsMaterial({
    size: 0.12,
    vertexColors: true,
    transparent: true,
    opacity: 0.75,
    blending: THREE.AdditiveBlending
  });

  const particleSystem = new THREE.Points(particleGeo, particleMat);
  scene.add(particleSystem);

  // Lighting
  const ambientLight = new THREE.AmbientLight(0xffffff, 0.4);
  scene.add(ambientLight);

  const cyanPointLight = new THREE.PointLight(0x00f2fe, 3, 30);
  cyanPointLight.position.set(5, 5, 8);
  scene.add(cyanPointLight);

  const purplePointLight = new THREE.PointLight(0x7928ca, 3, 30);
  purplePointLight.position.set(-5, -5, 6);
  scene.add(purplePointLight);

  // Mouse Parallax & Scroll Interaction
  let mouseX = 0;
  let mouseY = 0;
  let targetX = 0;
  let targetY = 0;
  let scrollY = 0;

  window.addEventListener('mousemove', (e) => {
    const halfW = window.innerWidth / 2;
    const halfH = window.innerHeight / 2;
    mouseX = (e.clientX - halfW) / halfW;
    mouseY = (e.clientY - halfH) / halfH;
  });

  window.addEventListener('scroll', () => {
    scrollY = window.scrollY;
  });

  // Pulse effect on click
  window.addEventListener('click', () => {
    innerMat.emissiveIntensity = 2.2;
    setTimeout(() => {
      innerMat.emissiveIntensity = 0.8;
    }, 300);
  });

  // Resize handling
  window.addEventListener('resize', () => {
    if (!container) return;
    camera.aspect = container.clientWidth / container.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(container.clientWidth, container.clientHeight);
  });

  // Animation Loop
  let clock = new THREE.Clock();

  function animate() {
    requestAnimationFrame(animate);

    const elapsedTime = clock.getElapsedTime();

    // Smooth mouse lerp
    targetX += (mouseX - targetX) * 0.05;
    targetY += (mouseY - targetY) * 0.05;

    // Core Rotation
    outerIco.rotation.x = elapsedTime * 0.2 + targetY * 0.5;
    outerIco.rotation.y = elapsedTime * 0.25 + targetX * 0.5;

    innerCore.rotation.x = -elapsedTime * 0.35;
    innerCore.rotation.y = -elapsedTime * 0.4;

    ring1.rotation.x += 0.01;
    ring1.rotation.y += 0.015;

    ring2.rotation.y -= 0.012;
    ring2.rotation.z += 0.008;

    ring3.rotation.z -= 0.01;
    ring3.rotation.x += 0.007;

    // Floating Core Movement
    coreGroup.position.y = Math.sin(elapsedTime * 1.5) * 0.35 - (scrollY * 0.004);
    coreGroup.position.x = targetX * 1.5;

    // Camera subtle tilt
    camera.position.x = targetX * 1.2;
    camera.position.y = 2 - targetY * 1.0 - (scrollY * 0.003);
    camera.lookAt(0, 0, 0);

    // Dynamic wave animation for grid floor
    for (let i = 0; i < gridPosAttr.count; i++) {
      const u = gridPosAttr.getX(i);
      const v = gridPosAttr.getY(i);
      const wave = Math.sin(u * 0.2 + elapsedTime * 1.5) * Math.cos(v * 0.2 + elapsedTime * 1.5) * 0.7;
      gridPosAttr.setZ(i, originalZPositions[i] + wave);
    }
    gridPosAttr.needsUpdate = true;

    // Particles gentle drift
    particleSystem.rotation.y = elapsedTime * 0.03;
    particleSystem.rotation.x = elapsedTime * 0.015;

    renderer.render(scene, camera);
  }

  animate();
}
