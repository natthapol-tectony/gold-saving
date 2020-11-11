<form name="yourform" id="yourform" method="POST" action="yourpage.html">
    <input type=hidden name="data" value="yourdata">
    <input type="submit" id="send" name="send" value="Send">
</form>
<script>            
    document.addEventListener("DOMContentLoaded", function(event) {
            document.createElement('form').submit.call(document.getElementById('yourform'));
            });         
</script>