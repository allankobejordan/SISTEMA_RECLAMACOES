
<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <?= form_open_multipart('/submit') ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Área de reclamação</label>
                    <select type="text" class="form-select" id="area" name="area" required>
                        <option value="1"> Àrea 1</option>
                        <option value="2"> Àrea 2</option>
                        <option value="3"> Àrea 3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="complaint" class="form-label">Área de texto para a reclamação *</label>
                    <textarea type="text" class="form-control" id="complaint" name="complaint" required>
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="files" class="form-label">Upload de arquivos(max 3)</label>
                    <div class="d-flex flex-row justify-content-between gap-3">
                        <input type="file" class="form-control" id="files1" name="files[]"multiple >
                        <input type="file" class="form-control" id="files2" name="files[]"multiple >
                        <input type="file" class="form-control" id="files3" name="files[]"multiple >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

                
            <?= form_close()?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
