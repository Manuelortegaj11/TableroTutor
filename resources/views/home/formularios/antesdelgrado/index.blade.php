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
               <input type="date" name="fecha_realizacion" value="{{ isset($formulario->fecha_realizacion)?$formulario->fecha_realizacion:old("fecha_realizacion") }}" id="fecha_realizacion" {{ isset($readonly) && $readonly ? 'readonly' : '' }} class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-2">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="nombre">Nombre completo del estudiante:</label>
               <input type="text" name="nombre_completo" value="{{ isset($formulario->nombre_completo)?$formulario->nombre_completo:old("nombre_completo") }}" id="nombre_completo" {{ isset($readonly) && $readonly ? 'readonly' : '' }} class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-2">
               <label class="block text-gray-700 text-sm font-bo{{ isset($formulario->programa_cursado)?$formulario->programa_cursado:old("programa_cursado") }}ld mb-1" for="codigo">Código estudiantil:</label>
               <input type="text" name="codigo_estudiantil" value="{{ isset($formulario->codigo_estudiantil)?$formulario->codigo_estudiantil:old("codigo_estudiantil") }}"  id="codigo_estudiantil" {{ isset($readonly) && $readonly ? 'readonly' : '' }}  class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-2">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="programa">Programa cursado:</label>
               <select
               name="programa_cursado"
               id="programa_cursado"
               {{ isset($readonly) && $readonly ? 'disabled' : '' }}
               class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
               >
               <option value="">Selecciona una carrera</option>
               @foreach ([
               'admin_empresas' => 'Administración de Empresas',
               'admin_empresas_turisticas' => 'Administración de Empresas Turísticas y Hoteleras',
               'antropologia' => 'Antropología',
               'biologia' => 'Biología',
               'cine_audiovisuales' => 'Cine y Audiovisuales',
               'contaduria_publica' => 'Contaduría Pública',
               'Derecho' => 'Derecho',
               'economia' => 'Economía',
               'enfermeria' => 'Enfermería',
               'ciencias_salud' => 'Facultad de Ciencias de la Salud',
               'gestion_cultural' => 'Gestión Cultural y de Industrias Creativas',
               'historia_patrimonio' => 'Historia y Patrimonio',
               'ingenieria_agronomica' => 'Ingeniería Agronómica',
               'ingenieria_ambiental_sanitaria' => 'Ingeniería Ambiental y Sanitaria',
               'ingenieria_civil' => 'Ingeniería Civil',
               'ingenieria_electronica' => 'Ingeniería Electrónica',
               'ingenieria_industrial' => 'Ingeniería Industrial',
               'ingenieria_marino_costera' => 'Ingeniería Marino-Costera',
               'ingenieria_pesquera' => 'Ingeniería Pesquera',
               'ingenieria_sistemas' => 'Ingeniería de Sistemas',
               'licenciatura_artes' => 'Licenciatura en Artes',
               'licenciatura_ciencias_naturales_ambiental' => 'Licenciatura en Ciencias Naturales y Educación Ambiental',
               'licenciatura_educacion_campesina_rural' => 'Licenciatura en Educación Campesina y Rural',
               'licenciatura_educacion_infantil' => 'Licenciatura en Educación Infantil',
               'licenciatura_etnoeducacion' => 'Licenciatura en Etnoeducación',
               'licenciatura_informatica' => 'Licenciatura en Informática',
               'licenciatura_lenguas_extranjeras_ingles' => 'Licenciatura en Lenguas Extranjeras con Énfasis en Inglés',
               'licenciatura_literatura_lengua_castellana' => 'Licenciatura en Literatura y Lengua Castellana',
               'licenciatura_matematicas' => 'Licenciatura en Matemáticas',
               'licenciatura_quimica' => 'Licenciatura en Química',
               'licenciatura_tecnologia' => 'Licenciatura en Tecnología',
               'medicina' => 'Medicina',
               'negocios_internacionales' => 'Negocios Internacionales',
               'odontologia' => 'Odontología',
               'psicologia' => 'Psicología',
               'tecnologia_gestion_hotelera_turistica' => 'Tecnología en Gestión Hotelera y Turística',
               ] as $value => $label)
               <option value="{{ $value }}" {{ (isset($formulario->programa_cursado) && $formulario->programa_cursado == $value) ? 'selected' : '' }}>
               {{ $label }}
               </option>
               @endforeach
               </select>
            </div>
            <div class="mb-2">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="telefono">Teléfono:</label>
               <input type="text" name="telefono" value="{{ isset($formulario->telefono) ? $formulario->telefono : old('telefono') }}" id="telefono"  {{ isset($readonly) && $readonly ? 'readonly' : '' }} class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-2">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="correo">Correo institucional:</label>
               <input type="text" name="correo_institucional" value="{{ isset($formulario->correo_institucional)?$formulario->correo_institucional:old("correo_institucional") }}" id="correo_institucional" {{ isset($readonly) && $readonly ? 'readonly' : '' }} class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-2">
               <label class="block text-gray-700 text-sm font-bold mb-1" for="ubicacion">Ubicación de residencia:</label>
               <input type="text" name="ubicacion_residencia" value="{{ isset($formulario->ubicacion_residencia)?$formulario->ubicacion_residencia:old("ubicacion_residencia") }}" id="ubicacion_residencia" {{ isset($readonly) && $readonly ? 'readonly' : '' }} class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
         </div>
      </div>
      <div id="tab2" class="tabcontent hidden">
         <!-- Contenido para el segundo tab, puedes replicar el mismo patrón para otros tabs -->
         <h2 class="text-2xl font-bold mb-4">Saber Pro</h2>
         <!-- Pregunta sobre la realización de las Saber Pro -->
         <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="realizoSaberPro">¿Realizó las Saber Pro?</label>
            <select
            type="text"
            name="realizo_saber_pro"
            id="realizo_saber_pro"
            {{ isset($readonly) && $readonly ? 'disabled' : '' }}
            class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
            >
            <option value="NULL" {{ (isset($formulario->realizo_saber_pro) && $formulario->realizo_saber_pro == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->realizo_saber_pro) && $formulario->realizo_saber_pro == 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->realizo_saber_pro) && $formulario->realizo_saber_pro == 'no') ? 'selected' : '' }}>No</option>
            </select>
         </div>
         <!-- Casilla para poner la fecha de realización o proyección -->
         <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="fechaSaberPro">Fecha de realización o proyección</label>
            <input type="text" name="fecha_realizo_saber_pro" value="{{ isset($formulario->fecha_realizo_saber_pro)?$formulario->fecha_realizo_saber_pro:old("fecha_realizo_saber_pro") }}" id="fecha_realizo_saber_pro"  {{ isset($readonly) && $readonly ? 'readonly' : '' }} class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Mes y año">
         </div>
         <!-- Campo de texto para observaciones -->
