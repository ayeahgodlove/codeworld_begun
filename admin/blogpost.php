
<div  class="page" style="color:cornsilk">
    <form method="post" action="admin/controllerPost.php" enctype="multipart/form-data">
        <h3 style="text-align:center;">Add New Post</h3>
        <hr>
        <label >TITLE*</label><br>
       <input  type="text" name="title" placeholder="title" /><br>
       <label >AUTHOR*</label><br>
       <input type="text" name="author" placeholder="written by"/> <br>
       <label>ARTICLE*</label><br>
        <textarea  id="message" type="text" name="article" placeholder="message" ></textarea><br>
       <label >LINK*</label><br>
       <input type="text" name="link" placeholder="LINK" /><br>
       <label >Select Image*</label><br>
       <input class="input-lg" type="file" name="avatar"  /><br>
       <input  class="btn-primary" type="submit" name="post" value="POST"> 
    </form>
    <hr>
    
</div>
