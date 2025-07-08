const selectedLangSpan = document.querySelector('.selected-lang');

function changeLanguage(lang) {
    fetch(`lang/${lang}.json`)
        .then(res => res.json())
        .then(translations => {
            applyTranslations(translations);
            document.documentElement.lang = lang;
            localStorage.setItem('lang', lang);
            updateSelectedLanguageUI(lang);
        })
        .catch(err => console.error("Error cargando idioma:", err));
}

function applyTranslations(translations) {
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        const keys = key.split('.');
        let value = translations;

        for (const k of keys) {
            if (value[k] !== undefined) {
                value = value[k];
            } else {
                console.warn(`Falta traducción para: ${key}`);
                return;
            }
        }

        if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
            el.placeholder = value;
        } else {
            el.innerHTML = value; // permite etiquetas HTML
        }
    });
}


function updateSelectedLanguageUI(lang) {
    const langNames = {
        es: "Español",
        en: "English",
        fr: "Français",
        pt: "Português",
        zh: "简体中文"
    };
    if (selectedLangSpan) {
        selectedLangSpan.textContent = langNames[lang];
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const savedLang = localStorage.getItem('lang') || 'es';
    changeLanguage(savedLang);
});