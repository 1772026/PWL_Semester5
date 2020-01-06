<html>
<head>
    <title>Tutorial Laravel #25 : Relasi Many To Many Eloquent</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
        </li>
    </ul>

</nav>
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
            <h5 class="text-center my-4">Eloquent Many To Many Relationship</h5>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Judul</th>
                    <th>Genre</th>
                    <th width="1%">Jumlah</th>
                </tr>
                </thead>
                <tbody>
                @foreach($film as $a)
                    <tr>
                        <td>{{ $a->name }}</td>
                        <td>
                            <ul>
                                @foreach($a->genres as $h)
                                    <li> {{ $h->name }} </li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="text-center">{{ $a->genres->count() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
