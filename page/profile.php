<div class="container">
    <div class="row">
        <div style="width:100%; padding-top:50px;"></div>
        <div class="col-lg-5">
            <div class="text-container">

                <?php echo $_GET['userid'] ?>

                <?php
                include "koneksi.php";

                // Mengasumsikan $_SESSION['userid'] berisi ID pengguna
                $userId = $_SESSION['userid'];

                // Melakukan query tanpa prepared statement karena tidak ada input dari pengguna
                $sql = "SELECT * FROM students WHERE id_student = $userId";
                $query = mysqli_query($koneksi, $sql);

                if ($query) {
                    while ($row = mysqli_fetch_assoc($query)) {
                ?>
                        <h2>Halo <?php echo $row['name']; ?>!</h2>
                        <hr />
                        <form name="UserForm" method="POST" action="page/update_profile.php">
                            <div class="form-group">
                                <label for="cname">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="cemail">Student ID</label>
                                <input type="number" class="form-control" name="nim" value="<?php echo $row['nim']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Phone</label>
                                <input type="number" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="cemail">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="cemail">Username</label>
                                <input type="text" class="form-control" name="usr" value="<?php echo $row['usr']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-success" style="margin-bottom:50px;">Simpan Perubahan</button>
                        </form>
                <?php
                    }
                } else {
                    echo "Gagal mengambil data dari database.";
                }

                mysqli_close($koneksi);
                ?>
            </div> <!-- end of text-container -->
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->