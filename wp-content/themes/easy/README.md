# Easy Test
This is the easiest test. Please take your time, it's just for evaluating your level in order to mentor you the more beneficial way during your internship :)

## Git (if you can)
Before doing anything we need to have a copy of your answers. We use git to see how you can use it, name your commits, etc.
* Maybe [create](https://github.com/join) your Github Account
* [Fork](https://help.github.com/articles/fork-a-repo/) the project, then clone yours to work into
* Create a branch and name it as you want
* You could whatever software you want to ease the process : smartgit, git kraken, sourcetree, etc
* Try to make one commit and push it

# Dig into PHP

## Exercise
For the next questions write all your answers in the file `wp-content/themes/easy/php-exercice/answers.php`

Note that there will not be any "compilation" so it's not worth to make it work. A text file would be fine ! 

**Reminder : make as much commits as possible means one foreach answer, it's important.**

### Display
Try to echo these following cases :

* A string (whatever you want)
* A string with numbers
* A string with special characters
* Conditionally change the string with a true/false condition
* A concatenation of theses 3 different strings

### Loops
* Display all numbers between 1 and 10 (including 10) using a `while` loop
* Same as before but with a `for` loop
* Wrap the while loop inside a function and call it
* Write a function that take a parameter `$max` and display all values from 1 to `$max` using a `while` loop. Call it with a value of 20

### Arrays
Given this array `array(5, 12, 10, 21, 2, 6, 8, 20, 14, 9, 12)`

Write & wrap your code inside functions for the following cases :

* Display all the elements of the array
* Find the average value
* Find out how many values are equal or greater than 10
* Check if the value 20 is present in the array
* Get the greatest value of the array

# WordPress is your best Friend
You are done for the first part, now let's got to the WordPress part !
Before that ask for checking in order to see what has been done.

## Theme creation
* Add the [basic files](https://codex.wordpress.org/Theme_Development#Basic_Templates)
* Complete the style's [header](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/)
* Then, add the default files for the homepage, the post single and archive view. Please refer to the [template hierarchy](https://wphierarchy.com/)
* Activate your theme

## Theme templating
* From the html folder ( `themes/easy/html/` ) you would have to carve and build the different templates, let's begin with the header and footer block.

### Header / Footer
* Header : localize the header part and isolate it inside header.php
* Footer : same for the footer block (footer.php)
* Go into homepage template and use header / footer wp functions
* Display should be the same from html's index and theme's homepage

#### Dynamization
Now your html has been splitted out, you must dynamize it, that means replacing all :
* relative urls into absolute urls
* same for image's source
* also apply to assets (css/javascript)
* so on ..
Do it on header and footer with [`get_stylesheet_directory_uri()`](https://codex.wordpress.org/Function_Reference/get_stylesheet_directory_uri), then ask for checking

### WP_Query
On homepage display the last 6 news.
* Use the [wp_query](http://www.geekpress.fr/wp-query-creez-des-requetes-personnalisees-dans-vos-themes-wordpress/) to get the 6th last (date) news
* Create a [loop](https://code.tutsplus.com/tutorials/a-beginners-guide-to-the-wordpress-loop--wp-20241) for display purpose
* Try to use a loop template foreach item with `get_template_part()` wp function
