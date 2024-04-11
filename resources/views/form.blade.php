<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
        <form action="{{ route('addUser') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" value="{{ old('username') }}" name="username"
                    class="form-control @error('username') is-invalid @enderror">
                <span class="text-danger">
                    @error('username')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" value="{{ __('useremail') }}" name="useremail"
                    class="form-control @error('useremail')is-invalid @enderror">
                <span class="text-danger">
                    @error('useremail')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" value="{{ old('userage') }}" name="userage"
                    class="form-control @error('userage') is-invalid @enderror">
                <span class="text-danger">
                    @error('userage')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" value="{{ old('username') }}" name="usercity"
                    class="form-control @error('usercity') is-invalid @enderror">
                <span class="text-danger">
                    @error('usercity')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

</body>

</html>
