
<?php require ROOT_PATH . '/app/views/layouts/header.php'; ?>

<div class="mb-4">
    <h1 class="h3">Edit Kategori</h1>
    <p class="text-secondary">
        Ubah informasi kategori barang.
    </p>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="<?= e(base_url('categories/update/' . $category['id'])) ?>"
              method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">
                    Nama Kategori
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="<?= e($category['name']) ?>"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">
                    Deskripsi
                </label>

                <textarea
                    name="description"
                    id="description"
                    class="form-control"
                    rows="3"
                ><?= e($category['description'] ?? '') ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>

            <a href="<?= e(base_url('categories')) ?>"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

<?php require ROOT_PATH . '/app/views/layouts/footer.php'; ?>
