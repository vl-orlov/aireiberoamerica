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
      <a href="#quienes-somos" class="landing_nav_link">Quiénes Somos</a>
      <a href="#servicios" class="landing_nav_link">Servicios</a>
      <a href="#membresias" class="landing_nav_link">Membresías</a>
      <a href="#contacto" class="landing_nav_link">Contacto</a>
      <a href="#membresias" class="landing_nav_cta">Ser Parte</a>
    </div>
    <label for="landing_nav_toggle" class="landing_nav_burger" aria-label="Abrir menú">
      <span class="landing_nav_burger_bar" aria-hidden="true"></span>
      <span class="landing_nav_burger_bar" aria-hidden="true"></span>
      <span class="landing_nav_burger_bar" aria-hidden="true"></span>
    </label>
  </div>
  <div class="landing_nav_mobile">
    <div class="landing_nav_mobile_inner">
      <a href="#quienes-somos" class="landing_nav_mobile_link">Quiénes Somos</a>
      <a href="#servicios" class="landing_nav_mobile_link">Servicios</a>
      <a href="#membresias" class="landing_nav_mobile_link">Membresías</a>
      <a href="#contacto" class="landing_nav_mobile_link">Contacto</a>
      <a href="#membresias" class="landing_nav_cta landing_nav_cta_mobile">Ser Parte</a>
    </div>
  </div>
</div>

<div class="landing_hero" id="inicio" aria-labelledby="landing_hero_title">
  <div class="landing_hero_media">
    <img src="img/hero_img.jpg" alt="" class="landing_hero_img" width="1920" height="1080" decoding="async" fetchpriority="high">
    <div class="landing_hero_gradient" aria-hidden="true"></div>
  </div>
  <div class="landing_hero_inner">
    <p class="landing_hero_kicker">Asociación Iberoamericana de Relaciones Empresariales</p>
    <h1 class="landing_hero_title" id="landing_hero_title">
      Un aire nuevo<br>
      para los<br>
      <span class="landing_hero_title_accent">negocios.</span>
    </h1>
    <p class="landing_hero_lead">Conectamos líderes, empresas e instituciones entre Iberoamérica y Estados Unidos para impulsar la cooperación empresarial y abrir nuevos mercados.</p>
    <div class="landing_hero_actions">
      <a href="#membresias" class="landing_hero_btn landing_hero_btn_primary">
        Quiero ser parte
        <svg class="landing_hero_btn_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
      <a href="#quienes-somos" class="landing_hero_btn landing_hero_btn_outline">Conocer más</a>
    </div>
  </div>
</div>

<main class="landing_main">

<div class="landing_section landing_section_quienes" id="quienes-somos" aria-labelledby="landing_quienes_title">
  <div class="landing_container">
    <header class="landing_quienes_intro">
      <p class="landing_kicker">Quiénes Somos</p>
      <h2 class="landing_heading_2" id="landing_quienes_title">Una plataforma para la <span class="landing_text_accent">integración empresarial</span></h2>
      <p class="landing_lead">AIRE es una organización registrada en Florida, EE.UU., en proceso de calificación como asociación sin fines de lucro. Nace con la misión de promover los intereses comunes de sus miembros a través de la integración empresarial, la cooperación público-privada y la articulación de ecosistemas entre Iberoamérica y Estados Unidos.</p>
    </header>
    <div class="landing_grid landing_grid_3">
      <article class="landing_pillar">
        <div class="landing_pillar_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
        </div>
        <h3 class="landing_pillar_title">Propósito</h3>
        <p class="landing_pillar_text">Consolidar una red iberoamericana de liderazgo económico que facilite la cooperación empresarial, reduzca barreras de entrada a nuevos mercados y promueva proyectos sostenibles y competitivos.</p>
      </article>
      <article class="landing_pillar">
        <div class="landing_pillar_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"/><line x1="12" x2="12" y1="22" y2="12"/><polyline points="22 8.5 12 12 2 8.5"/></svg>
        </div>
        <h3 class="landing_pillar_title">Misión</h3>
        <p class="landing_pillar_text">Diseñar y operar una organización ágil, confiable y colaborativa que reúna líderes por industria, articule la relación público-privada y transforme ideas en iniciativas concretas.</p>
      </article>
      <article class="landing_pillar">
        <div class="landing_pillar_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <h3 class="landing_pillar_title">Visión</h3>
        <p class="landing_pillar_text">Ser el referente institucional iberoamericano en diplomacia empresarial y cooperación económica, con impacto real en la integración productiva entre Iberoamérica y Estados Unidos.</p>
      </article>
    </div>
    <header class="landing_values_head">
      <h3 class="landing_heading_3">Nuestros Valores</h3>
      <p class="landing_muted">Los principios que guían cada acción de AIRE.</p>
    </header>
    <div class="landing_grid landing_grid_values">
      <article class="landing_value_card">
        <div class="landing_value_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>
        </div>
        <h4 class="landing_value_title">Institucionalidad y ética</h4>
        <p class="landing_value_text">Actuamos con integridad, transparencia y responsabilidad.</p>
      </article>
      <article class="landing_value_card">
        <div class="landing_value_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h4 class="landing_value_title">Cooperación y colaboración</h4>
        <p class="landing_value_text">El trabajo conjunto como motor del desarrollo.</p>
      </article>
      <article class="landing_value_card">
        <div class="landing_value_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2v1"/><path d="M12 22v-3"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h3"/><path d="M19 12h3"/><path d="m4.93 19.07 1.41-1.41"/><path d="m17.66 6.34 1.41-1.41"/></svg>
        </div>
        <h4 class="landing_value_title">Innovación y apertura</h4>
        <p class="landing_value_text">Impulsamos nuevas ideas que favorezcan la competitividad.</p>
      </article>
      <article class="landing_value_card">
        <div class="landing_value_icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" x2="22" y1="12" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <h4 class="landing_value_title">Diversidad e integración</h4>
        <p class="landing_value_text">La diversidad de perspectivas como fortaleza.</p>
      </article>
    </div>
  </div>
