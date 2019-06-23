# About EducateMe

## Install

First run:

```composer install```

To get rid of the JavaScript and CSS run:

```npm install```

You can start the app with root in public folder (apache + php_mod or nginx + php_fpm)

To run the app first time setup database (create env file with artisan: ```artisan env```) and change database connection.

Next to generate tables run ```artisan migrate```

## Framework

Used Framework is _Laravel_ wiht the backend language _PHP_.

Used Script Languages is **JavaScript** with additional **jQuery Framework**.


## Structure

The overall structure is based on the **Model-View-Controller** Structure.

### Controller
Included are three main controller for various Controller Handling.

``AnimalController``: gets the needed Animal from the Database and checks if input is right

``HomeController``: Controlls views for _index_, _score_ and _unicorn.

``PracticeController``: Controlls views for _teach_, _practice_ and _test. Controlls the _save core_.


### Model

We use an **sqLite** Database.


``User``: Provides an interface to the users table.

``Animals``: Provides an interface to the animals table.

``Score``: Provides an interface to the scores table.

### View

``app.blade``: The blade that shows the layout of the page.

``home.blade``: Initial view when logged in.

``practice.blade``: The blade where practice is possible. Includes a picture of an animal
inside a Bootstrap card, that adjusts to the width of the animal. There is an input field where the name
of the animal can be put. Whether it is correct or incorrect, an alert message appears.

``score.blade``: Shows the achieved scores in a Bootstrap table.

``teach.blade``: On this blade study of the animals is possible. 

``test.blade``: This blade queries the learnt animals. At the end there is firework.

``unicorn.blade``: An additional blade solely for the matter of psychological consolation.