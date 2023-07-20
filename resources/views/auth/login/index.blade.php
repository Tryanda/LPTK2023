<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="user/css/new.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    @include('sweetalert::alert')
    <div class="container pt-5">
        <div class="row justify-content-center"> <!-- Tambahkan kelas 'justify-content-center' di sini -->
            <div class="col-md-4">
                {{-- form --}}
                <form action="{{route('post')}}" method="POST" class="shadow p-3 mb-5 bg-white form p-4">
                    @csrf
                    <h3 style="margin-bottom: 20px;">Login Manager</h3>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="email" class="details">Email</label>
                            <input type="email" class="form-control input-detail" value="{{old('email')}}" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="details">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>

                        {{-- button --}}
                        <div class="button">
                            <input type="submit" value="Login">
                        </div>
                    </div>
                </form>
                {{-- end form --}}
            </div>
        </div>
    </div>
</body>
</html>
