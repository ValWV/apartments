var fs = require('fs');

var http = require('http'); 


var server = http.createServer(function(req, res) {
  
  console.log("URL страницы: + req.url");
  res.writeHead(200, {'Content-Type': 'text/html; charset=utf-8'});
  var myReadShort = fs.createReadStream(__dirname + '/index.html', 'utf-8');
  myReadShort.pipe(res);
});

server.listen(3000, '127.0.0.1');