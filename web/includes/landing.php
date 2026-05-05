<?php
/**
 * Incluir dos veces desde la plantilla:
 * 1) al inicio del script — define $body_class (clase del <body>);
 * 2) dentro de <body> — nav, secciones del sitio y script.
 */
if (!defined('LANDING_BODY_CLASS_SET')) {
    $body_class = 'landing_page';
    define('LANDING_BODY_CLASS_SET', true);
    return;
}
?>
<div class="landing_nav" aria-label="Principal">
  <input type="checkbox" id="landing_nav_toggle" class="landing_nav_toggle" aria-hidden="true" tabindex="-1">
  <div class="landing_nav_inner">
    <a href="#inicio" class="landing_nav_brand">
      <img src="img/logo.png" width="180" height="96" class="landing_nav_logo" alt="AIRE - Asociación Iberoamericana de Relaciones Empresariales">
    </a>
    <div class="landing_nav_desktop">
      <a href="#inicio" class="landing_nav_link"><span data-i18n="nav.home">Inicio</span></a>
      <a href="#quienes-somos" class="landing_nav_link"><span data-i18n="nav.about">Quiénes Somos</span></a>
      <a href="#servicios" class="landing_nav_link"><span data-i18n="nav.what_we_do">Ejes Estratégicos</span></a>
      <a href="#membresias" class="landing_nav_link"><span data-i18n="nav.memberships">Membresías</span></a>
      <a href="#board" class="landing_nav_link"><span data-i18n="nav.directory">Directorio</span></a>
      <a href="#contacto" class="landing_nav_link"><span data-i18n="nav.contact">Contacto</span></a>
      <a href="#membresias" class="landing_nav_cta"><span data-i18n="nav.cta">Ser Parte</span></a>
      <div class="landing_lang" data-lang-selector role="button" tabindex="0" aria-label="Language selector">
        <img src="img/lang_icon.png" class="landing_lang_img" alt="" aria-hidden="true" width="16" height="16" decoding="async">
        <span data-current-lang>ES</span>
        <svg class="landing_lang_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
      </div>
    </div>
    <div class="landing_nav_tools">
      <div class="landing_lang landing_lang_mobile" data-lang-selector role="button" tabindex="0" aria-label="Language selector">
        <img src="img/lang_icon.png" class="landing_lang_img" alt="" aria-hidden="true" width="16" height="16" decoding="async">
        <span data-current-lang>ES</span>
        <svg class="landing_lang_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
      </div>
      <label for="landing_nav_toggle" class="landing_nav_burger" aria-label="Abrir menú">
        <span class="landing_nav_burger_bar" aria-hidden="true"></span>
        <span class="landing_nav_burger_bar" aria-hidden="true"></span>
        <span class="landing_nav_burger_bar" aria-hidden="true"></span>
      </label>
    </div>
  </div>
  <div class="landing_nav_mobile">
    <div class="landing_nav_mobile_inner">
      <a href="#inicio" class="landing_nav_mobile_link"><span data-i18n="nav.home">Inicio</span></a>
      <a href="#quienes-somos" class="landing_nav_mobile_link"><span data-i18n="nav.about">Quiénes Somos</span></a>
      <a href="#servicios" class="landing_nav_mobile_link"><span data-i18n="nav.what_we_do">Ejes Estratégicos</span></a>
      <a href="#membresias" class="landing_nav_mobile_link"><span data-i18n="nav.memberships">Membresías</span></a>
      <a href="#board" class="landing_nav_mobile_link"><span data-i18n="nav.directory">Directorio</span></a>
      <a href="#contacto" class="landing_nav_mobile_link"><span data-i18n="nav.contact">Contacto</span></a>
      <a href="#membresias" class="landing_nav_cta landing_nav_cta_mobile"><span data-i18n="nav.cta">Ser Parte</span></a>
    </div>
  </div>
</div>

