<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>snapmail</title>
</head>
<body>

<section class="container py-5">
    <div class="justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card border-info">
                <div class="card-header bg-info text-white">SNAPMAIL</div>
                <div class="card-body">
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        {{ Form::open(array('url' => '/create')) }}
                        @csrf
                        <div class="form-group ">
                            {{ Form::label('email', 'Your email') }}
                            <div class="col-md-12">
                                {{ Form::email('email', null, array('placeholder' => 'Enter your email', 'id' => 'email', 'class' => 'form-control rounded')) }}
                            </div>
                        </div>
                        <div class="form-group ">
                            {{ Form::label('textarea', 'Write an awesome message') }}
                            <div class="col-md-12">
                                {{ Form::textarea('textarea', null, array('placeholder' => 'Enter your message', 'id' => 'message', 'class' => 'form-control rounded', 'rows' => 3)) }}
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="mx-auto">
                                {{ Form::submit('Send', array('class' => 'btn btn-info btn-sm px-4')) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>