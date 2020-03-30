<?php require_once __DIR__ . '/../includes/header.php' ?>

<?php require_once __DIR__ . '/../includes/admin-nav.php' ?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-3">
        <h3 class="font-weight-bold">Categories</h3>
        <a href="/categories/create" class="btn text-white bg-secondary">Add Category</a>
    </div>

    <?php if(count($categories)) : ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($categories as $category) : ?>
                        <tr>
                            <td><?= $category->id ?></td>
                            <td><?= $category->name ?></td>
                            <td><?= $category->created_at ?></td>
                            <td class="d-flex">
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="/categories/delete/<?= $category->id ?>" method="post">
                                    <button class="btn btn-sm btn-danger ml-3" type="submit">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <div class="row">
            <div class="col-md-12">
                <p class="font-weight-bold">No categories added yet</p>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . '/../includes/footer.php' ?>