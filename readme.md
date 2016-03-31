# Project 3

## Description
This project requires building a web application with a prebuilt framwork: Laravel. The web application contains 3 tools: XKCD password generator from Project 2, a new Lorem Ipsum Generator, and a new Random User Generator. All forms inlcude server side validation, but in some varying forms.

**URL** <http://p3.kushsdwa15.xyz/>
**DEMO** <https://youtu.be/gbkBJctKmaw> 

## Known Errors
 - https://validator.w3.org/ says that an <icon> tag cannot be placed within an <a> tag. However I'm not really using an icon, but more a specific unicode character as the hyperlink. Bootstrap has framework around it which actually creates a valid interaction. The house icon on my website is clickable.
 - It also says that action='' is not valid, but it does not provide a solution. After reseraching online, theres a trick that inside the form tag, I can set action="#" and then put ```<script>document.querySelector("form").setAttribute("action", "")</script>```. Its a cheating hack but it pleases the validator. I tried setting it to $_SERVER["PHP_SELF"], but that errored out on me. But for this project, I feel that its not a vital error to fix. The functionality exists and I have included a **CSRF_TOKEN** so that should prevent Cross site scripting attacks. (Not like my website has any secure thing to protect)
 - There are some warning for empty header tags, but they are just empty until they are populated with data returned from a post. Idealy I think we move them inside validation checks so they only show up, if they are populated. But since they don't cause any functional or visual problems, I didn't go back to update this.

## Additional Design Details
 - I liked my tab design that I had since project 1 and 2 so I continued with that in my master and in each custom page's js I toggled the the active tab as a user navigates through. This keeps the user's experiance consistant throughout my webpages
 - I added the XKCD Password generator to this website since it felt like it belonged here as a developer tool. Could be used to create passwords for the Random Users your generate. However I kept most of the code the same.
 - The Lorem Ipsum Generator uses a mix of the old style of form and validation and some of the newer tricks we learned.
 - The Random User Generator uses most of the new stuff except the blade form generation. I was having too many errors configuring it the way I wanted to and have it look semi-pretty with bootstrap.

## External Resources
 - Bootstrap <http://getbootstrap.com/>
 - Jquery <https://jquery.com/>
 - Lorem Ipsum Generator <https://github.com/Badcow/LoremIpsum>
 - Fake Data Generator <https://github.com/fzaninotto/Faker>
 - Laravel PHP Framework <https://laravel.com/>
