@extends('layouts.book')

@section('content')
    <header class="book-bg w-screen h-screen flex justify-center items-center flex-col relative p-10">
        <div class="w-100">
            <h1 class="text-white m-0 mb-10 text-5xl">Finally a starting point for building chatbots in PHP.</h1>
        </div>
        <div class="mt-10 flex justify-center items-center flex-row">
            <div class="flex mb-4 w-100">
                <div class="w-1/2 text-center ">
                    <h3 class="mt-2 mb-4 book-yellow uppercase text-xl">Get my new e-book</h3>
                    <h2 class="mt-0 text-white text-3xl">Building Chatbot <br />with PHP</h2>

                    <p class="text-white mb-8 font-serif">Interested? Let me keep you up to date with the process of
                        this book.</p>

                    <form>
                        <div class="flex mb-4">
                            <div class="w-3/5">
                                <input class="shadow appearance-none bg-white border-0 w-full py-2 px-4 text-grey-dark"
                                       id="email"
                                       name="EMAIL" type="text" placeholder="Your E-Mail">
                            </div>
                            <div class="w-2/5 text-left">
                                <button class="bg-yellow hover:bg-yellow-darker text-black font-bold py-2 px-4 w-full"
                                        type="submit">
                                    Sounds good
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="w-1/2 flex justify-center items-center flex-col ml-4">
                    <img src="https://synergemarketing.com/wp-content/uploads/ebook-design-success-thumbnail.png"
                         width="300" height="300" alt="Build Chatbots in PHP book cover">
                    <button type="button" class="bg-cyan py-4 px-4 text-black uppercase">Download free chapter</button>
                </div>
                <div class='icon-scroll'></div>
            </div>
        </div>
    </header>
    <div>
        <div class="flex mb-4 bg-white">
            <div class="w-1/3 bg-grey-light h-12"></div>
            <div class="w-1/3 bg-grey h-12"></div>
            <div class="w-1/3 bg-grey-light h-12"></div>
        </div>
    </div>
@endsection