<?= $this->include('templates/aq_header') ?>

<section class="aq-signup">
  <div class="aq-signup-bg"></div>
  <div class="aq-signup-shell">
    <div class="aq-signup-brand">
      <div class="aq-signup-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M12 2C8 2 4 6 4 10c0 5 8 12 8 12s8-7 8-12c0-4-4-8-8-8z" fill="#D5BD98" opacity="0.9"/>
          <circle cx="12" cy="10" r="3" fill="#1A3635"/>
        </svg>
      </div>
      <h1>ALAS QUATRO</h1>
      <p>Create your account to access the Gallery</p>
    </div>

    <div class="aq-signup-card">
      <form class="aq-signup-form" novalidate>
        <div class="aq-signup-field">
          <label>USERNAME</label>
          <input type="text" placeholder="Choose a username" />
        </div>

        <div class="aq-signup-field">
          <label>EMAIL ADDRESS</label>
          <input type="email" placeholder="your@email.com" />
        </div>

        <div class="aq-signup-field">
          <label>PASSWORD</label>
          <div class="aq-signup-input-wrap">
            <input type="password" placeholder="At least 6 characters" />
            <button type="button" class="aq-signup-eye" aria-label="Toggle password">
              <i class="bi bi-eye"></i>
            </button>
          </div>
        </div>

        <div class="aq-signup-field">
          <label>CONFIRM PASSWORD</label>
          <div class="aq-signup-input-wrap">
            <input type="password" placeholder="Repeat your password" />
            <button type="button" class="aq-signup-eye" aria-label="Toggle password">
              <i class="bi bi-eye"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="aq-signup-submit">
          <i class="bi bi-person-plus"></i>
          CREATE ACCOUNT
        </button>
      </form>

      <p class="aq-signup-meta">
        Already have an account? <a href="/signin">Sign In</a>
      </p>
    </div>

    <div class="aq-signup-back">
      <a href="/">← Back to Home</a>
    </div>
  </div>
</section>

<?= $this->include('templates/aq_footer') ?>