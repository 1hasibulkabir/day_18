<?php include 'header.php' ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Registration Form</div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="full_name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="mobile"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Subject</label>
                                <div class="col-md-9">
                                   <label><input type="checkbox" name="subject[]" value="Bangla"> Bangla</label>
                                   <label><input type="checkbox" name="subject[]" value="English"> English</label>
                                   <label><input type="checkbox" name="subject[]" value="Math"> Math</label>
                                   <label><input type="checkbox" name="subject[]" value="Physics"> Physics</label>
                                   <label><input type="checkbox" name="subject[]" value="Chemistry"> Chemistry</label>
                                   <label><input type="checkbox" name="subject[]" value="Biology"> Biology</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"> </label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="register_btn" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>


