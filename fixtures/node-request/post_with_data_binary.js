var request = require('request');

var dataString = '{"title":"china1"}';

var options = {
    url: 'http://localhost:28139/post',
    method: 'POST',
    body: dataString
};

function callback(error, response, body) {
    if (!error && response.statusCode == 200) {
        console.log(body);
    }
}

request(options, callback);
