<?php include 'inc/header.php'?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Create Job</h2>
            <form method="post" action="create.php">
                <div class="form-group">
                    <label>Company</label>
                    <input type="text" class="form-control" name="company">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        <option value="0">Choose category</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Job title</label>
                    <input type="text" class="form-control" name="job_title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" name="location">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" class="form-control" name="salary">
                </div>
                <div class="form-group">
                    <label>Contact user</label>
                    <input type="text" class="form-control" name="contact_user">
                </div>
                <div class="form-group">
                    <label>Contact email</label>
                    <input type="text" class="form-control" name="contact_email">
                </div>
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">

            </form>
        </div>
    </div>
</div>


<?php include 'inc/footer.php'?>