</div>

<div class="landing_section landing_section_muted" id="servicios" aria-labelledby="landing_servicios_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_lg">
      <p class="landing_kicker">Qué Hacemos</p>
      <h2 class="landing_heading_2" id="landing_servicios_title">Articulamos actores, ordenamos agendas y promovemos <span class="landing_text_accent">proyectos colaborativos</span></h2>
      <p class="landing_lead">AIRE actúa como una plataforma institucional que conecta capacidades sectoriales y transversales para acompañar proyectos vinculados al desarrollo y la expansión internacional.</p>
    </header>
    <div class="landing_grid landing_grid_services">
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <h3 class="landing_service_title">Mesas sectoriales y público-privadas</h3>
        <p class="landing_service_text">Espacios de diálogo estratégico para analizar desafíos comunes, identificar oportunidades y generar propuestas de acción conjunta.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
        <h3 class="landing_service_title">Agenda B2B y networking estratégico</h3>
        <p class="landing_service_text">Encuentros estructurados que facilitan vínculos de calidad entre empresas, inversores, instituciones y referentes sectoriales.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg></div>
        <h3 class="landing_service_title">Diseño y gestión de proyectos</h3>
        <p class="landing_service_text">Acompañamiento institucional en iniciativas de expansión internacional, inversión, cooperación interempresarial y desarrollo sectorial.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/><path d="M8 7h6"/><path d="M8 11h8"/></svg></div>
        <h3 class="landing_service_title">Briefs, estudios y radars sectoriales</h3>
        <p class="landing_service_text">Contenidos estratégicos orientados a la toma de decisiones, elaborados desde una mirada aplicada y multisectorial.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
        <h3 class="landing_service_title">AIRE Academy</h3>
        <p class="landing_service_text">Programas, talleres y capacitaciones orientadas a líderes empresariales, con foco en internacionalización, gestión e innovación.</p>
      </article>
      <article class="landing_service_card">
        <div class="landing_service_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg></div>
        <h3 class="landing_service_title">Consultas estratégicas</h3>
        <p class="landing_service_text">Espacios de orientación estratégica para miembros, canalizados a través de Direcciones Sectoriales especializadas.</p>
      </article>
    </div>
  </div>
</div>

