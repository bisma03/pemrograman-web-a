
<?php require ROOT_PATH . '/app/views/layouts/header.php'; ?>

<div class="mb-4">
    <h1 class="h3">Tambah Kategori</h1>
    <p class="text-secondary">
        Masukkan informasi kategori barang.
    </p>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="<?= e(base_url('categories/store')) ?>"
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
                    placeholder="Contoh: Elektronik"
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
                    placeholder="Masukkan deskripsi kategori"
                ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

            <a href="<?= e(base_url('categories')) ?>"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

<?php require ROOT_PATH . '/app/views/layouts/footer.php'; ?>
