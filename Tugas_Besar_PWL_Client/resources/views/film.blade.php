<html>
<head>
    <title>Tutorial Laravel #24 : Relasi One To Many Eloquent</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/email.css') }}">
</head>
<body>
<nav class="navbar navbar-light" style="background: yellow">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/logoCinema.png') }}"  width="50" height="auto" class="d-inline-block align-top" alt="">
        E-Ticket
    </a>
</nav>
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="text-center my-4">Eloquent One To Many Relationship</h5>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Judul Role</th>
                    <th>User</th>
                    <th width="15%" class="text-center">Jumlah User</th>
                </tr>
                </thead>
                <tbody>

{{--                @foreach($role as $r)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $r->name }}</td>--}}
{{--                        <td>--}}
{{--                            @foreach($r->users as $t)--}}
{{--                                {{$t->username}},--}}
{{--                            @endforeach--}}
{{--                        </td>--}}
{{--                        <td class="text-center">{{ $r->users->count() }}</td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
