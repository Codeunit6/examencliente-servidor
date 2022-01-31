<?php
//lib
use Illuminate\Support\Facades\Route;
use App\Models\informacion;
use App\Models\articulos;
use App\Models\contenido;
//rutas

Route::get('/', function () {
    $social = new informacion();
    $social->facebook="https://www.facebook.com/BlackF.art/";
    $social->git="https://github.com/Codeunit6?tab=repositories";
    $social->twitter="https://twitter.com/hackingzone";
    return view('blog.inicio', ['social'=>$social]);
})->name('inicio');

Route::get('/home1', function () {
    //Articulo 1
    $articulo1 = new articulos();
    $articulo1->titulo = "1. Reconocer los conceptos de sistemas de información";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mejia Gomez Fernando Brayan";
    $articulo1->subtitulo = "UNIDAD 1";
    //Articulo 2
    $articulo2 = new articulos();
    $articulo2->titulo = "2. Reconer la evolución de los sistemas de información";
    $articulo2->fecha = "26 de Enero de 2022";
    $articulo2->autor = "Mendez Sandoval Eduardo Antonio";
    $articulo2->subtitulo = "UNIDAD 1";
    //Articulo 3
    $articulo3 = new articulos();
    $articulo3->titulo = "3. Definir el los conceptos de cliente y servidor";
    $articulo3->fecha = "26 de Enero de 2022";
    $articulo3->autor = "Mejia Gomez Fernando Brayan";
    $articulo3->subtitulo = "UNIDAD 1";
    //Articulo 4
    $articulo4 = new articulos();
    $articulo4->titulo = "4. Definir los sistemas de computadoras centrales y dedicadas";
    $articulo4->fecha = "26 de Enero de 2022";
    $articulo4->autor = "Mendez Sandoval Eduardo Antonio";
    $articulo4->subtitulo = "UNIDAD 1";
    return view('blog.home1', ['articulo1'=>$articulo1,'articulo2'=>$articulo2, 'articulo3'=>$articulo3, 'articulo4'=>$articulo4]);
})->name('index1');

Route::get('/home2', function(){
    //Articulo 5
    $articulo5 = new articulos();
    $articulo5->titulo = "5. Definir los sistemas de conexion libre y a traves de redes";
    $articulo5->fecha = "26 de Enero de 2022";
    $articulo5->autor = "Mejia Gomez Fernando Brayan";
    $articulo5->subtitulo = "UNIDAD 1";
    //Articulo 6
    $articulo6 = new articulos();
    $articulo6->titulo = "6. Describir los sistemas con arquitectura Cliente/Servidor";
    $articulo6->fecha = "26 de Enero de 2022";
    $articulo6->autor = "Mendez Sandoval Eduardo Antonio";
    $articulo6->subtitulo = "UNIDAD 1";
    //Articulo 7
    $articulo7 = new articulos();
    $articulo7->titulo = "7. Reconocer protcolos de comunicacion en red";
    $articulo7->fecha = "26 de Enero de 2022";
    $articulo7->autor = "Mejia Gomez Fernando Brayan";
    $articulo7->subtitulo = "UNIDAD 1";
    //Articulos 8
    $articulo8 = new articulos();
    $articulo8->titulo = "8. Clasificar los sisteas de informacion de acuerdo a su arquitectura";
    $articulo8->fecha = "26 de Enero de 2022";
    $articulo8->autor = "Mendez Sandoval Eduardo Antonio";
    $articulo8->subtitulo = "UNIDAD 1";
    return view('blog.home2', ['articulo5'=>$articulo5,'articulo6'=>$articulo6,'articulo7'=>$articulo7,'articulo8'=>$articulo8]);
})->name('index2');

Route::get('/about', function(){
    return view('blog.about');
})->name('about');

