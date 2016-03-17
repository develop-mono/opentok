<!DOCTYPE HTML>
<html>
  <body>
     <script src="https://static.opentok.com/v2/js/opentok.js" charset="utf-8"></script>
     <script charset="utf-8">
        var apiKey = '45520912';
        var sessionId = '1_MX40NTUyMDkxMn5-MTQ1ODE4Njk5OTI1M341eWxZVlcxRGlGc3I1a0RhWHhyUStaYUZ-UH4';
        var token = 'T1==cGFydG5lcl9pZD00NTUyMDkxMiZzaWc9ODljYjI5MzhiY2NhMjYwYzZiMWI0MjY1OWE5NjMzMWI5MmI3NDcwNzpyb2xlPXB1Ymxpc2hlciZzZXNzaW9uX2lkPTFfTVg0ME5UVXlNRGt4TW41LU1UUTFPREU0TmprNU9USTFNMzQxZVd4WlZsY3hSR2xHYzNJMWEwUmhXSGh5VVN0YVlVWi1VSDQmY3JlYXRlX3RpbWU9MTQ1ODE4NzA2NyZub25jZT0wLjI2OTkwODY4NzYxMDk1MjY2JmV4cGlyZV90aW1lPTE0NTgyNzMzODYmY29ubmVjdGlvbl9kYXRhPQ==';
        var session = OT.initSession(apiKey, sessionId)
           .on('streamCreated', function(event) {
             session.subscribe(event.stream);
           })
           .connect(token, function(error) {
             var publisher = OT.initPublisher();
             session.publish(publisher);
           });
     </script>
  </body>
</html>
