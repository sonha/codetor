<?php
include('header_template.php');
?>
<body style="background-color:#e5eecc;margin: 0;" cz-shortcut-listen="true">
<div id='content'>
    <?php
    if (!empty($_POST)){
        $filename = 'tryit.php';
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
            echo "<div class='headerText1'>Success, wrote to file ($filename)</div>";
            fclose($handle);
        } else {
            echo "The file $filename is not writable";
        }
    }
    ?>
    <?php
    if(empty($_POST)) {
        if(isset($_GET['source']) && $_GET['source'] == 'php') {
            $source = file_get_contents('php_template.php');
        } else {
            $source = file_get_contents('html_template.php');
        }
    } else {
        $source = file_get_contents('tryit.php');
    }
    ?>
    <div id="sourcecode">
        <form method='post'>
<!--                <input type='submit'  id='submit-form' value="Submit»">-->
            <button type="submit" id='submit-form' class="btn btn-success">Let's Run</button>
            <pre id='editor' ><?php echo htmlspecialchars($source)?></pre><br/>
            <textarea name='source' class='textarea-hidden' ></textarea>
        </form>
    </div>
    <div id="result">
        <?php
        include('all_link_template.php');
        ?>
        <iframe src='tryit.php' onLoad="autoResize('iframeResult');" id="iframeResult" class="result_output" frameborder="0" name="view" src="" width="400"></iframe>
    </div>
    <div style="clear:both;"></div>
</div>
<?php
include('js_template.php');
?>
</body>
</html>
