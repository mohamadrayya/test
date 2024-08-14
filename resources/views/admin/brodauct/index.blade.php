@extends('admin.layout')

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
    @if (session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center">Add New brodact</div>
        <div class="card-body">
            <a class="btn btn-secondary" href="{{ url('/brodact/create') }}">اضافة منتجة</a>
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>الصورة</th>
                        <th>العنوان</th>
                        <th>الكاتب</th>
                        <th>Actions</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ()
                        <tr>
                            {{-- <td></td> --}}
                            <td>
                                @if ($blog_with_author->image == null)
                                    No Image
                                @else
                                    <img src="" style="width: 150px">
                                @endif

                            </td>
                            <td>{{  }}</td>
                            <td>
                                    {{  }}
                            </td>
                            <td>
                                

                                   

                                   


                                    <button type="submit" class="btn btn-danger mx-2"><i
                                            class="fa-solid fa-trash mx-2"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>

        </div>
    </div>



    <script>
        let table = new DataTable('#myTable', {
            "pageLength": 4
        });
    </script>
@endsection
