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
                                <?=$title ?>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th><?='post_ID'; ?></th>
                                            <th><?='post_author'; ?></th>
                                            <th><?='post_category'; ?></th>
                                            <th><?='post_date'; ?></th>
                                            <th><?='post_content'; ?></th>
                                            <th><?='post_img_url'; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 
                                            <?php foreach($data as $onedata){ ?> 
                                             <tr>
                                            <td><?=$onedata['post_ID']; ?></td>
                                            <td><?=$onedata['post_author']; ?></td>
                                            <td><?=$onedata['post_category']; ?></td>
                                            <td><?=$onedata['post_date']; ?></td>
                                            <td><?=$onedata['post_content']; ?>...</td>
                                            <td><?=$onedata['post_img_url']; ?></td>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                                                


                    </div>
                </main>

<?php include("view/layout/footer.inc.php"); ?>