@extends('panel.layouts.master')

@section('content')

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card form-card shadow col-8 offset-2 mt-4 bg-dark text-white">
        <div class="card-body  ">
            <h3 class="card-title text-center mb-4">  بنر ویرایش  </h3>


            {!! Form::model($slider,['route'=>['slider.update','id'=>$slider->id,'method'=>'put'],'files'=>true]) !!}


             <section class="d-block">
                     {!! Form::label('header','header') !!}
                     {!! Form::text('header',$slider->header, ['class'=>'form-control']) !!}
                </section>
                @error('title')
                     <p class="text-warning"> {{  $message }}</p>
                @enderror

                <section class="d-block">
                     {!! Form::label('title','title') !!}
                     {!! Form::text('title',$slider->title, ['class'=>'form-control']) !!}
                </section>
                @error('title')
                     <p class="text-warning"> {{  $message }}</p>
                @enderror

                <section class="d-block"></section>
                     {!! Form::label('description','description') !!}
                     {!! Form::textarea('description',$slider->description,  ['class'=>'form-control','style'=>'resize:none;hight:50px']) !!}
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
                <img src="{{ asset('images/slider/'.$slider->image) }}" alt="تصویر موجود نیست " width="80px" height="80px">



                  <section class="mt-2  d-block">

                     {!! Form::submit('ویرایش ',['class'=>'btn btn-primary form-control']) !!}
                </section>

            {!! Form::close() !!}

        </div>
    </div>
</div>


@endsection()
