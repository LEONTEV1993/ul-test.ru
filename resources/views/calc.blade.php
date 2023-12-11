<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Итоги гонки</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-dark text-white">
       
                                <div>
                                    <h1>&nbsp;&nbsp;&nbsp;Результаты заезда следующие.</h1>
                                </div>
								<div class="btn-group" role="group" aria-label="Basic example">
								<form method = "head" action="calc">
								<button type="submit" class="btn btn-success">Обновить</button>
								</form>
								<form method = "head" action="csv">
								<button type="submit" class="btn btn-success">Скачать в csv</button>
								</form>
								</div>
								<div>
								<table border="1" width="100%">
									<THEAD>
									<th>Место</th>
									<th>Имя пилота</th>
									<th>Город пилота</th>
									<th>Автомобиль</th>
									<th>Результат</th>
								</THEAD>
								<TR>
									@foreach ($array_itogo as $element)
									<TD>{{$element['mesto']}}</TD>
									<TD>{{$element['name']}}</TD>
									<TD>{{$element['city']}}</TD>
									<TD>{{$element['car']}}</TD>
									<TD>{{$element['result']}}</TD>
								</TR>
								@endforeach
								</table>
																</div>

                      
    </body>
</html>
