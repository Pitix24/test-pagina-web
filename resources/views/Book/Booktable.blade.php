<div style="overflow: auto; max-height: 80vh;">
  <div style="min-width: 1200px;">
    <table id="file_export" class="table table-hover table-bordered table-striped">
      <thead>
        <tr>
          <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""></th>
          <th>ID</th>
              <th>Fecha</th>
          <th>Estado</th>
          <th>Ticket</th>
          <th>Paterno</th>
          <th>Materno</th>
          <th>Nombres</th>
          <th>Dirección</th>
          <th>Tipo Doc</th>
          <th>Documento</th>
          <th>WSP</th>
          <th>Teléfono</th>
          <th>Email</th>
          <th>Reclamo</th>
          <th>Monto reclamado</th>
          <th>Tipo de moneda</th>
          <th>Oficina</th>
          <th>Tipo de queja</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($Book as $Books)
        <tr>
          <td>
            <div class="dropdown dropstart">
              <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown">
                <i class="ti ti-dots-vertical fs-6"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @canany(['administrar', 'editar'])
                <li>
                  <a onclick="BookEdit('{{ $Books->id }}');" data-bs-toggle="modal"
                    data-bs-target="#success-header-modal" class="dropdown-item d-flex align-items-center gap-3"
                    href="javascript:void(0)">
                    <i class="fs-4 ti ti-edit"></i>Editar
                  </a>
                </li>
                @endcanany
                @canany(['administrar', 'eliminar'])
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"
                    onclick="BookDestroy('{{ $Books->id }}'); return false">
                    <i class="fs-4 ti ti-trash"></i>Eliminar
                  </a>
                </li>
                @endcanany
              </ul>
            </div>
          </td>
          <td>{{ $Books->id }}</td>
             <td>{{ $Books->created_at }}</td>
          <td>
            @if ($Books->state == 'Finalizado')
            <span class="badge text-bg-danger">{{ $Books->state }}</span>
            @else
            <span class="badge text-bg-success">{{ $Books->state }}</span>
            @endif
          </td>
          <td><span class="badge text-bg-warning">{{ $Books->ticket }}</span></td>
          <td>{{ $Books->firstname }}</td>
          <td>{{ $Books->lastname }}</td>
          <td>{{ $Books->names }}</td>
          <td>{{ $Books->address }}</td>
          <td>{{ $Books->document_type }}</td>
          <td>{{ $Books->document_number }}</td>
          <td>
            @php $whatsapp = 'https://api.whatsapp.com/send?phone=' . $Books->phone; @endphp
            <a target="_blank" href="{{ $whatsapp }}">
              <i class="ti ti-brand-whatsapp fs-7" style="color:green;"></i>
            </a>
          </td>
          <td>{{ $Books->phone }}</td>
          <td>{{ $Books->email }}</td>
          <td>{{ $Books->claim_type }}</td>
          <td>{{ $Books->claimed_amount }}</td>
          <td>{{ $Books->currency_type }}</td>
          <td>{{ $Books->office_address }}</td>
          <td>{{ $Books->complaint_type }}</td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
