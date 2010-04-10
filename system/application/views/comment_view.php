<html>
            <body>
            <?
                  foreach ($data1 as $row1)
                  {
                    echo "<h1> ".$row1-> title."</h1> ";
                    echo "<p> ".$row1-> body."</p> <hr/> ";
                  }
                  foreach ($data2 as $row2)
                  {
                    echo "<h4> ".$row2-> author."</h4> ";
                    echo "<p> ".$row2-> body."</p> <hr/> ";
                  }

      echo anchor('','Back');
                  echo "<h1> Post</h1> ";
                  echo form_open('welcome/comment_add'); // ърър  урфюёЄ№ - ЁрчюЁтрээ√х Єхуш!
                  echo form_hidden('record_id', $this-> uri-> segment(3));

?>
                  <div> <input type="text" id="author" name="author" value="Name"/> </div>
                  <div> <textarea name="body" id="comment_body" rows="10" cols="40"> Comment</textarea> </div>
                  <input type="submit" value="Submit Comment" />
            <?
                  echo form_close();

?>
            </body>
            </html>  