// Importing http core package/module provided by nodejs

var http = require('http');

// Creating a server

http.createServer(function (req, res) {

// Write response as Html(text)

res.writeHead(200, {'Content-Type': 'text/html'});

// Writing static text

res.end('Hello World');

// Server listening on port number 4200

}).listen(4200);