<div class="landing_hero" id="inicio" aria-labelledby="landing_hero_title">
  <div class="landing_hero_media">
    <img src="img/hero_img.jpg" alt="" class="landing_hero_img" width="1920" height="1080" decoding="async" fetchpriority="high">
    <div class="landing_hero_gradient" aria-hidden="true"></div>
  </div>
  <div class="landing_hero_inner">
    <p class="landing_hero_kicker" data-i18n="hero.kicker">Asociación Iberoamericana de Relaciones Empresariales</p>
    <h1 class="landing_hero_title" id="landing_hero_title">
      <span data-i18n="hero.title.line1">Un aire nuevo</span><br>
      <span data-i18n="hero.title.line2">para la</span><br>
      <span class="landing_hero_title_accent" data-i18n="hero.title.accent">integración empresarial.</span>
    </h1>
    <p class="landing_hero_lead" data-i18n="hero.lead">Conectamos líderes, empresas e instituciones entre Iberoamérica y Estados Unidos para impulsar la cooperación empresarial y abrir nuevos mercados.</p>
    <div class="landing_hero_actions">
      <a href="#membresias" class="landing_hero_btn landing_hero_btn_primary">
        <span data-i18n="hero.primary_cta">Quiero ser parte</span>
        <svg class="landing_hero_btn_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
      <a href="#quienes-somos" class="landing_hero_btn landing_hero_btn_outline"><span data-i18n="hero.secondary_cta">Conocer más</span></a>
    </div>
  </div>
</div>

<main class="landing_main">

<div class="landing_section landing_section_quienes" id="quienes-somos" aria-labelledby="landing_quienes_title">
  <div class="landing_container">
    <header class="landing_quienes_intro">
      <p class="landing_kicker" data-i18n="about.kicker">Quiénes Somos</p>
      <h2 class="landing_heading_2" id="landing_quienes_title"><span data-i18n="about.title.prefix">Una plataforma para la</span> <span class="landing_text_accent" data-i18n="about.title.accent">integración empresarial</span></h2>
      <p class="landing_lead" data-i18n="about.lead">AIRE es una organización registrada en Florida, EE.UU., en proceso de calificación como asociación sin fines de lucro. Nace con la misión de promover los intereses comunes de sus miembros a través de la integración empresarial, la cooperación público-privada y la articulación de ecosistemas entre Iberoamérica y Estados Unidos.</p>
    </header>
    <div class="landing_grid landing_grid_3">
      <article class="landing_pillar">
        <div class="landing_pillar_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
        </div>
        <h3 class="landing_pillar_title" data-i18n="about.purpose_title">Propósito</h3>
        <p class="landing_pillar_text" data-i18n="about.purpose">Consolidar una red iberoamericana de liderazgo económico que facilite la cooperación empresarial, reduzca barreras de entrada a nuevos mercados y promueva proyectos sostenibles y competitivos.</p>
      </article>
      <article class="landing_pillar">
        <div class="landing_pillar_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"/><line x1="12" x2="12" y1="22" y2="12"/><polyline points="22 8.5 12 12 2 8.5"/></svg>
        </div>
        <h3 class="landing_pillar_title" data-i18n="about.mission_title">Misión</h3>
        <p class="landing_pillar_text" data-i18n="about.mission">Diseñar y operar una organización ágil, confiable y colaborativa que reúna líderes por industria, articule la relación público-privada y transforme ideas en iniciativas concretas.</p>
      </article>
      <article class="landing_pillar">
        <div class="landing_pillar_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <h3 class="landing_pillar_title" data-i18n="about.vision_title">Visión</h3>
        <p class="landing_pillar_text" data-i18n="about.vision">Ser el referente institucional iberoamericano en diplomacia empresarial y cooperación económica, con impacto real en la integración productiva entre Iberoamérica y Estados Unidos.</p>
      </article>
    </div>
    <header class="landing_values_head">
      <h3 class="landing_heading_3" data-i18n="values.title">Nuestros Valores</h3>
      <p class="landing_muted" data-i18n="values.subtitle">Los principios que guían cada acción de AIRE.</p>
    </header>
    <div class="landing_grid landing_grid_values">
      <article class="landing_value_card">
        <div class="landing_value_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>
        </div>
        <h4 class="landing_value_title" data-i18n="values.integrity_title">Institucionalidad y ética</h4>
        <p class="landing_value_text" data-i18n="values.integrity">Actuamos con integridad, transparencia y responsabilidad.</p>
      </article>
      <article class="landing_value_card">
        <div class="landing_value_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h4 class="landing_value_title" data-i18n="values.collaboration_title">Cooperación y colaboración</h4>
        <p class="landing_value_text" data-i18n="values.collaboration">El trabajo conjunto como motor del desarrollo.</p>
      </article>
      <article class="landing_value_card">
        <div class="landing_value_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2v1"/><path d="M12 22v-3"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h3"/><path d="M19 12h3"/><path d="m4.93 19.07 1.41-1.41"/><path d="m17.66 6.34 1.41-1.41"/></svg>
        </div>
        <h4 class="landing_value_title" data-i18n="values.innovation_title">Innovación y apertura</h4>
        <p class="landing_value_text" data-i18n="values.innovation">Impulsamos nuevas ideas que favorezcan la competitividad.</p>
      </article>
      <article class="landing_value_card">
        <div class="landing_value_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" x2="22" y1="12" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <h4 class="landing_value_title" data-i18n="values.diversity_title">Diversidad e integración</h4>
        <p class="landing_value_text" data-i18n="values.diversity">La diversidad de perspectivas como fortaleza.</p>
      </article>
    </div>
  </div>
