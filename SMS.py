from twilio.rest import Client

# put your own credentials here
account_sid = "ACc34dc91ef3e06c3ab9090d4f15f50948"
auth_token = "6118b5af92d39b1deb98abe05fd23725"

client = Client(account_sid, auth_token)

message= client.messages.create(
    to="use your number given when registration",
    from_="use the free number ",
    body="This is the ship that made the Kessel Run in fourteen parsecs?"
)
