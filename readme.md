# My Personal Blog

![Screenshot of the new blog](https://christoph-rumpel.com/images/blog/cr18_new_home.png)

## Intro
 This is the code of my new personal blog [christoph-rumpel.com](https://christoph-rumpel.com). I wrote a huge [blog article](https://christoph-rumpel.com/2018/01/how-i-redesigned-my-blog-and-moved-it-from-jekyll-to-laravel) where I described the whole redesign process, the tools I've used and how it was inspired by [Sebastian De Deyne](https://sebastiandedeyne.com).
 
 Feel free to use the code to play around with the stack and to see how it is implemented. You can also create your own blog of it, that is totally fine. But: **Please do not use any of my articles and my design!**
 
 ## Installation
 
 To install the blog clone the repository first.
 ``` bash
git clone git@github.com:christophrumpel/christoph-rumpel.com.git
 ```
Then switch to the new project directory and load the Composer dependencies.
 ``` bash
composer install
 ```
Next you need to install the NPM dependencies.
 ``` bash
npm install
 ```
And finally we need to run Laravel Mix in order to compile the assets.
``` bash
npm run dev
```

Now you should be able to visit the site and to see my blog. Of course you need to have a local environment setup already.

## Good to know

The blog articles get cached with the first request. So in order to see a change, you need to delete the cache:
``` bash
php artisan cache:clear
```

## Say thank you

If you like this project please ⭐️ this repository here on GitHub and [subscribe](http://eepurl.com/dixWGT) to my Blog Newsletter so that we can stay in touch. 🙂