Route::get('/posteo1', function(){
    //Titulo articulo 
    $articulo1 = new articulos();
    $articulo1->titulo = "Reconocer los conceptos de sistemas de información";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mejia Gomez Fernando Brayan";
    $articulo1->subtitulo = "UNIDAD 1";
    //Contenido
    $contenido1=new contenido();
    $contenido1->titulo1="1. Sistemas de procesamiento de transacciones";
    $contenido1->titulo2="2. Sistemas de control de procesos de negocio";
    $contenido1->titulo3="3. Sistemas de colaboración empresarial";
    $contenido1->titulo4="4. Sistemas de Información de Gestión";
    $contenido1->titulo5="5. Sistemas de apoyo a la toma de decisiones";
    $contenido1->titulo6="6. Sistemas de Información Ejecutiva";
    $contenido1->con1="Los sistemas de procesamiento de transacciones (TPS por sus siglas en inglés) son los sistemas empresariales básicos que sirven al nivel operacional de la organización.";
    $contenido1->con2="Un sistema de procesamiento de transacciones es un sistema computarizado que realiza y registra las transacciones rutinarias diarias necesarias para el funcionamiento de la empresa. Se encuentran en el nivel más bajo de la jerarquía organizacional y soportan las actividades cotidianas del negocio.";
    $contenido1->con3="Los sistemas de control de procesos de negocio (BPM por sus siglas en inglés) monitorizan y controlan los procesos industriales o físicos, como puede ser la refinación de petróleo, generación de energía o los sistemas de producción de acero en una planta siderúrgica.";
    $contenido1->con4="Por ejemplo, en una refinería de petróleo se utilizan sensores electrónicos conectados a ordenadores para monitorizar procesos químicos continuamente y hacer ajustes en tiempo real que controlan el proceso de refinación. Un sistema de control de procesos comprende toda una gama de equipos, programas de ordenador y procedimientos de operación.";
    $contenido1->con5="Los sistemas de colaboración empresarial (ERP por sus siglas en inglés) son uno de los tipos de sistemas de información más utilizados. Ayudan a los directivos de una empresa a controlar el flujo de información en sus organizaciones.";
    $contenido1->con6="Se trata de uno de los tipos de sistemas de información que no son específicos de un nivel concreto en la organización, sino que proporcionan un soporte importante para una amplia gama de usuarios. Estos sistemas de información están diseñados para soportar tareas de oficina como sistemas multimedia, correos electrónicos, videoconferencias y transferencias de archivos.";
    $contenido1->con7="Los sistemas de información de gestión (MIS por sus siglas en inglés) son un tipo de sistemas de información que recopilan y procesan información de diferentes fuentes para ayudar en la toma de decisiones en lo referente a la gestión de la organización.";
    $contenido1->con8="Los sistemas de información de gestión proporcionan información en forma de informes y estadísticas. El siguiente nivel en la jerarquía organizacional está ocupado por gerentes y supervisores de bajo nivel. Este nivel contiene los sistemas informáticos que están destinados a ayudar a la gestión operativa en la supervisión y control de las actividades de procesamiento de transacciones que se producen a nivel administrativo.";
    $contenido1->con9="Los sistemas de información de gestión utilizan los datos recogidos por el TPS para proporcionar a los supervisores los informes de control necesarios. Los sistemas de información de gestión son los tipos de sistemas de información que toman los datos internos del sistema y los resumen en formatos útiles como informes de gestión para utilizarlos como apoyo a las actividades de gestión y la toma de decisiones.";
    $contenido1->con10="Un sistema de apoyo a la toma de decisiones o de soporte a la decisión (DSS por sus siglas en inglés) es un sistema basado en ordenadores destinado a ser utilizado por un gerente particular o por un grupo de gerentes a cualquier nivel organizacional para tomar una decisión en el proceso de resolver una problemática semiestructurada. Los sistemas de apoyo a la toma de decisiones son un tipo de sistema computarizado de información organizacional que ayuda al gerente en la toma de decisiones cuando necesita modelar, formular, calcular, comparar, seleccionar la mejor opción o predecir los escenarios.";
    $contenido1->con11="Los sistemas de apoyo a la toma de decisiones están específicamente diseñados para ayudar al equipo directivo a tomar decisiones en situaciones en las que existe incertidumbre sobre los posibles resultados o consecuencias. Ayuda a los gerentes a tomar decisiones complejas. ";
    $contenido1->con12="Los sistemas de información ejecutiva (EIS por sus siglas en inglés) proporcionan un acceso rápido a la información interna y externa, presentada a menudo en formato gráfico, pero con la capacidad de presentar datos básicos más detallados si es necesario. Los sistemas información ejecutiva proporcionan información crítica de una amplia variedad de fuentes internas y externas en formatos fáciles de usar para ejecutivos y gerentes.";
    $contenido1->con13="Un sistema de información ejecutiva proporciona a los altos directivos un sistema para ayudar a tomar decisiones estratégicas. Está diseñado para generar información que sea lo suficientemente abstracta como para presentar toda la operación de la empresa en una versión simplificada para satisfacer a la alta dirección. ";
    
    
    return view('blog.posteo1', ['articulo1'=>$articulo1, 'contenido1'=>$contenido1]);
})->name('posteo1');

