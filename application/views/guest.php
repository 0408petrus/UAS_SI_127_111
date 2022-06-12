<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Selamat Datang Guest!</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Halo Praktikan!</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo base_url('guestcontrol') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Informasi Laboratorium
                            </a>
                            <a class="nav-link" href="admin/hitungnilai">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Hitung Nilai
                            </a>
                            <a class="nav-link" href="admin/kalkulator">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kalkulator
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            <a class="nav-link" href="<?=base_url('guestdatamahasiswa3'); ?>" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Database Praktikan
                                
                            </a>
	
							<a class="nav-link" href="<?=base_url('guestgambar'); ?>" >
                                <div class="sb-nav-link-icon"><i class="nav-icon far fa-image"></i></div>
                                Kartu Tanda Praktikan
                                
                            </a>


                            <div class="sb-sidenav-menu-heading"></div>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Guest
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Informasi Laboratorium</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Praktikan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Daftar Mahasiswa KOM-C Laboratorium 6
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">

                                    <thead>
                                       <tr> 
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>KOM</th>
                                        </tr> 
                                    </thead>
                                    
                                    <tfoot>
                                       <tr> 
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>KOM</th>
                                        </tr> 
                                    </tfoot>
                                    <tbody>
				<tr> 
					<td>1</td>
					<td>Ayu Prasinta</td>
					<td>201401109</td>
					<td>C</td>
				</tr>
				<tr> 
					<td>2</td>
					<td>Wina Octaria Saragih</td>
					<td>201401110</td>
					<td>C</td>
				</tr> 
				<tr> 
					<td>3</td>
					<td>Chindy Brigita Br Sihotang</td>
					<td>201401111</td>
					<td>C</td>
				</tr>
        <tr> 
					<td>4</td>
					<td>Aldo Enriko Paulenta Panjaitan</td>
					<td>201401112</td>
					<td>C</td>
				</tr>
				<tr> 
					<td>5</td>
					<td>Hasnah Dewi</td>
					<td>201401113</td>
					<td>C</td>
				</tr> 
				<tr> 
					<td>6</td>
					<td>Ardianto Kristian Lumbantobing</td>
					<td>201401114</td>
					<td>C</td>
				</tr>
        <tr> 
					<td>7</td>
					<td>Arifandi Hasnuagi</td>
					<td>201401115</td>
					<td>C</td>
				</tr>
				<tr> 
					<td>8</td>
					<td>M. Ridwan Lubis</td>
					<td>201401116</td>
					<td>C</td>
				</tr> 
				<tr> 
					<td>9</td>
					<td>Syabrina Ramadhani Kamal</td>
					<td>201401117</td>
					<td>C</td>
				</tr>
        <tr> 
					<td>10</td>
					<td>Edwin Brayen Lumbantobing</td>
					<td>201401118</td>
					<td>C</td>
				</tr>
				<tr> 
					<td>11</td>
					<td>Farrel Dwi Prayogo</td>
					<td>201401119</td>
					<td>C</td>
				</tr> 
				<tr> 
					<td>12</td>
					<td>Rani Syafitri</td>
					<td>201401120</td>
					<td>C</td>
				</tr>
        <tr> 
					<td>13</td>
					<td>Yogi Piranda</td>
					<td>201401121</td>
					<td>C</td>
				</tr>
				<tr> 
					<td>14</td>
					<td>Delpiero</td>
					<td>201401122</td>
					<td>C</td>
				</tr> 
				<tr> 
					<td>15</td>
					<td>Muhammad Rizieq Destian</td>
					<td>201401123</td>
					<td>C</td>
				</tr>
        <tr> 
					<td>16</td>
					<td>Andiko Ekarina Pindonta Bangun</td>
					<td>201401124</td>
					<td>C</td>
				</tr>
				<tr> 
					<td>17</td>
					<td>Susi Susanti Telaumbanua</td>
					<td>201401125</td>
					<td>C</td>
				</tr> 
				<tr> 
					<td>18</td>
					<td>Sutan Maulana Abi Yasid Nasution</td>
					<td>201401126</td>
					<td>C</td>
				</tr>
        <tr> 
					<td>19</td>
					<td>Petrus Marcelino H. Tampubolon</td>
					<td>201401127</td>
					<td>C</td>
				</tr>
				<tr> 
					<td>20</td>
					<td>Muhammad Alfatih Zanqi</td>
					<td>201401128</td>
					<td>C</td>
				</tr> 
				<tr> 
					<td>21</td>
					<td>Fazral Hans</td>
					<td>201401129</td>
					<td>C</td>
				</tr>				
        <tr> 
					<td>22</td>
					<td>Rizka Aulia Putri Pane</td>
					<td>201401130</td>
					<td>C</td>
				</tr>
				<tr> 
					<td>23</td>
					<td>Audrey Malika Br Sitepu</td>
					<td>201401131</td>
					<td>C</td>
				</tr> 
				<tr> 
					<td>24</td>
					<td>Yehezkiel Ferdinand Tonglo</td>
					<td>201401132</td>
					<td>C</td>
				</tr>
        <tr> 
					<td>25</td>
					<td>Dito Athalah Majid</td>
					<td>201401133</td>
					<td>C</td>
				</tr>
			</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; IKLC USU 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
