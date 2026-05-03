<footer class="aq-footer">
  <div class="aq-footer-inner">
    <div class="footer-brand">
      <img src="/assets/images/aq_logo.png" alt="Alas Quatro logo" class="footer-logo-img">
      <div class="footer-text">
        <div class="footer-title">Alas Quatro</div>
        <div class="footer-copy">Copyright @ 2027 Alas Quatro. All rights reserved.</div>
      </div>
    </div>

    <div class="footer-icons">
      <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" aria-label="Email"><i class="bi bi-envelope"></i></a>
    </div>
  </div>
</footer>

<script>
  const nav = document.getElementById('aqNavbar');
  const backdrop = document.getElementById('aqNavBackdrop');

  nav.addEventListener('shown.bs.collapse', () => {
    backdrop.style.opacity = '1';
    backdrop.style.pointerEvents = 'auto';
  });

  nav.addEventListener('hidden.bs.collapse', () => {
    backdrop.style.opacity = '0';
    backdrop.style.pointerEvents = 'none';
  });

  backdrop.addEventListener('click', () => {
    const bsCollapse = bootstrap.Collapse.getInstance(nav);
    if (bsCollapse) bsCollapse.hide();
  });
</script>