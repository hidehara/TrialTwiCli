readme_for_composer.txt


1. Add "modulename" as a dependency in your project's composer.json file.

	composer.json
	--------------------
	{
	    "require": {
	        "guzzle/guzzle": "*"
	    }
	}

	If you need that Consider tightening your dependencies to a known version (e.g., 2.3.*).


2. Download and install Composer.

	curl -sS https://getcomposer.org/installer | php

	If you can't run "curl' do following:
	
		- Save https://getcomposer.org/installer contents to composer_installer.php file.
		- php composer_installer.php


3. Install your dependencies.

	php composer.phar install


4. Require Composer's autoloader.

	Composer prepares an autoload file that's capable of autoloading all of the classes in any of the libraries that it downloads. 
	To use it, just add the following line to your code's bootstrap process.

		require '/path/to/sdk/vendor/autoload.php';


You can find out more on how to install Composer, configure autoloading, and other best-practices for defining dependencies at getcomposer.org.