Route::get('/posteo2', function(){
    //Articulo
    $articulo1= new articulos();
    $articulo1->titulo = "Reconer la evolución de los sistemas de información";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mendez Sandoval Eduardo Antonio";
    $articulo1->subtitulo = "UNIDAD 1";
    //Contenido
    $contenido1=new contenido();
    $contenido1->titulo1="Evolución de la función del sistema de información";
    $contenido1->titulo2="1950 - 1960: procesamiento de datos electrónicos, sistema de procesamiento de transacciones";
    $contenido1->titulo3="1960 a 1970: Sistemas de información gerencial";
    $contenido1->titulo4="1970 a 1980: Sistemas de soporte de decisiones";
    $contenido1->titulo5="1980 a 1990: Sistemas de información ejecutivo";
    $contenido1->titulo6="1990 a 2000: Sistemas de gestión del conocimiento";
    $contenido1->con1="La evolución de la función del sistema de información se puede resumir de la siguiente manera:";
    $contenido1->con2="Durante este período, el papel de SI fue principalmente para realizar actividades como el procesamiento de transacciones, el mantenimiento de registros y la contabilidad. SI se utilizó principalmente para el procesamiento electrónico de datos";
    $contenido1->con3="EDP se describe como el uso de computadoras para registrar, clasificar, manipular y resumir datos. También se llama procesamiento de información o procesamiento de datos automático.";
    $contenido1->con4="Sistema de procesamiento de transacciones (TPS) fue el primer sistema computarizado desarrollado para procesar datos comerciales. TPS estaba principalmente dirigido al personal administrativo de una organización. El TPS inicial utilizaba datos de procesamiento por lotes que se acumularon durante un período y todas las transacciones se procesaron posteriormente.";
    $contenido1->con5="TPS recopila, almacena, modifica y recupera las transacciones diarias de una organización. Por lo general, TPS informatiza o automatiza un proceso manual existente para permitir un procesamiento más rápido, un mejor servicio al cliente y costos administrativos reducidos. Ejemplos de productos de TPS son los depósitos en efectivo, el cajero automático (ATM), la orden de pago y los sistemas contables. TPS también se conoce como procesamiento de transacciones o procesamiento en tiempo real.";
    $contenido1->con6="Durante esta era, el rol de SI evolucionó desde TPS hasta Management Information Systems (MSI) o Sistemas de información gerenciales. MSI procesa los datos en informes informativos útiles y proporciona a los gerentes las herramientas para organizar evaluar y administrar de manera eficiente los departamentos dentro de una organización. MSI entrega información en forma de pantallas e informes preespecificados para respaldar la toma de decisiones empresariales. Algunos ejemplos de resultados de MSI son los sistemas de informes de tendencias de costos, análisis de ventas y rendimiento de producción.
    Por lo general, MSI genera tres tipos básicos de información que son:
    Los informes detallados de información típicamente confirman las actividades de procesamiento de transacciones. Un informe de pedido detallado es un ejemplo de informe detallado.";
    $contenido1->con7="La información resumida establece datos en un formato que un individuo puede revisar rápido y fácilmente.
    Información mediante el filtrado de datos es uno de excepción. Los informes de excepciones ayudan a los gerentes a ahorrar tiempo porque no tienen que buscar en un informe detallado las excepciones.";
    $contenido1->con8="Este período también marcó el desarrollo cuando el enfoque de las organizaciones cambió lentamente de la mera automatización de los procesos comerciales básicos a la consolidación del control dentro de la función de procesamiento de datos";
    $contenido1->con9="En esta era, un avance importante fue la introducción de las computadoras personales (PC). Con la introducción de las PC, se produjo la distribución de la potencia informática o de procesamiento en toda la organización. La función de SI está fuertemente asociada con la administración en lugar de un enfoque técnico en una organización. El papel se centró en el sistema interactivo basado en computadoras para ayudar a los responsables de la toma de decisiones a resolver problemas.
    Este nuevo rol de los sistemas de información para proporcionar soporte ad-hoc interactivo para el proceso de toma de decisiones a los gerentes y otros profesionales de negocios se denomina Sistemas de Soporte de Decisiones (DSS). DSS sirve el nivel de planificación, gestión y operaciones de una organización, por lo general, la alta dirección.";
    $contenido1->con10="DSS usa datos de fuentes internas y / o externas. Las fuentes internas de datos pueden incluir datos de inventario, ventas, fabricación o financieros de la base de datos de una organización. Las fuentes externas podrían incluir precios, tasas de interés, población o tendencias. Los gerentes usan DSS para manipular los datos y ayudar con las decisiones. Los ejemplos de DSS son cifras de ingresos proyectadas basadas en suposiciones de ventas de nuevos productos, precios de productos y sistemas de análisis de riesgos.";
    $contenido1->con11="Este período dio lugar a la informática departamental debido a que muchas organizaciones compran su propio hardware y software para satisfacer sus necesidades departamentales. En lugar de esperar el apoyo indirecto del departamento de servicio corporativo centralizado, los empleados podrían usar sus propios recursos para respaldar sus requisitos laborales. Esta tendencia dio lugar a nuevos desafíos de incompatibilidad de datos, integridad y conectividad en diferentes departamentos. Además, los altos ejecutivos no usaban DSS ni MSI, por lo que se desarrollaron sistemas de información ejecutivo (ESI) o sistemas de soporte ejecutivo (ESS).";
    $contenido1->con12="ESI ofrece servicios de toma de decisiones a los ejecutivos a través del suministro de información interna y externa relevante para cumplir los objetivos estratégicos de la organización. A veces se consideran como una forma específica de DSS. Los ejemplos del ESI son sistemas para facilitar el acceso a las acciones de todos los competidores, desarrollos económicos para respaldar la planificación estratégica y el análisis del desempeño del negocio.";
    $contenido1->con13="Durante esta era, el rápido crecimiento de las intranets, extranets, internet y otras redes globales interconectadas cambiaron drásticamente las capacidades de SI en los negocios. Se hizo posible circular el conocimiento a diferentes partes del mundo independientemente del tiempo y el espacio.
    Este período también vio una aparición de sistemas de planificación de recursos empresariales (ERP). ERP es una forma específica de organización de un sistema de información estratégica que incorpora todos los componentes de una organización, incluidas la fabricación, las ventas, la gestión de recursos, la planificación de recursos humanos y el marketing.
    Además, hubo un avance en el desarrollo y la aplicación de técnicas de inteligencia artificial (IA) a los sistemas de información comercial. Sistemas expertos (ES) y sistemas de gestión del conocimiento (KMS) interconectados entre sí.";
    $contenido1->con14="Los sistemas expertos (ES) son un sistema informático que imita la capacidad de toma de decisiones de los expertos humanos. Por ejemplo, sistemas que hacen predicciones financieras, diagnostican enfermedades humanas y programan rutas para vehículos de reparto. El sistema de gestión del conocimiento (KMS) es un sistema de TI que almacena y recupera conocimiento para apoyar la creación, organización y diseminación del conocimiento empresarial dentro de la empresa. Los ejemplos de KMS son la base de datos de retroalimentación y los sistemas de mesa de ayuda.
    ES utiliza datos de los Sistemas de Gestión del Conocimiento para generar un resultado deseable del sistema de información, por ejemplo, un sistema de aprobación de solicitudes de préstamo.";
    
    return view('blog.posteo2', ['articulo1'=>$articulo1, 'contenido1'=>$contenido1]);
})->name('posteo2');

