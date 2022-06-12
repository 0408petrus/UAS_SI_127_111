<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Contoh Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style_kalkulator.css'?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

		  
	<h2 align="center">IKLC Kalkulator</h2>
	<center><table>
		<tr>
			<td colspan="5">
				<input type="text" disabled id="output" value="0">
			</td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('1')">1</button></td>
			<td><button class="btn" onclick="btn('2')">2</button></td>
			<td><button class="btn" onclick="btn('3')">3</button></td>
			<td><button class="btn opr" onclick="btn_opr(1)">*</button></td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('4')">4</button></td>
			<td><button class="btn" onclick="btn('5')">5</button></td>
			<td><button class="btn" onclick="btn('6')">6</button></td>
			<td><button class="btn opr" onclick="btn_opr(2)">/</button></td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('7')">7</button></td>
			<td><button class="btn" onclick="btn('8')">8</button></td>
			<td><button class="btn" onclick="btn('9')">9</button></td>
			<td><button class="btn opr" onclick="btn_opr(3)">-</button></td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('0')">0</button></td>
			<td><button class="btn" onclick="koma()">.</button></td>
			<td><button class="btn clr" onclick="clr()">C</button></td>
			<td><button class="btn opr" onclick="btn_opr(4)">+</button></td>
		</tr>
		<tr>
			<td colspan="5"><button class="btn hsl" style="width: 100%" onclick="hitung()">=</button></td>
		</tr>
	</table></center>
	
	<div class="container">
	<footer id="location" class="text-center mt-3 mb-3">
              <img src="https://1.bp.blogspot.com/-6RpiV7ldkHk/YI5_Pa97hcI/AAAAAAAAADU/W7Mn3wYZspIKYl04b3Gft6UKhbAtISiWQCNcBGAsYHQ/s320/IKLC.png" height="100" width="200"></img> 
              <p>&#169; IKLC USU 2020-2021 All Rights Reserved</p>
            </footer>
            </div>
	<script type="text/javascript" src="<?php echo base_url().'js/operasi_kalkulator.js' ?>"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>       
  
</body>
</html>