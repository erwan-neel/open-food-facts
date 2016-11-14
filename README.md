# open-food-facts
[![Build Status](https://img.shields.io/travis/tazorax/open-food-facts/master.svg?style=flat-square)](https://travis-ci.org/tazorax/open-food-facts) 
[![GitHub license](https://img.shields.io/github/license/tazorax/open-food-facts.svg?style=flat-square)](https://github.com/tazorax/open-food-facts/blob/master/LICENSE)

Non-official PHP port of Open Food Facts API

## Install
Using composer

``` composer require tazorax/open-food-facts ```

## Usage

```php
use Tazorax\OpenFoodFacts\Client;
use Tazorax\OpenFoodFacts\Exception;

try {
    $product = Client::getProductByEAN13('7622210421968');
    
    echo $product->getProductName(); //Output: "Petit écolier chocolat au lait"
} catch (Exception $e) {
    echo $e->getMessage();
}
```