<div class="landing_section" id="estructura" aria-labelledby="landing_estructura_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_lg">
      <p class="landing_kicker">Nuestra Estructura Institucional</p>
      <h2 class="landing_heading_2" id="landing_estructura_title">Liderazgo <span class="landing_text_accent">humano</span> y especializado</h2>
      <p class="landing_lead">AIRE combina diversidad de perfiles, experiencia internacional y vocación colaborativa. Se construye sobre la base del compromiso, la ética y el trabajo conjunto.</p>
    </header>
    <div class="landing_grid landing_grid_2">
      <article class="landing_structure_card">
        <div class="landing_structure_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="landing_structure_body">
          <div class="landing_structure_headline">
            <h3 class="landing_structure_title">Board de Gobierno</h3>
            <span class="landing_badge">4 Oficiales</span>
          </div>
          <p class="landing_structure_text">Órgano de conducción estratégica que define lineamientos institucionales, prioridades de trabajo y supervisa el cumplimiento de la misión de AIRE.</p>
        </div>
      </article>
      <article class="landing_structure_card">
        <div class="landing_structure_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg></div>
        <div class="landing_structure_body">
          <div class="landing_structure_headline">
            <h3 class="landing_structure_title">Direcciones Sectoriales</h3>
            <span class="landing_badge">12 Direcciones</span>
          </div>
          <p class="landing_structure_text">12 direcciones que representan las principales industrias: Tecnología, Turismo, Real Estate, Startups, Arte &amp; Cultura, Comercio Internacional y más.</p>
        </div>
      </article>
      <article class="landing_structure_card">
        <div class="landing_structure_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <div class="landing_structure_body">
          <div class="landing_structure_headline">
            <h3 class="landing_structure_title">Oficinas Transversales</h3>
            <span class="landing_badge">5 Oficinas</span>
          </div>
          <p class="landing_structure_text">Soporte estratégico y técnico: Relaciones Institucionales, Academia, Servicios Profesionales, Comunicación y Logística.</p>
        </div>
      </article>
      <article class="landing_structure_card">
        <div class="landing_structure_icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="landing_structure_body">
          <div class="landing_structure_headline">
            <h3 class="landing_structure_title">Capítulos y Representaciones</h3>
            <span class="landing_badge">Madrid · Murcia</span>
          </div>
          <p class="landing_structure_text">Presencia institucional en distintos países y regiones para fortalecer la cooperación territorial y acompañar a los miembros en contextos locales.</p>
        </div>
      </article>
    </div>
  </div>
</div>

<div class="landing_section landing_section_muted" id="membresias" aria-labelledby="landing_membresias_title">
  <div class="landing_container">
    <header class="landing_section_intro landing_section_intro_center">
      <p class="landing_kicker">Ser Parte</p>
      <h2 class="landing_heading_2" id="landing_membresias_title">Conectamos líderes, <span class="landing_text_accent">Impulsamos oportunidades</span></h2>
      <p class="landing_lead landing_lead_center">Ser parte de AIRE implica integrarse a una red iberoamericana de empresas y líderes que comparten una mirada estratégica, institucional y de largo plazo.</p>
    </header>
    <div class="landing_plans">
      <article class="landing_plan">
        <h3 class="landing_plan_name">Corporativa Standard</h3>
        <p class="landing_plan_desc">Para empresas que desean integrarse activamente al ecosistema AIRE.</p>
        <ul class="landing_plan_list">
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Acceso preferencial a eventos y mesas sectoriales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Presencia en el directorio institucional de miembros</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Participación como observador en mesas sectoriales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>1 sesión anual de consulta con Direcciones Sectoriales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Acceso a AIRE Academy (1 capacitación/año)</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Contenidos institucionales: briefs y radar de oportunidades</span></li>
        </ul>
        <a href="#contacto" class="landing_plan_btn">Quiero ser parte<svg class="landing_plan_btn_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
      </article>
      <article class="landing_plan landing_plan_featured">
        <p class="landing_plan_tag">Más Popular</p>
        <h3 class="landing_plan_name">Corporativa Premium</h3>
        <p class="landing_plan_desc">Mayor nivel de involucramiento institucional y estratégico.</p>
        <ul class="landing_plan_list">
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Todo lo incluido en Standard</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Presentaciones ejecutivas en foros sectoriales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Encuentros cerrados con líderes empresariales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Mayor visibilidad en comunicación y eventos</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Acceso ampliado a instancias de diálogo sectorial</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Elegibilidad para Oficinas Transversales</span></li>
        </ul>
        <a href="#contacto" class="landing_plan_btn landing_plan_btn_accent">Quiero ser parte<svg class="landing_plan_btn_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
      </article>
      <article class="landing_plan">
        <h3 class="landing_plan_name">Estratégica AIRE</h3>
        <p class="landing_plan_desc">Rol institucional activo, acompañando el desarrollo a largo plazo.</p>
        <ul class="landing_plan_list">
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Todo lo incluido en Premium</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Participación en reuniones de Directorio (con voz)</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Acceso prioritario a espacios estratégicos</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Postulación a Direcciones Sectoriales</span></li>
          <li class="landing_plan_item"><svg class="landing_plan_check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Reconocimiento como actor estratégico del ecosistema</span></li>
        </ul>
        <a href="#contacto" class="landing_plan_btn">Quiero ser parte<svg class="landing_plan_btn_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
      </article>
    </div>
  </div>
</div>

