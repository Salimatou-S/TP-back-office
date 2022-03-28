<?php include("view/layout/meta.inc.php"); ?>
<?php include("view/layout/nav.inc.php"); ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?=$title ?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th><?='comment_ID'; ?></th>
                                            <th><?='comment_post_ID'; ?></th>
                                            <th><?='comment_author'; ?></th>
                                            <th><?='comment_date'; ?></th>
                                            <th><?='comment_content'; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 
                                            <?php foreach($data as $onedata){ ?> 
                                             <tr>
                                            <td><?=$onedata['comment_ID']; ?></td>
                                            <td><?=$onedata['comment_post_ID']; ?></td>
                                            <td><?=$onedata['comment_author']; ?></td>
                                            <td><?=$onedata['comment_date']; ?></td>
                                            <td><?=$onedata['comment_content']; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                                                


                    </div>
                </main>

<?php include("view/layout/footer.inc.php"); ?>