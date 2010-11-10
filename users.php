<?php
$pageid = "users";
require_once('header_inc.php');
require_once('includes/header.php');
?>
	<div id="page_wrap">
		<div id="online_wrap">
					<h1>Who's Online</h1>
					<span id="online"></span>
				</div>
				<div id="inventory_wrap" style="display:none;">
					<h1><span id="user"></span>'s Inventory</h1>
					<div class="give_link"><span style="float:left;text-align:left;margin-top:10px;"><a href="javascript:clear_inv();" class="link_give">&lsaquo; Clear Inventory &rsaquo;</a></span><span style="float:right;text-align:right;"><label><span>Item Name</span><input type="text" id="item_complete" /></label> <label><span>Amount</span><input type="text" id="item_amount" /></label> <a href="javascript:give_item();" class="link_give">&lsaquo; Give Item &rsaquo;</a></span></div>
					<div class="back_link"><a href="javascript:hide_inv();" class="link_hide">&lsaquo;&lsaquo; Go Back</a></div>
					<span id="inventory"></span>
					<div class="back_link"><a href="javascript:hide_inv();" class="link_hide">&lsaquo;&lsaquo; Go Back</a></div>
				</div>
			</div>
			<hr />
			<h1>User List</h1>
                        <div class="give_link"><span style="height:19px;float:left;text-align:left;margin-top:10px;"><a href="add_user.php" class="link_give fancy">&lsaquo; Add &rsaquo;</a></span></div>
			<span id="online">
                            <ul>
                                    <li class="build" style="width:70px;">UserID</li>
                                    <li class="name" style="text-align:left;">Name</li>
                                    <li class="hand" style="width:70px;">Group</li>
                                    <li class="ip">IP Address</li>
                                    <li class="build" style="width:70px;">Admin</li>
                                    <li class="world" style="width:70px;">Modify</li>
                                    <li class="build" style="width:70px;">Ignore</li>
                                    <li class="actions" style="width:180px;"></li>
                            </ul>
                            <?php
                            foreach($minecraft->user_list() as $user){
                                ?>
                                <div>
                                    <ul>
                                            <li class="build" style="width:70px;"><?php echo $user['id'];?></li>
                                            <li class="name" style="text-align:left;"><?php echo $user['name'];?></li>
                                            <li class="hand" style="width:70px;"><?php echo $user['groups'];?></li>
                                            <li class="ip"><?php echo ($user['ip']==""? "<u>Not Set</u>": $user['ip']);?></li>
                                            <li class="hand" style="width:70px;"><?php if($user['admin']){ echo "<img src=\"images/icon-checkmark.png\" />"; }else{ echo "<img src=\"images/toolbar-icon-delete.png\" />"; };?></li>
                                            <li class="world" style="width:70px;"><?php if($user['canmodifyworld']){ echo "<img src=\"images/icon-checkmark.png\" />"; }else{ echo "<img src=\"images/toolbar-icon-delete.png\" />"; };?></li>
                                            <li class="hand"><?php if($user['ignoresrestrictions']){ echo "<img src=\"images/icon-checkmark.png\" title=\"Ignoring restriction\" />"; }else{ echo "<img src=\"images/toolbar-icon-delete.png\" title=\"restriction in place for this user\" />"; };?></li>
                                            <li class="actions" style="width:180px;"><a class="fancy" href="edit_user.php?uid=<?php echo $user['id'];?>">&lsaquo; edit &rsaquo;</a> <a class="fancy" href="user_commands.php?uid=<?php echo $user['id'];?>">&lsaquo; clist &rsaquo;</a> <a href="javascript:delete_user('<?php echo $user['name'];?>','<?php echo $user['id'];?>');">&lsaquo; delete &rsaquo;</a></li>
                                    </ul>
                                </div>
                                <?PHP
                            }
                            ?>
                        </span>
		</div>
	</div>
        <script type="text/javascript">
		$("body").ready(function(){
			$(".fancy").fancybox();
		});
		$("body").ready(function(){
			get_player_list();
		});
	</script> 
<?php require_once('includes/footer.php'); ?>