<?php
 
 $con = mysqli_connect("localhost","root","","login");

if(mysqli_connect_error()){
    echo "
                <script>
                    alert('Failed to connect with database');
                </script>";
}