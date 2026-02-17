<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>For Aprilia 💖</title>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Playfair+Display:ital,wght@0,700;1,400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
:root {
  --pink: #ff2d55;
  --pink-glow: rgba(255, 45, 85, 0.6);
  --glass: rgba(255, 255, 255, 0.1);
}

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
  background: #050505;
  overflow: hidden;
  height: 100vh;
  color: white;
  font-family: 'Poppins', sans-serif;
}

/* ================= LOCK SCREEN ================= */
#lock {
  position: fixed; inset: 0;
  display: flex; flex-direction: column; justify-content: center; align-items: center;
  background: radial-gradient(circle, #1a1a1a 0%, #000 100%);
  z-index: 100; transition: opacity 0.8s ease-in-out;
}
#lock h2 { font-family: 'Playfair Display'; margin-bottom: 20px; letter-spacing: 2px; color: var(--pink); }
#lock input {
  padding: 12px; width: 250px; text-align: center;
  background: var(--glass); border: 1px solid var(--pink);
  color: white; border-radius: 15px; backdrop-filter: blur(5px);
  margin-bottom: 15px; outline: none;
}
#lock button {
  padding: 10px 40px; border-radius: 20px; border: none;
  background: var(--pink); color: white; cursor: pointer;
  font-weight: 600; box-shadow: 0 0 20px var(--pink-glow);
}

/* ================= BACKGROUND & CANVAS ================= */
canvas#rain { position: fixed; inset: 0; z-index: -1; opacity: 0.5; }

/* ================= SLIDES ================= */
.slide {
  position: absolute; inset: 0;
  display: none; flex-direction: column; align-items: center; justify-content: center;
  text-align: center; padding: 20px;
}
.slide.active { display: flex; animation: zoomIn 0.8s ease-out; }

@keyframes zoomIn {
  from { opacity: 0; transform: scale(0.9); filter: blur(10px); }
  to { opacity: 1; transform: scale(1); filter: blur(0); }
}

/* ================= 3D HEART ================= */
.heart-container {
  width: 250px; filter: drop-shadow(0 0 40px var(--pink-glow));
  animation: heartBeat 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
  transform-origin: center; margin-bottom: 20px;
}
@keyframes heartBeat {
  0%, 100% { transform: scale(1); }
  15% { transform: scale(1.15); }
  30% { transform: scale(1.05); }
  45% { transform: scale(1.3); }
}

/* ================= PHOTO & GIF ================= */
#photo {
  width: 180px; height: 180px; border-radius: 50%;
  object-fit: cover; border: 3px solid white;
  box-shadow: 0 0 30px var(--pink-glow); margin-bottom: 20px;
}

.gif-happy {
  width: 250px; border-radius: 15px;
  box-shadow: 0 0 40px var(--pink-glow);
  margin-bottom: 20px;
}

/* ================= RING ================= */
#ring {
  font-size: 110px; filter: drop-shadow(0 0 30px gold);
  animation: float 3s infinite ease-in-out; margin-bottom: 20px;
}
@keyframes float {
  0%, 100% { transform: translateY(0) rotate(0); }
  50% { transform: translateY(-20px) rotate(-10deg); }
}

/* ================= TEXT ================= */
.text-container { max-width: 650px; padding: 0 20px; position: relative; z-index: 10; }
.salutation { font-family: 'Dancing Script', cursive; font-size: 42px; color: var(--pink); margin-bottom: 15px; }
.message { font-size: 20px; line-height: 1.8; font-weight: 300; margin-bottom: 10px; text-shadow: 0 2px 10px rgba(0,0,0,0.5); }

/* ================= BUTTONS ================= */
.next-btn {
  margin-top: 30px; padding: 12px 45px;
  background: var(--glass); border: 1px solid white;
  color: white; border-radius: 50px; cursor: pointer;
  backdrop-filter: blur(10px); transition: 0.3s;
  letter-spacing: 2px; text-transform: uppercase; font-size: 14px;
}
.next-btn:hover { background: white; color: var(--pink); box-shadow: 0 0 20px white; }

