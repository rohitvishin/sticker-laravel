<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
@include('admin.include.header')

<body>

    <div class="container-fluid">
        @include('admin.include.sidebar')

        <div class="content">
            <h2>Manage Product </h2>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <th scope="row">{{ $key }}</th>
                                <th scope="row">{{ $product->name }}</th>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td><a href={{ url('/admin/product') . '/' . $product->id }}>View</a></td>
                                <td>
                                    <button onclick='editPro({{ $product->id }})'><i
                                            class="fa-solid fa-pen"></i></button>
                                    <button onclick='delPro({{ $product->id }})'><i
                                            class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.include.footer')
</body>
<script>
    function editPro(Id) {
        // edit product
        console.log(Id);
    }

    function delPro(Id) {
        // delete product
        console.log(Id);
    }
</script>

</html>
