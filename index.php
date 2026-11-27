<?php
/* =============================================================================
   GUÍA EDUCATIVA INDEPENDIENTE — BUEN USO Y AHORRO FINANCIERO
   Archivo: index.php
   -----------------------------------------------------------------------------
   SITIO INFORMATIVO INDEPENDIENTE. NO ES UN BANCO NI EL SITIO OFICIAL DE
   NINGUNA ENTIDAD FINANCIERA. NO RECIBE NI ENVÍA DINERO.
   -----------------------------------------------------------------------------
   CÓMO PERSONALIZAR ESTA PÁGINA (para usuarios sin experiencia en programación):
   Modifica ÚNICAMENTE los valores del arreglo $SITE_CONFIG que está más abajo.
   Todo lo marcado como "PENDIENTE" debe completarse con información real
   antes de publicar. No inventes datos legales, cifras ni condiciones.
   ========================================================================== */

$SITE_CONFIG = [

  /* --- 1. IDENTIDAD DEL SITIO (quién publica la guía) ---------------------- */
  'sitio_nombre'        => 'Guía Ahorro y Buen Uso',
  'sitio_nombre_corto'  => 'Guía Ahorro',
  'sitio_dominio'       => '', // Ej: 'guiaahorro.online' — vacío = no se muestra canonical
  'tema_marca'          => 'Davivienda El Salvador', // marca sobre la que SE INFORMA (no se representa)
  'pais'                => 'El Salvador',

  /* Responsable / anunciante del sitio. Debe ser una persona o empresa real. */
  'responsable'         => 'BEATRIZ ALVARADO BELTRAN',
  'contacto_email'      => '', // PENDIENTE: correo real de contacto. Vacío = se oculta.
  'contacto_telefono'   => '', // PENDIENTE opcional. Vacío = se oculta.

  /* --- 2. SEO Y METADATOS -------------------------------------------------- */
  'seo_titulo'      => 'Guía educativa de ahorro y buen uso de servicios financieros | El Salvador',
  'seo_descripcion' => 'Guía informativa independiente sobre hábitos de ahorro, uso responsable de cuentas y tarjetas, y seguridad digital para usuarios de servicios financieros en El Salvador. No somos un banco.',
  'seo_canonical'   => '', // PENDIENTE: URL real del sitio (ej. https://midominio.com/). Vacío = no se imprime.
  'seo_og_imagen'   => '', // PENDIENTE opcional: URL de imagen social real.

  /* --- 3. MEDICIÓN PUBLICITARIA (Google Ads / GA4 / GTM) ------------------- */
  /* Deja los identificadores vacíos si no los tienes. NO se inventan IDs.
     Las etiquetas solo se cargan si hay ID configurado Y el visitante acepta
     las cookies de medición en el aviso de consentimiento.                   */
  'gtm_id'            => '', // Ej: 'GTM-XXXXXXX'
  'google_tag_id'     => '', // Ej: 'G-XXXXXXXXXX' o 'AW-XXXXXXXXX'
  'conversion_label'  => '', // Ej: 'AW-XXXXXXXXX/abcDEFghIJklmNOp' (solo si existe conversión real)

  /* --- 4. PALETA Y TIPOGRAFÍA --------------------------------------------- */
  /* Identidad visual propia e independiente. No se replican los colores ni el
     logotipo de ninguna entidad bancaria.                                    */
  'color_primario'   => '#1E3A5F',
  'color_secundario' => '#0E7490',
  'color_acento'     => '#C2812B',
  'color_exito'      => '#15803D',

  /* --- 5. NAVEGACIÓN (los destinos deben existir como id= en la página) --- */
  'nav' => [
    ['texto' => 'Aviso',        'href' => '#aviso'],
    ['texto' => 'La guía',      'href' => '#guia'],
    ['texto' => 'Buen uso',     'href' => '#buen-uso'],
    ['texto' => 'Seguridad',    'href' => '#seguridad'],
    ['texto' => 'Ahorro',       'href' => '#ahorro'],
    ['texto' => 'Preguntas',    'href' => '#preguntas'],
  ],

  /* --- 6. SECCIÓN PRINCIPAL (HERO) ---------------------------------------- */
  'hero_etiqueta'  => 'Contenido educativo · Sitio independiente',
  'hero_titulo'    => 'Aprende a ordenar tu dinero y a usar bien tus productos financieros',
  'hero_subtitulo' => 'Una guía de orientación, en lenguaje sencillo, sobre hábitos de ahorro, uso responsable de cuentas y tarjetas, y seguridad digital para personas usuarias de servicios financieros en El Salvador, incluidas las de Davivienda El Salvador.',
  'hero_texto'     => 'Aquí no se realizan trámites, no se piden datos bancarios y no se mueve dinero. Solo encontrarás explicaciones y buenas prácticas.',
  'hero_cta'       => ['texto' => 'Leer la guía',            'href' => '#guia'],
  'hero_cta2'      => ['texto' => 'Ver el aviso importante', 'href' => '#aviso'],

  /* --- 7. FRANJA INFORMATIVA (opcional: pon false para ocultarla) --------- */
  'mostrar_franja' => true,
  'franja_texto'   => 'Sitio informativo sin fines de intermediación: no gestionamos cuentas, no recibimos pagos y no representamos a ninguna entidad bancaria.',

  /* --- 8. SECCIONES OPCIONALES -------------------------------------------- */
  'mostrar_tabla'          => true,
  'mostrar_errores'        => true,
  'mostrar_modal_inicial'  => false, // true solo si realmente necesitas un aviso emergente
  'modal_titulo'           => 'Antes de continuar',
  'modal_texto'            => 'Este es un sitio educativo independiente. No es el sitio oficial de ninguna entidad bancaria y no realiza operaciones financieras.',
  'mostrar_aviso_cookies'  => true, // se muestra solo si hay medición configurada

];

/* --- Utilidades mínimas (no es necesario modificar) ----------------------- */
function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function cfg($k, $d = '') { global $SITE_CONFIG; return $SITE_CONFIG[$k] ?? $d; }
$medicion_activa = (cfg('gtm_id') !== '' || cfg('google_tag_id') !== '');

/* =============================================================================
   CONTENIDO EDITABLE DE LAS SECCIONES
   Cambia textos, agrega o elimina elementos de estos arreglos.
   No agregues cifras, premios, certificaciones ni testimonios sin respaldo.
   ========================================================================== */

$BENEFICIOS = [
  ['icono' => 'libro',   'titulo' => 'Lenguaje claro',        'texto' => 'Explicaciones sencillas de conceptos financieros de uso diario, sin tecnicismos innecesarios.'],
  ['icono' => 'escudo',  'titulo' => 'Enfoque en seguridad',  'texto' => 'Buenas prácticas para proteger tus claves, tus dispositivos y tu información personal.'],
  ['icono' => 'alcancia','titulo' => 'Hábitos de ahorro',     'texto' => 'Métodos de organización del presupuesto que puedes adaptar a tus ingresos y a tu realidad.'],
  ['icono' => 'brujula', 'titulo' => 'Orientación, no venta', 'texto' => 'No vendemos productos ni gestionamos solicitudes: solo orientamos sobre el buen uso.'],
];

