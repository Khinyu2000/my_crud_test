<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8"></div>
                <h4 class="text-center mt-5"> Article Lists </h4>

                <div class="my-5">
                    @foreach($articles as $article)
                        <div class="card mb-3">
                            <div class="card-body">

                                <h4>{{ $article->title }}</h4>
                                <p>
                                    {{ Str::words($article->description,30) }}
                                </p>



                                <a href="{{ route('article.show',$article->id) }}" class="btn btn-primary">See More</a>
                                <a href="{{ route('article.edit',$article->id) }}" class="btn btn-outline-warning">Edit</a>

                                <form action="{{ route('article.destroy',$article->id) }}" class="d-inline-block" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Del</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
</body>
</html>
