
## Codeception\Util\XmlBuilder



That's a pretty simple yet powerful class to build XML structures in jQuery-like style. With no XML line actually written!
Uses DOM extension to manipulate XML data.


```php
<?php
$xml = new \Codeception\Util\XmlBuilder();
$xml->users
   ->user
       ->val(1)
       ->email
           ->val('davert@mail.ua')
           ->attr('valid','true')
           ->parent()
       ->cart
           ->attr('empty','false')
           ->items
               ->item
                   ->val('useful item')
               ->parents('user')
       ->active
           ->val(1);
echo $xml;
```

This will produce this XML

```xml
<?xml version="1.0"?>
<users>
   <user>
       1
       <email valid="true">davert@mail.ua</email>
       <cart empty="false">
           <items>
               <item>useful item</item>
           </items>
       </cart>
       <active>1</active>
   </user>
</users>
```

### Usage

Builder uses chained calls. So each call to builder returns a builder object. Except for `getDom` and `__toString` methods.

 * `$xml->node` - create new xml node and go inside of it.
 * `$xml->node->val('value')` - sets the inner value of node
 * `$xml->attr('name','value')` - set the attribute of node
 * `$xml->parent()` - go back to parent node.
 * `$xml->parents('user')` - go back through all parents to `user` node.

Export:

 * `$xml->getDom` - get a DOMDocument object
 * `$xml->__toString` - get a string representation of XML.

[Source code](https://github.com/Codeception/Codeception/blob/master/src/Codeception/Util/XmlBuilder.php)


#### *public* __construct() 

[See source](https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php#L78)

#### *public* __get($tag) 

Appends child node

 * `param` $tag

 * `return`  XmlBuilder

[See source](https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php#L91)

#### *public* __toString() 

[See source](https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php#L163)

#### *public* attr($attr, $val) 

Sets attribute for current node

 * `param` $attr
 * `param` $val

 * `return`  XmlBuilder

[See source](https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php#L118)

#### *public* getDom() 

 * `return`  \DOMDocument

[See source](https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php#L171)

#### *public* parent() 

Traverses to parent

 * `return`  XmlBuilder

[See source](https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php#L129)

#### *public* parents($tag) 

Traverses to parent with $name

 * `param` $tag

 * `return`  XmlBuilder
 * `throws`  \Exception

[See source](https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php#L143)

#### *public* val($val) 

 * `param` $val

 * `return`  XmlBuilder

[See source](https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php#L104)

<p>&nbsp;</p><div class="alert alert-warning">Reference is taken from the source code. <a href="https://github.com/Codeception/Codeception/blob/2.1/src/Codeception/Util/XmlBuilder.php">Help us to improve documentation. Edit module reference</a></div>
