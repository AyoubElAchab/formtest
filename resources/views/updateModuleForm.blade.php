<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <form method="POST" action="/saveUpdate" >

            @csrf
            <div class="mb-3">
                <label for="codem" class="form-label"> code du module : </label>
                <input type="text" name="codem" id="codem" placeholder="codem du module" class="form-control" value="{{$module[0]->codeM}}" />
                <!-- display error message -->
                @error('codem')
                    <span class="text-danger" >{{$message}} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="titrem" class="form-label"> Titre du module : </label>
                <input type="text" name="titrem" id="titrem" placeholder="titre du module" class="form-control" value="{{$module[0]->Titre}}"/>
                <!-- display error message -->
                @error('titrem')
                    <span class="text-danger" >{{$message}} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mh" class="form-label"></label>
                <input type="text" class="form-control" name="mh" id="mh" placeholder="Masse horaire du module" value="{{$module[0]->MH}}" />
                <!-- display error message -->
                @error('mh')
                    <span class="text-danger" >{{$message}} </span>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success btn-submit">Update Module </button>
            </div>
        </form>
    </div>
</body>
</html>