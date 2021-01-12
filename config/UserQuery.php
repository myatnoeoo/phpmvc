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

        public static function edit($request)
        {
            include("database.php");
            $id = $request['id'];
            $name = $request['name'];
            $email = $request['email'];
            $password = $request['password'];

            $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = $id";
            mysqli_query($conn, $sql);

            return true;

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

        public static function delete($id)
        {
            include("database.php");

            $sql = mysqli_query($conn, "DELETE FROM users WHERE id = $id");

            mysqli_query($conn, $sql);

            return true;


        }
    }
?>