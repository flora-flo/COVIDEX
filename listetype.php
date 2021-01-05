<div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-striped custom-table">
                                <?php
                                include "../controller/typeC.php";
                                $besoin=new typeC();
                                $listebesoin=$besoin->affichert();
                                ?>
                                <thead>
                                <tr>
                                    <th>ID </th>
                                    <th>TYPE</th>

                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <?php
                                    foreach($listebesoin as $row){
                                    ?>

                                    <td><?php
                                        echo $row['idtype']
                                        ?></td>
                                    <td><?php
                                        echo $row['type']
                                        ?></td>
                                    </tr>
                                    <?php
                                     }
                                    ?>
                                    </div>
                                    </div>
                                    </tbody>