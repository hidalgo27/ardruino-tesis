<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
</head>
<body>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('data_store_path')}}">
                        @csrf
                        <div class="form-group">
                            <label for="l_latitud">Latitud</label>
                            <input type="text" class="form-control" name="txt_latitud" id="l_latitud" placeholder="Latitud">
                        </div>
                        <div class="form-group">
                            <label for="l_longitud">Longitud</label>
                            <input type="text" class="form-control" name="txt_longitud" id="l_longitud" placeholder="Longitud">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Latitud</th>
                            <th scope="col">Longitud</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $datas)
                            <tr>
                                <td>{{$datas->latitud}}</td>
                                <td>{{$datas->longitud}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{asset("js/app.js")}}"></script>

</body>
</html>
