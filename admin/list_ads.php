<?php

include('header.php');

require_once('../include/config.inc.php');

if(isset($_GET['id'])){
    $sql = 'DELETE FROM ads WHERE id='.$_GET['id'];
    if($db->execute_dml($sql)){echo '<script> window.location.href="list_ads.php"; </script>';}
}

$sql='SELECT * FROM ads';
$data=$db->execute_dql($sql);

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Picture List</li>
</ul>
    
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Picture Address</td>
                    <td>Operation</td>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($data)){foreach($data as $item){?>
                <tr>
                    <td><?php echo $item['title'];?></td>
                    <td>
                        <a target="_blank" href="<?php if(!empty($item['thumb'])){ echo '../'.$item['thumb'];}else{?>images/default.png<?php }?>"><img class="thumbContent" src="<?php if(!empty($item['thumb'])){ echo '../'.$item['thumb'];}else{?>images/default.png<?php }?>" />
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-default btn-xs" target="_self" href="edit_ads.php?id=<?php echo $item['id'];?>">Modify</a>
                        <a class="btn btn-default btn-xs mybb" href="list_ads.php?id=<?php echo $item['id'];?>">Cancel</a>
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