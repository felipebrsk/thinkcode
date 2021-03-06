# ThinkCode Courses Platform
 

Content Table
=================
<!--ts-->
   * [Technologies](#tecnologias)
   * [About](#Sobre)
   * [Features](#features)
   * [Installation](#instalacao)
   * [Status](#status)
   * [ScreenShots](#visao)
<!--te-->

<a name="tecnologias">**Tecnologies used**</a>
- Laravel 
- MySQL
- JavaScript - Alpine
- Blade - Tailwind

<a name="Sobre">**About**</a>
## The ThinkCode is a platform for online courses on programming (a personal project) developed in <a href="https://laravel.com/docs/8.x/">laravel</a>, blade and <a href="https://tailwindcss.com/docs">tailwind</a>. In addition to containing Alpine.Js properties.

<a name="features">**How it works**</a><br>
- Dashboard with skills and performance (average, average of students, how many students have on the platform, how many students have in each course etc)
- SearchBar with Livewire feature (request on the same page)
- Timeline and Profile view
- Notifications
- FAQ, Get in Touch and Mail sections
- Signature features
- Challenges and chapters for each course
- Time spent
- How many links, views and video time of each course
- Upload a picture to profile
- Voyager integration (http://127.0.0.1/admin/)


<a name="instalacao">**Installation**</a><br/>
- Clone the repository<br>
```
$ git clone https://github.com/felipebrsk/thinkcode
```
- Switch to the repo folder<br/>
```
$ cd thinkcode
```
- Install all the dependencies using composer<br>
```
$ composer install
```
- Install the npm dependencies<br/>
```
$ npm install && npm run dev
```
- Copy the example env file and make the required configuration changes in the .env file<br>
```
$ cp .env.example .env
```
- Generate a new application key<br/>
```
$ php artisan key:generate
```
- Run the database migrations (Set the database connection in .env before migrating)<br>
```
$ php artisan migrate
```
- Start the local development server<br/>
```
$ php artisan serve
```
- To give a admin permission, set<br/>
```
$ php artisan voyager:admin your@email.com
```
You can access in http://127.0.0.1:8000/
<br/>

<a name="status">**Status**</a>
<h4 align="left"> 
	????  ThinkCode Courses Platform - Developing...  ????
</h4>

<a name="visao">**ScreenShots**</a>
![WhatsApp Image 2021-03-07 at 19 41 16](https://user-images.githubusercontent.com/75860661/110257636-89889000-7f7d-11eb-9330-a284e6db81ab.jpeg)<br/>
![WhatsApp Image 2021-03-07 at 19 42 50](https://user-images.githubusercontent.com/75860661/110257669-b2108a00-7f7d-11eb-9864-0b4b27e6539c.jpeg)<br/>
![WhatsApp Image 2021-03-07 at 19 43 39](https://user-images.githubusercontent.com/75860661/110257673-b76dd480-7f7d-11eb-92d5-e4106b9251c7.jpeg)<br/>

# Additional note
The system requires a user account in the database, as routes are grouped with middleware due to working with session ids.
