<?php get_header(); ?>

<section class="nido">
  <h1>Il Nido</h1>
  <p>
    L’ASILO NIDO studiato per bambini d’età da 0 ai 3 anni con l’obiettivo
    di soddisfare le esigenze del bambino e della famiglia, offrendo una
    flessibilità d’orario ed esperienze educative più attuali possibili
    inserite nel panorama della prima infanzia.
  </p>
  <p>
    La struttura si propone di stimolare la socializzazione tra i bambini in
    un ambiente educativo studiato per loro, utilizzando attività ludiche
    specifiche per ogni età.
  </p>
  <div class="tiles">
    <div class="tile">
      <picture>
        <svg class="icon">
          <use xlink:href="<?php echo get_bloginfo('template_directory'); ?>/images/icons.svg#family"></use>
        </svg>
      </picture>
      <h2>Inserimento</h2>
      <a href="/i-bambini/#inserimento" class="button">Scopri</a>
    </div>
    <div class="tile">
      <picture>
        <svg class="icon">
          <use xlink:href="<?php echo get_bloginfo('template_directory'); ?>/images/icons.svg#abc-block"></use>
        </svg>
      </picture>
      <h2>Attività</h2>
      <a href="/i-bambini/#cosa-facciamo" class="button">Scopri</a>
    </div>
    <div class="tile">
      <picture>
        <svg class="icon">
          <use xlink:href="<?php echo get_bloginfo('template_directory'); ?>/images/icons.svg#baby-food"></use>
        </svg>
      </picture>
      <h2>Cosa mangiamo</h2>
      <a href="/i-bambini/#cosa-mangiamo" class="button">Scopri</a>
    </div>
  </div>
</section>
<section class="services">
  <h1>Servizi</h1>
  <p>Offriamo un servizio continuo accogliendo i bambini in qualsiasi momento della giornata, anche per poche ore.</p>
  <div class="tiles">
    <div class="tile">
      <picture>
        <svg class="icon">
          <use xlink:href="<?php echo get_bloginfo('template_directory'); ?>/images/icons.svg#baby-boy"></use>
        </svg>
      </picture>
      <h2><a href="/servizi/#baby-parking">Baby parking</a></h2>
      <p>
        I genitori possono affidarci il loro piccolo anche per brevissimo tempo.
      </p>
    </div>
    <div class="tile">
      <picture>
        <svg class="icon">
          <use xlink:href="<?php echo get_bloginfo('template_directory'); ?>/images/icons.svg#stethoscope"></use>
        </svg>
      </picture>
      <h2><a href="/servizi/#pediatra">Pediatra</a></h2>
      <p>
        Tutti i bambini saranno visitati periodicamente e gratuitamente.
      </p>
    </div>
    <div class="tile">
      <picture>
        <svg class="icon">
          <use xlink:href="<?php echo get_bloginfo('template_directory'); ?>/images/icons.svg#maternity"></use>
        </svg>
      </picture>
      <h2><a href="/servizi/#psicologa">Psicologa</a></h2>
      <p>
        All’interno della struttura la nostra psicologa collabora con tutte le educatrici.
      </p>
    </div>
  </div>
  <div class="clouds">
    <svg width="1335" height="220" xmlns="http://www.w3.org/2000/svg"><path d="M.918 227.344h1334.117c-21.917-47.12-57.278-58.9-106.086-35.34-61.738-65.426-131.933-55.867-155.289-47.625C1015.344 65.523 834.21-24.684 686.125 130c-64.191-36.992-101.094-21.816-136.68-13.676-33.777-145.582-267.996-168.758-305.46 20.153-48.372-46.61-203.266-51-243.067 90.867z" fill="currentColor" fillRule="evenodd"/></svg>
  </div>
</section>
<section class="contacts">
  <h1>Contattaci</h1>
  <p>Per qualsiasi informazione non esitare a scriverci.</p>
  <div class="map">
    <div class="address">
      <h2>
        ASILO NIDO
        <br />
        <strong>IL GIARDINO DEI BIMBI</strong>
      </h2>
      <p>
        Via Como 28 FENEGRO’ (COMO)
        <br />
        tel. 031.3520241
        <br />
        mail. asiloilgiardinodeibimbi@gmail.com
      </p>
    </div>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2786.471944656651!2d9.0053207!3d45.701568200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47869a9fd06f548f%3A0xfc1b407a295a201!2sIl+Giardino+dei+Bimbi!5e0!3m2!1sit!2sit!4v1544976257449"
      height="300"
      frameBorder="0"
      allowFullScreen
    ></iframe>
  </div>
</section>
<section class="reserved">
  <h1>Area riservata</h1>
  <!-- <p>Lorem ipsum</p> -->
  <?php
    $user = wp_get_current_user();
    $allowed_roles = array('administrator', ROLE_OWNER, ROLE_TEACHER);
    $link = '/cms/wp-login.php';
    if (is_user_logged_in()) {
      $link = (array_intersect($allowed_roles, $user->roles)) ? '/cms/wp-admin/' : '/children/';
    }
  ?>
  <a href="<?php echo $link ?>" class="button">Accedi</a>
</section>

<?php get_footer(); ?>
