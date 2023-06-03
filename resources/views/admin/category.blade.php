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
            <h2>CATEGORY <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Add</button></h2>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">sr no</th>
                            <th scope="col">parent</th>
                            <th scope="col">name</th>
                            <th scope="col">icon</th>
                            <th scope="col">status</th>
                            <th scope="col">created at</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->parent_id }}</th>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ url('storage/app/public/' . $item->icon) }}" height='75px'
                                        width='125px'></td>
                                <td>{{ $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <button class="btl" type="button"
                                        onclick="edit({{ $item->id }})">Edit</button>
                                    <button class="btl ml-4" type="button"
                                        onclick="delete({{ $item->id }})">Delete</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="category">
                        @csrf
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Icon:</label>
                            <input type="file" name="icon" class="form-control" id="icon" name="icon"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Parent:</label>
                            <select name="parent_id" class="form-select" aria-label="Default select example">
                                <option value="0" selected>Main</option>
                                @foreach ($category as $item)
                                    @if ($item->parent_id == 0)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @include('admin.include.footer')
</body>
<script>
    const addCategory = () => {
        console.log("in")
    }
    const edit = (Id) => {
        console.log(Id)
    }
</script>

<script src={{ asset('axios.min.js') }}></script>
<script>
    $('#category').on('submit', function(e) {
        e.preventDefault();
        axios.post(`${url}/admin/category`, new FormData(this)).then(function(response) {
            // handle success
            show_Toaster(response.data.message, response.data.type)
            if (response.data.type === 'success') {
                setTimeout(() => {
                    window.location.href = `${url}/admin/category`;
                }, 500);
            }
        }).catch(function(err) {
            show_Toaster(err.response.data.message, 'error')
        })
    });
</script>

</html>
