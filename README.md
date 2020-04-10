# PHP TCKN Validation Class
This PHP validation class cheks that if the T.C citizen number is valid.

## Requirements

 - cURL or Soap Class
 - Minimum PHP 7.2

## Usage
```php
    	<?php
		
	require "tckn.class.php";
	$tckn = new TCKN;
	
	$result = $tckn->tcknValidate("tckn", "name", "surname", "birth_year"); // Returns "true" if valid. Else returns false.
	
	?>
```
## License

### This class licensed with CC BY-NC-ND 4.0 (See: [https://creativecommons.org/licenses/by-nc-nd/4.0/](https://creativecommons.org/licenses/by-nc-nd/4.0/))
