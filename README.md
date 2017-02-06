Simple API game - Developer VS Project
========================

Simple real game :) Developer VS Project.

First you need load fixtures with developer skills.

Then you can create new developer and attach skills to him. On this skills you have 2 strategies
for start level calculation (random or skills strategy).

After this you need to create project with name, level (1-easy, 2 - medium, 3-hard), experience points (depends on this points and project level developer can finish project or not),
price and days.

After this you need call /fight/project api points with parameters and you will see result, who wins. Developer or Project.

I think that from this bundle you can understand how i'm writing code :)

Description
--------------

I developed on PHP 7.0. But i didn't use scalar type hinting and another cool things from php 7.0. So it's must work on another versions if you have PHP >= 5.5.9

What's inside?
--------------

ApiGameBundle:
 * 4 controllers, with APIDoc annotations. Controllers extended from FOSRestController. ApiDoc available by http://base_url/api/doc
 * DataFixtures for test and for initialization.
 * Form validation realized in validation.yml. I decide to use yaml for validations.
 * Routing also defined in yaml, because i don't like when annotations is very big.
 * In Utils folder you can find simple services. One service calcucate start developer level which depends on skills or you can choose random strategy. If you want to use random you need change parameter in service. Strategy pattern used for this.
 * Also you can find FightService. Very simple to change if you decide to improve another login for fighting.
 * In /tests folder you can find functional tests.

Future improvements
--------------

 * API authorization. Sorry that this task without this function, i had not so much time for all functionality which was described in task.
 * JMSSerializer for some entities if we want to use groups or another cool things.
 * Add more tests
 * Docker config for environment
 * Group roles for different API methods and etc..
 * Change strategy with dynamic parameter (you don't need to change this argument in services.yml)


