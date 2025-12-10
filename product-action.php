<?php session_start();
require "./conn.php";
if($_POST['action'])
{
$action=$_POST['action'];
if($action=="Add")
{
        if($_POST['name'] && $_POST['price'] && $_POST['quantity'])
        {
            $name=$_POST['name'];
            $price=$_POST['price'];
            $quantity=$_POST['quantity'];

            $pcode="ESH".rand(1000,9999);
            
        //Sql Query for Sing In...
        $sql="insert into tbl_products(pcode,name,price,quantity) values('$pcode','$name','$price','$quantity')";

            if(mysqli_query($conn,$sql))
            {

                echo "Record added successfully...";
            }
            else
            {
                echo "Record not added successfully.Error:".mysqli_error($conn);
            }
        }
        else
        {
            echo "Please complete form";
        }
    }
    else if($action=="Update")
        {
            if($_POST['id'] && $_POST['name'] && $_POST['price'] && $_POST['quantity'])
            {
                $id=$_POST['id'];
                $name=$_POST['name'];
                $price=$_POST['price'];
                $quantity=$_POST['quantity'];

    
                
            //Sql Query for Sing In...
            $sql="update tbl_products set name='$name',price='$price',quantity='$quantity' where id='$id'";
    
                if(mysqli_query($conn,$sql))
                {
    
                    echo "Record updated successfully.";
                }
                else
                {
                    echo "Record not addupdateded successfully.Error:".mysqli_error($conn);
                }
            }
            else
            {
                echo "Please complete form.";
            }
        }

    }
?>