@extends('panel.layouts.master')

@section('content')

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card form-card shadow col-8 offset-2 mt-4 bg-dark text-white">
        <div class="card-body  ">
            <h3 class="card-title text-center mb-4">  بنر افزودن  </h3>

             @if (session('create_slider'))
                 <section class="alert alert-success p-3">
                    <h4 class="text-center"> {{  session('create_slider') }}</h4>
                 </section>
             @endif

            {!! Form::open(['route'=>'slider.store','method'=>'post','files'=>true]) !!}


             <section class="d-block">
                     {!! Form::label('header','header') !!}
                     {!! Form::text('header',old('header'), ['class'=>'form-control']) !!}
                </section>
                @error('title')
                     <p class="text-warning"> {{  $message }}</p>
                @enderror

                <section class="d-block">
                     {!! Form::label('title','title') !!}
                     {!! Form::text('title',old('title'), ['class'=>'form-control']) !!}
                </section>
                @error('title')
                     <p class="text-warning"> {{  $message }}</p>
                @enderror

                <section class="d-block"></section>
                     {!! Form::label('description','description') !!}
                     {!! Form::textarea('description',old('description'),  ['class'=>'form-control','style'=>'resize:none;hight:50px']) !!}
                </section>
                @error('description')
                     <p class="text-warning"> {{  $message }}</p>
                @enderror

                 <section class="mt-3 d-block">
                 {!! Form::label('image','image') !!}
                 {!! Form::file('image',['class'=>'form-controll mb-2']) !!}
                 </section>
                 @error('image')
                     <p class="text-warning"> {{  $message }}</p>
                @enderror



                  <section class="mt-2  d-block">

                     {!! Form::submit('ثبت ',['class'=>'btn btn-success form-control']) !!}
                </section>

            {!! Form::close() !!}

        </div>
    </div>
</div>


@endsection()
