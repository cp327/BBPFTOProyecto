<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/public/css/style.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="assets/public/img/logoNoFondo.png">

    <title>B&B Profesional - Financial Tourism and Operations</title>

    <meta name="description" content="B&B Profesional | Financial Tourism and Operations. Impulsamos negocios turísticos con soluciones legales, financieras, operativas y de marketing.">
    <meta name="keywords" content="consultoría financiera, asesoría financiera, análisis financiero, planificación financiera, finanzas empresariales, gestión financiera, evaluación financiera, optimización de recursos, diagnóstico financiero, estados financieros, gestión hotelera, operaciones hoteleras, auditoría hotelera, apertura de hoteles, control operativo hotelero, administración de hoteles, capacitación hotelera, protocolos de servicio, estándares de calidad en hoteles, consultoría para hoteles, turismo corporativo, viajes de negocios, turismo financiero, turismo profesional, experiencias empresariales, viajes empresariales personalizados, eventos empresariales, turismo ejecutivo, turismo de convenciones, rutas de negocios, asesoría empresarial, estrategia organizacional, eficiencia operativa, formación profesional, desarrollo organizacional, mejora de procesos, consultoría integral, soluciones empresariales, negocios en Colombia, crecimiento empresarial">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="B&B Profesional - Financial Tourism and Operations">
    <meta property="og:description" content="Expertos en el sector turístico: hotelería, gastronomía, finanzas, operaciones, legal, marketing y más. Soluciones integrales para negocios turísticos.">
    <meta property="og:url" content="https://bybturismoynegocios.com">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="B&B Profesional">
    <meta property="og:image" content="assets/public/img/logo.png">
    <meta property="og:locale" content="es_CO">
</head>

