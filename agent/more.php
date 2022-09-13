<?php

require_once "../classes/class.user.php";

$agent = new Agent();

#if (isset($_POST['last_file_id'])) {
    $id = $_POST['last_file_id'];
    $result = $agent->getPostedVacancy_2($id);
    $num = 1;
    ?>
    <div class="list">
        <?php 
            if($result) {
                while ($row = $result->fetch()) {
                    $id = $row['id'];
                    $location = $row['location'];
                    $area = $row['area'];
                    $price = $row['price'];
                    $type = $row['type'];
                    $address = $row['address'];
                    $date = $row['date'];
                    $description = $row['description'];
                    $agent_name = $row['agent_name'];
                    $agent_number = $row['agent_number'];
                    $image = $row['agent_image'];
            ?>
                <div class="box">
                    <div class="box-content">
                        <div class="price">
                            <h3><?php echo number_format($price).'/yr'; ?></h3>
                        </div>
                        <div class="location">
                            <h3><?php echo $location; ?></h3>
                            <h6><?php echo $area; ?></h6>
                            <p><?php echo $address; ?></p>
                        </div>
                        <div class="type">
                            <h3><?php echo $type; ?></h3>
                            <p>Posted: <span style="font-weight: 650;"><?php echo $date; ?></span></p>
                        </div>
                    </div>
                    <div class="buttons">
                        <span href="contact?name=<?php echo $agent_name; ?>&no=<?php echo $agent_number; ?>&img=<?php echo $image; ?>" class="btn">View details</span>
                    </div>
                </div>
            <?php
                $num++; } 
            ?>
            </div>
                <div id="more_new"></div>
                <div id="more">
                    <span id="<?php echo $id; ?>" class="btn show-more" style="width: -webkit-fill-available; margin-right: 1rem!important; margin-left: 1rem;">View more</span>
                </div>
            <?php 
                } 
#}
