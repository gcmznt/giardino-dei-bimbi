  <section class="privacy">
    <a href="https://www.iubenda.com/privacy-policy/83382203" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
  </section>

  </main>
  <?php if (is_user_logged_in()) { ?>
    <script src="//code.tidio.co/mxiqrkti4zhkbk8o9z4nvcgotowwpd6s.js"></script>
    <script>
      document.tidioIdentify = {
        name: '<?php echo wp_get_current_user()->display_name; ?>',
        email: '<?php echo wp_get_current_user()->user_email; ?>',
      };
    </script>
  <?php } ?>
</body>
</html>
