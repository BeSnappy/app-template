# Snappy App Template

Base application template for building Snappy applications.

## Getting Started

First, set appropriate values for the public properties on the base `App` found in `/src/Snappy/Apps/ServiceName/App.php`. You may rename the `ServiceName` folder to match the name of the application's purpose or integrated third party service.

Next add a logo image for the app to the root folder. It should be a 256x256 pixel image.

Apps may "listen" for one or more of the following hooks: `message.incoming`, `message.outgoing`, `contact.created`, `tags.changed`, `ticket.replied`, and `ticket.waiting`. To indicate which events your application listens for you may implement the corresponding interfaces. The interfaces are:

- `Snappy\Apps\IncomingMessageHandler`
- `Snappy\Apps\OutgoingMessageHandler`
- `Snappy\Apps\ContactCreatedHandler`
- `Snappy\Apps\TagsChangedHandler`
- `Snappy\Apps\TicketRepliedHandler`
- `Snappy\Apps\TicketWaitingHandler`

The [Guzzle](https://github.com/guzzle/guzzle) will be available, so feel free to use this HTTP library for contacting remote services.