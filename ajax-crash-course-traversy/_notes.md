# Steps

1. Create XHR Object
  - Can use console.log(xhr); to quickly view properties of xmlHttpRequest object
2. Create function to make request using open( type, url/file, true/false);
3. Can use onload() or onreadystatechange()
  - onreadystatechange() is kind of the older way of doing things
  - Traversy uses onload() throughout series
  - With onreadystatechange() we need to make sure BOTH this.status == 200 && this.readyState == 4
  - with onload()  this.readyState is already at 4 so we only need to validate that this.status == 4
4. this.status should == 200 && this.readyState should == 4
  - Can use xhr.status and xhr.readyState, but since we're calling the action
  on itself we can use keyword 'this'
5. Send request with xhrsend();



# Tips

- Use Chrome Dev Tools To View XHR Info
  - Dev Tools -> Network -> XHR
- console.log('READYSTATE: ' , xhr.readyState); 
  - Can be used to confirm the readyState
- xhr.onprogress
  - Is optional
  - Used for page loaders, when a page loads and you see the progress
- xhr.onerror
  - Should be used with onprogress
  - Checks for errors, such as if a page stalls or crashes while loading
- else if() {} can be used to display errors
  - e.g.) this.status == 404 (Not Found)


# JSON
- json.parse() 
- When receiving data from a web server, the data is always a string.
- Parse the data with JSON.parse(), and the data becomes a JavaScript object.