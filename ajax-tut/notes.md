# Asynchronous JavaScript & XML

## About AJAX

- Read data from a web server - after the page has loaded
- Update parts of a web page without reloading the page
- Send data to a web server - in the background
- Modern browser don't allow access across domains for security. Both the web page and the loading file must be located on the same server
- AJAX  name is misleading because the applications may use XML to transport data, but it is equally common to transport data as plain text or JSON text.

## AJAX Cycle

1. An event occurs in a web page (e.g. Page is loaded and a button is clicked)
2. XMLHttpRequest object is created by JavaScript
3. XMLHttpRequest object sends a request to a web server
4. Server processes the request
5. Server sends a response back to the web page
6. Response is read by JavaScript
7. Action is performed by JavaScript


# XMLHttpRequest Object

-  All modern browsers (Chrome, Firefox, IE7+, Edge, Safari, Opera) have a built-in XMLHttpRequest object.

```
1. Can name var anything we want
2. xhr, xhttp, xmlhttp, xmlHttpRequest are all common names

var xhttp = new XMLHttpRequest();
```

```
1. XMLHttpRequest is a property belonging to the window object
2. If window detects a request an XMLHttpRequest is created and stored in a var

if (window.XMLHttpRequest) {
   // code for modern browsers
   xmlhttp = new XMLHttpRequest();
 } else {
   // code for old IE browsers
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

```

## XMLHttpRequest Object Methods

Method                              | Description
----------------------------------- | -------------------------------------
new XMLHttpRequest()                | Creates a new XMLHttpRequest Object 
abort()                             | Cancels current request
getAllResponseHeaders()             | Returns header information
getResponseHeader()	                | Returns specific header information
open(method, url, async, user, psw)	| Specifies the request:
.                                   | method: request type GET or POST
.                                   | url: file location
.                                   | async: true (asynchronous) or false 
.                                   | user: optional username
.                                   | psw: optional password
send()                              | Sends the request to the server
.                                   | Used for GET requests
send(string)                        | Sends the request to the server 
.                                   | Used for POST requests
setRequestHeader()                  | Adds a label/value pair to the header to be sent


## XMLHttpRequest Object Properties

Property                            | Description
----------------------------------- | -------------------------------------
onreadystatechange                  | Defines a function to be called when readyState property changes
readyState                          | Holds status of XMLHttpRequest:
.                                   | 0: request not initialized
.                                   | 1: server connection established
.                                   | 2: request received
.                                   | 3: processing request
.                                   | 4: request finished and response is ready
readystate                          | Cancels current request
responseText                        | Returns the response data as a string
responseXML       	                | Returns the response data as XML data
status                              | Returns the status-number of a request
.                                   | 200: "OK"
.                                   | 403: "Forbidden"
.                                   | 404: "Not Found"
.                                   | These are most important, for complete list vist:
.                                   | 1xx: Information
.                                   | 2xx: Successful
.                                   | 3xx: Redirection
.                                   | 4xx: Client Error
.                                   | 5xx: Server Error
.                                   | https://www.w3schools.com/tags/ref_httpmessages.asp
StatusText                          | Returns the status text. e.g.) "OK" or "Not Found" 



# Ajax Request

## Send a Request To a Server

- XMLHttpRequest object is used to exchange data with a server

```
GET REQUEST

xhttp.open("GET", "filename.ext", true);
xhttp.send();

In above example may get a cached result. To avoid this add a unique ID to the URL
E.g.) xhttp.open("GET", "demo_get.php?t=" + Math.random(), true);

If want to send info with GET, add the info to the URL
E.g.) xhttp.open("GET", "demo_get.php?fname=Jay&lname=LampStack", true);
```

```
POST REQUEST

xhttp.open("POST", "filename.ext", true);
xhttp.send();

HTTP header is required to POST data like an HTML form.
setRequestHeader()

xhttp.open("POST", "filename.ext", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("fname=Jay&lname=LampStack");

```


Method                          | Description
------------------------------- |------------------------------
open(method, url, async)        | Specifies type of request
.                               | method: GET or POST
.                               | url: server file location
.                               | asynce: true (async) false (not async)
send()                          | Sends GET request to the server 
send(string)                    | Sends POST request to the server
setRequestHeader(header, value) | Adds HTTP headers to request
.                               | header: specifies header name
.                               | value: specifies header value




## GET Vs. POST

- GET is simpler and faster than POST and can be used in most cases
- POST when a cached file is not an option (update a file or DB on the server)
- POST when sending a large amount of data to the server (POST has no size limitations)
- POST when sending user input, POST is more robust and secure

## onreadystatechange Property

- Function that gets executed when the request receives an answer

```
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("demo").innerHTML = this.responseText;
  }
}
```


# AJAX Response

- readyState property holds the status of the XMLHttpRequest
- onreadystatechange defines a function to be executed when the readyState changes
- status property and statusText property holds the status of the XMLHttpRequest object


Property              | Description
--------------------- | --------------------
onreadystatechange    | Defines a function to be called when the readyState property changes
readyState            | Holds status of XML HttpRequest
.                     | 0: request not initialized
.                     | 1: server connection established
.                     | 2: request received
.                     | 3: processing request
.                     | 4: request finished and response is ready
status                | See notes above (already covered)
statusText            | See notes above ( already covered )

## When readyState is 4 and status is 200, the response is ready

```
if (this.readyState == 4 && this.status == 200) {
  document.getElementById("demo").innerHTML =  this.responseText;
}

Note: 
- onreadystatechange event is triggered four times
- one for each change of the ready state
- the IF condition filters it to display only once
```

## Using a Callback Function

- If you have more than one AJAX task in a website, you should create one function for
executing the XMLHttpRequest object, and one callback function for each AJAX task
- The function call should contain the URL and which function to call when the response is ready

```
Example:
1. An HTML button has an onclick event that triggers loadDoc('filename.txt', myFunction())
2. loadDoc() is called and triggers the callback function myFunction()
3. myFunction(xhttp) accepts xhttp as an arg that references the var xhttp in loadDoc()
4. xhttp.responseText returns the server response as a JavaScript string, and you can use it accordingly
6. xhttp.responseXML can be used instead of xhttp.responseText.
5. This approach has more flexibility because you can create as my AJAX tasks as you want


function loadDoc(url, callback) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}

function myFunction(xhttp) {
  document.getElementById("demo").innerHTML = xhttp.responseText;
}

```

## responseText Vs. responseXML

responseText                        | responseXML
----------------------------------- | --------------------
Returns response data as a string   | Returns response data as XML data
N/A                                 | Can be used to parse the response as an XML DOM object


## responseXML response Example

```
1. xmlDoc variable stores xhttp response
2. xhttp response is of  responseXML type
3. responseXML can be used to parse the response
4. x variable targest the property we want to access from cd_catalog.xml located in open()
5. We now have control how we want to loop thru our XML file

xmlDoc = xhttp.responseXML;
txt = "";
x = xmlDoc.getElementsByTagName("ARTIST");
for (i = 0; i < x.length; i++) {
  txt += x[i].childNodes[0].nodeValue + "<br>";
}
document.getElementById("demo").innerHTML = txt;
xhttp.open("GET", "cd_catalog.xml", true);
xhttp.send();
```


# AJAX XML File

The same as any other request except that we use responseXML

Example:
https://www.w3schools.com/js/js_ajax_xmlfile.asp


# AJAX PHP

Typically when a user enters input a function should be triggered onkeyup() event

Example:
https://www.w3schools.com/js/js_ajax_php.asp


