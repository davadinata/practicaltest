<h2>Tambah Distributor</h2>
<form action="<?= base_url('distributor/insert') ?>" method="post">
    <label for="distributor_name">Nama Distributor:</label>
    <input type="text" name="distributor_name" required>
    <br>
    <label for="city">City:</label>
    <input type="text" name="city" required>
    <br>
    <label for="state_region">State Region:</label>
    <input type="text" name="state_region" required>
    <br>
    <label for="city">Country:</label>
    <select name="link" id="link" class="form-control">
        <option selected value="N">Pilih...</option>
        <option value="ID">Indonesia</option>
        <option value="N">Nigeria</option>
    </select>
    <br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" required>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <br>
    <button type="submit">Tambah</button>
</form>