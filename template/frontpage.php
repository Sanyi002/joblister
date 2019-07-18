<?php include 'inc/header.php'?>

    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Find a job</h1>
                <form method="get" action="index.php">
                    <select name="category" class="form-control">
                        <option value="0">Choose category</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" class="btn btn-success" value="Find">
                </form>
            </div>
        </div>

        <div class="container">
            <h3><?php echo $title ?></h3>
            <div class="row">
                <?php foreach($jobs as $job): ?>
                    <div class="col-md-12">
                        <h2><?php echo $job->job_title ?></h2>
                        <p><?php echo $job->description ?></p>
                        <p><a class="btn btn-outline-primary btn-sm" href="job.php?id=<?php echo $job->id;?>" role="button">View details &raquo;</a></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <hr>
        </div>
    </main>

<?php include 'inc/footer.php'?>