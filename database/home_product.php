<?php

    $coffees_sql = "SELECT * FROM coffees";
    $coffees_result = $conn->query($coffees_sql);

            
    if ($coffees_result->num_rows > 0) 
    {


        for($i_beverage=0; $i_beverage <=3 && $row = $coffees_result->fetch_assoc(); $i_beverage++ )
        {
            echo
            "
                <div class='product-card clickable cd1' >
                    <div class='category-card-filter'></div>
                    <img src='".$row['coffees_image']."'>
                    <div class='product-text-cont'>
                    
                        <h3>".$row['coffees_name']."</h3>
                        <p class='star-review-cont'>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <span>(".$row['coffees_star'].")</span>
                            
                        </p>
                        <h3>₱<span>".$row['coffees_cost']."</span></h3>
                    </div>
                </div>
                
            ";

        }

        echo
        "
            <div class='product-card clickable pc4'>
                <h2 style='color:white;'>See More</h2>
            </div>
        ";
    } 
        
    else {
    
        echo
        "
        <span>No Data</span>
        ";
    
    }  

?>