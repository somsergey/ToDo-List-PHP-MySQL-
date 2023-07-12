<?php
    include 'includes/db.php';
    include 'includes/header.php';
?>

    <div class="container">
        <div class="tasks row">
            <?php
                $quary = "SELECT * FROM tasks";
                $select_all_tasks_quary = mysqli_query($connection, $quary);

                if (!$select_all_tasks_quary) {
                    echo "<h3>There is no tasks</h3>";
                }
                else {
                    echo <<<END
                        <div class="tasks-item col-12">
                            bloop
                        </div>
END;

                }
            ?>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <h5>Add task</h5>
                    <div class="mb-3">
                        <label for="addition_title" class="form-label">Title of task</label>
                        <input name="task_title" type="text" class="form-control" id="addition_title" placeholder="To do something!">
                    </div>
                    <div class="mb-3">
                        <label for="addition_description" class="form-label">Description of task</label>
                        <textarea class="form-control" id="addition_description" rows="3"></textarea>
                    </div>
                    <input type="button" class="btn btn-submit" name="addition_submit">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'?>
