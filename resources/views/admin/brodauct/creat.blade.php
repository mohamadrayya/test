@extends('admin.layout')

@section('cssAndJs')
    <link rel="stylesheet" href="{{ asset('filepond/filepond.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script src="{{ asset('filepond/filepond.min.js') }}"></script>
@endsection

@section('main')
    @if ($errors->any())
        <ol>
            @foreach ($errors->all() as $error)
                <li style="color: red;font-size: 28px">{{ $error }}</li>
            @endforeach
        </ol>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('brodact.store') }}" method="post" enctype="multipart/form-data" id="form_post">
        @csrf
        <div class="card">
            <div class="card-header text-center bg-secondary text-white">
                <h5>Add New Brodact</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Brodact name</label>
                    <input type="text" class="form-control" name="brodact_name" id="brodact_name">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Brodact Content</label>
                    <input class="form-control" name="brodact_company" id="brodact_company" >
                    <div class="mb-3">
                    </div>
                </div>

                <div id="editor">
                </div>


                <div class="mb-3">
                    <label for="resoureceName" class="form-label">Categories</label>
                    <select id="categories" name="	category_id" multiple autocomplete="on">
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Blog Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-secondary w-50">Send</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        const inputElement = document.querySelector('input[id="image"]');
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server: {
                url: '{{ route('dashboard.upload.blogs') }}',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }

        });

        new TomSelect("#categories", {
            maxItems: 6
        });

        // ----------- Quill Editor Code ----------- //
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
        
        quill.on('text-change', function() {
            var content = quill.root.innerHTML;
            document.querySelector('#content').value = content;
        });
        
        // عندما يتم تقديم النموذج  
        document.querySelector('form_post').onsubmit = function() {
            // تأكد من تحديث الحقل المخفي بمحتوى محرر Quill  
            var content = quill.root.innerHTML;
            document.querySelector('#content').value = content;
        };
        // ------------------------------------------ //
    </script>
@endsection
