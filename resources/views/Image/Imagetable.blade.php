
<table id="file_export" class=" table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>
            
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th>ID</th>
            <th>Título</th>
            <th>Url</th>
           

            <th>Descripción</th>
            <th>Detalle</th>
            

        </tr>
        <!-- end row -->
    </thead>
    <tbody>
        @foreach ($Image as $Images)
            <tr>
         

                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success ti ti-pencil" 
                    data-bs-toggle="modal" data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                        onclick="ImageEdit('{{ $Images->id }}'); Up();  return false"></button>


                      
                </td>
                <td>
                 
                    <button class="btn btn-danger ti ti-trash"
                        onclick="ImageDestroy('{{ $Images->id }}'); return false"></button>
                </td>



                <td>{{ $Images->id }}</td>
               
                <td>{{ $Images->title }}</td>
                <td><a target="_blank" href="{{url('resource/'.$Images->url)}}">{{url('resource/'.$Images->url)}}
                </a>
                    </td>        
                    
                <td>{{ $Images->description }}</td>

                <td>{{ $Images->detail }}</td>
               
             


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
        <th>Título</th>
        <th>Url</th>
       

        <th>Descripción</th>
        <th>Detalle</th>
        
        </tr>
        <!-- end row -->
    </tfoot>
</table>








    <script>
 
      </script>
    