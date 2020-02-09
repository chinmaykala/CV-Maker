<style>
        body {
            overflow-y: overlay;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            background: transparent;
            border-radius: 24px;
            height: 8px;
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-image: -webkit-linear-gradient(#ffffff, #5152DE, #5A5AE0, #7E5FC7, #AE6CAC, #EF8792, #DC7A91, #CB739C, #AE6CAC, #7E5FC7, #5A5AE0, #5152DE, #ffffff);
            border-radius: 24px;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }
    </style>
    <script language="JavaScript">
        window.onload = function() {
            document.addEventListener("contextmenu", function(e) {
                e.preventDefault();
            }, false);
            document.addEventListener("keydown", function(e) {
                document.onkeydown = function(e) {
                if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                    disabledEvent(e);
                }
                if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                    disabledEvent(e);
                }
                if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                    disabledEvent(e);
                }
                if (e.ctrlKey && e.keyCode == 85) {
                    disabledEvent(e);
                }
                if (event.keyCode == 123) {
                    disabledEvent(e);
                }
            }}, false);

            function disabledEvent(e) {
                if (e.stopPropagation) {
                    e.stopPropagation();
                } else if (window.event) {
                    window.event.cancelBubble = true;
                }
                e.preventDefault();
                return false;
            }
        };
    </script>