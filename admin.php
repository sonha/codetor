<?php
include('header_template.php');
?>
<body style="background-color:#e5eecc;margin: 0;" cz-shortcut-listen="true">
<div id='content'>
    <?php
    if (!empty($_POST)) {
        if ($_POST['file_name']) {
            $txt_filename = $_POST['file_name'];
        } else {
            $txt_filename = 'noname';
        }
        $mode = ($txt_filename == 'noname') ? "w" : "x+";
        $fp = fopen("demo/" . $txt_filename . ".php", $mode);
        $filename = "demo/" . $txt_filename . ".php";
        $filename_try = 'tryit.php';
        $source = $_POST['source'];
        if (is_writable($filename)) {
            if (!$handle = fopen($filename, 'w')) {
                echo "Cannot open file ($filename)";
                exit;
            }
            if (fwrite($handle, $source) === FALSE) {
                echo "Cannot write to file ($filename)";
                exit;
            }
            $writable = true;
            fclose($handle);
        } else {
            echo "The file $filename is not writable";
        }
        if (is_writable($filename_try)) {
            if (!$handle_try = fopen($filename_try, 'w')) {
                echo "Cannot open file ($filename_try)";
                exit;
            }
            if (fwrite($handle_try, $source) === FALSE) {
                echo "Cannot write to file ($filename_try)";
                exit;
            }
            $writable = true;
            fclose($handle_try);
        } else {
            echo "The file $filename_try is not writable";
        }
        if($writable) {
            echo "<div class='headerText1'>Success, wrote to file ($filename) and ($filename_try)</div>";
        }
    }
    $directory = "demo/";
    $texts = glob($directory . "*.php");//get all text files with a .txt extension.
    $name_arr = array();//print each file name
	$file_name_save = '';
	$file_name_load = '';
    foreach($texts as $text)
    {
        $temp = explode('/',$text);
        $name_arr[] = $temp[1];
    }
    if (empty($_POST)) {
        if(!empty($_GET['file_name_load'])) {
            $file_name_load = $_GET['file_name_load'];
            $file_name_explode = (explode('.',$file_name_load));
            $file_name_save = $file_name_explode[0];
            $source = file_get_contents("demo/$file_name_load");
            $src_ifr = 'demo/'.$file_name_load;
        } else {
            $source = file_get_contents('tryit.php');
            $src_ifr = 'tryit.php';
        }
    } else {
        $source = file_get_contents("demo/$txt_filename.php");
        $src_ifr = 'tryit.php';
    }
    ?>
    <div id="sourcecode">
        <div class="headerText"></div>
        <form method='post'>
                <button type="submit" id='submit-form' class="btn btn-success">Let's Run</button>
                <input type="text" name="file_name" value="<?php echo isset($txt_filename) ? $txt_filename : $file_name_save?>"/>
                <select name="category_tut">
                    <option value="php_directory">PHP</option>
                    <option value="js_directory">Javascript</option>
                    <option value="angular_directory">AngularJS</option>
                    <option value="jquery_directory">jQuery</option>
                    <option value="css_directory">CSS</option>
                </select>
                <select name="file_name_load" id="" onchange="window.location.href='http://localhost/codetor/admin.php?file_name_load='+this.value">
                    <option value="" selected><?php echo $file_name_load;?></option>
                    <?php foreach($name_arr as $key){ ?>
                        <option value="<?php echo $key;?>"><?php echo $key;?></option>
                    <?php } ?>
                </select>
            <pre id='editor'><?php echo htmlspecialchars($source) ?></pre>
            <br/>
            <textarea name='source' class='textarea-hidden'></textarea>
        </form>
    </div>

    <div id="result">
        <?php
        include('all_link_template.php');
        ?>
        <iframe src='<?php echo $src_ifr;?>' onLoad="autoResize('iframeResult');" id="iframeResult" class="result_output"
                frameborder="0" name="view" src="" width="400"></iframe>
    </div>
    <div style="clear:both;"></div>
</div>
<?php
include('js_template.php');
?>
</body>
</html>