Route::get('/posteo3', function(){
    //articulo
    $articulo1 = new articulos();
    $articulo1->titulo = "Definir el los conceptos de cliente y servidor";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mejia Gomez Fernando Brayan";
    $articulo1->subtitulo = "UNIDAD 1";
    //contenido
    $contenido1=new contenido();
    $contenido1->titulo1="Definición de los conceptos cliente y servidor";
    $contenido1->titulo2="";
    $contenido1->titulo3="";
    $contenido1->titulo4="";
    $contenido1->titulo5="";
    $contenido1->titulo6="";
    $contenido1->con1="La expresión cliente servidor se utiliza en el ámbito de la informática. En dicho contexto, se llama cliente al dispositivo que requiere ciertos servicios a un servidor. La idea de servidor, por su parte, alude al equipo que brinda servicios a las computadoras (ordenadores) que se hallan conectadas con él mediante una red.";
    $contenido1->con2="El concepto de cliente servidor, o cliente-servidor, refiere por lo tanto a un modelo de comunicación que vincula a varios dispositivos informáticos a través de una red. El cliente, en este marco, realiza peticiones de servicios al servidor, que se encarga de satisfacer dichos requerimientos.";
    $contenido1->con3="Con esta arquitectura, las tareas se distribuyen entre los servidores (que proveen los servicios) y los clientes (que demandan dichos servicios). Dicho de otro modo: el cliente le pide un recurso al servidor, que brinda una respuesta.";
    $contenido1->con4="Este tipo de modelos permite repartir de la capacidad de procesamiento. El servidor puede ejecutarse sobre más de un equipo y ser más de un programa. De acuerdo con los servicios que brinda, se lo puede llamar servidor web, servidor de correo o de otro modo.";
    $contenido1->con6="En las redes estructuradas bajo el modelo cliente servidor, los clientes centralizan diferentes aplicaciones y recursos en el servidor. El servidor, a su vez, se encarga de que estos recursos estén disponibles cada vez que un cliente los requiere.";
    $contenido1->con7="Es importante mencionar que gran parte de los servicios de Internet obedecen a la arquitectura cliente servidor. El servidor web pone a disposición del cliente los sitios web, a los cuales el cliente accede a través de su navegador. El servidor, de esta manera, aloja los datos que el cliente solicita mediante el navegador instalado en su computadora.";
    $contenido1->con8="Uno de los ejemplos más “antiguos” en este contexto es el correo electrónico, que demuestra a cada segundo de su funcionamiento los principios del modelo cliente servidor. En este caso, el cliente envía y recibe mensajes que “viajan” a través de redes de comunicación, y éstos se alojan en “buzones” cuyo nombre técnico es servidores de correo.";
    $contenido1->con9="A diferencia de lo que ocurre fuera de la informática, en el ámbito del correo tradicional, el usuario no abre un buzón material para mirar dentro de él si hay cartas o paquetes, sino que debe solicitar a un servidor (normalmente remoto) que verifique la presencia de nuevos mensajes y le envíe una respuesta con el resultado. Cada acción se apoya en esta relación, de manera que el equipo del cliente no es autosuficiente.";
    $contenido1->con10="Entre las disposiciones más comunes del modelo cliente servidor se encuentran los sistemas multicapa, según los cuales el servidor ofrece la ejecución de varios programas para que varios ordenadores puedan solicitarlos según sus necesidades, de manera que el nivel de distribución aumenta.";
    $contenido1->con12="Una de las ventajas menos aparentes de la organización en servidores y clientes es que la capacidad de procesamiento y memoria de estos últimos no debe ser tan grande como la de los primeros, lo cual beneficia al consumidor final permitiéndole usar un equipo relativamente antiguo para disfrutar de servicios generalmente muy avanzados.";
    $contenido1->con13="Por ejemplo, a pesar de que el correo electrónico parezca una “aplicación” muy liviana y sencilla, los servidores deben almacenar volúmenes colosales de datos para satisfacer a todos sus clientes, y, por consiguiente, realizar búsquedas y consultas muy demandantes para responder a todas sus solicitudes. Cuando buscamos un término en nuestra casilla para dar con un mensaje en particular, el servidor debe revisar cientos o miles de archivos, y lo hace en una fracción de segundo, algo que sería imposible en nuestros hogares.";
    $contenido1->con14="Los sistemas de streaming de videojuegos para usarlos a distancia son otro ejemplo, en este caso mucho más exigente que el correo electrónico, ya que el cliente puede disfrutar de un programa de última generación en tiempo real con un ordenador que simplemente le permita recibir el vídeo de forma fluida y enviar los eventos de su mando, teclado y ratón.";
    
    return view('blog.posteo3',['articulo1'=>$articulo1, 'contenido1'=>$contenido1]);

   
})->name('posteo3');

