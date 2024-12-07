
@extends('layouts.app')
@section('title', '首页')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-grid align-items-center">
                    <div class="d-flex justify-content-center">
                        <div class="d-flex border-0 border-1 border-bottom w-50">
                            <input type="text" id="searchInput" placeholder="Search ..." class="text-white form-control border-0 rounded-0">
                            <a href="#" class="icon px-4 py-3" id="searchButton">
                                <i class="fa-solid fa-magnifying-glass text-white fs-6"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- offcanvas -->

    

    <!-- banner -->

    

   

    

    <!-- collection -->

    <section class="chapter bg-green all-padding">
    <div class="container">
        <div class="text-center">
            <h3 class="text-uppercase">LATEST ARTICLES</h3>
        </div>
        <div class="row">
            @foreach($articles as $article)
                <div class="col-4 wow fadeInLeft">
                    <!-- 文章标题 -->
                    <h4>{{ $article->title }}</h4>
                    <!-- 文章内容预览，截取前 100 字 -->
                    <p class="mb-0">{{ Str::limit($article->content, 100) }}</p>
                    <!-- 阅读更多按钮 -->
                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary mt-3">Read more</a>
                </div>
            @endforeach
        </div>
       
    </div>
</section>


   

   

    <!-- order -->

    <section class="order">
        <div class="container">
            <div class="row wow fadeInUp">
                
            </div>
        </div>
    </section>

    <!-- footer -->

    @endsection