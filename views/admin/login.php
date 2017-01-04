<?php
require(ROOT . '/views/layouts/admin/header.php');
?>
<div class='row'>
    <div class="col-md-3 col-md-offset-4">
        <h4>Admin login</h4>
        <?php if (isset($errors) && $errors): ?>
            <div class="alert alert-danger" role="alert"><?php echo $errors; ?></div>
        <?php endif; ?>
        <form method="post" action="/admin/login">
            <div class="form-group">
                <label for="email">Email address</label>
                <input id="email" type="email" class="form-control" 
                       placeholder="Email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" 
                       placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php
require(ROOT . '/views/layouts/admin/footer.php');