<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JOMA ACCESORIOS - Accesorios modernos, económicos y personalizables para expresar tu estilo único">
    <meta name="keywords" content="accesorios, joyería, bisutería, aretes, collares, pulseras, anillos, carteras, billeteras, personalizados">
    <title>JOMA ACCESORIOS | Accesorios Modernos y Personalizados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header con Navegación -->
    <header class="header">
        <nav class="nav-container">
            <div class="logo">
                <h1>JOMA ACCESORIOS</h1>
            </div>
            <button class="menu-toggle" aria-label="Abrir menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#sobre-nosotros">Nosotros</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#por-que-elegirnos">¿Por qué elegirnos?</a></li>
                <li><a href="#testimonios">Testimonios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section con Slider -->
    <section id="inicio" class="hero">
        <div class="slider-container">
            <div class="slide active">
                <img src="https://img.freepik.com/foto-gratis/vista-lujoso-anillo-dorado-exhibicion-joyas-fieltro_23-2150329654.jpg?semt=ais_hybrid&w=740&q=80" alt="Accesorios elegantes">
                <div class="slide-content">
                    <h2 class="slide-title">Expresa Tu Estilo Único</h2>
                    <p class="slide-text">Accesorios modernos, económicos y personalizables que complementan tu personalidad</p>
                    <a href="#productos" class="cta-button">Descubre Nuestra Colección</a>
                </div>
            </div>
            <div class="slide">
                <img src="https://www.pomstandard.com/wp-content/uploads/sites/4/2021/02/pagina-web-joyerias.jpg" alt="Personalización de accesorios">
                <div class="slide-content">
                    <h2 class="slide-title">Personalización Especial</h2>
                    <p class="slide-text">Crea accesorios únicos con nombres, iniciales y diseños exclusivos para ti</p>
                    <a href="#contacto" class="cta-button">Solicita Tu Diseño</a>
                </div>
            </div>
            <div class="slide">
                <img src="https://www.elatelierdecatalina.com/cdn/shop/articles/1-Par-Moda-Color-S-lido-Giro-Aleaci-n-Asim-trico-Enchapado-Mujeres-Aretes-3.webp?v=1698204448" alt="Regalos especiales">
                <div class="slide-content">
                    <h2 class="slide-title">El Regalo Perfecto</h2>
                    <p class="slide-text">Sets especiales listos para regalo con empaques hermosos y detalles únicos</p>
                    <a href="#productos" class="cta-button">Ver Sets de Regalo</a>
                </div>
            </div>
            <button class="slider-btn prev" aria-label="Anterior">‹</button>
            <button class="slider-btn next" aria-label="Siguiente">›</button>
            <div class="slider-dots"></div>
        </div>
    </section>

    <!-- Urgencia y Llamado a la Acción -->
    <section class="urgency-banner">
        <div class="container">
            <p class="urgency-text">🎁 <strong>Oferta Limitada:</strong> 2x1 en aretes seleccionados solo esta semana</p>
            <a href="#contacto" class="urgency-cta">Aprovecha Ahora</a>
        </div>
    </section>

    <!-- Sobre Nosotros -->
    <section id="sobre-nosotros" class="about">
        <div class="container">
            <div class="section-header">
                <h2>Conoce JOMA ACCESORIOS</h2>
                <p class="section-subtitle">Tu tienda de confianza para accesorios que reflejan tu esencia</p>
            </div>
            <div class="about-content">
                <div class="about-item">
                    <div class="about-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h3>Nuestra Misión</h3>
                    <p>Brindar accesorios modernos, accesibles y de alta calidad que permitan a nuestras clientes expresar su estilo, personalidad y elegancia sin límites.</p>
                </div>
                <div class="about-item">
                    <div class="about-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3>Nuestra Visión</h3>
                    <p>Convertirnos en una marca líder de accesorios en el mercado local, reconocida por su calidad, variedad y experiencia de compra excepcional.</p>
                </div>
                <div class="about-item">
                    <div class="about-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Nuestro Compromiso</h3>
                    <p>Ofrecer productos modernos y asequibles con atención personalizada, entregas rápidas y diseños que siguen las últimas tendencias de moda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Productos y Servicios -->
    <section id="productos" class="products">
    <div class="container">
        <div class="section-header">
            <h2>Nuestra Colección</h2>
            <p class="section-subtitle">Descubre accesorios que transforman tu look</p>
        </div>
        <div class="products-grid">
         <?php
          include 'conexion.php'; // Conectamos a la base de datos
          $query = "SELECT * FROM productos";
          $resultado = mysqli_query($conexion, $query);
          while($item = mysqli_fetch_array($resultado)) {
          ?>
        <div class="product-card">
            <div class="product-image">
                <img src="img/<?php echo $item['imagen']; ?>" alt="<?php echo $item['nombre']; ?>">
                <span class="product-badge">Desde $<?php echo $item['precio']; ?></span>
            </div>
            <div class="product-info">
                <h3><?php echo $item['nombre']; ?></h3>
                <p><?php echo $item['descripcion']; ?></p>
                <ul class="product-benefits">
                    <li>✓ Stock disponible: <?php echo $item['stock']; ?></li>
                </ul>
            </div>
        </div>
         <?php 
    } // Cerramos el bucle while
          ?>
        </div>
            </a>
            
            <a href="collares.html" target="_blank" class="product-card clickable-card">
                <div class="product-image">
                    <img src="https://m.media-amazon.com/images/I/71krsOTk3tL._AC_UY1000_.jpg" alt="Collares elegantes">
                    <span class="product-badge">Desde $3</span>
                </div>
                <div class="product-info">
                    <h3>Collares y Pulseras</h3>
                    <p>Combina tendencia y elegancia con nuestras cadenas, dijes y brazaletes personalizables.</p>
                    <ul class="product-benefits">
                        <li>✓ Personalización disponible</li>
                        <li>✓ Materiales duraderos</li>
                        <li>✓ Acabados premium</li>
                    </ul>
                </div>
            </a>
            
            <a href="anillos.html" target="_blank" class="product-card clickable-card">
                <div class="product-image">
                    <img src="https://www.customima.com/cdn/shop/articles/tipos-de-anillos.png?v=1671007384&width=2048" alt="Anillos de moda">
                    <span class="product-badge">Bestseller</span>
                </div>
                <div class="product-info">
                    <h3>Anillos</h3>
                    <p>Desde anillos delicados hasta statement pieces que capturan miradas. Encuentra tu favorito.</p>
                    <ul class="product-benefits">
                        <li>✓ Todas las tallas</li>
                        <li>✓ Diseños exclusivos</li>
                        <li>✓ Grabado disponible</li>
                    </ul>
                </div>
            </a>
            
            <a href="carteras.html" target="_blank" class="product-card clickable-card">
                <div class="product-image">
                    <img src="https://img.kwcdn.com/product/open/dadd278012dd4562bda4c31b34fbb093-goods.jpeg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Carteras y billeteras">
                    <span class="product-badge">Novedad</span>
                </div>
                <div class="product-info">
                    <h3>Carteras y Billeteras</h3>
                    <p>Complementa tu estilo con nuestras carteras funcionales y billeteras compactas de diseño moderno.</p>
                    <ul class="product-benefits">
                        <li>✓ Materiales de calidad</li>
                        <li>✓ Diseños prácticos</li>
                        <li>✓ Varios colores</li>
                    </ul>
                </div>
            </a>
            
            <a href="#contacto" class="product-card featured clickable-card">
                <div class="product-image">
                    <img src="https://effigia.ec/wp-content/uploads/2024/08/Ejemplos-copy-1024x545.png" alt="Accesorios personalizados">
                    <span class="product-badge special">⭐ Especial</span>
                </div>
                <div class="product-info">
                    <h3>Accesorios Personalizados</h3>
                    <p>Crea piezas únicas con nombres, iniciales, fechas especiales o mensajes que tienen significado para ti.</p>
                    <ul class="product-benefits">
                        <li>✓ 100% personalizable</li>
                        <li>✓ Diseño exclusivo</li>
                        <li>✓ Regalo perfecto</li>
                    </ul>
                    <span class="product-cta">Personaliza Ahora</span>
                </div>
            </a>
            
            <a href="sets.html" target="_blank" class="product-card clickable-card">
                <div class="product-image">
                    <img src="https://image.made-in-china.com/2f0j00zhLRfZUlOnbg/Customized-Mother-s-Day-Gift-Set-with-Butterfly-Metal-Jewelry-Set-and-Watch.webp" alt="Sets de regalo">
                    <span class="product-badge">Sets</span>
                </div>
                <div class="product-info">
                    <h3>Sets de Regalo</h3>
                    <p>Combinaciones perfectas listas para regalar con empaques hermosos y detalles especiales.</p>
                    <ul class="product-benefits">
                        <li>✓ Empaque premium</li>
                        <li>✓ Tarjeta incluida</li>
                        <li>✓ Listo para sorprender</li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
