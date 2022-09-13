<?php

require_once "../classes/class.user.php";
require_once '../components/home-head-2.php';

$agent = new Agent();

?>

    <!--- Main section  --->
    <section class="main">

        <?php if(isset($_SESSION['session_id'])): ?>

        <!-- sub-heading -->
        <div class="row align-items-center container my-3 mx-auto" style="padding: .5rem;">
            <h1 class="text-center">Vacancies posted</h1>
            <a href="vacancy-post" style="border-radius: .4rem; width: fit-content; color: #fff; background: #27ae60; cursor: pointer; outline: transparent!important;border: transparent!important; box-shadow: none!important;">New Vacancy</a>
            <a href="hostel" style="border-radius: .4rem; width: fit-content; color: #fff; background: #27ae60; cursor: pointer; outline: transparent!important;border: transparent!important; box-shadow: none!important; margin-left: auto;">View Vacancy</a>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Location</th>
                            <th scope="col">Area</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                            <th scope="col">Address</th>
                            <th scope="col">Description</th>
                            <th scope="col">Agent in charge</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Image</th>
                            <th scope="col">Date</th>
                            <th scope="col">Admin</th>
                        </tr>
                        <?php $result = $agent->getPostedVacancyAgent(); $num = 1;
                            while ($row = $result->fetch()) {
                                $id = $row['id'];
                                $location = $row['location'];
                                $area = $row['area'];
                                $price = $row['price'];
                                $type = $row['type'];
                                $address = $row['address'];
                                $description = $row['description'];
                                $agent_name = $row['agent_name'];
                                $agent_number = $row['agent_number'];
                                $image = $row['agent_image'];
                                $date = $row['date'];
                        ?>
                        <tr>
                            <td scope="row"><?php echo $num; ?></td>
                            <td><?php echo $location; ?></td>
                            <td><?php echo $area; ?></td>
                            <td><?php echo number_format($price); ?></td>
                            <td><?php echo $type; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><?php echo $description; ?></td>
                            <td><?php echo $agent_name; ?></td>
                            <td><?php echo $agent_number; ?></td>
                            <td> <?php echo '<img src="'.$image.'" width=50; height=50; alt="">';?> <a href="picture?id=<?php echo $id ?>" style="font-weight: 650; text-decoration: underline!important;">EDIT</a></td>
                            <td><?php echo $date; ?></td>
                            <td><a href="delete?id=<?php echo $id; ?>" class="btn btn-danger" style="margin: .5rem;">Remove</a></td>
                        <?php
                        $num++; }
                        ?>   
                        </tr>
                    </thead>
                </table>
            </div>

        <div class="footer">
            <div class="copyright" style="text-align: center; color: #27ae60; font-weight: 600; margin-top: 3rem;">
                Yarnsh &copy; 2022
            </div>
        </div>

        <?php else: ?>

            <p>You are currently not logged in, please <a href="login" style="color: #27ae60; text-decoration: underline!important; font-size: 1.1rem; font-weight: 600;">Login</a></p>

        <?php endif ?>

    </section>
    <!--- Main section ends  --->


<?php

require_once '../components/home-foot.php';

?>