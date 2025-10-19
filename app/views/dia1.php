<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/dia1.css'])
  : ['/css/dia1.css'];
?>

<section class="dia1">
  <header class="dia1__encabezado">
    <span class="dia1__etiqueta">Dia 1 - Inicio oficial</span>
    <h1 class="dia1__titulo">Palabras de bienvenida de nuestras distinguidas autoridades</h1>
    <p class="dia1__introduccion">
      Las autoridades de la Facultad compartieron mensajes de inspiracion para motivar a la comunidad de Sistemas
      a vivir con entusiasmo la Semana de Sistemas SDS25.
    </p>
  </header>

  <article class="dia1__cita">
    <figure class="dia1__figura">
      <img src="/assets/slider/tercero.png" alt="Ing. Herrera, docente de Ingenieria de Sistemas Informaticos">
      <figcaption>Ing. Herrera - Representante del cuerpo docente de Sistemas</figcaption>
    </figure>
    <blockquote class="dia1__discurso">
      <p>
        Nos llena de orgullo ver la calidad, el talento y la organizacion de nuestros estudiantes. Los futuros lideres
        de la innovacion tecnologica estan aqui, demostrando cada dia que no se necesitan grandes recursos para generar un
        cambio, sino una computadora, conexion a internet y un sueno claro.
      </p>
      <p>
        Crean en ustedes mismos. Comiencen transformando su entorno mas cercano, incluso con proyectos familiares. La clave
        del exito esta en la motivacion y la disciplina; Ingenieria en Sistemas es una carrera global con el potencial de impactar
        no solo a El Salvador sino al mundo.
      </p>
      <p>
        Bienvenidos a la Semana de Sistemas. Los protagonistas son ustedes. Participen con entusiasmo en cada actividad;
        estamos para acompanarlos en ese camino de innovacion.
      </p>
    </blockquote>
  </article>

  <article class="dia1__cita dia1__cita--inverso">
    <figure class="dia1__figura">
      <img src="/assets/slider/segundo.png" alt="Ing. Jose Luis Castro, jefe del Departamento de Ingenieria y Arquitectura">
      <figcaption>Ing. Jose Luis Castro - Jefe del Departamento de Ingenieria y Arquitectura</figcaption>
    </figure>
    <blockquote class="dia1__discurso">
      <p>
        La carrera de Sistemas Informaticos es un pilar para el desarrollo tecnologico del pais. La demanda no es solo economica,
        sino tambien tecnologica y social. Aunque la tecnologia avanza rapido y algunos temen que supere a la mente humana,
        somos nosotros quienes la creamos, lo cual demuestra nuestra capacidad y creatividad.
      </p>
      <p>
        Mantengan una mentalidad innovadora y utilicen la tecnologia como herramienta para mejorar los servicios y el desarrollo
        de El Salvador. Cada proyecto que nace desde las aulas puede convertirse en una solucion real para nuestra gente.
      </p>
      <p>
        Sigamos avanzando con orgullo como facultad, manteniendo la iniciativa, la cultura y el compromiso con la sociedad.
        Nos espera una semana llena de retos y aprendizaje compartido.
      </p>
    </blockquote>
  </article>

  <article class="dia1__cita">
    <figure class="dia1__figura">
      <img src="/assets/slider/primer.jpg" alt="Dra. Azucena Renata, Vicedecana de la Facultad">
      <figcaption>Dra. Azucena Renata - Vicedecana de la Facultad Multidisciplinaria Oriental</figcaption>
    </figure>
    <blockquote class="dia1__discurso">
      <p>
        Los estudiantes de la Universidad de El Salvador han sido, historicamente, motores de cambio y defensores de los
        derechos universitarios. Su capacidad para transformar la organizacion y el rumbo institucional sigue intacta,
        y eventos como esta Semana de Sistemas lo demuestran.
      </p>
      <p>
        Hablar de Sistemas Informaticos es hablar de transformaciones tecnologicas globales, redes, ciencia de datos y
        comunicacion. Estos elementos se han entretejido en la historia de la humanidad y hoy requieren una formacion
        integral que vaya mas alla del aula y de lo que un profesor puede ensenar.
      </p>
      <p>
        Aprovechen esta semana para ampliar su vision conceptual y practica. El siglo XXI demanda competencias nuevas,
        compromiso con el cambio y orgullo por la facultad que representamos. Les deseo el mayor de los exitos.
      </p>
    </blockquote>
  </article>
