# Snappy App Template

Base application template for building Snappy applications.

## What Are They

Snappy applications are an easy way to integrate Snappy with all of your other favorite applications. For example, want a message to be sent to your Hipchat room when a new wall post is made? How about creating a new Highrise contact when you get an e-mail? Applications make either a breeze.

You can even build your applications and have them included in Snappy. This repository contains a starting point for doing just that. Just adding a few API calls to a single file is all it takes to build a fully functional Snappy application! We'll walk you through the process below.

## Getting Started

First, clone this repository onto your system using Git, then remove the `.git` folder from the cloned directory. Run the `composer install` command from your terminal to install the application's dependencies. This will give you a good starting point for building your application. Next, you should set values such as `name`, `author`, etc. in both the `composer.json` file and in the `Snappy\Apps\ServiceName\App.php` file.

Next, you may rename the `ServiceName` folder to match the name of the application's purpose or integrated third party service. For example, the [Github application](https://github.com/BeSnappy/snappy-github) has a folder path of `Snappy\Apps\Github\App.php`. Also, you should add a 256x256 logo for the app to the root folder. The file name should also be set in the `App.php` icon property.

## How Apps Work

Apps may listen for one or more of the following hooks: `message.incoming`, `message.outgoing`, `contact.created`, `tags.changed`, `ticket.replied`, and `ticket.waiting`. To indicate which events your application handles, you may implement the corresponding interfaces. The interfaces are:

- `Snappy\Apps\IncomingMessageHandler`
- `Snappy\Apps\OutgoingMessageHandler`
- `Snappy\Apps\ContactCreatedHandler`
- `Snappy\Apps\ContactLookupHandler`
- `Snappy\Apps\TagsChangedHandler`
- `Snappy\Apps\TicketRepliedHandler`
- `Snappy\Apps\TicketWaitingHandler`

The [Guzzle](https://github.com/guzzle/guzzle) PHP library will be available to your application, so feel free to use this HTTP library for contacting remote services. You may wish to add it to your own application's Composer file for use during testing. If you add Guzzle to your composer file, use the `3.7.*` version.

## Contact Lookup

The `ContactLookupHandler` is unique in that it does not correspond directly to a Snappy webhook. Instead, it may be used to add a custom display of contact information to the contact detail tool-tip.

When clicking on a contact in the address bar of a Snappy message screen, a tool-tip with more information about that contact will appear. On the right side of this tool-tip will be the icons of your Contact Lookup enabled applications. Clicking one of these icons will display custom HTML returned by that application.

For an example of a Snappy application that implements contact lookup, check out the [Highrise application](https://github.com/BeSnappy/snappy-highrise).

## Rendering Views

For the applications that implement the `ContactLookupHandler` interface, you may render HTML "views" by using the `$this->render` method, passing the path to the view file, and an array of data you want to make available to the view:

	$this->render(__DIR__.'/view.html', array('name' => $name, 'email' => $email));

## Submitting Applications For Review

So, you have completed your first application... great!

Next, submit your application to the [Packagist](https://packagist.org) PHP package repository. This will allow us to pull your application into our Snappy development environment.

Finally, just send us an e-mail at hello+github@besnappy.com with a link to the repository. We'll check it out and get it included in Snappy ASAP.
