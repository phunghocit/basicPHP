<?php 
    function prepareInsertStatement($arrayData,$table='users'):string{
        $columns=implode(',',array_keys($arrayData));
        $arrayValues = array_map(function($item){return "'".$item."'";},array_values($$arrayData));
        $values = implode(',',$arrayValues);
        return"INSERT INTO $table ($columns) VALUES ($values)";            
    }
    function prepareUpdateStatement($arrayData,$table='users',$id):string{
        $list=[];
        foreach($arrayData as $key => $value){
            $list[]="$key ='".$value."'"; 
        }
        $listData = implode(',',$list);
        return "UPDATE $table SET $listData where id =$id";            
    }
?>