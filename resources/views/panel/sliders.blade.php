@extends('panel.layouts.master')

@section('content')

<div class="container d-flex align-items-center justify-content-center min-vh-50">
    <div class="card form-card   shadow col-14 offset-2 mt-2 bg-dark text-white ">
        <div class="card-body ">
            <h3 class="card-title text-center mb-2"> بنرها  </h3>

             @if (session('create_slider'))
                 <section class="alert alert-success p-3">
                    <h4 class="text-center"> {{  session('create_slider') }}</h4>
                 </section>
             @endif
              @if (session('delete_slider'))
                 <section class="alert alert-danger p-3">
                    <h4 class="text-center"> {{  session('delete_slider') }}</h4>
                 </section>
             @endif
              @if (session('update_slider'))
                 <section class="alert alert-danger p-3">
                    <h4 class="text-center"> {{  session('update_slider') }}</h4>
                 </section>
             @endif



            <table class="table table-dark">
            <thead>
                <tr>

                <th scope="col">عنوان کوتاه </th>
                <th scope="col">عنوان </th>
                <th scope="col">توضیحات</th>
                <th scope="col">تصویر </th>
                <th scope="col">حذف </th>
                <th scope="col">ویرایش </th>


                </tr>

            </thead>

                 @forelse ($slider as $slide)
                      <tbody>
                <tr>

                <td>{{  $slide->header }}</td>
                <td> {{  $slide->title }} </td>
                <td>{{ $slide->description }}</td>
                <td>

                 <img src="{{ asset('/images/slider/'. $slide->image) }}" alt="image" width="50px" height="50px">
                </td>
                <td>

                     {!! Form::open(['route'=>['slider.destroy','id'=>$slide->id],'method'=>'delete']) !!}

                {!! Form::submit('حذف', ['class'=>'btn btn-danger']) !!}

             {!! Form::close() !!}



                </td>
                <td>
                {!! Form::open(['route'=>['slider.edit','id'=>$slide->id],'method'=>'get']) !!}

                {!! Form::submit('ویرایش', ['class'=>'btn btn-warning']) !!}

                {!! Form::close() !!}

                </td>

                </tr>
                </tbody>
                 @empty

                  @endforelse
                {{  $slider->links() }}


            </table>

            <a href="{{  route('slider.create')}}"  >
                    <button class="btn btn-primary  form-control">  افزودن بنر  </button>
                 </a>

        </div>
    </div>
</div>


@endsection()
