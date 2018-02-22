# Sending SMS with Twilio

In this guide, we'll show you how to use Programmable SMS to send SMS and MMS messages in your web application.

For: C# / .NET,
Java,
Node.js,
PHP,
Python

![outgoing-sms width-800](https://user-images.githubusercontent.com/35838634/36524464-1730e8a2-17cc-11e8-836f-bfe04e294e23.png)

1. To use the Twilio REST API, you need an account. 
2. Signing up for a free Twilio account is easy. 
3. Once you've signed up, head over to your Console and grab your Account SID and your Auth Token. 
4. You will need those for the code samples below.


from twilio.rest import Client
// put your own credentials here
account_sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
auth_token = "your_auth_token"

client = Client(account_sid, auth_token)

client.messages.create(
    to="+15558675310",
    from_="+15017122661",
    body="This is the ship that made the Kessel Run in fourteen parsecs?"
)

5. Purchase an SMS Capable Phone Number,Sending SMS messages requires an SMS capable phone number.
6. You can browse the available phone numbers in the Console.
7. When you search, you can check the box to filter available numbers to those that are SMS capable
8. Buy or use the free number for demo purposes.

# Demo Number 
![capture](https://user-images.githubusercontent.com/35838634/36524803-68302aa0-17cd-11e8-825a-8a616204d9cb.JPG)
# Buy Number 
![buy-sms-number2 width-800](https://user-images.githubusercontent.com/35838634/36524690-e86a2384-17cc-11e8-9273-bd6af4b3af11.png)

9.Armed with a Twilio phone number, you can now start sending messages to mobile devices.



