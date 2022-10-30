## Rock-Paper-Scissors CLI Game


This CLI program is built on the LARAVEL FRAMEWORK. The program is built on a multiplayer, i.e. human vs human or human vs computer. Only three possible input types are accepted (Rock, Paper and Scissors).
To play the game, users must follow the command prompt. The game's output is either a win, draw or lose, depending on the user's game choice.


## Repository Overview 

The repository contains source code on how to play the Rock-Paper-Scissors game. 

Specifications in the clone include

<li> The program reads users' I/O  and then displays results in the CLI. The console command file can be found within the console > commands directory with the name RockPaperScissors. </li> </br>

![Screenshot of read write operation via the CLI](https://github.com/LarrySul/rock-paper-scissiors-challenge/blob/feature/public/screenshots/process.png)

<li>To excute the command, users need to run the artisan command `php artisan rock-paper-scissors` in the CLI </li>

<li> Writing of errors to logfile </li>

<li> I/O validation </li>

![Screenshot of I/O process with validation](https://github.com/LarrySul/rock-paper-scissiors-challenge/blob/feature/public/screenshots/validation.png)

<li> Single CLI command to automate the read and write process with easy to read instructions </li>

<li> The project has a total of 4 test cases (3 Unit and 1 Feature) that executes in 0.06seconds. </li>

![Screenshot of test cases ](https://github.com/LarrySul/rock-paper-scissiors-challenge/blob/feature/public/screenshots/test.png)

<li> The project is also dockerized, pushed to dockerhub where it is available to be pulled </li>

![Screenshot of dockerized project ](https://github.com/LarrySul/rock-paper-scissiors-challenge/blob/feature/public/screenshots/docker.png)

## Requirements 

<li> Download <a href="https://www.php.net/downloads.php"> PHP V8.1 </a> and above. </li>

<li> Install <a href="https://getcomposer.org/download/"> Composer </a> </li>

<li> If you'll like to use docker you should <a href="https://www.docker.com/products/docker-desktop/" >download docker desktop </a> and pull the image </li>


## Game Explanation

Rock-Paper-Scissors involves the game elements and it's structured and the rules include

<li> Rock beats Scissors </li>

<li> Scissors beats Paper </li>

<li> Paper beats Rock </li>


## Steps to run locally 

<li> Clone this repository: </li>

<pre> git clone https://github.com/LarrySul/rock-paper-scissiors-challenge </pre> or pull image via docker

<pre>  docker pull olanrewaju1992/rock-paper-scissors:latest </pre>

<li> Install dependencies: </li>

<pre> composer install </pre>

<li> Open the CLI in preferred editor and run the command: </li>

<pre> php artisan rock-paper-scissors </pre>

Once the command is done you'll get a success message in the CLI :) </br>

![Screenshot of CLI process with output](https://github.com/LarrySul/rock-paper-scissiors-challenge/blob/feature/public/screenshots/rock-paper-scissors.png)




