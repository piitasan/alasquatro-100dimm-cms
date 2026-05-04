<?= $this->include('templates/aq_header') ?>

<section class="aq-hero">
  <div class="aq-hero-media" aria-hidden="true">
    <video class="aq-hero-trailer" preload="metadata" playsinline>
      <source src="/assets/videos/Alas%20Quatro%20-%20Intro.mp4" type="video/mp4">
    </video>
  </div>
  <div class="aq-hero-overlay" aria-hidden="true"></div>
  <div class="aq-hero-grain" aria-hidden="true"></div>
  <div class="aq-hero-content aq-container">
    <span class="aq-hero-kicker">OFFICIAL GAME TRAILER</span>
    <h1 class="aq-hero-title">
      <span>100 DAYS IN</span>
      METRO MANILA
    </h1>
    <button class="aq-hero-play" type="button" data-trailer-toggle aria-label="Play trailer">
      <i class="bi bi-play-fill"></i>
      <span class="aq-hero-pulse" aria-hidden="true"></span>
    </button>
    <p class="aq-hero-sub">Click to watch the trailer</p>
    <div class="aq-hero-scroll">
      <span>SCROLL</span>
      <i class="bi bi-chevron-down" aria-hidden="true"></i>
    </div>
  </div>
</section>

<section class="aq-game" id="trailer">
  <div class="aq-container aq-game-inner">
    <div class="aq-game-header">
      <span class="aq-kicker">FEATURED GAME</span>
      <h2 class="aq-section-title">100 DAYS IN METRO MANILA</h2>
      <div class="aq-divider" aria-hidden="true">
        <span></span>
        <span class="aq-divider-dot"></span>
        <span></span>
      </div>
    </div>

    <div class="aq-section-text">
      <p><em>100 Days in Metro Manila</em> is a mobile role-playing game set in a post-polluted version of Metro Manila, where you control an ex-deity tasked with restoring the city's air, water, and land ecosystems within 100 in-game days.</p>
      <p>Once a minor deity, <strong>Eba</strong> was cast down into a devastated Metro Manila by the God of All as punishment for defying divine order. Now mortal and stripped of power, she must earn her redemption by restoring three polluted ecosystems. Explore iconic locations inspired by <strong>Tondo</strong>, the <strong>Pasig River</strong>, and <strong>Sampaloc</strong>. Solve environmental puzzles, collect resources, and face monsters born from human neglect.</p>
      <p>A narrative-driven, action-adventure survival game exclusively for Android - inspired by the United Nations Sustainable Development Goals.</p>
    </div>

    <a href="https://drive.google.com/file/d/1v7Ny2z94hJeSZwlJRWM18OCtoqu7SCPq/view?usp=drive_link" class="aq-download" target="_blank" rel="noopener noreferrer">
      <i class="bi bi-download"></i>
      DOWNLOAD 100 DAYS IN METRO MANILA
      <i class="bi bi-arrow-right"></i>
    </a>

    <div class="aq-section-divider" aria-hidden="true"></div>

    <div class="aq-video">
      <p class="aq-video-caption">The DEVS Played 100 Days in Metro Manila | YouTube</p>
      <div class="aq-video-frame">
        <iframe
          src="https://www.youtube.com/embed/nNJkh92SwUk"
          title="The DEVS Played 100 Days in Metro Manila"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </div>
</section>

<section class="aq-docs" id="docs">
  <div class="aq-container">
    <div class="aq-docs-intro">
      <span class="aq-kicker">DOCUMENTATION</span>
      <h2 class="aq-section-title">GAME DESIGN DOCUMENT</h2>
      <p class="aq-section-desc">View the full game design document for 100 Days in Metro Manila</p>
    </div>

    <a href="/assets/documents/aq_gdd_v1.pdf" class="aq-doc-card" target="_blank" rel="noopener">
      <div class="aq-doc-card-top">
        <span><i class="bi bi-file-earmark-text"></i> Game Design Document | Google Drive</span>
      </div>
      <div class="aq-doc-card-body">
        <div class="aq-doc-preview">
          <div class="aq-doc-preview-header">
            <div>
              <h3>100 DAYS IN METRO MANILA</h3>
              <p>Game Design Document v1.0 - Alas Quatro</p>
            </div>
            <span class="aq-doc-badge"><i class="bi bi-geo-alt-fill"></i></span>
          </div>
          <div class="aq-doc-lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div class="aq-doc-card-cta">
        <span>VIEW GAME DESIGN DOCUMENT</span>
        <span class="aq-doc-card-note">Opens as PDF</span>
        <i class="bi bi-arrow-right"></i>
      </div>
      <div class="aq-doc-hover" aria-hidden="true">
        <div class="aq-doc-hover-icon"><i class="bi bi-eye"></i></div>
        <div class="aq-doc-hover-title">VIEW GAME DESIGN DOCUMENT</div>
        <div class="aq-doc-hover-note">Opens as PDF</div>
      </div>
    </a>
  </div>
</section>

<script>
  const heroSection = document.querySelector('.aq-hero');
  const trailerToggle = document.querySelector('[data-trailer-toggle]');
  const trailerVideo = document.querySelector('.aq-hero-trailer');

  if (heroSection && trailerToggle && trailerVideo) {
    trailerToggle.addEventListener('click', () => {
      heroSection.classList.add('aq-hero--playing');
      trailerVideo.currentTime = 0;
      trailerVideo.muted = false;
      trailerVideo.volume = 1;
      trailerVideo.play().catch(() => {});
    });

    trailerVideo.addEventListener('ended', () => {
      heroSection.classList.remove('aq-hero--playing');
    });
  }
</script>

<?= $this->include('templates/aq_footer') ?>