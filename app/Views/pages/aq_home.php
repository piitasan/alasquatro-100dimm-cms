<?= $this->include('templates/aq_header') ?>

<section class="aq-hero">
  <div class="aq-hero-inner">
    <div class="aq-hero-title">100 Days in Metro Manila Trailer</div>

    <div class="aq-hero-frame">
      <video class="aq-hero-video" controls playsinline preload="metadata">
        <source src="/assets/videos/Alas%20Quatro%20-%20Intro.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</section>

<section class="aq-section-info">
  <div class="aq-section-inner">
    <h2 class="aq-section-title">100 DAYS IN METRO MANILA</h2>
    <p class="aq-section-desc">
      “100 Days in Metro Manila follows an ex-deity who has lost their mortality after angering the God of All, and is casted into a post-polluted Metro Manila as punishment where it is a world shaped by prolonged human neglect. The ex-deity must restore the devastated city within a limited timeframe of one hundred (100) days as an act of redemption.”
    </p>
    <a href="https://drive.google.com/file/d/1v7Ny2z94hJeSZwlJRWM18OCtoqu7SCPq/view?usp=drive_link" class="aq-download-btn" target="_blank" rel="noopener noreferrer">
      Download 100 Days in Metro Manila <span class="aq-download-arrow">→</span>
    </a>

    <div class="aq-video-block">
      <div class="aq-video-caption">The DEVS played 100 Days in Metro Manila | YouTube</div>
      <div class="aq-video-embed">
        <iframe
          src="https://www.youtube.com/embed/nNJkh92SwUk"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </div>
</section>

<section class="aq-section-docs">
  <div class="aq-section-inner">
    <div class="aq-docs-frame">
      <div class="aq-docs-header">
        <span>Game Design Document | Google Drive</span>
        <a href="/assets/documents/aq_gdd_v1.pdf" class="aq-docs-link" target="_blank" rel="noopener">
          <i class="bi bi-box-arrow-up-right"></i>
        </a>
      </div>

      <div class="aq-docs-body">
        <a href="/assets/documents/aq_gdd_v1.pdf" target="_blank" rel="noopener" class="aq-docs-preview">
          <img src="/assets/images/aq_logo.png" alt="Game Design Document Preview">
        </a>
      </div>
    </div>
  </div>
</section>

<?= $this->include('templates/aq_footer') ?>