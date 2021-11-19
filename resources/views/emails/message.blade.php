<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <title>Message</title>
</head>
<style>
html,
body {
  background-color: #fff;
  color: #636b6f;
  font-family: 'Nunito', sans-serif;
  font-weight: 200;
  height: 100vh;
  margin: 0;
}

.title {
  font-size: 2em;
  color: #37517e;
  padding: 15px 0;
}

.container {
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  overflow-x: auto;
}

.container:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.message {
  text-align: justify;
  margin-bottom: 15px;
  color: #526772;
}

.signature {
  font-weight: 600;
  font-size: 2em;
  text-align: right;

}
</style>

<body>
  <div class="container">
    <h1 class="title">Opinion utilisateur</h1>
    <p class="message">{{$data['message']}}</p>
    <p class="signature">
      {{$data['name']}}
    </p>
  </div>
</body>

</html>