<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="observacionesSaberPro">Observaciones</label>
    <textarea
        name="observaciones_saber_pro"
        id="observaciones_saber_pro"
        {{ isset($readonly) && $readonly ? 'readonly' : '' }}
        class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
        rows="4"
    >{{ isset($formulario->observaciones_saber_pro) ? $formulario->observaciones_saber_pro : old("observaciones_saber_pro") }}</textarea>
</div>
         <!-- Pregunta adicional si está en el programa de derecho -->
         <div class="mb-4" id="realizo_examen_suficiencia">
            <label class="block text-gray-700 text-sm font-bold mb-2">¿Realizó el examen de suficiencia?</label>
            <div class="flex items-center">
               <input type="radio" id="suficienciaSi" name="realizo_examen_suficiencia" class="mr-2" value="si" {{ (isset($formulario->realizo_examen_suficiencia) && $formulario->realizo_examen_suficiencia == 'si') ? 'checked' : '' }} {{ isset($readonly) && $readonly ? 'disabled' : '' }} >
               <label for="suficienciaSi">Sí</label>
               <input type="radio" id="suficienciaNo" name="realizo_examen_suficiencia" class="ml-4 mr-2" value="no" {{ (isset($formulario->realizo_examen_suficiencia) && $formulario->realizo_examen_suficiencia == 'no') ? 'checked' : '' }} {{ isset($readonly) && $readonly ? 'disabled' : '' }}>
               <label for="suficienciaNo">No</label>
            </div>
         </div>
         <!-- Campo de texto para observaciones adicionales -->