Route::get('/posteo4', function(){
    $articulo1 = new articulos();
    $articulo1->titulo = "Definir los sistemas de computadoras centrales y dedicadas";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mendez Sandoval Eduardo Antonio";
    $articulo1->subtitulo = "UNIDAD 1";
    //contenido
     //contenido
     $contenido1=new contenido();
     $contenido1->titulo1="Sistema de computadora central y dedicadas";
     $contenido1->titulo2="Computadora central Definición";
     $contenido1->titulo3="";
     $contenido1->titulo4="";
     $contenido1->titulo5="";
     $contenido1->titulo6="";
     $contenido1->con1="Conocido como mainframe, el sistema de una computadora central es una computadora grande, potente, pero muy cara y es usada comúnmente para una gran cantidad de datos, por ejemplo los datos que se transmiten en el banco, estos llegan a procesar cientos de millones veces las instrucciones por segundo, muchos usuarios pueden estar conectados. Se requieren tener un cuidado muy estricto, es usada por grandes corporaciones, y gobiernos";
     $contenido1->con2="Mientras los sistemas dedicados son credos para resolver problemas específicos, tienen características únicas y atractivas para su uso en aplicaciones, son usados comúnmente para simulaciones para ingeniería, esto lleva al desarrollo de herramientas y técnicas para facilitar su utilización, y transformarlos en una alternativa valida y casera";
     $contenido1->con3="La definición clásica de un ordenador central es una máquina que produce un alto rendimiento de computación que es utilizado por las grandes empresas que se emparejan los requisitos informáticos a gran escala. Una unidad central proporciona una mayor fiabilidad, disponibilidad y seguridad que sus contrapartes más pequeñas. Las computadoras centrales se utilizan normalmente en entornos informáticos centralizados en oposición a los entornos distribuidos, y en general se considera que son mucho más expertos en la computación de usos múltiples de servidores más pequeños.";
     $contenido1->con4="";
     $contenido1->con6="";
     $contenido1->con7="";
     $contenido1->con8="";
     $contenido1->con9="";
     $contenido1->con10="";
     $contenido1->con12="";
     $contenido1->con13="";
     $contenido1->con14="";
    return view('blog.posteo4',['articulo1'=>$articulo1, 'contenido1'=>$contenido1]);
})->name('posteo4');

