
<table id="file_export" class="text-center table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>
           
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th>ID</th>
           
         
            <th>Dni</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Nombres</th>
            <th> <i class="ti ti-brand-whatsapp fs-7"style="color:green;"></i></th>
            <th>Celular </th>
            <th>Proyecto</th>
            <th>Mensaje</th>
        

        </tr>
        <!-- end row -->
    </thead>
    <tbody>
        @foreach ($Customer as $Customers)
            <tr>
         
          
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success ti ti-pencil" 
                    data-bs-toggle="modal" data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                        onclick="CustomerEdit('{{ $Customers->id }}'); Up();  return false"></button>


                      
                </td>
                <td>
                 
                    <button class="btn btn-danger ti ti-trash"
                        onclick="CustomerDestroy('{{ $Customers->id }}'); "></button>
                </td>



                <td>{{ $Customers->id }}</td>
               
     
                <td>{{ $Customers->dni }}</td>

                <td>{{ $Customers->firstname }}</td>
                <td>{{ $Customers->lastname }}</td>
                <td>{{ $Customers->names }}</td>
                <td>
                    @php
                        $whatsapp = 'https://api.whatsapp.com/send?phone=51' . $Customers->cellphone;
                    @endphp
                    <a target="_blank" href="{{ $whatsapp }}">
                        <i class="ti ti-brand-whatsapp fs-7"style="color:green;"></i>

                    </a>
                </td>
                <td>
                    {{ $Customers->cellphone }}
                </td>
                <td>
                    {{ $Customers->project->title }}</td>
                </td>
                <td>
                    {{ $Customers->message }}
                </td>
               
             
                


            </tr>
        @endforeach
    </tbody>

</table>








    <script>
 
      </script>
    