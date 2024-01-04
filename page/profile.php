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

                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <h2>Halo <?php echo $row['name']; ?>!</h2>
                            <hr />
                            <div class="form-group">
                                <label for="cname">Name</label>
                                <input type="text" class="form-control" disabled name="name" value="<?php echo $row['name']; ?>" id="cname" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="cemail">Student ID</label>
                                <input type="number" class="form-control" disabled name="nim" value="<?php echo $row['nim']; ?>" id="cemail" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="cname">Phone</label>
                                <input type="number" class="form-control" disabled name="phone" value="<?php echo $row['phone']; ?>" id="cname" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="cemail">Email</label>
                                <input type="email" class="form-control" disabled name="email" value="<?php echo $row['email']; ?>" id="cemail" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="cemail">Username</label>
                                <input type="text" class="form-control" disabled name="usr" value="<?php echo $row['usr']; ?>" id="cemail" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        <?php
                        }
                        mysqli_close($koneksi);
                        ?>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <script type="text/javascript">
            var ps = document.getElementById("psws");
            var psnew = document.getElementById("pswsnew");

            function validatePsw() {
                if (ps.value != psnew.value) {
                    psnew.setCustomValidity("Password doesn't match!");
                } else {
                    psnew.setCustomValidity('');
                }
            }

            ps.onChange = validatePsw;
            psnew.onkeyup = validatePsw;
        </script>