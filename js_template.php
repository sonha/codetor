<?php
/**
 * Created by PhpStorm.
 * User: Ha Anh Son
 * Date: 04/11/2014
 * Time: 10:09 SA
 */?>
<script src='src/ace.js'></script>
<script src="emmet-core/emmet.js"></script>
<!-- load ace -->
<!-- load ace emmet extension -->
<script src="src/ext-emmet.js"></script>

<script type="text/javascript">
    var $ = document.getElementById.bind(document);
    var dom = require("ace/lib/dom");

    var commands = require("ace/commands/default_commands").commands;
    commands.push({
        name: "Toggle Fullscreen",
        bindKey: "F11",
        exec: function(editor) {
    dom.toggleCssClass(document.body, "fullScreen")
            dom.toggleCssClass(editor.container, "fullScreen")
            editor.resize()
        }
    });
    commands.push({
        name: "Submit",
        bindKey: "F9",
        exec: function(editor) {
    jQuery('#submit-form').trigger('click');
}
    })
    var editor = ace.edit("editor");
    editor.setFontSize('15px');
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/php");
    editor.setOption("enableEmmet", true);

    jQuery('#submit-form').click(function() {
        jQuery("textarea[name='source']").text(editor.getValue());
        jQuery(this).closest('form').submit();
    })
    function autoResize(id){
        var newheight;
        var newwidth;

        if(document.getElementById){
            newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
            newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
        }

        document.getElementById(id).height= (newheight) + "px";
        document.getElementById(id).width= (newwidth) + "px";
    }

    script=document.createElement('script'); script.type = 'text/javascript';
    script.src='jquery-1.8.3.min.js';

    angular=document.createElement('script'); angular.type = 'text/javascript';
    angular.src='angular.min.js';

    jQuery("#use-jquery").click(function() {
        editor.insert(script.outerHTML);
    })
    jQuery("#use-angular").click(function() {
        editor.insert(angular.outerHTML);
    })
    </script>