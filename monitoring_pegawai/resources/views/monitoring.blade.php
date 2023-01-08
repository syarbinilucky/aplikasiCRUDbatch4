<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>MANAGEMENT DATA MONITORING</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-3 fw-bold">Project Monitoring <i class="text-primary"></i> </h3>
        <hr>
        <a href="/tambah" class="btn btn-success"> Tambah +</a>
        <table class="table table-striped mt-5 table-bordered">
            <thead class=" table-dark ">
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">PROJECT NAME</th>
                    <th scope="col">CLIENT</th>
                    <th scope="col">PROJECT LEADER</th>
                    <th scope="col">START</th>
                    <th scope="col">END</th>
                    <th scope="col">PROGRES</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @foreach ($data as $row )
                    <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->project_name }}</td>
                    <td>{{ $row->client}}</td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <img src="{{ asset('fotoleader/'. $row->image) }}" alt=""style="width:40px;">
                                <td>
                                    <h5 style="padding-left:5px; margin-left:15x">{{ $row->name}}</h5>
                                    <p style="padding-left:5px; margin-left:15x">{{ $row->email}}</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>{{ $row->start}}</td>
                    <td>{{ $row->end }}</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:{{ $row->progres}}" aria-valuenow=""
                                aria-valuemin="0" aria-valuemax="100">{{ $row->progres}}</div>
                        </div>
                    </td>
                    <td>
                        
                        <a href="/delete/{{ $row->id }}" class="btn btn-warning bi bi-trash-fill "></a>
                        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-danger bi bi-pencil-square" ></a>
                        
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
