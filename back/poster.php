<div class="rb tab" style="width:98%">
  <h3 class="ct" style="margin:0">預告片清單</h3>
  <div class="ct" style="width:100%;display:flex">
    <div style="width:25%;background:#999;margin:0 2px">預告片海報</div>
    <div style="width:25%;background:#999;margin:0 2px">預告片片名</div>
    <div style="width:25%;background:#999;margin:0 2px">預告片排序</div>
    <div style="width:25%;background:#999;margin:0 2px">操作</div>
  </div>
  <div style="width:100%;height:200px;overflow:auto">
    <!--  -->
  </div>
  <div class="ct">
    <input type="submit" value="編輯確定"><input type="reset" value="重置">
  </div>
  <hr>
  <h3 class="ct" style="margin:0">新增預告片海報</h3>
  <form action="api/add_poster.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>預告片海報：</td>
        <td><input type="file" name="poster" id=""></td>
      </tr>
      <tr>
        <td>預告片片名：</td>
        <td><input type="text" name="name" id=""></td>
      </tr>
    </table>
    <div class="ct">
    <input type="submit" value="新增"><input type="reset" value="重置">
  </div>
  </form>














</div>