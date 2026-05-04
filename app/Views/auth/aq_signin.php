<?= $this->include('templates/aq_header') ?>

<section class="aq-signin">
  <div class="aq-signin-bg"></div>
  <div class="aq-signin-shell">
    <div class="aq-signin-brand">
      <div class="aq-signin-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M12 2C8 2 4 6 4 10c0 5 8 12 8 12s8-7 8-12c0-4-4-8-8-8z" fill="#D5BD98" opacity="0.9"/>
          <circle cx="12" cy="10" r="3" fill="#1A3635"/>
        </svg>
      </div>
      <h1>ALAS QUATRO</h1>
      <p>Sign in to your account</p>
    </div>

    <div class="aq-signin-card">
      <form class="aq-signin-form" novalidate>
        <div class="aq-signin-field">
          <label>EMAIL ADDRESS</label>
          <input type="email" placeholder="your@email.com" />
        </div>

        <div class="aq-signin-field">
          <label>PASSWORD</label>
          <div class="aq-signin-input-wrap">
            <input type="password" placeholder="Enter your password" />
            <button type="button" class="aq-signin-eye" aria-label="Toggle password">
              <i class="bi bi-eye"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="aq-signin-submit">
          <i class="bi bi-box-arrow-in-right"></i>
          SIGN IN
        </button>
      </form>

      <p class="aq-signin-meta">
        Don't have an account? <a href="/signup">Sign Up</a>
      </p>
    </div>

    <div class="aq-signin-back">
      <a href="/">← Back to Home</a>
    </div>
  </div>
</section>

<?= $this->include('templates/aq_footer') ?>