.choice-container { position: relative; width: 100%; height: 150px; margin-top: 40px; z-index: 20; }
#yes { 
  background: linear-gradient(45deg, #ff4fa3, #ff89d6); color: white; border: none; 
  padding: 15px 60px; border-radius: 50px; font-size: 22px; font-weight: 600;
  cursor: pointer; box-shadow: 0 0 30px #ff4fa3; transition: 0.3s;
}
#no {
  position: absolute; padding: 10px 30px;
  background: transparent; border: 2px solid var(--pink);
  color: var(--pink); border-radius: 50px; cursor: pointer;
}

canvas#fw { position: absolute; inset: 0; pointer-events: none; z-index: 1; }

/* Rotating Hearts */
.rotating-hearts {
  font-size: 30px; animation: rotateLope 3s linear infinite;
  display: inline-block; margin: 0 10px;
}
@keyframes rotateLope {
  from { transform: rotate(0deg) translateY(-20px); }
  to { transform: rotate(360deg) translateY(-20px); }
}

/* ================= PHOTO GALLERY SLIDE 5 ================= */
#s5 {
  background: url('taman_bunga_bg.jpg') center/cover no-repeat fixed; /* Ganti dengan nama file background taman bunga Anda */
  overflow: hidden; /* Mengatasi scroll ganda */
  flex-direction: column; /* Konten di tengah vertikal */
}

.gallery-wrapper {
  position: relative;
  width: 90%; /* Lebar galeri */
  max-width: 900px; /* Batasi lebar maksimal */
  height: 70vh; /* Tinggi galeri relatif terhadap viewport */
  display: flex;
  align-items: center;
  overflow: hidden; /* Sembunyikan foto di luar viewport */
  border-radius: 20px;
  box-shadow: 0 0 60px rgba(0,0,0,0.5);
}

.photo-container {
  display: flex;
  height: 100%;
  transition: transform 0.5s ease-in-out; /* Animasi geser */
}

.gallery-photo {
  flex: 0 0 100%; /* Setiap foto mengambil 100% lebar container */
  width: 100%; /* Memastikan gambar memenuhi ruang */
  height: 100%;
  object-fit: contain; /* Memastikan foto terlihat penuh tanpa terpotong */
  border-radius: 20px;
  background-color: rgba(0,0,0,0.3); /* Background gelap jika foto tidak penuh */
}

.gallery-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 255, 255, 0.3);
  border: none;
  color: white;
  font-size: 30px;
  padding: 10px 15px;
  border-radius: 50%;
  cursor: pointer;
  z-index: 10;
  backdrop-filter: blur(5px);
  transition: background 0.3s ease;
}
.gallery-nav:hover { background: rgba(255, 255, 255, 0.6); }

#prevBtn { left: 10px; }
#nextGalBtn { right: 10px; }

#galeriTitle {
  font-family: 'Playfair Display', serif;
  font-size: 36px;
  color: white;
  margin-bottom: 20px;
  text-shadow: 0 5px 15px rgba(0,0,0,0.4);
}
</style>
</head>
<body>

<audio id="music" src="romantis.mp3" loop></audio>
<audio id="musicHappy" src="senang.mp3" loop></audio>
<audio id="beat" src="heartbeat.mp3"></audio>

<div id="lock">
  <h2>🔒 For Aprilia</h2>
  <input id="pass" placeholder="Password: aprilia" type="password">
  <button onclick="unlock()">Buka Hati</button>
</div>

<canvas id="rain"></canvas>

<div class="slide active" id="s1">
  <div class="heart-container">
    <svg viewBox="0 0 512 512">
      <defs>
        <radialGradient id="g" cx="35%" cy="35%" r="50%">
          <stop offset="0%" stop-color="#ff7676"/><stop offset="100%" stop-color="#800000"/>
        </radialGradient>
      </defs>
      <path fill="url(#g)" d="M256 473.85L225.25 445.85C116.2 347.05 44 281.55 44 201.3C44 135.55 95.55 84 161.3 84C198.4 84 234.1 101.3 256 128.55C277.9 101.3 313.6 84 350.7 84C416.45 84 468 135.55 468 201.3C468 281.55 395.8 347.05 286.75 446.1L256 473.85Z"/>
    </svg>
  </div>
  <img id="photo" src="foto.jpeg" alt="Aprilia">
  <button class="next-btn" onclick="next(1)">Next 💖</button>
