<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Oriflame</title> 
 <link href="stylecalendar.css" rel="stylesheet" type="text/css" />
 
</head>

<body>
	<table cellspacing="3px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9900FF">
			<td colspan="3" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.eu.gg">
					<div id="calendar">
						CALENDAR
					</div>
					
					<div id="logo">
						<img src="smalllogo.png" height="100px" style="border: none;">
					</div>
				</a>
			</td>
		</tr>
		
		<tr>
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
				Delete event
					<div id="contact-form">
						<form method="get" action="delete_event.php">
							<fieldset>								
								<label for="Id">Choose the ID</label><br>
									<select id="dropdown_menu" name="Id" value="Id">
										<?php
											require 'connect.php';
											$mysql_select = "SELECT Id FROM notes;";
											$result = mysql_query($mysql_select);
											while ($row = mysql_fetch_array($result)) {
												$Id=$row["Id"];
													echo "<option>
														$Id
														</option>";				
											}
											while($row = mysql_fetch_array($result));
										?>
								</select>
								<br><br>
								<input type="submit" name="submit" id="button" value="Delete" />
							</fieldset>
						</form>
					</div>
				</div>
			</td>
		
			<td width="60%" bgcolor="#d5ddde" style="text-align: center; color: #9900FF;">
				<table id="calendarBig">
					<thead>
						<tr><td><td><td>
						<tbody>
						<tr>
						<td>
							<table data-m="0" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">January
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<td>
							<table data-m="1" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">February
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<td>
							<table data-m="2" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">March
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<tr>
						<td>
							<table data-m="3" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">April
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<td>
							<table data-m="4" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">May
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<td>
							<table data-m="5" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">June
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
							<tbody>
							</table>
						<tr>
						<td>
							<table data-m="6" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">July
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
							<tbody>
							</table>
						<td>
							<table data-m="7" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">August
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<td>
							<table data-m="8" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">September
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<tr>
						<td>
							<table data-m="9" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">October
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<td>
							<table data-m="10" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">November
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
						<td>
							<table data-m="11" style="border: 1px solid white; height: 200px;">
								<thead>
								<tr><td colspan="7" style="background: #9900FF; color: white;">December
								<tr><td>Mo<td>Tu<td>We<td>Th<td>Fr<td>Sa<td>Su
								<tbody>
							</table>
				</table>

			<!-- 
			День рождения происходит из года в год, поэтому data-yyyy (год) не указывается.
			Можно чтобы дата была ссылкой на другую страницу, тогда нужно написать data-link (адрес страницы, куда перенаправить пользователя). Одна дата не может вести на несколько страниц [вернее может, но в код нужно внести дополнительные изменения].
			data-dd (день), data-mm (месяц), data-text(сообщение, видимое при наведении курсора мышки) нужно заполнять всегда. Один день может содержать несколько записей, одна дата может иметь только один data-text (см. пример 3).
			-->
			<div id="calendarTable">
			  <div data-dd="18" data-mm="8" data-text="Birthday"></div>
			  <div data-dd="5" data-mm="1" data-yyyy="2013" data-text="регулярные выражения
			JavaScript примеры" data-link="http://shpargalkablog.ru/2013/07/replace.html"></div>
			  <div data-dd="28" data-mm="11" data-yyyy="2013" data-text="? встреча у бабушки
			? поздравить Ивана Ивановича с именинами
			? комета ISON"></div>
			</div>

			<script>
			function calendarBig(year) {
			for (var m = 0; m <= 11; m++) {
			var D = new Date(year,[m],new Date().getDate()),
				Dlast = new Date(D.getFullYear(),D.getMonth()+1,0).getDate(),
				DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
				DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
				calendar = '<tr>';

			if (DNfirst != 0) {
			  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
			}else{
			  for(var  i = 0; i < 6; i++) calendar += '<td>';
			}

			for(var  i = 1; i <= Dlast; i++) {
			  if (i == D.getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
				calendar += '<td class="today">' + i;
			  }else{
				if (
					(i == 1 && D.getMonth() == 0 && ((D.getFullYear() > 1897 && D.getFullYear() < 1930) || D.getFullYear() > 1947)) ||
					(i == 2 && D.getMonth() == 0 && D.getFullYear() > 1992) ||
					((i == 3 || i == 4 || i == 5 || i == 6 || i == 8) && D.getMonth() == 0 && D.getFullYear() > 2004) ||
					(i == 7 && D.getMonth() == 0 && D.getFullYear() > 1990) ||
					(i == 23 && D.getMonth() == 1 && D.getFullYear() > 2001) ||
					(i == 8 && D.getMonth() == 2 && D.getFullYear() > 1965) ||
					(i == 1 && D.getMonth() == 4 && D.getFullYear() > 1917) ||
					(i == 9 && D.getMonth() == 4 && D.getFullYear() > 1964) ||
					(i == 12 && D.getMonth() == 5 && D.getFullYear() > 1990) ||
					(i == 7 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 2005)) ||
					(i == 8 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 1992)) ||
					(i == 4 && D.getMonth() == 10 && D.getFullYear() > 2004)
				   ) {
				  calendar += '<td class="holiday">' + i;
				}else{
				  calendar += '<td>' + i;
				}
			  }
			  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
				calendar += '<tr>';
			  }
			}

			if (DNlast != 0) {
			  for(var  i = DNlast; i < 7; i++) calendar += '<td>';
			}

			document.querySelector('#calendarBig table[data-m="' + [m] + '"] tbody').innerHTML = calendar;
			document.querySelector('#calendarBig > thead td:nth-child(2)').innerHTML = 'CALENDAR FOR ' + year + ' YEAR';
			document.querySelector('#calendarBig > thead td:nth-child(1)').innerHTML = 'CALENDAR FOR ' + parseFloat(parseFloat(year)-1) + ' YEAR';
			document.querySelector('#calendarBig > thead td:nth-child(3)').innerHTML = 'CALENDAR FOR ' + parseFloat(parseFloat(year)+1) + ' YEAR';

			// абзац создаёт сообщения
			for (var k = 1; k <= document.querySelectorAll('#calendarTable div').length; k++) {
			  var myD = document.querySelectorAll('#calendarBig table td'),
				  my = document.querySelector('#calendarTable div:nth-child(' + [k] + ')');
			  for (var i = 0; i < myD.length; i++) {
				if (my.dataset.yyyy) {
				  if (myD[i].innerHTML == my.dataset.dd && myD[i].parentNode.parentNode.parentNode.dataset.m == (my.dataset.mm - 1) && year == my.dataset.yyyy) {
					myD[i].title = my.dataset.text;
					if (my.dataset.link) {
					  myD[i].innerHTML = '<a href="' + my.dataset.link + '" target="_blank">' + myD[i].innerHTML + '</a>';
					}
				  }
				}else{
				  if (myD[i].innerHTML == my.dataset.dd && myD[i].parentNode.parentNode.parentNode.dataset.m == (my.dataset.mm - 1)) {
					myD[i].title = my.dataset.text;
					if (my.dataset.link) {
					  myD[i].innerHTML = '<a href="' + my.dataset.link + '" target="_blank">' + myD[i].innerHTML + '</a>';
					}
				  }
				}
			  }
			}

			}}

			calendarBig(new Date().getFullYear());
			document.querySelector('#calendarBig > thead td:nth-child(1)').onclick = calendarBigG;
			document.querySelector('#calendarBig > thead td:nth-child(3)').onclick = calendarBigG;
			function calendarBigG() {calendarBig(this.innerHTML.replace(/[^\d]/gi, ''));}

			</script>
			</td>
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
				Add new event
					<div id="contact-form">
						<form method="get" action="new_event.php">
							<fieldset>								
								<label for="Event">Event</label><br>
								<input type="text" name="Event"/><br>
								
								<label for="Day">Day</label><br>
								<input type="text" name="Day"/><br>
								
								<label for="Time">Time</label><br>
								<input type="text" name="Time"/><br><br>
								
								<input type="submit" name="submit" id="button" value="Add" />
							</fieldset>
						</form>
					</div>
				</div>
			</td>
		</tr>
	</table>	
</body>


</html>