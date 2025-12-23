@extends('panel.layouts.master');

@section('content')

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card form-card shadow col-8 offset-2 mt-4 bg-dark text-white">
        <div class="card-body  ">
            <h3 class="card-title text-center mb-4"> SEO مدیریت  </h3>



            {!! Form::open(['route'=>'seo.store','method'=>'post']) !!}


                <section class="d-block">
                     {!! Form::label('title','title') !!}
                     {!! Form::text('title',old('title'), ['class'=>'form-control']) !!}
                </section>

                 <section class="mt-3 d-block">
                     {!! Form::label('author','author') !!}
                     {!! Form::text('author',old('author'), ['class'=>'form-control']) !!}
                </section>


                 <section class="mt-3 d-block">
                     {!! Form::label('keywords','keywords') !!}
                     {!! Form::textarea('keywords',old('keywords'), ['class'=>'form-control','style'=>'hight:50px']) !!}
                </section>


                 <section class="mt-3 d-block">
                     {!! Form::label('description','description') !!}
                     {!! Form::textarea('description',old('description'),  ['class'=>'form-control','style'=>'resize:none;hight:50px']) !!}
                </section>


                  <section class="mt-2  d-block">

                     {!! Form::submit('ثبت ',['class'=>'btn btn-success form-control']) !!}
                </section>

            {!! Form::close() !!}

        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
@endsection
