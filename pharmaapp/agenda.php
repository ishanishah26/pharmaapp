<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Meeting</a></li>
    <li><a href="#tabs-2">Agenda</a></li>
    <li><a href="#tabs-3">Content</a></li>
    <li><a href="#tabs-4">Task</a></li>
    <li><a href="#tabs-5">Notes</a></li>
    <li><a href="#tabs-6">Message</a></li>
    <li><a href="#tabs-7">Questions</a></li>
  </ul>
  <div id="tabs-1">

  </div>
  <div id="tabs-2">
    <button type="text">Add event</button>

    <label>Event Name</label><input type="text" />
    <label>Start time</label><input type="text" />
    <label>End Time</label><input type="text" />
    <label>Event discription</label><input type="text" />
    <button type="submit">Add event</button>

  </div>
  <div id="tabs-3">
    <p></p>
  </div>
  <div id="tabs-4">
    <p></p>
  </div>
  <div id="tabs-5">
    <p></p>
  </div>
  <div id="tabs-6">
    <p></p>
  </div>
  <div id="tabs-7">
    <p></p>
  </div>
</div>


</body>
</html>
