/* ========================================
   JOMA ACCESORIOS - JAVASCRIPT
   Funcionalidad completa del sitio web
======================================== */

// ========================================
// VARIABLES GLOBALES
// ========================================

const menuToggle = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.nav-menu');
const slides = document.querySelectorAll('.slide');
const sliderDotsContainer = document.querySelector('.slider-dots');
const prevBtn = document.querySelector('.slider-btn.prev');
const nextBtn = document.querySelector('.slider-btn.next');
const contactForm = document.getElementById('contactForm');

let currentSlide = 0;
let slideInterval;
const slideDelay = 5000; // 5 segundos

// ========================================
// MENÚ RESPONSIVE
// ========================================

function toggleMenu() {
    menuToggle.classList.toggle('active');
    navMenu.classList.toggle('active');
}

// Event listener para el botón del menú
if (menuToggle) {
    menuToggle.addEventListener('click', toggleMenu);
}

// Cerrar menú al hacer clic en un enlace
document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
        if (navMenu.classList.contains('active')) {
            toggleMenu();
        }
    });
});

// Cerrar menú al hacer clic fuera de él
document.addEventListener('click', (e) => {
    if (!e.target.closest('.nav-container') && navMenu.classList.contains('active')) {
        toggleMenu();
    }
});

// ========================================
// SLIDER DE HERO
// ========================================

// Crear dots dinámicamente
function createSliderDots() {
    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('slider-dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        sliderDotsContainer.appendChild(dot);
    });
}

// Actualizar dots activos
function updateDots() {
    const dots = document.querySelectorAll('.slider-dot');
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
    });
}

// Mostrar slide específico
function showSlide(n) {
    // Validar rango
    if (n >= slides.length) {
        currentSlide = 0;
    } else if (n < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = n;
    }

    // Remover clase active de todos los slides
    slides.forEach(slide => {
        slide.classList.remove('active');
    });

    // Agregar clase active al slide actual
    slides[currentSlide].classList.add('active');

    // Actualizar dots
    updateDots();
}

// Ir al siguiente slide
function nextSlide() {
    showSlide(currentSlide + 1);
    resetSlideInterval();
}

// Ir al slide anterior
function prevSlide() {
    showSlide(currentSlide - 1);
    resetSlideInterval();
}

// Ir a un slide específico
function goToSlide(n) {
    showSlide(n);
    resetSlideInterval();
}

// Iniciar slider automático
function startSlideInterval() {
    slideInterval = setInterval(nextSlide, slideDelay);
}

// Reiniciar intervalo del slider
function resetSlideInterval() {
    clearInterval(slideInterval);
    startSlideInterval();
}

// Event listeners para los botones del slider
if (prevBtn) {
    prevBtn.addEventListener('click', prevSlide);
}

if (nextBtn) {
    nextBtn.addEventListener('click', nextSlide);
}

// Pausar slider cuando el mouse está sobre él
const sliderContainer = document.querySelector('.slider-container');
if (sliderContainer) {
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });

    sliderContainer.addEventListener('mouseleave', () => {
        startSlideInterval();
    });
}

// Soporte para navegación con teclado
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') {
        prevSlide();
    } else if (e.key === 'ArrowRight') {
        nextSlide();
    }
});

// ========================================
// VALIDACIÓN DE FORMULARIO
// ========================================

// Expresiones regulares para validación
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const phoneRegex = /^[\d\s\+\-\(\)]+$/;

// Mensajes de error
const errorMessages = {
    required: 'Este campo es obligatorio',
    email: 'Por favor ingresa un email válido',
    phone: 'Por favor ingresa un teléfono válido',
    minLength: 'El mensaje debe tener al menos 10 caracteres'
};

// Validar campo individual
function validateField(field) {
    const formGroup = field.closest('.form-group');
    const errorElement = formGroup.querySelector('.error-message');
    let isValid = true;
    let errorMessage = '';

    // Validar campos requeridos
    if (field.hasAttribute('required') && !field.value.trim()) {
        isValid = false;
        errorMessage = errorMessages.required;
    }

    // Validar email
    else if (field.type === 'email' && field.value.trim()) {
        if (!emailRegex.test(field.value.trim())) {
            isValid = false;
            errorMessage = errorMessages.email;
        }
    }

    // Validar teléfono
    else if (field.type === 'tel' && field.value.trim()) {
        if (!phoneRegex.test(field.value.trim()) || field.value.trim().length < 7) {
            isValid = false;
            errorMessage = errorMessages.phone;
        }
    }

    // Validar longitud mínima del mensaje
    else if (field.name === 'message' && field.value.trim()) {
        if (field.value.trim().length < 10) {
            isValid = false;
            errorMessage = errorMessages.minLength;
        }
    }

    // Aplicar clases y mensajes
    if (!isValid) {
        formGroup.classList.add('error');
        errorElement.textContent = errorMessage;
    } else {
        formGroup.classList.remove('error');
        errorElement.textContent = '';
    }

    return isValid;
}

