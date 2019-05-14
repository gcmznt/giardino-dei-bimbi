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
