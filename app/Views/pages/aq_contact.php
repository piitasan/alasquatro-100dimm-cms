<?= $this->include('templates/aq_header') ?>

<section class="aq-contact-hero">
  <div class="aq-container aq-contact-hero-inner">
    <h1 class="aq-contact-title">
      WE ALSO WANNA
      <span>HEAR FROM YOU</span>
    </h1>
    <p class="aq-contact-sub">
      Have questions, feedback, or just want to talk about 100 Days in Metro Manila?
      Reach out to us — we'd love to connect with our community.
    </p>
  </div>
</section>

<section class="aq-contact-form">
  <div class="aq-container aq-contact-form-inner">
    <div class="aq-contact-card">
      <form class="aq-contact-form-grid" novalidate>
        <div class="aq-contact-row">
          <div class="aq-contact-field">
            <input type="text" name="firstName" placeholder="First Name *" />
          </div>
          <div class="aq-contact-field">
            <input type="text" name="lastName" placeholder="Last Name *" />
          </div>
        </div>

        <div class="aq-contact-field">
          <input type="email" name="email" placeholder="Email *" />
        </div>

        <div class="aq-contact-field">
          <textarea name="message" rows="5" placeholder="What do you want to tell us about?"></textarea>
        </div>

        <label class="aq-contact-check">
          <input type="checkbox" name="privacy" />
          <span>
            By submitting this form, I agree to Alas Quatro's
            <a href="/privacy">Privacy Policy</a>
          </span>
        </label>

        <button type="submit" class="aq-contact-submit">
          <i class="bi bi-send" aria-hidden="true"></i>
          SEND MESSAGE
        </button>

        <div class="aq-contact-divider">
          <span></span>
          <p>Or connect with us through:</p>
          <span></span>
        </div>

        <div class="aq-contact-socials">
          <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="aq-contact-social">
            <i class="bi bi-facebook" aria-hidden="true"></i>
            FACEBOOK
          </a>
          <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="aq-contact-social">
            <i class="bi bi-instagram" aria-hidden="true"></i>
            INSTAGRAM
          </a>
        </div>
      </form>
    </div>
  </div>
</section>

<?= $this->include('templates/aq_footer') ?>