<?php include 'inc/header.php'?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Edit job</h2>
            <form method="post" action="edit.php?id=<?php echo $job->id; ?>">
                <div class="form-group">
                    <label>Company</label>
                    <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control">


                        <option value="0">Choose category</option>
                        <?php foreach($categories as $category): ?>
                            <?php if($job->category_id == $category->id): ?>
                                <option value="<?php echo $category->id; ?>" selected><?php echo $category->name ?></option>
                            <?php else: ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Job title</label>
                    <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control"><?php echo $job->description; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
                </div>
                <div class="form-group">
                    <label>Contact user</label>
                    <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
                </div>
                <div class="form-group">
                    <label>Contact email</label>
                    <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">

            </form>
        </div>
    </div>
</div>


<?php include 'inc/footer.php'?>
