<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['ssd_Brand_select'];
            $speed = $_POST['ram_Speed_select'];
            $capacity = $_POST['ssd_Capacity_select'];
            $write_speed = $_POST['write_Speed_select'];
            $model_no = $_POST['model'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/ssd/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into ssd(brand,speed,capacity,write_speed,model_no,price,quantity,description,picture) values ('$brand','$speed','$capacity','$write_speed','$model_no','$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Product Add Sucessful";

        ?>
    </body>
</html>