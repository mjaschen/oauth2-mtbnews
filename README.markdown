# MTB-News.de and Rennrad-News.de OAuth2 client provider

This package provides [MTB-News.de](http://www.mtb-news.de/) and [Rennrad-News.de](http://www.rennrad-news.de/) integration for [OAuth2 Client](https://github.com/thephpleague/oauth2-client) by *[The League](http://thephpleague.com/).*

## Installation

```sh
composer require mjaschen/oauth2-mtbnews
```

## Usage

### MTB-News.de

```php
$provider = new MarcusJaschen\OAuth2\Client\Provider\MTBNews(
    [
        'clientId'     => 'abcdefghijkl',
        'clientSecret' => 'mnopqrstuvwxyz',
        'redirectUri'  => 'https://www.example.org/oauth/return',
    ]
);
```

### Rennrad-News.de

```php
$provider = new MarcusJaschen\OAuth2\Client\Provider\RennradNews(
    [
        'clientId'     => 'abcdefghijkl',
        'clientSecret' => 'mnopqrstuvwxyz',
        'redirectUri'  => 'https://www.example.org/oauth/return',
    ]
);
```