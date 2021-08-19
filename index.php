<?php 
require_once 'connect.php';
require_once 'calc.php'; 
?>



<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div>
<form action="index.php" method="GET">
  <table class="table table-hover">
    <tr>
      <th scope="col">Оклад</th>
      <th scope="col"><input type="number" name="num1"> тенге</th>
      <th scope="col"></th>
     
    </tr>
    <tr>
      <th scope="row">Норма дней в месяц</th>
      <td><input type="number" name="num2" min="1" max="22"> (обычно 22 дней)</td>
      <td></td>      
    </tr>
    <tr>
      <th scope="row">Отработанное количество дней</th>
      <td><input type="number" name="num3"  min="1" max="22"></td>
      <td></td>      
    </tr>
    <tr>
      <th scope="row">Имеется ли налоговый вычет 1 МЗП</th>
      <td><input type="number" name="num4"></td>
      <td></td>      
    </tr>
    <tr>
      <th scope="row">Календарный год</th>
      <td><input type="number" name="num5" min="1999" max="2021"> год</td>
      <td></td>      
    </tr>
    <tr>
      <th scope="row">Календарный месяц</th>
      <td> <select name="num6">
					<optgroup label="Месяц" name="num6">
					 <option value="Январь">Январь</option>
					 <option value="Февраль">февраль</option>
					 <option value="Март">Март</option>
           <option value="Март">Март</option>
           <option value="апрель">апрель</option>
           <option value="май">май</option>
           <option value="июнь">июнь</option>
           <option value="июль">июль</option>
           <option value="август">август</option>
           <option value="сентябрь">сентябрь</option>
           <option value="октябрь">октябрь</option>
           <option value="ноябрь">ноябрь</option> 
           <option value="декабрь">декабрь</option> 
 					</optgroup>
				 </select></td>
      <td></td>      
    </tr>
    <tr>
      <th scope="row">Является ли сотрудник пенсионером</th>
      <td>
      <select name="num7">
					<optgroup label="Соц" name="num7">
					 <option value="Пенсионер" >Пенсионер</option>
					 <option value="Инвалит 1 группа" >Инвалит 1 группа</option>
					 <option value="Инвалит 2 группа">Инвалит 2 группа</option>           
					</optgroup>
				 </select>
    </td>
      <td></td>      
    </tr>

  </table>
    <input type="submit" class="btn btn-primary btn-lg btn-block">
</form>
</div>
<div>

<br>
<p>Календарный <?php echo $num6; ?> <?php echo $num5; ?> год </p>
<br>
<div>
<table class="table table-bordered border-primary">
    <tr>
      <th scope="col">Индивидуальный подоходный налог (ИПН)</th>
      <th scope="col">Обязательные пенсионные взносы (ОПВ)</th>
      <th scope="col">Обязательное социальное медицинское страхование (ОСМС)</th>
      <th scope="col">Взносы на обязательное социальное медицинское <br>Страхование (ВОСМС)</th>
      <th scope="col">Социальные отчисления (СО)</th>     
    </tr>
    <tr>
    <form action="vendor/create.php" method="post"> 
      <th scope="row" name="zp"><? echo $num1 * (10 / 100); ?></th>
      <td><? echo $num1 * (10 / 100);?></td>
      <td><? echo $num1 * (2 / 100); ?></td> 
      <td><? echo $num1 * (2 / 100); ?></td> 
      <td><? echo $num1 * (3.5 / 100); ?></td>
    </form>      
    </tr>  
    
  </table>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Записать данные


</div>
</div>
</body>
</html>
