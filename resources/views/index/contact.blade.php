@extends('layouts.app')

@section('content')
<section class="contact-page all-margin">
    <div class="container">
        <div class="row">

            <div class="col-6 main wow fadeInLeft">
                <!-- 显示成功消息 -->
                @if(session('success'))
                    <div class="alert alert-success text-center mb-3">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}" id="myForm">
                    @csrf <!-- Laravel CSRF 保护 -->
                    
                    <!-- Message textarea -->
                    <textarea id="message" name="message" placeholder="Message.." class="w-100 border-0 bg-green">{{ old('message') }}</textarea>
                    <!-- 显示错误信息 -->
                    @error('message')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="row mt-3 mb-5">
                        <div class="col-6">
                            <!-- Name input -->
                            <input type="text" id="name" name="name" placeholder="Your Name*" class="w-100 border-0 bg-green" value="{{ old('name') }}">
                            <!-- 显示错误信息 -->
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-6 mt-576-1-5">
                            <!-- Email input -->
                            <input type="email" id="userEmail" name="userEmail" placeholder="Your Email*" class="w-100 border-0 bg-green" value="{{ old('userEmail') }}">
                            <!-- 显示错误信息 -->
                            @error('userEmail')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-btn">
                        <button type="submit" class="btn text-uppercase rounded-0 border-0">Send message</button>
                    </div>
                </form>

            </div>

            <div class="col-6 main mt-768-2 ps-6 d-grid align-items-center wow fadeInRight">
                <div class="text">
                    <h3 class="text-uppercase mb-4">Our Stores</h3>
                    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius incididunt
                        ut labore et dolore magna aliqua.</p>
                    
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
