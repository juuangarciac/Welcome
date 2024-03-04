# Mi Portfolio

¡Hola! Soy Juan Garcia, un desarrollador de software con experiencia. Este es mi portafolio de GitHub, donde comparto algunos de mis proyectos y habilidades.

## Proyectos
### Aplicaciones de Terminal
   - [**Tienda electrónica**](https://github.com/juuangarciac/es.uca.e-shop.cpp): Aplicación de terminal desarrollada exclusivamente con el lenguaje de programación *C++*. Esta aplicación formó parte de mi aprendizaje en la *Programación Orientada a Objetos*, introduciendome a conceptos como *Clases, Objetos, Herencia, y Polimorfismo*.

### Desarrollo Web
   - [**MyWineShop**](https://github.com/juuangarciac/es.uca.bodeguitaelrubio.laravel): Aplicación web desarrollada con *laravel*. Esta aplicación se realizó como proyecto de prácticas de la asignatura *Internet y Negocio Electrónico*. Consiste en una plataforma de **e-commerce**. A través del desarrollo de esta aplicación me introduje en el mundo del desarrollo web, esto me brindó mis primeros conocimientos sobre la arquitectura *Modelo-Vista-Controlador*, desarrollo de aplicaciones web usando el lenguaje de programación *PHP*, conexión con un servidor de bases de datos, junto a su correspondiente gestor. También adquirí conocimientos de desarrollo de interfaces de usuario, para ello se uso el framework **bootstrap**, y por supuesto el lenguaje de marcado sobre el que se basa la web *HTML*.
     
   - [**OMV(Operadora Virtual de Telecomunicaciones) *MangoPhone***](https://github.com/Manuel-Coca/iw2023-2024-MangoPhone): Aplicación web desarrollada con *Vaadin y Spring Boot* y desplegada en *AWS*. La plataforma *MangoPhone* se desarrolló como proyecto de prácticas de la asignatura *Ingeniería Web*. Esta plataforma proporciona un *front-office* para clientes, y un *back-office* para empleados. En el desarrollo de *MangoPhone* colaboramos diferentes compañeros, lo que a me aportó experiencia trabajando en equipo, aptitudes como gestión de problemas, colaboración, liderazgo, motivación. Aparte, adquirí conocimientos técnicos como el desarrollo de aplicaciones usando frameworks basados en el lenguaje de programación *Java*, y la arquitectura *Layers*. El despliegue de la aplicación se realizó usando la plataforma **Amazon Web Services**.

   - [**VitaSnap**](https://github.com/juuangarciac/es.juuangarciac.vitasnap.java): VitaSnap se realizó con la motivación de indagar más acerca del concepto de **API privada**. Su desarrollo se llevo a cabo usando el framework *SpringBoot*. También se implementó una aplicación hecha en *React* para realizar peticiones a la API. Dado al exponencial crecimiento del uso de las APIs como parte de la arquitectura de cualquier sistema, me ví en la obligación de mejorar mis conocimientos en este ámbito del desarrollo web. Esto me llevó a desarrollar una *API protegida con APIkeys* usando el framework de *SpringBoot*, así como las funcionalidades proporcionadas por *SpringSecurity*, para garantizar un acceso seguro a la misma.

### The Best One
En esta sección quería destacar el proyecto [**The Drop Hunter**](https://github.com/juuangarciac/es.theDropHunter.springReact) ya que engloba todos mis conocimientos sobre el desarrollo, gestión y despliegue de aplicaciones web. **TODO**

## Despliegue
### Preparación del entorno (Base de datos, Gestor de base de datos)
A continuación, se proporcionan los pasos previos para poder desplegar cada uno de los proyectos en un entorno local:

### Usando herramientas de despliegue (*XAMPP*, *AppServe*)
***Nota***: Es importante recordar que la plataforma XAMPP proporciona facilidades para el despliegue de aplicaciones que usan el lenguaje de programación PHP, por tanto para el despliegue de aplicaciones basadas en otros lenguajes, como *java*, se necesitará realizar de forma independiente la descarga de los paquetes y dependencias necesarios.

En este caso, en el que se quiere desplegar la aplicación usando una herramienta como *XAMPP*, únicamente sería necesario:

1. Copiar la carpeta o directorio del proyecto que deseemos desplegar, por ejemplo *LaBodeguitaElRubio* en el directorio */htdocs*, y seguir los pasos para el despliegue indicados dentro del directorio de dicho proyecto.

2. En la carpeta raíz de este repositorio, se encuentra el directorio *tools*. En este directorio se encontrará el fichero necesario para importar la base de datos, a través de su sistema gestor de base de datos, por ejemplo *phpMyAdmin*.

### Usando Tecnología de contenedores
Despliegue usando la tecnología de contenerización (Docker)
   1. Acceder al directorio *tools*.
   2. Una vez situados, seleccionar el directorio o carpeta del proyecto que se desee desplegar, por ejemplo *MangoPhone*.
   3. Ejecutar el comando `docker-compose up -d`, estó levantará en diferentes contenedores los microservicios necesarios que conectarán con la aplicación.

**Nota:** Una vez terminada la ejecución de la aplicación, ejecutar `docker-compose down` para termninar la ejecución de los contenedores.

## Contacto

Si desea ponerse en contacto conmigo, puede enviarme un correo electrónico a juangarcandon@gmail.com.

¡Gracias por visitar mi portafolio!
