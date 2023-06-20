<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
@include('admin.include.header')

<body>

    <div class="container-fluid">
        @include('admin.include.sidebar')

        <div class="content" style="padding: 50px">
            <div class="row">
                @if (count($images) < 1)
                    <h2>NO IMAGES</h2>
                @else
                    @foreach ($images as $image)
                        <div class="col-md-3">
                            <img src={{ url('storage/app/public') . '/' . $image->img }}>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>


        @include('admin.include.footer')
</body>

</html>
