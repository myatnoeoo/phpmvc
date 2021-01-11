<?php

    class UserQuery{
        
        public static function all()
        {
            $data = [];
            include("database.php");

            $query = mysqli_query($conn, "SELECT * FROM users");

            while($user = mysqli_fetch_assoc($query)){
                $data[] = $user;
            }
            
            return $data;
        }

        public static function find($id)
        {
            include("database.php");

            $query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

            $user = mysqli_fetch_assoc($query);

            return $user;
        }

        public static function create($request)
        {
            include("database.php");

            $name = $request['name'];
            $email = $request['email'];
            $password = $request['password'];

            $sql = "INSERT INTO users (
                name, email, password
            ) VALUES (
                '$name', '$email', '$password'
            )";

            mysqli_query($conn, $sql);

            return true;
        }
    }
?>