$BUEN_USO = [
  [
    'titulo' => 'Cuenta de ahorro',
    'texto'  => 'Conoce qué movimientos genera comisiones, cada cuánto conviene revisar tu estado de cuenta y cómo mantener separado el dinero destinado al ahorro del dinero del gasto diario.',
    'puntos' => ['Revisa tus movimientos con periodicidad fija', 'Mantén una cuenta o apartado solo para ahorro', 'Consulta las condiciones vigentes en los canales oficiales del banco'],
  ],
  [
    'titulo' => 'Tarjeta de débito',
    'texto'  => 'Es dinero propio: lo que gastas sale de inmediato de tu cuenta. Llevar el control de lo que pagas con ella evita descuadres y cobros inesperados.',
    'puntos' => ['Activa las notificaciones de cada compra', 'Guarda o fotografía los comprobantes importantes', 'Bloquea la tarjeta de inmediato si la pierdes'],
  ],
  [
    'titulo' => 'Tarjeta de crédito',
    'texto'  => 'Es dinero prestado con un costo asociado. Entender la fecha de corte, la fecha límite de pago y la diferencia entre pago mínimo y pago total es clave para no acumular intereses.',
    'puntos' => ['Diferencia la fecha de corte de la fecha de pago', 'El pago mínimo no cancela la deuda', 'Pide por los canales oficiales el detalle de tasas y comisiones vigentes'],
  ],
  [
    'titulo' => 'Banca en línea y aplicación móvil',
    'texto'  => 'Los canales digitales facilitan consultas y pagos, siempre que accedas por la vía correcta y nunca compartas tus credenciales con nadie.',
    'puntos' => ['Escribe tú la dirección oficial o usa la app descargada de la tienda oficial', 'No ingreses tus claves desde enlaces recibidos por mensaje', 'Cierra la sesión al terminar, sobre todo en equipos compartidos'],
  ],
];

$SEGURIDAD = [
  'Ninguna entidad financiera seria te pedirá por teléfono, correo o mensaje tu clave completa, tu PIN ni los códigos de un solo uso.',
  'Desconfía de los mensajes que presionan con urgencia, premios, bloqueos inmediatos o multas.',
  'Verifica siempre el canal: la aplicación oficial descargada de la tienda de tu teléfono o la dirección oficial escrita por ti en el navegador.',
  'No uses redes wifi públicas para operaciones financieras; prefiere tus datos móviles o una red de confianza.',
  'Mantén actualizado el sistema de tu teléfono y activa el bloqueo de pantalla.',
  'Si crees que compartiste información por error, comunícate de inmediato con tu entidad por sus canales oficiales de atención.',
];

$PASOS_AHORRO = [
  ['titulo' => 'Anota tus ingresos y gastos reales',  'texto' => 'Durante un mes registra todo lo que entra y todo lo que sale, incluidos los gastos pequeños. Sin ese punto de partida, cualquier meta es una suposición.'],
  ['titulo' => 'Clasifica los gastos',                'texto' => 'Separa lo indispensable (vivienda, alimentación, transporte, deudas) de lo prescindible. Así ves con claridad dónde hay margen real.'],
  ['titulo' => 'Define una meta concreta',            'texto' => 'Una meta con monto y plazo ("reunir el equivalente a tres meses de gastos en doce meses") orienta mejor que la intención general de "ahorrar más".'],
  ['titulo' => 'Automatiza y revisa',                 'texto' => 'Aparta el ahorro al recibir el ingreso, no al final del mes. Luego revisa cada mes si el plan sigue siendo realista y ajústalo.'],
];

/* Tabla educativa: hábitos y su efecto. Sin cifras ni condiciones comerciales. */
$TABLA = [
  'titulo'    => 'Hábitos frecuentes y su efecto en tus finanzas',
  'encabezado'=> ['Hábito', 'Efecto habitual', 'Alternativa recomendada'],
  'filas' => [
    ['Pagar solo el mínimo de la tarjeta de crédito', 'La deuda se extiende y el costo total aumenta', 'Pagar el total o el mayor monto posible antes de la fecha límite'],
    ['Ahorrar lo que sobra al final del mes',         'Casi nunca sobra y el ahorro no se concreta',   'Separar el ahorro el mismo día que recibes el ingreso'],
    ['No revisar los movimientos de la cuenta',       'Los cobros no reconocidos se detectan tarde',    'Revisar los movimientos con una periodicidad fija'],
    ['Usar la misma clave en varios servicios',       'Una filtración compromete varias cuentas',       'Claves distintas y, cuando esté disponible, verificación en dos pasos'],
    ['Atender enlaces recibidos por mensaje',         'Riesgo de entregar credenciales a terceros',     'Entrar siempre por la app oficial o escribiendo la dirección oficial'],
  ],
];

$ERRORES = [
  'Confundir el cupo disponible de la tarjeta de crédito con dinero propio.',
  'Firmar o aceptar un producto financiero sin leer las condiciones ni preguntar por los costos.',
  'Dejar el fondo de emergencia en el mismo lugar que el dinero del gasto diario.',
  'Compartir claves con familiares, conocidos o supuestos asesores.',
  'Suponer condiciones, tasas o requisitos en lugar de confirmarlos en los canales oficiales de la entidad.',
];

