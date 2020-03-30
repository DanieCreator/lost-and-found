<?php require_once __DIR__ . '/../includes/header.php' ?>

<?php require_once __DIR__ . '/../includes/admin-nav.php' ?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h3 class="font-weight-bold">New Category</h3>
            <a href="/categories" class="btn text-white bg-secondary">Back</a>
        </div>

        <form action="/categories/store" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>

            <div class="clearfix my-3">
                <button class="btn bg-secondary text-white float-right" type="submit">Submit</button>
            </div>
        </form>
    </div>

<?php require_once __DIR__ . '/../includes/footer.php' ?>