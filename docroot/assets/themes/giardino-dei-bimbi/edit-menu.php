<h1>Aggiorna a tutti i bambini il menu di oggi</h1>

<form method="POST">
  <div>
    <label for="primo">Primo</label>
    <input type="text" name="primo" id="primo" value="<?php echo $menu['primo']; ?>">
  </div>
  <div>
    <label for="secondo">Secondo</label>
    <input type="text" name="secondo" id="secondo" value="<?php echo $menu['secondo']; ?>">
  </div>
  <div>
    <label for="contorno">Contorno</label>
    <input type="text" name="contorno" id="contorno" value="<?php echo $menu['contorno']; ?>">
  </div>
  <div>
    <label for="frutta">Frutta</label>
    <input type="text" name="frutta" id="frutta" value="<?php echo $menu['frutta']; ?>">
  </div>
  <br>
  <?php wp_nonce_field( 'wpshout_option_page_example_action' ); ?>
  <input type="submit" value="Salva" class="button button-primary button-large">
</form>