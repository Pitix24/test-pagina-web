
<table id="file_export" class="text-center table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>
            <th>Rol</th>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th>ID</th>
            <th>Estado</th>
            <th>  <i class="ti ti-brand-whatsapp fs-7"style="color:green;"></i></th>
            <th>Dni</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Nombres</th>
            <th>Celular </th>
            <th>Email</th>
            <th>Foto</th>
            <th>Rol ó Cargo</th>

        </tr>
        <!-- end row -->
    </thead>
    <tbody>
        @foreach ($user as $users)
            <tr>
         
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-toggle="modal"
                        style="background-color:#023039;color:#ffffff" data-target="#exampleModal2"
                        onclick="userRoleEdit('{{ $users->id }}');  return false">Roles</button>
                </td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success ti ti-pencil" 
                    data-bs-toggle="modal" data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                        onclick="userEdit('{{ $users->id }}'); Up();  return false"></button>


                      
                </td>
                <td>
                 
                    <button class="btn btn-danger ti ti-trash"
                        onclick="userDestroy('{{ $users->id }}'); return false"></button>
                </td>



                <td>{{ $users->id }}</td>
                <td>
                    @if ($users->session == '')
                 
                        <span class="badge text-bg-danger">Inactivo</span>
                    @else
                        <span class="badge text-bg-success">Activo</span>
                    @endif
                </td>
                <td>
                    @php
                        $whatsapp = 'https://api.whatsapp.com/send?phone=' . $users->cellphone;
                    @endphp
                    <a target="_blank" href="{{ $whatsapp }}">
                        <i class="ti ti-brand-whatsapp fs-7"style="color:green;"></i>

                    </a>
                </td>
                <td>{{ $users->dni }}</td>

                <td>{{ $users->firstname }}</td>
                <td>{{ $users->lastname }}</td>
                <td>{{ $users->names }}</td>
                <td>
                    {{ $users->cellphone }}
                </td>
                <td>{{ $users->email }}</td>
                @if ($users->photo == '' && $users->sex == 'M')
                    @php
                        $users->photo = '../Recurso 23.png';
                    @endphp
                @elseif($users->photo == '' && $users->sex == 'F')
                    @php
                        $users->photo = '../Recurso 23.png';
                    @endphp
                @endif
                <td><img src="{{ asset('imageusers/' . $users->photo) }}" alt="" srcset="" width="50">
                </td>
                <td>

                    @foreach ($users->roles_ as $item)
                        {{ $item->name }}
                    @endforeach
                </td>


            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <!-- start row -->
        <tr>
          <th>Rol</th>
          <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                  srcset=""></th>
          <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                  srcset=""></th>
          <th>ID</th>
          <th>Estado</th>
          <th>  <i class="ti ti-brand-whatsapp fs-7"style="color:green;"></i></th>
          <th>Dni</th>
          <th>Paterno</th>
          <th>Materno</th>
          <th>Nombres</th>
          <th>Celular </th>
          <th>Email</th>
          <th>Foto</th>
          <th>Rol ó Cargo</th>
        </tr>
        <!-- end row -->
    </tfoot>
</table>








    <script>
 
      </script>
    