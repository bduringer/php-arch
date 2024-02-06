<?php
    function all($table,$fields =  '*'){
        try {
            $connect = connect();
            $query = $connect->query("select {$fields} from {$table}");
            return $query->fetchAll();
        } catch (PDOException $th) {
            var_dump($th->getMessage());
        }
    }

    function findBy($table,$field, $value, $fields="*"){
        try {
            $connect = connect();
            $query = "select {$fields} from {$table} where {$field} = :{$field}";
            $prepare = $connect->prepare($query);
            $prepare->execute([
                $field => $value
            ]);
            return $prepare->fetch();
        } catch (PDOException $th) {
            var_dump($th->getMessage());
        }
    }