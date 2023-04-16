<div class="content-wrapper">
<div class="content">
<div class="container-fluid">
    <table action="{{ URL::to('/printpdf/'.$record->id) }}">
        <tr>
            <th>Name</th>
            <td>{{ $record->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $record->email }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>{{ $record->role }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $record->created_at }}</td>
        </tr>

    </table>
</div>
</div>
</div>

