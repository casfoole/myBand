<div id="margin">
<nav class="wrap">
    <ul>

        <li><a id="menuhome" href="?url=home">Home</a></li>
        <li><a id="menumusic" href="?url=articles">Music</a></li>
        <li><a id="menuschema" href="?url=tourschema">Tours</a></li>
        <li><a id="menuabout" href="?url=about">About</a></li>

    </ul>
</div>
        {if $smarty.get.url==home}
            <script>
                document.getElementById("menuhome").style.textDecoration = "line-through"
            </script>
        {elseif $smarty.get.url==articles}
            <script>
                document.getElementById("menumusic").style.textDecoration = "line-through"
            </script>
        {elseif $smarty.get.url==about}
            <script>
                document.getElementById("menuabout").style.textDecoration = "line-through"
            </script>
        {elseif $smarty.get.url==tourschema}
            <script>
                document.getElementById("menuschema").style.textDecoration = "line-through"
            </script>
        {/if}


            </nav>