Route::get('/posteo5', function(){
    $articulo1 = new articulos();
    $articulo1->titulo = "Definir los sistemas de conexion libre y a traves de redes";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mejia Gomez Fernando Brayan";
    $articulo1->subtitulo = "UNIDAD 1";
     //contenido
     $contenido1=new contenido();
     $contenido1->titulo1="Sistemas de conexión a través de redes";
     $contenido1->titulo2="";
     $contenido1->titulo3="";
     $contenido1->titulo4="";
     $contenido1->titulo5="";
     $contenido1->titulo6="";
     $contenido1->con1="La interconexión es el despliegue de puntos de intercambio de tráfico que integran conexiones directas y privadas entre participantes. La interconexión se da en Centros de Datos independientes del operador de la red.
     La conexión inter habla de una conectividad que involucra varias partes a la vez. La interconexión vincula numerosas entidades, capaces de conectarse como una unidad con otras entidades individuales.";
     $contenido1->con2="Reunir a todos los jugadores interconectados (Nubes, datos, empresas, ecosistemas digitales o individuos) es solo una característica. Estas conexiones deben estar tan cerca una de la otra, como sea posible. La distancia crea latencia y reducir la distancia entre los distintos jugadores es la única forma de poder minimizarla.";
     $contenido1->con3="Las conexiones más cercanas (a través de conexiones cruzadas o puertos de intercambio) suelen ser mucho menos costosas que las conexiones por medio de redes de larga distancia. Los IXP (Internet Exchange Point) juegan un rol crucial en la interconexión global, son una infraestructura física por la cual los Proveedores de Servicios de Internet intercambian información y tráfico de Internet entre sus redes.
     Esta instalación reduce la porción del tráfico de un ISP (Internet Service Provider) que debe ser entregado hacia su proveedor de conectividad, lo que reduce el costo promedio de la entrega de su servicio. Además, el aumento del número de rutas aprendidas a través del punto de intercambio mejora la eficiencia de enrutamiento y la tolerancia a fallos.";
     $contenido1->con4="";
     $contenido1->con6="";
     $contenido1->con7="";
     $contenido1->con8="";
     $contenido1->con9="";
     $contenido1->con10="";
     $contenido1->con12="";
     $contenido1->con13="";
     $contenido1->con14="";
    return view('blog.posteo5',['articulo1'=>$articulo1, 'contenido1'=>$contenido1]);
})->name('posteo5');

