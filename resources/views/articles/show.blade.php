@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->content }}</p>

        <div class="d-flex align-items-center mt-2">
            <form id="likeForm" action="{{ route('article.like', $article) }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-link" style="font-size: 24px; color: black; border: none; background: none;">
                    <i class="fas fa-heart"></i> <!-- 黑色心形图标 -->
                </button>
            </form>
            <span style="font-size: 18px; margin-left: 8px;" id="likeCount">Likes: {{ $article->likes_count }}</span>
        </div>

        <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-3">Back to Article List</a>
    </div>

    <!-- 使用 AJAX 提交 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // 当点击心形图标时，使用AJAX提交表单
            $('#likeForm').on('submit', function(event) {
                event.preventDefault(); // 阻止表单的默认提交行为
                var form = $(this);
                var formData = form.serialize();

                $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    // 更新点赞数
                    $('.like-count-{{ $article->id }}').text('Likes: ' + response.likes_count);

                    // 可以给用户显示一个点赞成功的提示
                    alert('You have liked the article!');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // 如果服务器返回错误，处理错误信息
                    if (jqXHR.status === 403) {
                        var errorMessage = jqXHR.responseJSON.error;
                        alert(errorMessage);  // 显示具体的错误信息
                    } else {
                        alert('Something went wrong. Please try again.');
                    }
                }
            });
            });
        });
    </script>
@endsection
