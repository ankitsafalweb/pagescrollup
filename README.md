# Page Scroll Up
Page Scroll Up is magento2 extension developed by Safal Web. Using this extension you can allow user to scroll to top in single click. You can control this feature from backend, there are variety of options added for this feature.

## How to install

**This extension is now available through *Packagist* ! You don't need to specify the repository anymore.**

Add the following lines into your composer.json
 
```
...
"require":{
    ...
    "safalweb/pagescrollup": "^1.0.0"
 }
```
or simply run this command 
```
composer require safalweb/pagescrollup
```
 
Then type the following commands from your Magento root:

```
$ composer update
$ ./bin/magento cache:disable
$ ./bin/magento module:enable Safalweb_PageScrollUp
$ ./bin/magento setup:upgrade
$ ./bin/magento cache:enable
```
 