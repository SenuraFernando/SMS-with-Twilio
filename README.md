# SMS-with-Twilio
Sending SMS with Twilio

1. To use the Twilio REST API, you need an account. 
2. Signing up for a free Twilio account is easy. 
3. Once you've signed up, head over to your Console and grab your Account SID and your Auth Token. 
4. You will need those for the code samples below.


from twilio.rest import Client
# put your own credentials here
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
