<?php

include('header.php');

require_once('../include/config.inc.php');

if(isset($_GET['id'])){
    $sql = 'DELETE FROM messages WHERE id='.$_GET['id'];
    if ($db->execute_dml($sql)){echo '<script> window.location.href="my_message.php"; </script>';}
}

$sql = 'SELECT * FROM messages WHERE uid='.$_SESSION['userid'].' ORDER BY id DESC ';
$data = $db->execute_dql($sql);

?>

<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Message content</th>
                    <th>Time</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($data)){foreach($data as $item){?>
                <tr>
                    <td><?php echo $item['content'];?></td>
                    <td><?php echo todate($item['created']);?></td>
                    <td>
                        <a class="btn btn-default btn-xs" target="_self" href="edit_message.php?id=<?php echo $item['id'];?>">Modify</a>
                        <a class="btn btn-default btn-xs mybb" href="my_message.php?id=<?php echo $item['id'];?>">Delete</a>
                    </td>
                </tr>
            <?php }}else{?>
                <tr>
                    <td colspan='5' align="center"><span class="text-danger">There is currently no data</span></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>

<div id="modal" class="modal fade">
    <div class="modal-body">
        <div class="alert alert-danger">Your current operation is unrecoverable. Are you sure you want to do this?</div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-danger" id="deleteBtn" href="">Yes</a>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    </div>
</div>

<?php include('footer.php');?>

<script type="text/javascript">
    $("a.mybb").click(function(e){
        e.preventDefault();
        var href = $(this).attr("href");
        $("#modal").modal();
        $("#deleteBtn").attr("href",href);
    });
</script>