</section>

<section class="dia1__ponencias" id="dia1-ponencias">
  <header class="dia1__ponencias-encabezado">
    <span class="dia1__etiqueta dia1__etiqueta--ponencia">Dia 1 - Ponencias</span>
    <h2 class="dia1__ponencias-titulo">Ponencia inaugural: &ldquo;ABC del Bitcoin&rdquo;</h2>
    <p class="dia1__ponencias-resumen">
      El Maestro Contreras comparti&oacute; c&oacute;mo Bitcoin puede convertirse en una herramienta de emancipaci&oacute;n econ&oacute;mica,
      invitando a los asistentes a transformar su relaci&oacute;n con el dinero y a defender su libertad financiera.
    </p>
  </header>

  <article class="ponencia">
    <div class="ponencia__galeria">
      <figure class="ponencia__imagen">
        <img src="/assets/slider/contreras1.jpeg" alt="Maestro Contreras en escena durante la ponencia">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/contreras2.jpeg" alt="Asistentes observando la presentaci&oacute;n del ABC del Bitcoin">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/contreras3.jpeg" alt="Detalle de la presentaci&oacute;n sobre la evoluci&oacute;n del dinero">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/contreras4.jpeg" alt="Explicaci&oacute;n sobre la blockchain de Bitcoin">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/contreras5.jpeg" alt="Participantes inspirados tras la ponencia del Maestro Contreras">
      </figure>
    </div>

    <div class="ponencia__contenido">
      <header class="ponencia__introduccion">
        <h3 class="ponencia__ponente">Maestro Contreras &mdash; Fundador de Bitcoin Beach y Misi&oacute;n 21</h3>
        <p>
          Independiente del gobierno salvadore&ntilde;o, Contreras impulsa proyectos sociales como una escuela de f&uacute;tbol gratuita
          financiada con bitcoin, desde donde promueve una revoluci&oacute;n mental sobre el dinero: no se trata de recetas r&aacute;pidas
          para hacerse millonario, sino de comprender la libertad financiera.
        </p>
      </header>

      <div class="ponencia__temas">
        <section class="ponencia__tema">
          <h4>Contexto personal y prop&oacute;sito</h4>
          <p>
            Aclar&oacute; que no trabaja para el gobierno y que su labor acad&eacute;mica y comunitaria con Bitcoin busca inspirar
            independencia econ&oacute;mica. Enfatiz&oacute; que Bitcoin Beach y Misi&oacute;n 21 se sostienen con ganancias en bitcoin
            para ofrecer oportunidades reales a ni&ntilde;os y j&oacute;venes.
          </p>
          <p>
            El objetivo central de su mensaje fue impulsar un cambio mental frente al dinero: entender c&oacute;mo funciona,
            cuestionar la dependencia bancaria y tomar decisiones de ahorro e inversi&oacute;n informadas.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Cr&iacute;ticas al sistema monetario y fundamentos austriacos</h4>
          <p>
            Seg&uacute;n Contreras, los bancos viven del endeudamiento constante y siguen ofreciendo cr&eacute;ditos incluso tras
            liquidar un pr&eacute;stamo. Tambi&eacute;n repas&oacute; las pol&iacute;ticas habituales de los gobiernos: intervenci&oacute;n,
            consumo permanente, emisi&oacute;n de dinero y poco incentivo al ahorro, apoyadas en estad&iacute;sticas que ocultan el
            bienestar real.
          </p>
          <p>
            Record&oacute; los principios de la econom&iacute;a austriaca como el individualismo metodol&oacute;gico, el valor subjetivo
            y la necesidad de dinero fuerte y escaso. Por ello, resalt&oacute; que Bitcoin mantiene un suministro fijo de 21 millones
            de unidades.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Evoluci&oacute;n del dinero y sentido del ahorro</h4>
          <p>
            Hizo un recorrido desde el uso de la sal, el oro y el d&oacute;lar, subrayando que desde 1971 la divisa estadounidense
            perdi&oacute; su respaldo en oro y se deval&uacute;a continuamente. Guardar efectivo, afirm&oacute;, erosiona el poder
            adquisitivo, mientras que una moneda con oferta limitada como Bitcoin puede fungir como resguardo de valor.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Blockchain: transparencia y seguridad</h4>
          <p>
            Compar&oacute; un registro bancario tradicional con la cadena de bloques de Bitcoin: mientras un tesorero podr&iacute;a
            alterar cifras, la blockchain registra entradas y salidas en un libro p&uacute;blico imposible de modificar sin ser
            detectado por miles de nodos. Utiliz&oacute; la analog&iacute;a de los diamantes para explicar c&oacute;mo la escasez
            sustenta el valor del bitcoin.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Adopci&oacute;n en El Salvador y remesas</h4>
          <p>
            Explic&oacute; que El Salvador abraz&oacute; Bitcoin por convicci&oacute;n filos&oacute;fica y para reducir intermediarios
            en las remesas. Compartieron casos de env&iacute;os a Cuba mediante la organizaci&oacute;n CubaBitcoin, salt&aacute;ndose
            bloqueos financieros. Incluso mencion&oacute; que l&iacute;deres como Vladimir Putin reconocen que no pueden detener una
            red distribuida globalmente.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Origen de Bitcoin y comunidad cypherpunk</h4>
          <p>
            Record&oacute; a los cypherpunks de los a&ntilde;os ochenta como defensores de la privacidad digital que experimentaron
            con monedas previas, como e-gold, que fracasaron por el doble gasto. Destac&oacute; que Satoshi Nakamoto public&oacute;
            el white paper el 31 de octubre de 2008, min&oacute; el primer bloque el 3 de enero de 2009 y poco despu&eacute;s se realiz&oacute;
            la primera transacci&oacute;n. La ic&oacute;nica compra de dos pizzas por 10&nbsp;000 BTC en 2010 ejemplifica la evoluci&oacute;n
            del valor de Bitcoin.
          </p>
          <p>
            La identidad de Satoshi sigue siendo un misterio; dej&oacute; cerca de un mill&oacute;n de bitcoins inm&oacute;viles antes
            de desaparecer en 2011, alimentando teor&iacute;as sobre colaboradores como Hal Finney y Adam Back.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Miner&iacute;a, emisi&oacute;n y seguridad</h4>
          <p>
            Contreras repas&oacute; que Bitcoin es finito: existir&aacute;n 21 millones de monedas y casi 20 millones ya se han emitido.
            Cada 10 minutos se minan bloques y la recompensa se reduce a la mitad cada cuatro a&ntilde;os; hoy se crean 3.125 BTC por
            bloque. La creciente dificultad minera obliga a trabajar con equipos especializados o pools, refuerzo que protege a la red.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Privacidad y comercializaci&oacute;n de datos</h4>
          <p>
            Advirti&oacute; que los datos personales son mercanc&iacute;a. Relat&oacute; que empresas han ofrecido pagar a asistentes
            de eventos de Bitcoin por compartir informaci&oacute;n, ofertas a las que su equipo se neg&oacute; para defender la
            privacidad y la filosof&iacute;a cypherpunk frente a la vigilancia y la censura.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Billeteras, seguridad y usos pr&aacute;cticos</h4>
          <p>
            Diferenci&oacute; las billeteras de custodia, gestionadas por terceros, de las sin custodia, controladas por el usuario.
            Para el ahorro a largo plazo recomend&oacute; billeteras fr&iacute;as y respaldar la frase de recuperaci&oacute;n, recordando
            que millones de bitcoins se han perdido por olvidar claves. Tambi&eacute;n abord&oacute; transacciones programadas y la
            Lightning Network para pagos instant&aacute;neos con comisiones m&iacute;nimas.
          </p>
          <p>
            Finalmente, destac&oacute; que la blockchain ya se usa en identificaciones digitales, t&iacute;tulos acad&eacute;micos y
            facturaci&oacute;n electr&oacute;nica en distintos pa&iacute;ses.
          </p>
        </section>

        <section class="ponencia__tema ponencia__tema--conclusion">
          <h4>Conclusiones y llamado a la acci&oacute;n</h4>
          <p>
            El Maestro Contreras cerr&oacute; invitando a la audiencia a ser su propio banco: proteger sus ahorros, verificar
            transacciones en tiempo real y emprender sin depender de instituciones que capitalizan el dinero ajeno. Compartiendo su
            propia transformaci&oacute;n, motiv&oacute; a adoptar h&aacute;bitos de ahorro, salud y consumo consciente bajo la filosof&iacute;a
            de Bitcoin.
          </p>
        </section>
      </div>
    </div>
  </article>
