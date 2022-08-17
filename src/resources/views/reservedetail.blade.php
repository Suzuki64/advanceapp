<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <div class="reserve-table-box">
    <table class="reserve-desc-table">
      <div class="reserve-ttl-box">
        <span>予約id</span>
        <input type="text" name='id' value="{{$reserve->id}}" disabled>
      </div>
      <tr>
        <th>Customer</th>
        <td><input type="text" value="{{$reserve->user->name}}" disabled></td>
      </tr>
      <tr>
        <th>Date</th>
        <td><input type="text" value="{{$reserve->date}}" disabled></td>
      </tr>
      <tr>
        <th>Time</th>
        <td><input type="text" value="{{$reserve->time}}" disabled></td>
      </tr>
      <tr>
        <th>Number</th>
        <td><input type="text" value="{{$reserve->number}}人" disabled></td>
      </tr>
    </table>
  </div>

  <a href="/">home</a>
</body>
</html>
