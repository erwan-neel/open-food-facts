# open-food-facts
[![Build Status](https://img.shields.io/travis/tazorax/open-food-facts/master.svg?style=flat-square)](https://travis-ci.org/tazorax/open-food-facts) 
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/2bd62ba8-a658-4c71-b1e4-3c1d764d95d2.svg?style=flat-square)](https://insight.sensiolabs.com/projects/2bd62ba8-a658-4c71-b1e4-3c1d764d95d2)
[![Packagist](https://img.shields.io/packagist/v/tazorax/open-food-facts.svg?style=flat-square)](https://packagist.org/packages/tazorax/open-food-facts)
[![Packagist Pre Release](https://img.shields.io/packagist/vpre/tazorax/open-food-facts.svg?style=flat-square)](https://packagist.org/packages/tazorax/open-food-facts)
[![GitHub license](https://img.shields.io/github/license/tazorax/open-food-facts.svg?style=flat-square)](https://github.com/tazorax/open-food-facts/blob/master/LICENSE)

Non-official Open Food Facts API PHP Wrapper (for read use only)

## Install
Using composer

``` composer require tazorax/open-food-facts ```

## Usage

```php
use Tazorax\OpenFoodFacts\OpenFoodFactsClient;
use Tazorax\OpenFoodFacts\Exception;

try {
    $product = OpenFoodFactsClient::getProductByBarCode('7622210421968');
    
    echo $product->getProductName(); //Output: "Petit écolier chocolat au lait"
} catch (Exception $e) {
    echo $e->getMessage();
}
```
