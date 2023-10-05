
   <div id="myModal" class="modal">
      <div class="modal-content font-roboto">
         <span class="close" id="closeModal">&times;</span>
         <div class="flex justify-center mb-2">
            <a class="tablinks bg-unimagBlue hover:bg-unimagOrange text-white font-bold py-1 px-1 rounded-l border-r border-white" onclick="openTab(event, 'tab1')">Datos básicos</a>
            <a class="tablinks bg-unimagBlue hover:bg-unimagOrange text-white font-bold py-1 px-1 border-r border-white" onclick="openTab(event, 'tab2')">Saber Pro</a>
            <a class="tablinks bg-unimagBlue hover:bg-unimagOrange text-white font-bold py-1 px-1 border-r border-white" onclick="openTab(event, 'tab3')">Inglés</a>
            <a class="tablinks bg-unimagBlue hover:bg-unimagOrange text-white font-bold py-1 px-1 border-r border-white" onclick="openTab(event, 'tab4')">Opción de grado</a>
            <a class="tablinks bg-unimagBlue hover:bg-unimagOrange text-white font-bold py-1 px-1 rounded-r" onclick="openTab(event, 'tab5')">General</a>
         </div>
         <!-- Contenido de las pestañas -->
         <div id="tab1" class="tabcontent hidden">
            <!-- Tu contenido para el primer tab -->
            <h2 class="text-2xl font-bold mb-4">Documentos Básicos</h2>
            <div class="mb-2">
               <!-- Resto de tu contenido aquí -->
               <div class="mb-2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="fecha">Fecha de realización del formulario:</label>
                  <input type="date" name="fecha_realizacion" id="fecha_realizacion" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old("Nombre") }}" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
               </div>
               <div class="mb-2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="nombre">Nombre completo del estudiante:</label>
                  <input type="text" name="nombre_completo" id="nombre_completo" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
               </div>
               <div class="mb-2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="codigo">Código estudiantil:</label>
                  <input type="text" name="codigo_estudiantil" id="codigo_estudiantil"  class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
               </div>
               <div class="mb-2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="programa">Programa cursado:</label>
                  <select name="programa_cursado" id="programa_cursado" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                     <option value="">Selecciona una carrera</option>
                     <option value="admin_empresas">Administración de Empresas</option>
                     <option value="admin_empresas_turisticas">Administración de Empresas Turísticas y Hoteleras</option>
                     <option value="antropologia">Antropología</option>
                     <option value="biologia">Biología</option>
                     <option value="cine_audiovisuales">Cine y Audiovisuales</option>
                     <option value="contaduria_publica">Contaduría Pública</option>
                     <option value="Derecho">Derecho</option>
                     <option value="economia">Economía</option>
                     <option value="enfermeria">Enfermería</option>
                     <option value="ciencias_salud">Facultad de Ciencias de la Salud</option>
                     <option value="gestion_cultural">Gestión Cultural y de Industrias Creativas</option>
                     <option value="historia_patrimonio">Historia y Patrimonio</option>
                     <option value="ingenieria_agronomica">Ingeniería Agronómica</option>
                     <option value="ingenieria_ambiental_sanitaria">Ingeniería Ambiental y Sanitaria</option>
                     <option value="ingenieria_civil">Ingeniería Civil</option>
                     <option value="ingenieria_electronica">Ingeniería Electrónica</option>
                     <option value="ingenieria_industrial">Ingeniería Industrial</option>
                     <option value="ingenieria_marino_costera">Ingeniería Marino-Costera</option>
                     <option value="ingenieria_pesquera">Ingeniería Pesquera</option>
                     <option value="ingenieria_sistemas">Ingeniería de Sistemas</option>
                     <option value="licenciatura_artes">Licenciatura en Artes</option>
                     <option value="licenciatura_ciencias_naturales_ambiental">Licenciatura en Ciencias Naturales y Educación Ambiental</option>
                     <option value="licenciatura_educacion_campesina_rural">Licenciatura en Educación Campesina y Rural</option>
                     <option value="licenciatura_educacion_infantil">Licenciatura en Educación Infantil</option>
                     <option value="licenciatura_etnoeducacion">Licenciatura en Etnoeducación</option>
                     <option value="licenciatura_informatica">Licenciatura en Informática</option>
                     <option value="licenciatura_lenguas_extranjeras_ingles">Licenciatura en Lenguas Extranjeras con Énfasis en Inglés</option>
                     <option value="licenciatura_literatura_lengua_castellana">Licenciatura en Literatura y Lengua Castellana</option>
                     <option value="licenciatura_matematicas">Licenciatura en Matemáticas</option>
                     <option value="licenciatura_quimica">Licenciatura en Química</option>
                     <option value="licenciatura_tecnologia">Licenciatura en Tecnología</option>
                     <option value="medicina">Medicina</option>
                     <option value="negocios_internacionales">Negocios Internacionales</option>
                     <option value="odontologia">Odontología</option>
                     <option value="psicologia">Psicología</option>
                     <option value="tecnologia_gestion_hotelera_turistica">Tecnología en Gestión Hotelera y Turística</option>
                  </select>
               </div>
               <div class="mb-2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="telefono">Teléfono:</label>
                  <input type="text" name="telefono" id="telefono" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
               </div>
               <div class="mb-2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="correo">Correo institucional:</label>
                  <input type="text" name="correo_institucional" id="correo_institucional" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
               </div>
               <div class="mb-2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="ubicacion">Ubicación de residencia:</label>
                  <input type="text" name="ubicacion_residencia" id="ubicacion_residencia" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
               </div>
            </div>
         </div>
         <div id="tab2" class="tabcontent hidden">
            <!-- Contenido para el segundo tab, puedes replicar el mismo patrón para otros tabs -->
            <h2 class="text-2xl font-bold mb-4">Saber Pro</h2>
            <!-- Pregunta sobre la realización de las Saber Pro -->
            <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="realizoSaberPro">¿Realizó las Saber Pro?</label>
               <select id="realizoSaberPro" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                  <option placeholder="">Seleccionar</option>
                  <option value="si">Sí</option>
                  <option value="no">No</option>
               </select>
            </div>
            <!-- Casilla para poner la fecha de realización o proyección -->
            <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="fechaSaberPro">Fecha de realización o proyección</label>
               <input type="text" id="fechaSaberPro" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Mes y año">
            </div>
            <!-- Campo de texto para observaciones -->
            <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="observacionesSaberPro">Observaciones</label>
               <textarea id="observacionesSaberPro" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
            </div>
            <!-- Pregunta adicional si está en el programa de derecho -->
            <div class="mb-4" id="programaDerecho">
               <label class="block text-gray-700 text-sm font-bold mb-2">¿Realizó el examen de suficiencia?</label>
               <div class="flex items-center">
                  <input type="radio" id="suficienciaSi" name="suficiencia" class="mr-2" value="si">
                  <label for="suficienciaSi">Sí</label>
                  <input type="radio" id="suficienciaNo" name="suficiencia" class="ml-4 mr-2" value="no">
                  <label for="suficienciaNo">No</label>
               </div>
            </div>
            <!-- Campo de texto para observaciones adicionales -->
            <div class="mb-4" id="observacionesSuficiencia">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="observacionesSuficiencia">Observaciones sobre el examen de suficiencia</label>
               <textarea id="observacionesSuficiencia" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
            </div>
         </div>
         <div id="tab3" class="tabcontent hidden">
            <!-- Contenido para el tercer tab -->
            <h2 class="text-2xl font-bold mb-4">Inglés</h2>
            <label class="block text-gray-700 text-sm font-bold mb-1" for="ganado-ingles">¿Ganó el requisito de inglés?</label>
            <select class="pl-1 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"  id="ganado-ingles" name="ganado-ingles" onchange="mostrarOpciones()">
               <option >Elegir</option>
               <option value="si">Sí</option>
               <option value="no">No</option>
            </select>
            <div id="opciones-ingles" style="display:none;">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="como-ganado">¿Cómo lo ganó?</label>
               <select class="pl-1 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="como-ganado" name="como-ganado">
                  <option value="examen-ingles">Examen de inglés</option>
                  <option value="nivel-sena">Nivel del Sena</option>
                  <option value="curso-especial">Curso especial</option>
                  <option value="homologacion">Homologación</option>
                  <option value="exoneracion">Exoneración de la ecaes</option>
                  <option value="otros">Otros</option>
               </select>
            </div>
            <div id="observacion-ingles" style="display:none;">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="observacion">Observaciones</label>
               <textarea id="observacion" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" name="observacion" rows="4" cols="50"></textarea>
            </div>
         </div>
         <div id="tab4" class="tabcontent hidden">
            <div class="md:w-1/3 md:mr-4 mb-2">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="opcion_grado">Opción de Grado:</label>
               <select class=" pl-1 py-1 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md w-full md:w-auto" name="opcion_grado" id="opcion_grado">
                  <option value="practicas">Prácticas</option>
                  <option value="pasantia">Pasantía</option>
                  <option value="diplomado">Diplomado</option>
                  <option value="proyecto_grado">Proyecto de Grado</option>
                  <option value="exoneracion_saber_pro">Exoneración por resultado de las saber pro</option>
               </select>
            </div>
            <!-- Campos específicos para Practicas/Pasantía -->
            <div id="campos_practicas_pasantia" style="display: none;">
               <!-- Grupo 1 -->
               <div class="flex justify-center flex-col md:flex-row mb-4">
                  <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="realizacion_prepracticas">Realización de preprácticas (si o no):</label>
                     <select id="RealiDro" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option placeholder="">Seleccionar</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                     </select>
                  </div>
                  <div class="mb-8 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="empresa">Empresa:</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" name="empresa">
                  </div>
               </div>
               <div class="flex justify-center flex-col md:flex-row mb-4">
                  <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="ciudad">Ciudad:</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" name="ciudad">
                  </div>
                  <div class="mb-8 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="remuneracion">Remuneración (si o no):</label>
                     <select id="RemuDro" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option placeholder="">Seleccionar</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                     </select>
                  </div>
               </div>
               <div class="flex justify-center flex-col md:flex-row mb-4">
                  <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="fecha_inicio">Fecha inicio:</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" name="fecha_final">
                  </div>
                  <div class="w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="fecha_final">Fecha final:</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" name="remuneracion">
                  </div>
               </div>
            </div>
            <!-- Campos específicos para Diplomado/Proyecto de Grado -->
            <div id="campos_diplomado_proyecto" style="display: none;">
               <!-- Grupo 1 -->
               <div class="flex justify-center flex-col md:flex-row mb-4">
                  <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="Fecha_inicial2">Fecha inicial:</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full" type="date" name="realizacion_prepracticas">
                  </div>
                  <div class="mb-8 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="Fecha_final2">Fecha final:</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="date" name="empresa">
                  </div>
               </div>
               <div class="flex justify-center flex-col md:flex-row mb-4">
                  <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="tiempo">Tiempo de duración:</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" name="ciudad">
                  </div>
                  <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="nota">Nota:</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" name="fecha_inicio">
                  </div>
                  <div class="mb-4 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="aprobacionplataform">Aprobación en plataforma (si o no):</label>
                     <select id="aprobacionDro" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option placeholder="">Seleccionar</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                     </select>
                  </div>
               </div>
               <div class="flex justify-center flex-col md:flex-row mb-4">
                  <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="costo">Costo</label>
                     <input class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" name="fecha_final">
                  </div>
                  <div class="w-full md:w-1/2">
                     <label class="block text-gray-700 text-sm font-bold mb-1" for="sustentacion">Sustentación (si o no):</label>
                     <select id="SustenDro" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option placeholder="">Seleccionar</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                     </select>
                  </div>
               </div>
            </div>
            <div id="campos_exoneracion" style="display: none;">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="nota_saber_pro">Nota obtenida en Saber Pro:</label>
               <input type="text" name="nota_saber_pro" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="puesto_saber_pro">Puesto ocupado:</label>
               <input type="text" name="puesto_saber_pro" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
         </div>
         <div id="tab5" class="tabcontent hidden">
            <div class="mb-4">
               <label for="grado" class="block text-gray-700 text-sm font-bold mb-1">¿Ganó el requisito de grado?</label>
               <div class="mt-1">
                  <input type="radio" id="si" name="grado" class="mr-2" value="si">
                  <label for="si">Sí</label>
                  <input type="radio" id="no" name="grado" class="ml-4 mr-2" value="no">
                  <label for="no">No</label>
               </div>
            </div>
            <div class="mb-4" id="observacionesDiv" style="display:none;">
               <label for="observaciones" class="block text-gray-700 text-sm font-bold mb-1">Observaciones</label>
               <textarea id="observaciones" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="Añade observaciones..."></textarea>
            </div>
            <div class="mb-4">
               <label for="finalizacion" class="block text-gray-700 text-sm font-bold mb-1">Fecha de finalización académica</label>
               <input id="finalizacion" type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Ejemplo: 20241">
            </div>
            <div class="mb-4">
               <label for="fechaGrado" class="block text-gray-700 text-sm font-bold mb-1">Fecha prevista de grado</label>
               <input id="fechaGrado" type="date" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
               <label for="nivel" class="block text-gray-700 text-sm font-bold mb-1">Nivel del estudiante (1 al 5)</label>
               <input id="nivel" type="range" class="form-range mt-1 block w-full" min="1" max="5">
            </div>
            <div class="mb-4">
               <label for="observacionesGenerales" class="block text-gray-700 text-sm font-bold mb-1">Observaciones generales</label>
               <textarea id="observacionesGenerales" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="Añade observaciones..."></textarea>
            </div>
         </div>
         <div id="botonesEnvio" class="flex justify-center space-x-2">
            <input type="submit" class=" bg-unimagBlue hover:bg-green-500 text-white font-bold py-2 px-2 rounded-lg border-r border-white" value="Enviar datos"></input>
         </div>
      </div>
   </div>
