
[![Maintainability](https://api.codeclimate.com/v1/badges/536ea8d54c0e931c59a6/maintainability)](https://codeclimate.com/github/HaskalSystems/flow-core/maintainability)

# FLOW
> The Next Generation ERP

FLOW is an Enterprise-Resource-Planner designed with efficiency, ease-of-use, and scalability. With FLOW, we hope that we can provide a better system to bring businesses online especially within the small-medium size businesses. The software is developed using Laravel as the backend and a modified Bootstrap 4 distribution for the frontendy styling.

## Installing / Getting started

To get started with FLOW, the following pre-requisites must be met:-

```shell
PHP7
MYSQL
Composer
NodeJS + NPM
```

Once those pre-requisites are met, you can clone the repository to your site's root directory.

```shell
FOR PRODUCTION
git clone https://github.com/haskalsystems/flow -b master

FOR DEVELOPMENT
git clone https://github.com/haskalsystems/flow -b develop
```

Once cloned, run the following commands in the cloned repo folder:

```shell
npm install
composer install
```

Then navigate to ```http://yourwebsite.com/install``` and follow the instructions.

## Developing

### Branch
The **[stable branch](https://github.com/haskalsystems/flow-core/tree/master)** is extensively tested by our QA team and makes a great starting point for learning the system or deploying one. We work hard to make releases stable and reliable, and aim to publish new releases every few months.

The **[master branch](https://github.com/haskalsystems/flow-core/tree/develop)** is updated with the latest cutting-edge stuff. We try to update it daily (though we often catch things that prevent us from doing so) and it's a good balance between getting the latest cool stuff and knowing most things work.

Other short-lived branches may pop-up from time to time as we develop new features, hotfixes, and stabilize releases.

## Licensing

FLOW is licensed using GPLv3. A copy of the License can be found [here](https://github.com/haskalsystems/flow-core/LICENSE.md)