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
