<?php

function all( $table, $fields = '*' ) {
    try {
        $connect = connect();
        $query =  $connect->query("SELECT {$fields} FROM {$table}");
        return $query->fetchAll();
    } catch (PDOException $exception) {
        var_dump($exception->getMessage());
    }
}

function findBy($table, $attribute, $value, $fields = '*' ) {
    try {
        $connect = connect();
        $prepare =  $connect->prepare("SELECT {$fields} FROM {$table} WHERE {$attribute} = :{$attribute}");
        $prepare->execute([
            $attribute => $value
        ]);
        return $prepare->fetch();
    } catch (PDOException $exception) {
        var_dump($exception->getMessage());
    }
}