</div>

<div class="landing_section landing_section_muted" id="servicios" aria-labelledby="landing_servicios_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_lg">
      <p class="landing_kicker" data-i18n="services.kicker">Qué Hacemos</p>
      <h2 class="landing_heading_2" id="landing_servicios_title"><span data-i18n="services.title.prefix">Articulamos actores, ordenamos agendas y promovemos</span> <span class="landing_text_accent" data-i18n="services.title.accent">proyectos colaborativos</span></h2>
      <p class="landing_lead" data-i18n="services.lead">AIRE actúa como una plataforma institucional que conecta capacidades sectoriales y transversales para acompañar proyectos vinculados al desarrollo y la expansión internacional.</p>
    </header>
    <div class="landing_grid landing_grid_services">
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <h3 class="landing_service_title" data-i18n="services.card1.title">Mesas sectoriales y público-privadas</h3>
        <p class="landing_service_text" data-i18n="services.card1.text">Espacios de diálogo estratégico para analizar desafíos comunes, identificar oportunidades y generar propuestas de acción conjunta.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
        <h3 class="landing_service_title" data-i18n="services.card2.title">Mesas de Vinculación y Networking Institucional.</h3>
        <p class="landing_service_text" data-i18n="services.card2.text">Espacios de articulación para promover el intercambio de mejores prácticas y la cooperación sectorial entre actores clave.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg></div>
        <h3 class="landing_service_title" data-i18n="services.card3.title">Diseño y gestión de proyectos</h3>
        <p class="landing_service_text" data-i18n="services.card3.text">Acompañamiento institucional en iniciativas de expansión internacional, inversión, cooperación interempresarial y desarrollo sectorial.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/><path d="M8 7h6"/><path d="M8 11h8"/></svg></div>
        <h3 class="landing_service_title" data-i18n="services.card4.title">Briefs, estudios y radars sectoriales</h3>
        <p class="landing_service_text" data-i18n="services.card4.text">Contenidos estratégicos orientados a la toma de decisiones, elaborados desde una mirada aplicada y multisectorial.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
        <h3 class="landing_service_title" data-i18n="services.card5.title">AIRE Academy</h3>
        <p class="landing_service_text" data-i18n="services.card5.text">Programas, talleres y capacitaciones orientadas a líderes empresariales, con foco en internacionalización, gestión e innovación.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg></div>
        <h3 class="landing_service_title" data-i18n="services.card6.title">Consultas estratégicas</h3>
        <p class="landing_service_text" data-i18n="services.card6.text">Espacios de orientación estratégica para miembros, canalizados a través de Direcciones Sectoriales especializadas.</p>
      </article>
    </div>
  </div>
</div>

