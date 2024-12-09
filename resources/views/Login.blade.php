<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="row">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <form action="{{route('session.submit')}}" method="post" class="bg-white p-4 rounded shadow-sm" style="width: 600px; min-height: 300px; display: flex; flex-direction: column; justify-content: center;">
                    @csrf
                    <div >
                        <h1>NVK-login</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                                @error('email')
                                <span class="text-danger"> {{$message}}  </span>
                                @enderror
                                <span id="email-error"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="password" class="form-label">password </label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="xxxx">
                                @error('password')
                                <span class="text-danger"> {{$message}}  </span>
                                @enderror
                                <span id="email-error"></span>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary">Submit</button>
                        @if(Session::has('nvk-error'))
                            <div class="alert alert-danger">
                                    {{Session::get('nvk-error')}}
                            </div>
                        @endif
                    </div>

                </form>
            </div>
    </div>
    </section>
</body>
</html>
