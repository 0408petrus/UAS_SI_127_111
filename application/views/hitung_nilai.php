<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Perhitungan Nilai Mahasiswa</title>

  <link href="<?php echo base_url().'css/hitung_nilai.css'?>" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	
</head>
<body>


<table align="center">
<form name="tform">   
    <tr>
        <td width="100%" colspan="2"><h2 align="center">Hitung Nilai IPK</h2></td>
    </tr>
    <tr>
    <td>Quiz  (15%):&emsp;&emsp;<input type="text" size="11" name="kuis"></td>
	</tr>
	<tr>
	<td>Tugas (25%):&emsp;&nbsp;<input type="text" size="11" name="tugas"></td>
	</tr>
	<tr>
	<td>UTS   (20%):&emsp;&emsp;&nbsp;<input type="text" size="11" name="uts"></td>
	</tr>	
	<tr>
	<td>UAS   (30%):&emsp;&emsp;&nbsp;<input type="text" size="11" name="uas"></td>
	</tr>	
        
    <tr align="center">
        <td>
        <input type="button" value="OK" onclick="hitung()">
        <input type="reset" value="Reset">
        </td>
    </tr>
    <tr align="center">
        <td colspan="4" width="50%" align="center">Indeks Prestasi <input type="text" size="10" name="ipk"><br><br>&nbsp;&nbsp;&nbsp;Keterangan&emsp;<input type="text" size="20" name="ket"></td>
    </tr>
    </form>
</table>
			<div class="container">
				<footer id="location" class="text-center mt-3 mb-3">
				<img src="https://1.bp.blogspot.com/-6RpiV7ldkHk/YI5_Pa97hcI/AAAAAAAAADU/W7Mn3wYZspIKYl04b3Gft6UKhbAtISiWQCNcBGAsYHQ/s320/IKLC.png" height="100" width="200"></img> 
				<p>&#169; IKLC USU 2020-2021 All Rights Reserved</p>
            </footer>
            </div>
			<script type="text/javascript" src="<?php echo base_url().'js/hitung_nilai.js'?>"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>       
      
</body>
</html>