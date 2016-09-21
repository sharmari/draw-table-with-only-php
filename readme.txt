###### Requirements #

Provided the data for final 8 teams that participated in FIFA World Cup 2014. The data is in an array as below:

array(
    array(
        'Country' => 'Brazil',
        'Color' => 'Yellow',
        'Captain' => 'Thiago Silva',
        'Coach' => 'Luiz Felipe Scolari'
    ),
    array(
        'Country' => 'Columbia',
        'Captain' => 'Mario Yepes',
        'Coach' => 'Jose Pekerman',
        'Color' => 'Yellow'
    ),
    array(
        'Captain' => 'Hugo Lloris',
        'Coach' => 'Didier Deschamps',
        'Country' => 'France',
        'Color' => 'Blue',
    ),
    array(
        'Color' => 'White',
        'Country' => 'Germany',
        'Captain' => 'Philipp Lahm',
        'Coach' => 'Joachim Low',
    ),
    array(
        'Captain' => 'Robin van Persie',
        'Coach' => 'Guus Hiddink',
        'Country' => 'Netherlands',
        'Color' => 'Orange',
    ),
    array(
        'Country' => 'Costa Rica',
        'Captain' => 'Bryan Ruiz',
        'Coach' => 'Jorge Luis Pinto',
        'Color' => 'Red'
    ),
    array(
        'Country' => 'Argentina',
        'Color' => 'Blue',
        'Captain' => 'Lionel Messi',
        'Coach' => 'Alejandro Sabella'
    ),
    array(
        'Captain' => 'Vincent Kompany',
        'Coach' => 'Marc Wilmots',
        'Country' => 'Belgium',
        'Color' => 'Red',
    ),
);


## Need a program to display the data in tabular format (no html tables please). You can see the output we are looking for here:

http://murvo.com/table_test/output.php

+-------------+---------+-------------------+---------------------+
|   Country   |  Color  |      Captain      |        Coach        |
+-------------+---------+-------------------+---------------------+
| Brazil      | Yellow  | Thiago Silva      | Luiz Felipe Scolari |
| Columbia    | Yellow  | Mario Yepes       | Jose Pekerman       |
| France      | Blue    | Hugo Lloris       | Didier Deschamps    |
| Germany     | White   | Philipp Lahm      | Joachim Low         |
| Netherlands | Orange  | Robin van Persie  | Guus Hiddink        |
| Costa Rica  | Red     | Bryan Ruiz        | Jorge Luis Pinto    |
| Argentina   | Blue    | Lionel Messi      | Alejandro Sabella   |
| Belgium     | Red     | Vincent Kompany   | Marc Wilmots        |
+-------------+---------+-------------------+---------------------+

## Additional points will be provided if you can color code the color column based on the color key value of the array.

#####################

### Task breakup ###

1. Create a handler/controller which will recieve the array of final n number of teams with same attributes

2. Its assumed that all the attributes are mandate for each team.

3. The handler class contains a handle::createTable(array $arrTeamDetails) function which is responsible to draw the desired table

4. Create a model named "drawingAssistant" which will consist of some core drawing fucntions to assist drawing of the the table.

use constants for '+', '|', '-'

6. Unit testing

#### Implementation ###

1. To run the program : configure the project "murvo" in your workspace and then route http://localhost/murvo/service/handleDrawing.php
will create the table for you;

2. you may provide other array structure with more or lesser fields too for being displayed in same tabular format
Refer handleDrawing.php for more

#### Coding standard ###

FIG Standards followed

Variable names:
    Prefixed using hungarian notation EG string is sNme, integer is iValue
    Use arr as the prefix when the property type is an array
    Use obj as the prefix when the property type is an object

Will be too descriptive to explain here; so advisable to observe code for the coding standard overall.
    




