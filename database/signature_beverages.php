<?php

    $home_beverage_sql = "SELECT * FROM beverages";
    $home_beverage_result = $conn->query($home_beverage_sql);

            
    if ($home_beverage_result->num_rows > 0) 
    {


        for($i_beverage=0; $i_beverage <=4 && $row = $home_beverage_result->fetch_assoc(); $i_beverage++ )
        {
            echo
            "
                <div class='category-card cd1 clickable'>
                    <h3>".$row['beverage_name']."</h3>
                    <img src='".$row['beverage_image']."'>
                    <div class='category-card-filter'></div>
                </div>
                
            ";

        }
    } 
        
    else {
    
        echo
        "
        <span>No Data</span>
        ";
    
    }  

?>