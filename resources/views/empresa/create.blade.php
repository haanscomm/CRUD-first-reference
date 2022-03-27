<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <style type="text/css">

        .abs-center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .form {
            width: 450px;
        }

    </style>



    <title>Crear nuevo usuario</title>
</head>

<body>


    <div class="container">
        <div class="abs-center">

            <form action="{{ url('/empresa')}}" method="post" enctype="multipart/form-data" class="boder p-3 form">
                @csrf
                <h1> Creación de Usuario </h1>
                <br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Surname">Surname</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Your surname">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Password">Choose your password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="company_id">Company_id</label>
                        <select class="form-control myinputs" name="company_id" id="company_id" required>
                            @foreach ($company_id as $company_id)
                            <option value="{{ $company_id->id }}"> {{ $company_id->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="role_id">Role_id</label>
                        <select class="form-control myinputs" name="role_id" id="role_id" required>
                            @foreach ($role1 as $role1)
                            <option value="{{ $role1->id}}"> {{ $role1->name }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="Image">Profile image</label>
                        <input type="file" name="profile_image" id="profile_image" />
                    </div>


                </div>

                <button type="submit" class="btn btn-primary" id="enviar">Sign in</button>
        </div>

        </form>

    </div>
    </div>


</body>

</html>
