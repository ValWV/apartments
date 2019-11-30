var fs = require('fs');

var http = require('http'); 


var server = http.createServer(function(req, res) {
  
  console.log("URL страницы: + req.url");
  res.writeHead(200, {'Content-Type': 'text/html; charset=utf-8'});
  var myReadShort = fs.createReadStream('index.html', 'utf-8');
  myReadShort.pipe(res);
});

server.listen(8080);