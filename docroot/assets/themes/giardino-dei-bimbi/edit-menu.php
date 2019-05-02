<h1>Aggiorna a tutti i bambini il menu di oggi</h1>

<form method="POST">
  <div>
    <label for="primo">Primo [<?php echo $menu['primo']; ?>]</label>
    <input type="text" name="primo" id="primo" value="">
  </div>
  <div>
    <label for="secondo">Secondo [<?php echo $menu['secondo']; ?>]</label>
    <input type="text" name="secondo" id="secondo" value="">
  </div>
  <div>
    <label for="contorno">Contorno [<?php echo $menu['contorno']; ?>]</label>
    <input type="text" name="contorno" id="contorno" value="">
  </div>
  <div>
    <label for="frutta">Frutta [<?php echo $menu['frutta']; ?>]</label>
    <input type="text" name="frutta" id="frutta" value="">
  </div>
  <br>
  <?php wp_nonce_field( 'wpshout_option_page_example_action' ); ?>
  <input type="submit" value="Salva" class="button button-primary button-large">
</form>