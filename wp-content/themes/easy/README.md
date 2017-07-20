# Easy Test
This is the easiest test. Please take your time.

# Steps

## Git
* Maybe [create](https://www.google.fr/url?sa=t&rct=j&q=&esrc=s&source=web&cd=4&cad=rja&uact=8&ved=0ahUKEwjxjo7U35jVAhWBD8AKHfnLAyQQFgg5MAM&url=https%3A%2F%2Fgithub.com%2Fjoin&usg=AFQjCNF6nezHQWX1hKwEFQVYRrUheS9_Ig) your Github Account
* [Fork](https://help.github.com/articles/fork-a-repo/) the project, then clone yours to work into
* Create a branch and name it as you want
* Try to make one commit and push it, then ask for contribution

## Environment
* Set up your environment with mamp, local by flywheel or whatever
* Edit the [wp-config.php file](https://codex.wordpress.org/Editing_wp-config.php) to add your DB credentials
* [Check](https://www.elegantthemes.com/blog/tips-tricks/how-to-fix-error-establishing-a-database-connection-in-wordpress) the DB connectivity, you could ask for assistance if it's really hard to set up
* Then, install WordPress and ask for checking

## Post Type
Create a post type with cpt ui ?

## Theme creation
* Add the [basic files](https://codex.wordpress.org/Theme_Development#Basic_Templates)
* Complete the style's [header](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/)
* Then, add the default files for the homepage, the post single and archive view. Please refer to the [template hierarchy](https://wphierarchy.com/)
* Try to activate your theme, then ask for checking

## Theme templating
* From the html folder ( `themes/easy/html/` ) you would have to carve and build the different templates, let's begin with the header and footer block.

### Header / Footer
* Header : localize the header part and isolate it inside header.php
* Footer : same for the footer block (footer.php)
* Go into homepage template and use header / footer wp functions
* Display should be the same from html's index and theme's homepage. Ask for checking.

#### Dynamization
Now your html has been splitted out, you must dynamize it, that means replacing all :
* relative urls into absolute urls
* same for image's source
* also apply to assets (css/javascript)
* so on ..
Do it on header and footer with [`get_stylesheet_directory_uri()`](https://codex.wordpress.org/Function_Reference/get_stylesheet_directory_uri), then ask for checking

### WP_Query
On homepage display the last 6 projects.
* Use the [wp_query](http://www.geekpress.fr/wp-query-creez-des-requetes-personnalisees-dans-vos-themes-wordpress/) to get the 6th last (date) projects
* Create a [loop](https://code.tutsplus.com/tutorials/a-beginners-guide-to-the-wordpress-loop--wp-20241) for display purpose
* Bonus, try to use a loop template foreach item with `get_template_part()` wp function
