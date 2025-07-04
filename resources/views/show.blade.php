<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">state</th>
                        <th scope="col">city</th>
                        <th scope="col">actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->email }}</td>
                        <td>{{ $post->state }}</td>
                        <td>{{ $post->city }}</td>
                        <td><a href="/edit/{{ $post->id }}"><button class="btn btn-success">update</button></a>
                        <a href="/delete/{{ $post->id }}"><button class="btn btn-success">Delete</button></a>
                        
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
           <a href="/add"> <button class="btn btn-primary">insert data</button></a>
        </div>
    </div>
</body>

</html>
