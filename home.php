<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet"  href="style.css">
    <style>
		/* Navbar styles */
		.navbar {
			background-color: #333;
			overflow: hidden;
		}

		.navbar a {
			float: left;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.navbar a:hover {
			background-color: #ddd;
			color: black;
		}

		.navbar a.active {
			background-color: #4CAF50;
			color: white;
		}

        .footer {
			background-color: #f2f2f2;
			padding: 5px;
			text-align: center;
			font-size: 14px;
			color: #666;
			position: absolute;
			bottom: 0;
			width: 100%;
			bottom: auto;
		}

        /* Inventory styles */
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

        h2{
            text-align: center;
            color: #4CAF50;
        }
		.panel-body form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 0 auto;
			max-width: 500px;
			padding: 20px;
			border: 1px solid #ccc;
		}
		label {
			display: block;
			font-weight: bold;
		}
		.form-group {
			margin: 10px 0;
		}

		input[type="text"],
		input[type="password"],
		input[type="number"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			margin-top: 5px;
		}

		.radio-inline {
			display: inline-block;
			margin-right: 10px;
		}
		.btn-primary {
			background-color: #007bff;
			border-color: #007bff;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			font-size: 16px;
			margin-top: 10px;
		}

		.btn-primary:hover {
			background-color: #0069d9;
			border-color: #0062cc;
			color: #fff;
		}

	</style>
</head>
<body>
    <!-- Navbar HTML -->
	<div class="navbar">
		<a class="active" href="#">Medicare</a>
		<a href="#">Home</a>
		<a href="#">About Us</a>
		<a href="#">Product</a>
		<a href="#">Contact Us</a>
        <a href="logout_process.php"><div style="float:right"><button>logout</button></div></a>
	</div>


    <!-- Inventory HTML -->
	<table>
		<thead>
			<tr>
				<th>Medicine</th>
				<th>Description</th>
				<th>Price</th>
				<th>Available at</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Paracetamol</td>
				<td>Pain relief medication</td>
				<td>$5</td>
				<td>ABC Pharmacy, XYZ Pharmacy</td>
			</tr>
			<tr>
				<td>Ibuprofen</td>
				<td>Nonsteroidal anti-inflammatory drug (NSAID)</td>
				<td>$7</td>
				<td>DEF Pharmacy, GHI Pharmacy</td>
			</tr>
			<tr>
				<td>Aspirin</td>
				<td>Analgesic and anti-inflammatory drug</td>
				<td>$6</td>
				<td>JKL Pharmacy, MNO Pharmacy</td>
			</tr>
		</tbody>
	</table>
	<p> ADD NEW ID'S</p>
	<div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">=
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>


    <div class="footer">
		<p>&copy; 2023 Medicare. All rights reserved.</p>
		<p>Designed by bhuvnesh@technologies</p>
	</div>
    

    <!-- <a href="logout_process.php"><div style="float:right"><button>logout</button></div></a>  -->

    <h2 style="font-style:italic;">Live Younger Live Free..!, Stay Safe...!</h>


</body>
</html>