<div class="landing_section" id="estructura" aria-labelledby="landing_estructura_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_lg">
      <p class="landing_kicker" data-i18n="structure.kicker">Nuestra Estructura Institucional</p>
      <h2 class="landing_heading_2" id="landing_estructura_title"><span data-i18n="structure.title.prefix">Liderazgo</span> <span class="landing_text_accent" data-i18n="structure.title.accent">humano</span> <span data-i18n="structure.title.suffix">y especializado</span></h2>
      <p class="landing_lead" data-i18n="structure.lead">AIRE combina diversidad de perfiles, experiencia internacional y vocación colaborativa. Se construye sobre la base del compromiso, la ética y el trabajo conjunto.</p>
    </header>
    <div class="landing_grid landing_grid_2">
      <article class="landing_structure_card">
        <div class="landing_structure_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="landing_structure_body">
          <div class="landing_structure_headline">
            <h3 class="landing_structure_title" data-i18n="structure.card1.title">Board de Gobierno</h3>
            <span class="landing_badge" data-i18n="structure.card1.badge">4 Oficiales</span>
          </div>
          <p class="landing_structure_text" data-i18n="structure.card1.text">Órgano de conducción estratégica que define lineamientos institucionales, prioridades de trabajo y supervisa el cumplimiento de la misión de AIRE.</p>
        </div>
      </article>
      <article class="landing_structure_card">
        <div class="landing_structure_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg></div>
        <div class="landing_structure_body">
          <div class="landing_structure_headline">
            <h3 class="landing_structure_title" data-i18n="structure.card2.title">Direcciones Sectoriales</h3>
            <span class="landing_badge" data-i18n="structure.card2.badge">12 Direcciones</span>
          </div>
          <p class="landing_structure_text" data-i18n="structure.card2.text">12 direcciones que representan las principales industrias: Tecnología, Turismo, Real Estate, Startups, Arte &amp; Cultura, Comercio Internacional y más.</p>
        </div>
      </article>
      <article class="landing_structure_card">
        <div class="landing_structure_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <div class="landing_structure_body">
          <div class="landing_structure_headline">
            <h3 class="landing_structure_title" data-i18n="structure.card3.title">Oficinas Transversales</h3>
            <span class="landing_badge" data-i18n="structure.card3.badge">5 Oficinas</span>
          </div>
          <p class="landing_structure_text" data-i18n="structure.card3.text">Soporte estratégico y técnico: Relaciones Institucionales, Academia, Servicios Profesionales, Comunicación y Logística.</p>
        </div>
      </article>
      <article class="landing_structure_card">
        <div class="landing_structure_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="landing_structure_body">
          <div class="landing_structure_headline">
            <h3 class="landing_structure_title" data-i18n="structure.card4.title">Capítulos y Representaciones</h3>
            <span class="landing_badge" data-i18n="structure.card4.badge">Madrid · Murcia</span>
          </div>
          <p class="landing_structure_text" data-i18n="structure.card4.text">Presencia institucional en distintos países y regiones para fortalecer la cooperación territorial y acompañar a los miembros en contextos locales.</p>
        </div>
      </article>
    </div>
  </div>
</div>

<div class="landing_section landing_section_board" id="board" aria-labelledby="landing_board_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_lg">
      <h2 class="landing_heading_2" id="landing_board_title" data-i18n="board.title">Board de Gobierno</h2>
      <p class="landing_muted" data-i18n="board.subtitle">Oficiales</p>
    </header>

    <div class="landing_board_grid" role="list">
      <article class="landing_board_card" role="listitem">
        <div class="landing_board_media">
          <img class="landing_board_img landing_board_img_javier" src="img/board/Javier.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <h3 class="landing_board_name" data-i18n="board.javier.name">Javier Cremades</h3>
        <p class="landing_board_role" data-i18n="board.javier.role">Presidente</p>
        <p class="landing_board_bio" data-i18n="board.javier.bio">Abogado y académico español de prestigio global, presidente de la World Jurist Association y fundador de Cremades &amp; Calvo-Sotelo. Experto en derecho constitucional, derechos humanos y derecho digital, impulsa redes internacionales que conectan líderes jurídicos y posicionan a AIRE a nivel institucional global.</p>
      </article>

      <article class="landing_board_card" role="listitem">
        <div class="landing_board_media">
          <img class="landing_board_img landing_board_img_elisa" src="img/board/Elisa.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <h3 class="landing_board_name" data-i18n="board.elisa.name">Elisa Weiner</h3>
        <p class="landing_board_role" data-i18n="board.elisa.role">Vicepresidenta y Directora Ejecutiva</p>
        <p class="landing_board_bio" data-i18n="board.elisa.bio">Trayectoria en relaciones institucionales, internacionalización y desarrollo de alianzas estratégicas. Especializada en articular empresas, líderes e instituciones, impulsa la cooperación y conexión entre mercados a nivel internacional.</p>
      </article>

      <article class="landing_board_card" role="listitem">
        <div class="landing_board_media">
          <img class="landing_board_img landing_board_img_monica" src="img/board/Monica.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <h3 class="landing_board_name" data-i18n="board.monica.name">Mónica González</h3>
        <p class="landing_board_role" data-i18n="board.monica.role">Secretaria General</p>
        <p class="landing_board_bio" data-i18n="board.monica.bio">...</p>
      </article>

      <article class="landing_board_card" role="listitem">
        <div class="landing_board_media landing_board_media_placeholder" aria-hidden="true"></div>
        <h3 class="landing_board_name" data-i18n="board.martin.name">Martín Bettiol</h3>
        <p class="landing_board_role" data-i18n="board.martin.role">Tesorero</p>
        <p class="landing_board_bio" data-i18n="board.martin.bio">...</p>
      </article>
    </div>
  </div>
</div>

