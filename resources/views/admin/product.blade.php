<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
@include('admin.include.header')

<body>

    <div class="container-fluid">
        @include('admin.include.sidebar')

        <div class="content">
            <div class="row">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Add Products</h4>
                                </div>
                                <div class="card-body">
                                    <form id="product" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="category">Category:</label>
                                            <select class="form-control" id="category_id" name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" class="form-control" id="title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="mrp">MRP:</label>
                                            <input type="text" class="form-control" id="mrp" name="mrp">
                                        </div>
                                        <div class="form-group">
                                            <label for="selling_price">Selling Price:</label>
                                            <input type="text" class="form-control" id="selling_price"
                                                name="selling_price">
                                        </div>
                                        <div class="form-group">
                                            <label for="stock">Stock:</label>
                                            <input type="text" class="form-control" id="stock" name="stock">
                                        </div>
                                        <div class="form-group">
                                            <label for="seo">SEO:</label>
                                            <input type="text" class="form-control" id="seo" name="seo">
                                        </div>
                                        <div class="form-group">
                                            <label>Image:</label>
                                            <input type="file" class="form-control" name="image[]" multiple required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.include.footer')
</body>

<script src={{ asset('axios.min.js') }}></script>
<script>
    $('#product').on('submit', function(e) {
        e.preventDefault();
        axios.post(`${url}/admin/product`, new FormData(this)).then(function(response) {
            // handle success
            show_Toaster(response.data.message, response.data.type)
            if (response.data.type === 'success') {
                setTimeout(() => {
                    window.location.href = `${url}/admin/product`;
                }, 500);
            }
        }).catch(function(err) {
            show_Toaster(err.response.data.message, 'error')
        })
    });
</script>

</html>
