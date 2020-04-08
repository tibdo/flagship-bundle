# Flagship Symfony bundle
> Non-official ABTasty Flagship.io Symfony bundle

* Flagship.io official documentation:  
  http://developers.flagship.io/api/v1/

## Introduction
This is a wrapper for the library [Flagship PHP SDK](https://wcomnisky.github.io/flagship-php-sdk/), so it can be used easily in symfony context

## Installation
1. Create a file named tidbo_flagship.yaml in config/packages directory of the symfony application with the content
```
tidbo_flagship:
    baseUrl: "flagship_baseUrl"
    environmentId: "your_environmentId"
```
you can specify the timeout like this:
```
tidbo_flagship:
    ...
    options: 
        # timeout of 1 s
        timeout: 1
```
### USE
You can use the bundle by injecting the service "tidbo_flagship.service"

### Requirements

* PHP 7.3 or higher
  * cURL extension recommended