<div class="landing_section landing_section_directorates" id="direcciones-sectoriales" aria-labelledby="landing_directorates_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_lg">
      <h2 class="landing_heading_2" id="landing_directorates_title" data-i18n="directorates.title">Direcciones Sectoriales</h2>
    </header>

    <div class="landing_directorates_grid" role="list">
      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_claudio" src="img/board/Claudio.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.claudio.name">Claudio Resnick</h3>
          <p class="landing_directorates_role" data-i18n="directorates.claudio.role">Medios Audiovisuales y Entretenimiento</p>
          <p class="landing_directorates_bio" data-i18n="directorates.claudio.bio">Empresario y productor ejecutivo, fundador y CEO de ARPI GROUP, con más de dos décadas de experiencia en la industria creativa.</p>
        </div>
      </article>

      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_emilio" src="img/board/Emilio.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.emilio.name">Emilio Salomon</h3>
          <p class="landing_directorates_role" data-i18n="directorates.emilio.role">Academia &amp; Formación Ejecutiva</p>
          <p class="landing_directorates_bio" data-i18n="directorates.emilio.bio">Académico especializado en gestión del conocimiento, fundador de Social International University y vicepresidente para América Latina de FIAM.</p>
        </div>
      </article>

      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_silvana" src="img/board/Silvana.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.silvana.name">Silvana Ovsejevich Jensen</h3>
          <p class="landing_directorates_role" data-i18n="directorates.silvana.role">Arte &amp; Cultura</p>
          <p class="landing_directorates_bio" data-i18n="directorates.silvana.bio">Arquitecta, escenógrafa y gestora cultural, con trayectoria en el desarrollo de proyectos de arte y cultura a nivel internacional.</p>
        </div>
      </article>

      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_silvia" src="img/board/Silvia.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.silvia.name">Silvia Torres Carbonell</h3>
          <p class="landing_directorates_role" data-i18n="directorates.silvia.role">Startups &amp; Venture Capital</p>
          <p class="landing_directorates_bio" data-i18n="directorates.silvia.bio">Referente del ecosistema emprendedor, Presidente Emérita del Centro de Entrepreneurship del IAE Business School e inversora ángel.</p>
        </div>
      </article>

      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_patricio" src="img/board/Patricio.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.patricio.name">Patricio Baigorrotegui</h3>
          <p class="landing_directorates_role" data-i18n="directorates.patricio.role">Negocios en el Deporte</p>
          <p class="landing_directorates_bio" data-i18n="directorates.patricio.bio">Cofundador de Good Morning Sports y SPORTBIZ EUROPE/LATAM, con más de 20 años de experiencia en la industria deportiva.</p>
        </div>
      </article>

      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_lucrecia" src="img/board/Lucrecia.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.lucrecia.name">Lucrecia Vanni</h3>
          <p class="landing_directorates_role" data-i18n="directorates.lucrecia.role">Tecnología</p>
          <p class="landing_directorates_bio" data-i18n="directorates.lucrecia.bio">CEO de Ecopolys Europa, con trayectoria en tecnología, sostenibilidad e innovación.</p>
        </div>
      </article>

      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_lucrecia" src="img/board/Pablo.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.pablo.name">Pablo Fera</h3>
          <p class="landing_directorates_role" data-i18n="directorates.pablo.role">Comercio Internacional</p>
          <p class="landing_directorates_bio" data-i18n="directorates.pablo.bio">Especialista en comercio exterior, creador de “Pensar antes de exportar” y presidente de Fundación Más Valor Exportador.</p>
        </div>
      </article>

      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_lucrecia" src="img/board/Fernando.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.fernando.name">Fernando Tapia</h3>
          <p class="landing_directorates_role" data-i18n="directorates.fernando.role">Turismo</p>
          <p class="landing_directorates_bio" data-i18n="directorates.fernando.bio">Ejecutivo con más de 30 años en gestión turística, Presidente de CAMTUR y Socio Director de Operaciones en Sacramento Management.</p>
        </div>
      </article>

      <article class="landing_directorates_card" role="listitem">
        <div class="landing_directorates_media">
          <img class="landing_directorates_img landing_directorates_img_lucrecia" src="img/board/Josefina.svg" alt="" loading="lazy" decoding="async" width="640" height="480">
        </div>
        <div class="landing_directorates_body">
          <h3 class="landing_directorates_name" data-i18n="directorates.josefina.name">Josefina Cura</h3>
          <p class="landing_directorates_role" data-i18n="directorates.josefina.role">Riesgos, Sostenibilidad & Certificaciones</p>
          <p class="landing_directorates_bio" data-i18n="directorates.josefina.bio">Ingeniera y consultora en sostenibilidad, cofundadora de EIG y especialista en economía circular y estrategias ESG.</p>
        </div>
      </article>
    </div>
  </div>
</div>

