# Project 3

## Description
This project requires building a web application with a prebuilt framwork: Laravel. The web application contains 3 tools: XKCD password generator from Project 2, a new Lorem Ipsum Generator, and a new Random User Generator. All forms inlcude server side validation, but in some varying forms.

**URL** <http://p3.kushsdwa15.xyz/>
**DEMO** <https://youtu.be/PFhRBS5zY0Q> 

## Known Errors
 - https://validator.w3.org/ says that an <icon> tag cannot be placed within an <a> tag. However I'm not really using an icon, but more a specific unicode character as the hyperlink. Bootstrap has framework around it which actually creates a valid interaction. The house icon on my website is clickable.
 - It also says that action='' is not valid, but it does not provide a solution. After reseraching online, theres a trick that inside the form tag, I can set action="#" and then put '''<script>document.querySelector("form").setAttribute("action", "")</script>'''. Its a cheating hack but it pleases the validator. I tried setting it to $_SERVER["PHP_SELF"], but that errored out on me. But for this project, I feel that its not a vital error to fix. The functionality exists and I have included a **CSRF_TOKEN** so that should prevent Cross site scripting attacks. (Not like my website has any secure thing to protect)
 - There are some warning for empty header tags, but they are just empty until they are populated with data returned from a post. Idealy I think we move them inside validation checks so they only show up, if they are populated. But since they don't cause any functional or visual problems, I didn't go back to update this.

## Additional Design Details
 - I'm just keep 1 project that kind of builds on itself and in order to do so, I've built tabs. Now those tabs do navigate to different pages subdomains, but to the user the interaction percives to be all at the same website.
 - Testing this was slightly complex locally, and so I added domain specific checks in logic.php. You will see ```($_SERVER['SERVER_NAME'] == "p1.kushsdwa15.xyz")```
 - This, locally is configured to sample the different pages manually, but in production I replaced the URLs with the live ones.
 - This allows me to keep the same project and home and index, while having dynamic "title" and other fields.

## External Resources
 - Bootstrap <http://getbootstrap.com/>
 - Jquery <https://jquery.com/>
 - Lorem Ipsum Generator <https://github.com/Badcow/LoremIpsum>
 - Fake Data Generator <https://github.com/fzaninotto/Faker>
 - Laravel PHP Framework <https://laravel.com/>
