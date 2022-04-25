<form id="data-{{ $id }}" action="{{url($link)}}" method="post">
    @csrf
    @method('delete')
    </form>
    <div class="btn-group">
        <button type="button" class="btn btn-info btn-sm btn-flat">Aksi</button>
        <button type="button" class="btn btn-info btn-sm btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu" role="menu">
            @isset($slot)
                {{ $slot}}
                <div class="dropdown-divider"></div>
            @endisset
          <button onclick="deleteRow( {{ $id }} )" class="dropdown-item"><i class="fas fa-trash-alt text-danger" style="width: 25px"></i> HAPUS</button>
        </div>
    </div>