<?php
$photos = [
  ['file' => 'assets/foto1.jpeg', 'caption' => 'Senyum yang bikin hari lebih indah ♡'],
  ['file' => 'assets/foto2.jpeg', 'caption' => 'Satu foto, banyak cerita ✨'],
  ['file' => 'assets/foto3.jpeg', 'caption' => 'Tetap jadi diri sendiri, ya 🌷'],
  ['file' => 'assets/foto4.jpeg', 'caption' => 'Satu kenangan lagi untuk disimpan ♡'],
];
function e($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#fff0f5">
<title>Hallo bil buka website ini ya. ♡</title>
<style>
:root{--pink:#f7b8ce;--rose:#c85c85;--deep:#8e4567;--cream:#fff9fb;--lav:#f1e8ff;--ink:#694858}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;color:var(--ink);font-family:Georgia,'Times New Roman',serif;background:radial-gradient(circle at 15% 10%,#fff 0,transparent 30%),linear-gradient(145deg,#fff7fa,#ffe7f0 48%,#f6edff);overflow-x:hidden}
body:before{content:"";position:fixed;inset:0;pointer-events:none;z-index:4;background:linear-gradient(115deg,transparent 0%,#ffffff20 35%,transparent 52%),radial-gradient(ellipse at 50% 0%,#fff9 0,transparent 55%);mix-blend-mode:screen;opacity:.7}
.aurora{position:fixed;inset:-25%;z-index:-1;pointer-events:none;opacity:.42;filter:blur(42px);background:conic-gradient(from 90deg at 50% 50%,#ffc8dc55,#e7d4ff66,#fff8fc,#ffb9d355,#ffc8dc55);animation:aurora 22s ease-in-out infinite alternate}
.light-orb{position:fixed;width:180px;height:180px;border-radius:50%;pointer-events:none;z-index:0;background:radial-gradient(circle,#fff9 0,#ffd8e866 28%,transparent 72%);filter:blur(5px);animation:orbDrift 16s ease-in-out infinite alternate}
.petal{position:fixed;top:-35px;z-index:5;pointer-events:none;opacity:.75;animation:petalFall linear forwards;filter:drop-shadow(0 2px 4px #d78ca533)}
.glint{position:fixed;z-index:5;pointer-events:none;color:#fff;font-size:14px;text-shadow:0 0 10px #d884a9;animation:glint 2.4s ease-in-out infinite}
.shooting-star{position:fixed;top:15%;left:-15%;z-index:5;width:110px;height:2px;pointer-events:none;background:linear-gradient(90deg,transparent,#fff,#efb6d0,transparent);filter:drop-shadow(0 0 5px #e4a0c1);transform:rotate(-25deg);animation:shoot 8s ease-in-out infinite}
.heart-burst{position:fixed;z-index:20;pointer-events:none;animation:burst 1.4s ease-out forwards}

button{font:inherit;cursor:pointer}
.hero{min-height:100svh;display:grid;place-items:center;text-align:center;padding:70px 20px 55px;position:relative;isolation:isolate}
.hero:before,.hero:after{content:"";position:absolute;border-radius:50%;filter:blur(2px);z-index:-1;opacity:.55}
.hero:before{width:260px;height:260px;background:#ffd5e4;top:8%;left:-95px}
.hero:after{width:320px;height:320px;background:#eadcff;bottom:3%;right:-130px}
.eyebrow{letter-spacing:.22em;text-transform:uppercase;font:11px Arial,sans-serif;color:#b96b8b}
h1{font-size:clamp(42px,9vw,86px);font-weight:normal;line-height:.98;margin:18px 0;color:#a94f76}
h1 span{display:block;font-style:italic;color:#d37f9e;font-size:.78em;margin-top:12px}
.subtitle{font:14px/1.8 Arial,sans-serif;max-width:470px;margin:22px auto;color:#93677a}
.flower{font-size:28px;letter-spacing:12px;margin:12px 0}
.pill{border:1px solid #e7a7bf;border-radius:999px;background:#fff9fccc;color:#a34e75;padding:13px 22px;box-shadow:0 8px 24px #d98eac2b;transition:.25s}
.pill:hover{transform:translateY(-3px);background:white}
.section{padding:72px 18px;max-width:1000px;margin:auto}
.section-title{text-align:center;font-weight:normal;font-size:clamp(28px,6vw,42px);color:#a94f76;margin:0 0 12px}
.section-sub{text-align:center;font:13px/1.8 Arial,sans-serif;color:#a47889;margin:0 auto 34px;max-width:500px}
.gallery{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px;max-width:760px;margin:auto}
.photo{background:#fffdfd;padding:10px 10px 20px;border-radius:5px;box-shadow:0 12px 32px #b96b8b21;transform:rotate(var(--tilt));transition:transform .3s,box-shadow .3s}
.photo:hover{transform:rotate(0) translateY(-5px);box-shadow:0 18px 35px #b96b8b38}
.photo img{display:block;width:100%;aspect-ratio:4/5;object-fit:cover;border-radius:3px;background:#fae4ed}
.photo p{text-align:center;margin:13px 3px 0;font-size:14px;color:#9b5d76}
.photo .placeholder{aspect-ratio:4/5;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;background:linear-gradient(145deg,#fff0f5,#f2e8ff);color:#b87995;padding:14px}
.placeholder b{font-size:46px;font-weight:normal}.placeholder span{font:12px/1.7 Arial,sans-serif;margin-top:10px}
.note{max-width:680px;margin:0 auto;background:#fffafcbb;border:1px solid #f4d4e0;border-radius:24px;padding:clamp(24px,5vw,48px);box-shadow:0 20px 60px #c782a51a;position:relative}
.note:before{content:"❀";position:absolute;right:20px;top:12px;font-size:26px;color:#e8a4bd}
.note h3{text-align:center;font-size:30px;font-weight:normal;color:#b35e81;margin:0 0 24px}
.note p{font-size:16px;line-height:1.95;margin:0 0 15px}
.signature{text-align:right!important;color:#b35e81;font-style:italic}
.surprise{text-align:center;padding:20px 0 80px}
.hidden-message{display:none;max-width:550px;margin:22px auto 0;padding:24px;border-radius:20px;background:#fffafc;border:1px solid #f4d4e0;line-height:1.9;animation:appear .7s ease both}
.hidden-message.show{display:block}
footer{text-align:center;padding:28px 15px 40px;color:#b47a91;font:12px Arial,sans-serif}
.float{position:fixed;pointer-events:none;z-index:5;bottom:-35px;opacity:0;animation:floatUp linear forwards;color:#e7a0bc;text-shadow:0 2px 8px #fff}
.sparkle{position:absolute;animation:twinkle 3s ease-in-out infinite;color:#d99ab3}
@keyframes floatUp{0%{transform:translateY(0) rotate(0);opacity:0}10%{opacity:.8}90%{opacity:.65}100%{transform:translateY(-110vh) rotate(35deg);opacity:0}}
@keyframes twinkle{0%,100%{opacity:.35;transform:scale(.8)}50%{opacity:1;transform:scale(1.15)}}
@keyframes appear{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
@keyframes petalFall{0%{transform:translate3d(0,-5vh,0) rotate(0deg);opacity:0}10%{opacity:.8}50%{transform:translate3d(35px,50vh,0) rotate(180deg)}100%{transform:translate3d(-25px,110vh,0) rotate(440deg);opacity:0}}
@keyframes aurora{0%{transform:translate(-3%,-2%) rotate(0) scale(1)}100%{transform:translate(3%,2%) rotate(18deg) scale(1.12)}}
@keyframes orbDrift{0%{transform:translate3d(-4vw,0,0) scale(.8)}100%{transform:translate3d(12vw,10vh,0) scale(1.25)}}
@keyframes glint{0%,100%{opacity:0;transform:scale(.5) rotate(0)}50%{opacity:1;transform:scale(1.2) rotate(45deg)}}
@keyframes shoot{0%,68%,100%{transform:translate(-20vw,-5vh) rotate(-25deg);opacity:0}72%{opacity:1}82%{transform:translate(130vw,45vh) rotate(-25deg);opacity:0}}
@keyframes burst{0%{transform:translate(0,0) scale(.3);opacity:0}20%{opacity:1}100%{transform:translate(var(--dx),var(--dy)) scale(1.3) rotate(var(--rot));opacity:0}}

@media(min-width:650px){.gallery{grid-template-columns:repeat(4,minmax(0,1fr));gap:15px}.photo:nth-child(even){margin-top:24px}}
@media(max-width:420px){.gallery{gap:12px}.photo{padding:7px 7px 15px}.photo p{font-size:12px}.section{padding:56px 14px}}
@media(prefers-reduced-motion:reduce){*,*:before,*:after{animation-duration:.01ms!important;scroll-behavior:auto!important;transition:none!important}}
</style>
</head>
<body>
    <!-- Tombol musik ulang tahun -->
<div class="music-control">
  <button id="musicBtn"> ▶ Putar Musik </button>
  <audio id="bgMusic" loop preload="none">
    <source
      src="https://www.image2url.com/r2/default/audio/1792738529875-82532ddb-1632-4396-8283-a5228d95aae8.mp3"
      type="audio/mpeg"
    >
  </audio>
</div>

<style>
.music-control {
  position: fixed;
  right: 16px;
  bottom: 20px;
  z-index: 9999;
}

.music-control button {
  background: #fff0f6;
  color: #c05283;
  border: 1px solid #f2b5ce;
  border-radius: 30px;
  padding: 12px 18px;
  cursor: pointer;
  box-shadow: 0 4px 15px #d98eac55;
  font-size: 14px;
}
</style>

<script>
const music = document.getElementById('bgMusic');
const musicBtn = document.getElementById('musicBtn');

musicBtn.addEventListener('click', async () => {
  if (music.paused) {
    try {
      await music.play();
      musicBtn.textContent = '⏸ Jeda Musik';
    } catch (error) {
      alert('Musik gagal diputar. Periksa link MP3 kamu.');
    }
  } else {
    music.pause();
    musicBtn.textContent = ' ▶ Putar Musik';
  }
});
</script>

<script>
const music = document.getElementById("bgMusic");
const btn = document.getElementById("musicBtn");

function toggleMusic() {
    if (music.paused) {
        music.play();
        btn.textContent = "⏸ Pause Music ";
    } else {
        music.pause();
        btn.textContent = "▶️ Play Music ";
    }
}
</script>
<div class="aurora"></div>
<div class="light-orb" style="top:10%;left:-50px"></div>
<div class="light-orb" style="top:48%;right:-70px;animation-delay:-7s;width:220px;height:220px"></div>
<div class="shooting-star"></div>
<section class="hero">
  <span class="sparkle" style="top:16%;left:16%">✦</span><span class="sparkle" style="top:24%;right:15%;animation-delay:1s">✧</span>
  <div>
    <div class="eyebrow">a little page made with love</div>
    <div class="flower">🌷 ♡ 🌸</div>
    <h1>Happy Birthday EX,<span>Nabila Dwi Latifah</span></h1>
    <p class="subtitle">Selamat datang di hari spesialmu. Semoga usia ke-19 membawa lebih banyak alasan untuk tersenyum, hal-hal baik,mimpi yang satu per satu jadi nyata,
        Dan jangan pernah melupakan bahhwa aku mencintaimu.
    </p>
    <button class="pill" onclick="document.getElementById('gallery').scrollIntoView({behavior:'smooth'})">Buka hadiah kecil ini ↓</button>
    <div style="margin-top:22px;font-size:13px;color:#c17a97">♡ 19 & blooming ♡</div>
  </div>
</section>

<section class="section" id="gallery">
  <h2 class="section-title">Little moments, lovely you</h2>
  <p class="section-sub">Semoga tiap foto menyimpan cerita yang bikin kamu tersenyum Dan selalu hadir Didunia menerangi hari-hari semua umat. </p>
  <div class="gallery">
  <?php foreach ($photos as $i => $photo): ?>
    <div class="photo" style="--tilt:<?= $i % 2 ? '1.6deg' : '-1.6deg' ?>">
      <?php if (file_exists(__DIR__ . '/' . $photo['file'])): ?>
        <img src="<?= e($photo['file']) ?>" alt="Foto kenangan <?= $i + 1 ?>" loading="lazy">
      <?php else: ?>
        <div class="placeholder"><b>♡</b><span>Slot foto keempat<br>Tambahkan foto4.jpg<br>ke folder assets</span></div>
      <?php endif; ?>
      <p><?= e($photo['caption']) ?></p>
    </div>
  <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="note">
    <h3>Untuk Nabila, ♡</h3>
    <p>Happy sweet 19th birthday, Nabila! 🌸</p>
    <p>Semoga di umur kamu yang baru ini (nineteen)th, kamu selalu dikelilingi orang-orang yang tulus, dipertemukan dengan banyak hal baik, dan diberi keberanian buat mengejar semua yang kamu impikan.</p>
    <p>Kalau suatu hari dunia terasa melelahkan, semoga kamu tetap ingat kalau kamu berharga, kamu pantas bahagia, dan kamu nggak harus selalu kuat setiap waktu. Pelan-pelan juga not father.</p>
    <p>Terima kasih sudah jadi dirimu sendiri. Semoga senyummu punya lebih banyak alasan untuk hadir, dan semoga tahun ini menyimpan banyak cerita indah yang belum kamu bayangkan.</p>
    <p class="signature">To Dimzy from EX,<br>seseorang yang ingin hari ini terasa spesial ♡</p>
  </div>
</section>

<section class="surprise">
  <div class="flower">💌 🌷 💗</div>
  <h2 class="section-title">One last little wish</h2>
  <p class="section-sub">Ada satu kejutan kecil lagi untuk kamu.</p>
  <button class="pill" id="surpriseBtn" onclick="showSurprise()">Tekan untuk kejutan ♡</button>
  <div class="hidden-message" id="hiddenMessage">
    <div style="font-size:34px">🎂✨💐</div>
    <strong>Make a wish, Nabila!</strong><br>
    Semoga hal-hal yang kamu doakan diam-diam menemukan jalannya. Jangan lupa bahagia, jangan berhenti bermimpi, dan tetap mekar dengan caramu sendiri. Happy birthday, pretty soul! ♡
  </div>
</section>
<footer>Dibuat dengan hangat, khusus untuk hari spesial Nabila · 19 ♡</footer>
<script>
function floatHeart(){
  const el=document.createElement('span');el.className='float';
  const chars=['♡','♥','✿','✧','🌸'];el.textContent=chars[Math.floor(Math.random()*chars.length)];
  el.style.left=(Math.random()*100)+'vw';el.style.fontSize=(14+Math.random()*17)+'px';
  el.style.animationDuration=(7+Math.random()*6)+'s';document.body.appendChild(el);
  setTimeout(()=>el.remove(),14000);
}
setInterval(floatHeart,700);
function makePetal(){
  const p=document.createElement('span');p.className='petal';
  p.textContent=['🌸','✿','❀','♡','🌷'][Math.floor(Math.random()*5)];
  p.style.left=Math.random()*100+'vw';p.style.fontSize=(12+Math.random()*18)+'px';
  p.style.animationDuration=(9+Math.random()*10)+'s';p.style.opacity=(.35+Math.random()*.5);
  document.body.appendChild(p);setTimeout(()=>p.remove(),20000);
}
setInterval(makePetal,520);
function makeGlint(){
  const s=document.createElement('span');s.className='glint';s.textContent=['✦','✧','·','✴'][Math.floor(Math.random()*4)];
  s.style.left=Math.random()*100+'vw';s.style.top=Math.random()*100+'vh';s.style.animationDelay=(Math.random()*2)+'s';
  document.body.appendChild(s);setTimeout(()=>s.remove(),2800);
}
setInterval(makeGlint,650);
document.addEventListener('pointerdown',function(ev){
  for(let i=0;i<7;i++){
    const h=document.createElement('span');h.className='heart-burst';h.textContent=['♡','💗','✧'][Math.floor(Math.random()*3)];
    h.style.left=ev.clientX+'px';h.style.top=ev.clientY+'px';
    h.style.setProperty('--dx',((Math.random()-.5)*150)+'px');h.style.setProperty('--dy',(-30-Math.random()*130)+'px');
    h.style.setProperty('--rot',((Math.random()-.5)*80)+'deg');h.style.fontSize=(12+Math.random()*16)+'px';
    document.body.appendChild(h);setTimeout(()=>h.remove(),1500);
  }
});
function showSurprise(){
  document.getElementById('hiddenMessage').classList.add('show');
  document.getElementById('surpriseBtn').textContent='Semoga kamu bahagia selalu ♡';
  for(let i=0;i<65;i++){setTimeout(()=>{const e=document.createElement('span');e.className='float';e.textContent=['💗','✨','🌸','♡','🌷','✧'][Math.floor(Math.random()*6)];e.style.left=Math.random()*100+'vw';e.style.fontSize=(16+Math.random()*24)+'px';e.style.animationDuration=(4+Math.random()*4)+'s';document.body.appendChild(e);setTimeout(()=>e.remove(),9000)},i*45)}
}
</script>
</body>
</html>