</div>

<div class="slide" id="s2">
  <div id="ring">💍</div>
  <div class="text-container">
    <h2 class="salutation">Aprilia sayang,</h2>
    <p class="message">Dari semua kemungkinan perrjalanan,<br>aku memilih kamu.</p>
    <p class="message" style="font-weight: 600; color: var(--pink);">Bukan untuk sementara,<br>semoga untuk selamanya.</p>
  </div>
  <button class="next-btn" onclick="next(2)">Maukah kamu?</button>
</div>

<div class="slide" id="s3">
  <canvas id="fw"></canvas>
  <div class="text-container" style="pointer-events: none;">
    <h2 class="salutation" style="font-size: 48px;">Maukah kamu menjadi pasanganku?</h2>
  </div>
  <div class="choice-container">
    <button id="yes" onclick="answerYes()">IYA! 💍💖</button>
    <button id="no" onmouseover="moveNo()" onmousedown="moveNo()">Tidak</button>
  </div>
</div>

<div class="slide" id="s4">
  <div class="text-container">
    <h2 class="salutation">YEEEAAAYYY! 😍</h2>
    <div>
        <span class="rotating-hearts">💕</span>
        <span class="rotating-hearts">💖</span>
        <span class="rotating-hearts">💗</span>
    </div>
  </div>
  <img src="https://c.tenor.com/pc2YyWdFFUgAAAAC/dancing.gif" class="gif-happy" alt="Joget Bahagia">
  <div class="text-container">
    <p class="message">Makasih ya sayang sudah milih aku... <br> I Love You So Much, cantiik! ✨</p>
  </div>
  <button class="next-btn" onclick="next(4)">Lihat Kenangan Kita 🥰</button>
</div>

<div class="slide" id="s5">
  <h2 id="galeriTitle">Kenangan Indah Kita</h2>
  <div class="gallery-wrapper">
    <button id="prevBtn" class="gallery-nav" onclick="changePhoto(-1)">&#10094;</button>
    <div class="photo-container" id="photoContainer">
      <img src="foto1.jpeg" class="gallery-photo" alt="Foto 1">
      <img src="foto2.jpeg" class="gallery-photo" alt="Foto 2">
      <img src="foto3.jpeg" class="gallery-photo" alt="Foto 3">
      <img src="foto4.jpeg" class="gallery-photo" alt="Foto 4">
      <img src="foto5.jpeg" class="gallery-photo" alt="Foto 5">
    </div>
    <button id="nextGalBtn" class="gallery-nav" onclick="changePhoto(1)">&#10095;</button>
  </div>
</div>


<script>
const PASSWORD = "aprilia";
const music = document.getElementById("music");
const musicHappy = document.getElementById("musicHappy");
const heartbeatSound = document.getElementById("beat");
let fireworks = [];
let currentPhotoIndex = 0;
const photos = ["foto1.jpeg", "foto2.jpeg", "foto3.jpeg", "foto4.jpeg", "foto5.jpeg"];

function unlock() {
  const passInput = document.getElementById("pass").value.toLowerCase();
  if(passInput === PASSWORD) {
    document.getElementById("lock").style.opacity = "0";
    setTimeout(() => {
      document.getElementById("lock").style.display = "none";
      music.volume = 0; music.play();
      let v = 0;
      let fade = setInterval(() => { if(v < 1) { v += 0.05; music.volume = v; } else { clearInterval(fade); } }, 100);
      heartbeatSound.play();
      setInterval(() => { heartbeatSound.currentTime = 0; heartbeatSound.play(); }, 1200);
      startRain();
    }, 800);
  } else { alert("Password salah 😢"); }
}

