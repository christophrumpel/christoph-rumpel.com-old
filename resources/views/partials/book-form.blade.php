<form action="https://app.convertkit.com/forms/878871/subscriptions"
      method="post" id="book-form" name="mc-embedded-subscribe-form"
      class="validate" target="_blank">
    <div class="flex mb-4 shadow-md">
        <div class="w-3/5">
            <input class="shadow appearance-none bg-white border-0 rounded-none w-full py-4 px-4 text-grey-dark font-landing text-sm md:text-lg"
                   id="email"
                   name="email_address" type="email" placeholder="Your E-Mail..." required>
        </div>
        <div class="w-2/5 text-left">
            <button class="bg-yellow hover:bg-yellow-darker text-black font-landing font-bold uppercase text-sm md:text-lg py-4 px-2 w-full h-full"
                    type="submit">
               {{ $buttonText ?? 'Sounds good' }}
            </button>
        </div>
    </div>
</form>