<div class="landing_section" id="contacto" aria-labelledby="landing_contacto_title">
  <div class="landing_container">
    <div class="landing_contact_grid">
      <div class="landing_contact_intro">
        <p class="landing_kicker">Contacto</p>
        <h2 class="landing_heading_2" id="landing_contacto_title">Conectemos y <span class="landing_text_accent">construyamos juntos</span></h2>
        <p class="landing_contact_lead">Si te interesa conocer más sobre la Asociación, explorar una membresía, proponer una alianza institucional o realizar una consulta general, contactate con nuestro equipo.</p>
        <div class="landing_contact_items">
          <div class="landing_contact_item">
            <div class="landing_contact_icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </div>
            <div>
              <p class="landing_contact_item_title">Correo institucional</p>
              <p class="landing_contact_item_text"><a href="mailto:consultas@aireiberoamerica.org">consultas@aireiberoamerica.org</a></p>
            </div>
          </div>
          <div class="landing_contact_item">
            <div class="landing_contact_icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p class="landing_contact_item_title">Dirección</p>
              <p class="landing_contact_item_text">2700 Glades Cir. Suite 106, Weston, FL 33327</p>
            </div>
          </div>
          <div class="landing_contact_item">
            <div class="landing_contact_icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <div>
              <p class="landing_contact_item_title">WhatsApp</p>
              <p class="landing_contact_item_text"><a href="https://wa.me/17865872738" rel="noopener noreferrer" target="_blank">+1 (786) 587-2738</a></p>
            </div>
          </div>
        </div>
      </div>
      <form class="landing_form_card" action="#" method="post" novalidate>
        <div class="landing_form_row">
          <div class="landing_field">
            <label class="landing_field_label" for="contact-nombre">Nombre y Apellido</label>
            <input class="landing_input" id="contact-nombre" type="text" name="nombre" autocomplete="name" placeholder="Tu nombre completo" required>
          </div>
          <div class="landing_field">
            <label class="landing_field_label" for="contact-empresa">Empresa / Organización</label>
            <input class="landing_input" id="contact-empresa" type="text" name="empresa" autocomplete="organization" placeholder="Nombre de la empresa" required>
          </div>
        </div>
        <div class="landing_form_row">
          <div class="landing_field">
            <label class="landing_field_label" for="contact-cargo">Cargo</label>
            <input class="landing_input" id="contact-cargo" type="text" name="cargo" autocomplete="organization-title" placeholder="Tu cargo">
          </div>
          <div class="landing_field">
            <label class="landing_field_label" for="contact-ubicacion">País / Ciudad</label>
            <input class="landing_input" id="contact-ubicacion" type="text" name="ubicacion" autocomplete="address-level1" placeholder="Ej: Buenos Aires, Argentina">
          </div>
        </div>
        <div class="landing_form_row">
          <div class="landing_field">
            <label class="landing_field_label" for="contact-email">Correo electrónico</label>
            <input class="landing_input" id="contact-email" type="email" name="email" autocomplete="email" placeholder="tu@email.com" required>
          </div>
          <div class="landing_field">
            <label class="landing_field_label" for="contact-telefono">Teléfono (opcional)</label>
            <input class="landing_input" id="contact-telefono" type="tel" name="telefono" autocomplete="tel" placeholder="+1 234 567 890">
          </div>
        </div>
        <div class="landing_field">
          <label class="landing_field_label" for="contact-motivo">Motivo del contacto</label>
          <select class="landing_input landing_select" id="contact-motivo" name="motivo" required>
            <option value="" selected disabled>Seleccioná un motivo</option>
            <option value="membresias">Ser parte de AIRE (membresías)</option>
            <option value="alianzas">Alianzas institucionales</option>
            <option value="servicios">Servicios y proyectos</option>
            <option value="prensa">Prensa y comunicación</option>
            <option value="academy">AIRE Academy</option>
            <option value="otros">Otros</option>
          </select>
        </div>
        <div class="landing_field">
          <label class="landing_field_label" for="contact-mensaje">Mensaje</label>
          <textarea class="landing_input landing_textarea" id="contact-mensaje" name="mensaje" rows="4" placeholder="Detallá tu consulta..." required></textarea>
        </div>
        <button type="submit" class="landing_submit landing_submit_accent">
          Contactar al equipo AIRE
          <svg class="landing_submit_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </button>
        <p class="landing_form_note">AIRE no realiza asesoramiento individual ni comercial a través de este canal.</p>
      </form>
    </div>
  </div>
</div>

</main>

<div class="landing_footer">
  <div class="landing_container landing_footer_inner">
    <img src="img/logo.png" width="120" height="64" class="landing_footer_logo" alt="AIRE">
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