</section>

<section class="dia1__ponencias dia1__ponencias--ai">
  <header class="dia1__ponencias-encabezado dia1__ponencias-encabezado--ai">
    <span class="dia1__etiqueta dia1__etiqueta--ponencia">Dia 1 - Ponencias</span>
    <h2 class="dia1__ponencias-titulo">Conferencia: &ldquo;Inteligencia Artificial Generativa: de la idea a la acci&oacute;n&rdquo;</h2>
    <p class="dia1__ponencias-resumen">
      Una charla que conect&oacute; tecnolog&iacute;a y humanidad, invitando a asumir la inteligencia artificial como herramienta consciente
      y a transformar los datos en conocimiento para decidir con responsabilidad.
    </p>
  </header>

  <article class="ponencia ponencia--ai">
    <div class="ponencia__galeria">
      <figure class="ponencia__imagen ponencia__imagen--destacada">
        <img src="/assets/slider/ponencia2.png" alt="Escenario principal de la conferencia Inteligencia Artificial Generativa">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/1.jpeg" alt="Estudiantes atentos a la charla sobre inteligencia artificial generativa">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/2.jpeg" alt="Ponente explicando la transformaci&oacute;n de datos en conocimiento">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/3.jpeg" alt="Participantes tomando notas durante la conferencia de IA">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/4.jpeg" alt="Comparaci&oacute;n de resultados entre rad&oacute;logos e inteligencia artificial">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/5.jpeg" alt="Gr&aacute;fico sobre aprendizaje autom&aacute;tico y modelos generativos">
      </figure>
      <figure class="ponencia__imagen">
        <img src="/assets/slider/6.jpeg" alt="Asistentes discutiendo sobre el futuro de la inteligencia artificial">
      </figure>
    </div>

    <div class="ponencia__contenido">
      <header class="ponencia__introduccion">
        <h3 class="ponencia__ponente">Rodrigo Pineda &mdash; Ponencia &ldquo;Inteligencia Artificial Generativa: de la idea a la acci&oacute;n&rdquo;</h3>
        <p>
          El ponente subray&oacute; que la tecnolog&iacute;a no es peligrosa por s&iacute; misma; el riesgo surge cuando se adopta de forma pasiva y sin
          conocimiento. El rol de la comunidad tecnol&oacute;gica es explicar, contextualizar y guiar a la sociedad en el uso consciente de la IA, el
          blockchain y las criptomonedas.
        </p>
      </header>

      <div class="ponencia__temas">
        <section class="ponencia__tema">
          <h4>La tecnolog&iacute;a no es una amenaza</h4>
          <p>
            Se invit&oacute; a comprender las herramientas digitales antes de aceptarlas. Las innovaciones deben utilizarse con criterio, y los
            ingenieros actuar como mediadores entre el conocimiento t&eacute;cnico y la comprensi&oacute;n social.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Del dato al conocimiento</h4>
          <p>
            Los datos son registros aislados; al estructurarlos surge la informaci&oacute;n, y al relacionarlos con saberes previos nace el
            conocimiento. Solo el conocimiento permite tomar decisiones conscientes y no seguir modas tecnol&oacute;gicas.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Ingenier&iacute;a de contexto</h4>
          <p>
            La calidad de las respuestas de modelos generativos depende del contexto aportado. La antigua ingenier&iacute;a de prompts evoluciona
            hacia la ingenier&iacute;a de contexto, que exige entender objetivos, restricciones y entorno antes de interactuar con la IA.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Criterio humano y empleo</h4>
          <p>
            La IA puede producir resultados, pero el valor diferencial sigue siendo el juicio humano. Adaptarse, pensar cr&iacute;ticamente y
            analizar escenarios es esencial para evitar que la automatizaci&oacute;n reduzca los ingresos profesionales.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>IA frente a rad&oacute;logos</h4>
          <p>
            En pruebas con tomograf&iacute;as, ChatGPT alcanz&oacute; 97&nbsp;% de precisi&oacute;n frente al 86&nbsp;% de especialistas humanos. A pesar de ello,
            la interpretaci&oacute;n cl&iacute;nica sigue siendo humana: la IA trabaja con correlaciones estad&iacute;sticas y no con juicios m&eacute;dicos.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Inteligencia vs. conciencia</h4>
          <p>
            La inteligencia puede programarse para resolver problemas; la conciencia implica sentir y tener subjetividad. Los algoritmos pueden
            parecer inteligentes, pero carecen de emociones y no son conscientes de sus actos.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Historia de la IA</h4>
          <p>
            Se record&oacute; a Alan Turing como precursor de la inform&aacute;tica y a John McCarthy, quien acu&ntilde;&oacute; el t&eacute;rmino &ldquo;Inteligencia Artificial&rdquo;.
            Se diferenci&oacute; la IA estrecha actual de la IA general, a&uacute;n inalcanzable.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Aprendizaje autom&aacute;tico</h4>
          <p>
            Se describieron los tipos de machine learning (supervisado, no supervisado, semisupervisado y por refuerzo) y se compararon los
            niveles tecnologicos: machine learning, deep learning y modelos fundacionales capaces de generar texto, im&aacute;genes o c&oacute;digo.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Modelos generativos y GANs</h4>
          <p>
            Las GANs enfrentan un generador con un discriminador para mejorar resultados iterativamente. Se advirti&oacute; que subir datos personales
            a internet alimenta los sistemas de entrenamiento.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Informaci&oacute;n no es conocimiento</h4>
          <p>
            Procesar miles de palabras por segundo no equivale a entender. Los algoritmos trabajan con estad&iacute;sticas; los humanos aportan
            contexto, experiencia y significado.
          </p>
        </section>

        <section class="ponencia__tema">
          <h4>Fundamentos humanistas</h4>
          <p>
            La conferencia incluy&oacute; reflexiones de nociolog&iacute;a, ontolog&iacute;a y epistemolog&iacute;a. Citando a Yuval Noah Harari, se ubic&oacute; a la IA
            como el inicio de una cuarta revoluci&oacute;n basada en datos y conocimiento.
          </p>
        </section>

        <section class="ponencia__tema ponencia__tema--conclusion">
          <h4>De la idea a la acci&oacute;n</h4>
          <p>
            El llamado final fue a formarse continuamente, automatizar con sentido y evaluar sesgos y calidad en cada herramienta. La IA no
            reemplazar&aacute; a las personas, pero desplazar&aacute; a quienes no la usen de forma consciente.
          </p>
        </section>
      </div>
    </div>
  </article>
