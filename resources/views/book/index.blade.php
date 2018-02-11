@extends('layouts.book')

@section('content')
    <header class="book-bg w-screen h-screen flex justify-center items-center flex-col">
        <div class="w-100">
            <h1 class="text-white m-0 mb-10 text-5xl font-landing text-center text-shadow-lighter">Finally a great
                chatbot starting point for your favourite coding language</h1>
        </div>
        <div class="mt-10 flex justify-center items-center flex-row">
            <div class="flex mb-4 w-100">
                <div class="w-1/2 text-center ">
                    <h3 class="mt-2 mb-2 book-yellow uppercase font-landing text-xl">NEW BOOK COMING SOON</h3>
                    <h2 class="mt-0 text-white font-landing text-4xl leading-normal">Building Chatbots <br/>with PHP
                    </h2>

                    <p class="text-white text-md mb-8 font-landing font-light leading-tight">Interested? Let me keep you up with the process of this book and be the first to grab a <b>FREE CHAPTER</b>.</p>

                    <form>
                        <div class="flex mb-4 shadow-md">
                            <div class="w-3/5">
                                <input class="shadow appearance-none bg-white border-0 w-full py-4 px-4 text-grey-dark font-landing text-lg"
                                       id="email"
                                       name="EMAIL" type="text" placeholder="Your E-Mail">
                            </div>
                            <div class="w-2/5 text-left">
                                <button class="bg-yellow hover:bg-yellow-darker text-black font-landing font-bold uppercase text-lg py-4 px-2 w-full"
                                        type="submit">
                                    Sounds good
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="w-1/2 flex justify-center items-center flex-col ml-4">
                    <img src="/images/book/book_v1.png"
                         width="400" alt="Build Chatbots in PHP book cover">
                </div>
            </div>
        </div>
        {{--<div class="w-100">--}}
            {{--<p class="text-white">Finally a great--}}
                {{--starting point for building chatbots in PHP</p>--}}
        {{--</div>--}}
    </header>
    {{--<div>--}}
    {{--<div class="flex mb-4 bg-white">--}}
    {{--<div class="w-1/3 bg-grey-light h-12"></div>--}}
    {{--<div class="w-1/3 bg-grey h-12"></div>--}}
    {{--<div class="w-1/3 bg-grey-light h-12"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection