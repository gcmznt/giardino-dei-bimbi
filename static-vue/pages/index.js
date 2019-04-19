import "../styles/bimbi.less";

export default () => (
  <main>
    <section className="intro">
      <h1>Il Giardino dei Bimbi</h1>
      <nav className="menu">
        <a href="">Home</a>
        <a href="" className="is-active">
          Il Nido
        </a>
        <a href="">Servizi</a>
        <a href="">Contatti</a>
        <a href="">Area riservata</a>
      </nav>
      <img src="/static/tree.png" className="tree" alt="" />
      <div className="clouds">
        <svg width="1335" height="220" xmlns="http://www.w3.org/2000/svg"><path d="M.918 227.344h1334.117c-21.917-47.12-57.278-58.9-106.086-35.34-61.738-65.426-131.933-55.867-155.289-47.625C1015.344 65.523 834.21-24.684 686.125 130c-64.191-36.992-101.094-21.816-136.68-13.676-33.777-145.582-267.996-168.758-305.46 20.153-48.372-46.61-203.266-51-243.067 90.867z" fill="currentColor" fillRule="evenodd"/></svg>
      </div>
    </section>
    <section className="nido">
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
      <div className="tiles">
        <div className="tile">
          <picture>
            <img src="/static/family.png" alt="" />
          </picture>
          <h2>Inserimento</h2>
          <button>Scopri</button>
        </div>
        <div className="tile">
          <picture>
            <img src="/static/family.png" alt="" />
          </picture>
          <h2>Attività</h2>
          <button>Scopri</button>
        </div>
        <div className="tile">
          <picture>
            <img src="/static/family.png" alt="" />
          </picture>
          <h2>Cosa mangiamo</h2>
          <button>Scopri</button>
        </div>
      </div>
    </section>
    <section className="services">
      <h1>Servizi</h1>
      <p>Lorem ipsum</p>
      <div className="tiles">
        <div className="tile">
          <picture>
            <img src="/static/family.png" alt="" />
          </picture>
          <h2>Baby parking</h2>
          <p>
            Lorem ipsum is placeholder text commonly used in the graphic, print,
            and publishing.
          </p>
        </div>
        <div className="tile">
          <picture>
            <img src="/static/family.png" alt="" />
          </picture>
          <h2>Pediatra</h2>
          <p>
            Lorem ipsum is placeholder text commonly used in the graphic, print,
            and publishing.
          </p>
        </div>
        <div className="tile">
          <picture>
            <img src="/static/family.png" alt="" />
          </picture>
          <h2>Psicologa</h2>
          <p>
            Lorem ipsum is placeholder text commonly used in the graphic, print,
            and publishing.
          </p>
        </div>
      </div>
      <div className="clouds">
        <svg width="1335" height="220" xmlns="http://www.w3.org/2000/svg"><path d="M.918 227.344h1334.117c-21.917-47.12-57.278-58.9-106.086-35.34-61.738-65.426-131.933-55.867-155.289-47.625C1015.344 65.523 834.21-24.684 686.125 130c-64.191-36.992-101.094-21.816-136.68-13.676-33.777-145.582-267.996-168.758-305.46 20.153-48.372-46.61-203.266-51-243.067 90.867z" fill="currentColor" fillRule="evenodd"/></svg>
      </div>
    </section>
    <section className="contacts">
      <h1>Contattaci</h1>
      <p>Lorem ipsum</p>
      <div className="map">
        <div className="address">
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
            mail. info@ilgiardinodeibimbi.it
          </p>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2786.471944656651!2d9.0053207!3d45.701568200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47869a9fd06f548f%3A0xfc1b407a295a201!2sIl+Giardino+dei+Bimbi!5e0!3m2!1sit!2sit!4v1544976257449"
          height="300"
          frameBorder="0"
          allowFullScreen
        />
      </div>
    </section>
    <section className="reserved">
      <h1>Area riservata</h1>
      <p>Lorem ipsum</p>
      <button>Accedi</button>
    </section>
  </main>
);