<style>
   .tabcontent {
   display: none;
   }
   .active {
   background-color: #ddd;
   }
   #botonesEnvio {
   display: none;
   }
   body.modal-open {
   overflow: hidden; /* Oculta la barra de desplazamiento cuando el modal está abierto */
   }
   .modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgba(0,0,0,0.4);
   }
   .modal-content {
   background-color: #fefefe;
   margin: 15% auto;
   padding: 20px;
   border: 1px solid #888;
   width: 40%;
   }
   .close {
   color: #aaa;
   float: right;
   font-size: 28px;
   font-weight: bold;
   }
   .close:hover,
   .close:focus {
   color: black;
   text-decoration: none;
   cursor: pointer;
   }
   /* Estilos del botón de abrir ventana emergente */
   #openModalBtn {
   padding: 10px;
   cursor: pointer;
   }
   /* Estilos de responsividad */
   @media screen and (max-width: 600px) {
   .modal-content {
   width: 90%;
   }
   }
</style>
   <script>
      // Script para mostrar/ocultar el campo de observaciones según la respuesta a la primera pregunta
      const radios = document.querySelectorAll('input[name="grado"]');
      const observacionesDiv = document.getElementById('observacionesDiv');

      radios.forEach(radio => {
        radio.addEventListener('change', () => {
          if (radio.value === 'si' || 'no' ) {
            observacionesDiv.style.display = 'block';
          } else {
            observacionesDiv.style.display = 'none';
          }
        });
      });
   </script>
   <script>
      // JavaScript para mostrar/ocultar campos según la opción seleccionada
      var opcionGradoSelect = document.getElementById('opcion_grado');
      var camposPracticasPasantia = document.getElementById('campos_practicas_pasantia');
      var camposDiplomadoProyecto = document.getElementById('campos_diplomado_proyecto');
      var camposExoneracion = document.getElementById('campos_exoneracion');

      opcionGradoSelect.addEventListener('change', function() {
          if (this.value === 'practicas' || this.value === 'pasantia') {
              camposPracticasPasantia.style.display = 'block';
              camposDiplomadoProyecto.style.display = 'none';
              camposExoneracion.style.display = 'none';
          } else if (this.value === 'diplomado' || this.value === 'proyecto_grado') {
              camposPracticasPasantia.style.display = 'none';
              camposDiplomadoProyecto.style.display = 'block';
              camposExoneracion.style.display = 'none';
          } else if (this.value === 'exoneracion_saber_pro') {
              camposPracticasPasantia.style.display = 'none';
              camposDiplomadoProyecto.style.display = 'none';
              camposExoneracion.style.display = 'block';
          } else {
              camposPracticasPasantia.style.display = 'none';
              camposDiplomadoProyecto.style.display = 'none';
              camposExoneracion.style.display = 'none';
          }
      });
   </script>
   <script>//Tab 3
      function mostrarOpciones() {
        var seleccion = document.getElementById("ganado-ingles").value;
        var opcionesIngles = document.getElementById("opciones-ingles");
        var observacionIngles = document.getElementById("observacion-ingles");

        if (seleccion === "si") {
          opcionesIngles.style.display = "block";
          observacionIngles.style.display = "none";
        } else {
          opcionesIngles.style.display = "none";
          observacionIngles.style.display = "block";
        }
      }
   </script>
   <script>//Tab 2
      document.getElementById('realizoSaberPro').addEventListener('change', function () {
        var fechaSaberPro = document.getElementById('fechaSaberPro');
        if (this.value === 'si') {
          fechaSaberPro.placeholder = 'Fecha de realización (mes y año)';
        } else if(this.value === 'no') {
            fechaSaberPro.placeholder = 'Fecha proyectada (mes y año)';
        } else{
            fechaSaberPro.placeholder = 'Mes y año';
        }
      });
   </script>
   <script>//Tab 2
      // Manejar la visibilidad de los elementos según el condicional si estudia derecho o otro
        document.getElementById('programa_cursado').addEventListener('change', function () {
          if (this.value === 'Derecho') {
              programaDerecho.style.display = 'block';
          } else {
              programaDerecho.style.display = 'none';
          }
        });

        // Manejar la visibilidad condicional de los elementos para el programa de derecho
        document.getElementById('observacionesSuficiencia').style.display = 'none'
        document.getElementById('programaDerecho').style.display = 'none'; // Ocultar inicialmente
        document.querySelectorAll('input[name="suficiencia"]').forEach(function (radio) {
          radio.addEventListener('change', function () {
            var observacionesSuficiencia = document.getElementById('observacionesSuficiencia');
            observacionesSuficiencia.style.display = (this.value === 'si') ? 'block' : 'none';
          });
        });
   </script>
   <script>//Movimiento tabs
      function openTab(evt, tabName) {
           var i, tabcontent, tablinks;

           // Oculta todos los contenidos de las pestañas
           tabcontent = document.getElementsByClassName("tabcontent");
           for (i = 0; i < tabcontent.length; i++) {
               tabcontent[i].style.display = "none";

           }

           // Desactiva todos los botones de las pestañas
           tablinks = document.getElementsByClassName("tablinks");
           for (i = 0; i < tablinks.length; i++) {
               tablinks[i].classList.remove("active");
           }

           // Muestra el contenido de la pestaña seleccionada y activa el botón de la pestaña
           document.getElementById(tabName).style.display = "block";
           evt.currentTarget.classList.add("active");

           // Muestra u oculta los botones de "Enviar" y "Editar" según la pestaña seleccionada
           var botonesEnvio = document.getElementById("botonesEnvio");
           botonesEnvio.style.display = (tabName === "tab1" || tabName === "tab2" || tabName === "tab3" || tabName === "tab4" || tabName === "tab5") ? "flex" : "none";
      }
   </script>
   <script>// Script para el modal ("Ventana de navegacion")
      document.getElementById('openModalBtn').onclick = function () {
        document.getElementById('myModal').style.display = 'block';
        document.body.classList.add('modal-open'); // Agrega la clase para ocultar la barra de desplazamiento
      };

      document.getElementById('closeModal').onclick = function () {
        document.getElementById('myModal').style.display = 'none';
        document.body.classList.remove('modal-open'); // Elimina la clase para mostrar la barra de desplazamiento
      };

      window.onclick = function (event) {
        if (event.target == document.getElementById('myModal')) {
          document.getElementById('myModal').style.display = 'none';
          document.body.style.overflow = 'auto'; // Asegúrate de ocultar la barra de desplazamiento al cerrar el modal
        }
        else document.body.style.overflow = 'hidden'
      };
      var currentDate = new Date().toLocaleDateString();
        document.getElementById('fecha').innerText = currentDate;
        document.getElementById('nombre').innerText = 'Nombre del Estudiante';
        document.getElementById('codigo').innerText = 'Código Estudiantil';
        document.getElementById('programa').innerText = 'Programa Cursado';
        document.getElementById('telefono').innerText = 'Número de Teléfono';
        document.getElementById('correo').innerText = 'correo@institucional.com';
        document.getElementById('ubicacion').innerText = 'Ubicación de Residencia';
   </script>

