<div class="book-bg w-full flex justify-center items-center flex-col py-16 mb-32 relative p-2 md:p-8">
    <div class="w-4/5 sm:w-3/5 md:w-100">
        <h1 id="headline" class="text-white m-0 mb-10 text-3xl font-landing text-center text-shadow-lighter">Interested in more chatbot stuff?</h1>
    </div>
    <div class="md:mt-10 flex w-full justify-center items-center flex-row">
        <div class="flex flex-col flex-col-reverse md:flex-row mb-4 w-100 items-center">
            <div class="w-3/4 md:w-1/2 mb-8 text-center">
                <h3 class="mt-2 mb-2 book-yellow uppercase font-landing text-lg">NEW BOOK AND VIDEO COURSE OUT</h3>
                <h2 class="mt-0 text-white font-landing text-2xl leading-normal">Build Chatbots <br/>with PHP
                </h2>

                <p class="text-white text-md mb-8 font-landing font-light leading-tight">After 6 months of writing my first ebook and video course are <b>now out</b>! Follow the link below to the available packages in the store or subscribe to the newsletter to get a free sample chapter.</p>

                <a href="https://store.christoph-rumpel.com/" class="mb-4 block no-underline bg-yellow hover:bg-yellow-darker text-black font-landing font-bold uppercase text-sm md:text-lg py-4 px-2 w-full h-full">View Packages</a>

                <form action="https://app.convertkit.com/forms/878871/subscriptions"
                      method="post" id="book-form" name="mc-embedded-subscribe-form"
                      class="validate" target="_blank" novalidate>
                    <div class="flex mb-4 shadow-md">
                        <div class="w-3/5">
                            <input class="shadow appearance-none bg-white border-0 rounded-none w-full py-4 px-4 text-grey-dark font-landing text-xs md:text-sm"
                                   id="email"
                                   name="email_address" type="email" placeholder="Your E-Mail..." required>
                        </div>
                        <div class="w-2/5 text-left">
                            <button class="bg-yellow hover:bg-yellow-darker text-black font-landing font-bold uppercase text-xs md:text-sm py-4 px-2 w-full h-full"
                                    type="submit">
                                {{ $buttonText ?? 'Sounds good' }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="w-1/2 flex justify-center items-center flex-col ml-4">
                <img class="ml-8 w-64 md:w-64" src="/images/book/book_v1.png"
                     width="100" alt="Build Chatbots in PHP book cover">
            </div>
        </div>
    </div>
    <a href="https://christoph-rumpel.com/">
        <img class="gravatar"
             src="https://s.gravatar.com/avatar/14d39e65f615fd6dcb9dd44ea7f7995b?s=160" width="160"
             alt="Gravatar image of Christoph Rumpel">
    </a>
</div>