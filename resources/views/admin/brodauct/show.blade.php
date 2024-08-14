<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Post - Start Bootstrap Template</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <article>
                    <header class="mb-4">
                        <h1 class="fw-bolder mb-1">Welcome to Brodact {{ $bro->brodact_nam }}</h1>
                        <div class="text-muted fst-italic mb-2">Posted on {{ $blog->created_at }}</div>
                    </header>

                    <div class="text-muted fst-italic mb-2">Image Of Brodact </div>
                    <figure class="mb-4"><img src="  $bro->image) }}"
                            style="width: 600px"></figure>
                    <div class="card mb-4">
                        <div class="card-header">Blog Content</div>
                        <div class="card-body">
                            <li><a>{{ $bro->brodact_company }}</a></li>
                        </div>
                </article>

            </div>


            
              


</body>

</html>
