<?php include 'inc/header.php'?>

<div class="container job-wrapper">
    <a href="index.php" class="btn btn-sm btn-primary btn-goback"><< Go back</a>
    <div class="row">
        <div class="col-md-8">
            <h1 class="job-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h1>
            <h5><small>
                    Posted by <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?>
                </small></h5>
            <p><?php echo $job->description; ?></p>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><strong>Company: <?php echo $job->company; ?></strong></li>
                <li class="list-group-item"><strong>Salary: <?php echo $job->salary; ?></strong></li>
                <li class="list-group-item"><strong>Contact email: <?php echo $job->contact_email; ?></strong></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="well d-flex align-items-center">
                <a href="edit.php?id=<?php echo $job->id ?>" class="btn btn-info btn-sm">Edit</a>
                <form style="margin:0" method="post" action="job.php">
                    <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'?>
