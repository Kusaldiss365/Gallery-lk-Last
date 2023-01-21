<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="faq.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>FAQ</title>
</head>
<body>

<div class="header">
                <h1 class="logo"><a href="../home/homepage.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></h1>
            <ul class="main-nav">
                <li><a href="../home/homepage.php">Home</a></li>
                <li><a href="../User/user.php">My Account</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="25px"></button>
                    <div class="dropdown1">
                    <a href="#">Polices</a>
                    </div>
                  </div>
                </li>
            </ul>
</div>

		
<div class="body">
		<!-- <div>
                    <a href="../User/user.php"><button class="backbtn" >back</button></a>
        </div> -->
		<div class="accordion">
			<div class="contentbx">
			<div class="label">How to add post</div>
			<div class="content">
			<p>You can go to the option "Post ad" in user dashboard and fill out the necessary form and press "Post Ad" to get your ad Posted. </p>
			</div>
		</div>
		
		<div class="contentbx">
			<div class="label">How to Delete post</div>
			<div class="content">
			<p>You have go to the option "My Ads" in user dashboard and select "Remove ad" in order to remove the desired Advertisement.</p>
			</div>
		</div>
		
		<div class="contentbx">
			<div class="label">How to buy</div>
			<div class="content">
			<p>You can Select the Option "Contact Seller" under every advertisement to get the contact details of the seller to arrange a purchasing method.</p>
			</div>
		</div>
		</div>
		
		
	
	
	<script>
		const accordion = document.getElementsByClassName
		("contentbx");
		for(i=0;i<accordion.length;i++){
			accordion[i].addEventListener("click",function(){
			this.classList.toggle("active")})
			}
	</script>	
	
</body>
</html>