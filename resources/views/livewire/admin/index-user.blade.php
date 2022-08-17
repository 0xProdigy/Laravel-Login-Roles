<div> 
    <div class="card-header">
        <input wire:model="search" class="form-control" type="search" placeholder="Ingrese el nombre o correo del Usuario">
    </div> 

@if ($users->count())
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="10px">
                                <a class="btn btn-success" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer">
        {{ $users->links() }}
    </div>

    @else
    <div class="card-body">
        <strong>No hay registros</strong>
    </div>        
    @endif

    
</div>