$FAQ = [
  ['p' => '¿Este sitio es el sitio oficial de Davivienda El Salvador?',
   'r' => 'No. Es un sitio informativo independiente, sin vínculo, representación, patrocinio ni autorización de esa entidad ni de ninguna otra institución bancaria. Para trámites, consultas de saldo o cualquier operación, debes acudir únicamente a los canales oficiales de tu entidad.'],
  ['p' => '¿Puedo hacer pagos, depósitos o transferencias desde aquí?',
   'r' => 'No. Esta guía no recibe dinero, no envía dinero y no procesa ningún tipo de pago, transferencia, retiro ni solicitud. Es exclusivamente contenido educativo de lectura.'],
  ['p' => '¿Me van a pedir datos de mi cuenta, claves o números de tarjeta?',
   'r' => 'Nunca. Este sitio no solicita credenciales, números de cuenta, números de tarjeta ni documentos de identidad. Si alguna página dice representarnos y te pide esos datos, no la atiendas.'],
  ['p' => '¿Tiene algún costo consultar esta guía?',
   'r' => 'No tiene costo y no se requiere registro para leerla.'],
  ['p' => '¿Dónde confirmo tasas, comisiones y requisitos?',
   'r' => 'Siempre en los canales oficiales de tu entidad financiera: su sitio web oficial, su aplicación, su línea de atención o sus agencias. Esta guía no publica tasas ni condiciones comerciales porque cambian y solo la entidad puede confirmarlas.'],
  ['p' => '¿Qué hago si recibo un mensaje sospechoso a nombre de mi banco?',
   'r' => 'No abras los enlaces ni respondas con información. Ingresa por tu cuenta a la aplicación oficial o escribe tú mismo la dirección oficial, y reporta el mensaje a la línea de atención de tu entidad.'],
  ['p' => '¿Cuánto debería ahorrar cada mes?',
   'r' => 'No existe una cifra única: depende de tus ingresos, tus gastos fijos y tus deudas. En educación financiera suele recomendarse comenzar con un porcentaje constante, aunque sea pequeño, y aumentarlo a medida que se ordena el presupuesto.'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e(cfg('seo_titulo')) ?></title>
<meta name="description" content="<?= e(cfg('seo_descripcion')) ?>">
<?php if (cfg('seo_canonical') !== ''): ?>
<link rel="canonical" href="<?= e(cfg('seo_canonical')) ?>">
<?php endif; ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?= e(cfg('seo_titulo')) ?>">
<meta property="og:description" content="<?= e(cfg('seo_descripcion')) ?>">
<?php if (cfg('seo_og_imagen') !== ''): ?>
<meta property="og:image" content="<?= e(cfg('seo_og_imagen')) ?>">
<?php endif; ?>
<!-- Favicon en SVG integrado: no depende de archivos externos -->
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='7' fill='%231E3A5F'/%3E%3Cpath d='M9 20h3v-6H9zm5.5 0h3V10h-3zm5.5 0h3v-9h-3z' fill='%23fff'/%3E%3C/svg%3E">

<style>
/* =========================== 1. VARIABLES ============================== */
:root{
  --c-primario:<?= e(cfg('color_primario')) ?>;
  --c-primario-osc:#152B46;
  --c-secundario:<?= e(cfg('color_secundario')) ?>;
  --c-acento:<?= e(cfg('color_acento')) ?>;
  --c-exito:<?= e(cfg('color_exito')) ?>;
  --c-fondo:#F7F8FA;
  --c-fondo-alt:#FFFFFF;
  --c-fondo-suave:#EEF2F6;
  --c-texto:#1B2430;
  --c-texto-suave:#4F5A68;
  --c-borde:#DEE4EB;
  --f-titulo:"Segoe UI",system-ui,-apple-system,"Helvetica Neue",Arial,sans-serif;
  --f-texto:"Segoe UI",system-ui,-apple-system,"Helvetica Neue",Arial,sans-serif;
  --ancho:1140px;
  --ancho-angosto:820px;
  --esp-1:.5rem; --esp-2:1rem; --esp-3:1.5rem; --esp-4:2rem; --esp-5:3rem; --esp-6:4.5rem;
  --radio:14px; --radio-sm:9px;
  --sombra:0 1px 2px rgba(16,24,40,.05),0 8px 24px rgba(16,24,40,.07);
  --sombra-sm:0 1px 3px rgba(16,24,40,.08);
  --trans:.22s ease;
  --t-xs:.82rem; --t-sm:.94rem; --t-base:1.03rem; --t-lg:1.2rem; --t-xl:1.5rem; --t-2xl:2rem; --t-3xl:2.6rem;
}
/* =========================== 2. BASE =================================== */
*,*::before,*::after{box-sizing:border-box}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
body{margin:0;font-family:var(--f-texto);font-size:var(--t-base);line-height:1.68;color:var(--c-texto);background:var(--c-fondo);overflow-x:hidden}
img,svg{max-width:100%;height:auto;display:block}
h1,h2,h3,h4{font-family:var(--f-titulo);line-height:1.22;margin:0 0 var(--esp-2);color:var(--c-primario);letter-spacing:-.01em}
h1{font-size:var(--t-3xl)} h2{font-size:var(--t-2xl)} h3{font-size:var(--t-lg)}
p{margin:0 0 var(--esp-2)}
a{color:var(--c-secundario)}
a:focus-visible,button:focus-visible,summary:focus-visible{outline:3px solid var(--c-acento);outline-offset:2px;border-radius:4px}
.contenedor{width:100%;max-width:var(--ancho);margin:0 auto;padding:0 var(--esp-3)}
.angosto{max-width:var(--ancho-angosto)}
.seccion{padding:var(--esp-6) 0;scroll-margin-top:84px}
.seccion--alt{background:var(--c-fondo-alt)}
.seccion--suave{background:var(--c-fondo-suave)}
.salto-contenido{position:absolute;left:-9999px}
.salto-contenido:focus{left:var(--esp-2);top:var(--esp-2);z-index:200;background:#fff;padding:.6rem 1rem;border-radius:var(--radio-sm);box-shadow:var(--sombra)}
.etiqueta{display:inline-block;font-size:var(--t-xs);font-weight:700;letter-spacing:.07em;text-transform:uppercase;color:var(--c-secundario);background:rgba(14,116,144,.1);padding:.35rem .8rem;border-radius:999px;margin-bottom:var(--esp-2)}
.encabezado-seccion{max-width:720px;margin-bottom:var(--esp-5)}
.encabezado-seccion p{color:var(--c-texto-suave)}
/* =========================== 3. ENCABEZADO ============================= */
.cabecera{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.96);backdrop-filter:blur(8px);border-bottom:1px solid var(--c-borde)}
.cabecera__fila{display:flex;align-items:center;justify-content:space-between;gap:var(--esp-2);min-height:68px}
.logo{display:flex;align-items:center;gap:.6rem;text-decoration:none;color:var(--c-primario);font-weight:800;font-size:1.05rem;line-height:1.15}
.logo__marca{width:38px;height:38px;flex:0 0 38px;border-radius:10px;background:var(--c-primario);display:grid;place-items:center}
.logo__sub{display:block;font-size:var(--t-xs);font-weight:600;color:var(--c-texto-suave)}
.nav{display:flex;align-items:center;gap:var(--esp-1)}
.nav a{color:var(--c-texto);text-decoration:none;font-size:var(--t-sm);font-weight:600;padding:.5rem .7rem;border-radius:var(--radio-sm);transition:background var(--trans),color var(--trans)}
.nav a:hover{background:var(--c-fondo-suave);color:var(--c-primario)}
.nav a.btn--principal{color:#fff}
.nav a.btn--principal:hover{background:var(--c-primario-osc);color:#fff}
.nav-toggle{display:none;background:none;border:1px solid var(--c-borde);border-radius:var(--radio-sm);padding:.5rem .65rem;cursor:pointer}
.nav-toggle span{display:block;width:20px;height:2px;background:var(--c-primario);margin:4px 0;transition:var(--trans)}
/* =========================== 4. BOTONES ================================ */
.btn{display:inline-flex;align-items:center;justify-content:center;gap:.5rem;font-family:var(--f-titulo);font-size:var(--t-sm);font-weight:700;text-decoration:none;padding:.82rem 1.5rem;border-radius:var(--radio-sm);border:2px solid transparent;cursor:pointer;transition:transform var(--trans),background var(--trans),color var(--trans),box-shadow var(--trans)}
.btn--principal{background:var(--c-primario);color:#fff;box-shadow:var(--sombra-sm)}
.btn--principal:hover{background:var(--c-primario-osc);transform:translateY(-1px)}
.btn--secundario{background:#fff;color:var(--c-primario);border-color:var(--c-borde)}
.btn--secundario:hover{border-color:var(--c-primario);background:var(--c-fondo-suave)}
.btn--claro{background:#fff;color:var(--c-primario)}
.btn--claro:hover{transform:translateY(-1px)}
.btn:active{transform:translateY(0)}
/* =========================== 5. HERO =================================== */
.hero{background:linear-gradient(170deg,#fff 0%,var(--c-fondo-suave) 100%);padding:var(--esp-6) 0;border-bottom:1px solid var(--c-borde)}
.hero__grid{display:grid;grid-template-columns:1.08fr .92fr;gap:var(--esp-5);align-items:center}
.hero h1{margin-bottom:var(--esp-3)}
.hero__sub{font-size:var(--t-lg);color:var(--c-texto-suave);margin-bottom:var(--esp-2)}
.hero__nota{font-size:var(--t-sm);color:var(--c-texto-suave);border-left:3px solid var(--c-acento);padding-left:var(--esp-2);margin-bottom:var(--esp-4)}
.hero__acciones{display:flex;flex-wrap:wrap;gap:var(--esp-2)}
.hero__arte{background:#fff;border:1px solid var(--c-borde);border-radius:var(--radio);padding:var(--esp-3);box-shadow:var(--sombra)}
/* =========================== 6. FRANJA ================================= */
.franja{background:var(--c-primario);color:#fff}
.franja__fila{display:flex;align-items:center;gap:var(--esp-2);padding:.9rem 0;font-size:var(--t-sm)}
.franja__fila svg{flex:0 0 22px}
.franja p{margin:0}
/* =========================== 7. AVISO PRINCIPAL ======================== */
.aviso{border:2px solid var(--c-acento);background:#FFFBF3;border-radius:var(--radio);padding:var(--esp-4);box-shadow:var(--sombra-sm)}
.aviso__titulo{display:flex;align-items:center;gap:.6rem;color:#8A5A12;margin-bottom:var(--esp-2)}
.aviso p{color:#5A4316;margin-bottom:var(--esp-2)}
.aviso p:last-child{margin-bottom:0}
.aviso strong{color:#3F2E0D}
/* =========================== 8. TARJETAS =============================== */
.rejilla{display:grid;gap:var(--esp-3)}
.rejilla--4{grid-template-columns:repeat(4,1fr)}
.rejilla--2{grid-template-columns:repeat(2,1fr)}
.tarjeta{background:#fff;border:1px solid var(--c-borde);border-radius:var(--radio);padding:var(--esp-3);transition:transform var(--trans),box-shadow var(--trans)}
.tarjeta:hover{transform:translateY(-3px);box-shadow:var(--sombra)}
.tarjeta__icono{width:46px;height:46px;border-radius:12px;background:var(--c-fondo-suave);display:grid;place-items:center;margin-bottom:var(--esp-2)}
.tarjeta h3{font-size:var(--t-base);margin-bottom:.4rem}
.tarjeta p{font-size:var(--t-sm);color:var(--c-texto-suave);margin:0}
.lista-chequeo{list-style:none;margin:var(--esp-2) 0 0;padding:0}
.lista-chequeo li{position:relative;padding-left:1.6rem;margin-bottom:.5rem;font-size:var(--t-sm);color:var(--c-texto-suave)}
.lista-chequeo li::before{content:"";position:absolute;left:0;top:.52em;width:9px;height:9px;border-radius:2px;background:var(--c-exito)}
/* =========================== 9. PASOS ================================== */
.pasos{counter-reset:paso;display:grid;gap:var(--esp-3);grid-template-columns:repeat(4,1fr)}
.paso{background:#fff;border:1px solid var(--c-borde);border-radius:var(--radio);padding:var(--esp-3);position:relative}
.paso::before{counter-increment:paso;content:counter(paso);display:grid;place-items:center;width:34px;height:34px;border-radius:50%;background:var(--c-secundario);color:#fff;font-weight:800;font-size:var(--t-sm);margin-bottom:var(--esp-2)}
.paso h3{font-size:var(--t-base)}
.paso p{font-size:var(--t-sm);color:var(--c-texto-suave);margin:0}
/* =========================== 10. SEGURIDAD ============================= */
.bloque-doble{display:grid;grid-template-columns:1fr 1fr;gap:var(--esp-5);align-items:center}
.lista-seguridad{list-style:none;margin:0;padding:0}
.lista-seguridad li{display:flex;gap:.75rem;padding:var(--esp-2) 0;border-bottom:1px solid var(--c-borde);font-size:var(--t-sm)}
.lista-seguridad li:last-child{border-bottom:none}
.lista-seguridad svg{flex:0 0 20px;margin-top:.22rem}
/* =========================== 11. TABLA ================================= */
.tabla-envoltura{overflow-x:auto;border:1px solid var(--c-borde);border-radius:var(--radio);background:#fff;-webkit-overflow-scrolling:touch}
table{width:100%;border-collapse:collapse;min-width:620px;font-size:var(--t-sm)}
caption{text-align:left;padding:var(--esp-2) var(--esp-3);font-weight:700;color:var(--c-primario);border-bottom:1px solid var(--c-borde)}
th,td{padding:.9rem var(--esp-3);text-align:left;vertical-align:top;border-bottom:1px solid var(--c-borde)}
thead th{background:var(--c-fondo-suave);color:var(--c-primario);font-size:var(--t-xs);text-transform:uppercase;letter-spacing:.05em}
tbody tr:last-child td{border-bottom:none}
.tabla-nota{font-size:var(--t-xs);color:var(--c-texto-suave);margin-top:var(--esp-2)}
/* =========================== 12. PREGUNTAS ============================= */
.faq{max-width:var(--ancho-angosto);margin:0 auto}
.faq details{background:#fff;border:1px solid var(--c-borde);border-radius:var(--radio-sm);margin-bottom:var(--esp-2);overflow:hidden}
.faq details[open]{border-color:var(--c-secundario)}
.faq summary{cursor:pointer;padding:1.05rem var(--esp-3);font-weight:700;font-size:var(--t-sm);color:var(--c-primario);list-style:none;display:flex;justify-content:space-between;align-items:center;gap:var(--esp-2)}
.faq summary::-webkit-details-marker{display:none}
.faq summary::after{content:"+";font-size:1.4rem;font-weight:400;color:var(--c-secundario);transition:transform var(--trans);line-height:1}
.faq details[open] summary::after{transform:rotate(45deg)}
.faq__respuesta{padding:0 var(--esp-3) var(--esp-3);font-size:var(--t-sm);color:var(--c-texto-suave)}
/* =========================== 13. CIERRE ================================ */
.cierre{background:var(--c-primario);color:#fff;text-align:center}
.cierre h2{color:#fff}
.cierre p{color:rgba(255,255,255,.85);max-width:620px;margin:0 auto var(--esp-3)}
.cierre__acciones{display:flex;gap:var(--esp-2);justify-content:center;flex-wrap:wrap}
/* =========================== 14. PIE ================================== */
.pie{background:#13202F;color:#AFBCCB;font-size:var(--t-sm);padding:var(--esp-5) 0 var(--esp-3)}
.pie h4{color:#fff;font-size:var(--t-sm);text-transform:uppercase;letter-spacing:.06em;margin-bottom:var(--esp-2)}
.pie__grid{display:grid;grid-template-columns:1.6fr 1fr 1fr;gap:var(--esp-4);margin-bottom:var(--esp-4)}
.pie a{color:#AFBCCB;text-decoration:none}
.pie a:hover{color:#fff;text-decoration:underline}
.pie ul{list-style:none;margin:0;padding:0}
.pie li{margin-bottom:.5rem}
.pie__legal{border-top:1px solid #2A3B4F;padding-top:var(--esp-3);font-size:var(--t-xs);line-height:1.6}
.pie__legal p{margin-bottom:.6rem}
.pendiente{background:#FFF3CD;color:#6B4E00;padding:.1rem .4rem;border-radius:4px;font-size:.9em;font-weight:700}
/* =========================== 15. AVISOS / MODAL ======================== */
.modal{position:fixed;inset:0;z-index:200;display:none;place-items:center;background:rgba(19,32,47,.6);padding:var(--esp-3)}
.modal[data-abierto="true"]{display:grid}
.modal__caja{background:#fff;border-radius:var(--radio);padding:var(--esp-4);max-width:520px;width:100%;max-height:88vh;overflow-y:auto;box-shadow:var(--sombra)}
.cookies{position:fixed;bottom:0;left:0;right:0;z-index:150;background:#fff;border-top:2px solid var(--c-primario);box-shadow:0 -6px 24px rgba(16,24,40,.12);padding:var(--esp-3) 0;display:none}
.cookies[data-abierto="true"]{display:block}
.cookies__fila{display:flex;gap:var(--esp-3);align-items:center;justify-content:space-between;flex-wrap:wrap}
.cookies p{font-size:var(--t-sm);margin:0;max-width:640px;color:var(--c-texto-suave)}
.cookies__acciones{display:flex;gap:var(--esp-2);flex-wrap:wrap}
/* =========================== 16. RESPONSIVE ============================ */
@media (max-width:1024px){
  :root{--t-3xl:2.15rem;--t-2xl:1.75rem}
  .rejilla--4{grid-template-columns:repeat(2,1fr)}
  .pasos{grid-template-columns:repeat(2,1fr)}
  .pie__grid{grid-template-columns:1fr 1fr}
}
@media (max-width:860px){
  .hero__grid,.bloque-doble{grid-template-columns:1fr}
  .hero__arte{order:2}
  .nav-toggle{display:block}
  .nav{position:absolute;top:100%;left:0;right:0;background:#fff;border-bottom:1px solid var(--c-borde);flex-direction:column;align-items:stretch;padding:var(--esp-2);gap:.2rem;display:none;box-shadow:var(--sombra)}
  .nav[data-abierto="true"]{display:flex}
  .nav a{padding:.8rem}
  .nav .btn{margin-top:var(--esp-1)}
}
@media (max-width:620px){
  :root{--t-3xl:1.85rem;--t-2xl:1.5rem;--esp-6:3rem}
  .contenedor{padding:0 var(--esp-2)}
  .rejilla--4,.rejilla--2,.pasos,.pie__grid{grid-template-columns:1fr}
  .aviso{padding:var(--esp-3)}
  .btn{width:100%}
  .hero__acciones .btn,.cierre__acciones .btn{width:100%}
  .cookies__acciones .btn{width:auto;flex:1 1 auto}
}
@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto}
  *,*::before,*::after{transition:none!important;animation:none!important}
}
</style>
</head>
<body>

<a class="salto-contenido" href="#contenido">Saltar al contenido principal</a>

<?php
/* Iconos SVG integrados (sin dependencias externas ni imágenes de terceros) */
function icono($nombre){
  $i = [
    'libro'   => '<path d="M4 5a2 2 0 012-2h12v18H6a2 2 0 01-2-2z"/><path d="M8 7h7M8 11h7"/>',
    'escudo'  => '<path d="M12 3l7 3v6c0 4.2-2.9 7.7-7 9-4.1-1.3-7-4.8-7-9V6z"/><path d="M9 12l2 2 4-4"/>',
    'alcancia'=> '<path d="M4 12a6 6 0 016-6h5a5 5 0 015 5v1a6 6 0 01-6 6h-4a6 6 0 01-6-6z"/><path d="M7 18v2M16 18v2M9 6V4h4v2"/><circle cx="16" cy="11" r="1"/>',
    'brujula' => '<circle cx="12" cy="12" r="9"/><path d="M15 9l-2.2 5.3L7.5 16l2.2-5.3z"/>',
    'check'   => '<path d="M20 6L9 17l-5-5"/>',
    'alerta'  => '<path d="M12 3l9 16H3z"/><path d="M12 9v4M12 16h.01"/>',
    'info'    => '<circle cx="12" cy="12" r="9"/><path d="M12 11v5M12 8h.01"/>',
  ];
  return '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'.($i[$nombre] ?? $i['info']).'</svg>';
}
?>

<!-- ============================ CABECERA ============================ -->
<header class="cabecera">
  <div class="contenedor cabecera__fila">
    <a class="logo" href="#inicio">
      <span class="logo__marca"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M5 18V12M12 18V7M19 18v-4"/></svg></span>
      <span><?= e(cfg('sitio_nombre')) ?><span class="logo__sub">Guía educativa independiente</span></span>
    </a>
    <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="navPrincipal" aria-label="Abrir menú de navegación">
      <span></span><span></span><span></span>
    </button>
    <nav class="nav" id="navPrincipal" aria-label="Navegación principal">
      <?php foreach (cfg('nav', []) as $item): ?>
        <a href="<?= e($item['href']) ?>"><?= e($item['texto']) ?></a>
      <?php endforeach; ?>
      <a class="btn btn--principal" href="#ahorro">Guía de ahorro</a>
    </nav>
  </div>
</header>

<main id="contenido">

<!-- ============================== HERO ============================== -->
<section class="hero" id="inicio">
  <div class="contenedor hero__grid">
    <div>
      <span class="etiqueta"><?= e(cfg('hero_etiqueta')) ?></span>
      <h1><?= e(cfg('hero_titulo')) ?></h1>
      <p class="hero__sub"><?= e(cfg('hero_subtitulo')) ?></p>
      <p class="hero__nota"><?= e(cfg('hero_texto')) ?></p>
      <div class="hero__acciones">
        <a class="btn btn--principal" href="<?= e(cfg('hero_cta')['href']) ?>" data-evento="cta_hero_principal"><?= e(cfg('hero_cta')['texto']) ?></a>
        <a class="btn btn--secundario" href="<?= e(cfg('hero_cta2')['href']) ?>" data-evento="cta_hero_secundario"><?= e(cfg('hero_cta2')['texto']) ?></a>
      </div>
    </div>
    <div class="hero__arte">
      <!-- Ilustración SVG propia: no se usan logotipos ni imágenes de terceros -->
      <svg viewBox="0 0 420 300" role="img" aria-label="Ilustración de un presupuesto mensual organizado en gasto, ahorro y deuda">
        <rect width="420" height="300" rx="12" fill="#F7F8FA"/>
        <rect x="28" y="28" width="364" height="54" rx="10" fill="#fff" stroke="#DEE4EB"/>
        <circle cx="56" cy="55" r="14" fill="var(--c-secundario)" opacity=".15"/>
        <path d="M50 55l4 4 8-8" stroke="var(--c-exito)" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        <rect x="82" y="45" width="150" height="8" rx="4" fill="#C9D3DE"/>
        <rect x="82" y="60" width="96" height="7" rx="3.5" fill="#E3E9EF"/>
        <rect x="28" y="98" width="364" height="174" rx="10" fill="#fff" stroke="#DEE4EB"/>
        <rect x="52" y="208" width="46" height="42" rx="5" fill="var(--c-primario)" opacity=".85"/>
        <rect x="118" y="178" width="46" height="72" rx="5" fill="var(--c-secundario)" opacity=".85"/>
        <rect x="184" y="146" width="46" height="104" rx="5" fill="var(--c-exito)" opacity=".85"/>
        <rect x="250" y="192" width="46" height="58" rx="5" fill="var(--c-acento)" opacity=".85"/>
        <rect x="316" y="166" width="46" height="84" rx="5" fill="var(--c-primario)" opacity=".5"/>
        <path d="M52 140h310" stroke="#E3E9EF" stroke-width="1.5" stroke-dasharray="5 5"/>
        <text x="52" y="132" font-family="system-ui,sans-serif" font-size="12" fill="#4F5A68">Meta de ahorro mensual</text>
        <path d="M52 250h310" stroke="#C9D3DE" stroke-width="1.5"/>
      </svg>
    </div>
  </div>
</section>

<!-- ============================= FRANJA ============================= -->
<?php if (cfg('mostrar_franja')): ?>
<div class="franja">
  <div class="contenedor franja__fila">
    <?= icono('info') ?>
    <p><?= e(cfg('franja_texto')) ?></p>
  </div>
</div>
<?php endif; ?>

<!-- ======================== AVISO IMPORTANTE ======================== -->
<!-- No elimines esta sección: es la aclaración de independencia del sitio. -->
<section class="seccion seccion--alt" id="aviso">
  <div class="contenedor angosto">
    <div class="aviso">
      <h2 class="aviso__titulo"><?= icono('alerta') ?> Aviso importante sobre quiénes somos</h2>
      <p>
        <strong>No somos una entidad bancaria.</strong> Este sitio es una guía de orientación educativa
        de carácter informativo e independiente. <strong>No somos <?= e(cfg('tema_marca')) ?></strong> ni
        ningún banco; <strong>no recibimos dinero</strong> y <strong>no enviamos dinero</strong>;
        no gestionamos depósitos, retiros, transferencias, pagos, cobros, préstamos ni solicitudes de
        ningún producto financiero. <strong>No tenemos vínculos, convenios, representación, patrocinio
        ni autorización de <?= e(cfg('tema_marca')) ?></strong>, y <strong>no mantenemos relación alguna
        con entidades bancarias</strong> ni con instituciones financieras de ningún tipo. Nuestra única
        función es <strong>informar y orientar educativamente</strong> a las personas usuarias sobre el
        buen uso de los servicios financieros y sobre hábitos de ahorro, con referencia general a
        <?= e(cfg('tema_marca')) ?> únicamente como contexto informativo. Las marcas mencionadas
        pertenecen a sus respectivos titulares y se citan con fines exclusivamente informativos.
      </p>
      <p>
        Para cualquier trámite, consulta de saldo, reclamo o contratación debes acudir directamente a
        los canales oficiales de tu entidad financiera. Este sitio nunca te pedirá claves, PIN, códigos
        de verificación, números de cuenta ni números de tarjeta.
      </p>
    </div>
  </div>
</section>

<!-- ============================ LA GUÍA ============================= -->
<section class="seccion" id="guia">
  <div class="contenedor">
    <div class="encabezado-seccion">
      <span class="etiqueta">Qué encontrarás aquí</span>
      <h2>Una guía de orientación, no un servicio financiero</h2>
      <p>
        El objetivo es sencillo: que entiendas cómo funcionan los productos que usas a diario y que
        tengas un método claro para ahorrar. Todo el contenido es de lectura y no requiere registro.
      </p>
    </div>
    <div class="rejilla rejilla--4">
      <?php foreach ($BENEFICIOS as $b): ?>
      <article class="tarjeta">
        <div class="tarjeta__icono" style="color:var(--c-secundario)"><?= icono($b['icono']) ?></div>
        <h3><?= e($b['titulo']) ?></h3>
        <p><?= e($b['texto']) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================== BUEN USO ============================= -->
<section class="seccion seccion--suave" id="buen-uso">
  <div class="contenedor">
    <div class="encabezado-seccion">
      <span class="etiqueta">Buen uso</span>
      <h2>Tus productos financieros, explicados con calma</h2>
      <p>
        Las condiciones, tasas y comisiones las define cada entidad y cambian con el tiempo: confírmalas
        siempre en los canales oficiales. Aquí solo explicamos cómo funcionan en general y qué conviene
        revisar.
      </p>
    </div>
    <div class="rejilla rejilla--2">
      <?php foreach ($BUEN_USO as $u): ?>
      <article class="tarjeta">
        <h3><?= e($u['titulo']) ?></h3>
        <p><?= e($u['texto']) ?></p>
        <ul class="lista-chequeo">
          <?php foreach ($u['puntos'] as $p): ?><li><?= e($p) ?></li><?php endforeach; ?>
        </ul>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================== SEGURIDAD ============================ -->
<section class="seccion" id="seguridad">
  <div class="contenedor bloque-doble">
    <div>
      <span class="etiqueta">Seguridad</span>
      <h2>Cómo proteger tu dinero y tus datos</h2>
      <p>
        La mayoría de los fraudes no rompen la seguridad del banco: buscan que la propia persona entregue
        sus claves. Estas prácticas reducen ese riesgo de forma notable.
      </p>
      <svg viewBox="0 0 360 200" role="img" aria-label="Ilustración de un escudo protegiendo un teléfono móvil" style="margin-top:1.5rem">
        <rect width="360" height="200" rx="12" fill="#F7F8FA"/>
        <rect x="132" y="38" width="96" height="140" rx="12" fill="#fff" stroke="#DEE4EB" stroke-width="2"/>
        <rect x="146" y="60" width="68" height="8" rx="4" fill="#E3E9EF"/>
        <rect x="146" y="78" width="48" height="6" rx="3" fill="#EEF2F6"/>
        <circle cx="180" cy="128" r="26" fill="var(--c-exito)" opacity=".12"/>
        <path d="M180 108l14 6v11c0 8-6 15-14 17-8-2-14-9-14-17v-11z" fill="none" stroke="var(--c-exito)" stroke-width="2.5" stroke-linejoin="round"/>
        <path d="M174 126l4 4 8-8" fill="none" stroke="var(--c-exito)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M60 96h44M256 96h44" stroke="#C9D3DE" stroke-width="2" stroke-dasharray="6 6"/>
        <circle cx="48" cy="96" r="11" fill="none" stroke="var(--c-acento)" stroke-width="2.5"/>
        <path d="M48 91v6M48 100h.01" stroke="var(--c-acento)" stroke-width="2.5" stroke-linecap="round"/>
        <circle cx="312" cy="96" r="11" fill="none" stroke="var(--c-acento)" stroke-width="2.5"/>
        <path d="M312 91v6M312 100h.01" stroke="var(--c-acento)" stroke-width="2.5" stroke-linecap="round"/>
      </svg>
    </div>
    <ul class="lista-seguridad">
      <?php foreach ($SEGURIDAD as $s): ?>
      <li><span style="color:var(--c-exito)"><?= icono('check') ?></span><span><?= e($s) ?></span></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- ============================= AHORRO ============================= -->
<section class="seccion seccion--alt" id="ahorro">
  <div class="contenedor">
    <div class="encabezado-seccion">
      <span class="etiqueta">Ahorro</span>
      <h2>Cuatro pasos para empezar a ahorrar de verdad</h2>
      <p>
        No hay una cifra única que funcione para todos. Lo que sí funciona es un método ordenado y
        sostenido en el tiempo, adaptado a tus ingresos reales.
      </p>
    </div>
    <div class="pasos">
      <?php foreach ($PASOS_AHORRO as $p): ?>
      <article class="paso">
        <h3><?= e($p['titulo']) ?></h3>
        <p><?= e($p['texto']) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================= TABLA ============================== -->
<?php if (cfg('mostrar_tabla')): ?>
<section class="seccion" id="habitos">
  <div class="contenedor">
    <div class="encabezado-seccion">
      <span class="etiqueta">Comparativa</span>
      <h2>Qué cambiar y por qué</h2>
    </div>
    <div class="tabla-envoltura">
      <table>
        <caption><?= e($TABLA['titulo']) ?></caption>
        <thead>
          <tr><?php foreach ($TABLA['encabezado'] as $th): ?><th scope="col"><?= e($th) ?></th><?php endforeach; ?></tr>
        </thead>
        <tbody>
          <?php foreach ($TABLA['filas'] as $fila): ?>
          <tr>
            <th scope="row" style="font-weight:600;color:var(--c-texto)"><?= e($fila[0]) ?></th>
            <td><?= e($fila[1]) ?></td>
            <td><?= e($fila[2]) ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <p class="tabla-nota">
      Contenido de orientación general. No constituye asesoría financiera personalizada ni refleja
      condiciones comerciales de ninguna entidad. Desliza la tabla horizontalmente si usas un teléfono.
    </p>
  </div>
</section>
<?php endif; ?>

<!-- ============================ ERRORES ============================= -->
<?php if (cfg('mostrar_errores')): ?>
<section class="seccion seccion--suave" id="errores">
  <div class="contenedor angosto">
    <div class="encabezado-seccion">
      <span class="etiqueta">Para tenerlo presente</span>
      <h2>Errores comunes que conviene evitar</h2>
    </div>
    <ul class="lista-seguridad">
      <?php foreach ($ERRORES as $er): ?>
      <li><span style="color:var(--c-acento)"><?= icono('alerta') ?></span><span><?= e($er) ?></span></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>

<!-- =========================== PREGUNTAS ============================ -->
<section class="seccion" id="preguntas">
  <div class="contenedor">
    <div class="encabezado-seccion" style="margin-left:auto;margin-right:auto;text-align:center">
      <span class="etiqueta">Preguntas frecuentes</span>
      <h2>Dudas habituales sobre este sitio</h2>
    </div>
    <div class="faq">
      <?php foreach ($FAQ as $f): ?>
      <details>
        <summary><?= e($f['p']) ?></summary>
        <div class="faq__respuesta"><?= e($f['r']) ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================= CIERRE ============================= -->
<section class="seccion cierre" id="cierre">
  <div class="contenedor">
    <h2>Lee, compara y decide con información</h2>
    <p>
      Esta guía no sustituye la información oficial de tu entidad financiera ni la asesoría de un
      profesional. Úsala como punto de partida para preguntar mejor y decidir con más claridad.
    </p>
    <div class="cierre__acciones">
      <a class="btn btn--claro" href="#ahorro" data-evento="cta_cierre_ahorro">Ver los pasos de ahorro</a>
      <a class="btn btn--claro" href="#seguridad" data-evento="cta_cierre_seguridad">Consejos de seguridad</a>
    </div>
  </div>
</section>

<!-- ========================== PRIVACIDAD ============================ -->
<section class="seccion seccion--alt" id="privacidad">
  <div class="contenedor angosto">
    <div class="encabezado-seccion">
      <span class="etiqueta">Legal</span>
      <h2>Privacidad y uso de cookies</h2>
    </div>
    <p>
      Este sitio es informativo y <strong>no cuenta con formularios de registro</strong>: no solicita,
      no almacena y no comparte datos personales de las personas que lo visitan. Tampoco solicita
      credenciales bancarias, números de cuenta ni números de tarjeta.
    </p>
    <?php if ($medicion_activa): ?>
    <p>
      Utilizamos herramientas de medición de audiencia y de campañas publicitarias que pueden instalar
      cookies en tu navegador. Esas herramientas se activan <strong>únicamente si aceptas</strong> el
      aviso de cookies; si lo rechazas, no se cargan. Puedes cambiar tu decisión en cualquier momento
      borrando las cookies y los datos de este sitio en tu navegador, o pulsando el enlace
      «Preferencias de cookies» del pie de página.
    </p>
    <?php else: ?>
    <p>
      Actualmente este sitio <strong>no utiliza cookies de publicidad ni de analítica</strong>. Si en el
      futuro se incorpora alguna herramienta de medición, se solicitará tu consentimiento previo
      mediante un aviso y se actualizará esta sección.
    </p>
    <?php endif; ?>
    <p style="font-size:var(--t-sm);color:var(--c-texto-suave)">
      Responsable del sitio: <?= e(cfg('responsable')) ?>.
      <?php if (cfg('contacto_email') === ''): ?>
       
      <?php else: ?>
        Contacto: <a href="mailto:<?= e(cfg('contacto_email')) ?>"><?= e(cfg('contacto_email')) ?></a>.
      <?php endif; ?>
    </p>
  </div>
</section>

</main>

<!-- ============================== PIE =============================== -->
<footer class="pie">
  <div class="contenedor">
    <div class="pie__grid">
      <div>
        <h4><?= e(cfg('sitio_nombre')) ?></h4>
        <p>
          Guía de orientación educativa sobre el buen uso de los servicios financieros y el ahorro
          personal en <?= e(cfg('pais')) ?>. Sitio independiente, sin vínculo con entidades bancarias.
        </p>
        <p>Responsable: <?= e(cfg('responsable')) ?></p>
      </div>
      <div>
        <h4>Secciones</h4>
        <ul>
          <?php foreach (cfg('nav', []) as $item): ?>
          <li><a href="<?= e($item['href']) ?>"><?= e($item['texto']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div>
        <h4>Información</h4>
        <ul>
          <li><a href="#aviso">Aviso de independencia</a></li>
          <li><a href="#privacidad">Privacidad y cookies</a></li>
          <?php if ($medicion_activa && cfg('mostrar_aviso_cookies')): ?>
          <li><a href="#privacidad" id="abrirPreferencias">Preferencias de cookies</a></li>
          <?php endif; ?>
          <?php if (cfg('contacto_email') !== ''): ?>
          <li><a href="mailto:<?= e(cfg('contacto_email')) ?>">Contacto</a></li>
          <?php endif; ?>
          <?php if (cfg('contacto_telefono') !== ''): ?>
          <li><a href="tel:<?= e(preg_replace('/\s+/', '', cfg('contacto_telefono'))) ?>"><?= e(cfg('contacto_telefono')) ?></a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    <div class="pie__legal">
      <p>
        <strong>Aclaración:</strong> este sitio no es una entidad bancaria, financiera ni de pagos.
        No recibe dinero, no envía dinero y no realiza ni intermedia operaciones financieras de ningún
        tipo. No tiene vínculo, convenio, representación, patrocinio ni autorización de
        <?= e(cfg('tema_marca')) ?> ni de ninguna otra institución bancaria, y no mantiene relaciones
        comerciales con entidades bancarias. Su única función es informar y orientar educativamente a
        las personas usuarias sobre el buen uso de los servicios financieros y el ahorro.
      </p>
      <p>
        Las marcas, nombres comerciales y logotipos mencionados pertenecen a sus respectivos titulares
        y se citan únicamente con fines informativos y de referencia. El contenido es de carácter
        general y no constituye asesoría financiera, legal ni tributaria. Para condiciones, tasas,
        comisiones y requisitos, consulta exclusivamente los canales oficiales de tu entidad.
      </p>
      <p>&copy; <?= date('Y') ?> <?= e(cfg('sitio_nombre')) ?><?php if (cfg('sitio_dominio') !== ''): ?> · <?= e(cfg('sitio_dominio')) ?><?php endif; ?>. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>

<!-- ===================== MODAL INICIAL (OPCIONAL) ==================== -->
<?php if (cfg('mostrar_modal_inicial')): ?>
<div class="modal" id="modalInicial" role="dialog" aria-modal="true" aria-labelledby="modalTitulo">
  <div class="modal__caja">
    <h2 id="modalTitulo"><?= e(cfg('modal_titulo')) ?></h2>
    <p><?= e(cfg('modal_texto')) ?></p>
    <button class="btn btn--principal" id="modalCerrar" type="button">Entendido</button>
  </div>
</div>
<?php endif; ?>

<!-- ======================= AVISO DE COOKIES ========================= -->
<?php if ($medicion_activa && cfg('mostrar_aviso_cookies')): ?>
<div class="cookies" id="avisoCookies" role="region" aria-label="Aviso de cookies">
  <div class="contenedor cookies__fila">
    <p>
      Usamos cookies de medición para entender cómo se usa esta guía y para medir nuestras campañas
      publicitarias. Solo se activan si las aceptas. Más detalles en
      <a href="#privacidad">Privacidad y cookies</a>.
    </p>
    <div class="cookies__acciones">
      <button class="btn btn--secundario" id="cookiesRechazar" type="button">Rechazar</button>
      <button class="btn btn--principal" id="cookiesAceptar" type="button">Aceptar</button>
    </div>
  </div>
</div>
<?php endif; ?>

<script>
/* =============================================================================
   JAVASCRIPT — solo funcionalidades reales, sin simulaciones
   ========================================================================== */
(function () {
  'use strict';

  var CONFIG = {
    gtmId:      <?= json_encode(cfg('gtm_id')) ?>,
    googleTag:  <?= json_encode(cfg('google_tag_id')) ?>,
    conversion: <?= json_encode(cfg('conversion_label')) ?>,
    requiereConsentimiento: <?= $medicion_activa ? 'true' : 'false' ?>
  };
  var CLAVE_CONSENTIMIENTO = 'consentimiento_medicion';

  /* ---------- 1. Menú móvil ---------- */
  var toggle = document.getElementById('navToggle');
  var nav    = document.getElementById('navPrincipal');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var abierto = nav.getAttribute('data-abierto') === 'true';
      nav.setAttribute('data-abierto', abierto ? 'false' : 'true');
      toggle.setAttribute('aria-expanded', abierto ? 'false' : 'true');
    });
    nav.addEventListener('click', function (ev) {
      if (ev.target.tagName === 'A' && window.innerWidth <= 860) {
        nav.setAttribute('data-abierto', 'false');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ---------- 2. Modal inicial (si está activado) ---------- */
  var modal = document.getElementById('modalInicial');
  if (modal) {
    var cerrar = document.getElementById('modalCerrar');
    modal.setAttribute('data-abierto', 'true');
    if (cerrar) {
      cerrar.focus();
      cerrar.addEventListener('click', function () { modal.setAttribute('data-abierto', 'false'); });
    }
    document.addEventListener('keydown', function (ev) {
      if (ev.key === 'Escape') { modal.setAttribute('data-abierto', 'false'); }
    });
  }

  /* ---------- 3. Carga de etiquetas de medición ----------
     Se ejecuta UNA sola vez y solo con consentimiento + ID configurado.      */
  var etiquetasCargadas = false;
  function cargarMedicion() {
    if (etiquetasCargadas || !CONFIG.requiereConsentimiento) { return; }
    etiquetasCargadas = true;
    window.dataLayer = window.dataLayer || [];
    window.gtag = window.gtag || function () { window.dataLayer.push(arguments); };

    if (CONFIG.gtmId) {
      var g = document.createElement('script');
      g.async = true;
      g.src = 'https://www.googletagmanager.com/gtm.js?id=' + encodeURIComponent(CONFIG.gtmId);
      document.head.appendChild(g);
      window.dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
    }
    if (CONFIG.googleTag) {
      var t = document.createElement('script');
      t.async = true;
      t.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(CONFIG.googleTag);
      document.head.appendChild(t);
      window.gtag('js', new Date());
      window.gtag('config', CONFIG.googleTag);
    }
  }

  function leerConsentimiento() {
    try { return window.localStorage.getItem(CLAVE_CONSENTIMIENTO); } catch (e) { return null; }
  }
  function guardarConsentimiento(valor) {
    try { window.localStorage.setItem(CLAVE_CONSENTIMIENTO, valor); } catch (e) { /* sin almacenamiento */ }
  }

  /* ---------- 4. Aviso de cookies (consentimiento real) ---------- */
  var aviso = document.getElementById('avisoCookies');
  if (CONFIG.requiereConsentimiento) {
    var decision = leerConsentimiento();
    if (decision === 'aceptado') {
      cargarMedicion();
    } else if (decision !== 'rechazado' && aviso) {
      aviso.setAttribute('data-abierto', 'true');
    }
    if (aviso) {
      var btnOk = document.getElementById('cookiesAceptar');
      var btnNo = document.getElementById('cookiesRechazar');
      if (btnOk) btnOk.addEventListener('click', function () {
        guardarConsentimiento('aceptado'); aviso.setAttribute('data-abierto', 'false'); cargarMedicion();
      });
      if (btnNo) btnNo.addEventListener('click', function () {
        guardarConsentimiento('rechazado'); aviso.setAttribute('data-abierto', 'false');
      });
    }
    var reabrir = document.getElementById('abrirPreferencias');
    if (reabrir && aviso) {
      reabrir.addEventListener('click', function () { aviso.setAttribute('data-abierto', 'true'); });
    }
  }

  /* ---------- 5. Eventos de analítica ----------
     Los clics de navegación interna se registran como navegación, NO como
     conversión. La conversión solo debe dispararse ante una acción real
     definida como tal (por ejemplo, el envío correcto de un formulario).
     Mientras no exista esa acción, no se envía ninguna conversión.           */
  function registrarEvento(nombre) {
    if (!etiquetasCargadas || typeof window.gtag !== 'function') { return; }
    window.gtag('event', 'clic_navegacion', { nombre_elemento: nombre });
  }
  document.querySelectorAll('[data-evento]').forEach(function (el) {
    el.addEventListener('click', function () { registrarEvento(el.getAttribute('data-evento')); });
  });

  /* Conversión: disponible para cuando exista una acción real que la justifique.
     Protegida para no contar la misma conversión dos veces.
     Uso: window.registrarConversion();  */
  var conversionEnviada = false;
  window.registrarConversion = function () {
    if (conversionEnviada || !etiquetasCargadas || !CONFIG.conversion) { return; }
    if (typeof window.gtag !== 'function') { return; }
    conversionEnviada = true;
    window.gtag('event', 'conversion', { send_to: CONFIG.conversion });
  };
})();
</script>
</body>
</html>
