<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-3">EDIT DATA</h1>
    <div class="container"> 
        <div class="row d-flex justify-content-center">
            <div class="card col-8">
              <div class="col">
                <div class="body">
                  <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                        <div class="mb-3">
                          <label for="project_name" class="form-label">Project name</label>
                          <input type="text" name="Project_name" class="form-control" id="project_name" aria-describedby="Project_name" value="{{ $data->project_name }}"> 
                        </div>
                        <div class="mb-3">
                          <label for="client" class="form-label">Client</label>
                          <input type="text" name="client" class="form-control" id="client" aria-describedby="client" {{ $data->client }}>
                        </div>
                        {{-- <div class="mb-3">
                          <label for="image" class="form-label">Choice Profil</label>
                          <input type="text" name="image" class="form-control" id="image" aria-describedby="image">
                        </div> --}}
                        <div class="mb-3">
                          <label for="image">Pilih Profil:</label><br>
                          <input type="file" name="image" id="image" {{ $data->image }}><br><br>
                        </div>
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" id="name" aria-describedby="name" {{ $data->name }}>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">E-mail</label>
                          <input type="text" name="email" class="form-control" id="email" aria-describedby="email" {{ $data->email }}>
                        </div>
                        <div class="mb-3">
                          <label for="start" class="form-label">Start</label>
                          <input type="text" name="start" class="form-control" id="start" aria-describedby="start" {{ $data->start}}>
                        </div>
                        <div class="mb-3">
                          <label for="end" class="form-label">End</label>
                          <input type="text" name="end" class="form-control" id="end" aria-describedby="end"{{ $data->end }}>
                        </div>
                        <div class="mb-3">
                          <label for="progres" class="form-label">Progres</label>
                          <input type="text" name="progres" class="form-control" id="progres" aria-describedby="progres" {{ $data->progres }}>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>


<form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
  @method('PUT')