</section>


<section class="dia1__hackathon" id="dia1-hackathon">
  <header class="dia1__ponencias-encabezado dia1__ponencias-encabezado--hackathon">
    <span class="dia1__etiqueta dia1__etiqueta--ponencia">Hackat&oacute;n</span>
    <h2 class="dia1__ponencias-titulo">Hackat&oacute;n de C#</h2>
    <p class="dia1__ponencias-resumen">
      Hackathon. Una experiencia &uacute;nica para innovar, crear y demostrar tu talento. Los equipos crearon soluciones que responden a
      necesidades reales del campus y la comunidad.
    </p>
  </header>

  <div class="hackathon__proyectos">
    <article class="hackathon__card">
      <figure class="hackathon__imagen">
        <img src="/assets/slider/h14.jpeg" alt="Sistema para la gesti&oacute;n de una cl&iacute;nica veterinaria">
      </figure>
      <div class="hackathon__detalles">
        <h3>Grupo 1</h3>
        <p>Sistema para la gesti&oacute;n de una cl&iacute;nica veterinaria.</p>
      </div>
    </article>

    <article class="hackathon__card">
      <figure class="hackathon__imagen">
        <img src="/assets/slider/h5.jpeg" alt="Sistema para la gesti&oacute;n de eventos, congresos y actividades">
      </figure>
      <div class="hackathon__detalles">
        <h3>Grupo 2</h3>
        <p>Sistema para la gesti&oacute;n de eventos, congresos y actividades.</p>
      </div>
    </article>

    <article class="hackathon__card">
      <figure class="hackathon__imagen">
        <img src="/assets/slider/h16.jpeg" alt="Sistema de entretenimiento grupal: Bingo">
      </figure>
      <div class="hackathon__detalles">
        <h3>Grupo 3</h3>
        <p>Sistema de entretenimiento grupal: Bingo.</p>
      </div>
    </article>

    <article class="hackathon__card">
      <figure class="hackathon__imagen">
        <img src="/assets/slider/h8.jpeg" alt="Sistema para veterinario principiante con citas organizadas">
      </figure>
      <div class="hackathon__detalles">
        <h3>Grupo 4</h3>
        <p>Sistema para veterinario principiante: organizaci&oacute;n de citas y m&eacute;dicos disponibles.</p>
      </div>
    </article>

    <article class="hackathon__card">
      <figure class="hackathon__imagen">
        <img src="/assets/slider/h15.png" alt="Sistema SISGRADE para gesti&oacute;n acad&eacute;mica y registro de evaluaciones">
      </figure>
      <div class="hackathon__detalles">
        <h3>Grupo 5</h3>
        <p>Sistema &ldquo;SISGRADE&rdquo; para gesti&oacute;n acad&eacute;mica y registro de evaluaciones.</p>
      </div>
    </article>
  </div>

  <div class="hackathon__galeria">
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h1.jpeg" alt="Equipos afinando sus propuestas durante el hackat&oacute;n de C#">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h2.jpeg" alt="Mentor apoyando a un grupo en el hackat&oacute;n de C#">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h3.jpeg" alt="Participantes desarrollando sus aplicaciones en C#">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h4.jpeg" alt="Exposici&oacute;n de soluciones innovadoras durante el hackat&oacute;n">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h6.jpeg" alt="Revisi&oacute;n de c&oacute;digo en equipo durante la marat&oacute;n de programaci&oacute;n">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h7.jpeg" alt="Sesiones de retroalimentaci&oacute;n con el jurado del hackat&oacute;n C#">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h9.jpeg" alt="Equipo presentando su prototipo al panel evaluador">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h10.jpeg" alt="Celebraci&oacute;n de resultados tras una jornada intensa de desarrollo">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h11.jpeg" alt="Demostraci&oacute;n de funcionalidades del proyecto final">
    </figure>
    <figure class="hackathon__galeria-item">
      <img src="/assets/slider/h12.jpeg" alt="Participantes ajustando detalles antes de la presentaci&oacute;n final">
    </figure>
  </div>
</section>

<section class="dia1__ganadores" id="dia1-ganadores">
  <h2 class="dia1__ganadores-titulo">Ganadores</h2>
  <div class="dia1__ganadores-video">
    <video class="dia1__ganadores-media" controls preload="metadata" poster="/assets/slider/h13.jpeg">
      <source src="/assets/slider/h13.mp4" type="video/mp4">
      Tu navegador no soporta la reproducci&oacute;n de video.
    </video>
  </div>
</section>
