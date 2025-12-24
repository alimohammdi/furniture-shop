@extends('panel.layouts.master');

@section('content')

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card form-card shadow col-8 offset-2 mt-2 bg-dark text-white ">
        <div class="card-body ">
            <h3 class="card-title text-center mb-2"> SEO نمایش  </h3>

             @if (session('delete-seo'))
                 <section class="alert alert-danger p-3">
                    <h4 class="text-center"> {{  session('delete-seo') }}</h4>
                 </section>
             @endif
             @if (session('create-seo'))
                 <section class="alert alert-success p-3">
                    <h4 class="text-center"> {{  session('create-seo') }}</h4>
                 </section>
             @endif


            <table class="table table-dark">
            <thead>
                <tr>

                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">keywords</th>
                <th scope="col">description</th>
                <th scope="col">description</th>


                </tr>

            </thead>

            @forelse ($seo as $item)
                 <tbody>
                <tr>

                <td>{{  $item->title }}</td>
                <td>{{  $item->author }}</td>
                <td>{{  $item->keywords }}</td>
                <td>{{  $item->description }}</td>
                <td>
                 
                 {!! Form::open(['route'=>['seo.destroy','id'=>$item->id],'method'=>'delete']) !!}
                 {!! Form::submit('حذف', ['class'=>'btn btn-danger']) !!}
                 {!! Form::close() !!}

                </td>
                </tr>
            </tbody>
            @empty

            @endforelse

            </table>

            <a href="{{  route('seo.create')}}"  >
                    <button class="btn btn-primary  form-control"> Seo افزودن  </button>
                 </a>

        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
@endsection
