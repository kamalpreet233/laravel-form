<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container-xl">
            <form method="post" action="/create">
                @csrf
                <div class="mb-3">

                    <label for="name" class="form-label">name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                        aria-describedby="emailHelp">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="email" class="form-label">email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                        id="email">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <select class="form-select" name="state" aria-label="Default select example">
                    <option selected value="{{ old('state') }}">Open this select menu</option>
                    <option value="new york">new york</option>
                    <option value="texas">texas</option>

                </select>
                @error('state')
                    <div class="error">{{ $message }}</div>
                @enderror
                <div class="mb-3">

                    <label for="city" class="form-label">city</label>
                    <input type="text" class="form-control" value="{{ old('city') }}" name="city" id="city"
                        aria-describedby="emailHelp">
                    @error('city')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>
            <a href="{{ Route('show') }}"><button class="btn btn-primary mt-5">view data</button></a>
        </div>
    </div>
</body>

</html>