<body class="bg-white text-gray-800" id="top">

    <!-- Alerta de Cookies -->
    <div id="cookie-banner" class="fixed bottom-0 left-0 w-full bg-gray-800 text-white p-4 z-50 hidden">
        <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-center sm:text-left">
            Usamos cookies para mejorar la experiencia. 
            <a href="#" class="underline text-blue-300 hover:text-blue-400">Más información</a>
            </p>
            <button id="accept-cookies" class="bg-blue-300 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded transition">
            Aceptar
            </button>
        </div>
    </div>

    <!-- Header Fijo -->
    <header class="bg-blue-400 text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
        
        <a href="#top" class="flex items-center space-x-2 text-white">
        <img src="assets/public/img/logoNoFondo.png" alt="Logo B&B" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 object-contain" />
        <!-- Nombre de la empresa -->
        <h1 class="text-lg font-bold">B&B<br>Profesional</h1>
        </a>

        <nav class="hidden sm:flex space-x-6 text-sm">
        <a href="#quienes-somos" class="hover:underline">¿Quiénes somos?</a>
        <a href="#valores" class="hover:underline">Valores</a>
        <a href="#servicios" class="hover:underline">Servicios</a>
        <a href="#socios" class="hover:underline">Socios</a>
        <a href="#blog" class="hover:underline">Blog</a>
        </nav>

        <a href="#contacto" class="text-blue-500 bg-white px-3 py-1 rounded-md font-semibold text-sm hover:bg-blue-100 transition ml-4">
        Contacto
        </a>

        <button id="menuBtn" class="text-white text-2xl sm:hidden ml-3 focus:outline-none">☰</button>
    </div>

    <div id="mobileMenu" class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden sm:hidden bg-blue-700 px-4 text-sm">
        <a href="#quienes-somos" class="block py-2 border-b border-blue-600 hover:underline text-white">¿Quiénes somos?</a>
        <a href="#valores" class="block py-2 border-b border-blue-600 hover:underline text-white">Valores</a>
        <a href="#servicios" class="block py-2 border-b border-blue-600 hover:underline text-white">Servicios</a>
        <a href="#socios" class="block py-2 border-b border-blue-600 hover:underline text-white">Socios</a>
        <a href="#blog" class="block py-2 border-b border-blue-600 hover:underline text-white">Blog</a>
    </div>
    </header>


    <!-- Hero con Parallax -->
    <section class="h-[50vh] sm:h-[70vh] bg-fixed bg-center bg-cover flex items-center justify-center text-white text-center px-4"
        style="background-image: url('assets/public/img/cartagena3.jpeg');">
        <div class="bg-blue-500/80 p-4 sm:p-10 rounded-xl w-full max-w-[90%] sm:max-w-3xl">
            <h2 class="text-2xl sm:text-4xl font-bold">Expertos en Finanzas y Turismo</h2>
            <p class="mt-2 sm:mt-4 text-sm sm:text-lg">Consultoría, auditoría y operaciones para el sector hotelero y turístico.</p>
        </div>
    </section>

    <!-- ¿Quiénes somos? -->
    <section id="quienes-somos" class="py-12 px-4 sm:px-6 max-w-7xl mx-auto scroll-mt-mobile">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-500 mb-6 text-center">¿Quiénes somos?</h2>
        <p class="text-base sm:text-lg text-gray-700 leading-relaxed text-justify">
            Somos un grupo interdisciplinario de profesionales hoteleros con más de 30 años de experiencia en el sector turístico nacional e internacional. Nuestra trayectoria en cadenas como <strong>Accor, Intercontinental, Hilton y Decameron</strong> respalda nuestro conocimiento en altos estándares operativos y de servicio.
            <br><br>
            Actualmente operamos hoteles en <strong>Montería</strong> y <strong>Cartagena</strong>, lo que nos permite mantenernos conectados con las tendencias actuales del mercado. Además, somos propietarios de la agencia <strong>Kazabe Luxury Travel</strong>, lo que fortalece nuestra capacidad comercial y amplía nuestros canales de distribución.
            <br><br>
            Nuestro compromiso es aportar valor real a su negocio, generando alianzas estratégicas bajo un enfoque de beneficio mutuo.
            <br><br>
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div>
                <h3 class="text-lg sm:text-xl font-semibold text-blue-700">Misión</h3>
                <p class="text-sm sm:text-base">Brindar soluciones integrales en finanzas, auditoría, gestión operativa y estratégica, que impulsen la rentabilidad, el control y la eficiencia de empresas turísticas y hoteleras, promoviendo una toma de decisiones basada en información confiable y una mejora continua en sus procesos.</p>
            </div>
            <div>
                <h3 class="text-lg sm:text-xl font-semibold text-blue-700">Visión</h3>
                <p class="text-sm sm:text-base">Ser reconocidos en Colombia como la firma líder en consultoría especializada para el sector turístico, destacándonos por nuestra excelencia, innovación y compromiso con el crecimiento de nuestros clientes.</p>
            </div>
        </div>
    </section>

    <!-- Sección Valores Corporativos -->
    <section id="valores" class="bg-fixed py-16 bg-center bg-cover text-white scroll-mt-mobile" style="background-image: url('assets/public/img/cartagena2.webp');">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-center mb-10">
        <div class="bg-blue-500/80 p-3 sm:p-9 rounded-xl sm:max-w-3xl text-center">
            <h2 class="text-2xl sm:text-3xl font-bold">Valores Corporativos</h2>
        </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Tarjeta 1 -->
        <div class="bg-white text-blue-600 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
            <h4 class="font-bold mb-2 flex items-center gap-2"><span class="text-blue-700 text-2xl">🎯</span> Excelencia</h4>
            <p class="text-sm">Calidad y profesionalismo en cada servicio.</p>
        </div>
        <!-- Tarjeta 2 -->
        <div class="bg-white text-blue-600 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
            <h4 class="font-bold mb-2 flex items-center gap-2"><span class="text-blue-700 text-2xl">🧭</span> Integridad</h4>
            <p class="text-sm">Transparencia y ética en todas nuestras acciones.</p>
        </div>
        <!-- Tarjeta 3 -->
        <div class="bg-white text-blue-600 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
            <h4 class="font-bold mb-2 flex items-center gap-2"><span class="text-blue-700 text-2xl">💡</span> Innovación</h4>
            <p class="text-sm">Soluciones adaptadas a las tendencias del mercado.</p>
        </div>
        <!-- Tarjeta 4 -->
        <div class="bg-white text-blue-600 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="400">
            <h4 class="font-bold mb-2 flex items-center gap-2"><span class="text-blue-700 text-2xl">🤝</span> Compromiso</h4>
            <p class="text-sm">Resultados tangibles para nuestros clientes.</p>
        </div>
        <!-- Tarjeta 5 -->
        <div class="bg-white text-blue-600 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="500">
            <h4 class="font-bold mb-2 flex items-center gap-2"><span class="text-blue-700 text-2xl">🧳</span> Especialización</h4>
            <p class="text-sm">Expertos únicamente en turismo (Hoteles, Restaurantes, Agencias de Viajes).</p>
        </div>
        <!-- Tarjeta 6 -->
        <div class="bg-white text-blue-600 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="600">
            <h4 class="font-bold mb-2 flex items-center gap-2"><span class="text-blue-700 text-2xl">📐</span> Rigor Técnico</h4>
            <p class="text-sm">Métodos basados en estándares internacionales.</p>
        </div>
        <!-- Tarjeta 7 -->
        <div class="bg-white text-blue-600 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="700">
            <h4 class="font-bold mb-2 flex items-center gap-2"><span class="text-blue-700 text-2xl">🧩</span> Enfoque Práctico</h4>
            <p class="text-sm">Soluciones adaptadas a la realidad del sector.</p>
        </div>
        </div>
    </div>
    </section>

    <!-- Sección Servicios -->
    <section id="servicios" class="relative bg-white py-16 text-blue-600 scroll-mt-mobile">

    <!-- Olas decorativas arriba -->
    <div class="relative -mt-16">
    <svg class="w-full h-24 md:h-32 lg:h-40" viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path fill="#dbeafe" fill-opacity="1" d="M0,64L30,85.3C60,107,120,149,180,170.7C240,192,300,192,360,170.7C420,149,480,107,540,112C600,117,660,171,720,186.7C780,203,840,181,900,176C960,171,1020,181,1080,186.7C1140,192,1200,192,1260,170.7C1320,149,1380,107,1410,85.3L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
        <path fill="#93c5fd" fill-opacity="0.7" d="M0,96L30,101.3C60,107,120,117,180,117.3C240,117,300,107,360,101.3C420,96,480,96,540,122.7C600,149,660,203,720,197.3C780,192,840,128,900,112C960,96,1020,128,1080,144C1140,160,1200,160,1260,144C1320,128,1380,96,1410,80L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
        <path fill="#60a5fa" fill-opacity="0.4" d="M0,128L30,133.3C60,139,120,149,180,149.3C240,149,300,139,360,117.3C420,96,480,64,540,64C600,64,660,96,720,128C780,160,840,192,900,176C960,160,1020,96,1080,90.7C1140,85,1200,139,1260,149.3C1320,160,1380,128,1410,112L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
    </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-center mb-10">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-500 text-center mb-10 sm:mb-12">Nuestros servicios</h2>
        </div>

        <div class="space-y-6">
        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>1. Consultoría Financiera y Tributaria</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Análisis y planificación financiera.</li>
            <li>Optimización de costos y flujo de caja.</li>
            <li>Asesoría tributaria y cumplimiento normativo.</li>
            <li>Estructuración de modelos de financiación y crédito.</li>
            <li>Estructuración de costos y precios.</li>
            <li>Planes de viabilidad económica.</li>
            <li>Optimización de impuestos.</li>
            </ul>
        </div>

        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>2. Gestión Administrativa y Operativa</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Manuales de procedimientos.</li>
            <li>Control de inventarios y cadena de suministro.</li>
            <li>Auditorías operativas.</li>
            <li>Outsourcing administrativo.</li>
            <li>Implementación de software turístico.</li>
            </ul>
        </div>

        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>3. Marketing Turístico y Ventas</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Posicionamiento y branding.</li>
            <li>Fidelización de clientes.</li>
            <li>Capacitación en ventas.</li>
            <li>Manejo de plataformas de reservas.</li>
            </ul>
        </div>

        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>4. Capacitación y Desarrollo</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Formación en servicio al cliente.</li>
            <li>Talleres en gestión hotelera y gastronómica.</li>
            <li>Certificaciones internacionales.</li>
            </ul>
        </div>

        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>5. Asesoría Legal Turística</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Constitución de empresas.</li>
            <li>Contratos laborales y comerciales.</li>
            <li>Propiedad intelectual.</li>
            </ul>
        </div>

        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>6. Revisoría Fiscal y Auditoría Externa</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Auditorías bajo NIIF y normas locales.</li>
            <li>Revisoría Fiscal para turismo.</li>
            <li>Informes a entidades de control.</li>
            </ul>
        </div>

        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>7. Análisis Financiero e Indicadores</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Indicadores clave turísticos.</li>
            <li>Benchmarking competitivo.</li>
            <li>Dashboards para decisiones.</li>
            </ul>
        </div>

        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>8. Aperturas y Puesta en Marcha</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Estudios de mercado y factibilidad.</li>
            <li>Trámites legales del sector.</li>
            <li>Diseño de procesos operativos.</li>
            </ul>
        </div>

        <div class="accordion-item bg-blue-50 rounded-xl shadow p-6 overflow-hidden transition-all duration-500 min-h-[60px] cursor-pointer" onclick="toggleAccordion(this)">
            <div class="font-bold flex justify-between items-center">
            <span>9. Capacitación Sectorial</span>
            <span class="accordion-icon transition-transform duration-300">▼</span>
            </div>
            <ul class="accordion-content list-disc ml-6 mt-4 text-sm hidden transition-all duration-500 ease-in-out">
            <li>Finanzas para no financieros.</li>
            <li>Interpretación de indicadores turísticos.</li>
            <li>Normas de facturación electrónica para el sector.</li>
            </ul>
        </div>
        </div>

    </div>

    <div class="relative -mb-16">
    <svg class="w-full h-24 md:h-32 lg:h-40" viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path fill="#dbeafe" fill-opacity="1" d="M0,224L60,202.7C120,181,240,139,360,128C480,117,600,139,720,170.7C840,203,960,245,1080,240C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        <path fill="#93c5fd" fill-opacity="0.7" d="M0,256L80,240C160,224,320,192,480,192C640,192,800,224,960,218.7C1120,213,1280,171,1360,149.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        <path fill="#60a5fa" fill-opacity="0.4" d="M0,288L100,261.3C200,235,400,181,600,160C800,139,1000,149,1200,176C1300,192,1400,213,1440,218.7L1440,320L1400,320C1300,320,1200,320,1000,320C800,320,600,320,400,320C200,320,100,320,0,320Z"></path>
    </svg>
    </div>
    </section>

    <!-- Sección de socios -->
    <section id="socios" class="relative py-12 sm:py-16 bg-white scroll-mt-mobile">
    <div class="relative -mt-16">
    <svg class="w-full h-24 md:h-32 lg:h-40" viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path fill="#dbeafe" fill-opacity="1" d="M0,64L30,85.3C60,107,120,149,180,170.7C240,192,300,192,360,170.7C420,149,480,107,540,112C600,117,660,171,720,186.7C780,203,840,181,900,176C960,171,1020,181,1080,186.7C1140,192,1200,192,1260,170.7C1320,149,1380,107,1410,85.3L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
        <path fill="#93c5fd" fill-opacity="0.7" d="M0,96L30,101.3C60,107,120,117,180,117.3C240,117,300,107,360,101.3C420,96,480,96,540,122.7C600,149,660,203,720,197.3C780,192,840,128,900,112C960,96,1020,128,1080,144C1140,160,1200,160,1260,144C1320,128,1380,96,1410,80L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
        <path fill="#60a5fa" fill-opacity="0.4" d="M0,128L30,133.3C60,139,120,149,180,149.3C240,149,300,139,360,117.3C420,96,480,64,540,64C600,64,660,96,720,128C780,160,840,192,900,176C960,160,1020,96,1080,90.7C1140,85,1200,139,1260,149.3C1320,160,1380,128,1410,112L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
    </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <h2 class="text-2xl sm:text-3xl font-bold text-blue-500 text-center mb-10 sm:mb-12">Socios</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10">
        <!-- Socio 1 -->
        <div class="bg-blue-50 rounded-xl shadow-lg p-4 sm:p-6 flex flex-col items-center text-center">
        <img src="assets/public/img/pfp1.jpg" alt="Socio 1"
            class="w-28 h-28 sm:w-32 sm:h-32 rounded-full object-cover mb-4 border-4 border-blue-300 shadow-md" />
        <h3 class="text-lg sm:text-xl font-semibold text-blue-500">Hisnardo Buelvas</h3>
        <p class="text-blue-700 text-xs sm:text-sm mb-2 sm:mb-3">Director administrativo y financiero especializado en turismo</p>
        <p class="text-gray-700 text-sm sm:text-base mb-3 sm:mb-4">
            Con más de 30 años de experiencia en el sector turístico. He sido gerente, asesor y directivo en hoteles de Cartagena y Santa Marta.
        </p>
        <!-- <a href="cv-juan-perez.pdf" download
            class="bg-blue-400 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-blue-500 transition">
            Descargar CV
        </a> -->
        </div>

        <!-- Socio 2 -->
        <div class="bg-blue-50 rounded-xl shadow-lg p-4 sm:p-6 flex flex-col items-center text-center">
        <img src="assets/public/img/pfp2.jpg" alt="Socio 2"
            class="w-28 h-28 sm:w-32 sm:h-32 rounded-full object-cover mb-4 border-4 border-blue-300 shadow-md" />
        <h3 class="text-lg sm:text-xl font-semibold text-blue-500">Carlos Bobadilla Deulufeut</h3>
        <p class="text-blue-700 text-xs sm:text-sm mb-2 sm:mb-3">Asesor financiero especializado en el sector hotelero</p>
        <p class="text-gray-700 text-sm sm:text-base mb-3 sm:mb-4">
            Con más de 20 años de experiencia en auditoría, gestión financiera y estrategia en el sector hotelero.
        </p>
        <!-- <a href="cv-maria-gomez.pdf" download
            class="bg-blue-400 text-white text-sm sm:text-base px-4 py-2 rounded hover:bg-blue-500 transition">
            Descargar CV
        </a> -->
        </div>
    </div>
    </div>
    </section>

    <section id="blog" class="bg-blue-50 py-12 sm:py-16 mx-auto scroll-mt-mobile">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-blue-500 text-center mb-4">Testimonios de Clientes</h2>
            <p class="text-center text-gray-600 text-sm sm:text-base mb-10 sm:mb-12 max-w-2xl mx-auto">
            Clientes satisfechos comparten su experiencia con B&B Profesional Financial Tourism and Operations.
            </p>

            <?php include 'assets/controllers/mostrar_testimonios.php'; ?>
        </div>

        <!-- Contenedor del formulario -->
        <div id="formulario-testimonio" class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
            <div class="max-w-2xl mx-auto mt-6 bg-white rounded-xl shadow-md p-6 sm:p-8">
                <h3 class="text-xl font-bold text-blue-500 text-center mb-4">Déjanos tu testimonio</h3>
                <form action="assets/controllers/guardar_testimonio.php" method="POST" class="space-y-4">
                <div class="grid sm:grid-cols-2 gap-4">
                    <input type="text" name="nombre" required placeholder="Tu nombre" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-100">
                    <input type="text" name="cargo" placeholder="Cargo (opcional)" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-100">
                </div>
                <input type="text" name="empresa" placeholder="Empresa (opcional)" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-100">
                <textarea name="mensaje" required placeholder="Escribe tu testimonio..." rows="4" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-100"></textarea>
                <select name="calificacion" required class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-100">
                    <option value="">Calificación</option>
                    <option value="5">⭐⭐⭐⭐⭐</option>
                    <option value="4">⭐⭐⭐⭐</option>
                    <option value="3">⭐⭐⭐</option>
                    <option value="2">⭐⭐</option>
                    <option value="1">⭐</option>
                </select>
                <div class="">
                    <button id="btn-enviar-testimonio" type="submit" class="bg-blue-400 hover:bg-blue-500 text-white font-semibold px-6 py-2 rounded transition">
                    Enviar Testimonio
                    </button>
                </div>
                </form>
            </div>
        </div>

        <!-- Botón para mostrar/ocultar formulario -->
        <div class="text-center mt-12">
        <button id="toggle-form-btn"
                onclick="toggleFormulario()" 
                class="bg-blue-400 hover:bg-blue-500 text-white px-6 py-2 rounded font-semibold transition">
            Escribir Testimonio ▼
        </button>
        </div>

    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="py-16 bg-white scroll-mt-mobile">
    <div class="max-w-3xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-blue-500 text-center mb-8">Contáctanos</h2>

        <div class="flex flex-col items-center">
            <form id="form-contacto" action="assets/controllers/enviar_correo.php" method="POST" class="bg-blue-50 p-6 w-full rounded-xl shadow-md space-y-4">
            <div>
                <label class="block text-blue-500 font-semibold mb-1" for="nombre">Nombre</label>
                <input id="nombre" name="nombre" type="text" required
                class="w-full px-4 py-2 border border-blue-100 rounded focus:outline-none focus:ring focus:ring-blue-100" />
            </div>
            <div>
                <label class="block text-blue-500 font-semibold mb-1" for="email">Correo electrónico</label>
                <input id="email" name="email" type="email" required
                class="w-full px-4 py-2 border border-blue-100 rounded focus:outline-none focus:ring focus:ring-blue-100" />
            </div>
            <div>
                <label class="block text-blue-500 font-semibold mb-1" for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4" required
                class="w-full px-4 py-2 border border-blue-100 rounded focus:outline-none focus:ring focus:ring-blue-100"></textarea>
            </div>
            <button id="btn-enviar-contacto" type="submit"
                class="bg-blue-400 text-white px-6 py-2 rounded hover:bg-blue-500 transition">
                Enviar
            </button>
            </form>
        <!-- Iconos sociales -->
            <div class="flex justify-center space-x-6 mt-6 text-blue-500 text-2xl">
                <a href="mailto:camilo27pacheco27@gmail.com" target="_blank" title="Correo"><i class="fas fa-envelope"></i></a>
                <a href="https://wa.me/573001112233" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/hbconsultor?igsh=YWVwazlrZHVxNXhn" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    </section>

    <!-- Botón Volver Arriba -->
    <button id="backToTop"
        class="fixed bottom-6 right-6 bg-blue-400 text-white p-3 rounded-full shadow-lg hover:bg-blue-500 transition-opacity opacity-0 pointer-events-none z-50"
        title="Volver al inicio">
        ↑
    </button>

    <footer class="bg-blue-500 text-white py-8 mt-20">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center space-y-8 md:space-y-0">
            <!-- Info -->
            <div class="text-center md:text-left">
                <div class="flex items-center space-x-2 text-white">
                    <img src="assets/public/img/logoNoFondo.png" alt="Logo B&B" class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 object-contain" />
                    <h3 class="text-xl font-bold">B&B<br>Profesional</h3>
                </div>
                <p class="text-sm text-blue-200">Financial Tourism and Operations</p>
                <p class="text-xs text-blue-200 mt-1">📍 Cartagena de Indias, Colombia</p>
            </div>

            <!-- Navegación -->
            <nav class="flex flex-col sm:flex-row items-center sm:space-x-6 space-y-2 sm:space-y-0 text-sm text-center">
                <a href="#quienes-somos" class="hover:underline">¿Quiénes somos?</a>
                <a href="#valores" class="hover:underline">Valores</a>
                <a href="#servicios" class="hover:underline">Servicios</a>
                <a href="#socios" class="hover:underline">Socios</a>
                <a href="#blog" class="hover:underline">Blog</a>
                <a href="#contacto" class="hover:underline">Contacto</a>
            </nav>

            <!-- Redes -->
            <div class="flex justify-center space-x-4 text-blue-200 text-xl">
                <a href="mailto:camilo27pacheco27@gmail.com" target="_blank" title="Correo"><i class="fas fa-envelope"></i></a>
                <a href="https://wa.me/573001112233" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/hbconsultor?igsh=YWVwazlrZHVxNXhn" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-6 text-center text-xs text-blue-200">
            © 2025 B&B Profesional. Todos los derechos reservados.
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        let abierto = false;
        function toggleFormulario() {
        const form = document.getElementById("formulario-testimonio");
        const btn = document.getElementById("toggle-form-btn");

        if (!abierto) {
            form.classList.remove("max-h-0");
            form.classList.add("max-h-[2000px]");
            btn.innerText = "Cerrar formulario ▲";
        } else {
            form.classList.remove("max-h-[2000px]");
            form.classList.add("max-h-0");
            btn.innerText = "Escribir Testimonio ▼";
        }

        abierto = !abierto;
        }
    </script>
    <script>
    const formContacto = document.getElementById("form-contacto");
    const btnContacto = document.getElementById("btn-enviar-contacto");

    formContacto.addEventListener("submit", function () {
        btnContacto.disabled = true;
        btnContacto.classList.add("opacity-50", "cursor-not-allowed");
        btnContacto.innerText = "Enviando...";
    });
    </script>
    <script>
    const form = document.querySelector('#formulario-testimonio form');
    const btn = document.getElementById('btn-enviar-testimonio');

    form.addEventListener('submit', function () {
        btn.disabled = true;
        btn.classList.add('opacity-50', 'cursor-not-allowed');
        btn.innerText = "Enviando..."; // opcional
    });
    </script>
    <script>
    AOS.init({
        offset: 120, // activa animación más cerca del centro de la pantalla
        duration: 600,
        easing: 'ease-in-out',
        once: false, // Se repite la animación
    });
    </script>

    <script src="assets/public/js/script.js"></script>

</body>
</html>
