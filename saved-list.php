<!DOCTYPE html>
<html lang="en">
<?php
include_once 'head.php';
?>

<body class="app">
<header class="app-header fixed-top">
    <?php
    include_once 'nav.php';
    ?>
</header>

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Saved Lists</h1>
            <div class="mb-3 text-end">
                <button class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#add-list-modal">
                    + Add List
                </button>
            </div>
            <div class="app-card shadow-sm mb-4 border-left-decoration">
                <div class="inner">
                    <div class="app-card-body p-4">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>List Name</th>
                                    <th>Contacts</th>
                                    <th>Created Date</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>List 1</td>
                                    <td>300</td>
                                    <td>12/1/2023</td>
                                    <td>
                                        <button class="btn py-1 px-2 btn-danger text-white">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <button class="btn btn-sm py-1 px-2 btn-primary text-white">
                                            <i class="fa fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--//container-fluid-->
    </div><!--//app-content-->

</div><!--//app-wrapper-->

<!--Add List Modal-->
<div class="modal fade" id="add-list-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="list-name">List Name</label>
                        <input type="text" class="form-control" id="list-name" name="list-name">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Javascript -->
<script src="assets/plugins/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Charts JS -->
<script src="assets/plugins/chart.js/chart.min.js"></script>
<script src="assets/js/index-charts.js"></script>

<!-- Page Specific JS -->
<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

</body>
</html>