Route::get('/posteo6', function(){
    $articulo1=new articulos();
    $articulo1->titulo = "Describir los sistemas con arquitectura Cliente/Servidor";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mendez Sandoval Eduardo Antonio";
    $articulo1->subtitulo = "UNIDAD 1";
     //contenido
     $contenido1=new contenido();
     $contenido1->titulo1="Sistemas con arquitectura cliente/servidor";
     $contenido1->titulo2="Computadora central Definición";
     $contenido1->titulo3="";
     $contenido1->titulo4="";
     $contenido1->titulo5="";
     $contenido1->titulo6="";
     $contenido1->con1="Cliente-Servidor es uno de los estilos arquitectónicos distribuidos más conocidos, el cual está compuesto por dos componentes, el proveedor y el consumidor. El proveedor es un servidor que brinda una serie de servicios o recursos los cuales son consumido por el Cliente.";
     $contenido1->con2="En una arquitectura Cliente-Servidor existe un servidor y múltiples clientes que se conectan al servidor para recuperar todos los recursos necesarios para funcionar, en este sentido, el cliente solo es una capa para representar los datos y se detonan acciones para modificar el estado del servidor, mientras que el servidor es el que hace todo el trabajo pesado. ";
     $contenido1->con3="En esta arquitectura, el servidor deberá exponer un mecanismo que permite a los clientes conectarse, que por lo general es TCP/IP, esta comunicación permitirá una comunicación continua y bidireccional, de tal forma que el cliente puede enviar y recibir datos del servidor y viceversa. ";
     $contenido1->con4="Creo que es bastante obvio decir que en esta arquitectura el cliente no sirve para absolutamente nada si el servidor no está disponible, mientras que el servidor por sí solo no tendría motivo de ser, pues no habría nadie que lo utilice. En este sentido, las dos partes son mutuamente dependientes, pues una sin la otra no tendría motivo de ser.";
     $contenido1->con6="Cliente-Servidor es considerada una arquitectura distribuida debido a que el servidor y el cliente se encuentran distribuidos en diferentes equipos (aunque podrían estar en la misma máquina) y se comunican únicamente por medio de la RED o Internet. ";
     $contenido1->con7="En esta arquitectura, el Cliente y el Servidor son desarrollados como dos aplicaciones diferentes, de tal forma que cada una puede ser desarrollada de forma independiente, dando como resultado dos aplicaciones separadas, las cuales pueden ser construidas en tecnologías diferentes, pero siempre respetando el mismo protocolo de comunicación para establecer comunicación. 
     La idea central de separar al cliente del servidor radica en la idea de centralizar la información y la separación de responsabilidades, por una parte, el servidor será la única entidad que tendrá acceso a los datos y los servirá solo a los clientes del cual el confía, y de esta forma, protegemos la información y la lógica detrás del procesamiento de los datos, además, el servidor puede atender simultáneamente a varios clientes, por lo que suele ser instalado en un equipo con muchos recursos. Por otro lado, el cliente suele ser instalado en computadoras con bajos recursos, pues desde allí no se procesa nada, simplemente actúa como un visor de los datos y delega las operaciones pesadas al servidor.";
     $contenido1->con8="Quizás uno de los puntos más característicos de la arquitectura Cliente-Servidor es la centralización de los datos, pues el server recibe, procesa y almacena todos los datos provenientes de todos los clientes. Si bien los clientes por lo general solo se conectan a un solo servidor, existen variantes donde hay clientes que se conectan a múltiples servidores para funcionar, tal es el caso de los navegadores, los cuales, para consultar cada página establece una conexión a un servidor diferentes, pero al final es Cliente-Servidor:";
     $contenido1->con9="Como podemos ver en la imagen, el navegador actúa como un cliente, pero en lugar de conectarse a un solo servidor, puede conectarse a múltiples servidores. Por otro lado, el navegador no sirve para absolutamente nada sin no podemos acceder a un servidor.
     Como se estructura un Cliente-Servidor
     Como ya lo mencionamos, el cliente y el servidor son aplicaciones diferentes, por lo que pueden tener un ciclo de desarrollo diferente, así como usar tecnologías y un equipo diferente entre sí. Sin embargo, en la mayoría de los casos, el equipo que desarrolla el servidor también desarrolla el cliente, por lo que es normal ver que el cliente y el servidor están construidos con las mismas tecnologías.
     ";
     $contenido1->con10="Como podemos ver en la imagen de abajo, el cliente y el servidor son construidos en lo general como Monolíticos, donde cada desarrollo crea su propio ejecutable único y funciona sobre un solo equipo, con la diferencia de que estas aplicaciones no son autosuficientes, ya que existe una dependencia simbiótica entre los dos.
     En este sentido, es normal tener 3 artefactos, el Cliente, el Servidor y una tercera librería que contiene Objetos comunes entre el servidor y el cliente, esta librería tiene por lo general los Objetos de Entidad, DTO, interfaces y clases base que se usan para compartir la información, es decir, objetos que se utilizan en las dos aplicaciones y se separan para no repetir código (Principio DRY – Don’t repeat yourself), sin embargo, este tercer componente no es obligatorio que exista, sobre todo si el cliente y el servidor utilizan tecnologías diferentes o son implementados con diferentes proveedores.
     ";
     $contenido1->con12="Estructura de una aplicación Cliente-Servidor.
     Sin importar como desarrollemos el cliente y el servidor, lo importante es notar que siempre existirán un cliente y un servidor, donde el cliente expone la funcionalidad y el cliente la consume. ";
     $contenido1->con13="";
     $contenido1->con14="";
    return view('blog.posteo6',['articulo1'=>$articulo1, 'contenido1'=>$contenido1]);
})->name('posteo6');

