yii2-showloading
================

Yii2 extension for showLoading jQuery plugin  
Yii2 [extension page](http://www.yiiframework.com/extension/yii2-showloading)  
Codepen [demo page](http://codepen.io/jasondavis/pen/fAzcI)

Plugin provides a neat way of overlaying loading indicator over arbitrary content (e.g. during ajax calls).

## Installation

### Composer

Simply add extension to your composer.json:
``` js
{
    "require": {
        "nirvana-msu/yii2-showloading": "1.0.*@dev"
    }
}
```
After this just update your dependencies as usual, e.g. by running `composer update`

##Configuration

To make the plugin work you just need to register asset bundle. Either specify it as a dependency, or register directly in your view like this:
``` php
use nirvana\showloading\ShowLoadingAsset;
ShowLoadingAsset::register($this);
```

##Sample usage

To show / hide loading indicator, simply call `showLoading()` / `hideLoading()` methods:
``` js
$('#my-content-panel-id').showLoading();
$('#my-content-panel-id').hideLoading();
```

##License

Extension is released under MIT license.

Underlying jQuery plugin license:
> jQuery showLoading plugin v1.0   
> 
> Copyright (c) 2009 Jim Keller  
> Context - http://www.contextllc.com 
> 
> Dual licensed under the MIT and GPL licenses.