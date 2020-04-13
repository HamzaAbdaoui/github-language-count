# github-language-count
A simple REST API created to list the languages used by the 100 trending public repos on GitHub.

## Description
This project is a small REST API with a single route ```GET /languages```.
This route fetches the github API https://api.github.com/search/repositories to get the first trending 100 Github repositories. And after that, it counts the languages used by those repositories.

The output is :

```json
---
```

## Requirements
This small API is developped using the [Symfony](https://symfony.com/4) framework.
So, to use this project locally, you must have these packages installed on your computer :
* Symfony >= 4,
* Composer,
* A web server.

## Installation
After cloning this repository, you need to install the project dependencies.
To do so, run the following command :
```bash
composer install
```

And you are done.

## Usage
As a Symfony project, you must start the web server by running the following command :
```bash
php bin/console server:run
```

Your application is now running and accessible on http://localhost/ (if you didn't create a virtual host).
