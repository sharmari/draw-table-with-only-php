# draw-table-with-only-php
dynamic table in core php - no html

Below is a simple task which you need to implement before we finilize things. Some guidelines for the task:

1. Do not use any third party library for the implementation. Use only core PHP.
2. We love documentation. So document your code liberally.
3. Mention which coding format you are using, and stick to it.
4. Surprise us with Unit testing (not required, but we like good surprises).

We have provided you the data for final 8 teams that participated in FIFA World Cup 2014. The data is in an array as below:

```
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
```

Write a program to display the data in tabular format (no html tables please)