Route::get('/posteo7', function(){
    $articulo1 = new articulos();
    $articulo1->titulo = "Reconocer protcolos de comunicacion en red";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mejia Gomez Fernando Brayan";
    $articulo1->subtitulo = "UNIDAD 1";
     //contenido
     $contenido1=new contenido();
     $contenido1->titulo1="Protocolos de comunicación en red";
     $contenido1->titulo2="Existen varios tipos de protocolos de red:";
     $contenido1->titulo3="";
     $contenido1->titulo4="";
     $contenido1->titulo5="";
     $contenido1->titulo6="";
     $contenido1->con1="Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de Transmisión) e IP (Protocolo de Internet). De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP.
     Estos los utilizamos prácticamente todos los días, aunque la mayoría de los usuarios no lo sepan ni conozcan su funcionamiento. Estos protocolos permiten la transmisión de datos desde nuestros dispositivos para navegar a través de los sitios, enviar correos electrónicos, escuchar música online, etc.
     ";
     $contenido1->con2="•	Protocolos de comunicación de red: protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.";
     $contenido1->con3="•	Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.";
     $contenido1->con4="•	Protocolos de gestión de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.";
     $contenido1->con6="Un grupo de protocolos de red que trabajan juntos en los niveles superior e inferior comúnmente se les denomina familia de protocolos.
     El modelo OSI (Open System Interconnection) organiza conceptualmente a las familias de protocolos de red en capas de red específicas. Este Sistema de Interconexión Abierto tiene por objetivo establecer un contexto en el cual basar las arquitecturas de comunicación entre diferentes sistemas.
     ";
     $contenido1->con7="";
     $contenido1->con8="";
     $contenido1->con9="";
     $contenido1->con10="";
     $contenido1->con12="";
     $contenido1->con13="";
     $contenido1->con14="";
    return view('blog.posteo7',['articulo1'=>$articulo1, 'contenido1'=>$contenido1]);
})->name('posteo7');

Route::get('/posteo8', function(){
    $articulo1 = new articulos();
    $articulo1->titulo = "Clasificar los sisteas de informacion de acuerdo a su arquitectura";
    $articulo1->fecha = "26 de Enero de 2022";
    $articulo1->autor = "Mendez Sandoval Eduardo Antonio";
    $articulo1->subtitulo = "UNIDAD 1";
     //contenido
     $contenido1=new contenido();
     $contenido1->titulo1="Clasificación de los sistemas de información de acuerdo con su arquitectura ";
     $contenido1->titulo2="";
     $contenido1->titulo3="";
     $contenido1->titulo4="";
     $contenido1->titulo5="";
     $contenido1->titulo6="";
     $contenido1->con1="Los sistemas de dos niveles: archivo — servidor. Las funciones de servidor en este caso se limitan habitualmente por el almacenamiento de datos (es posible también el almacenamiento de archivos ejecutados), y el procesamiento de datos tiene lugar solamente de parte de cliente. El número de clientes está limitado a causa de imposibilidad de acceso simultáneo para grabar un archivo. Las fallas principales de tal sistema son: la ausencia de integridad garantizada de la base de datos, el bajo nivel de protección, la baja productividad del sistema.";
     $contenido1->con2="Los sistemas de dos niveles: cliente — servidor, donde todos los cálculos se realizan en el servidor con los medios del Sistema de Gestión de Bases de Datos bajo la protección del sistema operativo del servidor. Las fallas principales de tal tipo son la velocidad insuficiente de funcionamiento y la incapacidad de realizar los algoritmos complejos de cálculo. Aquí también es necesario señalar numerosas decisiones donde el sistema en la realidad funciona como archivo — servidor a pesar de uso de los medios instrumentales cliente — servidor con todas las consecuencias negativas derivadas. Tal decisión se crea por lo habitual a causa de dificultad de realizar los algoritmos complejos de cálculo con los medios del Sistema de Gestión de Bases de Datos de servidor y de transferir los cálculos al puesto de trabajo del cliente";
     $contenido1->con3="Los sistemas de muchos niveles, donde las funciones de procesamiento de datos son pasados a uno o varios servidores especiales, lo que permite dividir las funciones de almacenamiento, de procesamiento y de presentación de datos para el uso más efectivo. En dicha etapa las realizaciones de tal clase son más convenientes para la realización de funcionalidad requerida";
     $contenido1->con4="";
     $contenido1->con6="";
     $contenido1->con7="";
     $contenido1->con8="";
     $contenido1->con9="";
     $contenido1->con10="";
     $contenido1->con12="";
     $contenido1->con13="";
     $contenido1->con14="";
    return view('blog.posteo8',['articulo1'=>$articulo1, 'contenido1'=>$contenido1]);
})->name('posteo8');

