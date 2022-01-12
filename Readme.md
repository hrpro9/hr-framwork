Here is the file layout:


example.com
├── composer.json
├── composer.lock
├── src
│   ├── app.php
│   └── Simplex
│       └── Framework.php
│   └── Calendar
│       └── Controller
│       │   └── LeapYearController.php
│       └── Model
│           └── LeapYear.php
├── vendor
│   └── autoload.php
└── web
    └── front.php


That's it! Our application has now four different layers and each of them has a well-defined goal:

web/front.php: The front controller; the only exposed PHP code that makes the interface with the client (it gets the Request and sends the Response) and provides the boiler-plate code to initialize the framework and our application;

src/Simplex: The reusable framework code that abstracts the handling of incoming Requests (by the way, it makes your controllers/templates better testable -- more about that later on);

src/Calendar: Our application specific code (the controllers and the model);

src/app.php: The application configuration/framework customization.