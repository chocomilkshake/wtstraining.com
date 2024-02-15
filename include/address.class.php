<?php

class Address{

    public function region($con){
        
        $regionSql = mysqli_query($con,"SELECT * FROM refregion");
        
        while($regionData = mysqli_fetch_array($regionSql)){
            echo "<option value = '".$regionData['regCode']."'>".$regionData['regDesc']."</option>";
        }        
    }
    
    public function province($con,$regCode){
        
        $regionSql = mysqli_query($con,"SELECT * FROM refprovince WHERE regCode='$regCode'");
        
        while($regionData = mysqli_fetch_array($regionSql)){
            echo "<option value = '".$regionData['provCode']."'>".$regionData['provDesc']."</option>";
        }        
    }

    public function city($con,$provCode){
        
        $citySql = mysqli_query($con,"SELECT * FROM refcitymun WHERE provCode='$provCode'");
        
        while($cityData = mysqli_fetch_array($citySql)){
            echo "<option value = '".$cityData['citymunCode']."'>".$cityData['citymunDesc']."</option>";
        }        
    }

    public function brgy($con,$citymunCode){
        
        $brgySql = mysqli_query($con,"SELECT * FROM refbrgy WHERE citymunCode='$citymunCode'");
        
        while($brgyData = mysqli_fetch_array($brgySql)){
            echo "<option value = '".$brgyData['brgyDesc']."'>".$brgyData['brgyDesc']."</option>";
        }        
    }


}

?>