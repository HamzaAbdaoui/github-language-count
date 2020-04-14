# github-language-count
A simple REST API created to list the languages used by the 100 trending public repos on GitHub.

## Description
This project is a small REST API with a single route ```GET /languages```.

This route fetches the github API https://api.github.com/search/repositories to get the first trending 100 Github repositories. And after that, it counts the languages used by those repositories.

The output is :

```json
{
    "TypeScript": {
        "count": 9,
        "repos": [
            "facebookexperimental/rome",
            "benawad/destiny",
            "phuoc-ng/html-dom",
            "neherlab/covid19_scenarios",
            "anye931123/react-visual-editor",
            "blitz-js/blitz",
            "mathdroid/covid-19-api",
            "vsls-contrib/codetour",
            "afteracademy/nodejs-backend-architecture-typescript"
        ]
    },
    "JavaScript": {
        "count": 13,
        "repos": [
            "2019ncovmemory/nCovMemory",
            "jasonmayes/Real-Time-Person-Removal",
            "covid19india/covid19india-react",
            "NovelCOVID/API",
            "JAVClub/core",
            "AmruthPillai/Reactive-Resume",
            "ahmadawais/corona-cli",
            "someshkar/covid19india-cluster",
            "soroushchehresa/awesome-coronavirus",
            "subnub/myDrive",
            "sagarkarira/coronavirus-tracker-cli",
            "pomber/covid19",
            "alyssaxuu/animockup"
        ]
    }
}
```

## Requirements
This small API is developped using the [Symfony](https://symfony.com/4) framework.
So, to use this project locally, you must have these packages installed on your computer :
* PHP v >= 7.2
* Symfony v >= 4,
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