<div class="mb-4" id="observaciones_examen_suficiencia">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="observacionesSuficiencia">Observaciones sobre el examen de suficiencia</label>
    <textarea
        name="observaciones_examen_suficiencia"
        id="observacionesSuficiencia"
        {{ isset($readonly) && $readonly ? 'readonly' : '' }}
        class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:shadow-outline"
        rows="4"
    >{{ isset($formulario->observaciones_examen_suficiencia) ? $formulario->observaciones_examen_suficiencia : old("observaciones_examen_suficiencia") }}</textarea>
</div>
      </div>

      <div id="tab3" class="tabcontent hidden">
         <!-- Contenido para el tercer tab -->
         <h2 class="text-2xl font-bold mb-4">Inglés</h2>
         <label class="block text-gray-700 text-sm font-bold mb-1" for="ganado-ingles">¿Ganó el requisito de inglés?</label>
         <select id="ganador_requisito_ingles" {{ isset($readonly) && $readonly ? 'disabled' : '' }} name="ganador_requisito_ingles" class="pl-1 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"  onchange="mostrarOpciones()">
            <option value="NULL" {{ (isset($formulario->ganador_requisito_ingles) && $formulario->ganador_requisito_ingles == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->ganador_requisito_ingles) && $formulario->ganador_requisito_ingles == 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->ganador_requisito_ingles) && $formulario->ganador_requisito_ingles == 'no') ? 'selected' : '' }}>No</option>
         </select>
         <div id="como_gano_requisito_ingles" style="display:none;">
            <label class="block text-gray-700 text-sm font-bold mb-1" for="como-ganado">¿Cómo lo ganó?</label>
            <select id="como_gano_requisito_ingles" {{ isset($readonly) && $readonly ? 'disabled' : '' }} name="como_gano_requisito_ingles" class="pl-1 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" >
               <option value="NULL"{{ (isset($formulario->como_gano_requisito_ingles) && $formulario->como_gano_requisito_ingles == 'NULL') ? 'selected' : '' }} >Seleccionar</option>
               <option value="examen-ingles "{{ (isset($formulario->como_gano_requisito_ingles) && $formulario->como_gano_requisito_ingles == 'examen-ingles') ? 'selected' : '' }}>Examen de inglés</option>
               <option value="nivel-sena"{{ (isset($formulario->como_gano_requisito_ingles) && $formulario->como_gano_requisito_ingles == 'nivel-sena') ? 'selected' : '' }}>Nivel del Sena</option>
               <option value="curso-especial"{{ (isset($formulario->como_gano_requisito_ingles) && $formulario->como_gano_requisito_ingles == 'curso-especial') ? 'selected' : '' }}>Curso especial</option>
               <option value="homologacion"{{ (isset($formulario->como_gano_requisito_ingles) && $formulario->como_gano_requisito_ingles == 'homologacion') ? 'selected' : '' }}>Homologación</option>
               <option value="exoneracion"{{ (isset($formulario->como_gano_requisito_ingles) && $formulario->como_gano_requisito_ingles == 'exoneracion') ? 'selected' : '' }}>Exoneración de la ecaes</option>
               <option value="otros"{{ (isset($formulario->como_gano_requisito_ingles) && $formulario->como_gano_requisito_ingles == 'otros') ? 'selected' : '' }}>Otros</option>
            </select>
         </div>
         <div id="observaciones_gano_requisito_ingles" style="display:none;">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="observacion">Observaciones</label>
            <textarea id="observaciones_gano_requisito_ingles" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="observaciones_gano_requisito_ingles" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="4" cols="50">{{ isset($formulario->observaciones_gano_requisito_ingles) ? $formulario->observaciones_gano_requisito_ingles : old("observaciones_gano_requisito_ingles") }}</textarea>
         </div>
      </div>
      <div id="tab4" class="tabcontent hidden">

         <h2 class="text-2xl font-bold mb-4">Opción de Grado</h2>
         <div class="md:w-1/3 md:mr-4 mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-1" for="opcion_grado">Modalidad:</label>
            <select id="opcion_grado" {{ isset($readonly) && $readonly ? 'disabled' : '' }} name="opcion_grado" class=" pl-1 py-1 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md w-full md:w-auto"  >
               <option value="NULL"{{ (isset($formulario->opcion_grado) && $formulario->opcion_grado == 'NULL') ? 'selected' : 'NULL' }}>Seleccionar</option>
               <option value="practicas"{{ (isset($formulario->opcion_grado) && $formulario->opcion_grado == 'practicas') ? 'selected' : '' }}>Prácticas</option>
               <option value="pasantia"{{ (isset($formulario->opcion_grado) && $formulario->opcion_grado == 'pasantia') ? 'selected' : '' }}>Pasantía</option>
               <option value="diplomado"{{ (isset($formulario->opcion_grado) && $formulario->opcion_grado == 'diplomado') ? 'selected' : '' }}>Diplomado</option>
               <option value="proyecto_grado"{{ (isset($formulario->opcion_grado) && $formulario->opcion_grado == 'proyecto_grado') ? 'selected' : '' }}>Proyecto de Grado</option>
               <option value="exoneracion_saber_pro"{{ (isset($formulario->opcion_grado) && $formulario->opcion_grado == 'exoneracion_saber_pro') ? 'selected' : '' }}>Exoneración por resultado de las saber pro</option>
            </select>
         </div>
         <!-- Campos específicos para Practicas/Pasantía -->
         <div id="campos_practicas_pasantia" style="display: none;">
            <!-- Grupo 1 -->
            <div class="flex justify-center flex-col md:flex-row mb-4">
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="realizacion_prepracticas">Realización de preprácticas(si o no):</label>
                  <select id="realizacion_prepracticas"{{ isset($readonly) && $readonly ? 'disabled' : '' }} name="realizacion_prepracticas" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="NULL" {{ (isset($formulario->realizacion_prepracticas) && $formulario->realizacion_prepracticas == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->realizacion_prepracticas) && $formulario->realizacion_prepracticas == 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->realizacion_prepracticas) && $formulario->realizacion_prepracticas == 'no') ? 'selected' : '' }}>No</option>
                  </select>
               </div>
               <div class="mb-8 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="empresa">Empresa:</label>
                  <input id="empresa_pracpas"value="{{ isset($formulario->empresa_pracpas)?$formulario->empresa_pracpas:old("empresa_pracpas") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="empresa_pracpas" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text">
               </div>
            </div>
            <div class="flex justify-center flex-col md:flex-row mb-4">
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="ciudad">Ciudad:</label>
                  <input id="ciudad_pracpas"value="{{ isset($formulario->ciudad_pracpas)?$formulario->ciudad_pracpas:old("ciudad_pracpas") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="ciudad_pracpas" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text">
               </div>
               <div class="mb-8 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="remuneracion">Remuneración(si o no):</label>
                  <select id="remuneracion_pracpas"{{ isset($readonly) && $readonly ? 'disabled' : '' }} name="remuneracion_pracpas" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="NULL" {{ (isset($formulario->remuneracion_pracpas) && $formulario->remuneracion_pracpas == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->remuneracion_pracpas) && $formulario->remuneracion_pracpas == 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->remuneracion_pracpas) && $formulario->remuneracion_pracpas == 'no') ? 'selected' : '' }}>No</option>
                  </select>
               </div>
            </div>
            <div class="flex justify-center flex-col md:flex-row mb-4">
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="fecha_inicio">Fecha inicio:</label>
                  <input id="fecha_inicio_pracpas" value="{{ isset($formulario->fecha_inicio_pracpas)?$formulario->fecha_inicio_pracpas:old("fecha_inicio_pracpas") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }}name="fecha_inicio_pracpas" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="date">
               </div>
               <div class="w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="fecha_final">Fecha final:</label>
                  <input id="fecha_final_pracpas"value="{{ isset($formulario->fecha_final_pracpas)?$formulario->fecha_final_pracpas:old("fecha_final_pracpas") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="fecha_final_pracpas" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="date">
               </div>
            </div>
            <div class="flex justify-center flex-col md:flex-row mb-4">
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="">Remuneración:</label>
                  <input id="cantidad_remuneracion_pracpas"value="{{ isset($formulario->cantidad_remuneracion_pracpas)?$formulario->cantidad_remuneracion_pracpas:old("cantidad_remuneracion_pracpas") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="cantidad_remuneracion_pracpas" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text">
               </div>
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="">Meses:</label>
                  <input id="tiempo_pracpas" name="tiempo_pracpas"value="{{ isset($formulario->tiempo_pracpas)?$formulario->tiempo_pracpas:old("tiempo_pracpas") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" >
               </div>
               <div class="mb-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="">Legalización(si o no):</label>
                  <select id="legalizacion_pracpas"{{ isset($readonly) && $readonly ? 'disabled' : '' }} name="legalizacion_pracpas" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="NULL" {{ (isset($formulario->legalizacion_pracpas) && $formulario->legalizacion_pracpas == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->legalizacion_pracpas) && $formulario->legalizacion_pracpas == 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->legalizacion_pracpas) && $formulario->legalizacion_pracpas == 'no') ? 'selected' : '' }}>No</option>
                  </select>
               </div>
            </div>
            <div class="flex justify-center flex-col md:flex-row mb-4">
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="">Fecha legalización:</label>
                  <input id="fecha_legalizacion_pracpas"value="{{ isset($formulario->fecha_legalizacion_pracpas)?$formulario->fecha_legalizacion_pracpas:old("fecha_legalizacion_pracpas") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="fecha_legalizacion_pracpas" type="date" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="date" >
               </div>
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="">Sustentación(si o no):</label>
                  <select id="sustento_pracpas"{{ isset($readonly) && $readonly ? 'disabled' : '' }} name="sustento_pracpas" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="NULL" {{ (isset($formulario->sustento_pracpas) && $formulario->sustento_pracpas == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->sustento_pracpas) && $formulario->sustento_pracpas == 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->sustento_pracpas) && $formulario->sustento_pracpas == 'no') ? 'selected' : '' }}>No</option>
                  </select>
               </div>
               <div class="mb-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="">Aprobación plataforma(si o no):</label>
                  <select id="aprobacion_plataforma_pracpas"{{ isset($readonly) && $readonly ? 'disabled' : '' }} name="aprobacion_plataforma_pracpas" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="NULL" {{ (isset($formulario->aprobacion_plataforma_pracpas) && $formulario->aprobacion_plataforma_pracpas == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->aprobacion_plataforma_pracpas) && $formulario->aprobacion_plataforma_pracpas == 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->aprobacion_plataforma_pracpas) && $formulario->aprobacion_plataforma_pracpas == 'no') ? 'selected' : '' }}>No</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- Campos específicos para Diplomado/Proyecto de Grado -->
         <div id="campos_diplomado_proyecto" style="display: none;">
            <!-- Grupo 1 -->
            <div class="flex justify-center flex-col md:flex-row mb-4">
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="">Fecha inicial:</label>
                  <input id="fecha_inicial_diplomado_proyecto"value="{{ isset($formulario->fecha_inicial_diplomado_proyecto)?$formulario->fecha_inicial_diplomado_proyecto:old("fecha_inicial_diplomado_proyecto") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="fecha_inicial_diplomado_proyecto" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full" type="date" >
               </div>
               <div class="mb-8 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="">Fecha final:</label>
                  <input id="fecha_final_diplomado_proyecto"value="{{ isset($formulario->fecha_final_diplomado_proyecto)?$formulario->fecha_final_diplomado_proyecto:old("fecha_final_diplomado_proyecto") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="fecha_final_diplomado_proyecto" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="date">
               </div>
            </div>
            <div class="flex justify-center flex-col md:flex-row mb-4">
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="tiempo">Tiempo de duración:</label>
                  <input id="tiempo_diplomado_proyecto" name="tiempo_diplomado_proyecto"value="{{ isset($formulario->tiempo_diplomado_proyecto)?$formulario->tiempo_diplomado_proyecto:old("tiempo_diplomado_proyecto") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" >
               </div>
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="nota">Nota:</label>
                  <input id="nota_diplomado_proyecto"value="{{ isset($formulario->nota_diplomado_proyecto)?$formulario->nota_diplomado_proyecto:old("nota_diplomado_proyecto") }}" {{ isset($readonly) && $readonly ? 'readonly' : '' }} name="nota_diplomado_proyecto" class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text">
               </div>
               <div class="mb-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="aprobacionplataform">Aprobación plataforma(si o no):</label>
                  <select id="aprobacion_plataforma_diplomado_proyecto"{{ isset($readonly) && $readonly ? 'disabled' : '' }} name="aprobacion_plataforma_diplomado_proyecto"   class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="NULL" {{ (isset($formulario->aprobacion_plataforma_diplomado_proyecto) && $formulario->aprobacion_plataforma_diplomado_proyecto == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->aprobacion_plataforma_diplomado_proyecto) && $formulario->aprobacion_plataforma_diplomado_proyecto == 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->aprobacion_plataforma_diplomado_proyecto) && $formulario->aprobacion_plataforma_diplomado_proyecto == 'no') ? 'selected' : '' }}>No</option>
                  </select>
               </div>
            </div>
            <div class="flex justify-center flex-col md:flex-row mb-4">
               <div class="mb-4 md:mr-4 md:mb-0 w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="costo">Costo</label>
                  <input id="costo_diplomado_proyecto"value="{{ isset($formulario->costo_diplomado_proyecto)?$formulario->costo_diplomado_proyecto:old("costo_diplomado_proyecto") }}"{{ isset($readonly) && $readonly ? 'disabled' : '' }} name="costo_diplomado_proyecto"  class="mt-1 appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline w-full"  type="text" >
               </div>
               <div class="w-full md:w-1/2">
                  <label class="block text-gray-700 text-sm font-bold mb-1" for="sustentacion">Sustentación(si o no):</label>
                  <select id="sustentacion_diplomado_proyecto" name="sustentacion_diplomado_proyecto" class="mt-2 appearance-none border px-3 leading-tight  focus:shadow-outline block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="NULL" {{ (isset($formulario->sustentacion_diplomado_proyecto) && $formulario->sustentacion_diplomado_proyecto == 'NULL') ? 'selected' : '' }}>Seleccionar</option>
            <option value="si" {{ (isset($formulario->sustentacion_diplomado_proyecto) &&  $formulario->sustentacion_diplomado_proyecto== 'si') ? 'selected' : '' }}>Sí</option>
            <option value="no" {{ (isset($formulario->sustentacion_diplomado_proyecto) && $formulario->sustentacion_diplomado_proyecto == 'no') ? 'selected' : '' }}>No</option>
                  </select>
               </div>
            </div>
         </div>
         <div id="campos_exoneracion" style="display: none;">
            <label class="block text-gray-700 text-sm font-bold mb-1" for="nota_saber_pro">Nota obtenida en Saber Pro:</label>
            <input id="puntaje_saber_pro"value="{{ isset($formulario->puntaje_saber_pro)?$formulario->puntaje_saber_pro:old("puntaje_saber_pro") }}"{{ isset($readonly) && $readonly ? 'disabled' : '' }} type="text" name="puntaje_saber_pro" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            <label class="block text-gray-700 text-sm font-bold mb-1" for="puesto_saber_pro">Puesto ocupado:</label>
            <input id="puesto_saber_pro"value="{{ isset($formulario->puesto_saber_pro)?$formulario->puesto_saber_pro:old("puesto_saber_pro") }}"{{ isset($readonly) && $readonly ? 'disabled' : '' }} type="text" name="puesto_saber_pro" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
         </div>
      </div>
      <div id="tab5" class="tabcontent hidden">
         <h2 class="text-2xl font-bold mb-4">General</h2>
         <div class="mb-4">
            <label for="grado" class="block text-gray-700 text-sm font-bold mb-1">¿Ganó el requisito de grado?</label>
            <div class="mt-1">
               <input type="radio" id="si" name="requisito_grado" class="mr-2" value="si"{{ (isset($formulario->requisito_grado) && $formulario->requisito_grado == 'si') ? 'checked' : '' }} {{ isset($readonly) && $readonly ? 'disabled' : '' }}>
               <label for="si">Sí</label>
               <input type="radio" id="no" name="requisito_grado" class="ml-4 mr-2" value="no"{{ (isset($formulario->requisito_grado) && $formulario->requisito_grado == 'no') ? 'checked' : '' }} {{ isset($readonly) && $readonly ? 'disabled' : '' }}>
               <label for="no">No</label>
            </div>
         </div>
         <div class="mb-4" id="observacionesDiv" style="display:block;">
            <label for="observaciones" class="block text-gray-700 text-sm font-bold mb-1">Observaciones</label>
            <textarea id="observaciones_requisito_grado"{{ isset($readonly) && $readonly ? 'readonly' : '' }} name="observaciones_requisito_grado" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="Añade observaciones...">{{ isset($formulario->observaciones_requisito_grado) ? $formulario->observaciones_requisito_grado : old("observaciones_requisito_grado") }}</textarea>
         </div>
         <div class="mb-4">
            <label for="finalizacion" class="block text-gray-700 text-sm font-bold mb-1">Fecha de finalización académica</label>
            <input id="periodo_finalizacion_academica"value="{{ isset($formulario->periodo_finalizacion_academica)?$formulario->periodo_finalizacion_academica:old("periodo_finalizacion_academica") }}"{{ isset($readonly) && $readonly ? 'readonly' : '' }} name="periodo_finalizacion_academica" type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Ejemplo: 20241">
         </div>
         <div class="mb-4">
            <label for="fechaGrado" class="block text-gray-700 text-sm font-bold mb-1">Fecha prevista de grado</label>
            <input id="fecha_prevista_grado"value="{{ isset($formulario->fecha_prevista_grado)?$formulario->fecha_prevista_grado:old("fecha_prevista_grado") }}"{{ isset($readonly) && $readonly ? 'readonly' : '' }} name="fecha_prevista_grado" type="date" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
         </div>
         <div class="mb-4">
            <label for="nivel" class="block text-gray-700 text-sm font-bold mb-1">Nivel del estudiante (1 al 5)</label>
            <input id="nivel_estudiante" value="{{ isset($formulario->nivel_estudiante)?$formulario->nivel_estudiante:old("nivel_estudiante") }}"{{ isset($readonly) && $readonly ? 'disabled' : '' }} name="nivel_estudiante" type="range" class="form-range mt-1 block w-full" min="1" max="5">
         </div>
         <div class="mb-4">
            <label for="observacionesGenerales" class="block text-gray-700 text-sm font-bold mb-1">Observaciones generales</label>
            <textarea id="observaciones_generales"{{ isset($readonly) && $readonly ? 'readonly' : '' }} name="observaciones_generales" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="Añade observaciones...">{{ isset($formulario->observaciones_generales) ? $formulario->observaciones_generales : old("observaciones_generales") }}</textarea>
         </div>
      </div>
      <div id="botonesEnvio" class="flex justify-center space-x-2">
         <input type="submit" class=" bg-unimagBlue hover:bg-green-500 text-white font-bold py-2 px-2 rounded-lg border-r border-white" value="{{$modo}}"></input>
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
   const radios = document.querySelectorAll('input[name="requisito_grado"]');
   const observacionesDiv = document.getElementById('observacionesDiv');

   radios.forEach(radio => {
     radio.addEventListener('change', () => {
       if (radio.value === 'si' || 'no' ) {
         observacionesDiv.style.display = 'block';
       } else {
         observacionesDiv.style.display = 'block';
       }
     });
   });
