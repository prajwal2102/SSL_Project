// if ($_SESSION["pname"] == $var)
        // {
        //     $_SESSION["price"] = test_input($_POST["price"]);
        //     $_SESSION["stock"] = test_input($_POST["quantity"] );
        //     $_SESSION["description"] = test_input($_POST["description"]);
        //     $_SESSION["author"] = test_input($_POST["author"] );
        //     $_SESSION["edition"] = test_input($_POST["edition"] );
        //     $_SESSION["genre"] = test_input($_POST["genre"] );
        //     $_SESSION["publitionDate"] = test_input($_POST["publitionDate"] );
        //     $_SESSION["keywords"] = str_replace(' ','#', test_input($_POST["keywords"]));
        //     $sql = "DELETE FROM product WHERE pid ='".$_SESSION["pid"]."'";
        //     $result = $conn -> query($sql);
        //     $sql = "INSERT INTO product(pname, price, stock, description, sid, author, genre,  edition, keywords, publishingDate)
        //     VALUES ('".$_SESSION["pname"]."', '".$_SESSION["price"]."', '".$_SESSION["stock"]."', '".$_SESSION["description"]."', 
        //     '".$_SESSION["sid"]."', '".$_SESSION["author"]."', '".$_SESSION["genre"]."',
        //     '".$_SESSION["edition"]."', '".$_SESSION["keywords"]."', '".$_SESSION["publitionDate"]."')";
        //     $result = $conn->query($sql);



        //     $sql = "SELECT * FROM product WHERE pname ='".$_SESSION["pname"]."'
        //     and author='".$_SESSION["author"]."' and edition='".$_SESSION["genre"]."' and sid='".$_SESSION["sid"]."'";
        //     $result = $conn -> query($sql);
        //     $row = $result->fetch_assoc();
        //     $_SESSION["pid"] = $row["pid"];
        //     $conn->close();
        //     
		// 	<script>
    	// 		alert('Product has been edited'); 
    	// 		window.location.href= "./sellerlogin.php";
    	// 	</script>

		// 
        // }
        // else
        // {