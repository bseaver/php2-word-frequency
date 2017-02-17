# Word Frequency with PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 Code Review, 2/17/2017

#### By Benjamin T. Seaver

## Description

This project demonstrates building an app using PHPUnit, Silex and Twig frameworks.

Determine how frequently a word appears in a given string. Count full word matches only without regex.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* To run PHPUnit tests from root > `vendor/bin/phpunit tests`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* Composer
* PHPUnit
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* Benjamin T. Seaver

## License
* MIT

## Specifications
1. Add PHPUnit dependency (composer.json, composer.lock, .gitignore)
2. Add Empty RepeatCounter class with countRepeats() method (src/RepeatCounter.php)
3. Iterate between:
   * Add tests (tests/RepeatCounterTest.php)
   * Enhance functionality (src/RepeatCounter.php)
   * Refactor as needed

* Ordered Test Plan:

| Phrase                   | Word       | Count | Reasoning                                  |
|--------------------------|------------|-------|--------------------------------------------|
| start                    | start      | 1     | Most basic and will fail first test        |
| Portland in the the fall | the        | 2     | Parse words on spaces                      |
| The dog doggerel lapdog  | dog        | 1     | Only whole words match                     |
| What now what then       | What       | 2     | Case does not matter                       |
| A dog-Dog? $DOG!! D{o}G  | dog        | 3     | Symbols other than a-z, 0-9 divide words   |
| Se7en is a TV station    | se7en      | 1     | We'll allow words with numbers in them     |
| Omaha 44 44left Hut!     | 44         | 1     | We'll treat numbers similarly to letters   |

4. Initial Silex, framework with "Hello" on home page (web/index.php, app/app.php)
5. Twig template on a home get route with a form to enter inputs (app/app.php, views/)
6. Twig template on a home post route to display results and enter new inputs (app/app.php, views/)

* End specifications