</section>

    <!-- Por Qué Elegirnos (Propuesta de Valor) -->
    <section id="por-que-elegirnos" class="value-proposition">
        <div class="container">
            <div class="section-header">
                <h2>¿Por Qué Elegir JOMA ACCESORIOS?</h2>
                <p class="section-subtitle">Más que accesorios, una experiencia única de compra</p>
            </div>
            <div class="value-grid">
                <div class="value-card">
                    <div class="value-icon">🎨</div>
                    <h3>Diseños Únicos</h3>
                    <p>Actualizamos constantemente nuestro inventario siguiendo las últimas tendencias de TikTok e Instagram para que siempre encuentres algo nuevo.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">💰</div>
                    <h3>Precios Accesibles</h3>
                    <p>Accesorios de calidad sin sacrificar tu presupuesto. Desde $1 hasta $10, con opciones para todos los gustos y bolsillos.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">✨</div>
                    <h3>Personalización Total</h3>
                    <p>Convierte cada accesorio en una pieza única con nombres, iniciales, fechas o diseños especiales que reflejan tu historia.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🚀</div>
                    <h3>Entrega Rápida</h3>
                    <p>Entregas el mismo día en Manta y Jipijapa. Envíos a toda la provincia de Manabí con servicio de courier confiable.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">💬</div>
                    <h3>Atención Personalizada</h3>
                    <p>Asesoría directa por WhatsApp e Instagram para ayudarte a elegir la combinación perfecta o el regalo ideal.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🎁</div>
                    <h3>Empaques Premium</h3>
                    <p>Todos nuestros productos vienen en empaques hermosos listos para regalo, sin costo adicional. Porque los detalles importan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Prueba Social / Autoridad -->
    <section class="social-proof">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Clientes Felices</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1000+</div>
                    <div class="stat-label">Productos Vendidos</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Satisfacción</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Atención Online</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>Lo Que Dicen Nuestras Clientas</h2>
                <p class="section-subtitle">Historias reales de quienes ya confiaron en nosotros</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Compré un collar personalizado con las iniciales de mi hija y quedó hermoso. La atención fue súper rápida y el empaque divino. Totalmente recomendado."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <h4>María González</h4>
                            <p>Manta, Ecuador</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Los aretes que pedí llegaron el mismo día y son exactamente como en las fotos. Los precios son increíbles y la calidad es excelente. Ya hice mi segunda compra."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Andrea Ramírez</h4>
                            <p>Jipijapa, Ecuador</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Necesitaba un regalo de último momento y me salvaron. El set que armaron estaba precioso y mi amiga quedó encantada. Definitivamente volveré a comprar."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">C</div>
                        <div class="author-info">
                            <h4>Carolina Vélez</h4>
                            <p>Portoviejo, Ecuador</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Llamado a la Acción Intermedio -->
    <section class="cta-section">
        <div class="container">
            <h2>¿Lista Para Encontrar Tu Accesorio Perfecto?</h2>
            <p>Únete a cientos de clientas que ya expresan su estilo con JOMA ACCESORIOS</p>
            <div class="cta-buttons">
                <a href="#contacto" class="cta-primary">Hacer Mi Pedido</a>
                <a href="https://wa.me/593990186354" target="_blank" class="cta-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Chatear en WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Formulario de Contacto -->
    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contáctanos</h2>
                <p class="section-subtitle">Estamos aquí para ayudarte a encontrar el accesorio perfecto</p>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Información de Contacto</h3>
                    <div class="contact-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <div>
                            <h4>Ubicación</h4>
                            <p>Manta y Jipijapa, Manabí, Ecuador</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <div>
                            <h4>Email</h4>
                            <p>contacto@jomaaccesorios.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <div>
                            <h4>Teléfono / WhatsApp</h4>
                            <p>+593 98 765 4321</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <h4>Síguenos en Redes Sociales</h4>
                        <div class="social-icons">
                            <a href="https://instagram.com/jomaaccesorios" target="_blank" aria-label="Instagram">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="https://facebook.com/jomaaccesorios" target="_blank" aria-label="Facebook">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="https://tiktok.com/@jomaaccesorios" target="_blank" aria-label="TikTok">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <form class="contact-form" id="contactForm" method="POST" action="enviar.php">
                    <div class="form-group">
                        <label for="name">Nombre Completo *</label>
                        <input type="text" id="name" name="name" required placeholder="Tu nombre">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required placeholder="tu@email.com">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono / WhatsApp</label>
                        <input type="tel" id="phone" name="phone" placeholder="+593 98 765 4321">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="subject">Asunto *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Selecciona una opción</option>
                            <option value="consulta">Consulta General</option>
                            <option value="personalizado">Accesorio Personalizado</option>
                            <option value="pedido">Realizar Pedido</option>
                            <option value="regalo">Set de Regalo</option>
                            <option value="otro">Otro</option>
                        </select>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje *</label>
                        <textarea id="message" name="message" required rows="5" placeholder="Cuéntanos qué necesitas..."></textarea>
                        <span class="error-message"></span>
                    </div>
                    <button type="submit" class="submit-button">
                        <span class="button-text">Enviar Mensaje</span>
                        <span class="button-loader"></span>
                    </button>
                    <div class="form-success"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>JOMA ACCESORIOS</h3>
                    <p>Accesorios modernos, económicos y personalizables que reflejan tu estilo único.</p>
                    <div class="footer-social">
                        <a href="https://instagram.com/jomaaccesorios" target="_blank" aria-label="Instagram">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://facebook.com/jomaaccesorios" target="_blank" aria-label="Facebook">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@jomaaccesorios" target="_blank" aria-label="TikTok">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/593990186354" target="_blank" aria-label="WhatsApp">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Enlaces Rápidos</h4>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
                        <li><a href="#productos">Productos</a></li>
                        <li><a href="#testimonios">Testimonios</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Productos</h4>
                    <ul>
                        <li><a href="#productos">Aretes</a></li>
                        <li><a href="#productos">Collares y Pulseras</a></li>
                        <li><a href="#productos">Anillos</a></li>
                        <li><a href="#productos">Carteras</a></li>
                        <li><a href="#productos">Personalizados</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Horario</h4>
                    <p><strong>Lunes - Sábado:</strong><br>9:00 AM - 7:00 PM</p>
                    <p><strong>Domingo:</strong><br>10:00 AM - 5:00 PM</p>
                    <p><strong>Atención Online:</strong><br>24/7 por WhatsApp</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 JOMA ACCESORIOS. Todos los derechos reservados.</p>
                <p>Desarrollado por <strong>Josselyn Barre & Mabelin Caicedo</strong> | UNESUM</p>
            </div>
        </div>
    </footer>

    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/593990186354" class="whatsapp-float" target="_blank" aria-label="Contactar por WhatsApp">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </a>

    <script src="script.js"></script>
</body>
</html>