<script>
    function ajaxCard(prodCode, prodName, prodImage, prodPrice){
        $.ajax({
            type: "POST",
            url: "./Controller/ajax-card.php",
            data: "code=" + prodCode + "&name=" + prodName + "&img=" + prodImage + "&price=" + prodPrice,
            success: function(data){
                $("#modal-body").html(data);
            },
            error: function(data){
                alert('An error occured. So... Go away. We\'ll fix it at some point.');
            },
        });
    }
</script>