// Validar formulario completo
function validateForm() {
    const fields = contactForm.querySelectorAll('input[required], select[required], textarea[required]');
    let isFormValid = true;

    fields.forEach(field => {
        if (!validateField(field)) {
            isFormValid = false;
        }
    });

    return isFormValid;
}

// Event listeners para validación en tiempo real
if (contactForm) {
    const formFields = contactForm.querySelectorAll('input, select, textarea');

    formFields.forEach(field => {
        // Validar al perder el foco
        field.addEventListener('blur', () => {
            validateField(field);
        });

        // Limpiar error al escribir
        field.addEventListener('input', () => {
            const formGroup = field.closest('.form-group');
            if (formGroup.classList.contains('error')) {
                validateField(field);
            }
        });
    });

    // Manejar envío del formulario
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Validar formulario
        if (!validateForm()) {
            // Hacer scroll al primer error
            const firstError = contactForm.querySelector('.form-group.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            return;
        }

        // Obtener datos del formulario
        const formData = {
            name: document.getElementById('name').value.trim(),
            email: document.getElementById('email').value.trim(),
            phone: document.getElementById('phone').value.trim(),
            subject: document.getElementById('subject').value,
            message: document.getElementById('message').value.trim()
        };

        // Simular envío (aquí iría la llamada real al backend)
        const submitButton = contactForm.querySelector('.submit-button');
        const successMessage = contactForm.querySelector('.form-success');

        // Deshabilitar botón y mostrar loader
        submitButton.disabled = true;
        submitButton.classList.add('loading');

        // Simular delay de red
        setTimeout(() => {
            // Ocultar loader
            submitButton.classList.remove('loading');
            submitButton.disabled = false;

            // Mostrar mensaje de éxito
            successMessage.textContent = '¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.';
            successMessage.classList.add('show');

            // Resetear formulario
            contactForm.reset();

            // Ocultar mensaje después de 5 segundos
            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 5000);

            // Scroll suave al mensaje de éxito
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });

            // En producción, aquí enviarías los datos:
            // fetch('/api/contact', {
            //     method: 'POST',
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify(formData)
            // })
            // .then(response => response.json())
            // .then(data => {
            //     // Manejar respuesta exitosa
            // })
            // .catch(error => {
            //     // Manejar error
            // });

        }, 2000);
    });
}

// ========================================
// SMOOTH SCROLL PARA NAVEGACIÓN
// ========================================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');

        // Ignorar enlaces con solo "#"
        if (href === '#') {
            e.preventDefault();
            return;
        }

        const target = document.querySelector(href);

        if (target) {
            e.preventDefault();

            // Calcular posición considerando el header fijo
            const headerHeight = document.querySelector('.header').offsetHeight;
            const targetPosition = target.offsetTop - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// ========================================
// ANIMACIONES AL HACER SCROLL
// ========================================

// Observador de intersección para animaciones
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const animateOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Elementos a animar
const elementsToAnimate = document.querySelectorAll(
    '.product-card, .value-card, .testimonial-card, .about-item'
);

elementsToAnimate.forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(30px)';
    element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    animateOnScroll.observe(element);
});

// ========================================
// HEADER CON EFECTO AL HACER SCROLL
// ========================================

let lastScroll = 0;
const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    // Agregar sombra al header cuando se hace scroll
    if (currentScroll > 50) {
        header.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.08)';
    }

    lastScroll = currentScroll;
});

// ========================================
// CONTADOR ANIMADO PARA ESTADÍSTICAS
// ========================================

function animateCounter(element, target, duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16); // 60 FPS
    let current = start;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target + (element.dataset.suffix || '');
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current) + (element.dataset.suffix || '');
        }
    }, 16);
}

// Observador para activar contadores cuando sean visibles
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
            entry.target.classList.add('counted');
            const target = parseInt(entry.target.dataset.target);
            animateCounter(entry.target, target);
        }
    });
}, { threshold: 0.5 });

// Configurar contadores
document.querySelectorAll('.stat-number').forEach((stat, index) => {
    const numbers = ['500', '1000', '98', '24'];
    const suffixes = ['+', '+', '%', '/7'];

    stat.dataset.target = numbers[index];
    stat.dataset.suffix = suffixes[index];
    stat.textContent = '0' + suffixes[index];

    statsObserver.observe(stat);
});

// ========================================
// PREVENCIÓN DE ENVÍO MÚLTIPLE DE FORMULARIO
// ========================================

let formSubmitting = false;

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        if (formSubmitting) {
            e.preventDefault();
            return false;
        }
        formSubmitting = true;

        // Reset después de 3 segundos
        setTimeout(() => {
            formSubmitting = false;
        }, 3000);
    });
}

