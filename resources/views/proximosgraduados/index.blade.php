@extends('home.layout')
@section('content')
<section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-200 min-h-screen">
   <div class="container mx-auto p-4">
      <h1 class="text-2xl font-bold mb-4">Listado de Próximos Graduados</h1>
      <!-- Filtro -->
      <div class="mb-4">
         <label for="filtro" class="block text-sm font-medium text-gray-600">Filtrar por:</label>
         <input type="text" id="filtro" class="mt-1 p-2 border rounded-md w-full">
      </div>
      <!-- Tabla -->
      <div class="overflow-x-auto">
         <table class="min-w-full bg-white border border-gray-300">
            <thead>
               <tr>
                  <th class="py-2 px-4 border-b">Nombre</th>
                  <th class="py-2 px-4 border-b">Código</th>
                  <th class="py-2 px-4 border-b">Teléfono</th>
                  <th class="py-2 px-4 border-b">Nivel</th>
                  <th class="py-2 px-4 border-b">Acciones</th>
               </tr>
            </thead>
            <tbody>
               <!-- Aquí puedes iterar sobre tus datos desde Laravel y mostrarlos en la tabla -->
                @foreach( $formularios as $formulario )
               <tr>
                  <td class="py-2 px-4 border-b">{{$formulario->nombre_completo}}</td>
                  <td class="py-2 px-4 border-b">{{$formulario->codigo_estudiantil}}</td>
                  <td class="py-2 px-4 border-b">{{$formulario->telefono}}</td>
                  <td class="py-2 px-4 border-b">{{$formulario->nivel_estudiante}}</td>
                  <td class="py-2 px-4 border-b text-center">
                     <a href="{{ url('/listado-proximo-graduado/'.$formulario->id).'/edit' }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full mr-1">
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                           <g fill="#2e3436">
                              <path d="M3 14h13v1H3z"/>
                              <path d="M9.984 1a1 1 0 00-.691.294l-8.5 8.5a1 1 0 000 1.414L2.586 13h6.828l5.793-5.793a1 1 0 000-1.414l-4.5-4.5a1 1 0 00-.723-.292zM6.401 6.9l3.137 3.095s.5.5 0 1L8.56 12H3.398l-1.584-1.5 3.587-3.601c.5-.5 1 0 1 0z" fill-rule="evenodd" font-family="sans-serif" font-weight="400" overflow="visible" style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none;white-space:normal"/>
                           </g>
                        </svg>
                     </a>
                     <button  class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded-full mr-1">
                        <svg xmlns:cc='http://creativecommons.org/ns#' xmlns:dc='http://purl.org/dc/elements/1.1/' sodipodi:docname='edit-delete.svg' inkscape:export-filename='/home/sam/source-symbolic.png' inkscape:export-xdpi='270' inkscape:export-ydpi='270' height='16' id='svg7384' xmlns:inkscape='http://www.inkscape.org/namespaces/inkscape' xmlns:osb='http://www.openswatchbook.org/uri/2009/osb' xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns#' xmlns:sodipodi='http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd' style='enable-background:new' xmlns:svg='http://www.w3.org/2000/svg' version='1.1' inkscape:version='0.91 r' width='16' xmlns='http://www.w3.org/2000/svg'>
                           <sodipodi:namedview inkscape:bbox-nodes='true' inkscape:bbox-paths='false' bordercolor='#666666' borderlayer='false' borderopacity='1' inkscape:current-layer='layer12' inkscape:cx='157.8645' inkscape:cy='-158.04959' gridtolerance='10' inkscape:guide-bbox='true' guidetolerance='10' id='namedview88' inkscape:object-nodes='true' inkscape:object-paths='true' objecttolerance='10' pagecolor='#f7f7f7' inkscape:pageopacity='0' inkscape:pageshadow='2' showborder='true' showgrid='false' showguides='true' inkscape:showpageshadow='false' inkscape:snap-bbox='true' inkscape:snap-bbox-edge-midpoints='false' inkscape:snap-bbox-midpoints='true' inkscape:snap-center='false' inkscape:snap-global='true' inkscape:snap-grids='true' inkscape:snap-intersection-paths='true' inkscape:snap-midpoints='true' inkscape:snap-nodes='true' inkscape:snap-object-midpoints='true' inkscape:snap-others='true' inkscape:snap-page='false' inkscape:snap-smooth-nodes='true' inkscape:snap-to-guides='true' inkscape:window-height='706' inkscape:window-maximized='1' inkscape:window-width='1366' inkscape:window-x='0' inkscape:window-y='32' inkscape:zoom='1'>
                              <inkscape:grid color='#000000' dotted='false' empcolor='#0800ff' empopacity='0.4627451' empspacing='4' enabled='true' id='grid4866' opacity='0.16470588' originx='-144.00023' originy='-295.99636' snapvisiblegridlinesonly='true' spacingx='0.25px' spacingy='0.25px' type='xygrid' visible='true'/>
                           </sodipodi:namedview>
                           <metadata id='metadata90'>
                              <rdf:RDF>
                                 <cc:Work rdf:about=''>
                                    <dc:format>image/svg+xml</dc:format>
                                    <dc:type rdf:resource='http://purl.org/dc/dcmitype/StillImage'/>
                                    <dc:title>Paper Symbolic Icon Theme</dc:title>
                                 </cc:Work>
                              </rdf:RDF>
                           </metadata>
                           <title id='title8473'>Paper Symbolic Icon Theme</title>
                           <defs id='defs7386'>
                              <linearGradient id='linearGradient5606' osb:paint='solid'>
                                 <stop id='stop5608' offset='0' style='stop-color:#000000;stop-opacity:1;'/>
                              </linearGradient>
                           </defs>
                           <g inkscape:groupmode='layer' id='layer12' inkscape:label='actions' style='display:inline' transform='translate(-385.00043,78.996356)'>
                              <path inkscape:connector-curvature='0' d='m 387.0002,-74 0,9 c 5e-5,0.52358 0.47642,0.99995 1,1 l 8,0 1,0 c 0.52358,-5e-5 0.99995,-0.47642 1,-1 l 0,-9 z' id='path8476-3' sodipodi:nodetypes='cccccccc' style='color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:Sans;-inkscape-font-specification:Sans;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;display:inline;overflow:visible;visibility:visible;opacity:0.5;fill:#000000;fill-opacity:1;stroke:none;stroke-width:2;marker:none;enable-background:accumulate'/>
                              <path inkscape:connector-curvature='0' d='m 386.0002,-76 0,1 13.0002,-0.0034 -2e-4,-0.99664 c 0,-1 -0.9998,-1.00336 -0.9998,-1.00336 l -3,0 c 0,0 0,-1 -1,-1 l -3,0 c -1,0 -1,1 -1,1 l -3,0 c 0,0 -1.0002,0.003 -1.0002,1.00336 z' id='path8478-1' sodipodi:nodetypes='ccccccccccc' style='color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:Sans;-inkscape-font-specification:Sans;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;display:inline;overflow:visible;visibility:visible;opacity:0.5;fill:#000000;fill-opacity:1;stroke:none;stroke-width:2;marker:none;enable-background:accumulate'/>
                           </g>
                        </svg>
                     </button>
                     <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:serif="http://www.serif.com/" width="18" height="18" viewBox="0 0 64 64" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                           <rect id="Icons" x="-896" y="-256" width="1280" height="800" style="fill:none;"/>
                           <g id="Icons1" serif:id="Icons">
                              <g id="Strike"/>
                              <g id="H1"/>
                              <g id="H2"/>
                              <g id="H3"/>
                              <g id="list-ul"/>
                              <g id="hamburger-1"/>
                              <g id="hamburger-2"/>
                              <g id="list-ol"/>
                              <g id="list-task"/>
                              <g id="trash"/>
                              <g id="vertical-menu"/>
                              <g id="horizontal-menu"/>
                              <g id="sidebar-2"/>
                              <g id="Pen"/>
                              <g id="Pen1" serif:id="Pen"/>
                              <g id="clock"/>
                              <g id="external-link"/>
                              <g id="hr"/>
                              <g id="info"/>
                              <g id="warning"/>
                              <g id="plus-circle"/>
                              <g id="minus-circle"/>
                              <g id="vue"/>
                              <g id="cog"/>
                              <g id="logo"/>
                              <g id="eye-slash"/>
                              <g id="eye">
                                 <path d="M32.513,13.926c10.574,0.15 19.249,9.657 23.594,17.837c0,0 -1.529,3.129 -2.963,5.132c-0.694,0.969 -1.424,1.913 -2.191,2.826c-0.547,0.65 -1.112,1.283 -1.698,1.898c-5.237,5.5 -12.758,9.603 -20.7,8.01c-8.823,-1.77 -16.02,-9.33 -20.346,-17.461c0,0 1.536,-3.132 2.978,-5.132c0.646,-0.897 1.324,-1.77 2.034,-2.617c0.544,-0.649 1.108,-1.282 1.691,-1.897c4.627,-4.876 10.564,-8.63 17.601,-8.596Zm-0.037,4c-5.89,-0.022 -10.788,3.267 -14.663,7.35c-0.527,0.555 -1.035,1.127 -1.527,1.713c-0.647,0.772 -1.265,1.569 -1.854,2.386c-0.589,0.816 -1.193,1.846 -1.672,2.721c3.814,6.409 9.539,12.198 16.582,13.611c6.563,1.317 12.688,-2.301 17.016,-6.846c0.529,-0.555 1.04,-1.128 1.534,-1.715c0.7,-0.833 1.366,-1.694 1.999,-2.579c0.586,-0.819 1.189,-1.851 1.667,-2.727c-3.958,-6.625 -10.73,-13.784 -19.082,-13.914Z"/>
                                 <path d="M32.158,23.948c4.425,0 8.018,3.593 8.018,8.017c0,4.425 -3.593,8.017 -8.018,8.017c-4.424,0 -8.017,-3.592 -8.017,-8.017c0,-4.424 3.593,-8.017 8.017,-8.017Zm0,4.009c2.213,0 4.009,1.796 4.009,4.008c0,2.213 -1.796,4.009 -4.009,4.009c-2.212,0 -4.008,-1.796 -4.008,-4.009c0,-2.212 1.796,-4.008 4.008,-4.008Z"/>
                              </g>
                              <g id="toggle-off"/>
                              <g id="shredder"/>
                              <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"/>
                              <g id="react"/>
                           </g>
                           </g>
                        </svg>
                     </button>
                  </td>
               </tr>
                @endforeach
               <!-- Agrega más filas con datos adicionales -->
            </tbody>
         </table>
      </div>
      <!-- Agrega los scripts necesarios, como el script para filtrar los resultados -->
      <script>
         document.addEventListener("DOMContentLoaded", function () {
             // Código JavaScript para manejar el filtro
             const filtroInput = document.getElementById("filtro");
             const rows = document.querySelectorAll("tbody tr");

             filtroInput.addEventListener("input", function () {
                 const filtro = filtroInput.value.toLowerCase();

                 rows.forEach(row => {
                     const nombre = row.querySelector("td:nth-child(1)").textContent.toLowerCase();
                     const codigo = row.querySelector("td:nth-child(2)").textContent.toLowerCase();
                     const telefono = row.querySelector("td:nth-child(3)").textContent.toLowerCase();
                     const nivel = row.querySelector("td:nth-child(4)").textContent.toLowerCase();
                     // Agrega más condiciones según tus datos

                     if (nombre.includes(filtro) || codigo.includes(filtro) || telefono.includes(filtro) || nivel.includes(filtro)) {
                         row.classList.remove('hidden');
                     } else {
                         row.classList.add('hidden');
                     }
                 });
             });
         });
      </script>
   </div>
</section>
@endsection
