const supportedLangs = ['es', 'en'];
const langLabels = { es: 'ES', en: 'EN' };

async function setLang(page, lang) {
  document.querySelectorAll('[data-current-lang]').forEach(el => {
    el.textContent = langLabels[lang] || lang.toUpperCase();
  });
  document.documentElement.lang = lang === 'en' ? 'en' : 'es';
  localStorage.setItem('lang', lang);

  try {
    const url = `lang/${page}/${lang}.json`;
    const res = await fetch(url);

    if (!res.ok) {
      throw new Error(`Failed to load ${url}, status ${res.status}`);
    }

    const dict = await res.json();
    document.querySelectorAll('[data-i18n]').forEach(el => {
      const key = el.getAttribute('data-i18n');
      if (dict[key]) {
        el.textContent = dict[key];
      }
    });
    document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
      const key = el.getAttribute('data-i18n-placeholder');
      if (dict[key]) {
        el.setAttribute('placeholder', dict[key]);
      }
    });
    document.querySelectorAll('[data-i18n-html]').forEach(el => {
      const key = el.getAttribute('data-i18n-html');
      if (dict[key]) {
        el.innerHTML = dict[key];
      }
    });

  } catch (err) {
    console.error(`Language load error for ${lang}:`, err);
  }
}

function initLang(page = 'landing', defaultLang = 'en') {
  const storedLang = localStorage.getItem('lang');
  const browserLang = (navigator.language || '').split('-')[0];

  const lang = storedLang && supportedLangs.includes(storedLang)
    ? storedLang
    : (supportedLangs.includes(browserLang) ? browserLang : defaultLang);

  setLang(page, lang);
}

function setupLangDropdown(page) {
  const selectors = document.querySelectorAll('[data-lang-selector]');
  if (!selectors.length) return;

  selectors.forEach(selector => {
    let dropdown = selector.querySelector('.lang_dropdown');
    if (!dropdown) {
      dropdown = document.createElement('div');
      dropdown.className = 'lang_dropdown';
      supportedLangs.forEach(lang => {
        const opt = document.createElement('button');
        opt.type = 'button';
        opt.className = 'lang_option';
        opt.dataset.lang = lang;
        opt.textContent = langLabels[lang];
        dropdown.appendChild(opt);
      });
      selector.style.position = 'relative';
      selector.appendChild(dropdown);
    }

    function closeDropdown() {
      dropdown.classList.remove('is_open');
      document.removeEventListener('click', closeDropdown);
    }

    selector.addEventListener('click', function(e) {
      e.stopPropagation();
      if (dropdown.classList.toggle('is_open')) {
        requestAnimationFrame(() => document.addEventListener('click', closeDropdown));
      } else {
        closeDropdown();
      }
    });

    selector.addEventListener('keydown', function(e) {
      if (e.key !== 'Enter' && e.key !== ' ') return;
      e.preventDefault();
      selector.click();
    });

    dropdown.querySelectorAll('.lang_option').forEach(opt => {
      opt.addEventListener('click', function(e) {
        e.stopPropagation();
        const lang = this.dataset.lang;
        setLang(page, lang);
        closeDropdown();
      });
    });
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', function() {
    const page = document.body.dataset.i18nPage || 'landing';
    initLang(page, 'en');
    setupLangDropdown(page);
  });
} else {
  const page = document.body.dataset.i18nPage || 'landing';
  initLang(page, 'en');
  setupLangDropdown(page);
}
