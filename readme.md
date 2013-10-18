# Snappy App Template

Base application template for building Snappy applications.

## Getting Started

First, clone this repository onto your system using Git, then remove the `.git` folder from the cloned directory. This will give you a good starting point for building your application. Next, you should set values such as `name`, `author`, etc. in both the `composer.json` file and in the `Snappy\Apps\ServiceName\App.php` file.

Next, you may rename the `ServiceName` folder to match the name of the application's purpose or integrated third party service. For example, the Github application has a folder path of `Snappy\Apps\Github\App.php`. Also, you should add a 256x256 logo for the app to the root folder. The file name should also be set in the `App.php` icon property.

## How Apps Work

Apps may listen for one or more of the following hooks: `message.incoming`, `message.outgoing`, `contact.created`, `tags.changed`, `ticket.replied`, and `ticket.waiting`. To indicate which events your application handles, you may implement the corresponding interfaces. The interfaces are:

Apps may "listen" for one or more of the following hooks: `message.incoming`, `message.outgoing`, `contact.created`, `tags.changed`, `ticket.replied`, and `ticket.waiting`. To indicate which events your application listens for you may implement the corresponding interfaces. The interfaces are:
>>>>>>> ed4dc909d53a1fe51d4f613d1755b0b488b0a4ba

- `Snappy\Apps\IncomingMessageHandler`
- `Snappy\Apps\OutgoingMessageHandler`
- `Snappy\Apps\ContactCreatedHandler`
- `Snappy\Apps\TagsChangedHandler`
- `Snappy\Apps\TicketRepliedHandler`
- `Snappy\Apps\TicketWaitingHandler`

The [Guzzle](https://github.com/guzzle/guzzle) PHP library will be available to your application, so feel free to use this HTTP library for contacting remote services. You may wish to add it to your own application's Composer file for use during testing. If you add Guzzle to your composer file, use the `3.7.*` version.

## Rendering Views

For the applications that implement the `ContactLookupHandler` interface, you may render HTML "views" by using the `$this->render` method, passing the path to the view file, and an array of data you want to make available to the view:

	$this->render(__DIR__.'/view.html', array('name' => $name, 'email' => $email));