<div class="landing_section" id="coordinadores" aria-labelledby="landing_coordinadores_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_lg">
      <p class="landing_kicker" data-i18n="coords.kicker">Coordinadores y Capítulos</p>
      <h2 class="landing_heading_2" id="landing_coordinadores_title" data-i18n="coords.title">Red coordinadora y representaciones</h2>
      <p class="landing_lead" data-i18n="coords.lead">AIRE cuenta con coordinadores sectoriales y representaciones locales que articulan la presencia institucional en distintas regiones.</p>
    </header>

    <div class="landing_coords_grid">
      <div class="landing_coords_group">
        <h3 class="landing_coords_group_title" data-i18n="coords.offices.title">Oficinas Transversales</h3>
        <ul class="landing_coords_list">
          <li class="landing_coords_item">
            <span class="landing_coords_role" data-i18n="coords.offices.institutional">Relaciones Institucionales</span>
            <span class="landing_coords_sep">—</span>
            <span class="landing_coords_name"><em data-i18n="coords.tbc">Por confirmar</em></span>
          </li>
          <li class="landing_coords_item">
            <span class="landing_coords_role" data-i18n="coords.offices.academy">Academia</span>
            <span class="landing_coords_sep">—</span>
            <span class="landing_coords_name"><em data-i18n="coords.tbc">Por confirmar</em></span>
          </li>
          <li class="landing_coords_item">
            <span class="landing_coords_role" data-i18n="coords.offices.professional">Servicios Profesionales</span>
            <span class="landing_coords_sep">—</span>
            <span class="landing_coords_name"><em data-i18n="coords.tbc">Por confirmar</em></span>
          </li>
          <li class="landing_coords_item">
            <span class="landing_coords_role" data-i18n="coords.offices.communications">Comunicación</span>
            <span class="landing_coords_sep">—</span>
            <span class="landing_coords_name"><em data-i18n="coords.tbc">Por confirmar</em></span>
          </li>
          <li class="landing_coords_item">
            <span class="landing_coords_role" data-i18n="coords.offices.logistics">Logística</span>
            <span class="landing_coords_sep">—</span>
            <span class="landing_coords_name"><em data-i18n="coords.tbc">Por confirmar</em></span>
          </li>
        </ul>
      </div>

      <div class="landing_coords_group">
        <h3 class="landing_coords_group_title" data-i18n="coords.chapters.title">Capítulos y Representaciones</h3>
        <ul class="landing_coords_list">
          <li class="landing_coords_item">
            <span class="landing_coords_role" data-i18n="coords.chapters.madrid">Madrid, España</span>
            <span class="landing_coords_sep">—</span>
            <span class="landing_coords_name"><em data-i18n="coords.tbc">Por confirmar</em></span>
          </li>
          <li class="landing_coords_item">
            <span class="landing_coords_role" data-i18n="coords.chapters.murcia">Murcia, España</span>
            <span class="landing_coords_sep">—</span>
            <span class="landing_coords_name"><em data-i18n="coords.tbc">Por confirmar</em></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="landing_section landing_section_muted" id="membresias" aria-labelledby="landing_membresias_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_center">
      <p class="landing_kicker" data-i18n="memberships.kicker">Ser Parte</p>
      <h2 class="landing_heading_2" id="landing_membresias_title"><span data-i18n="memberships.title.prefix">Conectando líderes,</span> <span class="landing_text_accent" data-i18n="memberships.title.accent">impulsando oportunidades</span></h2>
      <p class="landing_lead landing_lead_center" data-i18n="memberships.lead">Ser parte de AIRE implica integrarse a una red iberoamericana de empresas y líderes que comparten una mirada estratégica, institucional y de largo plazo.</p>
    </header>
    <div class="landing_plans">
      <article class="landing_plan">
        <h3 class="landing_plan_name" data-i18n="plans.standard.name">Corporativa Standard</h3>
        <p class="landing_plan_desc" data-i18n="plans.standard.desc">Para empresas que desean integrarse activamente al ecosistema AIRE.</p>
        <ul class="landing_plan_list">
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.standard.item1">Acceso preferencial a eventos y mesas sectoriales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.standard.item2">Presencia en el directorio institucional de miembros</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.standard.item3">Participación como observador en mesas sectoriales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.standard.item4">Acceso a 1 sesión de orientación estratégica sectorial institucional.</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.standard.item5">Acceso a AIRE Academy (1 capacitación/año)</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.standard.item6">Contenidos institucionales: briefs y radar de oportunidades</span></li>
        </ul>
        <a href="#contacto" class="landing_plan_btn"><span data-i18n="plans.cta">Quiero ser parte</span><svg class="landing_plan_btn_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
      </article>
      <article class="landing_plan landing_plan_featured">
        <p class="landing_plan_tag" data-i18n="plans.popular">Más Popular</p>
        <h3 class="landing_plan_name" data-i18n="plans.premium.name">Corporativa Premium</h3>
        <p class="landing_plan_desc" data-i18n="plans.premium.desc">Mayor nivel de involucramiento institucional y estratégico.</p>
        <ul class="landing_plan_list">
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.premium.item1">Todo lo incluido en Standard</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.premium.item2">Participación institucional destacada en foros de la industria.</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.premium.item3">Encuentros cerrados con líderes empresariales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.premium.item4">Mayor visibilidad en comunicación y eventos</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.premium.item5">Acceso ampliado a instancias de diálogo sectorial</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n="plans.premium.item6">Elegibilidad para Oficinas Transversales</span></li>
        </ul>
        <a href="#contacto" class="landing_plan_btn landing_plan_btn_accent"><span data-i18n="plans.cta">Quiero ser parte</span><svg class="landing_plan_btn_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
      </article>
      <article class="landing_plan">
        <h3 class="landing_plan_name" data-i18n="plans.strategic.name">Membresía Estratégica AIRE</h3>
        <p class="landing_plan_desc" data-i18n="plans.strategic.desc">Rol institucional activo, acompañando el desarrollo a largo plazo.</p>
        <ul class="landing_plan_list">
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Todo lo incluido en Premium</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Participación en reuniones de Directorio (con voz)</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Acceso prioritario a espacios estratégicos</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Postulación a Direcciones Sectoriales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Reconocimiento como actor estratégico del ecosistema</span></li>
        </ul>
        <a href="#contacto" class="landing_plan_btn"><span data-i18n="plans.cta">Quiero ser parte</span><svg class="landing_plan_btn_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
      </article>
    </div>
  </div>