function next(n) {
  document.getElementById("s"+n).classList.remove("active");
  document.getElementById("s"+(n+1)).classList.add("active");
  if(n === 2) { // Kembang api hanya untuk slide 3
    const fwc = document.getElementById("fw");
    fwc.width = window.innerWidth; fwc.height = window.innerHeight;
    startFirework();
  }
  if (n === 4) { // Setelah slide 4 (joget), inisialisasi galeri
    updateGalleryPosition(); // Set posisi awal galeri
  }
}

function answerYes() {
  const pesan = "Iya sayang, aku mau jadi pasanganmu! 💍💖✨";
  const nomorWA = "6285335704514";
  const urlWA = `https://api.whatsapp.com/send?phone=${nomorWA}&text=${encodeURIComponent(pesan)}`;
  window.open(urlWA, "_blank");

  music.pause();
  musicHappy.play();
  next(3); // Pindah ke slide 4 (joget)
}

function startRain() {
  const c = document.getElementById("rain");
  const ctx = c.getContext("2d");
  c.width = window.innerWidth; c.height = window.innerHeight;
  const drops = Array(100).fill(0);
  function draw() {
    ctx.fillStyle = "rgba(5, 5, 5, 0.1)"; ctx.fillRect(0, 0, c.width, c.height);
    ctx.fillStyle = "#ff2d55";
    drops.forEach((y, i) => { ctx.fillText("♥", i * 20, y); drops[i] = y > c.height ? 0 : y + 6; });
    requestAnimationFrame(draw);
  }
  draw();
}

function moveNo() {
  const no = document.getElementById("no");
  no.style.left = Math.random() * (window.innerWidth - 150) + "px";
  no.style.top = Math.random() * (window.innerHeight - 100) + "px";
}

function startFirework() {
  setInterval(() => {
    const fwc = document.getElementById("fw");
    const ox = Math.random() * fwc.width; const oy = Math.random() * fwc.height * 0.4;
    const color = `hsl(${Math.random()*360}, 100%, 60%)`;
    for(let i=0; i<40; i++) { fireworks.push({ x: ox, y: oy, vx: (Math.random()-0.5)*12, vy: (Math.random()-0.5)*12, color: color, life: 60, alpha: 1 }); }
  }, 800);
  updateFireworks();
}

function updateFireworks() {
  const fwc = document.getElementById("fw"); const fwctx = fwc.getContext("2d");
  fwctx.fillStyle = "rgba(5, 5, 5, 0.2)"; fwctx.fillRect(0, 0, fwc.width, fwc.height);
  fireworks.forEach((p, i) => {
    p.x += p.vx; p.y += p.vy; p.vy += 0.15; p.life--; p.alpha -= 0.02;
    fwctx.fillStyle = p.color.replace(")", `,${p.alpha})`).replace("hsl","hsla");
    fwctx.beginPath(); fwctx.arc(p.x, p.y, 2, 0, Math.PI * 2); fwctx.fill();
    if(p.life <= 0 || p.alpha <= 0) fireworks.splice(i, 1);
  });
  requestAnimationFrame(updateFireworks);
}

// Fungsi untuk galeri foto
function changePhoto(direction) {
  const photoContainer = document.getElementById("photoContainer");
  currentPhotoIndex += direction;

  if (currentPhotoIndex < 0) {
    currentPhotoIndex = photos.length - 1;
  } else if (currentPhotoIndex >= photos.length) {
    currentPhotoIndex = 0;
  }
  updateGalleryPosition();
}

function updateGalleryPosition() {
  const photoContainer = document.getElementById("photoContainer");
  const slideWidth = photoContainer.children[0].clientWidth; // Lebar 1 foto
  photoContainer.style.transform = `translateX(-${currentPhotoIndex * slideWidth}px)`;
}

// Memastikan galeri menyesuaikan saat ukuran layar berubah (opsional, tapi bagus)
window.addEventListener('resize', updateGalleryPosition);
</script>
</body>
</html>