// ========================================
// LAZY LOADING DE IMÁGENES
// ========================================

const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            if (img.dataset.src) {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        }
    });
});

// Observar todas las imágenes con data-src
document.querySelectorAll('img[data-src]').forEach(img => {
    imageObserver.observe(img);
});

// ========================================
// BOTÓN DE SCROLL TO TOP (opcional)
// ========================================

// Crear botón de scroll to top
const scrollTopBtn = document.createElement('button');
scrollTopBtn.innerHTML = '↑';
scrollTopBtn.className = 'scroll-top-btn';
scrollTopBtn.style.cssText = `
    position: fixed;
    bottom: 100px;
    right: 30px;
    width: 50px;
    height: 50px;
    background: var(--color-primary);
    color: white;
    border: none;
    border-radius: 50%;
    font-size: 24px;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 998;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
`;

document.body.appendChild(scrollTopBtn);

// Mostrar/ocultar botón según scroll
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 500) {
        scrollTopBtn.style.opacity = '1';
        scrollTopBtn.style.visibility = 'visible';
    } else {
        scrollTopBtn.style.opacity = '0';
        scrollTopBtn.style.visibility = 'hidden';
    }
});

// Funcionalidad del botón
scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

scrollTopBtn.addEventListener('mouseenter', () => {
    scrollTopBtn.style.transform = 'scale(1.1)';
    scrollTopBtn.style.background = 'var(--color-primary-dark)';
});

scrollTopBtn.addEventListener('mouseleave', () => {
    scrollTopBtn.style.transform = 'scale(1)';
    scrollTopBtn.style.background = 'var(--color-primary)';
});

// ========================================
// PREVENIR ZOOM EN iOS EN INPUTS
// ========================================

if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
    const inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.style.fontSize = '16px';
        });
    });
}

// ========================================
// INICIALIZACIÓN
// ========================================

document.addEventListener('DOMContentLoaded', () => {
    // Inicializar slider
    if (slides.length > 0) {
        createSliderDots();
        showSlide(0);
        startSlideInterval();
    }

    // Log de inicialización
    console.log('%c✨ JOMA ACCESORIOS ✨', 'color: #d4a373; font-size: 20px; font-weight: bold;');
    console.log('%cSitio web desarrollado por Josselyn Barre & Mabelin Caicedo', 'color: #6b5d52; font-size: 12px;');
    console.log('%cUNESUM - 2025', 'color: #6b5d52; font-size: 12px;');
});

// ========================================
// MANEJO DE ERRORES GLOBALES
// ========================================

window.addEventListener('error', (e) => {
    console.error('Error detectado:', e.message);
    // En producción, aquí podrías enviar el error a un servicio de logging
});

// ========================================
// DETECCIÓN DE MODO OFFLINE
// ========================================

window.addEventListener('online', () => {
    console.log('Conexión restaurada');
    // Mostrar notificación al usuario si es necesario
});

window.addEventListener('offline', () => {
    console.log('Sin conexión a internet');
    // Mostrar notificación al usuario
});

// ========================================
// PERFORMANCE: REDUCIR ANIMACIONES SI ES NECESARIO
// ========================================

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

if (prefersReducedMotion.matches) {
    // Deshabilitar animaciones automáticas para usuarios con preferencia de movimiento reducido
    document.documentElement.style.setProperty('--transition-fast', '0s');
    document.documentElement.style.setProperty('--transition-normal', '0s');
    document.documentElement.style.setProperty('--transition-slow', '0s');

    clearInterval(slideInterval);
}

// ========================================
// SOPORTE PARA TOUCH SWIPE EN SLIDER
// ========================================

let touchStartX = 0;
let touchEndX = 0;

if (sliderContainer) {
    sliderContainer.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    sliderContainer.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });
}

function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;

    if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
            // Swipe left - siguiente slide
            nextSlide();
        } else {
            // Swipe right - slide anterior
            prevSlide();
        }
    }
}

// ========================================
// ANALYTICS (PREPARADO PARA GOOGLE ANALYTICS)
// ========================================

// Función para trackear eventos
function trackEvent(category, action, label) {
    // En producción, aquí iría el código de Google Analytics
    // gtag('event', action, {
    //     'event_category': category,
    //     'event_label': label
    // });

    console.log('Event tracked:', category, action, label);
}

// Trackear clics en botones importantes
document.querySelectorAll('.cta-button, .product-cta, .cta-primary').forEach(button => {
    button.addEventListener('click', () => {
        trackEvent('CTA', 'click', button.textContent);
    });
});

// Trackear envío de formulario
if (contactForm) {
    contactForm.addEventListener('submit', () => {
        trackEvent('Form', 'submit', 'Contact Form');
    });
}

// ========================================
// FIN DEL SCRIPT
// ========================================

console.log('✅ JavaScript cargado correctamente');