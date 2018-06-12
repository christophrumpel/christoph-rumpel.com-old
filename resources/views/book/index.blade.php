@extends('layouts.book')

@section('content')

    @include('partials.book-header')

    <div>
        <div class="flex flex-col items-center mt-4 bg-white mt-12 relative">
            <div class="w-4/6 mb-12 bg-grey text-center">
                <h2 class="italic font-landing mt-0 text-3xl text-center w-5/6 md:w-100 m-auto">"Benefit from my
                    experience and let me teach you everything you need to know to build chatbots in PHP"</h2>
            </div>
            <div class="flex mt-4 mb-4 justify-center">
                <div class="w-4/5 md:w-100 font-landing text-grey-darkest text-lg">
                    <h2 class="mt-8 mb-4 font-bold font-landing text-4xl">Hi, I am Christoph 👋 </h2>
                    <p class="mb-4">I'm a chatbot developer and speaker from Vienna. For the last two years, I’ve been
                        working hard to deepen my knowledge in programming chatbots and helping others to do as well.
                        I’ve been building several chatbots for small and big companies as well as for group chats with
                        my friends and personal ones for myself. I’ve gathered a ton of experience with different
                        messenger APIs while integrating bots in Facebook Messenger, Slack, Telegram or on websites with
                        custom solutions.</p>
                    <p class="mb-4">I used my favourite programming language PHP for these projects. Yes, that's
                        possible. <b>No need to learn another language like NodeJS.</b> PHP's got you covered!</p>
                    <p class="mb-4">When I started building chatbots in 2016 there wasn't a single tutorial available on
                        how to do that with PHP. The only way of learning how to do so was by trial and error, but I
                        made it through! Now, two years later, you will find some blog posts on the subject, but still
                        not much. With this book, I want to change that and give everyone <b>the perfect starting point
                            for building chatbots with PHP.</b></p>


                    <h2 class="mt-10 mb-4 font-bold font-landing text-4xl">Table of Content 📕</h2>
                    <ul class="mb-4">
                        <li class="mb-2 md:ml-4">Introduction</li>
                        <li class="mb-2 md:ml-4">Chatbot Basics</li>
                        <li class="mb-2 md:ml-4">The Rise of Chatbots</li>
                        <li class="mb-2 md:ml-4">Why PHP Is A Perfect Fit For Chatbots</li>
                        <li class="mb-2 md:ml-4">Build Your First Chatbot in Plain PHP</li>
                        <li class="mb-2 md:ml-4">Chatbot Frameworks</li>
                        <li class="mb-2 md:ml-4">Chatbots and the GDPR</li>
                        <li class="mb-2 md:ml-4">Let’s Build A Secret Multi-Platform Chatbot with BotMan</li>
                        <li class="mb-2 md:ml-4">Next Steps And Tools</li>
                    </ul>
                    <h2 class="mt-10 mb-4 font-bold font-landing text-4xl">Who this book is for 🤔</h2>
                    <p class="mb-4">You are the right person for this book if you...</p>
                    <ul>
                        <li class="mb-2 md:ml-4">want to learn more about chatbots</li>
                        <li class="mb-2 md:ml-4">you're a PHP developer and want to build a chatbot</li>
                        <li class="mb-2 md:ml-4">are interested in how to setup up a chatbot project from scratch</li>
                        <li class="mb-2 md:ml-4">like to level up as a chatbot developer</li>
                        <li class="mb-2 md:ml-4">want to innovate your company's or client's services</li>
                        <li class="mb-2 md:ml-4">you want to contribute to the future of conversational interfaces</li>
                    </ul>

                    <h2 class="mt-10 mb-4 font-bold font-landing text-4xl">When will it be released? 🎉</h2>
                    <p class="mb-4">The book will be released on the 12th of July.</p>

                    <h2 class="mt-10 mb-4 font-bold font-landing text-4xl">Subscribe to my mailing list 💌</h2>
                    <p class="mb-4">Have I caught your attention? Perfect! Sign up and...</p>
                    <ul>
                        <li class="mb-2 md:ml-4">You get the first Chapter for FREE</li>
                        <li class="mb-2 md:ml-4">I will notify you about news on the book</li>
                        <li class="mb-2 md:ml-4">You will get a discount at the release</li>
                    </ul>
                </div>
            </div>
            <div class="my-12 w-4/5 md:w-100">
                @include('partials.book-form', ['buttonText' => 'Sign me up'])
            </div>
            <footer class="mt-8 p-8 mb-0 text-center w-full">
                <p class="font-landing text-lg mb-2">More information coming soon!</p>
                <p class="font-landing text-sm">&copy; Christoph Rumpel {{ date('Y') }}
                    - <a class="text-grey-darkest" href="https://christoph-rumpel.com">Blog</a>
                    | <a class="text-grey-darkest" href="https://twitter.com/christophrumpel">Twitter</a>
                    | <a class="text-grey-darkest"
                         href="https://github.com/christophrumpel/christoph-rumpel.com">GitHub</a>
                    | <a class="text-grey-darkest"
                         href="https://christoph-rumpel.com/privacy-policy">Privacy Policy</a>
                </p>
            </footer>
        </div>
    </div>
    <div class="fb-customerchat"
         page_id="224390314790045"
         ref="landingpage"
         theme_color="#02a3f4"
         logged_in_greeting="Do you prefer book updates via Facebook Messenger?"
         logged_out_greeting="Do you prefer book updates via Facebook Messenger?">
    </div>
@endsection