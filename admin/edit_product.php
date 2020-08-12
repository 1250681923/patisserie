<?php
session_start();
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>头部</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">
<div class="bigTitle2">添加商品</div>
<?php
  $id=$_GET["id"];
	$query=mysql_query("select * from product where product_id='$id'");
	$rs=mysql_fetch_assoc($query);

  ?>
<form action="save_product.php?act=edit" method="post" name="form10">
<input type="hidden" name="id" value="<?php echo $id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th>名称：</th>
        <td><input name="name" type="text" id="name" value="<?php echo $rs["name"]?>" required placeholder="请输入产品名称"></td>
      </tr>
      <tr>
        <th>分类：</th>
        <td><span class="text12">
          <select name="category">
            <?php
$cx=mysql_query("select * from category");
				while($rst=mysql_fetch_array($cx))
				{
				?>
            <option  value="<?php echo $rst["c_id"]?>" <?php if($rst["c_id"]==$rs["c_id"]) echo "selected"?>>
            <?php echo $rst["category"]?>
            </option>
            <?php
			  }
			mysql_free_result($cx);
			?>
          </select>
        </span></td>
      </tr>
      <tr>
        <th>口味：</th>
        <td><span class="text12">
          <select name="taste">
            <?php
$cx=mysql_query("select * from taste");
				while($rst=mysql_fetch_array($cx))
				{
				?>
            <option  value="<?php echo $rst["t_id"]?>" <?php if($rst["c_id"]==$rs["t_id"]) echo "selected"?>>
            <?php echo $rst["taste"]?>
            </option>
            <?php
			  }
			mysql_free_result($cx);
			?>
          </select>
        </span></td>
      </tr>
      <tr>
        <th width="150">价格：</th>
<td><input name="price" type="text" id="price" size="12" value="<?php echo $rs["price"]?>" required placeholder="请输入价格">
  元</td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><script charset="utf-8" src="kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : 'kindeditor/plugins/code/prettify.css',
				uploadJson : 'kindeditor/php/upload_json.php',
				fileManagerJson : 'kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterBlur : function() {
this.sync();
K.ctrl(document, 13, function() {
K('form[name=form10]')[0].submit();
});
K.ctrl(this.edit.doc, 13, function() {
K('form[name=form10]')[0].submit();
});
}
			});
			prettyPrint();
		});
	</script>
     <textarea name="content" display="none" style="width:500px;height:300px;"><?php echo $rs["content"]?></textarea>      </td>
      </tr>
      <tr>
        <th>图片地址：</th>
 <td><input name="pic" type="text" id="pic" value="<?php echo $rs["pic"]?>" required placeholder="请上传图片"></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><iframe border="0" frameBorder="0" frameSpacing="0" height="21" marginHeight="0" marginWidth="0" noResize scrolling="no" width="100%" vspale="0" src="up.php"></iframe></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="提交" class="submit"/></td>
      </tr>
    </table>
  </form>




  </div>

</body>
</html>