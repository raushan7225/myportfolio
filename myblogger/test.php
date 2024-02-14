

<button id="shown">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, laborum rerum explicabo minus at voluptatum ea beatae molestias labore quod sint blanditiis excepturi atque! Explicabo animi quae doloremque neque fuga.</button>
<button id="hiden">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, laborum rerum explicabo minus at voluptatum ea beatae molestias labore quod sint blanditiis excepturi atque! Explicabo animi quae doloremque neque fuga.</button>



<script>
    $(document).ready(function() {
        $("#shown").click(function() {
            $(".mobilenav").show(200);
        });
    });

    $(document).ready(function() {
        $("#hiden").click(function() {
            $(".mobilenav").hide(200);
        });
    });
</script>