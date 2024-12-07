@extends('layouts.app')

@section('content')


<section class="about-page all-margin">
        <div class="container">
            <div class="text text-center wow fadeInUp">
                <h3 class="text-uppercase mb-3">{{ $about->title }}</h3>
                <h4 class="text-capitalize color"></h4>
                {!! $about->content !!}
            </div>
          
        </div>
    </section>
@endsection
