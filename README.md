# Sending SMS with Twilio

In this guide, we'll show you how to use Programmable SMS to send SMS and MMS messages in your web application.


![outgoing-sms width-800](https://user-images.githubusercontent.com/35838634/36524464-1730e8a2-17cc-11e8-836f-bfe04e294e23.png)

1. To use the Twilio REST API, you need an account. 
2. Signing up for a free Twilio account is easy. 
3. Once you've signed up, head over to your Console and grab your Account SID and your Auth Token. 
4. You will need those for the code samples below.


```
// Download the twilio-csharp library from twilio.com/docs/libraries/csharp
using System;
using Twilio;
using Twilio.Rest.Api.V2010.Account;
using Twilio.Types;

class Example
{
   static void Main(string[] args)
   {
        // Find your Account Sid and Auth Token at twilio.com/console
        const string accountSid = "ACc34dc91ef3e06c3ab9090d4f15f50948";
        const string authToken = "your_auth_token";
        TwilioClient.Init(accountSid, authToken);

        var to = new PhoneNumber("+15017122661");
        var message = MessageResource.Create(
            to,
            from: new PhoneNumber("+15558675310"),
            body: "This is the ship that made the Kessel Run in fourteen parsecs?");

        Console.WriteLine(message.Sid);
   }
}
```

5. Purchase an SMS Capable Phone Number,Sending SMS messages requires an SMS capable phone number.
6. You can browse the available phone numbers in the Console.
7. When you search, you can check the box to filter available numbers to those that are SMS capable
8. Buy or use the free number for demo purposes.

# Demo Number 
![capture](https://user-images.githubusercontent.com/35838634/36524803-68302aa0-17cd-11e8-825a-8a616204d9cb.JPG)
# Buy Number 
![buy-sms-number2 width-800](https://user-images.githubusercontent.com/35838634/36524690-e86a2384-17cc-11e8-9273-bd6af4b3af11.png)

9.Armed with a Twilio phone number, you can now start sending messages to mobile devices.

# For: C# / .NET

```
// Download the twilio-csharp library from twilio.com/docs/libraries/csharp
using System;
using Twilio;
using Twilio.Rest.Api.V2010.Account;
using Twilio.Types;

class Example
{
   static void Main(string[] args)
   {
        // Find your Account Sid and Auth Token at twilio.com/console
        const string accountSid = "ACc34dc91ef3e06c3ab9090d4f15f50948";
        const string authToken = "your_auth_token";
        TwilioClient.Init(accountSid, authToken);

        var to = new PhoneNumber("+15017122661");
        var message = MessageResource.Create(
            to,
            from: new PhoneNumber("+15558675310"),
            body: "This is the ship that made the Kessel Run in fourteen parsecs?");

        Console.WriteLine(message.Sid);
   }
}
```
# For: Java

```
// Install the Java helper library from twilio.com/docs/java/install
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;

public class Example {
  // Find your Account Sid and Token at twilio.com/user/account
  public static final String ACCOUNT_SID = "ACc34dc91ef3e06c3ab9090d4f15f50948";
  public static final String AUTH_TOKEN = "your_auth_token";

  public static void main(String[] args) {
    Twilio.init(ACCOUNT_SID, AUTH_TOKEN);

    Message message = Message.creator(new PhoneNumber("+15558675310"),
        new PhoneNumber("+15017122661"), "This is the ship that made the Kessel Run in fourteen parsecs?").create();

    System.out.println(message.getSid());
  }
}
```
# For: Node.js

```
// Twilio Credentials
const accountSid = 'ACc34dc91ef3e06c3ab9090d4f15f50948';
const authToken = 'your_auth_token';

// require the Twilio module and create a REST client
const client = require('twilio')(accountSid, authToken);

client.messages.create(
  {
    to: '+15558675310',
    from: '+15017122661',
    body: 'This is the ship that made the Kessel Run in fourteen parsecs?',
  },
  (err, message) => {
    console.log(message.sid);
  }
);
```
# For: PHP

```
<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACc34dc91ef3e06c3ab9090d4f15f50948";
$token = "your_auth_token";
$client = new Client($sid, $token);

$client->messages->create(
    '+15558675310',
    array(
        'from' => '+15017122661',
        'body' => "This is the ship that made the Kessel Run in fourteen parsecs?"
    )
);
```
# For: Python

```
SDK Version: 5.x 6.x
from twilio.rest import Client

# put your own credentials here
account_sid = "ACc34dc91ef3e06c3ab9090d4f15f50948"
auth_token = "your_auth_token"

client = Client(account_sid, auth_token)

client.messages.create(
    to="+15558675310",
    from_="+15017122661",
    body="This is the ship that made the Kessel Run in fourteen parsecs?"
)
```