</div>

<div class="landing_section" id="contacto" aria-labelledby="landing_contacto_title">
  <div class="landing_container">
    <div class="landing_contact_grid">
      <div class="landing_contact_intro">
        <p class="landing_kicker" data-i18n="contact.kicker">Contacto</p>
        <h2 class="landing_heading_2" id="landing_contacto_title"><span data-i18n="contact.title.prefix">Conectemos y</span> <span class="landing_text_accent" data-i18n="contact.title.accent">construyamos juntos</span></h2>
        <p class="landing_contact_lead" data-i18n="contact.lead">Si te interesa conocer más sobre la Asociación, explorar una membresía, proponer una alianza institucional o realizar una consulta general, contactate con nuestro equipo.</p>
        <div class="landing_contact_items">
          <div class="landing_contact_item">
            <div class="landing_contact_icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </div>
            <div>
              <p class="landing_contact_item_title" data-i18n="contact.email_title">Correo institucional</p>
              <p class="landing_contact_item_text"><a href="mailto:consultas@aireiberoamerica.org">consultas@aireiberoamerica.org</a></p>
            </div>
          </div>
          <div class="landing_contact_item">
            <div class="landing_contact_icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p class="landing_contact_item_title" data-i18n="contact.address_title">Dirección</p>
              <p class="landing_contact_item_text">2700 Glades Cir. Suite 106, Weston, FL 33327</p>
            </div>
          </div>
          <div class="landing_contact_item">
            <div class="landing_contact_icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <div>
              <p class="landing_contact_item_title" data-i18n="contact.whatsapp_title">WhatsApp</p>
              <p class="landing_contact_item_text"><a href="https://wa.me/17865872738" rel="noopener noreferrer" target="_blank">+1 (786) 587-2738</a></p>
            </div>
          </div>
        </div>
      </div>
      <form class="landing_form_card" action="#" method="post" novalidate>
        <div class="landing_form_row">
          <div class="landing_field">
            <label class="landing_field_label" for="contact-nombre" data-i18n="form.name.label">Nombre y Apellido</label>
            <input class="landing_input" id="contact-nombre" type="text" name="nombre" autocomplete="name" data-i18n-placeholder="form.name.placeholder" placeholder="Tu nombre completo" required>
          </div>
          <div class="landing_field">
            <label class="landing_field_label" for="contact-empresa" data-i18n="form.org.label">Empresa / Organización</label>
            <input class="landing_input" id="contact-empresa" type="text" name="empresa" autocomplete="organization" data-i18n-placeholder="form.org.placeholder" placeholder="Nombre de la empresa" required>
          </div>
        </div>
        <div class="landing_form_row">
          <div class="landing_field">
            <label class="landing_field_label" for="contact-cargo" data-i18n="form.role.label">Cargo</label>
            <input class="landing_input" id="contact-cargo" type="text" name="cargo" autocomplete="organization-title" data-i18n-placeholder="form.role.placeholder" placeholder="Tu cargo">
          </div>
          <div class="landing_field">
            <label class="landing_field_label" for="contact-ubicacion" data-i18n="form.location.label">País / Ciudad</label>
            <input class="landing_input" id="contact-ubicacion" type="text" name="ubicacion" autocomplete="address-level1" data-i18n-placeholder="form.location.placeholder" placeholder="Ej: Buenos Aires, Argentina">
          </div>
        </div>
        <div class="landing_form_row">
          <div class="landing_field">
            <label class="landing_field_label" for="contact-email" data-i18n="form.email.label">Correo electrónico</label>
            <input class="landing_input" id="contact-email" type="email" name="email" autocomplete="email" data-i18n-placeholder="form.email.placeholder" placeholder="tu@email.com" required>
          </div>
          <div class="landing_field">
            <label class="landing_field_label" for="contact-telefono" data-i18n="form.phone.label">Teléfono (opcional)</label>
            <input class="landing_input" id="contact-telefono" type="tel" name="telefono" autocomplete="tel" data-i18n-placeholder="form.phone.placeholder" placeholder="+1 234 567 890">
          </div>
        </div>
        <div class="landing_field">
          <label class="landing_field_label" for="contact-motivo" data-i18n="form.reason.label">Motivo del contacto</label>
          <select class="landing_input landing_select" id="contact-motivo" name="motivo" required>
            <option value="" selected disabled data-i18n="form.reason.placeholder">Seleccioná un motivo</option>
            <option value="membresias" data-i18n="form.reason.memberships">Ser parte de AIRE (membresías)</option>
            <option value="alianzas" data-i18n="form.reason.partnerships">Alianzas institucionales</option>
            <option value="servicios" data-i18n="form.reason.services">Iniciativas y Programas Institucionales.</option>
            <option value="prensa" data-i18n="form.reason.press">Prensa y comunicación</option>
            <option value="academy" data-i18n="form.reason.academy">AIRE Academy</option>
            <option value="otros" data-i18n="form.reason.other">Otros</option>
          </select>
        </div>
        <div class="landing_field">
          <label class="landing_field_label" for="contact-mensaje" data-i18n="form.message.label">Mensaje</label>
          <textarea class="landing_input landing_textarea" id="contact-mensaje" name="mensaje" rows="4" data-i18n-placeholder="form.message.placeholder" placeholder="Detallá tu consulta..." required></textarea>
        </div>
        <div class="landing_terms_row">
          <label class="landing_terms_label">
            <input type="checkbox" name="terminos" class="landing_terms_checkbox" required>
            <span data-i18n-html="form.terms">He leído y acepto los <a href="terminos.php" target="_blank" class="landing_terms_link">Términos y Condiciones</a>. Entiendo que el cobro solo se hará efectivo tras mi admisión oficial.</span>
          </label>
        </div>
        <button type="submit" class="landing_submit landing_submit_accent">
          <span data-i18n="form.submit">Contactar al equipo AIRE</span>
          <svg class="landing_submit_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </button>
        <p class="landing_form_note" data-i18n="form.note">AIRE no realiza asesoramiento individual ni comercial a través de este canal.</p>
      </form>
    </div>
  </div>
</div>

</main>

<div class="landing_footer">
  <div class="landing_container landing_footer_inner">
    <div class="landing_footer_top">
      <div class="landing_footer_logo_wrap">
        <img src="img/logo.png" width="160" height="86" class="landing_footer_logo" alt="AIRE">
      </div>
      <div class="landing_footer_legal_wrap">
        <p class="landing_footer_legal" data-i18n="footer.legal">AIRE es una organización sin fines de lucro registrada en Florida como una Business League, dedicada a la promoción de los intereses comunes de sus miembros y el fortalecimiento del ecosistema empresarial iberoamericano.</p>
      </div>
    </div>
    <p class="landing_footer_copy">© <?php echo date('Y'); ?> AIRE. Todos los derechos reservados.</p>
  </div>
</div>

<script>
(function () {
  var toggle = document.getElementById('landing_nav_toggle');
  if (!toggle) return;
  document.querySelectorAll('.landing_nav_mobile a').forEach(function (a) {
    a.addEventListener('click', function () { toggle.checked = false; });
  });
})();
</script>
