# Mailjet (Zend) PHP Wrapper for API v3

## Introduction

Provides a simple PHP library for the last version of the [MailJet API](http://dev.mailjet.com).
The goal of this component is to simplify the usage of the MailJet API for PHP developers.

### Prerequisites

Make sure to have the following details:
* Mailjet API Key
* Mailjet API Secret Key
* PHP (We've built this library to work on 5.4)
* This library

## Installation

First clone the repository
```
git clone git@github.com:mailjet/mailjet-apiv3-php.git
```

or download the zip tarball
```
https://github.com/mailjet/mailjet-apiv3-php/archive/master.zip
```

Go into the mailjet-apiv3-php folder and create an empty file named ```mailjetapi.php```
```
cd mailjet-apiv3-php
touch mailjetapi.php
```

Then use Composer install
```
curl -s https://getcomposer.org/installer | php
php composer.phar install
```

You are now ready to go !

## Usage

To use the Mailjet PHP library, ensure you've installed it correctly, then simply create a file in which you will write your code.

The first thing to do is to import the required namespaces and files:
**Be Careful:** Make sure that you are in the correct folder
```php
include_once __DIR__ . '/vendor/autoload.php';
use Mailjet\Api as MailjetApi;
use Mailjet\Model\Apitoken;
```

**Be Careful:** Make sure you've kept the directory structure intact or the include function will not be able to find the file which autoloads the wrapper's classes.
Next, you will add your credentials:
```php
$APIKey    = 'MY_API_KEY_VALUE';
$secretKey = 'MY_API_SECRET_KEY_VALUE';
```

Obviously you need to replace the values within the quotes with your own, that you can find at the following URL [Mailjet API Keys](https://www.mailjet.com/account/api_keys) once you've registered and logged in Mailjet.

Now the fun begins, create a new object which takes as arguments your credentials:
```php
$wrapper = new MailjetApi\Api($APIKey, $secretKey);
```

This basically starts the engine. Now what you're going to do next depends on what you want to POST, DELETE, PUT or GET from the Mailjet servers throught the API.
Take a tour on the [Reference documentation](http://dev.mailjet.com/email-api/v3/apikey/) to see all the resources available.

Next you will specify which resource to call this way:
```php
$wrapper->resourceName();
```
## Examples
For example if I want to use the resource Contact (which tells me a bunch of information about my Contacts) I will do:
```php
$contact = $wrapper->contact()->init();
$myContactList = $contact->getList()->toArray();
```

Now I print them
```php
print_r($myContactList);
```

In summary, here is a function to list your contacts:
```php
function listContacts() {
  $contact = $wrapper->contact()->init();
  $myContactList = $contact->getList()->toArray();
  
  return $myContactList;
}
```

A function that creates a list of contacts with name ```$Lname```
```php
function createList($wrapper, $Lname) {
  $apicall = $wrapper->contactslist();
  $apicall->init();

  $newList = new Mailjet\Model\Contactslist();
  $newList->setName("MyListName");

  $createList = $apicall->create($newList);

  echo "success - created list";
  return $createList->getID();
}
```

A function that creates a contact with email ```$Cemail```
```php
function createContact($wrapper, $Cemail) {
  $apicall = $wrapper->contact();
  $apicall->init();

  $newContact = new Mailjet\Model\Contact();
  $newContact->setEmail($Cemail);

  $createContact = $apicall->create($newContact);

  echo "success - created contact";
  return $createContact->getID();
}
```

A function that adds the contact with contact ID ```$contactID``` to the list with list ID ```$listID```
```php
function addContactToList($wrapper, $ListID, $contactID) {
  $apicall = $wrapper->Listrecipient();
  $apicall->init();
  $newContactToList = new Mailjet\Model\Listrecipient();
  $newContactToList->setListID($ListID);
  $newContactToList->setContactID($contactID);

  $addContactToList = $apicall->create($newContactToList);
  echo "success - created contact to list";

  return $addContactToList;
}
```

A function that prints your profile information
```php
function viewProfileInfo($wrapper) {
  $apicall = $wrapper->myprofile();
  $apicall->init();
  
  $myProfile = $apicall->getList()->toArray()[0];

  print_r($myProfile);
}
```

A function that updates the website field of your profile information
```php
function updateProfileInfo($wrapper, $userID) {
  $apicall = $wrapper->myprofile();
  $apicall->init();

  $newProfile = $apicall->getbyuser($userID);
  $updateP = $newProfile->current()->setWebsite("www.mailjet.com");
  $apicall->update($updateP);

  echo "success - field website changed";
}
```

## Reporting issues

Open an issue on github or email one of the maintainers. That would be me ;) (orlando at mailjet dot com)
