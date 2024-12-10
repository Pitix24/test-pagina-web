
<table id="file_export" class=" table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>
            
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th>ID</th>
            <th>Descripción</th>
            <th>Página</th>
            <th>Nivel</th>
            <th>Color</th>
            <th>Detalle</th>

        </tr>
        <!-- end row -->
    </thead>
    <tbody>
        @foreach ($section as $sections)
            <tr>
         

                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success ti ti-pencil" 
                    
                        onclick="sectionEdit('{{ $sections->id }}'); Up();  return false"></button>


                      
                </td>
                <td>
                 
                    <button class="btn btn-danger ti ti-trash"
                        onclick="sectionDestroy('{{ $sections->id }}'); return false"></button>
                </td>



                <td>{{ $sections->id }}</td>
               
                
                <td>{{ $sections->description }}</td>
                {{-- @php
                    $secciones =array("secciones","Plantilla","Inicio","Nosotros","Proyectos","Blog","Contáctanos")
                @endphp --}}
                <td>{{ $sections->module }}</td>
                <td>{{ $sections->nivel }}</td>
                <td>{{ $sections->color }}</td>

                <td>{{ $sections->detail }}</td>
               
             


            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <!-- start row -->
        <tr>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                srcset=""></th>
        <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                srcset=""></th>
        <th>ID</th>
        <th>Descripción</th>
        <th>Página</th>
        <th>Nivel</th>
        <th>Color</th>
        <th>Detalle</th>
        </tr>
        <!-- end row -->
    </tfoot>
</table>








    <script>
 
      </script>
    