</script>
@section('script2')
@if(isset($formulario->opcion_grado))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var opcionGradoSelect = document.getElementById('opcion_grado');
                var camposPracticasPasantia = document.getElementById('campos_practicas_pasantia');
                var camposDiplomadoProyecto = document.getElementById('campos_diplomado_proyecto');
                var camposExoneracion = document.getElementById('campos_exoneracion');

                function mostrarCamposSegunOpcion() {
                    var opcionSeleccionada = opcionGradoSelect.value;

                    camposPracticasPasantia.style.display = (opcionSeleccionada === 'practicas' || opcionSeleccionada === 'pasantia') ? 'block' : 'none';
                    camposDiplomadoProyecto.style.display = (opcionSeleccionada === 'diplomado' || opcionSeleccionada === 'proyecto_grado') ? 'block' : 'none';
                    camposExoneracion.style.display = (opcionSeleccionada === 'exoneracion_saber_pro') ? 'block' : 'none';
                }

                opcionGradoSelect.addEventListener('change', mostrarCamposSegunOpcion);

                // Disparar manualmente el evento change al cargar la página
                var event = new Event('change');
                opcionGradoSelect.dispatchEvent(event);
            });
        </script>
@endif
@show

        <script>
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

@section('script')

    @if(isset($formulario->ganador_requisito_ingles))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Establecer el valor inicial
                var ganadorRequisitoInglesValue = "{{ $formulario->ganador_requisito_ingles }}";
                document.getElementById('ganador_requisito_ingles').value = ganadorRequisitoInglesValue;

                // Disparar manualmente el evento change
                var event = new Event('change');
                document.getElementById('ganador_requisito_ingles').dispatchEvent(event);

                // Agregar el event listener
                document.getElementById('ganador_requisito_ingles').addEventListener('change', mostrarOpciones);
            });
        </script>
    @endif
