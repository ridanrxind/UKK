<div>
    @include('komponen.alert_succes')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <body>
            @foreach ($users as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('users.show',$item->id) }}" class="badge bg-primary button">Detail</a>
                    <a href="{{ route('users.edit',$item->id) }}" class="badge bg-warning button">Edit</a>
                   <button wire:click="delete({{ $item->id }})" class="btn badge bg-danger">delete</button>
                </td>
            </tr>
            @endforeach
        </body>
    </table>
</div>
