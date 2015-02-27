# php-inaniceway
Working example of using phing / phinx and other cool PHP tools in a nice/sane way. Right now its in pre alpha mode.

# why
If you will try to develop some complex project in a predictable fashion you will probably end up with necessity of using some db schema migration tool, fixture generation and deployment scripts. For a long time I was trying to come up with some easy way to automate those tasks - but i could not and probably never will. Each tool has some specific way of installation, configuration and using instructions that you have to learn and remember -  all of which can be overwhelming during a day to day work. I think it would be great to have some starting point for a new projects. Originally a came up with this idea during making project based on minimalistic Silex framework.

# what it contains
This sample project will contain some boilerplate phing tasks and scripts that will let you focus on programming instead of glueing together different scripts. Phing is a tool for automating tasks that programmer would have to otherwise do manually. Phinx is a tool for managing schema of your DB. I dont want this project to be specific for any framework - it should be as barebone as possible.

# used tools
1. Phing (automation tool) 
2. Phinx (db schema migration tool)
3. Composer (dependecies management, autoloading)
4. Faker - library for generating random data