@show

<script>//Tab 3
   function mostrarOpciones() {
     var seleccion = document.getElementById("ganador_requisito_ingles").value;
     var opcionesIngles = document.getElementById("como_gano_requisito_ingles");
     var observacionIngles = document.getElementById("observaciones_gano_requisito_ingles");

     if (seleccion === "si") {
       opcionesIngles.style.display = "block";
       observacionIngles.style.display = "none";
     }
     else if(seleccion ==="no") {
       opcionesIngles.style.display = "none";
       observacionIngles.style.display = "block";
     }else{
         opcionesIngles.style.display = "none";
         observacionIngles.style.display = "none";
     }
   }
</script>
<script>//Tab 2
   document.getElementById('realizo_saber_pro').addEventListener('change', function () {
     var fechaSaberPro = document.getElementById('fecha_realizo_saber_pro');
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
document.addEventListener('DOMContentLoaded', function() {
   // Manejar la visibilidad de los elementos según el condicional si estudia derecho o otro
     document.getElementById('programa_cursado').addEventListener('change', function () {
       if (this.value === 'Derecho') {
           realizo_examen_suficiencia.style.display = 'block';
       } else {
           realizo_examen_suficiencia.style.display = 'none';
       }
     });
     // Manejar la visibilidad condicional de los elementos para el programa de derecho
     document.getElementById('observaciones_examen_suficiencia').style.display = 'none'
     document.getElementById('realizo_examen_suficiencia').style.display = 'none'; // Ocultar inicialmente
     document.querySelectorAll('input[name="realizo_examen_suficiencia"]').forEach(function (radio) {
       radio.addEventListener('change', function () {
         var observaciones_examen_suficiencia = document.getElementById('observaciones_examen_suficiencia');
         observaciones_examen_suficiencia.style.display = (this.value === 'si') ? 'block' : 'none';
       });
     });
    //Mejorando el despligue correcto del formulario para funciones como editar y ver
    var programaCursado = document.getElementById('programa_cursado');
    var changeEvent = new Event('change');
    programaCursado.dispatchEvent(changeEvent);
// Después de haber configurado tus event listeners, simula el evento de cambio inicial
    var realizoExamenSuficienciaRadios = document.querySelectorAll('input[name="realizo_examen_suficiencia"]');

// Encuentra el radio button que está marcado (seleccionado) inicialmente
    var radioSeleccionado = Array.from(realizoExamenSuficienciaRadios).find(radio => radio.checked);

// Si se encuentra un radio button seleccionado, simula el evento de cambio
    if (radioSeleccionado) {
        var changeEvent = new Event('change');
        radioSeleccionado.dispatchEvent(changeEvent);
        }
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
