<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
    </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
        <tr>
            <th scope="row">{{ $message->id }}</th>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->message }}</td>
        </tr>
    @endforeach
    </tbody>
</table>


