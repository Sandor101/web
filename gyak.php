<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Array add</title> 
</head> 
<body> 
    <form action="rendeles.php" method="post"></form>
    <div id="shopping">
        </div>
         
        <button onclick='add2array("Apple")'> Apple </button> 
        <button onclick='add2array("Mango")'> Mango </button>  
        <button onclick='add2array("Bread")'> Bread </button> 
        <button onclick='add2array("Shampoo")'> Shampoo </button> 
        <br>

    <script> 
        const shoppingList = []; 
        function add2array(item) {   
            shoppingList.push(item);
            const div  = document.getElementById('shopping');
            div.innerHTML = shoppingList.join('<br>');
        }
    </script> 
</body> 
</html> 