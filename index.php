<!DOCTYPE html>
<html lang="en">
<head>
<link data-require="bootstrap@3.3.7" data-semver="3.3.7" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script data-require="bootstrap@3.3.7" data-semver="3.3.7" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <div class="container">
    <div class="row center-block" id="input_ofer">
       <form>
  <div >
    <label for="exampleInputEmail1" class="form-label">Укажите номер вашего счета</label>
    <input type="text" class="form-control" id="ofer" >
    
  </div>
  <button  id="ofer_btn" class="btn btn-primary">Отправить</button>
</form>
    </div>
    <div class="wrapper row" id="can_add">
        <div class="col-sm-6" id="add">
        <div >
        <input type="text" class="form-control" id="new_val" >
        <button id="add_new_val" class="btn btn-primary">Внести показание</button>
        </div>
        </div>
        <div class="col-sm-6" >
            <div class="row">История показаний:</div>
            <div class="row" id="list"></div>

        </div>
    </div>
    </div>
    <script src="js.js"></script>
</body>
</html>